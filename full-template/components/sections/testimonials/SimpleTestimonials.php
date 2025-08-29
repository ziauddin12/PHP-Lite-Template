<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Simple Testimonials - 2 Varianten
 * Einfache Testimonial-Layouts
 */

function SimpleTestimonials($variant = 'basic-grid', $options = []) {
    $variants = [
        'basic-grid' => [
            'title' => 'Was unsere Kunden sagen',
            'subtitle' => 'Über 10.000 zufriedene Kunden vertrauen auf unsere Lösungen. Lesen Sie, was sie über ihre Erfahrungen berichten.',
            'testimonials' => [
                [
                    'text' => 'Fantastischer Service und unglaublich professionelles Team. Sie haben unsere Erwartungen in jeder Hinsicht übertroffen.',
                    'author' => 'Sarah Miller',
                    'position' => 'CEO, TechStart GmbH',
                    'company' => 'TechStart GmbH',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['marketing_manager_female'],
                    'rating' => 5,
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['novatech']
                ],
                [
                    'text' => 'Die Zusammenarbeit war von Anfang an reibungslos. Schnelle Umsetzung, faire Preise und exzellente Qualität.',
                    'author' => 'Michael Schmidt',
                    'position' => 'Geschäftsführer',
                    'company' => 'Digital Solutions AG',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['sales_director_male'],
                    'rating' => 5,
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['optima']
                ],
                [
                    'text' => 'Endlich ein Partner, der versteht was wir brauchen. Die Ergebnisse sprechen für sich - 200% mehr Leads!',
                    'author' => 'Jennifer Walsh',
                    'position' => 'Marketing Director',
                    'company' => 'Growth Marketing Inc.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['operations_manager_female'],
                    'rating' => 5,
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['artistry']
                ],
                [
                    'text' => 'Professionell, zuverlässig und innovativ. Genau der Partner, den wir für unser Wachstum gebraucht haben.',
                    'author' => 'David Chen',
                    'position' => 'CTO',
                    'company' => 'InnovateNow Ltd.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['marketing_manager_male'],
                    'rating' => 5,
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['stellar']
                ],
                [
                    'text' => 'Hervorragende Betreuung und maßgeschneiderte Lösungen. Wir sind sehr zufrieden mit den Ergebnissen.',
                    'author' => 'Lisa Rodriguez',
                    'position' => 'VP Operations',
                    'company' => 'Enterprise Solutions',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['operations_manager_female'],
                    'rating' => 5,
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['vertex']
                ],
                [
                    'text' => 'Top-Qualität zu fairen Preisen. Das Team ist immer erreichbar und löst Probleme schnell und effizient.',
                    'author' => 'Thomas Weber',
                    'position' => 'Projektleiter',
                    'company' => 'BuildTech Corp.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['sales_director_male'],
                    'rating' => 5,
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['novatech']
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
            'style' => 'cards'
        ],
        'compact-grid' => [
            'title' => 'Kundenstimmen',
            'subtitle' => 'Authentische Bewertungen von echten Kunden, die täglich mit unseren Lösungen arbeiten.',
            'testimonials' => [
                [
                    'text' => 'Beste Entscheidung ever! ROI von 400% im ersten Jahr.',
                    'author' => 'Anna Kowalski',
                    'position' => 'Gründerin',
                    'company' => 'StartupBoost',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['marketing_manager_female'],
                    'rating' => 5
                ],
                [
                    'text' => 'Unglaublich schnelle Implementierung. In 2 Wochen live!',
                    'author' => 'Marco Rossi',
                    'position' => 'IT-Leiter',
                    'company' => 'FastTrack GmbH',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['sales_director_male'],
                    'rating' => 5
                ],
                [
                    'text' => 'Support ist Weltklasse. 24/7 erreichbar, immer hilfsbereit.',
                    'author' => 'Sophie Laurent',
                    'position' => 'Operations Manager',
                    'company' => 'ServicePro',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['operations_manager_female'],
                    'rating' => 5
                ],
                [
                    'text' => 'Skaliert perfekt mit unserem Wachstum. Einfach genial!',
                    'author' => 'Ahmed Hassan',
                    'position' => 'CTO',
                    'company' => 'ScaleUp Tech',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['marketing_manager_male'],
                    'rating' => 5
                ],
                [
                    'text' => 'Intuitive Bedienung, auch für Non-Techies perfekt.',
                    'author' => 'Julia Petrov',
                    'position' => 'Geschäftsführerin',
                    'company' => 'EasyBiz Solutions',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['marketing_manager_female'],
                    'rating' => 5
                ],
                [
                    'text' => 'Preis-Leistung unschlagbar. Absolute Empfehlung!',
                    'author' => 'Carlos Mendez',
                    'position' => 'Projektmanager',
                    'company' => 'ValueFirst Corp',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['sales_director_male'],
                    'rating' => 5
                ],
                [
                    'text' => 'Innovation meets Reliability. Genau was wir brauchten.',
                    'author' => 'Emma Thompson',
                    'position' => 'Head of Digital',
                    'company' => 'FutureTech',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['operations_manager_female'],
                    'rating' => 5
                ],
                [
                    'text' => 'Haben unsere Conversion um 300% gesteigert. Wow!',
                    'author' => 'Luis Rodriguez',
                    'position' => 'Marketing Lead',
                    'company' => 'GrowthHackers',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['marketing_manager_male'],
                    'rating' => 5
                ]
            ],
            'layout' => 'grid-cols-1 sm:grid-cols-2 lg:grid-cols-4',
            'style' => 'compact'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['basic-grid'], $options);
    
    include 'templates/simple-testimonials.php';
}
?>
