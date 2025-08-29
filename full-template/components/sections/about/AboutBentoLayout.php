<?php
/**
 * About Bento Layout Component
 * Moderne Bento-Grid Layouts für About-Sektionen
 */

function AboutBentoLayout($variant = 'team-overview', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'team-overview' => [
            'headline' => 'ÜBER UNS',
            'subheadline' => 'Mehr über uns erfahren',
            'description' => 'Du siehst hier ein Bento-Raster! Willst du es ändern? Klicke einfach auf das Raster-Symbol in der Symbolleiste oben, um einen anderen Typ auszuprobieren.',
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800',
            'bentoItems' => [
                [
                    'type' => 'stat',
                    'size' => 'medium',
                    'number' => '100+',
                    'label' => 'Team-Mitglieder',
                    'icon' => 'users'
                ],
                [
                    'type' => 'stat',
                    'size' => 'medium',
                    'number' => '6',
                    'label' => 'Büros in 12 Ländern',
                    'icon' => 'globe'
                ],
                [
                    'type' => 'text',
                    'size' => 'large',
                    'title' => 'Unsere Mission',
                    'content' => 'Wir bauen einen Page Builder, der tatsächlich funktioniert. Unsere Abschnitte und Vorlagen stammen aus dem, was gerade auf beliebten Seiten funktioniert.'
                ],
                [
                    'type' => 'quote',
                    'size' => 'medium',
                    'content' => 'Sieh, wie wir seit zehn Jahren jedes Mal Qualitätsarbeit liefern'
                ]
            ]
        ],
        'company-metrics' => [
            'headline' => 'UNSERE ERFOLGE',
            'subheadline' => 'Zahlen, die für sich sprechen',
            'description' => 'Diese Metriken zeigen unsere kontinuierliche Entwicklung und den Erfolg unserer Arbeit.',
            'bgClass' => 'bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900 dark:to-emerald-800',
            'bentoItems' => [
                [
                    'type' => 'stat',
                    'size' => 'large',
                    'number' => '5000+',
                    'label' => 'Zufriedene Kunden',
                    'icon' => 'heart'
                ],
                [
                    'type' => 'stat',
                    'size' => 'medium',
                    'number' => '98%',
                    'label' => 'Kundenzufriedenheit',
                    'icon' => 'star'
                ],
                [
                    'type' => 'stat',
                    'size' => 'medium',
                    'number' => '24/7',
                    'label' => 'Support verfügbar',
                    'icon' => 'clock'
                ],
                [
                    'type' => 'text',
                    'size' => 'medium',
                    'title' => 'Qualitätsversprechen',
                    'content' => 'Jedes Projekt wird mit höchster Sorgfalt und Professionalität umgesetzt.'
                ]
            ]
        ],
        'mission-values' => [
            'headline' => 'UNSERE WERTE',
            'subheadline' => 'Was uns antreibt',
            'description' => 'Diese Grundwerte leiten uns in allem, was wir tun, und prägen unsere Unternehmenskultur.',
            'bgClass' => 'bg-gradient-to-br from-purple-50 to-violet-100 dark:from-purple-900 dark:to-violet-800',
            'bentoItems' => [
                [
                    'type' => 'value',
                    'size' => 'large',
                    'title' => 'Innovation',
                    'content' => 'Wir suchen kontinuierlich nach neuen Wegen und Technologien, um bessere Lösungen zu schaffen.',
                    'icon' => 'lightbulb'
                ],
                [
                    'type' => 'value',
                    'size' => 'medium',
                    'title' => 'Qualität',
                    'content' => 'Exzellenz in jedem Detail ist unser Standard.',
                    'icon' => 'award'
                ],
                [
                    'type' => 'value',
                    'size' => 'medium',
                    'title' => 'Transparenz',
                    'content' => 'Offene Kommunikation und ehrliche Zusammenarbeit.',
                    'icon' => 'eye'
                ],
                [
                    'type' => 'quote',
                    'size' => 'medium',
                    'content' => 'Unsere Werte sind nicht nur Worte, sondern leben in jeder Entscheidung, die wir treffen.'
                ]
            ]
        ],
        'global-presence' => [
            'headline' => 'GLOBAL VERNETZT',
            'subheadline' => 'Weltweit für Sie da',
            'description' => 'Mit Standorten auf mehreren Kontinenten bieten wir lokale Expertise mit globaler Reichweite.',
            'bgClass' => 'bg-gradient-to-br from-cyan-50 to-teal-100 dark:from-cyan-900 dark:to-teal-800',
            'bentoItems' => [
                [
                    'type' => 'stat',
                    'size' => 'large',
                    'number' => '25+',
                    'label' => 'Länder weltweit',
                    'icon' => 'globe'
                ],
                [
                    'type' => 'stat',
                    'size' => 'medium',
                    'number' => '12',
                    'label' => 'Zeitzonen abgedeckt',
                    'icon' => 'clock'
                ],
                [
                    'type' => 'text',
                    'size' => 'medium',
                    'title' => 'Lokale Expertise',
                    'content' => 'Teams vor Ort verstehen die lokalen Märkte und Bedürfnisse.'
                ],
                [
                    'type' => 'stat',
                    'size' => 'medium',
                    'number' => '50+',
                    'label' => 'Sprachen gesprochen',
                    'icon' => 'chat'
                ]
            ]
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['team-overview'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $subheadline = $options['subheadline'] ?? $content['subheadline'];
    $description = $options['description'] ?? $content['description'];
    $ctaText = $options['ctaText'] ?? 'Mehr erfahren';
    $bgClass = $content['bgClass'];
    $bentoItems = $options['bentoItems'] ?? $content['bentoItems'];
    
    // Icon-Mapping
    $iconMap = [
        'users' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>',
        'globe' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'heart' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>',
        'star' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>',
        'clock' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'lightbulb' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>',
        'award' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>',
        'eye' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>',
        'chat' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>'
    ];
    
    // Size-Klassen für Bento-Grid
    $sizeClasses = [
        'small' => 'col-span-1 row-span-1',
        'medium' => 'col-span-1 md:col-span-1 row-span-1',
        'large' => 'col-span-2 md:col-span-2 row-span-2'
    ];
    
    ob_start();
    include __DIR__ . '/templates/about-bento-layout.php';
    return ob_get_clean();
}
?>
