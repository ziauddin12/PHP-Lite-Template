<?php
/**
 * Masonry Benefits Component
 * Masonry-Layout Benefits
 */

function MasonryBenefits($variant = 'top-results', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'top-results' => [
            'headline' => 'Immer TOP-Ergebnisse',
            'description' => 'Unsere Kunden erreichen konstant außergewöhnliche Resultate. Entdecken Sie die Vorteile, die den Unterschied machen.',
            'benefits' => [
                [
                    'title' => 'Effizienz',
                    'description' => 'Optimierte Prozesse und intelligente Automatisierung für maximale Produktivität.',
                    'icon' => 'zap',
                    'featured' => false,
                    'size' => 'normal'
                ],
                [
                    'title' => 'Ergebnisse',
                    'description' => 'Messbare Resultate und kontinuierliche Verbesserungen für nachhaltigen Erfolg.',
                    'icon' => 'target',
                    'featured' => true,
                    'size' => 'large'
                ],
                [
                    'title' => 'Support',
                    'description' => '24/7 Expertenbetreuung für alle Ihre Anliegen.',
                    'icon' => 'users',
                    'featured' => false,
                    'size' => 'normal'
                ],
                [
                    'title' => '100% Garantie',
                    'description' => 'Vollständige Zufriedenheitsgarantie oder Geld zurück.',
                    'icon' => 'shield',
                    'featured' => false,
                    'size' => 'small'
                ],
                [
                    'title' => 'Innovation',
                    'description' => 'Modernste Technologien und innovative Lösungsansätze.',
                    'icon' => 'lightbulb',
                    'featured' => false,
                    'size' => 'normal'
                ]
            ],
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800',
            'textColor' => 'text-slate-900 dark:text-white'
        ],
        'super-results' => [
            'headline' => 'Immer wieder super Ergebnisse',
            'description' => 'Konstante Spitzenleistungen durch bewährte Methoden und kontinuierliche Optimierung.',
            'benefits' => [
                [
                    'title' => 'Qualität',
                    'description' => 'Höchste Qualitätsstandards in allen Bereichen unserer Arbeit.',
                    'icon' => 'award',
                    'featured' => true,
                    'size' => 'large'
                ],
                [
                    'title' => 'Schnelligkeit',
                    'description' => 'Blitzschnelle Umsetzung ohne Kompromisse bei der Qualität.',
                    'icon' => 'zap',
                    'featured' => false,
                    'size' => 'normal'
                ],
                [
                    'title' => 'Zuverlässigkeit',
                    'description' => 'Pünktliche Lieferung und verlässliche Ergebnisse.',
                    'icon' => 'clock',
                    'featured' => false,
                    'size' => 'small'
                ],
                [
                    'title' => 'Expertise',
                    'description' => 'Tiefgreifendes Fachwissen und jahrelange Branchenerfahrung.',
                    'icon' => 'star',
                    'featured' => false,
                    'size' => 'normal'
                ]
            ],
            'bgClass' => 'bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900 dark:to-emerald-800',
            'textColor' => 'text-slate-900 dark:text-white'
        ],
        'highlighted-strengths' => [
            'headline' => 'Immer TOP-Ergebnisse erzielen',
            'description' => 'Unsere bewährten Stärken und Methoden führen zu konstant herausragenden Resultaten.',
            'strengthsHighlight' => 'Deine Stärken hervorzuheben ist wichtig für den Erfolg. Wir helfen dabei, Ihre einzigartigen Vorteile optimal zu präsentieren und zu nutzen.',
            'benefits' => [
                [
                    'title' => 'Ergebnisse',
                    'description' => 'Messbare und nachhaltige Verbesserungen in allen Geschäftsbereichen.',
                    'icon' => 'target',
                    'featured' => true,
                    'size' => 'large',
                    'stats' => ['300% ROI', '95% Erfolgsrate']
                ],
                [
                    'title' => 'Sicher durch Design',
                    'description' => 'Integrierte Sicherheit von Grund auf für maximalen Schutz.',
                    'icon' => 'shield',
                    'featured' => true,
                    'size' => 'normal',
                    'stats' => ['99.9% Uptime', '0 Sicherheitslücken']
                ],
                [
                    'title' => 'Effizienz',
                    'description' => 'Optimierte Workflows für maximale Produktivität.',
                    'icon' => 'zap',
                    'featured' => false,
                    'size' => 'small'
                ],
                [
                    'title' => 'Support',
                    'description' => 'Rund-um-die-Uhr Betreuung durch Experten.',
                    'icon' => 'users',
                    'featured' => false,
                    'size' => 'normal'
                ],
                [
                    'title' => 'Innovation',
                    'description' => 'Modernste Technologien für Wettbewerbsvorteile.',
                    'icon' => 'lightbulb',
                    'featured' => false,
                    'size' => 'small'
                ]
            ],
            'bgClass' => 'bg-gradient-to-br from-purple-50 to-violet-100 dark:from-purple-900 dark:to-violet-800',
            'textColor' => 'text-slate-900 dark:text-white'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['top-results'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $description = $options['description'] ?? $content['description'];
    $strengthsHighlight = $options['strengthsHighlight'] ?? ($content['strengthsHighlight'] ?? null);
    $benefits = $options['benefits'] ?? $content['benefits'];
    $bgClass = $content['bgClass'];
    $textColor = $content['textColor'];
    
    // Icon-Mapping
    $iconMap = [
        'zap' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>',
        'target' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'users' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>',
        'shield' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>',
        'lightbulb' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>',
        'award' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>',
        'clock' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'star' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>'
    ];
    
    ob_start();
    include __DIR__ . '/templates/masonry-benefits.php';
    return ob_get_clean();
}
?>
