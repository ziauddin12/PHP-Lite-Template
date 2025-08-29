<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Project Product Galleries - 4 Varianten
 * Projekt- und Produkt-Galerien
 */

function ProjectProductGalleries($variant = 'portfolio-showcase', $options = []) {
    $variants = [
        'portfolio-showcase' => [
            'headline' => 'Unser Portfolio',
            'description' => 'Eine Auswahl unserer besten Projekte und kreativen Arbeiten.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['portfolio']['web_project'],
                    'alt' => 'Website Design Projekt',
                    'title' => 'E-Commerce Website',
                    'description' => 'Moderne E-Commerce Lösung mit responsivem Design',
                    'category' => 'Web Design',
                    'date' => 'März 2024',
                    'tags' => ['E-Commerce', 'React', 'Design'],
                    'link' => 'https://example.com'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['portfolio']['mobile_app'],
                    'alt' => 'Mobile App Design',
                    'title' => 'Fitness App',
                    'description' => 'Benutzerfreundliche Fitness-App für iOS und Android',
                    'category' => 'Mobile App',
                    'date' => 'Februar 2024',
                    'tags' => ['Mobile', 'Fitness', 'UX/UI'],
                    'link' => 'https://example.com'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['portfolio']['branding'],
                    'alt' => 'Branding Projekt',
                    'title' => 'Corporate Branding',
                    'description' => 'Komplettes Branding für Startup-Unternehmen',
                    'category' => 'Branding',
                    'date' => 'Januar 2024',
                    'tags' => ['Branding', 'Logo', 'Identity'],
                    'link' => 'https://example.com'
                ]
            ],
            'showMetadata' => true,
            'showLightbox' => true,
            'gridColumns' => 3,
            'style' => 'portfolio-showcase'
        ],
        'product-gallery' => [
            'headline' => 'Unsere Produkte',
            'description' => 'Entdecken Sie unser vielfältiges Produktsortiment in verschiedenen Kategorien.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['products']['software'],
                    'alt' => 'Software Produkt',
                    'title' => 'Business Software',
                    'description' => 'Umfassende Lösung für Unternehmensverwaltung',
                    'category' => 'Software',
                    'price' => '€299/Monat'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['products']['consulting'],
                    'alt' => 'Beratung',
                    'title' => 'Strategieberatung',
                    'description' => 'Professionelle Beratung für Ihr Unternehmen',
                    'category' => 'Beratung',
                    'price' => '€150/Stunde'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['products']['training'],
                    'alt' => 'Schulungen',
                    'title' => 'Team Workshops',
                    'description' => 'Maßgeschneiderte Schulungen für Ihr Team',
                    'category' => 'Schulung',
                    'price' => '€2.500/Tag'
                ]
            ],
            'showMetadata' => true,
            'showLightbox' => true,
            'gridColumns' => 3,
            'style' => 'product-gallery'
        ],
        'before-after' => [
            'headline' => 'Vorher-Nachher Vergleiche',
            'description' => 'Sehen Sie die beeindruckenden Transformationen unserer Projekte.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['transformations']['office_after'],
                    'beforeImage' => ImageLibrary::$galleryImages['transformations']['office_before'],
                    'afterImage' => ImageLibrary::$galleryImages['transformations']['office_after'],
                    'alt' => 'Büro Renovation',
                    'title' => 'Büro-Modernisierung',
                    'description' => 'Komplette Transformation eines veralteten Büroraums',
                    'category' => 'Renovation',
                    'date' => 'April 2024'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['transformations']['website_after'],
                    'beforeImage' => ImageLibrary::$galleryImages['transformations']['website_before'],
                    'afterImage' => ImageLibrary::$galleryImages['transformations']['website_after'],
                    'alt' => 'Website Redesign',
                    'title' => 'Website-Redesign',
                    'description' => 'Von veralteter Website zu modernem Web-Auftritt',
                    'category' => 'Web Design',
                    'date' => 'März 2024'
                ]
            ],
            'showMetadata' => true,
            'showLightbox' => true,
            'gridColumns' => 2,
            'style' => 'before-after'
        ],
        'case-studies' => [
            'headline' => 'Fallstudien',
            'description' => 'Detaillierte Einblicke in unsere erfolgreichen Projekte und deren Ergebnisse.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['case_studies']['ecommerce'],
                    'alt' => 'E-Commerce Fallstudie',
                    'title' => 'E-Commerce Erfolgsgeschichte',
                    'description' => '300% Umsatzsteigerung durch optimierte User Experience',
                    'category' => 'E-Commerce',
                    'results' => '+300% Umsatz',
                    'duration' => '6 Monate',
                    'client' => 'Fashion Retailer'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['case_studies']['app'],
                    'alt' => 'App Entwicklung',
                    'title' => 'Mobile App Launch',
                    'description' => 'Erfolgreicher Launch einer Fitness-App mit 50k Downloads',
                    'category' => 'Mobile App',
                    'results' => '50k Downloads',
                    'duration' => '8 Monate',
                    'client' => 'Fitness Studio'
                ]
            ],
            'showMetadata' => true,
            'showLightbox' => true,
            'gridColumns' => 2,
            'style' => 'case-studies'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['portfolio-showcase'], $options);
    
    ob_start();
    include __DIR__ . '/templates/project-product-galleries.php';
    return ob_get_clean();
}
?>
