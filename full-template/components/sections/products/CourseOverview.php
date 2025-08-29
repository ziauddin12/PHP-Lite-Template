<?php
/**
 * Course Overview Component
 * Kurs- und Service-Übersichten mit Modulen
 */

function CourseOverview($variant = 'course-modules', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'course-modules' => [
            'headline' => 'E-Commerce Masterclass',
            'description' => 'Lerne in 12 umfassenden Modulen, wie du ein erfolgreiches E-Commerce Business aufbaust.',
            'totalDuration' => '15+ Stunden Videomaterial',
            'guarantee' => '30-Tage Geld-zurück-Garantie',
            'price' => ['amount' => '497', 'currency' => '€'],
            'modules' => [
                ['number' => 'Modul 1', 'title' => 'Grundlagen des E-Commerce', 'description' => 'Lerne die Basics und erstelle deine erste Strategie', 'duration' => '45 min', 'icon' => 'play'],
                ['number' => 'Modul 2', 'title' => 'Produktauswahl & Sourcing', 'description' => 'Finde die perfekten Produkte für dein Business', 'duration' => '60 min', 'icon' => 'search'],
                ['number' => 'Modul 3', 'title' => 'Shop Setup & Design', 'description' => 'Erstelle einen professionellen Online-Shop', 'duration' => '90 min', 'icon' => 'design'],
                ['number' => 'Modul 4', 'title' => 'Marketing & Traffic', 'description' => 'Bringe Kunden in deinen Shop', 'duration' => '75 min', 'icon' => 'target']
            ],
            'bonusContent' => [
                'Templates für E-Mail Marketing',
                'Checklisten für Shop-Launch',
                'Private Facebook Community'
            ],
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800'
        ],
        'service-overview' => [
            'headline' => 'Unsere Service-Bereiche',
            'description' => 'Professionelle Dienstleistungen für dein Unternehmen - alles aus einer Hand.',
            'modules' => [
                ['number' => '01', 'title' => 'Web Development', 'description' => 'Moderne Websites und Web-Anwendungen', 'icon' => 'code'],
                ['number' => '02', 'title' => 'Digital Marketing', 'description' => 'SEO, Social Media und Online-Werbung', 'icon' => 'megaphone'],
                ['number' => '03', 'title' => 'Branding & Design', 'description' => 'Logo, Corporate Design und Branding', 'icon' => 'palette'],
                ['number' => '04', 'title' => 'Consulting', 'description' => 'Strategische Beratung und Optimierung', 'icon' => 'lightbulb']
            ],
            'bgClass' => 'bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900 dark:to-emerald-800'
        ],
        'course-features' => [
            'headline' => 'Landing Page Kurs',
            'description' => 'Alles was du brauchst, um professionelle Landing Pages zu erstellen.',
            'totalDuration' => '12+ Stunden Content',
            'guarantee' => '14-Tage Geld-zurück-Garantie',
            'price' => ['amount' => '297', 'currency' => '€'],
            'features' => [
                'Über 50 Video-Lektionen',
                'Praktische Übungen und Projekte',
                'Templates und Vorlagen',
                'Lebenslanger Zugang',
                'Private Community',
                'Zertifikat nach Abschluss'
            ],
            'bgClass' => 'bg-gradient-to-br from-purple-50 to-violet-100 dark:from-purple-900 dark:to-violet-800'
        ],
        'bonus-content' => [
            'headline' => 'Exklusive Bonus-Inhalte',
            'description' => 'Zusätzliche Materialien und Ressourcen für maximalen Erfolg.',
            'bonusItems' => [
                ['title' => 'Expert Interviews', 'description' => '5 Interviews mit Branchenexperten', 'value' => '197€', 'icon' => 'microphone'],
                ['title' => 'Template Bibliothek', 'description' => '50+ professionelle Templates', 'value' => '297€', 'icon' => 'template'],
                ['title' => 'Checklisten & Tools', 'description' => 'Praktische Hilfsmittel für den Alltag', 'value' => '97€', 'icon' => 'checklist'],
                ['title' => 'Live Q&A Sessions', 'description' => 'Monatliche Live-Sessions mit dem Trainer', 'value' => '197€', 'icon' => 'video']
            ],
            'totalValue' => '788€',
            'bgClass' => 'bg-gradient-to-br from-yellow-50 to-orange-100 dark:from-yellow-900 dark:to-orange-800'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['course-modules'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $description = $options['description'] ?? $content['description'];
    $totalDuration = $options['totalDuration'] ?? ($content['totalDuration'] ?? null);
    $guarantee = $options['guarantee'] ?? ($content['guarantee'] ?? null);
    $price = $options['price'] ?? ($content['price'] ?? null);
    $modules = $options['modules'] ?? ($content['modules'] ?? []);
    $features = $options['features'] ?? ($content['features'] ?? []);
    $bonusContent = $options['bonusContent'] ?? ($content['bonusContent'] ?? []);
    $bonusItems = $options['bonusItems'] ?? ($content['bonusItems'] ?? []);
    $totalValue = $options['totalValue'] ?? ($content['totalValue'] ?? null);
    $bgClass = $content['bgClass'];
    
    // Icon-Mapping
    $iconMap = [
        'play' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.586a1 1 0 01.707.293L12 11l.707-.707A1 1 0 0113.414 10H15M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'search' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>',
        'design' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path></svg>',
        'target' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'code' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>',
        'megaphone' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>',
        'palette' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path></svg>',
        'lightbulb' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>',
        'microphone' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>',
        'template' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>',
        'checklist' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>',
        'video' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>'
    ];
    
    ob_start();
    include __DIR__ . '/templates/course-overview.php';
    return ob_get_clean();
}
?>
