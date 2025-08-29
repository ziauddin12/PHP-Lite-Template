<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Company Integrated Teams - 4 Varianten
 * Unternehmens-integrierte Team-Darstellungen
 */

function CompanyIntegratedTeams($variant = 'large-team-display', $options = []) {
    $variants = [
        'large-team-display' => [
            'title' => 'Lerne unser Team kennen',
            'subtitle' => 'Eine klare und überzeugende Beschreibung deiner Dienstleistungen sorgt dafür, dass Besucher nicht sofort wieder abspringen, sobald sie die Seite öffnen.',
            'companyName' => 'GutFirma GmbH',
            'members' => [
                [
                    'name' => 'Hans Müller',
                    'position' => 'GF bei GutFirma GmbH',
                    'bio' => 'Strategische Führung und Unternehmensleitung mit über 20 Jahren Erfahrung in der Branche.',
                    'image' => ImageLibrary::$teamImages['professionals']['ceo_male'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Marianne Fischer',
                    'position' => 'Teamleitung bei GutFirma GmbH',
                    'bio' => 'Operative Teamführung und Projektmanagement für erfolgreiche Umsetzung aller Initiativen.',
                    'image' => ImageLibrary::$teamImages['professionals']['manager_female'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Katharina Koch',
                    'position' => 'HR bei GutFirma GmbH',
                    'bio' => 'Personalentwicklung und Mitarbeiterbetreuung für ein starkes und motiviertes Team.',
                    'image' => ImageLibrary::$teamImages['professionals']['hr_female'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Ralf Schmidt',
                    'position' => 'IT bei GutFirma GmbH',
                    'bio' => 'Technische Expertise und Systemadministration für moderne und sichere Lösungen.',
                    'image' => ImageLibrary::$teamImages['professionals']['it_male'],
                    'social' => ['linkedin' => '#']
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4',
            'style' => 'company-branded',
            'bgClass' => 'bg-white dark:bg-slate-900'
        ],
        'company-branded' => [
            'title' => 'Unser Führungsteam',
            'subtitle' => 'Die erfahrenen Köpfe hinter unserem Erfolg - vereint durch gemeinsame Werte und Vision.',
            'companyName' => 'TechVision GmbH',
            'members' => [
                [
                    'name' => 'Dr. Andreas Weber',
                    'position' => 'Geschäftsführer bei TechVision GmbH',
                    'bio' => 'Promovierter Betriebswirt mit 15+ Jahren Führungserfahrung in der Tech-Industrie.',
                    'image' => ImageLibrary::$teamImages['professionals']['ceo_male'],
                    'social' => ['linkedin' => '#', 'email' => 'andreas@techvision.de']
                ],
                [
                    'name' => 'Sandra Klein',
                    'position' => 'Prokuristin bei TechVision GmbH',
                    'bio' => 'Strategische Planerin mit Fokus auf nachhaltige Unternehmensentwicklung.',
                    'image' => ImageLibrary::$teamImages['professionals']['coo_female'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Marcus Hoffmann',
                    'position' => 'Abteilungsleiter IT bei TechVision GmbH',
                    'bio' => 'IT-Architekt mit Expertise in Cloud-Technologien und digitaler Transformation.',
                    'image' => ImageLibrary::$teamImages['professionals']['it_male'],
                    'social' => ['linkedin' => '#', 'github' => '#']
                ],
                [
                    'name' => 'Julia Schneider',
                    'position' => 'Marketing Director bei TechVision GmbH',
                    'bio' => 'Kreative Marketingstrategin mit internationaler B2B-Erfahrung.',
                    'image' => ImageLibrary::$teamImages['professionals']['marketing_female'],
                    'social' => ['linkedin' => '#']
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4',
            'style' => 'branded',
            'bgClass' => 'bg-slate-50 dark:bg-slate-800'
        ],
        'executive-focus' => [
            'title' => 'Führung mit Vision',
            'subtitle' => 'Lernen Sie die Person kennen, die unser Unternehmen mit Leidenschaft und strategischem Weitblick führt.',
            'members' => [
                [
                    'name' => 'Jennifer Rodriguez',
                    'position' => 'CEO & Founder',
                    'bio' => 'Jennifer gründete das Unternehmen 2018 mit der Vision, innovative Lösungen für komplexe Geschäftsprobleme zu entwickeln. Mit ihrem MBA von der Stanford Business School und über 12 Jahren Erfahrung in der Tech-Industrie führt sie das Unternehmen zu kontinuierlichem Wachstum.',
                    'image' => ImageLibrary::$teamImages['professionals']['ceo_female'],
                    'achievements' => [
                        'MBA Stanford Business School',
                        '12+ Jahre Tech-Industrie Erfahrung',
                        'Forbes 30 Under 30 Alumna',
                        'Mehrfach ausgezeichnete Unternehmerin'
                    ],
                    'social' => ['linkedin' => '#', 'twitter' => '#', 'email' => 'jennifer@company.com'],
                    'isExecutive' => true
                ]
            ],
            'layout' => 'grid-cols-1',
            'style' => 'executive-focus',
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800'
        ],
        'leadership-profile' => [
            'title' => 'Unsere Führung',
            'subtitle' => 'Erfahrene Führungspersönlichkeit mit nachgewiesener Erfolgsbilanz in der Unternehmensführung.',
            'members' => [
                [
                    'name' => 'Jens Ludwig',
                    'position' => 'CEO & Co-founder',
                    'bio' => 'Eine klare und überzeugende Beschreibung deiner Dienstleistungen sorgt dafür, dass Besucher nicht sofort wieder abspringen, nachdem sie die Seite geöffnet haben. Jens bringt über zwei Jahrzehnte Führungserfahrung mit und hat mehrere erfolgreiche Unternehmen aufgebaut.',
                    'image' => ImageLibrary::$teamImages['professionals']['ceo_male'],
                    'qualifications' => [
                        'Über 20 Jahre Führungserfahrung',
                        'Praktische strategische Expertise',
                        'Globale Geschäftsperspektive',
                        'Belastbar und ergebnisorientiert',
                        'Proven Track Record in Skalierung',
                        'Internationale Markterschließung'
                    ],
                    'social' => ['linkedin' => '#', 'email' => 'jens@company.com'],
                    'isLeadership' => true
                ]
            ],
            'layout' => 'grid-cols-1',
            'style' => 'leadership-profile',
            'bgClass' => 'bg-gradient-to-br from-purple-50 to-violet-100 dark:from-purple-900 dark:to-violet-800'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['large-team-display'], $options);
    
    include 'templates/company-integrated-teams.php';
}
?>
