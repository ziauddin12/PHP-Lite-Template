<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Masonry Testimonials - 1 Variante
 * Masonry-Grid Testimonials
 */

function MasonryTestimonials($variant = 'masonry-grid', $options = []) {
    $variants = [
        'masonry-grid' => [
            'title' => 'Unsere Kunden lieben uns',
            'subtitle' => 'Authentische Bewertungen in verschiedenen Formaten',
            'description' => 'Leerraum zwischen Abschnitten ist wichtig, um verschiedene Teile Ihrer Webseite zu trennen. Das verbessert die Lesbarkeit und hebt die Ideen Ihres Inhalts hervor. Dieses spezielle Raster ist im Masonry-Modus konfiguriert. Wenn ein Element im Raster größer als die anderen ist, passt das Raster die Höhen der anderen Elemente nicht an.',
            'overallRating' => 4.9,
            'totalReviews' => 545,
            'testimonials' => [
                [
                    'name' => 'Marie Schmitt',
                    'position' => 'Operations Manager',
                    'company' => 'Optima',
                    'text' => 'Dieses spezielle Raster ist im Masonry-Modus konfiguriert. Wenn ein Element im Raster größer als die anderen ist, passt das Raster die Höhen der anderen Elemente nicht an.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['operations_manager_female'],
                    'rating' => 5,
                    'size' => 'medium',
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['optima']
                ],
                [
                    'name' => 'Ben Lehmann',
                    'position' => 'Graphic Designer',
                    'company' => 'Artistry Studios',
                    'text' => 'Dieses spezielle Raster ist im Masonry-Modus konfiguriert. Das bedeutet, wenn ein Element im Raster größer als die anderen ist, passt das Raster die Höhen der anderen Elemente nicht an. Das unterscheidet es vom oberen Raster und macht es perfekt für verschiedene Inhaltsgrößen. Die Flexibilität ist beeindruckend.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['graphic_designer_male'],
                    'rating' => 5,
                    'size' => 'large',
                    'featured' => true,
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['artistry']
                ],
                [
                    'name' => 'Paul Richter',
                    'position' => 'Content Writer',
                    'company' => 'Creative Content Co.',
                    'text' => 'Exzellente Qualität und professioneller Service. Kann ich nur weiterempfehlen!',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['content_writer_male'],
                    'rating' => 5,
                    'size' => 'small',
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['creative_content']
                ],
                [
                    'name' => 'Sarah Wilson',
                    'position' => 'Marketing Director',
                    'company' => 'Digital Marketing Pro',
                    'text' => 'Die Zusammenarbeit war von Anfang an professionell. Das Team versteht unsere Anforderungen und liefert stets qualitativ hochwertige Ergebnisse.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['marketing_director_female'],
                    'rating' => 5,
                    'size' => 'medium',
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['digital_marketing']
                ],
                [
                    'name' => 'Thomas Anderson',
                    'position' => 'Project Manager',
                    'company' => 'Tech Solutions Inc.',
                    'text' => 'Hervorragende Arbeit!',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['project_manager_male'],
                    'rating' => 4,
                    'size' => 'small',
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['tech_solutions']
                ],
                [
                    'name' => 'Lisa Chen',
                    'position' => 'UX Designer',
                    'company' => 'Design Studio X',
                    'text' => 'Innovative Lösungen und exzellente Umsetzung. Das Team hat unsere Vision perfekt verstanden und in die Realität umgesetzt. Die Aufmerksamkeit für Details ist bemerkenswert.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['ux_designer_female'],
                    'rating' => 5,
                    'size' => 'large',
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['design_studio']
                ],
                [
                    'name' => 'Michael Rodriguez',
                    'position' => 'CEO',
                    'company' => 'StartupTech',
                    'text' => 'Zuverlässig und professionell. Genau das, was wir gesucht haben.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['ceo_male'],
                    'rating' => 5,
                    'size' => 'medium',
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['startuptech']
                ],
                [
                    'name' => 'Anna Kowalski',
                    'position' => 'Product Manager',
                    'company' => 'Innovation Labs',
                    'text' => 'Top Service!',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['product_manager_female'],
                    'rating' => 5,
                    'size' => 'small',
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['innovation_labs']
                ]
            ],
            'layout' => 'masonry',
            'style' => 'masonry-grid',
            'bgClass' => 'bg-white dark:bg-slate-900'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['masonry-grid'], $options);
    
    ob_start();
    include __DIR__ . '/templates/masonry-testimonials.php';
    return ob_get_clean();
}
?>
