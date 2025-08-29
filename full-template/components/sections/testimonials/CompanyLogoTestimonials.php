<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Company Logo Testimonials - 1 Variante
 * Testimonials mit Unternehmens-Logos
 */

function CompanyLogoTestimonials($variant = 'logo-testimonials', $options = []) {
    $variants = [
        'logo-testimonials' => [
            'title' => 'Du wirst uns lieben',
            'subtitle' => 'Vertrauen Sie auf die Erfahrung führender Unternehmen',
            'description' => 'Namhafte Unternehmen aus verschiedenen Branchen vertrauen bereits auf unsere Expertise. Lesen Sie, was unsere Geschäftspartner über die Zusammenarbeit sagen.',
            'testimonials' => [
                [
                    'name' => 'Andreas Weber',
                    'position' => 'Vertriebsleiter',
                    'company' => 'Gluck',
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['gluck'],
                    'text' => 'Die Zusammenarbeit mit diesem Team war ein echtes Vergnügen! Professionell, zuverlässig und mit einem Blick für Details. Unsere Erwartungen wurden nicht nur erfüllt, sondern übertroffen.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['sales_director_male'],
                    'rating' => 5,
                    'industry' => 'Technologie'
                ],
                [
                    'name' => 'Maria Santos',
                    'position' => 'Marketing Director',
                    'company' => 'NovaTech Solutions',
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['novatech'],
                    'text' => 'Herausragende Qualität und erstklassiger Service. Das Team hat unsere Vision perfekt umgesetzt und dabei stets professionell agiert. Absolute Empfehlung!',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['marketing_director_female'],
                    'rating' => 5,
                    'industry' => 'Software'
                ],
                [
                    'name' => 'Thomas Schneider',
                    'position' => 'CEO',
                    'company' => 'Optima',
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['optima'],
                    'text' => 'Ein zuverlässiger Partner für alle unsere Projekte. Die Kommunikation war stets transparent und die Ergebnisse sprechen für sich. Wir freuen uns auf weitere Zusammenarbeit.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['ceo_male'],
                    'rating' => 5,
                    'industry' => 'Consulting'
                ],
                [
                    'name' => 'Sarah Chen',
                    'position' => 'Operations Manager',
                    'company' => 'Digital Innovations',
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['digital_innovations'],
                    'text' => 'Innovative Lösungen und exzellente Umsetzung. Das Team versteht unsere Anforderungen und liefert stets qualitativ hochwertige Ergebnisse pünktlich.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['operations_manager_female'],
                    'rating' => 5,
                    'industry' => 'Digital Services'
                ],
                [
                    'name' => 'Michael Rodriguez',
                    'position' => 'Product Manager',
                    'company' => 'TechFlow Systems',
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['techflow'],
                    'text' => 'Strategisch denkend und operativ stark. Die Zusammenarbeit war von Anfang an professionell und die Resultate haben unsere Erwartungen übertroffen.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['product_manager_male'],
                    'rating' => 5,
                    'industry' => 'Enterprise Software'
                ],
                [
                    'name' => 'Lisa Andersson',
                    'position' => 'Head of Design',
                    'company' => 'Creative Studios',
                    'companyLogo' => ImageLibrary::$testimonialImages['companyLogos']['creative_studios'],
                    'text' => 'Kreativität trifft auf Professionalität. Das Team hat unsere Design-Vision perfekt verstanden und umgesetzt. Ein echter Gewinn für unser Projekt.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['design_lead_female'],
                    'rating' => 5,
                    'industry' => 'Design & Kreativ'
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
            'style' => 'company-logos',
            'bgClass' => 'bg-gradient-to-br from-slate-50 to-slate-100 dark:from-slate-800 dark:to-slate-900'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['logo-testimonials'], $options);
    
    ob_start();
    include __DIR__ . '/templates/company-logo-testimonials.php';
    return ob_get_clean();
}
?>
