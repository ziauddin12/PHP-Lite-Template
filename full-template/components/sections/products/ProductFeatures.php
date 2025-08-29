<?php
/**
 * Product Features Component
 * Produkt-Features und Vorteile-Darstellungen
 */

function ProductFeatures($variant = 'feature-grid', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'feature-grid' => [
            'headline' => 'Luftreiniger Pro - Features',
            'description' => 'Modernste Technologie für saubere und gesunde Luft in Ihrem Zuhause.',
            'features' => [
                ['title' => 'HEPA-Filterung', 'description' => '99,97% aller Partikel werden gefiltert', 'icon' => 'filter'],
                ['title' => 'Leiser Betrieb', 'description' => 'Unter 30dB - leiser als Flüstern', 'icon' => 'volume'],
                ['title' => 'Smart Design', 'description' => 'Minimalistisch und elegant', 'icon' => 'design'],
                ['title' => 'App-Steuerung', 'description' => 'Fernsteuerung über Smartphone', 'icon' => 'smartphone']
            ],
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800'
        ],
        'sticky-features' => [
            'headline' => 'Premium Luftreiniger',
            'description' => 'Revolutionäre Luftreinigungstechnologie für Ihr Zuhause.',
            'price' => ['amount' => '399', 'currency' => '€'],
            'rating' => ['score' => 4.8, 'reviewCount' => 1250],
            'features' => [
                ['title' => 'Dreifach-Filtersystem', 'description' => 'HEPA + Aktivkohle + Vorfilter für maximale Reinigung'],
                ['title' => 'Automatische Sensoren', 'description' => 'Erkennt automatisch Luftqualität und passt sich an'],
                ['title' => 'Energieeffizient', 'description' => 'Nur 45W Verbrauch bei maximaler Leistung'],
                ['title' => 'Große Reichweite', 'description' => 'Reinigt Räume bis 80m² effektiv']
            ],
            'bgClass' => 'bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900 dark:to-emerald-800'
        ],
        'benefit-list' => [
            'headline' => 'Warum unsere Kunden uns lieben',
            'description' => 'Überzeugen Sie sich von den Vorteilen, die unsere Produkte bieten.',
            'benefits' => [
                ['title' => 'Bessere Luftqualität', 'description' => 'Spürbare Verbesserung der Raumluft binnen Minuten', 'icon' => 'air'],
                ['title' => 'Weniger Allergien', 'description' => 'Reduziert Pollen, Staub und andere Allergene um 99%', 'icon' => 'health'],
                ['title' => 'Besserer Schlaf', 'description' => 'Ruhiger und erholsamer Schlaf durch saubere Luft', 'icon' => 'sleep'],
                ['title' => 'Einfache Wartung', 'description' => 'Filter wechseln in unter 2 Minuten', 'icon' => 'maintenance']
            ],
            'bgClass' => 'bg-gradient-to-br from-purple-50 to-violet-100 dark:from-purple-900 dark:to-violet-800'
        ],
        'feature-showcase' => [
            'headline' => 'Agentur-Vorteile auf einen Blick',
            'description' => 'Professionelle Dienstleistungen, die Ihr Unternehmen voranbringen.',
            'showcaseItems' => [
                ['title' => 'Strategische Beratung', 'description' => 'Individuelle Strategien für nachhaltigen Erfolg', 'highlight' => 'Über 500 erfolgreiche Projekte'],
                ['title' => 'Kreative Umsetzung', 'description' => 'Von der Idee bis zur finalen Realisierung', 'highlight' => 'Award-winning Design'],
                ['title' => 'Messbare Ergebnisse', 'description' => 'Transparente Erfolgsmessung und Reporting', 'highlight' => 'Durchschnittlich 300% ROI']
            ],
            'bgClass' => 'bg-gradient-to-br from-orange-50 to-amber-100 dark:from-orange-900 dark:to-amber-800',
            'backgroundImage' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['feature-grid'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $description = $options['description'] ?? $content['description'];
    $features = $options['features'] ?? ($content['features'] ?? []);
    $benefits = $options['benefits'] ?? ($content['benefits'] ?? []);
    $showcaseItems = $options['showcaseItems'] ?? ($content['showcaseItems'] ?? []);
    $price = $options['price'] ?? ($content['price'] ?? null);
    $rating = $options['rating'] ?? ($content['rating'] ?? null);
    $backgroundImage = $options['backgroundImage'] ?? ($content['backgroundImage'] ?? null);
    $bgClass = $content['bgClass'];
    
    // Icon-Mapping
    $iconMap = [
        'filter' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>',
        'volume' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M11 5L6 9H2v6h4l5 4V5z"></path></svg>',
        'design' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path></svg>',
        'smartphone' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a1 1 0 001-1V4a1 1 0 00-1-1H8a1 1 0 00-1 1v16a1 1 0 001 1z"></path></svg>',
        'air' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path></svg>',
        'health' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>',
        'sleep' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>',
        'maintenance' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>'
    ];
    
    ob_start();
    include __DIR__ . '/templates/product-features.php';
    return ob_get_clean();
}
?>
