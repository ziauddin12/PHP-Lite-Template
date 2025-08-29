<?php
/**
 * Partner CTA Component
 * Partnership und Kooperations-CTA
 */

function PartnerCTA($variant = 'investment-focused', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'investment-focused' => [
            'badge' => 'Für Investoren',
            'headline' => 'Investiere in klimafreundliche Projekte',
            'description' => 'Nachhaltige Investments mit attraktiven Renditen. Sei Teil der grünen Revolution.',
            'partnerTypes' => [
                [
                    'title' => 'Investor werden',
                    'description' => 'Nachhaltige Renditen mit grünen Projekten erzielen',
                    'buttonText' => 'Jetzt investieren',
                    'icon' => 'trending',
                    'featured' => true,
                    'benefits' => ['6-12% jährliche Rendite', 'Nachhaltige Projekte', 'Transparente Berichterstattung']
                ]
            ],
            'trustIndicators' => [
                'Über 50 Mio€ investiert',
                'BaFin reguliert',
                '500+ Investoren'
            ],
            'bgClass' => 'bg-gradient-to-br from-green-600 to-emerald-600',
            'textColor' => 'text-white'
        ],
        'partnership-focused' => [
            'headline' => 'Wir suchen Partner für Umweltideen',
            'description' => 'Gemeinsam können wir mehr bewegen. Werde Teil unseres Netzwerks für nachhaltige Innovationen.',
            'partnerTypes' => [
                [
                    'title' => 'Technologie-Partner',
                    'description' => 'Entwickle innovative Lösungen mit uns',
                    'buttonText' => 'Partner werden',
                    'icon' => 'users',
                    'featured' => false,
                    'benefits' => ['Gemeinsame F&E', 'Markterschließung', 'Technologie-Transfer']
                ],
                [
                    'title' => 'Vertriebs-Partner',
                    'description' => 'Erweitere unser Vertriebsnetzwerk',
                    'buttonText' => 'Vertrieb starten',
                    'icon' => 'handshake',
                    'featured' => true,
                    'benefits' => ['Attraktive Provisionen', 'Marketing-Support', 'Exklusive Gebiete']
                ]
            ],
            'bgClass' => 'bg-gradient-to-br from-blue-600 to-indigo-600',
            'textColor' => 'text-white'
        ],
        'eco-focused' => [
            'headline' => 'Mehrere Wege zur Zusammenarbeit',
            'description' => 'Ob als Investor, Partner oder Innovator - gemeinsam gestalten wir eine nachhaltige Zukunft.',
            'partnerTypes' => [
                [
                    'title' => 'Eco-Investoren',
                    'description' => 'Investiere in grüne Zukunftstechnologien',
                    'buttonText' => 'Investment-Info',
                    'icon' => 'trending',
                    'featured' => false,
                    'minInvestment' => 'ab 5.000€'
                ],
                [
                    'title' => 'Innovation Partner',
                    'description' => 'Entwickle nachhaltige Lösungen mit uns',
                    'buttonText' => 'Innovation starten',
                    'icon' => 'lightbulb',
                    'featured' => true,
                    'focus' => 'CleanTech & GreenTech'
                ],
                [
                    'title' => 'Impact Accelerator',
                    'description' => 'Beschleunige positive Umweltauswirkungen',
                    'buttonText' => 'Impact messen',
                    'icon' => 'target',
                    'featured' => false,
                    'impact' => 'CO₂-Reduktion messbar'
                ]
            ],
            'bgClass' => 'bg-gradient-to-br from-purple-600 to-violet-600',
            'textColor' => 'text-white'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['investment-focused'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $badge = $options['badge'] ?? ($content['badge'] ?? null);
    $headline = $options['headline'] ?? $content['headline'];
    $description = $options['description'] ?? $content['description'];
    $partnerTypes = $options['partnerTypes'] ?? $content['partnerTypes'];
    $trustIndicators = $options['trustIndicators'] ?? ($content['trustIndicators'] ?? []);
    $bgClass = $content['bgClass'];
    $textColor = $content['textColor'];
    
    // Icon-Mapping
    $iconMap = [
        'trending' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>',
        'users' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>',
        'handshake' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path></svg>',
        'lightbulb' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>',
        'target' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
    ];
    
    ob_start();
    include __DIR__ . '/templates/partner-cta.php';
    return ob_get_clean();
}
?>
