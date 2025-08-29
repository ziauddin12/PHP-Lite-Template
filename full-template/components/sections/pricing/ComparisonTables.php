<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Comparison Tables - 7 Varianten
 * Detaillierte Preisvergleichstabellen
 */

function ComparisonTables($variant = 'feature-comparison', $options = []) {
    $variants = [
        'feature-comparison' => [
            'title' => 'Finden Sie den perfekten Plan',
            'subtitle' => 'Vergleichen Sie alle Features und finden Sie die Lösung, die perfekt zu Ihren Anforderungen passt.',
            'plans' => [
                [
                    'name' => 'Starter',
                    'price' => '29',
                    'period' => '/Monat',
                    'description' => 'Perfekt für kleine Teams und Startups',
                    'highlight' => false,
                    'features' => [
                        'basic_features' => true,
                        'users' => '5',
                        'storage' => '10 GB',
                        'integrations' => '10',
                        'support' => 'E-Mail',
                        'analytics' => 'Basic',
                        'api_calls' => '1.000/Monat',
                        'custom_branding' => false,
                        'advanced_security' => false,
                        'priority_support' => false,
                        'custom_integrations' => false,
                        'dedicated_manager' => false,
                        'sla' => false,
                        'white_label' => false,
                        'on_premise' => false
                    ]
                ],
                [
                    'name' => 'Business',
                    'price' => '99',
                    'period' => '/Monat',
                    'description' => 'Ideal für wachsende Unternehmen',
                    'highlight' => true,
                    'popular' => true,
                    'features' => [
                        'basic_features' => true,
                        'users' => '25',
                        'storage' => '100 GB',
                        'integrations' => '50',
                        'support' => 'E-Mail + Chat',
                        'analytics' => 'Advanced',
                        'api_calls' => '10.000/Monat',
                        'custom_branding' => true,
                        'advanced_security' => true,
                        'priority_support' => true,
                        'custom_integrations' => '3 included',
                        'dedicated_manager' => false,
                        'sla' => false,
                        'white_label' => false,
                        'on_premise' => false
                    ]
                ],
                [
                    'name' => 'Enterprise',
                    'price' => '299',
                    'period' => '/Monat',
                    'description' => 'Für große Unternehmen mit besonderen Anforderungen',
                    'highlight' => false,
                    'features' => [
                        'basic_features' => true,
                        'users' => 'Unlimited',
                        'storage' => '1 TB',
                        'integrations' => 'Unlimited',
                        'support' => '24/7 Phone + Chat',
                        'analytics' => 'Enterprise',
                        'api_calls' => 'Unlimited',
                        'custom_branding' => true,
                        'advanced_security' => true,
                        'priority_support' => true,
                        'custom_integrations' => 'Unlimited',
                        'dedicated_manager' => true,
                        'sla' => '99.9%',
                        'white_label' => true,
                        'on_premise' => 'Available'
                    ]
                ]
            ],
            'feature_categories' => [
                [
                    'name' => 'Grundfunktionen',
                    'features' => [
                        ['key' => 'basic_features', 'name' => 'Alle Grundfunktionen'],
                        ['key' => 'users', 'name' => 'Benutzer'],
                        ['key' => 'storage', 'name' => 'Speicherplatz'],
                        ['key' => 'integrations', 'name' => 'Integrationen']
                    ]
                ],
                [
                    'name' => 'Support & Analytics',
                    'features' => [
                        ['key' => 'support', 'name' => 'Support'],
                        ['key' => 'analytics', 'name' => 'Analytics'],
                        ['key' => 'api_calls', 'name' => 'API-Aufrufe']
                    ]
                ],
                [
                    'name' => 'Erweiterte Features',
                    'features' => [
                        ['key' => 'custom_branding', 'name' => 'Custom Branding'],
                        ['key' => 'advanced_security', 'name' => 'Erweiterte Sicherheit'],
                        ['key' => 'priority_support', 'name' => 'Priority Support'],
                        ['key' => 'custom_integrations', 'name' => 'Custom Integrationen']
                    ]
                ],
                [
                    'name' => 'Enterprise Features',
                    'features' => [
                        ['key' => 'dedicated_manager', 'name' => 'Dedicated Manager'],
                        ['key' => 'sla', 'name' => 'SLA Garantie'],
                        ['key' => 'white_label', 'name' => 'White Label'],
                        ['key' => 'on_premise', 'name' => 'On-Premise Option']
                    ]
                ]
            ],
            'style' => 'detailed'
        ],
        'competitor-comparison' => [
            'title' => 'Warum Dyad die bessere Wahl ist',
            'subtitle' => 'Sehen Sie selbst, wie wir im Vergleich zur Konkurrenz abschneiden. Mehr Features, bessere Preise, überlegener Support.',
            'competitors' => [
                [
                    'name' => 'Dyad',
                    'logo' => ImageLibrary::$pricingImages['logos']['dyad_logo'],
                    'price' => '€99',
                    'period' => '/Monat',
                    'highlight' => true,
                    'features' => [
                        'setup_time' => '< 5 Minuten',
                        'integrations' => '1000+',
                        'support_response' => '< 2 Stunden',
                        'uptime' => '99.9%',
                        'data_export' => 'Jederzeit',
                        'custom_fields' => 'Unlimited',
                        'api_rate_limit' => 'Keine Limits',
                        'mobile_app' => 'iOS + Android',
                        'security' => 'ISO 27001',
                        'training' => 'Kostenlos',
                        'contract_length' => 'Monatlich kündbar',
                        'hidden_fees' => 'Keine'
                    ]
                ],
                [
                    'name' => 'Konkurrent A',
                    'logo' => ImageLibrary::$pricingImages['logos']['competitor_a'],
                    'price' => '€149',
                    'period' => '/Monat',
                    'highlight' => false,
                    'features' => [
                        'setup_time' => '2-3 Wochen',
                        'integrations' => '200+',
                        'support_response' => '24-48 Stunden',
                        'uptime' => '99.5%',
                        'data_export' => 'Nur mit Premium',
                        'custom_fields' => 'Max 50',
                        'api_rate_limit' => '1000/Stunde',
                        'mobile_app' => 'Nur iOS',
                        'security' => 'SOC 2',
                        'training' => '€500 extra',
                        'contract_length' => '12 Monate Mindestlaufzeit',
                        'hidden_fees' => 'Setup + Onboarding'
                    ]
                ],
                [
                    'name' => 'Konkurrent B',
                    'logo' => ImageLibrary::$pricingImages['logos']['competitor_b'],
                    'price' => '€199',
                    'period' => '/Monat',
                    'highlight' => false,
                    'features' => [
                        'setup_time' => '1-2 Wochen',
                        'integrations' => '500+',
                        'support_response' => '4-8 Stunden',
                        'uptime' => '99.7%',
                        'data_export' => 'Komplizierter Prozess',
                        'custom_fields' => 'Max 100',
                        'api_rate_limit' => '5000/Tag',
                        'mobile_app' => 'Web-App only',
                        'security' => 'Standard',
                        'training' => '€1000 extra',
                        'contract_length' => '24 Monate Mindestlaufzeit',
                        'hidden_fees' => 'Verschiedene Add-ons'
                    ]
                ]
            ],
            'comparison_categories' => [
                [
                    'name' => 'Einrichtung & Bedienung',
                    'features' => [
                        ['key' => 'setup_time', 'name' => 'Setup-Zeit'],
                        ['key' => 'integrations', 'name' => 'Verfügbare Integrationen'],
                        ['key' => 'mobile_app', 'name' => 'Mobile App']
                    ]
                ],
                [
                    'name' => 'Support & Zuverlässigkeit',
                    'features' => [
                        ['key' => 'support_response', 'name' => 'Support Response-Zeit'],
                        ['key' => 'uptime', 'name' => 'Verfügbarkeit'],
                        ['key' => 'training', 'name' => 'Training & Onboarding']
                    ]
                ],
                [
                    'name' => 'Flexibilität & Sicherheit',
                    'features' => [
                        ['key' => 'data_export', 'name' => 'Datenexport'],
                        ['key' => 'custom_fields', 'name' => 'Custom Fields'],
                        ['key' => 'security', 'name' => 'Sicherheitsstandards']
                    ]
                ],
                [
                    'name' => 'Kosten & Vertrag',
                    'features' => [
                        ['key' => 'api_rate_limit', 'name' => 'API Limits'],
                        ['key' => 'contract_length', 'name' => 'Vertragslaufzeit'],
                        ['key' => 'hidden_fees', 'name' => 'Versteckte Kosten']
                    ]
                ]
            ],
            'style' => 'competitive'
        ],
        'roi-calculator' => [
            'title' => 'ROI-Kalkulator',
            'subtitle' => 'Berechnen Sie Ihre Investitionsrendite und sehen Sie, wie viel Sie mit Dyad sparen können.',
            'calculator_inputs' => [
                ['id' => 'employees', 'label' => 'Anzahl Mitarbeiter', 'type' => 'number', 'default' => 25],
                ['id' => 'hourly_rate', 'label' => 'Durchschnittlicher Stundenlohn (€)', 'type' => 'number', 'default' => 35],
                ['id' => 'hours_saved', 'label' => 'Gesparte Stunden pro Woche/Mitarbeiter', 'type' => 'number', 'default' => 5],
                ['id' => 'current_tools', 'label' => 'Kosten aktuelle Tools (€/Monat)', 'type' => 'number', 'default' => 150]
            ],
            'roi_metrics' => [
                ['key' => 'monthly_savings', 'label' => 'Monatliche Einsparungen'],
                ['key' => 'annual_savings', 'label' => 'Jährliche Einsparungen'],
                ['key' => 'roi_percentage', 'label' => 'ROI in %'],
                ['key' => 'payback_period', 'label' => 'Amortisationszeit']
            ],
            'cost_breakdown' => [
                ['category' => 'Zeitersparnis', 'description' => 'Durch Automatisierung gesparte Arbeitszeit'],
                ['category' => 'Tool-Konsolidierung', 'description' => 'Wegfallende Kosten für andere Tools'],
                ['category' => 'Effizienzsteigerung', 'description' => 'Produktivitätssteigerung durch bessere Workflows'],
                ['category' => 'Fehlerreduktion', 'description' => 'Weniger Kosten durch menschliche Fehler']
            ],
            'plans' => [
                ['name' => 'Business', 'price' => 99, 'users' => 25],
                ['name' => 'Enterprise', 'price' => 299, 'users' => 100]
            ],
            'style' => 'calculator'
        ],
        'usage-based' => [
            'title' => 'Transparente Nutzungspreise',
            'subtitle' => 'Zahlen Sie nur für das, was Sie wirklich nutzen. Keine versteckten Kosten, keine Überraschungen.',
            'base_plans' => [
                [
                    'name' => 'Pay-as-you-go',
                    'base_price' => '0',
                    'description' => 'Perfekt zum Testen und für kleine Projekte',
                    'included' => [
                        '1.000 API-Calls/Monat kostenlos',
                        'Basis-Features inklusive',
                        'Community-Support'
                    ]
                ],
                [
                    'name' => 'Professional',
                    'base_price' => '49',
                    'description' => 'Für regelmäßige Nutzung mit Kostenkontrolle',
                    'included' => [
                        '10.000 API-Calls/Monat inklusive',
                        'Alle Premium-Features',
                        'Priority Support',
                        'Advanced Analytics'
                    ]
                ]
            ],
            'usage_tiers' => [
                ['from' => 0, 'to' => 1000, 'price' => 0, 'unit' => 'API-Calls'],
                ['from' => 1001, 'to' => 10000, 'price' => 0.01, 'unit' => 'pro API-Call'],
                ['from' => 10001, 'to' => 100000, 'price' => 0.008, 'unit' => 'pro API-Call'],
                ['from' => 100001, 'to' => 1000000, 'price' => 0.005, 'unit' => 'pro API-Call'],
                ['from' => 1000001, 'to' => null, 'price' => 0.003, 'unit' => 'pro API-Call']
            ],
            'additional_services' => [
                ['service' => 'Premium Support', 'price' => '99', 'unit' => '/Monat'],
                ['service' => 'Custom Integration', 'price' => '500', 'unit' => 'einmalig'],
                ['service' => 'Data Export', 'price' => '0', 'unit' => 'kostenlos'],
                ['service' => 'Additional Storage (100GB)', 'price' => '10', 'unit' => '/Monat']
            ],
            'style' => 'usage'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['feature-comparison'], $options);
    
    include 'templates/comparison-tables.php';
}
?>
