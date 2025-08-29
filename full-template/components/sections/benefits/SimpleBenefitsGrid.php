<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Simple Benefits Grid - 4 Varianten
 * Einfache Grid-Layouts für Vorteile
 */

function SimpleBenefitsGrid($variant = 'three-column', $options = []) {
    $variants = [
        'three-column' => [
            'title' => 'Warum Kunden uns wählen',
            'subtitle' => 'Entdecken Sie die Vorteile, die uns von der Konkurrenz abheben und Ihren Erfolg garantieren.',
            'benefits' => [
                [
                    'icon' => 'rocket',
                    'title' => 'Blitzschnelle Umsetzung',
                    'description' => 'Von der Idee zur Realität in Rekordzeit. Unsere bewährten Prozesse sorgen für schnelle Ergebnisse.',
                    'image' => ImageLibrary::$benefitsImages['efficiency']['productivity']
                ],
                [
                    'icon' => 'shield',
                    'title' => '100% Sicherheit',
                    'description' => 'Höchste Sicherheitsstandards und vollständige GDPR-Compliance für Ihren Datenschutz.',
                    'image' => ImageLibrary::$benefitsImages['services']['quality_assurance']
                ],
                [
                    'icon' => 'support',
                    'title' => '24/7 Premium Support',
                    'description' => 'Unser Expertenteam steht Ihnen rund um die Uhr zur Verfügung - wann immer Sie uns brauchen.',
                    'image' => ImageLibrary::$benefitsImages['services']['support_24_7']
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-3',
            'style' => 'cards'
        ],
        'four-column' => [
            'title' => 'Vier Säulen unseres Erfolgs',
            'subtitle' => 'Diese vier Kernbereiche machen uns zum bevorzugten Partner für über 10.000 Unternehmen weltweit.',
            'benefits' => [
                [
                    'icon' => 'quality',
                    'title' => 'Höchste Qualität',
                    'description' => 'Jedes Detail wird perfektioniert. Qualität ist nicht verhandelbar.',
                    'image' => ImageLibrary::$benefitsImages['quality']['excellence']
                ],
                [
                    'icon' => 'speed',
                    'title' => 'Rekord-Geschwindigkeit',
                    'description' => 'Schneller als die Konkurrenz, ohne Kompromisse bei der Qualität.',
                    'image' => ImageLibrary::$benefitsImages['efficiency']['optimization']
                ],
                [
                    'icon' => 'innovation',
                    'title' => 'Innovation First',
                    'description' => 'Wir setzen auf modernste Technologien und innovative Ansätze.',
                    'image' => ImageLibrary::$benefitsImages['efficiency']['automation']
                ],
                [
                    'icon' => 'reliability',
                    'title' => 'Absolute Zuverlässigkeit',
                    'description' => '99.9% Verfügbarkeit und pünktliche Lieferung - darauf können Sie sich verlassen.',
                    'image' => ImageLibrary::$benefitsImages['services']['customer_service']
                ]
            ],
            'layout' => 'grid-cols-1 sm:grid-cols-2 lg:grid-cols-4',
            'style' => 'compact'
        ],
        'masonry-layout' => [
            'title' => 'Ihre Vorteile im Überblick',
            'subtitle' => 'Eine einzigartige Kombination aus Innovation, Qualität und Service, die Ihren Erfolg garantiert.',
            'benefits' => [
                [
                    'icon' => 'growth',
                    'title' => '300% Wachstum möglich',
                    'description' => 'Unsere Kunden erzielen durchschnittlich 300% mehr Wachstum. Statistiken belegen unseren Erfolg.',
                    'image' => ImageLibrary::$benefitsImages['statistics']['growth_charts'],
                    'size' => 'large'
                ],
                [
                    'icon' => 'time',
                    'title' => 'Zeit sparen',
                    'description' => 'Bis zu 20 Stunden pro Woche einsparen durch Automatisierung.',
                    'image' => ImageLibrary::$benefitsImages['efficiency']['productivity'],
                    'size' => 'medium'
                ],
                [
                    'icon' => 'cost',
                    'title' => 'Kosten reduzieren',
                    'description' => 'Durchschnittlich 40% Kosteneinsparung im ersten Jahr.',
                    'image' => ImageLibrary::$benefitsImages['statistics']['cost_reduction'],
                    'size' => 'medium'
                ],
                [
                    'icon' => 'security',
                    'title' => 'Bank-Level Sicherheit',
                    'description' => 'Höchste Sicherheitsstandards für Ihre sensiblen Daten.',
                    'image' => ImageLibrary::$benefitsImages['services']['quality_assurance'],
                    'size' => 'small'
                ],
                [
                    'icon' => 'integration',
                    'title' => 'Nahtlose Integration',
                    'description' => 'Funktioniert mit über 1000 Tools und Plattformen.',
                    'image' => ImageLibrary::$benefitsImages['efficiency']['automation'],
                    'size' => 'small'
                ]
            ],
            'layout' => 'masonry',
            'style' => 'masonry'
        ],
        'standard-grid' => [
            'title' => 'Die Vorteile sprechen für sich',
            'subtitle' => 'Über 50.000 zufriedene Kunden können nicht irren. Entdecken Sie, warum sie uns gewählt haben.',
            'benefits' => [
                [
                    'icon' => 'users',
                    'title' => '50.000+ Zufriedene Kunden',
                    'description' => 'Eine stetig wachsende Community, die auf unsere Lösungen vertraut und damit erfolgreich ist.',
                    'image' => ImageLibrary::$benefitsImages['statistics']['customer_satisfaction']
                ],
                [
                    'icon' => 'globe',
                    'title' => 'Globale Präsenz',
                    'description' => 'In über 50 Ländern aktiv mit lokalen Teams und globalem Know-how für Ihren Erfolg.',
                    'image' => ImageLibrary::$benefitsImages['statistics']['global_reach']
                ],
                [
                    'icon' => 'award',
                    'title' => 'Mehrfach ausgezeichnet',
                    'description' => 'Branchenführer mit über 25 internationalen Awards und Zertifizierungen.',
                    'image' => ImageLibrary::$benefitsImages['quality']['awards']
                ],
                [
                    'icon' => 'trending',
                    'title' => 'Bewiesener ROI',
                    'description' => 'Durchschnittlich 400% Return on Investment innerhalb der ersten 12 Monate.',
                    'image' => ImageLibrary::$benefitsImages['statistics']['roi_calculation']
                ],
                [
                    'icon' => 'lightning',
                    'title' => 'Sofortige Ergebnisse',
                    'description' => 'Erste messbare Verbesserungen bereits in den ersten 30 Tagen nach der Implementierung.',
                    'image' => ImageLibrary::$benefitsImages['efficiency']['optimization']
                ],
                [
                    'icon' => 'heart',
                    'title' => '99% Weiterempfehlung',
                    'description' => 'Unsere Kunden empfehlen uns weiter - der beste Beweis für unsere Qualität.',
                    'image' => ImageLibrary::$benefitsImages['statistics']['customer_satisfaction']
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
            'style' => 'detailed'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['three-column'], $options);
    
    include 'templates/simple-benefits-grid.php';
}
?>
