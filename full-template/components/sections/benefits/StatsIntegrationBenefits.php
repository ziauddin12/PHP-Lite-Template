<?php
/**
 * Stats Integration Benefits Component
 * Benefits mit integrierten Statistiken
 */

function StatsIntegrationBenefits($variant = 'business-insights', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'business-insights' => [
            'headline' => 'Unsere Erfolge in Zahlen',
            'description' => 'Über ein Jahrzehnt Erfahrung, tausende erfolgreiche Projekte und ein starkes Team - das sind die Grundlagen unseres Erfolgs.',
            'stats' => [
                ['number' => '12+', 'label' => 'Jahre Erfahrung', 'icon' => 'calendar'],
                ['number' => '5.200', 'label' => 'Erfolgreiche Projekte', 'icon' => 'target'],
                ['number' => '150', 'label' => 'Team-Mitglieder', 'icon' => 'users'],
                ['number' => '1.000+', 'label' => 'Positive Bewertungen', 'icon' => 'star']
            ],
            'benefits' => [
                [
                    'title' => 'Bewährte Expertise',
                    'description' => 'Über ein Jahrzehnt Erfahrung in der Branche mit kontinuierlicher Weiterentwicklung.',
                    'icon' => 'award'
                ],
                [
                    'title' => 'Skalierbare Lösungen',
                    'description' => 'Von Startups bis Konzerne - unsere Lösungen wachsen mit Ihren Anforderungen.',
                    'icon' => 'trending'
                ]
            ],
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800',
            'textColor' => 'text-slate-900 dark:text-white'
        ],
        'performance-metrics' => [
            'headline' => 'Geschäftsergebnisse erzielen',
            'description' => 'Messbare Verbesserungen, die Ihr Business vorantreiben. Unsere Kunden erleben durchschnittlich diese Leistungssteigerungen.',
            'stats' => [
                ['number' => '89%', 'label' => 'Schneller', 'icon' => 'zap'],
                ['number' => '3x', 'label' => 'Effizienter', 'icon' => 'trending'],
                ['number' => '24h', 'label' => 'Sichtbare Ergebnisse', 'icon' => 'clock'],
                ['number' => '3-5', 'label' => 'Monate bis ROI', 'icon' => 'chart']
            ],
            'benefits' => [
                [
                    'title' => 'Sofortige Verbesserungen',
                    'description' => 'Erste messbare Ergebnisse bereits in den ersten 24 Stunden nach der Implementierung.',
                    'icon' => 'lightning'
                ],
                [
                    'title' => 'Langfristige Effizienz',
                    'description' => 'Nachhaltige Prozessoptimierungen, die dauerhaft Kosten sparen und Produktivität steigern.',
                    'icon' => 'refresh'
                ]
            ],
            'bgClass' => 'bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900 dark:to-emerald-800',
            'textColor' => 'text-slate-900 dark:text-white'
        ],
        'measurable-impact' => [
            'headline' => 'Messbare Auswirkungen für Ihr Business',
            'description' => 'Konkrete Zahlen sprechen für sich. Unsere Kunden erleben durchschnittlich diese beeindruckenden Verbesserungen.',
            'stats' => [
                ['number' => '89%', 'label' => 'Schneller', 'icon' => 'zap'],
                ['number' => '10 Std', 'label' => 'Gesparte Zeit pro Woche', 'icon' => 'clock'],
                ['number' => '2.540%', 'label' => 'ROI Steigerung', 'icon' => 'trending'],
                ['number' => '24/7', 'label' => 'Support verfügbar', 'icon' => 'support']
            ],
            'featureList' => [
                'Automatisierte Workflows reduzieren manuelle Arbeit um 89%',
                'Intelligente Priorisierung spart 10+ Stunden pro Woche',
                'Datengetriebene Entscheidungen verbessern ROI um 2.540%',
                'Rund-um-die-Uhr Support garantiert kontinuierliche Verfügbarkeit'
            ],
            'benefits' => [
                [
                    'title' => 'Dramatische Zeitersparnis',
                    'description' => 'Durch Automatisierung und intelligente Prozesse sparen unsere Kunden durchschnittlich 10+ Stunden pro Woche.',
                    'icon' => 'clock'
                ]
            ],
            'bgClass' => 'bg-gradient-to-br from-purple-50 to-violet-100 dark:from-purple-900 dark:to-violet-800',
            'textColor' => 'text-slate-900 dark:text-white'
        ],
        'company-stats' => [
            'headline' => 'Unser Unternehmen in Zahlen',
            'description' => 'Transparenz und Vertrauen durch Fakten. Lernen Sie unser Unternehmen durch konkrete Zahlen kennen.',
            'stats' => [
                ['number' => '2012', 'label' => 'Gegründet', 'icon' => 'calendar'],
                ['number' => '50+', 'label' => 'Mitarbeiter', 'icon' => 'users'],
                ['number' => '15+', 'label' => 'Länder bedient', 'icon' => 'globe'],
                ['number' => '99.9%', 'label' => 'Uptime Garantie', 'icon' => 'shield']
            ],
            'benefits' => [
                [
                    'title' => 'Solide Unternehmensführung',
                    'description' => 'Über 10 Jahre kontinuierliches Wachstum und stabile Geschäftsentwicklung.',
                    'icon' => 'building'
                ],
                [
                    'title' => 'Globale Reichweite',
                    'description' => 'Internationale Erfahrung mit lokaler Betreuung in über 15 Ländern weltweit.',
                    'icon' => 'globe'
                ],
                [
                    'title' => 'Zuverlässige Infrastruktur',
                    'description' => '99.9% Uptime-Garantie durch redundante Systeme und proaktive Überwachung.',
                    'icon' => 'server'
                ]
            ],
            'bgClass' => 'bg-slate-50 dark:bg-slate-800',
            'textColor' => 'text-slate-900 dark:text-white'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['business-insights'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $description = $options['description'] ?? $content['description'];
    $stats = $options['stats'] ?? $content['stats'];
    $benefits = $options['benefits'] ?? $content['benefits'];
    $featureList = $options['featureList'] ?? ($content['featureList'] ?? []);
    $bgClass = $content['bgClass'];
    $textColor = $content['textColor'];
    
    // Icon-Mapping
    $iconMap = [
        'calendar' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>',
        'target' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'users' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>',
        'star' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>',
        'zap' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>',
        'trending' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>',
        'clock' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'chart' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>',
        'support' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>',
        'lightning' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>',
        'refresh' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>',
        'award' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>',
        'building' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>',
        'globe' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'shield' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>',
        'server' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>'
    ];
    
    ob_start();
    include __DIR__ . '/templates/stats-integration-benefits.php';
    return ob_get_clean();
}
?>
