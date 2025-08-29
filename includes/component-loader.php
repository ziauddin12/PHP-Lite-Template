<?php
/**
 * Intelligentes Komponenten-Lade-System für PHP Lite Template
 * Erkennt User-Anfragen und fügt entsprechende Sektionen automatisch hinzu
 */

class ComponentLoader {
    
    const AVAILABLE_SECTIONS = [
        'headers' => [
            'name' => 'Header/Navigation Sektionen',
            'description' => '12+ Header- und Navigation-Sektionen',
            'triggerWords' => ['header', 'navigation', 'nav', 'menu', 'kontakt', 'anmelden', 'login', 'auth', 'contact'],
            'componentCount' => 12,
            'categories' => ['HeaderWithContact', 'HeaderWithAuth', 'HeaderMinimal'],
            'files' => [
                'components' => 'components/ui/sections/headers/',
                'images' => 'headerImages',
                'demo' => 'pages/AllHeadersDemo.php',
                'route' => '/headers'
            ]
        ],
        'heroes' => [
            'name' => 'Hero/Deckblatt Sektionen',
            'description' => '32+ professionelle Hero-Sektionen für Landing Pages',
            'triggerWords' => ['hero', 'deckblatt', 'landing', 'header section', 'banner', 'hauptbereich', 'startseite'],
            'componentCount' => 32,
            'categories' => ['VideoHero', 'AuthorityHero', 'SplitHero', 'MinimalHero', 'CTAHero', 'StatsHero', 'BenefitFocused'],
            'files' => [
                'components' => 'components/ui/sections/heroes/',
                'images' => 'heroImages',
                'demo' => 'pages/AllHeroesDemo.php',
                'route' => '/heroes'
            ]
        ],
        'about' => [
            'name' => 'About/Über Uns Sektionen',
            'description' => '30+ About-Sektionen für Unternehmensdarstellung',
            'triggerWords' => ['about', 'über uns', 'company', 'team story', 'unternehmen', 'geschichte', 'mission'],
            'componentCount' => 30,
            'categories' => ['AboutCompanyHistory', 'AboutFounderStory', 'AboutCompanyValues', 'AboutTeamCulture', 'AboutPersonalIntro', 'AboutProcess', 'AboutBentoLayout'],
            'files' => [
                'components' => 'components/ui/sections/about/',
                'images' => 'aboutImages',
                'demo' => 'pages/AllAboutDemo.php',
                'route' => '/about'
            ]
        ],
        'products' => [
            'name' => 'Produkt/Service Sektionen',
            'description' => '23+ Produkt- und Service-Showcase-Sektionen',
            'triggerWords' => ['product', 'service', 'produkt', 'dienstleistung', 'angebot', 'leistung', 'shop', 'katalog'],
            'componentCount' => 23,
            'categories' => ['ProductShowcase', 'ProductConfigurator', 'ProductGrid', 'CourseOverview', 'ProductFeatures', 'ProductSchedule'],
            'files' => [
                'components' => 'components/ui/sections/products/',
                'images' => 'productImages',
                'demo' => 'pages/AllProductsDemo.php',
                'route' => '/products'
            ]
        ],
        'pricing' => [
            'name' => 'Preispläne Sektionen',
            'description' => '28+ Pricing- und Package-Sektionen',
            'triggerWords' => ['pricing', 'price', 'preise', 'pläne', 'packages', 'tarife', 'kosten', 'angebot'],
            'componentCount' => 28,
            'categories' => ['StandardPricingCards', 'SinglePlanPricing', 'ServiceBasedPricing', 'ComparisonTables', 'CustomLayoutPricing'],
            'files' => [
                'components' => 'components/ui/sections/pricing/',
                'images' => 'pricingImages',
                'demo' => 'pages/AllPricingDemo.php',
                'route' => '/pricing'
            ]
        ],
        'cta' => [
            'name' => 'CTA Sektionen',
            'description' => '26+ Call-to-Action Sektionen für Conversion',
            'triggerWords' => ['cta', 'call to action', 'contact', 'conversion', 'kontakt', 'aktion', 'handlungsaufruf'],
            'componentCount' => 26,
            'categories' => ['SimpleCTA', 'CountdownCTA', 'FeatureListCTA', 'MultiOptionCTA', 'ContactCTA', 'StatsCTA', 'ProblemSolutionCTA', 'PartnerCTA'],
            'files' => [
                'components' => 'components/ui/sections/cta/',
                'images' => 'ctaImages',
                'demo' => 'pages/AllCTADemo.php',
                'route' => '/cta'
            ]
        ],
        'benefits' => [
            'name' => 'Vorteile/Benefits Sektionen',
            'description' => '17+ Vorteils- und Feature-Sektionen',
            'triggerWords' => ['benefits', 'vorteile', 'advantages', 'features', 'nutzen', 'mehrwert', 'eigenschaften'],
            'componentCount' => 17,
            'categories' => ['SimpleBenefitsGrid', 'DetailedBenefitsShowcase', 'StickyBenefits', 'StatsIntegrationBenefits', 'MasonryBenefits', 'ProcessStepsBenefits', 'FeatureHighlights'],
            'files' => [
                'components' => 'components/ui/sections/benefits/',
                'images' => 'benefitsImages',
                'demo' => 'pages/AllBenefitsDemo.php',
                'route' => '/benefits'
            ]
        ],
        'team' => [
            'name' => 'Team Sektionen',
            'description' => '18+ Team- und Mitarbeiter-Sektionen',
            'triggerWords' => ['team', 'staff', 'mitarbeiter', 'crew', 'personal', 'mannschaft', 'kollegen'],
            'componentCount' => 18,
            'categories' => ['SimpleTeamGrid', 'ProfessionalTeamLayout', 'DetailedTeamProfiles', 'CompanyIntegratedTeams'],
            'files' => [
                'components' => 'components/ui/sections/team/',
                'images' => 'teamImages',
                'demo' => 'pages/AllTeamDemo.php',
                'route' => '/team'
            ]
        ],
        'testimonials' => [
            'name' => 'Testimonial Sektionen',
            'description' => '13+ Testimonial- und Review-Sektionen',
            'triggerWords' => ['testimonial', 'review', 'customer', 'feedback', 'bewertung', 'kundenstimme', 'referenz'],
            'componentCount' => 13,
            'categories' => ['SimpleTestimonials', 'FeaturedCustomerStories', 'VerifiedReviews', 'StarRatingTestimonials', 'CompanyLogoTestimonials', 'MasonryTestimonials', 'DetailedCaseStudies'],
            'files' => [
                'components' => 'components/ui/sections/testimonials/',
                'images' => 'testimonialImages',
                'demo' => 'pages/AllTestimonialsDemo.php',
                'route' => '/testimonials'
            ]
        ],
        'faq' => [
            'name' => 'FAQ Sektionen',
            'description' => '5+ FAQ- und Support-Sektionen',
            'triggerWords' => ['faq', 'questions', 'help', 'support', 'hilfe', 'fragen', 'antworten', 'process', 'event', 'product', 'numbered', 'minimal'],
            'componentCount' => 5,
            'categories' => ['BusinessProcessFAQ', 'EventConferenceFAQ', 'ProductServiceFAQ', 'NumberedFAQ', 'MinimalFAQ'],
            'files' => [
                'components' => 'components/ui/sections/faq/',
                'images' => 'faqImages',
                'demo' => 'pages/AllFAQDemo.php',
                'route' => '/faq'
            ]
        ],
        'footers' => [
            'name' => 'Footer Sektionen',
            'description' => '12+ Footer- und Kontakt-Sektionen',
            'triggerWords' => ['footer', 'fusszeile', 'bottom', 'contact info', 'kontakt', 'impressum', 'ende'],
            'componentCount' => 12,
            'categories' => ['SimpleFooter', 'MultiColumnFooter', 'ContactFocusedFooter', 'NewsletterFooter'],
            'files' => [
                'components' => 'components/ui/sections/footers/',
                'images' => 'footerImages',
                'demo' => 'pages/AllFootersDemo.php',
                'route' => '/footers'
            ]
        ],
        'gallery' => [
            'name' => 'Gallery Sektionen',
            'description' => '25+ Galerie- und Portfolio-Sektionen',
            'triggerWords' => ['gallery', 'portfolio', 'galerie', 'bilder', 'projekte', 'showcase', 'works', 'workspace', 'office', 'interactive', 'branded'],
            'componentCount' => 25,
            'categories' => ['SimpleImageGallery', 'WorkspaceGalleries', 'OfficeEnvironmentGalleries', 'ProjectProductGalleries', 'InteractiveGalleries', 'BrandedGalleries'],
            'files' => [
                'components' => 'components/ui/sections/gallery/',
                'images' => 'galleryImages',
                'demo' => 'pages/AllGalleryDemo.php',
                'route' => '/gallery'
            ]
        ]
    ];
    
    /**
     * Erkennt benötigte Sektionen basierend auf User-Input
     */
    public static function detectRequiredSections($userInput) {
        $input = strtolower($userInput);
        $detectedSections = [];
        
        foreach (self::AVAILABLE_SECTIONS as $sectionId => $section) {
            foreach ($section['triggerWords'] as $word) {
                if (strpos($input, strtolower($word)) !== false) {
                    $detectedSections[] = [
                        'id' => $sectionId,
                        'data' => $section
                    ];
                    break; // Nur einmal pro Sektion hinzufügen
                }
            }
        }
        
        return $detectedSections;
    }
    
    /**
     * Generiert Anweisungen für das Hinzufügen von Sektionen
     */
    public static function generateSectionInstructions($sections) {
        if (empty($sections)) return "";
        
        $instructions = "\n## 🔧 ERKANNTE SEKTIONS-ANFORDERUNGEN:\n\n";
        
        foreach ($sections as $section) {
            $data = $section['data'];
            $instructions .= "### {$data['name']} ({$data['componentCount']} Varianten)\n";
            $instructions .= "**Automatisch hinzufügen:**\n";
            $instructions .= "- Komponenten: {$data['files']['components']}\n";
            $instructions .= "- Bilder-Bibliothek: {$data['files']['images']}\n";
            $instructions .= "- Demo-Seite: {$data['files']['demo']}\n";
            $instructions .= "- Route: {$data['files']['route']}\n";
            $instructions .= "- Kategorien: " . implode(", ", $data['categories']) . "\n\n";
        }
        
        $instructions .= "**WICHTIG:** Füge diese Sektionen automatisch zum Projekt hinzu, bevor du mit der Implementierung beginnst!\n\n";
        
        return $instructions;
    }
    
    /**
     * Prüft, welche Sektionen bereits im Projekt vorhanden sind
     */
    public static function checkExistingSections() {
        $existingSections = [];
        
        foreach (self::AVAILABLE_SECTIONS as $sectionId => $section) {
            $componentPath = $section['files']['components'];
            if (is_dir($componentPath)) {
                $existingSections[] = $sectionId;
            }
        }
        
        return $existingSections;
    }
    
    /**
     * Automatisches Hinzufügen von Sektionen vom Full-Template
     */
    public static function autoAddSections($detectedSections) {
        $addedSections = [];
        $fullTemplatePath = '../scaffold-php-full/';
        
        foreach ($detectedSections as $section) {
            $sectionId = $section['id'];
            $sectionData = $section['data'];
            
            // Kopiere Komponenten von scaffold-php-full
            $sourceDir = $fullTemplatePath . $sectionData['files']['components'];
            $targetDir = $sectionData['files']['components'];
            
            if (is_dir($sourceDir)) {
                self::copyDirectory($sourceDir, $targetDir);
                $addedSections[] = $sectionData;
                
                // Log für Debugging
                error_log("ComponentLoader: Added section '{$sectionData['name']}'");
            }
        }
        
        return $addedSections;
    }
    
    /**
     * Generiert die komplette Anweisung für das AI-System
     */
    public static function generateAIInstructions($userInput) {
        $requiredSections = self::detectRequiredSections($userInput);
        $existingSections = self::checkExistingSections();
        
        $instructions = "";
        
        if (!empty($requiredSections)) {
            $instructions .= self::generateSectionInstructions($requiredSections);
            
            // Prüfe auf bereits vorhandene Sektionen
            $newSections = array_filter($requiredSections, function($section) use ($existingSections) {
                return !in_array($section['id'], $existingSections);
            });
            
            if (!empty($newSections)) {
                $sectionNames = array_map(function($s) { return $s['data']['name']; }, $newSections);
                $instructions .= "**🚀 AUTOMATISCHE SEKTION-ERWEITERUNG ERFORDERLICH:**\n";
                $instructions .= "Füge folgende Sektionen hinzu: " . implode(", ", $sectionNames) . "\n\n";
            }
        }
        
        return $instructions;
    }
    
    /**
     * Hilfsfunktion zum Kopieren von Verzeichnissen
     */
    private static function copyDirectory($source, $target) {
        if (!is_dir($target)) {
            mkdir($target, 0755, true);
        }
        
        $files = scandir($source);
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                $sourcePath = $source . "/" . $file;
                $targetPath = $target . "/" . $file;
                
                if (is_dir($sourcePath)) {
                    self::copyDirectory($sourcePath, $targetPath);
                } else {
                    copy($sourcePath, $targetPath);
                }
            }
        }
    }
    
    /**
     * Lädt eine Komponente dynamisch
     */
    public static function loadComponent($componentPath, $data = []) {
        if (file_exists($componentPath)) {
            extract($data);
            include $componentPath;
        } else {
            error_log("ComponentLoader: Component not found: $componentPath");
        }
    }
}
?>
