<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Office Environment Galleries - 5 Varianten
 * Büroumgebungs-Galerien für verschiedene Bereiche
 */

function OfficeEnvironmentGalleries($variant = 'meeting-rooms', $options = []) {
    $variants = [
        'meeting-rooms' => [
            'headline' => 'Unsere Besprechungsräume',
            'description' => 'Professionelle Räume für produktive Meetings und wichtige Geschäftstermine.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['office']['conference_room'],
                    'alt' => 'Großer Konferenzraum',
                    'title' => 'Executive Boardroom',
                    'description' => 'Unser Hauptkonferenzraum für wichtige Geschäftsbesprechungen',
                    'location' => '2. Stock, Raum 201',
                    'capacity' => '12 Personen',
                    'availability' => 'Verfügbar'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['office']['meeting_room_small'],
                    'alt' => 'Kleiner Meetingraum',
                    'title' => 'Team Meeting Room',
                    'description' => 'Kompakter Raum für Team-Besprechungen und Brainstorming',
                    'location' => '1. Stock, Raum 105',
                    'capacity' => '6 Personen',
                    'availability' => 'Verfügbar'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['office']['video_conference'],
                    'alt' => 'Video-Konferenzraum',
                    'title' => 'Video Conference Suite',
                    'description' => 'High-Tech Raum für internationale Video-Konferenzen',
                    'location' => '3. Stock, Raum 301',
                    'capacity' => '8 Personen',
                    'availability' => 'Besetzt'
                ]
            ],
            'showDetails' => true,
            'showLightbox' => true,
            'gridColumns' => 3,
            'style' => 'meeting-rooms'
        ],
        'reception-areas' => [
            'headline' => 'Empfangsbereiche',
            'description' => 'Einladende Empfangsbereiche, die einen professionellen ersten Eindruck vermitteln.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['office']['main_reception'],
                    'alt' => 'Hauptempfang',
                    'title' => 'Hauptempfang',
                    'description' => 'Moderner Empfangsbereich mit freundlichem Service-Team'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['office']['waiting_area'],
                    'alt' => 'Wartebereich',
                    'title' => 'Wartebereich',
                    'description' => 'Komfortable Sitzgelegenheiten für wartende Besucher'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['office']['lobby'],
                    'alt' => 'Lobby',
                    'title' => 'Eingangshalle',
                    'description' => 'Repräsentative Eingangshalle mit Firmenbranding'
                ]
            ],
            'showDetails' => false,
            'showLightbox' => true,
            'gridColumns' => 3,
            'style' => 'reception-areas'
        ],
        'open-spaces' => [
            'headline' => 'Offene Arbeitsbereiche',
            'description' => 'Flexible Open-Office-Landschaften, die Kommunikation und Zusammenarbeit fördern.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['office']['open_office'],
                    'alt' => 'Offenes Büro',
                    'title' => 'Open Office Landscape',
                    'description' => 'Großzügiger offener Arbeitsbereich mit flexiblen Arbeitsplätzen'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['office']['collaborative_space'],
                    'alt' => 'Kollaborationsbereich',
                    'title' => 'Collaborative Hub',
                    'description' => 'Zentrale Bereiche für spontane Zusammenarbeit und Austausch'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['office']['flexible_workspace'],
                    'alt' => 'Flexibler Arbeitsplatz',
                    'title' => 'Flexible Workstations',
                    'description' => 'Anpassbare Arbeitsplätze für verschiedene Arbeitstypen'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['office']['hot_desking'],
                    'alt' => 'Hot-Desking Bereich',
                    'title' => 'Hot-Desking Area',
                    'description' => 'Flexible Arbeitsplätze für wechselnde Nutzer'
                ]
            ],
            'showDetails' => false,
            'showLightbox' => true,
            'gridColumns' => 2,
            'style' => 'open-spaces'
        ],
        'quiet-zones' => [
            'headline' => 'Ruhezonen',
            'description' => 'Abgeschiedene Bereiche für konzentrierte Arbeit und Entspannung.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['office']['quiet_room'],
                    'alt' => 'Ruheraum',
                    'title' => 'Stiller Arbeitsraum',
                    'description' => 'Schallisolierter Raum für konzentrierte Einzelarbeit'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['office']['phone_booth'],
                    'alt' => 'Telefonkabine',
                    'title' => 'Phone Booth',
                    'description' => 'Private Kabinen für vertrauliche Telefonate'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['office']['meditation_room'],
                    'alt' => 'Entspannungsraum',
                    'title' => 'Wellness-Raum',
                    'description' => 'Ruhiger Raum für Entspannung und Meditation'
                ]
            ],
            'showDetails' => false,
            'showLightbox' => true,
            'gridColumns' => 3,
            'style' => 'quiet-zones'
        ],
        'kitchen-break-areas' => [
            'headline' => 'Küchen- und Pausenbereiche',
            'description' => 'Gemeinschaftsbereiche für Pausen, Mahlzeiten und informelle Gespräche.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['office']['main_kitchen'],
                    'alt' => 'Hauptküche',
                    'title' => 'Hauptküche',
                    'description' => 'Vollausgestattete Küche für gemeinsame Mahlzeiten'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['office']['coffee_station'],
                    'alt' => 'Kaffeestation',
                    'title' => 'Coffee Bar',
                    'description' => 'Professionelle Kaffeestation für den perfekten Kaffeegenuss'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['office']['break_room'],
                    'alt' => 'Pausenraum',
                    'title' => 'Pausenbereich',
                    'description' => 'Gemütlicher Bereich für Pausen und informelle Gespräche'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['office']['outdoor_terrace'],
                    'alt' => 'Außenterrasse',
                    'title' => 'Dachterrasse',
                    'description' => 'Outdoor-Bereich für Pausen an der frischen Luft'
                ]
            ],
            'showDetails' => false,
            'showLightbox' => true,
            'gridColumns' => 2,
            'style' => 'kitchen-break-areas'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['meeting-rooms'], $options);
    
    ob_start();
    include __DIR__ . '/templates/office-environment-galleries.php';
    return ob_get_clean();
}
?>
