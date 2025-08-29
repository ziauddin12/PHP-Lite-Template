<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Detailed Case Studies - 3 Varianten
 * Detaillierte Fallstudien
 */

function DetailedCaseStudies($variant = 'case-study-full', $options = []) {
    $variants = [
        'case-study-full' => [
            'title' => '1.450 Bewerbungen in 30 Tagen. Unglaublich!',
            'subtitle' => 'Erfolgsgeschichten unserer Kunden',
            'description' => 'Wir haben ein Erlebnis verwandelt und den gesamten Prozess so digitalisiert, dass dein Team ihn komplett selbst verwalten konnte.',
            'caseStudies' => [
                [
                    'title' => '1.450 Bewerbungen in 30 Tagen',
                    'subtitle' => 'Recruiting-Transformation für Vertex Solutions',
                    'client' => [
                        'name' => 'Finneas Braun',
                        'position' => 'Project Manager',
                        'company' => 'Vertex Solutions',
                        'avatar' => ImageLibrary::$testimonialImages['professionals']['project_manager_male']
                    ],
                    'problem' => 'Der Kunde wurde von zahlreichen irrelevanten oder ungewöhnlichen Anfragen überflutet. Wir wurden gebeten, zu helfen.',
                    'solution' => 'Wir haben ein Erlebnis verwandelt und den gesamten Prozess so digitalisiert, dass dein Team ihn komplett selbst verwalten konnte.',
                    'results' => [
                        ['metric' => 'Neue Webseite erstelt', 'value' => '✓', 'description' => 'Vollständig responsive Design'],
                        ['metric' => 'Bewerbungen', 'value' => '1,450+', 'description' => 'In nur 30 Tagen'],
                        ['metric' => 'Verbesserter Prozess', 'value' => '✓', 'description' => 'Automatisierte Workflows'],
                        ['metric' => 'Rechtzeitig umgesetzt', 'value' => '✓', 'description' => 'Pünktliche Lieferung']
                    ],
                    'links' => [
                        ['label' => 'Aescion\'s Webseite', 'url' => '#', 'icon' => 'website'],
                        ['label' => 'LinkedIn', 'url' => '#', 'icon' => 'linkedin'],
                        ['label' => 'YouTube', 'url' => '#', 'icon' => 'youtube']
                    ],
                    'image' => ImageLibrary::$testimonialImages['caseStudy']['analytics_dashboard'],
                    'testimonial' => 'Wir haben ein Erlebnis verwandelt und den gesamten Prozess so digitalisiert, dass dein Team ihn komplett selbst verwalten konnte.',
                    'timeline' => '30 Tage',
                    'category' => 'Recruiting',
                    'roi' => '+300%'
                ]
            ],
            'showProblemSolution' => true,
            'showResults' => true,
            'showLinks' => true,
            'style' => 'full',
            'bgClass' => 'bg-white dark:bg-slate-900'
        ],
        'case-study-compact' => [
            'title' => '1,450 Bewerbungen in 30 Tagen',
            'subtitle' => 'Erfolgreiche Projekte im Überblick',
            'description' => 'Kompakte Übersicht unserer erfolgreichsten Kundenprojekte mit den wichtigsten Kennzahlen.',
            'caseStudies' => [
                [
                    'title' => '1,450 Bewerbungen in 30 Tagen',
                    'subtitle' => 'Recruiting-Optimierung',
                    'client' => [
                        'name' => 'Finneas Braun',
                        'position' => 'Project Manager',
                        'company' => 'Vertex Solutions',
                        'avatar' => ImageLibrary::$testimonialImages['professionals']['project_manager_male']
                    ],
                    'problem' => 'Der Kunde wurde von zahlreichen irrelevanten oder ungewöhnlichen Anfragen überflutet.',
                    'solution' => 'Wir haben ein Erlebnis verwandelt und den gesamten Prozess so digitalisiert.',
                    'results' => [
                        ['metric' => 'Neue Webseite erstelt', 'value' => '✓'],
                        ['metric' => 'Bewerbungen', 'value' => '1,450+'],
                        ['metric' => 'Prozessoptimierung', 'value' => '✓'],
                        ['metric' => 'ROI Steigerung', 'value' => '+300%']
                    ],
                    'image' => ImageLibrary::$testimonialImages['caseStudy']['growth_chart'],
                    'category' => 'Digital Transformation',
                    'timeline' => '1 Monat'
                ],
                [
                    'title' => 'E-Commerce Umsatzsteigerung um 250%',
                    'subtitle' => 'Online-Shop Optimierung',
                    'client' => [
                        'name' => 'Sarah Chen',
                        'position' => 'E-Commerce Manager',
                        'company' => 'Fashion Forward',
                        'avatar' => ImageLibrary::$testimonialImages['professionals']['ecommerce_manager_female']
                    ],
                    'problem' => 'Niedrige Conversion-Rate und hohe Absprungrate im Online-Shop.',
                    'solution' => 'Komplette UX/UI Überarbeitung und Performance-Optimierung implementiert.',
                    'results' => [
                        ['metric' => 'Umsatzsteigerung', 'value' => '+250%'],
                        ['metric' => 'Conversion Rate', 'value' => '+180%'],
                        ['metric' => 'Ladezeit', 'value' => '-70%'],
                        ['metric' => 'Kundenzufriedenheit', 'value' => '+95%']
                    ],
                    'image' => ImageLibrary::$testimonialImages['caseStudy']['ecommerce_dashboard'],
                    'category' => 'E-Commerce',
                    'timeline' => '6 Wochen'
                ]
            ],
            'showProblemSolution' => true,
            'showResults' => true,
            'showLinks' => false,
            'style' => 'compact',
            'bgClass' => 'bg-slate-50 dark:bg-slate-800'
        ],
        'case-study-minimal' => [
            'title' => '1,450 Bewerbungen in nur 30 Tagen',
            'subtitle' => 'Erfolge auf einen Blick',
            'description' => 'Schnelle Übersicht über unsere erfolgreichsten Kundenprojekte mit direkten Links zu den Details.',
            'caseStudies' => [
                [
                    'title' => '1,450 Bewerbungen in nur 30 Tagen',
                    'subtitle' => 'Recruiting Revolution',
                    'client' => [
                        'name' => 'Finneas Braun',
                        'position' => 'Project Manager',
                        'company' => 'Vertex Solutions',
                        'avatar' => ImageLibrary::$testimonialImages['professionals']['project_manager_male']
                    ],
                    'results' => [
                        ['metric' => 'Bewerbungen', 'value' => '1,450'],
                        ['metric' => 'Zeitrahmen', 'value' => '30 Tage'],
                        ['metric' => 'ROI', 'value' => '+300%'],
                        ['metric' => 'Effizienzsteigerung', 'value' => '+400%']
                    ],
                    'links' => [
                        ['label' => 'Aescion\'s Webseite', 'url' => '#'],
                        ['label' => 'LinkedIn', 'url' => '#'],
                        ['label' => 'Vollständige Fallstudie', 'url' => '#']
                    ],
                    'image' => ImageLibrary::$testimonialImages['caseStudy']['success_metrics'],
                    'category' => 'HR & Recruiting'
                ],
                [
                    'title' => 'E-Commerce Umsatz verdreifacht',
                    'subtitle' => 'Online-Shop Transformation',
                    'client' => [
                        'name' => 'Maria Rodriguez',
                        'position' => 'CEO',
                        'company' => 'StyleHub',
                        'avatar' => ImageLibrary::$testimonialImages['professionals']['ceo_female']
                    ],
                    'results' => [
                        ['metric' => 'Umsatzsteigerung', 'value' => '+300%'],
                        ['metric' => 'Conversion Rate', 'value' => '+150%'],
                        ['metric' => 'Traffic', 'value' => '+200%'],
                        ['metric' => 'Customer Lifetime Value', 'value' => '+180%']
                    ],
                    'links' => [
                        ['label' => 'StyleHub Website', 'url' => '#'],
                        ['label' => 'Erfolgsgeschichte lesen', 'url' => '#'],
                        ['label' => 'Video Case Study', 'url' => '#']
                    ],
                    'image' => ImageLibrary::$testimonialImages['caseStudy']['ecommerce_growth'],
                    'category' => 'E-Commerce'
                ],
                [
                    'title' => 'SaaS Startup: 10x User Growth',
                    'subtitle' => 'Skalierung & Marketing',
                    'client' => [
                        'name' => 'Alex Thompson',
                        'position' => 'Founder',
                        'company' => 'DataFlow Pro',
                        'avatar' => ImageLibrary::$testimonialImages['professionals']['founder_male']
                    ],
                    'results' => [
                        ['metric' => 'User Growth', 'value' => '1000%'],
                        ['metric' => 'MRR', 'value' => '+800%'],
                        ['metric' => 'Churn Rate', 'value' => '-60%'],
                        ['metric' => 'Market Expansion', 'value' => '5 Länder']
                    ],
                    'links' => [
                        ['label' => 'DataFlow Pro', 'url' => '#'],
                        ['label' => 'Success Story', 'url' => '#'],
                        ['label' => 'Webinar Recording', 'url' => '#']
                    ],
                    'image' => ImageLibrary::$testimonialImages['caseStudy']['saas_growth'],
                    'category' => 'SaaS & Tech'
                ]
            ],
            'showProblemSolution' => false,
            'showResults' => false,
            'showLinks' => true,
            'style' => 'minimal',
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['case-study-full'], $options);
    
    ob_start();
    include __DIR__ . '/templates/detailed-case-studies.php';
    return ob_get_clean();
}
?>
