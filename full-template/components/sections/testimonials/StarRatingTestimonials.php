<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Star Rating Testimonials - 1 Variante
 * Sterne-Bewertungen
 */

function StarRatingTestimonials($variant = 'star-reviews', $options = []) {
    $variants = [
        'star-reviews' => [
            'title' => 'Das sagen unsere Kunden:',
            'subtitle' => 'Bewertungen von echten Nutzern',
            'description' => 'Über 500 Bewertungen mit einer durchschnittlichen Bewertung von 4.9 Sternen sprechen für sich. Lesen Sie, was unsere Kunden über ihre Erfahrungen sagen.',
            'overallRating' => 4.9,
            'totalReviews' => 545,
            'testimonials' => [
                [
                    'name' => 'Ben Lehmann',
                    'initial' => 'Ben L.',
                    'text' => 'Kundenstimmen sind super wichtig für jede Webseite. Die Qualität der Arbeit und die Professionalität des Teams haben mich wirklich beeindruckt. Kann ich nur weiterempfehlen!',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['graphic_designer_male'],
                    'rating' => 5,
                    'date' => '2 Wochen her',
                    'helpful' => 12
                ],
                [
                    'name' => 'Sarah Martinez',
                    'initial' => 'Sarah M.',
                    'text' => 'Exzellenter Service von Anfang bis Ende. Das Team war sehr professionell und hat alle unsere Anforderungen erfüllt. Besonders die schnelle Kommunikation hat uns überzeugt.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['marketing_manager_female'],
                    'rating' => 5,
                    'date' => '1 Monat her',
                    'helpful' => 8
                ],
                [
                    'name' => 'Michael Chen',
                    'initial' => 'Michael C.',
                    'text' => 'Sehr zufrieden mit dem Ergebnis! Die Umsetzung war genau wie besprochen und die Qualität übertrifft unsere Erwartungen. Gerne wieder!',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['developer_male'],
                    'rating' => 5,
                    'date' => '3 Wochen her',
                    'helpful' => 15
                ],
                [
                    'name' => 'Lisa Weber',
                    'initial' => 'Lisa W.',
                    'text' => 'Professionelle Beratung und hervorragende Umsetzung. Das Team ist sehr kompetent und geht auf individuelle Wünsche ein.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['consultant_female'],
                    'rating' => 4,
                    'date' => '1 Woche her',
                    'helpful' => 6
                ],
                [
                    'name' => 'David Park',
                    'initial' => 'David P.',
                    'text' => 'Schnelle und zuverlässige Arbeit. Die Kommunikation war stets transparent und die Ergebnisse sprechen für sich.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['project_manager_male'],
                    'rating' => 5,
                    'date' => '2 Monate her',
                    'helpful' => 9
                ],
                [
                    'name' => 'Anna Kowalski',
                    'initial' => 'Anna K.',
                    'text' => 'Tolle Erfahrung! Das Team war sehr hilfsbereit und hat uns durch den gesamten Prozess begleitet. Absolute Empfehlung.',
                    'avatar' => ImageLibrary::$testimonialImages['professionals']['designer_female'],
                    'rating' => 5,
                    'date' => '5 Tage her',
                    'helpful' => 4
                ]
            ],
            'layout' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
            'style' => 'star-rating',
            'bgClass' => 'bg-slate-50 dark:bg-slate-800'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['star-reviews'], $options);
    
    ob_start();
    include __DIR__ . '/templates/star-rating-testimonials.php';
    return ob_get_clean();
}
?>
