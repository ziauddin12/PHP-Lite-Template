<?php
/**
 * Product Schedule Component
 * Zeitpläne, Preislisten und Service-Schedules
 */

function ProductSchedule($variant = 'schedule-grid', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'schedule-grid' => [
            'headline' => 'Unser Tagesplan',
            'description' => 'Unsere Öffnungszeiten und verfügbaren Services im Überblick.',
            'scheduleItems' => [
                ['id' => '1', 'time' => '09:00', 'title' => 'Beratungsgespräche', 'description' => 'Persönliche Beratung und Erstgespräche', 'available' => true],
                ['id' => '2', 'time' => '10:30', 'title' => 'Workshop: Digital Marketing', 'description' => 'Grundlagen des digitalen Marketings', 'available' => true],
                ['id' => '3', 'time' => '14:00', 'title' => 'Strategiesitzung', 'description' => 'Entwicklung individueller Strategien', 'available' => false],
                ['id' => '4', 'time' => '16:00', 'title' => 'Projektbesprechung', 'description' => 'Laufende Projekte besprechen', 'available' => true]
            ],
            'showTime' => true,
            'showAvailability' => true,
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800'
        ],
        'service-schedule' => [
            'headline' => 'Service-Zeiten',
            'description' => 'Unsere verschiedenen Services und deren Verfügbarkeit.',
            'scheduleItems' => [
                ['id' => '1', 'title' => 'Web Development', 'company' => 'TechCorp Solutions', 'time' => '9:00 - 17:00', 'description' => 'Vollständige Website-Entwicklung'],
                ['id' => '2', 'title' => 'SEO Consulting', 'company' => 'Marketing Pro', 'time' => '10:00 - 18:00', 'description' => 'Suchmaschinenoptimierung'],
                ['id' => '3', 'title' => 'Design Services', 'company' => 'Creative Studio', 'time' => '8:00 - 16:00', 'description' => 'Logo und Corporate Design'],
                ['id' => '4', 'title' => 'Content Creation', 'company' => 'Content Kings', 'time' => '11:00 - 19:00', 'description' => 'Texte und Multimedia-Inhalte']
            ],
            'showCompany' => true,
            'showTime' => true,
            'bgClass' => 'bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900 dark:to-emerald-800'
        ],
        'price-list' => [
            'headline' => 'Unsere Preisliste',
            'description' => 'Transparente Preise für alle unsere Services und Dienstleistungen.',
            'scheduleItems' => [
                ['id' => '1', 'title' => 'Beratungsstunde', 'description' => 'Individuelle Beratung zu Ihrem Projekt', 'price' => ['amount' => 150, 'currency' => '€'], 'duration' => '60 min'],
                ['id' => '2', 'title' => 'Website Audit', 'description' => 'Umfassende Analyse Ihrer Website', 'price' => ['amount' => 400, 'currency' => '€'], 'duration' => '2-3 Tage'],
                ['id' => '3', 'title' => 'SEO Paket', 'description' => 'Monatliche Suchmaschinenoptimierung', 'price' => ['amount' => 800, 'currency' => '€'], 'duration' => 'monatlich'],
                ['id' => '4', 'title' => 'Komplette Website', 'description' => 'Professionelle Website von A-Z', 'price' => ['amount' => 2500, 'currency' => '€'], 'duration' => '4-6 Wochen']
            ],
            'showPrices' => true,
            'bgClass' => 'bg-gradient-to-br from-purple-50 to-violet-100 dark:from-purple-900 dark:to-violet-800'
        ],
        'timeline-view' => [
            'headline' => 'Projekt-Timeline',
            'description' => 'Zeitlicher Ablauf und Meilensteine für Ihr Projekt.',
            'scheduleItems' => [
                ['id' => '1', 'time' => 'Woche 1', 'title' => 'Projektstart & Analyse', 'description' => 'Anforderungsanalyse und Konzeptentwicklung', 'price' => ['amount' => 500, 'currency' => '€']],
                ['id' => '2', 'time' => 'Woche 2-3', 'title' => 'Design & Prototyping', 'description' => 'Wireframes und Design-Entwürfe', 'price' => ['amount' => 1200, 'currency' => '€']],
                ['id' => '3', 'time' => 'Woche 4-6', 'title' => 'Entwicklung', 'description' => 'Programmierung und technische Umsetzung', 'price' => ['amount' => 2000, 'currency' => '€']],
                ['id' => '4', 'time' => 'Woche 7', 'title' => 'Testing & Launch', 'description' => 'Qualitätssicherung und Go-Live', 'price' => ['amount' => 300, 'currency' => '€']]
            ],
            'showTime' => true,
            'showPrices' => true,
            'bgClass' => 'bg-gradient-to-br from-orange-50 to-amber-100 dark:from-orange-900 dark:to-amber-800'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['schedule-grid'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $description = $options['description'] ?? $content['description'];
    $scheduleItems = $options['scheduleItems'] ?? $content['scheduleItems'];
    $columns = $options['columns'] ?? 2;
    $showPrices = $options['showPrices'] ?? ($content['showPrices'] ?? false);
    $showCompany = $options['showCompany'] ?? ($content['showCompany'] ?? false);
    $showTime = $options['showTime'] ?? ($content['showTime'] ?? false);
    $showAvailability = $options['showAvailability'] ?? ($content['showAvailability'] ?? false);
    $bgClass = $content['bgClass'];
    
    ob_start();
    include __DIR__ . '/templates/product-schedule.php';
    return ob_get_clean();
}
?>
