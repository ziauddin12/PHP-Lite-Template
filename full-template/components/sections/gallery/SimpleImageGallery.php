<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Simple Image Gallery - 5 Varianten
 * Einfache Bildergalerien für verschiedene Zwecke
 */

function SimpleImageGallery($variant = 'masonry-grid', $options = []) {
    $variants = [
        'masonry-grid' => [
            'title' => 'Unsere Projekte',
            'subtitle' => 'Eine Auswahl unserer erfolgreichsten Projekte und Arbeiten. Jedes Bild erzählt eine Geschichte des Erfolgs.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['projects']['web_development'],
                    'title' => 'E-Commerce Platform',
                    'description' => 'Moderne Online-Shop Lösung mit KI-gestützten Empfehlungen',
                    'category' => 'Web Development',
                    'size' => 'large'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['projects']['mobile_app'],
                    'title' => 'Mobile Banking App',
                    'description' => 'Sichere und intuitive Banking-App für iOS und Android',
                    'category' => 'Mobile Development',
                    'size' => 'medium'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['projects']['dashboard'],
                    'title' => 'Analytics Dashboard',
                    'description' => 'Real-time Datenvisualisierung für Enterprise-Kunden',
                    'category' => 'Data Analytics',
                    'size' => 'medium'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['projects']['automation'],
                    'title' => 'Process Automation',
                    'description' => 'Workflow-Automatisierung für Fertigungsunternehmen',
                    'category' => 'Automation',
                    'size' => 'large'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['projects']['ai_solution'],
                    'title' => 'AI Customer Service',
                    'description' => 'Chatbot mit natürlicher Sprachverarbeitung',
                    'category' => 'Artificial Intelligence',
                    'size' => 'small'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['projects']['cloud_migration'],
                    'title' => 'Cloud Migration',
                    'description' => 'Nahtlose Migration kritischer Systeme in die Cloud',
                    'category' => 'Cloud Solutions',
                    'size' => 'medium'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['projects']['security_audit'],
                    'title' => 'Security Assessment',
                    'description' => 'Comprehensive Sicherheitsanalyse und -implementierung',
                    'category' => 'Cybersecurity',
                    'size' => 'small'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['projects']['integration'],
                    'title' => 'System Integration',
                    'description' => 'Verbindung verschiedener Enterprise-Systeme',
                    'category' => 'Integration',
                    'size' => 'large'
                ]
            ],
            'categories' => ['Alle', 'Web Development', 'Mobile Development', 'Data Analytics', 'Automation', 'Artificial Intelligence', 'Cloud Solutions', 'Cybersecurity', 'Integration'],
            'style' => 'masonry'
        ],
        'grid-layout' => [
            'title' => 'Portfolio Showcase',
            'subtitle' => 'Entdecken Sie unsere vielfältigen Projekte und die kreativen Lösungen, die wir für unsere Kunden entwickelt haben.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['portfolio']['design_system'],
                    'title' => 'Design System',
                    'description' => 'Einheitliches Design-System für Fintech-Startup',
                    'category' => 'UI/UX Design',
                    'metrics' => ['40% weniger Entwicklungszeit', '95% Konsistenz-Score']
                ],
                [
                    'src' => ImageLibrary::$galleryImages['portfolio']['marketplace'],
                    'title' => 'B2B Marketplace',
                    'description' => 'Vollständige Marketplace-Lösung mit Multi-Vendor Support',
                    'category' => 'E-Commerce',
                    'metrics' => ['500+ aktive Verkäufer', '€2M Transaktionsvolumen']
                ],
                [
                    'src' => ImageLibrary::$galleryImages['portfolio']['crm_system'],
                    'title' => 'Custom CRM',
                    'description' => 'Maßgeschneidertes CRM für Immobilien-Unternehmen',
                    'category' => 'Enterprise Software',
                    'metrics' => ['300% Effizienzsteigerung', '99.9% Uptime']
                ],
                [
                    'src' => ImageLibrary::$galleryImages['portfolio']['logistics_app'],
                    'title' => 'Logistics Platform',
                    'description' => 'IoT-basierte Logistik-Plattform mit Real-time Tracking',
                    'category' => 'IoT Solutions',
                    'metrics' => ['50% Kosteneinsparung', '10.000+ Sendungen/Tag']
                ],
                [
                    'src' => ImageLibrary::$galleryImages['portfolio']['healthcare_app'],
                    'title' => 'Healthcare Portal',
                    'description' => 'Patientenportal mit Telemedicine-Funktionen',
                    'category' => 'Healthcare Tech',
                    'metrics' => ['HIPAA-konform', '50.000+ Patienten']
                ],
                [
                    'src' => ImageLibrary::$galleryImages['portfolio']['fintech_app'],
                    'title' => 'Investment Platform',
                    'description' => 'Robo-Advisor für automatisierte Geldanlage',
                    'category' => 'FinTech',
                    'metrics' => ['€100M Assets under Management', 'BaFin-lizensiert']
                ]
            ],
            'categories' => ['Alle', 'UI/UX Design', 'E-Commerce', 'Enterprise Software', 'IoT Solutions', 'Healthcare Tech', 'FinTech'],
            'style' => 'grid'
        ],
        'carousel-showcase' => [
            'title' => 'Erfolgsgeschichten',
            'subtitle' => 'Jedes Projekt eine Erfolgsgeschichte. Sehen Sie, wie wir Unternehmen dabei geholfen haben, ihre Ziele zu erreichen.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['success_stories']['startup_growth'],
                    'title' => 'Startup zum Unicorn',
                    'description' => 'Wie wir einem FinTech-Startup dabei geholfen haben, eine Bewertung von €1 Milliarde zu erreichen.',
                    'category' => 'Success Story',
                    'client' => 'TechVenture GmbH',
                    'results' => [
                        '1000% Nutzerwachstum in 18 Monaten',
                        '€50M Series B Funding erhalten',
                        'Expansion in 15 neue Märkte'
                    ],
                    'testimonial' => 'Ohne Dyad hätten wir nie so schnell skalieren können. Ihre Technologie war der Schlüssel zu unserem Erfolg.',
                    'author' => 'Sarah Chen, CEO TechVenture'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['success_stories']['enterprise_transformation'],
                    'title' => 'Digitale Transformation',
                    'description' => 'Komplette Digitalisierung eines traditionellen Fertigungsunternehmens.',
                    'category' => 'Digital Transformation',
                    'client' => 'Manufacturing Corp',
                    'results' => [
                        '60% Effizienzsteigerung in der Produktion',
                        '€5M jährliche Kosteneinsparung',
                        'Vollständig papierlose Prozesse'
                    ],
                    'testimonial' => 'Die Transformation war seamless. Unsere Mitarbeiter haben die neuen Tools sofort angenommen.',
                    'author' => 'Michael Weber, CTO Manufacturing Corp'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['success_stories']['scale_up_success'],
                    'title' => 'Internationale Expansion',
                    'description' => 'Unterstützung bei der Expansion eines E-Commerce-Unternehmens in 25 Länder.',
                    'category' => 'International Growth',
                    'client' => 'GlobalShop Ltd',
                    'results' => [
                        'Expansion in 25 Länder in 12 Monaten',
                        '400% Umsatzsteigerung',
                        'Multi-Currency und Multi-Language Support'
                    ],
                    'testimonial' => 'Dyad hat unsere globalen Ambitionen Realität werden lassen. Weltklasse-Technologie für Weltklasse-Ergebnisse.',
                    'author' => 'Emma Rodriguez, Founder GlobalShop'
                ]
            ],
            'style' => 'carousel'
        ],
        'before-after' => [
            'title' => 'Transformation in Bildern',
            'subtitle' => 'Sehen Sie den dramatischen Unterschied zwischen Vorher und Nachher. Echte Transformationen, messbare Ergebnisse.',
            'comparisons' => [
                [
                    'title' => 'E-Commerce Redesign',
                    'description' => 'Komplette Neugestaltung eines Online-Shops mit Fokus auf Conversion-Optimierung.',
                    'before' => [
                        'image' => ImageLibrary::$galleryImages['before_after']['ecommerce_before'],
                        'title' => 'Vorher: Veraltetes Design',
                        'metrics' => ['2.1% Conversion Rate', '65% Bounce Rate', '€50k/Monat Umsatz']
                    ],
                    'after' => [
                        'image' => ImageLibrary::$galleryImages['before_after']['ecommerce_after'],
                        'title' => 'Nachher: Modernes UX Design',
                        'metrics' => ['8.7% Conversion Rate', '25% Bounce Rate', '€220k/Monat Umsatz']
                    ],
                    'improvements' => [
                        '314% Conversion-Steigerung',
                        '62% weniger Bounce Rate',
                        '340% Umsatzsteigerung'
                    ]
                ],
                [
                    'title' => 'Dashboard Modernisierung',
                    'description' => 'Von komplexen Excel-Sheets zu intuitiven Real-time Dashboards.',
                    'before' => [
                        'image' => ImageLibrary::$galleryImages['before_after']['dashboard_before'],
                        'title' => 'Vorher: Excel-basierte Reports',
                        'metrics' => ['4h für einen Report', 'Daten 1 Tag alt', 'Fehlerrate 15%']
                    ],
                    'after' => [
                        'image' => ImageLibrary::$galleryImages['before_after']['dashboard_after'],
                        'title' => 'Nachher: Real-time Analytics',
                        'metrics' => ['Reports in Sekunden', 'Live-Daten', 'Fehlerrate < 0.1%']
                    ],
                    'improvements' => [
                        '96% Zeitersparnis bei Reports',
                        '100% aktuelle Daten',
                        '99.9% Datengenauigkeit'
                    ]
                ],
                [
                    'title' => 'Mobile App Redesign',
                    'description' => 'Von einer funktionalen App zu einer preisgekrönten User Experience.',
                    'before' => [
                        'image' => ImageLibrary::$galleryImages['before_after']['mobile_before'],
                        'title' => 'Vorher: Funktional aber langweilig',
                        'metrics' => ['2.1★ App Store Rating', '40% Daily Active Users', '25% Retention nach 30 Tagen']
                    ],
                    'after' => [
                        'image' => ImageLibrary::$galleryImages['before_after']['mobile_after'],
                        'title' => 'Nachher: Award-winning Design',
                        'metrics' => ['4.8★ App Store Rating', '85% Daily Active Users', '78% Retention nach 30 Tagen']
                    ],
                    'improvements' => [
                        '129% bessere App-Bewertung',
                        '113% mehr aktive Nutzer',
                        '212% bessere Retention'
                    ]
                ]
            ],
            'style' => 'before-after'
        ],
        'team-gallery' => [
            'title' => 'Unser Team in Aktion',
            'subtitle' => 'Blicken Sie hinter die Kulissen und lernen Sie die Menschen kennen, die täglich für Ihren Erfolg arbeiten.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['team']['team_meeting'],
                    'title' => 'Daily Standup',
                    'description' => 'Unser agiles Team bei der täglichen Abstimmung',
                    'category' => 'Teamwork'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['team']['code_review'],
                    'title' => 'Code Review Session',
                    'description' => 'Qualitätssicherung durch Peer-Reviews',
                    'category' => 'Development'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['team']['client_presentation'],
                    'title' => 'Client Presentation',
                    'description' => 'Präsentation neuer Features für unsere Kunden',
                    'category' => 'Client Work'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['team']['brainstorming'],
                    'title' => 'Innovation Session',
                    'description' => 'Kreative Ideenfindung für neue Lösungen',
                    'category' => 'Innovation'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['team']['office_culture'],
                    'title' => 'Office Life',
                    'description' => 'Entspannte Atmosphäre in unserem Münchner Büro',
                    'category' => 'Culture'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['team']['remote_work'],
                    'title' => 'Remote Collaboration',
                    'description' => 'Effektive Zusammenarbeit über Kontinente hinweg',
                    'category' => 'Remote Work'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['team']['team_event'],
                    'title' => 'Team Building',
                    'description' => 'Gemeinsame Events stärken den Zusammenhalt',
                    'category' => 'Team Building'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['team']['learning_session'],
                    'title' => 'Knowledge Sharing',
                    'description' => 'Kontinuierliches Lernen ist Teil unserer DNA',
                    'category' => 'Learning'
                ]
            ],
            'categories' => ['Alle', 'Teamwork', 'Development', 'Client Work', 'Innovation', 'Culture', 'Remote Work', 'Team Building', 'Learning'],
            'stats' => [
                ['number' => '50+', 'label' => 'Teammitglieder'],
                ['number' => '15', 'label' => 'Nationalitäten'],
                ['number' => '8', 'label' => 'Sprachen'],
                ['number' => '99%', 'label' => 'Zufriedenheit']
            ],
            'style' => 'team'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['masonry-grid'], $options);
    
    include 'templates/simple-image-gallery.php';
}
?>
