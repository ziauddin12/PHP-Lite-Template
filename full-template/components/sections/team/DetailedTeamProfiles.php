<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Detailed Team Profiles - 4 Varianten
 * Detaillierte Team-Profile
 */

function DetailedTeamProfiles($variant = 'role-first', $options = []) {
    $variants = [
        'role-first' => [
            'title' => 'Lerne unser Team kennen',
            'subtitle' => 'Eine klare Beschreibung deiner Dienstleistungen sorgt dafür, dass Besucher nicht sofort wieder abspringen. So bleiben sie länger auf deiner Seite und finden genau das, wonach sie suchen.',
            'members' => [
                [
                    'name' => 'Hans Friedrich Braun',
                    'position' => 'CEO & Founder',
                    'bio' => 'Onepage ist eine deutsche Software, die seit 2019 auf dem Markt ist. Hans führt das Unternehmen mit strategischer Vision und operativer Exzellenz.',
                    'image' => ImageLibrary::$teamImages['professionals']['ceo_male'],
                    'roleFirst' => true,
                    'social' => ['linkedin' => '#', 'email' => 'hans@company.com']
                ],
                [
                    'name' => 'Laura Weber',
                    'position' => 'Finance & Accounting',
                    'bio' => 'Mit über 10 Jahren Erfahrung in der Finanzbranche steuert Laura die finanzielle Strategie und sorgt für nachhaltiges Wachstum.',
                    'image' => ImageLibrary::$teamImages['professionals']['cfo_female'],
                    'roleFirst' => true,
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Nico Zimmermann',
                    'position' => 'Advisor',
                    'bio' => 'Als strategischer Berater bringt Nico internationale Erfahrung und tiefgreifende Branchenkenntnis in unser Team ein.',
                    'image' => ImageLibrary::$teamImages['professionals']['advisor_male'],
                    'roleFirst' => true,
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Lukas Schmidt',
                    'position' => 'Customer Care',
                    'bio' => 'Lukas sorgt dafür, dass unsere Kunden die bestmögliche Betreuung erhalten und ihre Ziele erfolgreich erreichen.',
                    'image' => ImageLibrary::$teamImages['professionals']['support_male'],
                    'roleFirst' => true,
                    'social' => ['linkedin' => '#']
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4',
            'style' => 'role-first',
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800'
        ],
        'comprehensive-bios' => [
            'title' => 'Lernen Sie unser Team kennen',
            'subtitle' => 'Erfahrene Experten mit unterschiedlichen Hintergründen, vereint durch die gemeinsame Vision, außergewöhnliche Ergebnisse zu liefern.',
            'members' => [
                [
                    'name' => 'Dr. Alexandra Petrov',
                    'position' => 'Chief Strategy Officer',
                    'bio' => 'Alexandra verfügt über 15 Jahre Erfahrung in der strategischen Unternehmensberatung. Sie hat einen Doktortitel in Betriebswirtschaft von der London Business School und hat zuvor bei McKinsey & Company gearbeitet. Ihre Expertise liegt in der digitalen Transformation und der Skalierung von Tech-Unternehmen. Sie spricht fließend Deutsch, Englisch und Russisch.',
                    'image' => ImageLibrary::$teamImages['professionals']['cso_female'],
                    'social' => ['linkedin' => '#', 'email' => 'alexandra@company.com']
                ],
                [
                    'name' => 'Marcus Thompson',
                    'position' => 'Head of Engineering',
                    'bio' => 'Marcus ist ein erfahrener Softwarearchitekt mit über 12 Jahren Erfahrung in der Entwicklung skalierbarer Systeme. Er hat Computer Science am MIT studiert und war zuvor Senior Engineer bei Google. Seine Leidenschaft gilt modernen Technologien wie Kubernetes, Microservices und Machine Learning.',
                    'image' => ImageLibrary::$teamImages['professionals']['engineer_male'],
                    'social' => ['linkedin' => '#', 'github' => '#']
                ],
                [
                    'name' => 'Sophie Martinez',
                    'position' => 'Creative Director',
                    'bio' => 'Sophie kombiniert künstlerische Vision mit strategischem Denken. Sie hat an der Parsons School of Design studiert und über 10 Jahre Erfahrung in führenden Werbeagenturen gesammelt. Ihre Arbeiten wurden mehrfach ausgezeichnet, darunter der Cannes Lions Award für innovative Kampagnengestaltung.',
                    'image' => ImageLibrary::$teamImages['professionals']['creative_female'],
                    'social' => ['linkedin' => '#', 'dribbble' => '#']
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-3',
            'style' => 'comprehensive',
            'bgClass' => 'bg-white dark:bg-slate-900'
        ],
        'varied-descriptions' => [
            'title' => 'Unser vielfältiges Team',
            'subtitle' => 'Verschiedene Persönlichkeiten, eine gemeinsame Mission - lernen Sie die Menschen kennen, die unser Unternehmen prägen.',
            'members' => [
                [
                    'name' => 'Elena Rodriguez',
                    'position' => 'Product Manager',
                    'bio' => 'Produktvisionärin mit Fokus auf nutzerorientierte Lösungen.',
                    'image' => ImageLibrary::$teamImages['professionals']['pm_female'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'James Wilson',
                    'position' => 'Senior Developer',
                    'bio' => 'Full-Stack-Entwickler mit Expertise in React, Node.js und Cloud-Architekturen. James hat über 8 Jahre Erfahrung in der Entwicklung komplexer Webanwendungen und ist ein Experte für Performance-Optimierung.',
                    'image' => ImageLibrary::$teamImages['professionals']['developer_male'],
                    'social' => ['linkedin' => '#', 'github' => '#']
                ],
                [
                    'name' => 'Amara Okafor',
                    'position' => 'UX Researcher',
                    'bio' => 'Nutzerforscherin mit Psychologie-Hintergrund. Amara hat einen Master in Cognitive Psychology und spezialisiert sich auf die Analyse von Nutzerverhalten. Sie führt regelmäßig Usability-Tests durch und entwickelt datengetriebene Design-Strategien für eine optimale User Experience.',
                    'image' => ImageLibrary::$teamImages['professionals']['ux_female'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Thomas Müller',
                    'position' => 'DevOps Engineer',
                    'bio' => 'Infrastruktur-Spezialist.',
                    'image' => ImageLibrary::$teamImages['professionals']['devops_male'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Priya Sharma',
                    'position' => 'Data Scientist',
                    'bio' => 'KI-Expertin mit Fokus auf Machine Learning und Datenanalyse. Priya hat einen PhD in Computer Science vom IIT Delhi.',
                    'image' => ImageLibrary::$teamImages['professionals']['data_female'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Carlos Santos',
                    'position' => 'Sales Director',
                    'bio' => 'Vertriebsprofi mit internationaler Erfahrung in B2B-Sales und Kundenbeziehungsmanagement.',
                    'image' => ImageLibrary::$teamImages['professionals']['sales_male'],
                    'social' => ['linkedin' => '#']
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
            'style' => 'varied',
            'bgClass' => 'bg-slate-50 dark:bg-slate-800'
        ],
        'large-team-grid' => [
            'title' => 'Unser großes Team',
            'subtitle' => 'Über 50 talentierte Professionals arbeiten täglich daran, außergewöhnliche Ergebnisse für unsere Kunden zu erzielen.',
            'members' => [
                [
                    'name' => 'Sarah Kim',
                    'position' => 'VP of Engineering',
                    'bio' => 'Technische Führungskraft mit 12+ Jahren Erfahrung in der Skalierung von Engineering-Teams.',
                    'image' => ImageLibrary::$teamImages['professionals']['vp_female'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Michael Chen',
                    'position' => 'Head of Sales',
                    'bio' => 'Vertriebsexperte mit nachgewiesenen Erfolgen im B2B-Bereich und Teamführung.',
                    'image' => ImageLibrary::$teamImages['professionals']['sales_male'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Lisa Anderson',
                    'position' => 'Marketing Director',
                    'bio' => 'Kreative Marketingstrategin mit Fokus auf digitale Kampagnen und Brand Building.',
                    'image' => ImageLibrary::$teamImages['professionals']['marketing_female'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'David Park',
                    'position' => 'Lead Designer',
                    'bio' => 'Design-Experte mit Leidenschaft für nutzerorientierte Interfaces und moderne Ästhetik.',
                    'image' => ImageLibrary::$teamImages['professionals']['designer_male'],
                    'social' => ['linkedin' => '#', 'dribbble' => '#']
                ],
                [
                    'name' => 'Rachel Green',
                    'position' => 'HR Manager',
                    'bio' => 'People & Culture Expertin, die sich um das Wohlbefinden und die Entwicklung unseres Teams kümmert.',
                    'image' => ImageLibrary::$teamImages['professionals']['hr_female'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Alex Johnson',
                    'position' => 'Product Owner',
                    'bio' => 'Produktstratege mit starkem analytischen Hintergrund und Kundenorientierung.',
                    'image' => ImageLibrary::$teamImages['professionals']['po_male'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Maya Patel',
                    'position' => 'QA Manager',
                    'bio' => 'Qualitätssicherungsexpertin mit Fokus auf automatisierte Tests und Prozessoptimierung.',
                    'image' => ImageLibrary::$teamImages['professionals']['qa_female'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Robert Taylor',
                    'position' => 'Business Analyst',
                    'bio' => 'Datengetriebener Analyst mit Expertise in Geschäftsprozessen und strategischer Planung.',
                    'image' => ImageLibrary::$teamImages['professionals']['analyst_male'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Jennifer Liu',
                    'position' => 'Customer Success',
                    'bio' => 'Kundenbetreuungsexpertin, die sicherstellt, dass unsere Kunden maximalen Wert erhalten.',
                    'image' => ImageLibrary::$teamImages['professionals']['cs_female'],
                    'social' => ['linkedin' => '#']
                ],
                [
                    'name' => 'Daniel Brown',
                    'position' => 'Security Engineer',
                    'bio' => 'Cybersecurity-Spezialist mit Fokus auf sichere Systemarchitekturen und Compliance.',
                    'image' => ImageLibrary::$teamImages['professionals']['security_male'],
                    'social' => ['linkedin' => '#']
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-5',
            'style' => 'large-grid',
            'showCTA' => true,
            'ctaButton' => [
                'text' => 'Karriere bei uns',
                'link' => '#careers'
            ],
            'bgClass' => 'bg-gradient-to-br from-purple-50 to-violet-100 dark:from-purple-900 dark:to-violet-800'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['role-first'], $options);
    
    include 'templates/detailed-team-profiles.php';
}
?>
