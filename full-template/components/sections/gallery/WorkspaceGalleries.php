<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Workspace Galleries - 6 Varianten
 * Arbeitsplatz-Galerien für verschiedene Büroumgebungen
 */

function WorkspaceGalleries($variant = 'simple-workspace', $options = []) {
    $variants = [
        'simple-workspace' => [
            'headline' => 'Unser Arbeitsbereich',
            'description' => 'Dein Büro zu teilen, schafft einen menschlicheren und nahbareren Eindruck.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['main_office'],
                    'alt' => 'Moderner Arbeitsplatz',
                    'title' => 'Hauptarbeitsbereich',
                    'description' => 'Unser zentraler Arbeitsbereich für produktive Zusammenarbeit'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['meeting_space'],
                    'alt' => 'Besprechungsbereich',
                    'title' => 'Kollaborationszone',
                    'description' => 'Offene Bereiche für spontane Meetings und Brainstorming'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['quiet_zone'],
                    'alt' => 'Ruhezone',
                    'title' => 'Fokus-Arbeitsplätze',
                    'description' => 'Ruhige Bereiche für konzentrierte Einzelarbeit'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['lounge_area'],
                    'alt' => 'Lounge Bereich',
                    'title' => 'Entspannungsbereich',
                    'description' => 'Gemütliche Lounge für Pausen und informelle Gespräche'
                ]
            ],
            'gridColumns' => 2,
            'showLightbox' => true,
            'style' => 'simple-workspace'
        ],
        'focused-workspace' => [
            'headline' => 'Der ideale Ort für Fokus',
            'description' => 'Ein mittelgroßer, einfacher Text für ein echtes Onepage-Beispiel.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['focus_area'],
                    'alt' => 'Ruhiger Arbeitsplatz',
                    'title' => 'Fokus-Zone',
                    'description' => 'Ruhiger Bereich für konzentrierte Arbeit'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['individual_desk'],
                    'alt' => 'Einzelarbeitsplatz',
                    'title' => 'Persönlicher Arbeitsplatz',
                    'description' => 'Ergonomisch eingerichtete Arbeitsplätze für maximale Produktivität'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['quiet_corner'],
                    'alt' => 'Ruhige Ecke',
                    'title' => 'Stille Ecke',
                    'description' => 'Abgeschiedene Bereiche für ungestörtes Arbeiten'
                ]
            ],
            'gridColumns' => 3,
            'showLightbox' => true,
            'style' => 'focused-workspace'
        ],
        'collaboration-space' => [
            'headline' => 'Für die Zusammenarbeit gemacht',
            'description' => 'Unsere Räume sind speziell für effektive Teamarbeit und kreative Zusammenarbeit konzipiert.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['team_area'],
                    'alt' => 'Team-Arbeitsbereich',
                    'title' => 'Team-Hub',
                    'description' => 'Zentraler Bereich für Teamarbeit und gemeinsame Projekte'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['brainstorm_room'],
                    'alt' => 'Brainstorming-Raum',
                    'title' => 'Kreativraum',
                    'description' => 'Inspirierender Raum für Brainstorming und Ideenfindung'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['collaboration_zone'],
                    'alt' => 'Kollaborationszone',
                    'title' => 'Offene Zusammenarbeit',
                    'description' => 'Flexible Bereiche für verschiedene Arten der Zusammenarbeit'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['project_room'],
                    'alt' => 'Projektraum',
                    'title' => 'Projektbesprechung',
                    'description' => 'Dedizierte Räume für Projektplanung und -durchführung'
                ]
            ],
            'gridColumns' => 2,
            'showLightbox' => true,
            'style' => 'collaboration-space'
        ],
        'team-space' => [
            'headline' => 'Unser Team, unser Space',
            'description' => 'Ein Arbeitsplatz, der unser Team zusammenbringt und gemeinsame Erfolge ermöglicht.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['team_kitchen'],
                    'alt' => 'Team-Küche',
                    'title' => 'Gemeinsame Küche',
                    'description' => 'Treffpunkt für informelle Gespräche bei Kaffee und Snacks'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['team_lounge'],
                    'alt' => 'Team-Lounge',
                    'title' => 'Team-Lounge',
                    'description' => 'Entspannter Bereich für Pausen und Teamgespräche'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['open_office'],
                    'alt' => 'Offenes Büro',
                    'title' => 'Offener Arbeitsbereich',
                    'description' => 'Transparente Arbeitsumgebung für bessere Kommunikation'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['team_meeting'],
                    'alt' => 'Team-Meeting',
                    'title' => 'Team-Besprechungen',
                    'description' => 'Regelmäßige Team-Meetings für Abstimmung und Planung'
                ]
            ],
            'gridColumns' => 2,
            'showLightbox' => true,
            'style' => 'team-space'
        ],
        'modern-office' => [
            'headline' => 'Modernes Büro der Zukunft',
            'description' => 'Unsere moderne Büroumgebung kombiniert Technologie, Design und Funktionalität.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['modern_reception'],
                    'alt' => 'Moderne Rezeption',
                    'title' => 'Empfangsbereich',
                    'description' => 'Einladender Empfangsbereich mit modernem Design'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['tech_room'],
                    'alt' => 'Technologie-Raum',
                    'title' => 'Tech-Hub',
                    'description' => 'Hochmoderne Technologie für effiziente Arbeitsabläufe'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['glass_office'],
                    'alt' => 'Glasbüro',
                    'title' => 'Transparente Büros',
                    'description' => 'Glaswände schaffen Offenheit bei gleichzeitiger Privatsphäre'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['modern_conference'],
                    'alt' => 'Moderne Konferenz',
                    'title' => 'Konferenzbereich',
                    'description' => 'State-of-the-Art Konferenzräume für wichtige Meetings'
                ]
            ],
            'gridColumns' => 2,
            'showLightbox' => true,
            'style' => 'modern-office'
        ],
        'creative-workspace' => [
            'headline' => 'Kreativität trifft Funktionalität',
            'description' => 'Unsere kreativen Arbeitsbereiche inspirieren zu innovativen Lösungen und außergewöhnlichen Ideen.',
            'images' => [
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['design_studio'],
                    'alt' => 'Design Studio',
                    'title' => 'Design Studio',
                    'description' => 'Kreativer Raum für Design und visuelle Konzepte'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['art_wall'],
                    'alt' => 'Kunst-Wand',
                    'title' => 'Inspiration Wall',
                    'description' => 'Kunstvolle Gestaltung als Quelle der Inspiration'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['creative_corner'],
                    'alt' => 'Kreativ-Ecke',
                    'title' => 'Kreativ-Zone',
                    'description' => 'Flexible Bereiche für kreative Prozesse und Experimente'
                ],
                [
                    'src' => ImageLibrary::$galleryImages['workspace']['workshop_area'],
                    'alt' => 'Workshop-Bereich',
                    'title' => 'Workshop-Raum',
                    'description' => 'Multifunktionale Räume für Workshops und Schulungen'
                ]
            ],
            'gridColumns' => 2,
            'showLightbox' => true,
            'style' => 'creative-workspace'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['simple-workspace'], $options);
    
    ob_start();
    include __DIR__ . '/templates/workspace-galleries.php';
    return ob_get_clean();
}
?>
