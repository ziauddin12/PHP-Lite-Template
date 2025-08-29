<?php
require_once 'includes/component-loader.php';

/**
 * Automatisches Setup-System für PHP Lite Template
 * Erkennt benötigte Sektionen und fügt sie automatisch hinzu
 */

class SectionSetup {
    
    private static $fullTemplatePath = 'full-template/';
    private static $logFile = 'setup.log';
    
    /**
     * Hauptfunktion für Setup-Prozess
     */
    public static function setupProject($userInput) {
        self::log("🚀 Starte automatisches Setup...");
        self::log("📝 User Input: " . $userInput);
        
        // Erkenne benötigte Sektionen
        $detectedSections = ComponentLoader::detectRequiredSections($userInput);
        
        if (empty($detectedSections)) {
            self::log("ℹ️  Keine spezifischen Sektionen erkannt. Basis-Template bleibt minimal.");
            echo "ℹ️  Keine spezifischen Sektionen erkannt.\n";
            echo "💡 Tipp: Verwende Begriffe wie 'hero', 'preise', 'über uns', 'kontakt' etc.\n";
			 // Update .htaccess für neue Routen
			 $section = [];
             self::updateRoutes($section);
            return;
        }
        
        $sectionNames = array_map(function($s) { return $s['data']['name']; }, $detectedSections);
        self::log("✅ Erkannte Sektionen: " . implode(', ', $sectionNames));
        echo "🔍 Erkannte Sektionen: " . implode(', ', $sectionNames) . "\n";
        
        // Prüfe ob Full-Template verfügbar ist
        if (!is_dir(self::$fullTemplatePath)) {
            self::log("❌ Full-Template nicht gefunden: " . self::$fullTemplatePath);
            echo "❌ Fehler: Full-Template nicht gefunden!\n";
            echo "💡 Stelle sicher, dass 'full-template' im gleichen Verzeichnis liegt.\n";
            return;
        }
        
        // Kopiere Sektionen von Full-Template
        $addedSections = self::copySectionsFromFull($detectedSections);
        
        if (empty($addedSections)) {
			self::log("❌ no section found");
            echo "⚠️  Keine Sektionen konnten hinzugefügt werden.\n";
            return;
        }
        
		// Update AI_RULES.md
        self::updateAIRules($addedSections);
        
        // Update .htaccess für neue Routen
        self::updateRoutes($addedSections);
		
        // Erstelle Demo-Seiten
        $demoPages = self::createDemoPages($addedSections);
        
        
        
        // Erstelle Nutzungsbeispiele
        self::createUsageExamples($addedSections);
        
        // Zusammenfassung ausgeben
        echo "\n🎉 Setup erfolgreich abgeschlossen!\n";
        echo "📦 Hinzugefügte Sektionen:\n";
        foreach ($addedSections as $section) {
            echo "   ✅ {$section['name']} ({$section['componentCount']} Varianten)\n";
        }
        
        echo "\n📄 Erstelte Demo-Seiten:\n";
        foreach ($demoPages as $page) {
            echo "   🔗 $page\n";
        }
        
        echo "\n🚀 Nächste Schritte:\n";
        echo "   1. Starte den Dev-Server: php -S localhost:8000 -t public/\n";
        echo "   2. Öffne http://localhost:8000 in deinem Browser\n";
        echo "   3. Erkunde die Demo-Seiten für Inspiration\n";
        echo "   4. Beginne mit der Anpassung in public/index.php\n";
        
        self::log("🎉 Setup erfolgreich abgeschlossen!");
    }
    
    /**
     * Kopiert Sektionen vom Full-Template
     */
    private static function copySectionsFromFull($detectedSections) {
        $addedSections = [];
        
        foreach ($detectedSections as $section) {
            $sectionId = $section['id'];
            $sectionData = $section['data'];
            
            self::log("📁 Kopiere Sektion: {$sectionData['name']}");
            
            // Kopiere Komponenten-Ordner
            $sourceDir = self::$fullTemplatePath . $sectionData['files']['components'];
            $targetDir = $sectionData['files']['components'];
            
            if (is_dir($sourceDir)) {
                if (self::copyDirectory($sourceDir, $targetDir)) {
                    $addedSections[] = $sectionData;
                    self::log("✅ Erfolgreich kopiert: {$sectionData['name']}");
                    echo "📁 Kopiert: {$sectionData['name']}\n";
                } else {
                    self::log("❌ Fehler beim Kopieren: {$sectionData['name']}");
                    echo "❌ Fehler beim Kopieren: {$sectionData['name']}\n";
                }
            } else {
                self::log("⚠️  Quell-Ordner nicht gefunden: $sourceDir");
                echo "⚠️  Quell-Ordner nicht gefunden: {$sectionData['name']}\n";
            }
        }
        
        return $addedSections;
    }
    
    /**
     * Erstellt Demo-Seiten für alle Sektionen
     */
    private static function createDemoPages($sections) {
        $createdPages = [];
        
		$baseDir = __DIR__; // Directory where this PHP file is located
       // $pagesDir = $baseDir . '/pages';
        // Erstelle pages-Ordner falls nicht vorhanden
        if (!is_dir('pages')) {
            mkdir('pages', 0755, true);
        }
        
        foreach ($sections as $section) {
            $demoPath = $baseDir . '/' . $section['files']['demo'];
            $demoDir = dirname($demoPath);
            
            if (!is_dir($demoDir)) {
                mkdir($demoDir, 0755, true);
            }
            
            $demoContent = self::generateDemoPage($section);
            
            if (file_put_contents($demoPath, $demoContent)) {
                $createdPages[] = $demoPath;
                self::log("📄 Demo-Seite erstellt: $demoPath");
                echo "📄 Demo erstellt: $demoPath\n";
            } else {
                self::log("❌ Fehler beim Erstellen der Demo-Seite: $demoPath");
            }
        }
        
        return $createdPages;
    }
    
    /**
     * Generiert Demo-Seite für eine Sektion
     */
    private static function generateDemoPage($section) {
        $sectionName = $section['name'];
        $sectionId = strtolower(str_replace(['/', ' '], ['', '_'], $section['files']['components']));
        $categories = $section['categories'];
        
        $categoryList = '';
        foreach ($categories as $i => $category) {
            $categoryList .= "            '$category'";
            if ($i < count($categories) - 1) $categoryList .= ",\n";
        }
        
        return "<?php
require_once '../includes/config.php';
require_once '../{$section['files']['components']}index.php';
?>
<!DOCTYPE html>
<html lang='de' class='scroll-smooth'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>{$sectionName} - Demo | " . SITE_NAME . "</title>
    
    <!-- Fonts -->
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap' rel='stylesheet'>
    
    <!-- Tailwind CSS -->
    <script src='https://cdn.tailwindcss.com'></script>
    <link rel='stylesheet' href='" . asset('css/style.css') . "'>
    
    <!-- Custom Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'] },
                    colors: { primary: { 50: '#eff6ff', 500: '#3b82f6', 600: '#2563eb', 700: '#1d4ed8', 900: '#1e3a8a' } }
                }
            }
        }
    </script>
</head>
<body class='font-sans antialiased'>
    <!-- Navigation -->
    <nav class='fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-sm border-b border-gray-200'>
        <div class='container-custom'>
            <div class='flex items-center justify-between h-16'>
                <a href='../public/index.php' class='font-bold text-xl text-gray-900'>← Zurück</a>
                <div class='text-sm text-gray-600'>{$sectionName} Demo</div>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class='pt-16'>
        <!-- Header -->
        <section class='section-padding bg-gradient-to-r from-primary-50 to-blue-50'>
            <div class='container-custom text-center'>
                <h1 class='text-4xl lg:text-5xl font-bold text-gray-900 mb-4'>{$sectionName}</h1>
                <p class='text-xl text-gray-600 mb-8'>{$section['description']}</p>
                <div class='inline-flex items-center px-4 py-2 bg-primary-100 text-primary-700 rounded-full text-sm font-medium'>
                    {$section['componentCount']} Varianten verfügbar
                </div>
            </div>
        </section>
        
        <!-- Component Showcase -->
        <section class='section-padding'>
            <div class='container-custom'>
                <div class='space-y-24'>
                    <?php
                    \$categories = [
$categoryList
                    ];
                    
                    foreach (\$categories as \$i => \$category) {
                        echo \"<div class='border-t border-gray-200 pt-16 first:border-t-0 first:pt-0'>\";
                        echo \"<div class='text-center mb-12'>\";
                        echo \"<h2 class='text-3xl font-bold text-gray-900 mb-4'>{\$category}</h2>\";
                        echo \"<p class='text-gray-600'>Beispiel-Implementierung der {\$category} Komponente</p>\";
                        echo \"</div>\";
                        
                        // Hier würde die echte Komponente gerendert werden
                        echo \"<div class='bg-gray-50 rounded-2xl p-8 text-center'>\";
                        echo \"<div class='text-gray-500 text-lg'>{\$category} Komponente</div>\";
                        echo \"<div class='text-sm text-gray-400 mt-2'>Wird automatisch geladen wenn verfügbar</div>\";
                        echo \"</div>\";
                        
                        echo \"</div>\";
                    }
                    ?>
                </div>
            </div>
        </section>
        
        <!-- Usage Examples -->
        <section class='section-padding bg-gray-50'>
            <div class='container-custom'>
                <div class='text-center mb-12'>
                    <h2 class='text-3xl font-bold text-gray-900 mb-4'>Verwendung</h2>
                    <p class='text-gray-600'>So verwendest du diese Komponenten in deinem Code</p>
                </div>
                
                <div class='bg-white rounded-2xl shadow-lg p-8'>
                    <h3 class='text-xl font-semibold text-gray-900 mb-4'>PHP Code Beispiel:</h3>
                    <pre class='bg-gray-900 text-gray-100 p-6 rounded-xl overflow-x-auto text-sm'><code>&lt;?php
require_once '{$section['files']['components']}index.php';

// Basis-Verwendung
render{$categories[0]}();

// Mit spezifischer Variante
render{$categories[0]}('variant-name');

// Mit benutzerdefinierten Optionen
render{$categories[0]}('variant-name', [
    'title' => 'Benutzerdefinierter Titel',
    'subtitle' => 'Benutzerdefinierter Untertitel',
    'ctaText' => 'Benutzerdefinierter Button-Text'
]);
?&gt;</code></pre>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    <footer class='section-padding bg-gray-900 text-white'>
        <div class='container-custom text-center'>
            <p>&copy; 2025 " . SITE_NAME . " - Powered by Dyad</p>
        </div>
    </footer>
</body>
</html>";
    }
    
    /**
     * Aktualisiert AI_RULES.md mit neuen Komponenten
     */
    private static function updateAIRules($sections) {
        $aiRulesPath = 'AI_RULES.md';
        
        if (!file_exists($aiRulesPath)) {
            self::log("⚠️  AI_RULES.md nicht gefunden, erstelle neue Datei");
            $currentRules = "# Modern PHP Landing Pages Template - Lite\n\nAutomatically expanded with intelligent component loading.\n";
        } else {
            $currentRules = file_get_contents($aiRulesPath);
        }
        
        // Füge verfügbare Komponenten hinzu
        $additionalRules = "\n\n## 📦 Automatisch hinzugefügte Komponenten:\n\n";
        $additionalRules .= "*Generiert am " . date('Y-m-d H:i:s') . "*\n\n";
        
        foreach ($sections as $section) {
            $additionalRules .= "### {$section['name']}\n";
            $additionalRules .= "- **Pfad**: `{$section['files']['components']}`\n";
            $additionalRules .= "- **Komponenten**: {$section['componentCount']} Varianten\n";
            $additionalRules .= "- **Kategorien**: " . implode(", ", $section['categories']) . "\n";
            $additionalRules .= "- **Demo**: `{$section['files']['demo']}`\n";
            $additionalRules .= "- **Beschreibung**: {$section['description']}\n\n";
            
            $additionalRules .= "**Verwendung:**\n";
            $additionalRules .= "```php\n";
            $additionalRules .= "<?php\n";
            $additionalRules .= "require_once '{$section['files']['components']}index.php';\n";
            $additionalRules .= "// Verwende die Komponenten hier\n";
            $additionalRules .= "?>\n";
            $additionalRules .= "```\n\n";
        }
        
        if (file_put_contents($aiRulesPath, $currentRules . $additionalRules)) {
            self::log("📝 AI_RULES.md erfolgreich aktualisiert");
            echo "📝 AI_RULES.md aktualisiert\n";
        } else {
            self::log("❌ Fehler beim Aktualisieren von AI_RULES.md");
        }
    }
    
    /**
     * Erstellt Nutzungsbeispiele
     */
    private static function createUsageExamples($sections) {
        $examplePath = 'examples/';
        if (!is_dir($examplePath)) {
            mkdir($examplePath, 0755, true);
        }
        
        foreach ($sections as $section) {
            $fileName = strtolower(str_replace([' ', '/', '-'], ['_', '_', '_'], $section['name'])) . '_example.php';
            $filePath = $examplePath . $fileName;
            
            $exampleContent = self::generateUsageExample($section);
            
            if (file_put_contents($filePath, $exampleContent)) {
                self::log("📘 Beispiel erstellt: $filePath");
            }
        }
    }
    
   /**
     * Generiert Nutzungsbeispiel für eine Sektion
     */
    private static function generateUsageExample($section) {
        $name = $section['name'];
        $componentPath = $section['files']['components'];

        return <<<PHP
<?php
/**
 * Nutzungsbeispiel: {$name}
 *
 * Diese Datei zeigt, wie die {$name}-Komponenten
 * in deinem Projekt verwendet werden können.
 */

require_once __DIR__ . '/../{$componentPath}index.php';

// Beispiel 1: Basis-Verwendung
echo "<h2>Beispiel 1: Standard-Variante</h2>";
// Hier kannst du den Code für die Standardvariante einfügen

// Beispiel 2: Erweiterte Nutzung
echo "<h2>Beispiel 2: Erweiterte Nutzung</h2>";
// Hier kannst du erweiterten Beispielcode hinzufügen

?>
PHP;
    }
    
    /**
     * Aktualisiert Routen
     */
    private static function updateRoutes($sections) {
        // Erstelle .htaccess für bessere URLs
       // $htaccessContent = "RewriteEngine On\n\n";
      //  $htaccessContent .= "# Basis-Routen\n";
       // $htaccessContent .= "RewriteRule ^$ public/index.php [L]\n";
       // $htaccessContent .= "RewriteRule ^index/?$ public/index.php [L]\n\n";
        
        $htaccessContent .= "# Demo-Seiten\n";
		if(!empty($sections)){
        foreach ($sections as $section) {
            $route = trim($section['files']['route'], '/');
            $demoFile = str_replace('../', '', $section['files']['demo']);
            $htaccessContent .= "RewriteRule ^{$route}/?$ {$demoFile} [L]\n";
        }}
        
       // $htaccessContent .= "\n# Assets\n";
       // $htaccessContent .= "RewriteRule ^assets/(.*)$ public/assets/$1 [L]\n";
        
        if (file_put_contents('.htaccess', $htaccessContent)) {
            self::log("🔗 .htaccess erfolgreich erstellt");
        }
    }
    
    /**
     * Kopiert ein Verzeichnis rekursiv
     */
    private static function copyDirectory($source, $target) {
        if (!is_dir($source)) {
            return false;
        }
        
        if (!is_dir($target)) {
            if (!mkdir($target, 0755, true)) {
                return false;
            }
        }
        
        $files = scandir($source);
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                $sourcePath = $source . "/" . $file;
                $targetPath = $target . "/" . $file;
                
                if (is_dir($sourcePath)) {
                    if (!self::copyDirectory($sourcePath, $targetPath)) {
                        return false;
                    }
                } else {
                    if (!copy($sourcePath, $targetPath)) {
                        return false;
                    }
                }
            }
        }
        
        return true;
    }
    
    /**
     * Logging-Funktion
     */
    private static function log($message) {
        $timestamp = date('Y-m-d H:i:s');
        $logMessage = "[{$timestamp}] {$message}" . PHP_EOL;
        file_put_contents(self::$logFile, $logMessage, FILE_APPEND | LOCK_EX);
    }
}

// CLI Ausführung
if (php_sapi_name() === 'cli') {
    echo "\\n🚀 Dyad PHP Lite - Automatisches Setup\\n";
    echo "=====================================\\n\\n";
    
    if ($argc > 1) {
        $userInput = implode(' ', array_slice($argv, 1));
        SectionSetup::setupProject($userInput);
    } else {
        echo "Verwendung: php create_required_sections.php \\\"Beschreibung der gewünschten Seite\\\"\\n\\n";
        echo "Beispiele:\\n";
        echo "  php create_required_sections.php \\\"Ich brauche eine Hero-Sektion und Preispläne\\\"\\n";
        echo "  php create_required_sections.php \\\"Landing Page mit Über uns und Kontakt\\\"\\n";
        echo "  php create_required_sections.php \\\"Business Website mit Team und Testimonials\\\"\\n\\n";
    }
} else {
    // Web-Interface
    if ($_POST['user_input'] ?? false) {
        echo "<pre>";
        SectionSetup::setupProject($_POST['user_input']);
        echo "</pre>";
    } else {
		
		$sectionList = array(
    'Beschreibung der gewünschten Seite',
    'Ich brauche eine Hero-Sektion und Preispläne',
    'Landing Page mit Über uns und Kontakt',
    'Business Website mit Team und Testimonials',
    'Portfolio Seite für einen Fotografen',
    'Online-Shop für Mode und Accessoires',
    'Restaurant Website mit Menü und Reservierungsformular',
    'Eventseite mit Ticketverkauf',
    'Blog über Reisen und Lifestyle',
    'Fitnessstudio mit Kursplan und Mitgliedschaftsinfos',
    'Landing Page für App-Download',
    'Webseite für Immobilienangebote',
    'Online-Lernplattform mit Kursübersicht',
    'Musikband Website mit Tourdaten',
    'Friseursalon Seite mit Terminbuchung',
    'Kleine Agentur mit Services und Teamvorstellung',
    'Non-Profit Organisation mit Spendenbutton',
    'Fotogalerie für Künstler',
    'Technologie-Startup Präsentationsseite',
    'Landing Page mit E-Mail-Newsletter-Anmeldung',
    'Business-Consulting Website mit Kontaktformular',
    'Einfache Visitenkarte für Freiberufler',
    'Portfolio Seite für Webdesigner',
    'Hochzeitsplaner Website mit Galerie',
    'Online-Forum für Community',
    'Podcast Website mit Folgenübersicht',
    'Software Produktseite mit Preistabellen',
    'Fitness Coach Seite mit Blog und Buchung',
    'Einfache Info-Seite für ein Café',
    'Architekturbüro mit Projektgalerie',
    'Fotografie-Workshop Landing Page',
    'Landing Page für E-Book Download',
    'Personal Trainer Website mit Testimonials',
    'Seite für lokale Handwerker',
    'Automobil-Service Werkstatt Website',
    'Kunst- und Handwerksladen Online-Shop',
    'Startup Pitch Seite für Investoren',
    'Landing Page für eine Konferenz',
    'Gaming Community Portal',
    'Coaching Website mit Kursbuchung',
    'Online Magazin für Technik-News',
    'Portfolio für UX/UI Designer',
    'Webseite für einen Yoga-Lehrer',
    'Landing Page für Immobilienverkauf',
    'Community-Seite mit Blog und Forum',
    'Portfolio Seite mit Animationen',
    'Einfache Produktpräsentation',
    'Website für einen Fotografen mit Shop',
    'Landing Page für Lead-Generierung',
    'Musikfestival mit Line-Up und Tickets',
    'Blog für gesunde Ernährung'
);
		
		// Pick a random section description from the list
$randomDescription = $sectionList[array_rand($sectionList)];

// Run the setup with that description
SectionSetup::setupProject($randomDescription);
		
        ?>
        <!DOCTYPE html>
        <html lang="de">
        <head>
            <title>Dyad Setup</title>
            <script src="https://cdn.tailwindcss.com"></script>
        </head>
        <body class="bg-gray-100 p-8">
            <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
                <h1 class="text-3xl font-bold mb-6">🚀 Dyad Setup</h1>
                <form method="POST" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Beschreibe deine gewünschte Website:
                        </label>
                        <textarea name="user_input" rows="4" 
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="z.B. Ich brauche eine Hero-Sektion, Preispläne und eine Über uns Seite"></textarea>
                    </div>
                    <button type="submit" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors">
                        🔧 Setup starten
                    </button>
                </form>
            </div>
        </body>
        </html>
        <?php
    }
}
?>";
