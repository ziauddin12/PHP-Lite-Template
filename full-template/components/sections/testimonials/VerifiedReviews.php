<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Verified Reviews - 1 Variante
 * Verifizierte Kundenbewertungen
 */

function VerifiedReviews($variant = 'verified-testimonials', $options = []) {
    $variants = [
        'verified-testimonials' => [
            'title' => 'Was unsere Kunden sagen',
            'subtitle' => 'Verifizierte Bewertungen von echten Kunden',
            'description' => 'Den Raum zwischen Abschnitten, auch "Whitespace" genannt, zu nutzen, ist super wichtig, um die verschiedenen Bereiche deiner Webseite klar voneinander abzugrenzen. Das macht deine Inhalte viel lesbarer und hebt deine Ideen besser hervor.',
            'testimonials' => [
                [
                    'name' => 'Vivien Müller',
                    'location' => 'Deutschland',
                    'text' => 'Kundenstimmen sind super wichtig für jede Webseite. Und noch besser ist es, wenn sie echt sind und man sie mit den Originalbeiträgen verknüpfen kann. So sieht jeder, dass es stimmt! Die Qualität der Arbeit hat mich wirklich überzeugt.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['marketing_manager_female'],
                    'verified' => true,
                    'date' => 'März 2024',
                    'platform' => 'Google Reviews',
                    'rating' => 5
                ],
                [
                    'name' => 'Mustafa Demir',
                    'location' => 'Deutschland',
                    'text' => 'Kundenstimmen sind total wichtig für deine Webseite! Und noch besser ist, wenn sie echt sind und man sie mit den Originalbeiträgen verknüpfen kann. So sieht jeder, dass es stimmt! Professioneller Service von A bis Z.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['manager_male'],
                    'verified' => true,
                    'date' => 'Februar 2024',
                    'platform' => 'Trustpilot',
                    'rating' => 5
                ],
                [
                    'name' => 'Jutta Weber',
                    'location' => 'Deutschland',
                    'text' => 'Kundenstimmen sind super wichtig für jede Webseite. Und noch besser ist es, wenn sie echt sind und man sie mit den Originalbeiträgen verknüpfen kann. So sieht jeder, dass es stimmt! Ich kann diese Dienstleistung nur weiterempfehlen.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['operations_manager_female'],
                    'verified' => true,
                    'date' => 'Januar 2024',
                    'platform' => 'ProvenExpert',
                    'rating' => 5
                ],
                [
                    'name' => 'Thomas Schneider',
                    'location' => 'Österreich',
                    'text' => 'Exzellente Betreuung und hervorragende Ergebnisse. Das Team ist sehr kompetent und geht auf individuelle Wünsche ein. Absolute Empfehlung!',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['consultant_male'],
                    'verified' => true,
                    'date' => 'Dezember 2023',
                    'platform' => 'Yelp',
                    'rating' => 5
                ],
                [
                    'name' => 'Anna Kowalski',
                    'location' => 'Schweiz',
                    'text' => 'Professioneller Service, faire Preise und pünktliche Lieferung. Genau das, was man sich als Kunde wünscht. Gerne wieder!',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['designer_female'],
                    'verified' => true,
                    'date' => 'November 2023',
                    'platform' => 'Facebook',
                    'rating' => 5
                ],
                [
                    'name' => 'Erik Larsson',
                    'location' => 'Schweden',
                    'text' => 'Outstanding service quality and excellent customer support. The team delivered exactly what was promised and even exceeded our expectations.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['developer_male'],
                    'verified' => true,
                    'date' => 'Oktober 2023',
                    'platform' => 'LinkedIn',
                    'rating' => 5
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
            'style' => 'verified',
            'bgClass' => 'bg-white dark:bg-slate-900'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['verified-testimonials'], $options);
    
    ob_start();
    include __DIR__ . '/templates/verified-reviews.php';
    return ob_get_clean();
}
?>
