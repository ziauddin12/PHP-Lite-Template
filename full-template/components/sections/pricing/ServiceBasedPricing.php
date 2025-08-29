<?php
/**
 * Service-Based Pricing Component
 * Service- und Beratungspreise
 */

function ServiceBasedPricing($variant = 'service-packages', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'service-packages' => [
            'headline' => 'Unsere Preise auf einen Blick',
            'description' => 'Wählen Sie das Service-Paket, das am besten zu Ihren Bedürfnissen passt.',
            'services' => [
                [
                    'name' => 'Discovery-Session',
                    'description' => 'Erhalte eine Ersteinschätzung in einem 60-minütigen Gespräch.',
                    'price' => '150',
                    'currency' => '€',
                    'period' => 'Einmalzahlung',
                    'features' => [
                        'Strategische Beratung',
                        'Analyse der aktuellen Situation',
                        'Handlungsempfehlungen',
                        'Dokumentation der Ergebnisse'
                    ],
                    'ctaText' => 'Session buchen',
                    'duration' => '60 Minuten'
                ],
                [
                    'name' => 'Website-Review',
                    'description' => 'Wir analysieren deine Website und schlagen Verbesserungen vor.',
                    'price' => '350',
                    'currency' => '€',
                    'period' => 'Einmalzahlung',
                    'features' => [
                        'Technische Analyse',
                        'SEO-Bewertung',
                        'UX/UI-Review',
                        'Performance-Check',
                        'Detaillierter Report'
                    ],
                    'ctaText' => 'Review starten',
                    'popular' => true,
                    'duration' => '3-5 Werktage'
                ],
                [
                    'name' => 'Technical Setup',
                    'description' => 'Komplette technische Einrichtung und Optimierung.',
                    'price' => '850',
                    'currency' => '€',
                    'period' => 'Einmalzahlung',
                    'features' => [
                        'Server-Setup',
                        'SSL-Konfiguration',
                        'Performance-Optimierung',
                        'Security-Hardening',
                        '30 Tage Support'
                    ],
                    'ctaText' => 'Setup buchen',
                    'duration' => '1-2 Wochen'
                ]
            ],
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800'
        ],
        'service-with-descriptions' => [
            'headline' => 'Professionelle Services',
            'description' => 'Umfassende Dienstleistungen für Ihr digitales Business.',
            'services' => [
                [
                    'name' => 'Strategie-Beratung',
                    'description' => 'Entwickeln Sie mit uns die perfekte digitale Strategie für Ihr Unternehmen.',
                    'longDescription' => 'In einer ausführlichen Analyse betrachten wir Ihre aktuellen Herausforderungen, definieren klare Ziele und entwickeln einen konkreten Aktionsplan.',
                    'price' => '299',
                    'currency' => '€',
                    'period' => 'pro Session',
                    'features' => [
                        'Umfassende Situationsanalyse',
                        'Zieldefinition und Roadmap',
                        'Wettbewerbsanalyse',
                        'Konkrete Handlungsempfehlungen'
                    ],
                    'ctaText' => 'Beratung buchen'
                ],
                [
                    'name' => 'Content-Audit',
                    'description' => 'Optimieren Sie Ihre Inhalte für bessere Performance und Conversions.',
                    'longDescription' => 'Wir analysieren Ihre bestehenden Inhalte, identifizieren Verbesserungspotentiale und geben konkrete Empfehlungen für bessere Ergebnisse.',
                    'price' => '450',
                    'currency' => '€',
                    'period' => 'pro Audit',
                    'features' => [
                        'Content-Analyse',
                        'SEO-Optimierungsvorschläge',
                        'Conversion-Optimierung',
                        'Detaillierter Aktionsplan'
                    ],
                    'ctaText' => 'Audit starten',
                    'popular' => true
                ]
            ],
            'bgClass' => 'bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900 dark:to-emerald-800'
        ],
        'enterprise-focused' => [
            'headline' => 'Enterprise Solutions',
            'description' => 'Skalierbare Lösungen für größere Teams und Unternehmen.',
            'services' => [
                [
                    'name' => 'Teams',
                    'description' => 'Perfekt für wachsende Teams und mittlere Unternehmen.',
                    'price' => '99',
                    'currency' => '€',
                    'period' => 'pro Nutzer/Monat',
                    'features' => [
                        'Unbegrenzte Projekte',
                        'Team-Kollaboration',
                        'Advanced Analytics',
                        'Priority Support',
                        'Custom Integrations'
                    ],
                    'ctaText' => 'Teams starten',
                    'minUsers' => '5 Nutzer minimum'
                ],
                [
                    'name' => 'Enterprise',
                    'description' => 'Maßgeschneiderte Lösung für große Organisationen.',
                    'price' => 'Auf Anfrage',
                    'currency' => '',
                    'period' => '',
                    'features' => [
                        'Alle Teams Features',
                        'Dedicated Account Manager',
                        'Custom Development',
                        'SLA Garantie',
                        'On-Premise Deployment',
                        'White-Label Option'
                    ],
                    'ctaText' => 'Kontakt aufnehmen',
                    'popular' => true,
                    'customPricing' => true
                ]
            ],
            'bgClass' => 'bg-gradient-to-br from-purple-50 to-violet-100 dark:from-purple-900 dark:to-violet-800'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['service-packages'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $subheadline = $options['subheadline'] ?? ($content['subheadline'] ?? null);
    $description = $options['description'] ?? $content['description'];
    $services = $options['services'] ?? $content['services'];
    $showPopularBadge = $options['showPopularBadge'] ?? true;
    $bgClass = $content['bgClass'];
    
    ob_start();
    include __DIR__ . '/templates/service-based-pricing.php';
    return ob_get_clean();
}
?>
