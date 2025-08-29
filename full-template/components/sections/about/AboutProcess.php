<?php
/**
 * About Process Component
 * Fokus auf Arbeitsprozesse, Service-Abläufe und Methodiken
 */

function AboutProcess($variant = 'how-we-work', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'how-we-work' => [
            'headline' => 'So arbeiten wir - Unser bewährter Prozess',
            'description' => 'Unser strukturierter Ansatz garantiert qualitativ hochwertige Ergebnisse und eine reibungslose Zusammenarbeit.',
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800',
            'steps' => [
                [
                    'number' => '01',
                    'title' => 'Analyse & Strategie',
                    'description' => 'Wir analysieren Ihre Anforderungen und entwickeln eine maßgeschneiderte Strategie.',
                    'icon' => 'search'
                ],
                [
                    'number' => '02', 
                    'title' => 'Konzeption & Design',
                    'description' => 'Basierend auf der Analyse erstellen wir Konzepte und erste Design-Entwürfe.',
                    'icon' => 'design'
                ],
                [
                    'number' => '03',
                    'title' => 'Umsetzung & Entwicklung',
                    'description' => 'Unser erfahrenes Team setzt die Konzepte professionell um.',
                    'icon' => 'code'
                ],
                [
                    'number' => '04',
                    'title' => 'Testing & Launch',
                    'description' => 'Gründliche Tests und ein reibungsloser Launch Ihres Projekts.',
                    'icon' => 'rocket'
                ]
            ]
        ],
        'service-process' => [
            'headline' => 'Unser Service-Prozess - Von der Idee bis zur Umsetzung',
            'description' => 'Ein durchdachter Prozess, der sicherstellt, dass Ihre Vision Realität wird.',
            'bgClass' => 'bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900 dark:to-emerald-800',
            'steps' => [
                [
                    'number' => '01',
                    'title' => 'Beratungsgespräch',
                    'description' => 'Kostenloses Erstgespräch zur Klärung Ihrer Anforderungen und Ziele.',
                    'icon' => 'chat'
                ],
                [
                    'number' => '02',
                    'title' => 'Angebot & Planung',
                    'description' => 'Detailliertes Angebot mit Zeitplan und transparenter Kostenaufstellung.',
                    'icon' => 'document'
                ],
                [
                    'number' => '03',
                    'title' => 'Projektstart',
                    'description' => 'Kick-off Meeting und Beginn der Arbeiten nach Ihren Vorgaben.',
                    'icon' => 'play'
                ],
                [
                    'number' => '04',
                    'title' => 'Regelmäßige Updates',
                    'description' => 'Kontinuierliche Kommunikation und regelmäßige Fortschritts-Updates.',
                    'icon' => 'refresh'
                ],
                [
                    'number' => '05',
                    'title' => 'Abnahme & Support',
                    'description' => 'Finale Abnahme und fortlaufender Support für Ihr Projekt.',
                    'icon' => 'check'
                ]
            ]
        ],
        'z-pattern-flow' => [
            'headline' => 'Unser strukturierter Arbeitsansatz',
            'description' => 'Ein bewährter Prozess, der Effizienz und Qualität in jedem Projekt gewährleistet.',
            'bgClass' => 'bg-gradient-to-br from-purple-50 to-violet-100 dark:from-purple-900 dark:to-violet-800',
            'steps' => [
                [
                    'number' => '01',
                    'title' => 'Verstehen',
                    'description' => 'Wir hören zu, verstehen Ihre Bedürfnisse und definieren klare Ziele.',
                    'icon' => 'ear'
                ],
                [
                    'number' => '02',
                    'title' => 'Planen',
                    'description' => 'Strategische Planung und Roadmap-Entwicklung für optimale Ergebnisse.',
                    'icon' => 'map'
                ],
                [
                    'number' => '03',
                    'title' => 'Umsetzen',
                    'description' => 'Professionelle Umsetzung mit agilen Methoden und kontinuierlichem Feedback.',
                    'icon' => 'tools'
                ]
            ]
        ],
        'benefits-checklist' => [
            'headline' => 'Warum unser Prozess funktioniert',
            'description' => 'Diese Vorteile machen unseren Arbeitsansatz so erfolgreich und effizient.',
            'bgClass' => 'bg-gradient-to-br from-orange-50 to-amber-100 dark:from-orange-900 dark:to-amber-800',
            'benefits' => [
                [
                    'title' => 'Transparenz',
                    'description' => 'Vollständige Transparenz in allen Projektphasen und Kosten.',
                    'icon' => 'eye'
                ],
                [
                    'title' => 'Flexibilität',
                    'description' => 'Anpassungsfähig an Ihre Bedürfnisse und sich ändernde Anforderungen.',
                    'icon' => 'flexibility'
                ],
                [
                    'title' => 'Qualitätssicherung',
                    'description' => 'Mehrfache Qualitätskontrollen und Tests in jeder Phase.',
                    'icon' => 'shield'
                ],
                [
                    'title' => 'Termintreue',
                    'description' => 'Zuverlässige Einhaltung vereinbarter Termine und Meilensteine.',
                    'icon' => 'clock'
                ],
                [
                    'title' => 'Persönlicher Kontakt',
                    'description' => 'Direkter Draht zu Ihrem persönlichen Projektmanager.',
                    'icon' => 'user'
                ],
                [
                    'title' => 'Nachbetreuung',
                    'description' => 'Kontinuierlicher Support auch nach Projektabschluss.',
                    'icon' => 'support'
                ]
            ]
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['how-we-work'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $subheadline = $options['subheadline'] ?? ($content['subheadline'] ?? null);
    $description = $options['description'] ?? $content['description'];
    $ctaText = $options['ctaText'] ?? 'Projekt starten';
    $bgClass = $content['bgClass'];
    $steps = $options['steps'] ?? ($content['steps'] ?? []);
    $benefits = $options['benefits'] ?? ($content['benefits'] ?? []);
    
    // Icon-Mapping
    $iconMap = [
        'search' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>',
        'design' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path></svg>',
        'code' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>',
        'rocket' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>',
        'chat' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>',
        'document' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>',
        'play' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.586a1 1 0 01.707.293L12 11l.707-.707A1 1 0 0113.414 10H15M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'refresh' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>',
        'check' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'ear' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>',
        'map' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>',
        'tools' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>',
        'eye' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>',
        'flexibility' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path></svg>',
        'shield' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>',
        'clock' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'user' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>',
        'support' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>'
    ];
    
    ob_start();
    include __DIR__ . '/templates/about-process.php';
    return ob_get_clean();
}
?>
