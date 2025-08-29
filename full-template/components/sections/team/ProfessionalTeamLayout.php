<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Professional Team Layout - 4 Varianten
 * Professionelle Team-Layouts
 */

function ProfessionalTeamLayout($variant = 'executive-showcase', $options = []) {
    $variants = [
        'executive-showcase' => [
            'title' => 'Wir sind ein Team erfahrener Profis',
            'subtitle' => 'Eine klare und überzeugende Beschreibung deiner Dienstleistungen sorgt dafür, dass Besucher nicht sofort wieder abspringen, nachdem sie die Seite geöffnet haben.',
            'members' => [
                [
                    'name' => 'Achim Braun',
                    'position' => 'CEO & Gründer',
                    'bio' => 'Visionärer Unternehmer mit über 15 Jahren Erfahrung in der Führung innovativer Tech-Unternehmen.',
                    'image' => ImageLibrary::$teamImages['professionals']['ceo_male'],
                    'social' => [
                        'linkedin' => '#',
                        'email' => 'achim@company.com'
                    ]
                ],
                [
                    'name' => 'Anna Becker',
                    'position' => 'Finance & Accounting',
                    'bio' => 'Finanzexpertin mit umfassender Erfahrung in Unternehmensfinanzierung und strategischer Planung.',
                    'image' => ImageLibrary::$teamImages['professionals']['cfo_female'],
                    'social' => [
                        'linkedin' => '#',
                        'email' => 'anna@company.com'
                    ]
                ],
                [
                    'name' => 'Oliver Santana',
                    'position' => 'Advisor',
                    'bio' => 'Strategischer Berater mit internationaler Erfahrung in der Skalierung von Tech-Unternehmen.',
                    'image' => ImageLibrary::$teamImages['professionals']['advisor_male'],
                    'social' => [
                        'linkedin' => '#'
                    ]
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-3',
            'style' => 'executive',
            'showCTA' => true,
            'ctaButton' => [
                'text' => 'Kontakt aufnehmen',
                'link' => '#contact'
            ],
            'bgClass' => 'bg-gradient-to-br from-slate-50 to-slate-100 dark:from-slate-800 dark:to-slate-900'
        ],
        'clean-layout' => [
            'title' => 'Unser professionelles Team',
            'subtitle' => 'Lernen Sie die Experten kennen, die täglich für Ihren Erfolg arbeiten.',
            'members' => [
                [
                    'name' => 'Dr. Sarah Müller',
                    'position' => 'Head of Strategy',
                    'bio' => 'Strategische Denkerin mit Promotion in Betriebswirtschaft und 10+ Jahren Beratungserfahrung.',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_female'],
                    'social' => [
                        'linkedin' => '#',
                        'email' => 'sarah@company.com'
                    ]
                ],
                [
                    'name' => 'Marcus Weber',
                    'position' => 'Technical Lead',
                    'bio' => 'Technischer Architekt mit Expertise in skalierbaren Systemen und modernen Entwicklungsmethoden.',
                    'image' => ImageLibrary::$teamImages['professionals']['developer_male'],
                    'social' => [
                        'linkedin' => '#',
                        'github' => '#'
                    ]
                ],
                [
                    'name' => 'Lisa Chen',
                    'position' => 'UX Director',
                    'bio' => 'Design-Expertin mit Fokus auf nutzerorientierte Interfaces und digitale Erlebnisse.',
                    'image' => ImageLibrary::$teamImages['professionals']['designer_female'],
                    'social' => [
                        'linkedin' => '#',
                        'dribbble' => '#'
                    ]
                ],
                [
                    'name' => 'Tom Anderson',
                    'position' => 'Operations Manager',
                    'bio' => 'Prozess-Optimierer mit Erfahrung in der Skalierung operativer Abläufe.',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_male'],
                    'social' => [
                        'linkedin' => '#'
                    ]
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4',
            'style' => 'clean',
            'bgClass' => 'bg-white dark:bg-slate-900'
        ],
        'wide-container' => [
            'title' => 'Führungsteam',
            'subtitle' => 'Die Köpfe hinter unserem Erfolg - ein Team aus erfahrenen Führungskräften und Visionären.',
            'members' => [
                [
                    'name' => 'Jennifer Rodriguez',
                    'position' => 'Chief Executive Officer',
                    'bio' => 'Führt das Unternehmen mit strategischer Vision und operativer Exzellenz.',
                    'image' => ImageLibrary::$teamImages['professionals']['ceo_female'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'David Kim',
                    'position' => 'Chief Technology Officer',
                    'bio' => 'Verantwortlich für technische Innovation und Produktentwicklung.',
                    'image' => ImageLibrary::$teamImages['professionals']['cto_male'],
                    'social' => ['linkedin' => '#', 'github' => '#']
                ],
                [
                    'name' => 'Maria Santos',
                    'position' => 'Chief Marketing Officer',
                    'bio' => 'Treibt Markenwachstum und Kundenakquisition voran.',
                    'image' => ImageLibrary::$teamImages['professionals']['cmo_female'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Alex Thompson',
                    'position' => 'Chief Financial Officer',
                    'bio' => 'Steuert Finanzstrategie und Unternehmensplanung.',
                    'image' => ImageLibrary::$teamImages['professionals']['cfo_male'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Sophie Laurent',
                    'position' => 'Chief People Officer',
                    'bio' => 'Fokussiert auf Talentmanagement und Unternehmenskultur.',
                    'image' => ImageLibrary::$teamImages['professionals']['hr_female'],
                    'social' => ['linkedin' => '#']
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-3 lg:grid-cols-5',
            'style' => 'wide',
            'containerWidth' => 'wide',
            'bgClass' => 'bg-slate-50 dark:bg-slate-800'
        ],
        'standard-layout' => [
            'title' => 'Meet the Team',
            'subtitle' => 'Passionate professionals dedicated to delivering exceptional results for our clients.',
            'members' => [
                [
                    'name' => 'Robert Fischer',
                    'position' => 'Senior Consultant',
                    'bio' => 'Experienced consultant specializing in digital transformation and business optimization.',
                    'image' => ImageLibrary::$teamImages['professionals']['consultant_male'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Emma Wagner',
                    'position' => 'Project Manager',
                    'bio' => 'Skilled project manager ensuring smooth execution and timely delivery of all initiatives.',
                    'image' => ImageLibrary::$teamImages['professionals']['pm_female'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Lucas Hoffmann',
                    'position' => 'Lead Developer',
                    'bio' => 'Full-stack developer with expertise in modern web technologies and cloud solutions.',
                    'image' => ImageLibrary::$teamImages['professionals']['developer_male'],
                    'social' => ['linkedin' => '#', 'github' => '#']
                ],
                [
                    'name' => 'Nina Schulz',
                    'position' => 'Business Analyst',
                    'bio' => 'Analytical thinker focused on data-driven insights and strategic recommendations.',
                    'image' => ImageLibrary::$teamImages['professionals']['analyst_female'],
                    'social' => ['linkedin' => '#']
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4',
            'style' => 'standard',
            'bgClass' => 'bg-white dark:bg-slate-900'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['executive-showcase'], $options);
    
    include 'templates/professional-team-layout.php';
}
?>
