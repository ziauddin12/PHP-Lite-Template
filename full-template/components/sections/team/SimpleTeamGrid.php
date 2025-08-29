<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Simple Team Grid - 6 Varianten
 * Einfache Grid-Layouts für Team-Darstellung
 */

function SimpleTeamGrid($variant = 'basic-four', $options = []) {
    $variants = [
        'basic-four' => [
            'title' => 'Unser starkes Team',
            'subtitle' => 'Lernen Sie die Menschen kennen, die täglich für Ihren Erfolg arbeiten. Ein Team aus Experten, Visionären und Machern.',
            'members' => [
                [
                    'name' => 'Sarah Weber',
                    'position' => 'CEO & Gründerin',
                    'bio' => 'Mit über 15 Jahren Erfahrung in der Tech-Branche führt Sarah unser Team mit Vision und Leidenschaft.',
                    'image' => ImageLibrary::$teamImages['professionals']['ceo_female'],
                    'social' => [
                        'linkedin' => '#',
                        'twitter' => '#',
                        'email' => 'sarah@company.com'
                    ]
                ],
                [
                    'name' => 'Michael Schmidt',
                    'position' => 'CTO',
                    'bio' => 'Tech-Experte mit Fokus auf skalierbare Architekturen und innovative Lösungen für komplexe Herausforderungen.',
                    'image' => ImageLibrary::$teamImages['professionals']['cto_male'],
                    'social' => [
                        'linkedin' => '#',
                        'github' => '#',
                        'email' => 'michael@company.com'
                    ]
                ],
                [
                    'name' => 'Anna Müller',
                    'position' => 'Head of Marketing',
                    'bio' => 'Kreative Strategin, die komplexe Ideen in überzeugende Botschaften verwandelt und Marken zum Leben erweckt.',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_female'],
                    'social' => [
                        'linkedin' => '#',
                        'instagram' => '#',
                        'email' => 'anna@company.com'
                    ]
                ],
                [
                    'name' => 'Thomas Klein',
                    'position' => 'Lead Developer',
                    'bio' => 'Code-Architekt mit Passion für Clean Code und moderne Entwicklungspraktiken. Verwandelt Ideen in Software.',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_male'],
                    'social' => [
                        'linkedin' => '#',
                        'github' => '#',
                        'email' => 'thomas@company.com'
                    ]
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4',
            'style' => 'card'
        ],
        'executive-roles' => [
            'title' => 'Führungsteam',
            'subtitle' => 'Die Köpfe hinter unserem Erfolg. Erfahrene Führungskräfte mit einer gemeinsamen Vision für die Zukunft.',
            'members' => [
                [
                    'name' => 'Dr. Elisabeth Hoffmann',
                    'position' => 'Chief Executive Officer',
                    'bio' => 'Promovierte Betriebswirtin mit 20+ Jahren Führungserfahrung in internationalen Konzernen.',
                    'image' => ImageLibrary::$teamImages['leadership']['founder_female'],
                    'social' => [
                        'linkedin' => '#',
                        'xing' => '#',
                        'email' => 'elisabeth@company.com'
                    ]
                ],
                [
                    'name' => 'Robert Fischer',
                    'position' => 'Chief Technology Officer',
                    'bio' => 'Technologie-Visionär und Architekt unserer digitalen Zukunft. Experte für Enterprise-Lösungen.',
                    'image' => ImageLibrary::$teamImages['leadership']['executive_male'],
                    'social' => [
                        'linkedin' => '#',
                        'github' => '#',
                        'email' => 'robert@company.com'
                    ]
                ],
                [
                    'name' => 'Maria Gonzalez',
                    'position' => 'Chief Financial Officer',
                    'bio' => 'Finanzexpertin mit internationalem Background. Sorgt für nachhaltiges Wachstum und finanzielle Stabilität.',
                    'image' => ImageLibrary::$teamImages['professionals']['cfo_female'],
                    'social' => [
                        'linkedin' => '#',
                        'email' => 'maria@company.com'
                    ]
                ],
                [
                    'name' => 'Alexander Wagner',
                    'position' => 'Chief Operations Officer',
                    'bio' => 'Prozessoptimierer und Effizienz-Experte. Sorgt dafür, dass alles reibungslos läuft.',
                    'image' => ImageLibrary::$teamImages['leadership']['executive_male'],
                    'social' => [
                        'linkedin' => '#',
                        'email' => 'alexander@company.com'
                    ]
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4',
            'style' => 'executive'
        ],
        'extended-team' => [
            'title' => 'Unser erweiterte Team',
            'subtitle' => 'Talentierte Fachkräfte aus verschiedenen Bereichen arbeiten zusammen, um außergewöhnliche Ergebnisse zu erzielen.',
            'members' => [
                [
                    'name' => 'Lisa Bauer',
                    'position' => 'Senior UX Designer',
                    'bio' => 'Verwandelt komplexe User Journeys in intuitive Erlebnisse.',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_female'],
                    'social' => ['linkedin' => '#', 'dribbble' => '#']
                ],
                [
                    'name' => 'David Chen',
                    'position' => 'DevOps Engineer',
                    'bio' => 'Infrastruktur-Experte für skalierbare Cloud-Lösungen.',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_male'],
                    'social' => ['linkedin' => '#', 'github' => '#']
                ],
                [
                    'name' => 'Sophie Laurent',
                    'position' => 'Content Strategist',
                    'bio' => 'Erzählt Geschichten, die Marken zum Leben erwecken.',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_female'],
                    'social' => ['linkedin' => '#', 'twitter' => '#']
                ],
                [
                    'name' => 'Marco Rossi',
                    'position' => 'Sales Manager',
                    'bio' => 'Baut langfristige Kundenbeziehungen auf und aus.',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_male'],
                    'social' => ['linkedin' => '#', 'xing' => '#']
                ],
                [
                    'name' => 'Julia Petrov',
                    'position' => 'Data Scientist',
                    'bio' => 'Verwandelt Daten in wertvolle Erkenntnisse.',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_female'],
                    'social' => ['linkedin' => '#', 'github' => '#']
                ],
                [
                    'name' => 'Ahmed Hassan',
                    'position' => 'Quality Engineer',
                    'bio' => 'Sorgt für höchste Qualitätsstandards in allen Bereichen.',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_male'],
                    'social' => ['linkedin' => '#', 'email' => '#']
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
            'style' => 'extended'
        ],
        'large-team' => [
            'title' => 'Unser großes Team',
            'subtitle' => 'Über 50 Experten arbeiten täglich daran, Ihre Visionen Realität werden zu lassen.',
            'members' => [
                // Führungsebene
                [
                    'name' => 'Dr. Stefan Richter',
                    'position' => 'CEO',
                    'bio' => 'Visionärer Unternehmensführer',
                    'image' => ImageLibrary::$teamImages['leadership']['founder_male'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Jennifer Walsh',
                    'position' => 'COO',
                    'bio' => 'Operations-Expertin',
                    'image' => ImageLibrary::$teamImages['leadership']['executive_female'],
                    'social' => ['linkedin' => '#']
                ],
                // Entwicklungsteam
                [
                    'name' => 'Alex Petrov',
                    'position' => 'Lead Frontend',
                    'bio' => 'React & TypeScript Experte',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_male'],
                    'social' => ['github' => '#']
                ],
                [
                    'name' => 'Nina Kowalski',
                    'position' => 'Backend Architect',
                    'bio' => 'Skalierbare API-Entwicklung',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_female'],
                    'social' => ['github' => '#']
                ],
                // Design Team
                [
                    'name' => 'Carlos Mendez',
                    'position' => 'Creative Director',
                    'bio' => 'Visuelle Markenführung',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_male'],
                    'social' => ['dribbble' => '#']
                ],
                [
                    'name' => 'Emma Thompson',
                    'position' => 'UX Researcher',
                    'bio' => 'User-zentrierte Forschung',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_female'],
                    'social' => ['linkedin' => '#']
                ],
                // Marketing Team
                [
                    'name' => 'Luis Rodriguez',
                    'position' => 'Growth Hacker',
                    'bio' => 'Datengetriebenes Marketing',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_male'],
                    'social' => ['twitter' => '#']
                ],
                [
                    'name' => 'Yuki Tanaka',
                    'position' => 'Brand Manager',
                    'bio' => 'Globale Markenstrategie',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_female'],
                    'social' => ['linkedin' => '#']
                ]
            ],
            'layout' => 'grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4',
            'style' => 'compact'
        ],
        'detailed-team' => [
            'title' => 'Lernen Sie uns kennen',
            'subtitle' => 'Jeder bringt einzigartige Fähigkeiten und Perspektiven mit. Gemeinsam schaffen wir außergewöhnliche Ergebnisse.',
            'members' => [
                [
                    'name' => 'Prof. Dr. Andreas Weber',
                    'position' => 'Chief Innovation Officer',
                    'bio' => 'Andreas promovierte in Informatik an der TU München und leitete 10 Jahre lang die F&E-Abteilung bei einem Fortune 500 Unternehmen. Seine Expertise in KI und Machine Learning treibt unsere Innovation voran.',
                    'image' => ImageLibrary::$teamImages['leadership']['founder_male'],
                    'social' => [
                        'linkedin' => '#',
                        'scholar' => '#',
                        'email' => 'andreas@company.com'
                    ],
                    'achievements' => ['15+ Patente', 'MIT Technology Review 35', 'TEDx Speaker']
                ],
                [
                    'name' => 'Isabella Martinez',
                    'position' => 'VP of Product',
                    'bio' => 'Isabella hat bei Google und Apple Weltklasse-Produkte entwickelt. Sie versteht es meisterhaft, Nutzerbedürfnisse in innovative Lösungen zu übersetzen.',
                    'image' => ImageLibrary::$teamImages['leadership']['executive_female'],
                    'social' => [
                        'linkedin' => '#',
                        'twitter' => '#',
                        'email' => 'isabella@company.com'
                    ],
                    'achievements' => ['Ex-Google PM', 'Product Hunt #1', '50+ Produkt-Launches']
                ],
                [
                    'name' => 'Raj Patel',
                    'position' => 'Head of Engineering',
                    'bio' => 'Raj skalierte Systeme für Millionen von Nutzern bei Uber und Netflix. Seine Expertise in verteilten Systemen ist unübertroffen.',
                    'image' => ImageLibrary::$teamImages['professionals']['cto_male'],
                    'social' => [
                        'linkedin' => '#',
                        'github' => '#',
                        'email' => 'raj@company.com'
                    ],
                    'achievements' => ['Ex-Netflix Senior', 'Kubernetes Contributor', 'AWS Certified']
                ]
            ],
            'layout' => 'grid-cols-1 lg:grid-cols-3',
            'style' => 'detailed'
        ],
        'grid-with-cta' => [
            'title' => 'Werde Teil unseres Teams',
            'subtitle' => 'Wir suchen talentierte Menschen, die mit uns die Zukunft gestalten wollen. Entdecke offene Positionen.',
            'members' => [
                [
                    'name' => 'Lena Schneider',
                    'position' => 'People & Culture Lead',
                    'bio' => 'Sorgt dafür, dass sich jeder bei uns wohlfühlt und sein volles Potenzial entfalten kann.',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_female'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Kevin O\'Connor',
                    'position' => 'Talent Acquisition',
                    'bio' => 'Findet die besten Talente und hilft ihnen, bei uns zu starten.',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_male'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Zara Ahmed',
                    'position' => 'Learning & Development',
                    'bio' => 'Unterstützt kontinuierliches Lernen und berufliche Weiterentwicklung.',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_female'],
                    'social' => ['linkedin' => '#']
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-3',
            'style' => 'cta',
            'cta' => [
                'title' => 'Offene Positionen',
                'text' => 'Bewirb dich jetzt',
                'link' => '#jobs'
            ]
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['basic-four'], $options);
    
    include 'templates/simple-team-grid.php';
}
?>
