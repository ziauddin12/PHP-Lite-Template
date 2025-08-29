<?php
/**
 * Multi Option CTA Component
 * CTA mit mehreren Handlungsoptionen
 */

function MultiOptionCTA($variant = 'business-options', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'business-options' => [
            'headline' => 'Wähle deine Option',
            'description' => 'Verschiedene Wege führen zum Erfolg. Wähle den Weg, der am besten zu dir passt.',
            'options' => [
                [
                    'title' => 'Dein Geschäft ausbauen',
                    'description' => 'Skaliere dein Business mit bewährten Strategien',
                    'buttonText' => 'Mehr erfahren',
                    'icon' => 'trending',
                    'featured' => false
                ],
                [
                    'title' => 'E-Book herunterladen',
                    'description' => 'Kostenloser Leitfaden für den Erfolg',
                    'buttonText' => 'Jetzt downloaden',
                    'icon' => 'book',
                    'featured' => true
                ],
                [
                    'title' => 'Smart-Shopper werden',
                    'description' => 'Intelligente Einkaufsentscheidungen treffen',
                    'buttonText' => 'Smart starten',
                    'icon' => 'users',
                    'featured' => false
                ]
            ],
            'bgClass' => 'bg-gradient-to-br from-blue-600 to-indigo-600',
            'textColor' => 'text-white'
        ],
        'demo-partner' => [
            'headline' => 'Zwei Wege zum Erfolg',
            'description' => 'Ob Demo oder Partnerschaft - wir haben die richtige Lösung für Sie.',
            'options' => [
                [
                    'title' => 'Persönliche Demo',
                    'description' => 'Erleben Sie unsere Lösung live in Aktion',
                    'buttonText' => 'Demo anfordern',
                    'icon' => 'users',
                    'featured' => true,
                    'features' => ['30 Min persönliches Gespräch', 'Live-Demo der Software', 'Individuelle Beratung']
                ],
                [
                    'title' => 'Werde unser Partner',
                    'description' => 'Gemeinsam mehr erreichen und profitieren',
                    'buttonText' => 'Partner werden',
                    'icon' => 'handshake',
                    'featured' => false,
                    'features' => ['Attraktive Provisionen', 'Marketing-Support', 'Exklusive Partner-Benefits']
                ]
            ],
            'bgClass' => 'bg-gradient-to-br from-green-600 to-emerald-600',
            'textColor' => 'text-white'
        ],
        'service-options' => [
            'headline' => 'Unsere Service-Optionen',
            'description' => 'Professionelle Dienstleistungen für jeden Bedarf.',
            'options' => [
                [
                    'title' => 'Beratung & Strategie',
                    'description' => 'Individuelle Beratung für Ihr Unternehmen',
                    'buttonText' => 'Beratung buchen',
                    'icon' => 'target',
                    'featured' => false,
                    'features' => ['Strategieentwicklung', 'Marktanalyse', 'Handlungsempfehlungen'],
                    'price' => '299€'
                ],
                [
                    'title' => 'Komplettlösung',
                    'description' => 'Alles aus einer Hand - von A bis Z',
                    'buttonText' => 'Komplettlösung wählen',
                    'icon' => 'trending',
                    'featured' => true,
                    'features' => ['Vollständige Umsetzung', 'Projektmanagement', '6 Monate Support'],
                    'price' => '2.499€'
                ],
                [
                    'title' => 'Support & Wartung',
                    'description' => 'Kontinuierliche Betreuung und Updates',
                    'buttonText' => 'Support anfragen',
                    'icon' => 'users',
                    'featured' => false,
                    'features' => ['24/7 Support', 'Regelmäßige Updates', 'Performance-Monitoring'],
                    'price' => '199€/Monat'
                ]
            ],
            'bgClass' => 'bg-gradient-to-br from-purple-600 to-violet-600',
            'textColor' => 'text-white'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['business-options'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $description = $options['description'] ?? $content['description'];
    $optionsList = $options['options'] ?? $content['options'];
    $bgClass = $content['bgClass'];
    $textColor = $content['textColor'];
    
    // Icon-Mapping
    $iconMap = [
        'trending' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>',
        'book' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>',
        'users' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>',
        'handshake' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path></svg>',
        'target' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
    ];
    
    ob_start();
    include __DIR__ . '/templates/multi-option-cta.php';
    return ob_get_clean();
}
?>
