<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Simple CTA - 6 Varianten
 * Einfache, direkte Call-to-Action Sektionen
 */

function SimpleCTA($variant = 'immediate-action', $options = []) {
    $variants = [
        'immediate-action' => [
            'title' => 'Starten Sie noch heute!',
            'subtitle' => 'Verpassen Sie nicht die Chance, Ihr Unternehmen auf das nächste Level zu bringen. Handeln Sie jetzt!',
            'ctaText' => 'Jetzt loslegen',
            'ctaLink' => '#start',
            'secondaryCtaText' => 'Demo anfordern',
            'secondaryCtaLink' => '#demo',
            'urgency' => 'Begrenzte Zeit - Handeln Sie schnell!',
            'benefits' => [
                'Sofortiger Zugang',
                'Keine Einrichtungsgebühr',
                '30 Tage Geld-zurück-Garantie'
            ],
            'backgroundImage' => ImageLibrary::$ctaImages['action']['urgent_action'],
            'style' => 'gradient',
            'color' => 'red'
        ],
        'growth-focused' => [
            'title' => 'Bereit für exponentielles Wachstum?',
            'subtitle' => 'Schließen Sie sich über 10.000 erfolgreichen Unternehmen an, die bereits mit uns wachsen.',
            'ctaText' => 'Wachstum starten',
            'ctaLink' => '#growth',
            'secondaryCtaText' => 'Success Stories',
            'secondaryCtaLink' => '#stories',
            'urgency' => null,
            'benefits' => [
                '300% durchschnittliches Wachstum',
                'Bewährte Strategien',
                'Persönlicher Success Manager'
            ],
            'backgroundImage' => ImageLibrary::$ctaImages['growth']['business_growth'],
            'style' => 'clean',
            'color' => 'green'
        ],
        'investment-focused' => [
            'title' => 'Investieren Sie in Ihre Zukunft',
            'subtitle' => 'Jeder Euro, den Sie heute investieren, zahlt sich morgen zehnfach aus. Starten Sie Ihre Erfolgsreise.',
            'ctaText' => 'Jetzt investieren',
            'ctaLink' => '#invest',
            'secondaryCtaText' => 'ROI berechnen',
            'secondaryCtaLink' => '#calculator',
            'urgency' => 'Limitiertes Angebot - Nur noch wenige Plätze',
            'benefits' => [
                'ROI von 500%+ möglich',
                'Risikominimierung',
                'Langfristige Wertsteigerung'
            ],
            'backgroundImage' => ImageLibrary::$ctaImages['investment']['green_investment'],
            'style' => 'professional',
            'color' => 'blue'
        ],
        'action-oriented' => [
            'title' => 'Zeit zu handeln ist JETZT!',
            'subtitle' => 'Während andere zögern, handeln Sie. Sichern Sie sich Ihren Wettbewerbsvorteil, bevor es zu spät ist.',
            'ctaText' => 'Sofort handeln',
            'ctaLink' => '#action',
            'secondaryCtaText' => 'Mehr erfahren',
            'secondaryCtaLink' => '#learn',
            'urgency' => 'Nur noch 48 Stunden verfügbar!',
            'benefits' => [
                'First-Mover Advantage',
                'Exklusive Konditionen',
                'Sofortige Umsetzung'
            ],
            'backgroundImage' => ImageLibrary::$ctaImages['action']['call_to_action'],
            'style' => 'bold',
            'color' => 'orange'
        ],
        'dual-button' => [
            'title' => 'Wählen Sie Ihren Weg zum Erfolg',
            'subtitle' => 'Zwei Optionen, ein Ziel: Ihr Erfolg. Entscheiden Sie, welcher Weg am besten zu Ihnen passt.',
            'ctaText' => 'Schnellstart',
            'ctaLink' => '#quick',
            'secondaryCtaText' => 'Beratung buchen',
            'secondaryCtaLink' => '#consult',
            'urgency' => null,
            'benefits' => [
                'Flexible Optionen',
                'Individuelle Betreuung',
                'Maßgeschneiderte Lösungen'
            ],
            'backgroundImage' => null,
            'style' => 'split',
            'color' => 'purple'
        ],
        'simple-centered' => [
            'title' => 'Einfach. Effektiv. Erfolgreich.',
            'subtitle' => 'Kompliziert war gestern. Heute setzen erfolgreiche Unternehmen auf einfache, aber wirkungsvolle Lösungen.',
            'ctaText' => 'Einfach starten',
            'ctaLink' => '#simple',
            'secondaryCtaText' => null,
            'secondaryCtaLink' => null,
            'urgency' => null,
            'benefits' => [
                'Keine Komplexität',
                'Sofort einsatzbereit',
                'Bewährte Einfachheit'
            ],
            'backgroundImage' => null,
            'style' => 'minimal',
            'color' => 'gray'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['immediate-action'], $options);
    
    include 'templates/simple-cta.php';
}
?>
