<?php
/**
 * Problem Solution CTA Component
 * Problem-Lösung fokussierte CTA
 */

function ProblemSolutionCTA($variant = 'service-transformation', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'service-transformation' => [
            'headline' => 'Verwandle deine Dienstleistung',
            'problemStatement' => 'Du hast ein tolles Angebot, aber keine Kunden?',
            'solutionHighlight' => 'Wir erstellen deine verkaufsstarke Landingpage!',
            'description' => 'Schluss mit unsichtbaren Services. Mache dein Angebot für Kunden unwiderstehlich.',
            'beforeAfter' => [
                'before' => ['Unsichtbares Angebot', 'Keine klare Botschaft', 'Wenig Vertrauen'],
                'after' => ['Professionelle Präsentation', 'Klare Wertversprechen', 'Vertrauensvolle Darstellung']
            ],
            'ctaText' => 'Landingpage erstellen',
            'secondaryCtaText' => 'Beispiele ansehen',
            'bgClass' => 'bg-gradient-to-br from-red-600 to-orange-600',
            'textColor' => 'text-white'
        ],
        'skill-monetization' => [
            'headline' => 'Mache deine Fähigkeiten zu Geld',
            'problemStatement' => 'Du bist Experte, aber verdienst nicht genug?',
            'solutionHighlight' => 'Wir helfen dir, dein Wissen zu vermarkten!',
            'description' => 'Verwandle dein Expertenwissen in ein profitables Online-Business.',
            'steps' => [
                ['step' => '1', 'title' => 'Expertise identifizieren', 'description' => 'Finde deine wertvollsten Skills'],
                ['step' => '2', 'title' => 'Angebot entwickeln', 'description' => 'Erstelle packende Produkte'],
                ['step' => '3', 'title' => 'Kunden gewinnen', 'description' => 'Verkaufe erfolgreich online']
            ],
            'ctaText' => 'Monetarisierung starten',
            'secondaryCtaText' => 'Kostenlose Analyse',
            'bgClass' => 'bg-gradient-to-br from-green-600 to-emerald-600',
            'textColor' => 'text-white'
        ],
        'problem-solver' => [
            'headline' => 'Von Problem zur Lösung',
            'problemStatement' => 'Deine Kunden kämpfen mit komplexen Herausforderungen?',
            'solutionHighlight' => 'Werde ihr vertrauensvoller Problemlöser!',
            'description' => 'Positioniere dich als die Lösung, die deine Kunden wirklich brauchen.',
            'problemSolutions' => [
                ['problem' => 'Zeitmanagement', 'solution' => 'Produktivitäts-System'],
                ['problem' => 'Kundengewinnung', 'solution' => 'Marketing-Strategie'],
                ['problem' => 'Skalierung', 'solution' => 'Automatisierungs-Tools']
            ],
            'ctaText' => 'Problemlöser werden',
            'guarantee' => '100% Zufriedenheitsgarantie',
            'bgClass' => 'bg-gradient-to-br from-blue-600 to-indigo-600',
            'textColor' => 'text-white'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['service-transformation'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $problemStatement = $options['problemStatement'] ?? $content['problemStatement'];
    $solutionHighlight = $options['solutionHighlight'] ?? $content['solutionHighlight'];
    $description = $options['description'] ?? $content['description'];
    $beforeAfter = $options['beforeAfter'] ?? ($content['beforeAfter'] ?? null);
    $steps = $options['steps'] ?? ($content['steps'] ?? []);
    $problemSolutions = $options['problemSolutions'] ?? ($content['problemSolutions'] ?? []);
    $ctaText = $options['ctaText'] ?? $content['ctaText'];
    $secondaryCtaText = $options['secondaryCtaText'] ?? ($content['secondaryCtaText'] ?? null);
    $guarantee = $options['guarantee'] ?? ($content['guarantee'] ?? null);
    $bgClass = $content['bgClass'];
    $textColor = $content['textColor'];
    
    ob_start();
    include __DIR__ . '/templates/problem-solution-cta.php';
    return ob_get_clean();
}
?>
