<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Interactive Galleries - 3 Varianten
 * Interaktive Galerien mit speziellen Features
 */

function InteractiveGalleries($variant = 'lightbox-gallery', $options = []) {
    $variants = [
        'lightbox-gallery' => [
            'headline' => 'Interaktive Galerie',
            'description' => 'Klicken Sie auf ein Bild, um es in voller Größe zu betrachten.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['interactive']['lightbox_1'],
                    'alt' => 'Modernes Büro',
                    'title' => 'Hauptarbeitsbereich',
                    'description' => 'Unser zentraler Arbeitsbereich für produktive Zusammenarbeit',
                    'aspectRatio' => 'landscape'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['interactive']['lightbox_2'],
                    'alt' => 'Kreativbereich',
                    'title' => 'Design Studio',
                    'description' => 'Kreativer Raum für Design und Entwicklung',
                    'aspectRatio' => 'portrait'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['interactive']['lightbox_3'],
                    'alt' => 'Besprechungsraum',
                    'title' => 'Meeting Room',
                    'description' => 'Professioneller Raum für wichtige Besprechungen',
                    'aspectRatio' => 'square'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['interactive']['lightbox_4'],
                    'alt' => 'Lounge',
                    'title' => 'Entspannungsbereich',
                    'description' => 'Gemütliche Lounge für Pausen und informelle Gespräche',
                    'aspectRatio' => 'wide'
                ]
            ],
            'showLightbox' => true,
            'gridColumns' => 2,
            'style' => 'lightbox-gallery'
        ],
        'slider-gallery' => [
            'headline' => 'Bildergalerie',
            'description' => 'Navigieren Sie durch unsere Sammlung mit den Pfeiltasten oder automatischer Wiedergabe.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['interactive']['slider_1'],
                    'alt' => 'Team bei der Arbeit',
                    'title' => 'Teamwork',
                    'description' => 'Unser Team bei der gemeinsamen Projektarbeit'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['interactive']['slider_2'],
                    'alt' => 'Innovation',
                    'title' => 'Innovation Lab',
                    'description' => 'Hier entstehen unsere innovativen Lösungen'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['interactive']['slider_3'],
                    'alt' => 'Technologie',
                    'title' => 'Tech Stack',
                    'description' => 'Modernste Technologie für beste Ergebnisse'
                ]
            ],
            'autoPlay' => true,
            'autoPlayInterval' => 5000,
            'showThumbnails' => true,
            'showLightbox' => false,
            'style' => 'slider-gallery'
        ],
        'masonry-gallery' => [
            'headline' => 'Masonry Layout',
            'description' => 'Eine dynamische Galerie mit verschiedenen Bildgrößen im Pinterest-Style.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['interactive']['masonry_1'],
                    'alt' => 'Büro 1',
                    'title' => 'Modernes Büro',
                    'aspectRatio' => 'portrait',
                    'size' => 'large'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['interactive']['masonry_2'],
                    'alt' => 'Team Meeting',
                    'title' => 'Kollaboration',
                    'aspectRatio' => 'landscape',
                    'size' => 'medium'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['interactive']['masonry_3'],
                    'alt' => 'Arbeitsplatz',
                    'title' => 'Fokus-Zone',
                    'aspectRatio' => 'square',
                    'size' => 'small'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['interactive']['masonry_4'],
                    'alt' => 'Kreativraum',
                    'title' => 'Design Studio',
                    'aspectRatio' => 'portrait',
                    'size' => 'medium'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['interactive']['masonry_5'],
                    'alt' => 'Lounge',
                    'title' => 'Entspannung',
                    'aspectRatio' => 'wide',
                    'size' => 'large'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['interactive']['masonry_6'],
                    'alt' => 'Tech Lab',
                    'title' => 'Innovation',
                    'aspectRatio' => 'square',
                    'size' => 'small'
                ]
            ],
            'showLightbox' => true,
            'masonryColumns' => 3,
            'style' => 'masonry-gallery'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['lightbox-gallery'], $options);
    
    ob_start();
    include __DIR__ . '/templates/interactive-galleries.php';
    return ob_get_clean();
}
?>
