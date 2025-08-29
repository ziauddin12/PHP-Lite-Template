<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Branded Galleries - 2 Varianten
 * Unternehmens-Galerien mit Branding-Fokus
 */

function BrandedGalleries($variant = 'company-culture', $options = []) {
    $variants = [
        'company-culture' => [
            'headline' => 'Unsere Unternehmenskultur',
            'description' => 'Einblicke in unser Teamleben, Events und die Werte, die uns täglich antreiben.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['culture']['team_building'],
                    'alt' => 'Team Building Event',
                    'title' => 'Jährliches Team Building',
                    'description' => 'Unser jährliches Team Building Event stärkt den Zusammenhalt und macht einfach Spaß!',
                    'date' => 'März 2024',
                    'location' => 'Outdoor Adventure Park',
                    'people' => ['Marketing Team', 'Development Team', 'HR Team'],
                    'event' => 'Team Building 2024',
                    'category' => 'team-event'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['culture']['company_party'],
                    'alt' => 'Firmenfest',
                    'title' => 'Sommerfest 2024',
                    'description' => 'Unser traditionelles Sommerfest mit allen Mitarbeitern und deren Familien.',
                    'date' => 'Juli 2024',
                    'location' => 'Firmengarten',
                    'people' => ['Alle Teams', 'Familien'],
                    'event' => 'Sommerfest',
                    'category' => 'company-event'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['culture']['innovation_day'],
                    'alt' => 'Innovation Day',
                    'title' => 'Innovation Workshop',
                    'description' => 'Ein Tag voller kreativer Ideen und innovativer Lösungsansätze.',
                    'date' => 'Oktober 2024',
                    'location' => 'Innovation Lab',
                    'people' => ['Alle Entwickler', 'Product Manager'],
                    'event' => 'Innovation Day',
                    'category' => 'innovation'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['culture']['award_ceremony'],
                    'alt' => 'Auszeichnung',
                    'title' => 'Employee of the Month',
                    'description' => 'Monatliche Auszeichnung für herausragende Leistungen.',
                    'date' => 'Monatlich',
                    'location' => 'Hauptbüro',
                    'people' => ['Ausgezeichnete Mitarbeiter'],
                    'event' => 'Awards',
                    'category' => 'recognition'
                ]
            ],
            'showMetadata' => true,
            'showLightbox' => true,
            'gridColumns' => 2,
            'style' => 'company-culture'
        ],
        'behind-the-scenes' => [
            'headline' => 'Hinter den Kulissen',
            'description' => 'Authentische Einblicke in unsere Arbeitsweise und die Menschen, die unser Unternehmen ausmachen.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['behind_scenes']['early_morning'],
                    'alt' => 'Frühe Arbeitszeit',
                    'title' => 'Früh am Morgen',
                    'description' => 'Wenn die ersten Kollegen ins Büro kommen und der Tag beginnt.',
                    'date' => 'Täglich',
                    'location' => 'Hauptbüro',
                    'people' => ['Early Birds'],
                    'event' => 'Arbeitsbeginn',
                    'category' => 'behind-scenes'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['behind_scenes']['coffee_break'],
                    'alt' => 'Kaffeepause',
                    'title' => 'Kaffeepause',
                    'description' => 'Die wichtigsten Gespräche finden oft bei einer Tasse Kaffee statt.',
                    'date' => 'Mehrmals täglich',
                    'location' => 'Küche',
                    'people' => ['Alle Teams'],
                    'event' => 'Informeller Austausch',
                    'category' => 'behind-scenes'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['behind_scenes']['brainstorming'],
                    'alt' => 'Brainstorming',
                    'title' => 'Ideenfindung',
                    'description' => 'Spontane Brainstorming-Sessions bringen die besten Ideen hervor.',
                    'date' => 'Bei Bedarf',
                    'location' => 'Kreativräume',
                    'people' => ['Projektteams'],
                    'event' => 'Brainstorming',
                    'category' => 'behind-scenes'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['behind_scenes']['late_hours'],
                    'alt' => 'Späte Stunden',
                    'title' => 'Projekt-Endspurt',
                    'description' => 'Manchmal arbeiten wir bis spät in die Nacht, um wichtige Deadlines zu schaffen.',
                    'date' => 'Bei Bedarf',
                    'location' => 'Büro',
                    'people' => ['Projektteams'],
                    'event' => 'Deadline Rush',
                    'category' => 'behind-scenes'
                ]
            ],
            'showMetadata' => true,
            'showLightbox' => true,
            'gridColumns' => 2,
            'style' => 'behind-the-scenes'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['company-culture'], $options);
    
    ob_start();
    include __DIR__ . '/templates/branded-galleries.php';
    return ob_get_clean();
}
?>
