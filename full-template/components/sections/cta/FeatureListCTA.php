<?php
/**
 * Feature List CTA Component
 * CTA mit Feature-Liste und Vorteilen
 */

function FeatureListCTA($variant = 'pricing-features', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'pricing-features' => [
            'headline' => 'Es ist Zeit zu handeln',
            'description' => 'Alle Features, die Sie brauchen, zu einem unschlagbaren Preis.',
            'price' => ['amount' => '450', 'currency' => '€', 'period' => 'einmalig'],
            'features' => [
                ['title' => '24/7 Kundensupport', 'description' => 'Rund um die Uhr für Sie da', 'icon' => 'shield'],
                ['title' => 'Schnelle Einrichtung', 'description' => 'In unter 5 Minuten startklar', 'icon' => 'zap'],
                ['title' => 'Keine versteckten Kosten', 'description' => 'Transparente Preisgestaltung', 'icon' => 'check'],
                ['title' => 'Lebenslange Updates', 'description' => 'Immer die neueste Version', 'icon' => 'refresh']
            ],
            'ctaText' => 'Jetzt kaufen',
            'secondaryCtaText' => 'Kostenlose Demo',
            'guarantee' => '30-Tage Geld-zurück-Garantie',
            'bgClass' => 'bg-gradient-to-br from-blue-600 to-indigo-600',
            'textColor' => 'text-white'
        ],
        'service-checklist' => [
            'headline' => 'Alles was Sie für Ihren Erfolg brauchen',
            'description' => 'Unsere umfassende Service-Suite deckt alle Ihre Bedürfnisse ab.',
            'features' => [
                ['title' => 'Strategische Beratung', 'description' => 'Individuelle Strategieentwicklung', 'icon' => 'target'],
                ['title' => 'Design & Entwicklung', 'description' => 'Professionelle Umsetzung', 'icon' => 'design'],
                ['title' => 'Marketing & SEO', 'description' => 'Maximale Sichtbarkeit', 'icon' => 'trending'],
                ['title' => 'Analytics & Reporting', 'description' => 'Messbare Ergebnisse', 'icon' => 'chart'],
                ['title' => 'Ongoing Support', 'description' => 'Langfristige Betreuung', 'icon' => 'users'],
                ['title' => 'Performance Optimierung', 'description' => 'Kontinuierliche Verbesserung', 'icon' => 'zap']
            ],
            'ctaText' => 'Service anfragen',
            'secondaryCtaText' => 'Portfolio ansehen',
            'socialProof' => 'Über 500 zufriedene Kunden vertrauen uns',
            'bgClass' => 'bg-gradient-to-br from-green-600 to-emerald-600',
            'textColor' => 'text-white'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['pricing-features'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $description = $options['description'] ?? $content['description'];
    $price = $options['price'] ?? ($content['price'] ?? null);
    $features = $options['features'] ?? $content['features'];
    $ctaText = $options['ctaText'] ?? $content['ctaText'];
    $secondaryCtaText = $options['secondaryCtaText'] ?? ($content['secondaryCtaText'] ?? null);
    $guarantee = $options['guarantee'] ?? ($content['guarantee'] ?? null);
    $socialProof = $options['socialProof'] ?? ($content['socialProof'] ?? null);
    $bgClass = $content['bgClass'];
    $textColor = $content['textColor'];
    
    // Icon-Mapping
    $iconMap = [
        'shield' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>',
        'zap' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>',
        'check' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>',
        'refresh' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>',
        'target' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'design' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path></svg>',
        'trending' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>',
        'chart' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>',
        'users' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>'
    ];
    
    ob_start();
    include __DIR__ . '/templates/feature-list-cta.php';
    return ob_get_clean();
}
?>
