<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Standard Pricing Cards - 8 Varianten
 * Klassische 3-Spalten Pricing-Karten
 */

function StandardPricingCards($variant = 'basic-business-pro', $options = []) {
    $variants = [
        'basic-business-pro' => [
            'title' => 'Wählen Sie Ihren perfekten Plan',
            'subtitle' => 'Transparente Preise, keine versteckten Kosten. Starten Sie noch heute mit unserem kostenlosen Plan.',
            'plans' => [
                [
                    'name' => 'Basic',
                    'price' => '0',
                    'currency' => '€',
                    'period' => '/Monat',
                    'description' => 'Perfekt für Einsteiger',
                    'features' => [
                        'Bis zu 3 Projekte',
                        '1 GB Speicher',
                        'E-Mail Support',
                        'Basis-Templates',
                        'Community-Zugang'
                    ],
                    'ctaText' => 'Kostenlos starten',
                    'ctaLink' => '#basic',
                    'popular' => false,
                    'color' => 'gray'
                ],
                [
                    'name' => 'Business',
                    'price' => '29',
                    'currency' => '€',
                    'period' => '/Monat',
                    'description' => 'Für wachsende Unternehmen',
                    'features' => [
                        'Unbegrenzte Projekte',
                        '50 GB Speicher',
                        'Priority Support',
                        'Premium-Templates',
                        'Analytics Dashboard',
                        'Team-Kollaboration',
                        'API-Zugang'
                    ],
                    'ctaText' => 'Jetzt upgraden',
                    'ctaLink' => '#business',
                    'popular' => true,
                    'color' => 'primary'
                ],
                [
                    'name' => 'Pro',
                    'price' => '99',
                    'currency' => '€',
                    'period' => '/Monat',
                    'description' => 'Für professionelle Teams',
                    'features' => [
                        'Alles aus Business',
                        '500 GB Speicher',
                        '24/7 Phone Support',
                        'Custom Branding',
                        'Advanced Analytics',
                        'Dedicated Manager',
                        'SLA Garantie',
                        'White-Label Solution'
                    ],
                    'ctaText' => 'Pro werden',
                    'ctaLink' => '#pro',
                    'popular' => false,
                    'color' => 'purple'
                ]
            ],
            'faq' => [
                [
                    'question' => 'Kann ich jederzeit kündigen?',
                    'answer' => 'Ja, Sie können jederzeit ohne Kündigungsfrist kündigen.'
                ],
                [
                    'question' => 'Gibt es versteckte Kosten?',
                    'answer' => 'Nein, alle Preise sind transparent und final.'
                ]
            ],
            'guarantee' => '30 Tage Geld-zurück-Garantie'
        ],
        'free-pro-elite' => [
            'title' => 'Von kostenlos bis Elite',
            'subtitle' => 'Starten Sie kostenlos und skalieren Sie nach Ihren Bedürfnissen. Jeder Plan bietet echten Mehrwert.',
            'plans' => [
                [
                    'name' => 'Free',
                    'price' => '0',
                    'currency' => '€',
                    'period' => 'für immer',
                    'description' => 'Für Hobby-Projekte',
                    'features' => [
                        '1 Projekt',
                        '500 MB Speicher',
                        'Community Support',
                        'Basis-Features',
                        'Dyad Branding'
                    ],
                    'ctaText' => 'Kostenlos nutzen',
                    'ctaLink' => '#free',
                    'popular' => false,
                    'color' => 'green'
                ],
                [
                    'name' => 'Pro',
                    'price' => '19',
                    'currency' => '€',
                    'period' => '/Monat',
                    'description' => 'Für Profis und Freelancer',
                    'features' => [
                        '10 Projekte',
                        '10 GB Speicher',
                        'E-Mail Support',
                        'Alle Templates',
                        'Eigenes Branding',
                        'Export-Funktionen',
                        'Backup & Restore'
                    ],
                    'ctaText' => 'Pro werden',
                    'ctaLink' => '#pro',
                    'popular' => true,
                    'color' => 'primary'
                ],
                [
                    'name' => 'Elite',
                    'price' => '79',
                    'currency' => '€',
                    'period' => '/Monat',
                    'description' => 'Für Agenturen und Teams',
                    'features' => [
                        'Unbegrenzte Projekte',
                        '100 GB Speicher',
                        'Priority Support',
                        'Custom Templates',
                        'White-Label',
                        'Team-Management',
                        'Advanced Analytics',
                        'API & Webhooks',
                        'Dedicated Support'
                    ],
                    'ctaText' => 'Elite werden',
                    'ctaLink' => '#elite',
                    'popular' => false,
                    'color' => 'purple'
                ]
            ],
            'faq' => [
                [
                    'question' => 'Ist der Free Plan wirklich kostenlos?',
                    'answer' => 'Ja, absolut kostenlos. Keine versteckten Kosten oder zeitliche Begrenzung.'
                ],
                [
                    'question' => 'Kann ich zwischen Plänen wechseln?',
                    'answer' => 'Ja, Sie können jederzeit upgraden oder downgraden.'
                ]
            ],
            'guarantee' => 'Zufriedenheits-Garantie oder Geld zurück'
        ],
        'essential-monthly' => [
            'title' => 'Essential Plans - Monatlich kündbar',
            'subtitle' => 'Flexible monatliche Pläne ohne langfristige Verpflichtungen. Perfekt für agile Unternehmen.',
            'plans' => [
                [
                    'name' => 'Starter',
                    'price' => '15',
                    'currency' => '€',
                    'period' => '/Monat',
                    'description' => 'Ideal für den Einstieg',
                    'features' => [
                        '5 Projekte',
                        '5 GB Speicher',
                        'Standard Support',
                        '10 Templates',
                        'Basis Analytics'
                    ],
                    'ctaText' => 'Starten',
                    'ctaLink' => '#starter',
                    'popular' => false,
                    'color' => 'blue'
                ],
                [
                    'name' => 'Growth',
                    'price' => '39',
                    'currency' => '€',
                    'period' => '/Monat',
                    'description' => 'Für wachsende Unternehmen',
                    'features' => [
                        '25 Projekte',
                        '25 GB Speicher',
                        'Priority Support',
                        '50+ Templates',
                        'Advanced Analytics',
                        'Team-Features',
                        'Custom Domains'
                    ],
                    'ctaText' => 'Growth wählen',
                    'ctaLink' => '#growth',
                    'popular' => true,
                    'color' => 'primary'
                ],
                [
                    'name' => 'Scale',
                    'price' => '89',
                    'currency' => '€',
                    'period' => '/Monat',
                    'description' => 'Für skalierte Operationen',
                    'features' => [
                        'Unbegrenzte Projekte',
                        '100 GB Speicher',
                        '24/7 Support',
                        'Alle Templates',
                        'Enterprise Analytics',
                        'Advanced Team-Management',
                        'Custom Integrations',
                        'SLA Agreement'
                    ],
                    'ctaText' => 'Scale wählen',
                    'ctaLink' => '#scale',
                    'popular' => false,
                    'color' => 'purple'
                ]
            ],
            'faq' => [
                [
                    'question' => 'Wie funktioniert die monatliche Abrechnung?',
                    'answer' => 'Sie werden jeden Monat automatisch abgerechnet und können jederzeit kündigen.'
                ],
                [
                    'question' => 'Gibt es Rabatte bei jährlicher Zahlung?',
                    'answer' => 'Ja, bei jährlicher Zahlung erhalten Sie 20% Rabatt.'
                ]
            ],
            'guarantee' => 'Monatlich kündbar - Keine Mindestlaufzeit'
        ],
        'comprehensive-features' => [
            'title' => 'Umfassende Feature-Pläne',
            'subtitle' => 'Detaillierte Übersicht aller Features in jedem Plan. Finden Sie die perfekte Lösung für Ihre Anforderungen.',
            'plans' => [
                [
                    'name' => 'Essentials',
                    'price' => '25',
                    'currency' => '€',
                    'period' => '/Monat',
                    'description' => 'Alle Grundlagen abgedeckt',
                    'features' => [
                        '10 Aktive Projekte',
                        '20 GB Cloud Storage',
                        'Standard E-Mail Support',
                        '25+ Professionelle Templates',
                        'Basis Analytics Dashboard',
                        'SSL-Zertifikate inklusive',
                        'Mobile-responsive Design',
                        'SEO-Optimierung Tools',
                        'Social Media Integration',
                        'Kontakt-Formulare'
                    ],
                    'ctaText' => 'Essentials wählen',
                    'ctaLink' => '#essentials',
                    'popular' => false,
                    'color' => 'blue'
                ],
                [
                    'name' => 'Professional',
                    'price' => '59',
                    'currency' => '€',
                    'period' => '/Monat',
                    'description' => 'Für professionelle Ansprüche',
                    'features' => [
                        'Unbegrenzte Projekte',
                        '100 GB Cloud Storage',
                        'Priority E-Mail & Chat Support',
                        '100+ Premium Templates',
                        'Advanced Analytics & Reports',
                        'Custom Domain Management',
                        'E-Commerce Integration',
                        'Multi-Language Support',
                        'A/B Testing Tools',
                        'Advanced SEO Suite',
                        'Team-Kollaboration (5 User)',
                        'Backup & Restore',
                        'Custom CSS/HTML Editor'
                    ],
                    'ctaText' => 'Professional werden',
                    'ctaLink' => '#professional',
                    'popular' => true,
                    'color' => 'primary'
                ],
                [
                    'name' => 'Enterprise',
                    'price' => '149',
                    'currency' => '€',
                    'period' => '/Monat',
                    'description' => 'Für große Organisationen',
                    'features' => [
                        'Alles aus Professional',
                        '500 GB Cloud Storage',
                        '24/7 Phone & Chat Support',
                        'Custom Template Development',
                        'Enterprise Analytics Suite',
                        'White-Label Solution',
                        'Advanced Security Features',
                        'GDPR Compliance Tools',
                        'API Access & Webhooks',
                        'Custom Integrations',
                        'Unlimited Team Members',
                        'Dedicated Account Manager',
                        'SLA Garantie (99.9% Uptime)',
                        'Custom Training Sessions'
                    ],
                    'ctaText' => 'Enterprise kontaktieren',
                    'ctaLink' => '#enterprise',
                    'popular' => false,
                    'color' => 'purple'
                ]
            ],
            'faq' => [
                [
                    'question' => 'Was passiert wenn ich mein Limit überschreite?',
                    'answer' => 'Sie erhalten eine Benachrichtigung und können jederzeit upgraden.'
                ],
                [
                    'question' => 'Sind alle Features sofort verfügbar?',
                    'answer' => 'Ja, alle Features sind sofort nach der Buchung aktiviert.'
                ]
            ],
            'guarantee' => 'Alle Features inklusive - Keine versteckten Kosten'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['basic-business-pro'], $options);
    
    include 'templates/standard-pricing-cards.php';
}
?>
