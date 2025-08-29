<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Featured Customer Stories - 1 Variante
 * Hervorgehobene Kundenstories
 */

function FeaturedCustomerStories($variant = 'customer-highlight', $options = []) {
    $variants = [
        'customer-highlight' => [
            'title' => 'Von 10.000+ Kunden bestätigte Erfahrungen. Weltweit!',
            'subtitle' => 'Das sagen glückliche Kunden über uns',
            'description' => 'Unsere Kunden aus über 50 Ländern vertrauen auf unsere Expertise. Lesen Sie authentische Erfahrungsberichte von zufriedenen Kunden.',
            'stats' => [
                'totalCustomers' => '10.000+',
                'globalReach' => true,
                'averageRating' => 4.9,
                'countries' => 50
            ],
            'testimonials' => [
                [
                    'name' => 'Katja Lehmann',
                    'position' => 'CEO',
                    'company' => 'Artistry Studios',
                    'text' => 'Ich bin sehr zufrieden. Kundenstimmen sind super wichtig für jede Webseite, und diese Plattform macht es einfach, authentische Bewertungen zu sammeln und zu präsentieren. Die Ergebnisse sprechen für sich.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['ceo_female'],
                    'rating' => 5,
                    'featured' => true,
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['artistry'],
                    'results' => [
                        'Umsatzsteigerung: +150%',
                        'Kundenanfragen: +300%',
                        'Conversion Rate: +85%'
                    ]
                ],
                [
                    'name' => 'Marcus Weber',
                    'position' => 'Marketing Director',
                    'company' => 'TechFlow Solutions',
                    'text' => 'Die Zusammenarbeit war von Anfang an professionell und ergebnisorientiert. Unser Team ist begeistert von den Resultaten.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['marketing_director_male'],
                    'rating' => 5,
                    'featured' => false,
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['techflow']
                ],
                [
                    'name' => 'Sarah Chen',
                    'position' => 'Founder',
                    'company' => 'Digital Innovations Ltd.',
                    'text' => 'Exzellenter Service und herausragende Ergebnisse. Wir können diese Lösung jedem Unternehmen empfehlen.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['founder_female'],
                    'rating' => 5,
                    'featured' => false,
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['digital_innovations']
                ]
            ],
            'layout' => 'grid-cols-1 lg:grid-cols-3',
            'style' => 'featured',
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['customer-highlight'], $options);
    
    ob_start();
    include __DIR__ . '/templates/featured-customer-stories.php';
    return ob_get_clean();
}
?>
