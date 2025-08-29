<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Detailed Benefits Showcase - 4 Varianten
 * Detaillierte Vorteils-Präsentationen
 */

function DetailedBenefitsShowcase($variant = 'comprehensive', $options = []) {
    $variants = [
        'comprehensive' => [
            'title' => 'Warum Tausende auf uns vertrauen',
            'subtitle' => 'Entdecken Sie die konkreten Vorteile, die unsere Kunden täglich erleben. Messbare Ergebnisse, die Ihr Business transformieren.',
            'benefits' => [
                [
                    'title' => 'Zeit sparen, Produktivität steigern',
                    'description' => 'Automatisieren Sie wiederkehrende Aufgaben und konzentrieren Sie sich auf das, was wirklich zählt.',
                    'details' => [
                        'Bis zu 40% weniger manuelle Arbeit',
                        'Automatische Workflows für alle Prozesse',
                        'Intelligente Priorisierung von Aufgaben',
                        'Echtzeit-Benachrichtigungen nur wenn wichtig'
                    ],
                    'image' => ImageLibrary::$benefitsImages['productivity']['time_management'],
                    'icon' => 'clock',
                    'stats' => [
                        ['value' => '8h', 'label' => 'Gespart pro Woche'],
                        ['value' => '40%', 'label' => 'Produktivitätssteigerung']
                    ]
                ],
                [
                    'title' => 'Kosten reduzieren, Gewinn maximieren',
                    'description' => 'Optimieren Sie Ihre Ausgaben durch intelligente Analysen und datengetriebene Entscheidungen.',
                    'details' => [
                        'Transparente Kostenverfolgung in Echtzeit',
                        'Automatische Budget-Warnungen',
                        'ROI-Tracking für alle Aktivitäten',
                        'Predictive Analytics für bessere Planung'
                    ],
                    'image' => ImageLibrary::$benefitsImages['financial']['cost_reduction'],
                    'icon' => 'trending-down',
                    'stats' => [
                        ['value' => '35%', 'label' => 'Kosteneinsparung'],
                        ['value' => '€50k', 'label' => 'Durchschnittlich gespart']
                    ]
                ],
                [
                    'title' => 'Skalieren ohne Kopfschmerzen',
                    'description' => 'Wachsen Sie mit einer Plattform, die mit Ihnen mitwächst - von 10 bis 10.000 Mitarbeitern.',
                    'details' => [
                        'Unbegrenzte Benutzer ohne Aufpreis',
                        'Automatische Performance-Optimierung',
                        'Enterprise-Grade Sicherheit inklusive',
                        'Nahtlose Integration in bestehende Systeme'
                    ],
                    'image' => ImageLibrary::$benefitsImages['growth']['scalability'],
                    'icon' => 'trending-up',
                    'stats' => [
                        ['value' => '99.9%', 'label' => 'Verfügbarkeit'],
                        ['value' => '10x', 'label' => 'Skalierungsfaktor']
                    ]
                ],
                [
                    'title' => 'Datenbasierte Entscheidungen treffen',
                    'description' => 'Verwandeln Sie Ihre Daten in actionable Insights mit KI-gestützten Analytics.',
                    'details' => [
                        'Real-time Dashboards für alle KPIs',
                        'Predictive Analytics mit 95% Genauigkeit',
                        'Automatische Anomalie-Erkennung',
                        'Custom Reports in Sekunden'
                    ],
                    'image' => ImageLibrary::$benefitsImages['analytics']['data_insights'],
                    'icon' => 'chart-bar',
                    'stats' => [
                        ['value' => '95%', 'label' => 'Vorhersage-Genauigkeit'],
                        ['value' => '60%', 'label' => 'Bessere Entscheidungen']
                    ]
                ]
            ],
            'style' => 'comprehensive'
        ],
        'problem-solution' => [
            'title' => 'Von Problemen zu Lösungen',
            'subtitle' => 'Wir verstehen Ihre täglichen Herausforderungen. Hier ist, wie wir sie lösen.',
            'benefits' => [
                [
                    'problem' => 'Zu viele Tools, keine Integration',
                    'solution' => 'Eine Plattform für alles',
                    'description' => 'Schluss mit dem Tool-Chaos. Alles was Sie brauchen, an einem Ort.',
                    'details' => [
                        '1000+ native Integrationen',
                        'Single Sign-On für alle Tools',
                        'Unified Dashboard',
                        'Cross-Platform Synchronisation'
                    ],
                    'image' => ImageLibrary::$benefitsImages['process']['step_by_step'],
                    'beforeAfter' => [
                        'before' => '15+ verschiedene Tools',
                        'after' => '1 zentrale Plattform'
                    ]
                ],
                [
                    'problem' => 'Daten in Silos, keine Übersicht',
                    'solution' => 'Ganzheitliche Transparenz',
                    'description' => 'Alle Ihre Daten, vereint in verständlichen Dashboards.',
                    'details' => [
                        '360° Unternehmensübersicht',
                        'Real-time Datenvisualisierung',
                        'Automatische Berichte',
                        'Mobile-first Design'
                    ],
                    'image' => ImageLibrary::$benefitsImages['analytics']['unified_dashboard'],
                    'beforeAfter' => [
                        'before' => 'Daten in 10+ Systemen',
                        'after' => 'Alles auf einen Blick'
                    ]
                ],
                [
                    'problem' => 'Manuelle Prozesse fressen Zeit',
                    'solution' => 'Intelligente Automatisierung',
                    'description' => 'Lassen Sie KI die Routinearbeit übernehmen.',
                    'details' => [
                        'No-Code Workflow Builder',
                        'KI-gestützte Prozessoptimierung',
                        'Trigger-basierte Aktionen',
                        'Ausnahme-Management'
                    ],
                    'image' => ImageLibrary::$benefitsImages['services']['quality_assurance'],
                    'beforeAfter' => [
                        'before' => '8h manuelle Arbeit/Tag',
                        'after' => '2h strategische Arbeit/Tag'
                    ]
                ]
            ],
            'style' => 'problem-solution'
        ],
        'roi-focused' => [
            'title' => 'Investition, die sich rechnet',
            'subtitle' => 'Konkrete ROI-Zahlen unserer Kunden. Ihre Investition zahlt sich bereits im ersten Monat aus.',
            'roi_overview' => [
                'payback_period' => '2.3 Monate',
                'average_roi' => '340%',
                'cost_savings' => '€45.000',
                'time_savings' => '15h/Woche'
            ],
            'benefits' => [
                [
                    'category' => 'Kosteneinsparungen',
                    'items' => [
                        ['metric' => '€15.000/Jahr', 'description' => 'Weniger IT-Infrastruktur Kosten'],
                        ['metric' => '€20.000/Jahr', 'description' => 'Reduzierte Personalkosten durch Automatisierung'],
                        ['metric' => '€10.000/Jahr', 'description' => 'Wegfallende Lizenzkosten für andere Tools']
                    ],
                    'total' => '€45.000 Einsparung/Jahr',
                    'icon' => 'currency-dollar'
                ],
                [
                    'category' => 'Produktivitätssteigerung',
                    'items' => [
                        ['metric' => '40% schneller', 'description' => 'Projektabwicklung durch Automatisierung'],
                        ['metric' => '60% weniger', 'description' => 'Zeit für administrative Aufgaben'],
                        ['metric' => '25% mehr', 'description' => 'Projekte pro Quartal abgeschlossen']
                    ],
                    'total' => '€80.000 Mehrwert/Jahr',
                    'icon' => 'lightning-bolt'
                ],
                [
                    'category' => 'Qualitätsverbesserung',
                    'items' => [
                        ['metric' => '90% weniger', 'description' => 'Menschliche Fehler durch Automatisierung'],
                        ['metric' => '95% höher', 'description' => 'Kundenzufriedenheit durch besseren Service'],
                        ['metric' => '50% schneller', 'description' => 'Problem-Resolution durch bessere Daten']
                    ],
                    'total' => 'Unbezahlbare Qualität',
                    'icon' => 'badge-check'
                ]
            ],
            'style' => 'roi-focused'
        ],
        'feature-deep-dive' => [
            'title' => 'Features, die den Unterschied machen',
            'subtitle' => 'Jedes Feature wurde entwickelt, um echte Business-Probleme zu lösen. Hier sind die Details.',
            'features' => [
                [
                    'name' => 'Smart Analytics Engine',
                    'tagline' => 'KI, die Ihre Daten versteht',
                    'description' => 'Unsere proprietäre KI analysiert Ihre Daten und liefert Insights, die Sie sonst übersehen würden.',
                    'capabilities' => [
                        'Anomalie-Erkennung in Echtzeit',
                        'Predictive Modeling mit 95% Genauigkeit',
                        'Natural Language Query Interface',
                        'Automated Report Generation'
                    ],
                    'use_cases' => [
                        'Frühzeitige Erkennung von Problemen',
                        'Vorhersage von Markttrends',
                        'Optimierung von Ressourcen',
                        'Personalisierte Kundeninteraktionen'
                    ],
                    'image' => ImageLibrary::$benefitsImages['services']['quality_assurance'],
                    'tech_specs' => [
                        'Processing Speed: < 100ms',
                        'Data Sources: 1000+ supported',
                        'Accuracy Rate: 95%+',
                        'Real-time Updates: Yes'
                    ]
                ],
                [
                    'name' => 'No-Code Automation Builder',
                    'tagline' => 'Workflows ohne Programmierung',
                    'description' => 'Erstellen Sie komplexe Automatisierungen per Drag & Drop. Kein technisches Know-how erforderlich.',
                    'capabilities' => [
                        'Visual Workflow Designer',
                        'Conditional Logic Builder',
                        'Multi-System Integrations',
                        'Error Handling & Rollback'
                    ],
                    'use_cases' => [
                        'Automatische Kundenbetreuung',
                        'Intelligente Dokumentenverarbeitung',
                        'Cross-Platform Datensynchronisation',
                        'Compliance-konforme Prozesse'
                    ],
                    'image' => ImageLibrary::$benefitsImages['process']['workflow_management'],
                    'tech_specs' => [
                        'Setup Time: < 5 minutes',
                        'Integrations: 1000+',
                        'Concurrent Workflows: Unlimited',
                        'Success Rate: 99.8%'
                    ]
                ],
                [
                    'name' => 'Enterprise Security Suite',
                    'tagline' => 'Bank-Level Sicherheit',
                    'description' => 'Ihre Daten sind bei uns sicherer als in Ihrem eigenen Tresor. Compliance inklusive.',
                    'capabilities' => [
                        'End-to-End Verschlüsselung',
                        'Zero-Trust Architecture',
                        'Multi-Factor Authentication',
                        'Compliance Monitoring'
                    ],
                    'use_cases' => [
                        'GDPR-konforme Datenverarbeitung',
                        'Sichere Kundeninteraktionen',
                        'Audit-Trail für alle Aktivitäten',
                        'Disaster Recovery'
                    ],
                    'image' => ImageLibrary::$benefitsImages['services']['customer_service'],
                    'tech_specs' => [
                        'Encryption: AES-256',
                        'Uptime: 99.99%',
                        'Certifications: ISO 27001, SOC 2',
                        'Backup Frequency: Real-time'
                    ]
                ]
            ],
            'style' => 'feature-deep-dive'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['comprehensive'], $options);
    
    include 'templates/detailed-benefits-showcase.php';
}
?>
