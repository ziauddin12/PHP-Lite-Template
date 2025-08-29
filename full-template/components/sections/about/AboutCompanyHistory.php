<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * About Company History - 6 Varianten
 * Fokus auf Unternehmensgeschichte und Entwicklung
 */

function AboutCompanyHistory($variant = 'growth-story', $options = []) {
    $variants = [
        'growth-story' => [
            'title' => 'Unsere Wachstumsgeschichte',
            'subtitle' => 'Von einem kleinen Startup zu einem führenden Unternehmen in der Branche - entdecken Sie unseren Weg zum Erfolg.',
            'image' => ImageLibrary::$aboutImages['company']['growth_chart'],
            'timeline' => [
                [
                    'year' => '2014',
                    'title' => 'Die Gründung',
                    'description' => 'Mit einer Vision und viel Leidenschaft starteten wir in einer kleinen Garage.',
                    'milestone' => 'Erstes Team: 3 Personen'
                ],
                [
                    'year' => '2017',
                    'title' => 'Erste Expansion',
                    'description' => 'Unser erstes Büro und die ersten 100 zufriedenen Kunden.',
                    'milestone' => '100+ Kunden, 15 Mitarbeiter'
                ],
                [
                    'year' => '2020',
                    'title' => 'Digitaler Durchbruch',
                    'description' => 'Corona als Chance: Vollständige Digitalisierung unserer Prozesse.',
                    'milestone' => '1.000+ Kunden, Remote-First'
                ],
                [
                    'year' => '2024',
                    'title' => 'Marktführerschaft',
                    'description' => 'Heute sind wir stolz, Marktführer in unserem Segment zu sein.',
                    'milestone' => '10.000+ Kunden, 150 Mitarbeiter'
                ]
            ],
            'stats' => [
                ['value' => '10+', 'label' => 'Jahre Erfahrung'],
                ['value' => '10.000+', 'label' => 'Zufriedene Kunden'],
                ['value' => '150', 'label' => 'Team-Mitglieder'],
                ['value' => '25', 'label' => 'Länder weltweit']
            ]
        ],
        'quality-delivery' => [
            'title' => 'Qualität und Lieferung im Fokus',
            'subtitle' => 'Seit unserer Gründung steht eines im Mittelpunkt: Höchste Qualität und pünktliche Lieferung für unsere Kunden.',
            'image' => ImageLibrary::$aboutImages['company']['modern_office'],
            'timeline' => [
                [
                    'year' => '2014',
                    'title' => 'Qualitätsfokus',
                    'description' => 'Von Anfang an haben wir auf höchste Qualitätsstandards gesetzt.',
                    'milestone' => 'ISO 9001 Zertifizierung'
                ],
                [
                    'year' => '2018',
                    'title' => 'Liefertreue',
                    'description' => 'Einführung unseres einzigartigen Liefergarantie-Systems.',
                    'milestone' => '99.5% Liefertreue'
                ],
                [
                    'year' => '2021',
                    'title' => 'Kontinuierliche Verbesserung',
                    'description' => 'Implementierung von Lean Six Sigma Prozessen.',
                    'milestone' => '50% weniger Fehler'
                ],
                [
                    'year' => '2024',
                    'title' => 'Exzellenz-Standard',
                    'description' => 'Heute setzen wir den Standard für Qualität in der Branche.',
                    'milestone' => 'Branchenführer Qualität'
                ]
            ],
            'stats' => [
                ['value' => '99.9%', 'label' => 'Qualitätsrate'],
                ['value' => '24h', 'label' => 'Lieferzeit'],
                ['value' => '0.1%', 'label' => 'Fehlerquote'],
                ['value' => '100%', 'label' => 'Kundenzufriedenheit']
            ]
        ],
        'mission-statement' => [
            'title' => 'Unsere Mission und Vision',
            'subtitle' => 'Wir glauben daran, dass Technologie das Leben verbessern kann. Unsere Mission ist es, innovative Lösungen zu schaffen, die einen echten Unterschied machen.',
            'image' => ImageLibrary::$aboutImages['company']['mission_vision'],
            'timeline' => [
                [
                    'year' => 'Mission',
                    'title' => 'Menschen befähigen',
                    'description' => 'Wir entwickeln Technologie, die Menschen befähigt, ihre Ziele zu erreichen.',
                    'milestone' => 'Über 1 Million Nutzer'
                ],
                [
                    'year' => 'Vision',
                    'title' => 'Zukunft gestalten',
                    'description' => 'Eine Welt, in der Technologie intuitiv und zugänglich für alle ist.',
                    'milestone' => 'Global verfügbar'
                ],
                [
                    'year' => 'Werte',
                    'title' => 'Nachhaltigkeit',
                    'description' => 'Verantwortung für unseren Planeten und zukünftige Generationen.',
                    'milestone' => 'CO2-neutral seit 2022'
                ],
                [
                    'year' => 'Zukunft',
                    'title' => 'Innovation',
                    'description' => 'Kontinuierliche Innovation für eine bessere Zukunft.',
                    'milestone' => '50+ Patente angemeldet'
                ]
            ],
            'stats' => [
                ['value' => '1M+', 'label' => 'Nutzer weltweit'],
                ['value' => '50+', 'label' => 'Patente'],
                ['value' => '0%', 'label' => 'CO2-Emissionen'],
                ['value' => '100%', 'label' => 'Erneuerbare Energie']
            ]
        ],
        'founder-story' => [
            'title' => 'Die Geschichte unserer Gründer',
            'subtitle' => 'Zwei Visionäre, eine Idee, ein Traum - so begann unsere Reise zu einem der führenden Unternehmen der Branche.',
            'image' => ImageLibrary::$aboutImages['professionals']['business_woman'],
            'timeline' => [
                [
                    'year' => '2013',
                    'title' => 'Die Idee',
                    'description' => 'Sarah und Michael lernten sich an der Universität kennen und entwickelten ihre Vision.',
                    'milestone' => 'Erste Geschäftsidee'
                ],
                [
                    'year' => '2014',
                    'title' => 'Der Mut',
                    'description' => 'Mit 10.000€ Startkapital wagten sie den Sprung in die Selbstständigkeit.',
                    'milestone' => 'Unternehmensgründung'
                ],
                [
                    'year' => '2019',
                    'title' => 'Der Durchbruch',
                    'description' => 'Der erste Millionen-Euro-Auftrag veränderte alles.',
                    'milestone' => '1M€ Umsatz erreicht'
                ],
                [
                    'year' => '2024',
                    'title' => 'Die Vision lebt',
                    'description' => 'Heute führen sie ein Team von 150 Menschen und bleiben ihrer Vision treu.',
                    'milestone' => '50M€ Jahresumsatz'
                ]
            ],
            'stats' => [
                ['value' => '2', 'label' => 'Visionäre Gründer'],
                ['value' => '10', 'label' => 'Jahre Partnership'],
                ['value' => '150', 'label' => 'Team-Mitglieder'],
                ['value' => '50M€', 'label' => 'Jahresumsatz']
            ]
        ],
        'b2b-services' => [
            'title' => 'B2B-Service-Spezialist seit 2014',
            'subtitle' => 'Wir verstehen die besonderen Anforderungen von Unternehmen und bieten maßgeschneiderte B2B-Lösungen.',
            'image' => ImageLibrary::$aboutImages['team']['collaboration'],
            'timeline' => [
                [
                    'year' => '2014',
                    'title' => 'B2B-Fokus',
                    'description' => 'Spezialisierung auf Business-to-Business Lösungen.',
                    'milestone' => 'Erste Enterprise-Kunden'
                ],
                [
                    'year' => '2017',
                    'title' => 'Skalierung',
                    'description' => 'Aufbau eines dedizierten B2B-Service-Teams.',
                    'milestone' => '50+ B2B-Kunden'
                ],
                [
                    'year' => '2020',
                    'title' => 'Enterprise-Ready',
                    'description' => 'Zertifizierung für Enterprise-Sicherheit und Compliance.',
                    'milestone' => 'Fortune 500 Kunden'
                ],
                [
                    'year' => '2024',
                    'title' => 'Marktführer',
                    'description' => 'Führender Anbieter für B2B-Services in der DACH-Region.',
                    'milestone' => '500+ Unternehmenskunden'
                ]
            ],
            'stats' => [
                ['value' => '500+', 'label' => 'B2B-Kunden'],
                ['value' => '99.9%', 'label' => 'Verfügbarkeit'],
                ['value' => '24/7', 'label' => 'Enterprise Support'],
                ['value' => '100%', 'label' => 'GDPR Compliance']
            ]
        ],
        'experience' => [
            'title' => 'Jahrelange Branchenerfahrung',
            'subtitle' => 'Mit über einem Jahrzehnt Erfahrung haben wir die Entwicklung der Branche nicht nur miterlebt, sondern aktiv mitgestaltet.',
            'image' => ImageLibrary::$aboutImages['company']['office_building'],
            'timeline' => [
                [
                    'year' => '2014-2017',
                    'title' => 'Lernphase',
                    'description' => 'Intensive Marktanalyse und Aufbau von Branchenexpertise.',
                    'milestone' => 'Grundlagen gelegt'
                ],
                [
                    'year' => '2018-2020',
                    'title' => 'Etablierung',
                    'description' => 'Aufbau von Reputation und Vertrauen in der Branche.',
                    'milestone' => 'Branchenpartner'
                ],
                [
                    'year' => '2021-2022',
                    'title' => 'Innovation',
                    'description' => 'Einführung branchenverändernder Innovationen.',
                    'milestone' => 'Thought Leader'
                ],
                [
                    'year' => '2023-2024',
                    'title' => 'Marktführung',
                    'description' => 'Heute setzen wir Standards und führen Markttrends an.',
                    'milestone' => 'Industry Leader'
                ]
            ],
            'stats' => [
                ['value' => '10+', 'label' => 'Jahre Erfahrung'],
                ['value' => '15', 'label' => 'Branchenawards'],
                ['value' => '100+', 'label' => 'Fachkonferenzen'],
                ['value' => '25', 'label' => 'Patente & IPs']
            ]
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['growth-story'], $options);
    
    include 'templates/about-company-history.php';
}
?>
