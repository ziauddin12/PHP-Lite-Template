<?php
/**
 * Feature Highlights Component
 * Feature-Highlights und Fakten
 */

function FeatureHighlights($variant = 'company-facts', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'company-facts' => [
            'headline' => 'Wichtige Fakten über unser Unternehmen',
            'description' => 'Transparenz und Vertrauen durch konkrete Fakten. Lernen Sie die Grundlagen unseres Erfolgs kennen.',
            'features' => [
                [
                    'title' => 'Kostenloser Versand, einfache Gebühren',
                    'description' => 'Transparente Preisgestaltung ohne versteckte Kosten. Kostenloser Versand ab dem ersten Euro.',
                    'icon' => 'truck',
                    'highlight' => 'Immer kostenlos'
                ],
                [
                    'title' => '4,6 Erfolgsbewertung von 1.000+ Kunden',
                    'description' => 'Bewährt durch zufriedene Kunden weltweit. Über 1.000 verifizierte 5-Sterne-Bewertungen.',
                    'icon' => 'star',
                    'highlight' => '4.6/5 ⭐⭐⭐⭐⭐'
                ],
                [
                    'title' => '24/7 Kundensupport verfügbar',
                    'description' => 'Unser Expertenteam steht Ihnen rund um die Uhr zur Verfügung - per Chat, E-Mail oder Telefon.',
                    'icon' => 'support',
                    'highlight' => 'Rund um die Uhr'
                ],
                [
                    'title' => '100% Geld-zurück-Garantie',
                    'description' => 'Nicht zufrieden? Kein Problem. Wir erstatten Ihnen den vollen Betrag - ohne Wenn und Aber.',
                    'icon' => 'shield',
                    'highlight' => '30 Tage Garantie'
                ],
                [
                    'title' => 'Über 10 Jahre Branchenerfahrung',
                    'description' => 'Bewährte Expertise seit 2012. Über ein Jahrzehnt kontinuierliche Innovation und Kundenbetreuung.',
                    'icon' => 'award',
                    'highlight' => 'Seit 2012'
                ],
                [
                    'title' => 'ISO-zertifizierte Qualitätsstandards',
                    'description' => 'Höchste Qualitäts- und Sicherheitsstandards durch internationale Zertifizierungen.',
                    'icon' => 'certificate',
                    'highlight' => 'ISO 9001:2015'
                ]
            ],
            'bgClass' => 'bg-white dark:bg-slate-900',
            'textColor' => 'text-slate-900 dark:text-white'
        ],
        'service-highlights' => [
            'headline' => 'Unsere Service-Highlights',
            'description' => 'Entdecken Sie die Vorteile, die unsere Dienstleistungen von der Konkurrenz abheben.',
            'features' => [
                [
                    'title' => 'Persönliche Beratung & Betreuung',
                    'description' => 'Jeder Kunde erhält einen persönlichen Ansprechpartner für optimale Betreuung.',
                    'icon' => 'users',
                    'highlight' => '1:1 Betreuung',
                    'stats' => ['98% Kundenzufriedenheit', 'Ø 2h Antwortzeit']
                ],
                [
                    'title' => 'Maßgeschneiderte Lösungen',
                    'description' => 'Individuelle Strategien, die perfekt zu Ihren Zielen und Anforderungen passen.',
                    'icon' => 'settings',
                    'highlight' => '100% individuell',
                    'stats' => ['500+ erfolgreiche Projekte', '95% Erfolgsrate']
                ],
                [
                    'title' => 'Modernste Technologien',
                    'description' => 'Wir setzen auf neueste Tools und Technologien für optimale Ergebnisse.',
                    'icon' => 'zap',
                    'highlight' => 'Cutting-Edge Tech',
                    'stats' => ['AI-Integration', 'Cloud-native']
                ],
                [
                    'title' => 'Transparente Kommunikation',
                    'description' => 'Regelmäßige Updates und vollständige Transparenz über den Projektfortschritt.',
                    'icon' => 'message',
                    'highlight' => 'Volle Transparenz',
                    'stats' => ['Wöchentliche Reports', 'Live-Dashboard']
                ],
                [
                    'title' => 'Schnelle Umsetzung',
                    'description' => 'Agile Methoden für schnelle Ergebnisse ohne Qualitätsverlust.',
                    'icon' => 'clock',
                    'highlight' => 'Agile Umsetzung',
                    'stats' => ['30% schneller', '2-Wochen-Sprints']
                ],
                [
                    'title' => 'Langfristige Partnerschaft',
                    'description' => 'Wir denken über das Projekt hinaus und begleiten Sie langfristig.',
                    'icon' => 'handshake',
                    'highlight' => 'Langfristig',
                    'stats' => ['85% Wiederkunden', 'Ø 3+ Jahre Partnership']
                ]
            ],
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800',
            'textColor' => 'text-slate-900 dark:text-white'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['company-facts'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $description = $options['description'] ?? $content['description'];
    $features = $options['features'] ?? $content['features'];
    $bgClass = $content['bgClass'];
    $textColor = $content['textColor'];
    
    // Icon-Mapping
    $iconMap = [
        'truck' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>',
        'star' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>',
        'support' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>',
        'shield' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>',
        'award' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>',
        'certificate' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>',
        'users' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>',
        'settings' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>',
        'zap' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>',
        'message' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>',
        'clock' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'handshake' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path></svg>'
    ];
    
    ob_start();
    include __DIR__ . '/templates/feature-highlights.php';
    return ob_get_clean();
}
?>
