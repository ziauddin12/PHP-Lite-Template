<?php
/**
 * Sticky Benefits Component
 * Sticky-Navigation Benefits
 */

function StickyBenefits($variant = 'sticky-left', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'sticky-left' => [
            'headline' => 'Das Wichtigste über uns',
            'description' => 'Diese Spalte bleibt beim Scrollen an Ort und Stelle. Entdecken Sie die wichtigsten Vorteile unserer Zusammenarbeit.',
            'stickyContent' => [
                'title' => 'Das Wichtigste über uns',
                'description' => 'Diese Spalte bleibt beim Scrollen an Ort und Stelle.',
                'highlights' => [
                    'Über 10 Jahre Erfahrung',
                    '1000+ zufriedene Kunden',
                    '24/7 Support verfügbar'
                ]
            ],
            'benefits' => [
                [
                    'title' => 'Effizienz',
                    'description' => 'Optimierte Prozesse sparen Zeit und Ressourcen. Unsere bewährten Methoden garantieren maximale Effizienz.',
                    'icon' => 'zap',
                    'features' => ['Automatisierte Workflows', 'Intelligente Priorisierung', 'Echtzeit-Updates']
                ],
                [
                    'title' => 'Ergebnisse',
                    'description' => 'Messbare Resultate, die Ihr Business vorantreiben. Jedes Projekt wird mit klaren KPIs und Erfolgsmetriken begleitet.',
                    'icon' => 'target',
                    'features' => ['ROI-Tracking', 'Performance-Monitoring', 'Detaillierte Reports']
                ],
                [
                    'title' => 'Support',
                    'description' => 'Persönliche Betreuung durch Experten. Unser Team steht Ihnen jederzeit zur Verfügung.',
                    'icon' => 'users',
                    'features' => ['Persönlicher Ansprechpartner', '24/7 Verfügbarkeit', 'Schnelle Reaktionszeiten']
                ]
            ],
            'bgClass' => 'bg-white dark:bg-slate-900',
            'textColor' => 'text-slate-900 dark:text-white'
        ],
        'sticky-insights' => [
            'headline' => 'Unsere wichtigsten Erkenntnisse',
            'description' => 'Jahrelange Erfahrung hat uns gelehrt, was wirklich funktioniert. Profitieren Sie von unserem Wissen.',
            'stickyContent' => [
                'title' => 'Unsere wichtigsten Erkenntnisse',
                'description' => 'Aus über 5.000 Projekten haben wir diese Erfolgsprinzipien entwickelt.',
                'insights' => [
                    'Einfachheit übertrifft Komplexität',
                    'Kundenzentrierung ist der Schlüssel',
                    'Kontinuierliche Verbesserung zahlt sich aus'
                ]
            ],
            'benefits' => [
                [
                    'title' => 'Datengetriebene Entscheidungen',
                    'description' => 'Alle Strategien basieren auf echten Daten und bewährten Methoden.',
                    'icon' => 'chart',
                    'stats' => ['95% Trefferquote', '40% bessere Performance']
                ],
                [
                    'title' => 'Agile Umsetzung',
                    'description' => 'Flexible Anpassung an veränderte Anforderungen und Marktbedingungen.',
                    'icon' => 'refresh',
                    'stats' => ['50% schnellere Delivery', '30% weniger Änderungen']
                ],
                [
                    'title' => 'Langfristige Partnerschaften',
                    'description' => 'Wir denken über das Projekt hinaus und begleiten Sie langfristig.',
                    'icon' => 'handshake',
                    'stats' => ['85% Wiederkunden', '3+ Jahre Ø Partnerschaft']
                ]
            ],
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800',
            'textColor' => 'text-slate-900 dark:text-white'
        ],
        'sticky-company' => [
            'headline' => 'Einblicke in unser Unternehmen',
            'description' => 'Transparenz und Offenheit sind die Grundlage unserer Geschäftsbeziehungen.',
            'stickyContent' => [
                'title' => 'Einblicke in unser Unternehmen',
                'description' => 'Lernen Sie uns besser kennen und verstehen Sie, warum Kunden uns vertrauen.',
                'companyFacts' => [
                    'Gegründet 2012',
                    '50+ Mitarbeiter',
                    'Standorte in 3 Ländern'
                ]
            ],
            'benefits' => [
                [
                    'title' => 'Expertise & Erfahrung',
                    'description' => 'Unser Team vereint jahrzehntelange Branchenerfahrung mit modernster Technologie.',
                    'icon' => 'star',
                    'details' => ['Senior-Experten', 'Zertifizierte Spezialisten', 'Kontinuierliche Weiterbildung']
                ],
                [
                    'title' => 'Innovation & Technologie',
                    'description' => 'Wir setzen auf neueste Technologien und innovative Ansätze für optimale Ergebnisse.',
                    'icon' => 'lightbulb',
                    'details' => ['Cutting-Edge Tools', 'KI-Integration', 'Moderne Frameworks']
                ],
                [
                    'title' => 'Qualität & Zuverlässigkeit',
                    'description' => 'Höchste Qualitätsstandards und zuverlässige Projektabwicklung sind unser Markenzeichen.',
                    'icon' => 'shield',
                    'details' => ['ISO-Zertifiziert', '99.9% Uptime', 'Qualitätssicherung']
                ]
            ],
            'bgClass' => 'bg-slate-50 dark:bg-slate-800',
            'textColor' => 'text-slate-900 dark:text-white'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['sticky-left'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $description = $options['description'] ?? $content['description'];
    $stickyContent = $options['stickyContent'] ?? $content['stickyContent'];
    $benefits = $options['benefits'] ?? $content['benefits'];
    $bgClass = $content['bgClass'];
    $textColor = $content['textColor'];
    
    // Icon-Mapping
    $iconMap = [
        'zap' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>',
        'target' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'users' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>',
        'chart' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>',
        'refresh' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>',
        'handshake' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path></svg>',
        'star' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>',
        'lightbulb' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>',
        'shield' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>'
    ];
    
    ob_start();
    include __DIR__ . '/templates/sticky-benefits.php';
    return ob_get_clean();
}
?>
