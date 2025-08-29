<?php
/**
 * Countdown CTA Component
 * CTA mit Countdown-Timer und Dringlichkeit
 */

function CountdownCTA($variant = 'immediate-countdown', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'immediate-countdown' => [
            'headline' => 'Zeit für eine sofortige Aktion',
            'description' => 'Verpassen Sie nicht diese einmalige Gelegenheit! Das Angebot läuft in Kürze ab.',
            'countdownText' => 'Angebot endet in:',
            'targetDate' => date('Y-m-d H:i:s', strtotime('+3 days')),
            'urgencyMessage' => 'Nur noch wenige Plätze verfügbar!',
            'ctaText' => 'Jetzt sichern',
            'secondaryCtaText' => 'Mehr Details',
            'features' => [
                'Sofortiger Zugang',
                '50% Rabatt nur heute',
                'Lebenslange Updates'
            ],
            'bgClass' => 'bg-gradient-to-br from-red-600 to-orange-600',
            'textColor' => 'text-white'
        ],
        'exclusive-launch' => [
            'headline' => 'Jetzt ist dein Moment gekommen',
            'description' => 'Sei einer der Ersten, die Zugang zu unseren exklusiven neuen Features erhalten.',
            'countdownText' => 'Launch in:',
            'targetDate' => date('Y-m-d H:i:s', strtotime('+7 days')),
            'urgencyMessage' => 'Exklusiver Early-Access für die ersten 100 Nutzer',
            'ctaText' => 'Early Access sichern',
            'secondaryCtaText' => 'Warteliste beitreten',
            'features' => [
                'Exklusive Beta-Features',
                'Persönlicher Onboarding-Call',
                'Lifetime-Deal Pricing'
            ],
            'bgClass' => 'bg-gradient-to-br from-purple-600 to-violet-600',
            'textColor' => 'text-white'
        ],
        'limited-spots' => [
            'headline' => 'Die Plätze sind begrenzt',
            'description' => 'Nur noch wenige Plätze verfügbar für unser exklusives Mentoring-Programm.',
            'countdownText' => 'Anmeldeschluss:',
            'targetDate' => date('Y-m-d H:i:s', strtotime('+5 days')),
            'urgencyMessage' => 'Nur 12 von 50 Plätzen noch verfügbar',
            'ctaText' => 'Platz reservieren',
            'secondaryCtaText' => 'Programm Details',
            'features' => [
                'Persönliches 1:1 Mentoring',
                'Exklusive Masterclass-Serie',
                'Lebenslanger Community-Zugang'
            ],
            'bgClass' => 'bg-gradient-to-br from-green-600 to-emerald-600',
            'textColor' => 'text-white',
            'spotsLeft' => 12,
            'totalSpots' => 50
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['immediate-countdown'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $subheadline = $options['subheadline'] ?? ($content['subheadline'] ?? null);
    $description = $options['description'] ?? $content['description'];
    $countdownText = $options['countdownText'] ?? $content['countdownText'];
    $targetDate = $options['targetDate'] ?? $content['targetDate'];
    $urgencyMessage = $options['urgencyMessage'] ?? $content['urgencyMessage'];
    $ctaText = $options['ctaText'] ?? $content['ctaText'];
    $secondaryCtaText = $options['secondaryCtaText'] ?? ($content['secondaryCtaText'] ?? null);
    $features = $options['features'] ?? ($content['features'] ?? []);
    $spotsLeft = $options['spotsLeft'] ?? ($content['spotsLeft'] ?? null);
    $totalSpots = $options['totalSpots'] ?? ($content['totalSpots'] ?? null);
    $bgClass = $content['bgClass'];
    $textColor = $content['textColor'];
    
    ob_start();
    include __DIR__ . '/templates/countdown-cta.php';
    return ob_get_clean();
}
?>
