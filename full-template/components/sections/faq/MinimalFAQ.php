<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Minimal FAQ - 1 Variante
 * FAQ mit sauberem, minimalem Design und flexiblen Styling-Optionen
 */

function minimalFAQ($variant = 'clean-format', $options = []) {
    $variants = [
        'clean-format' => [
            'headline' => 'Häufig gestellte Fragen',
            'description' => 'Highlighting your strengths is important. Let\'s offer potential customers a clear view of what sets you apart from the competition.',
            'faqs' => [
                [
                    'question' => 'Wie funktioniert das Onboarding?',
                    'answer' => 'Es beginnt mit dem Verständnis Ihrer Expertise und Vision, gefolgt von einem strukturierten Plan, um sie zum Leben zu erwecken. Unser Onboarding-Prozess ist darauf ausgelegt, dass Sie schnell und effizient starten können.',
                    'category' => 'Erste Schritte'
                ],
                [
                    'question' => 'Was ist im Preis enthalten?',
                    'answer' => 'Je nach Komplexität und Art des Produkts variiert es. Typischerweise dauert ein Kurs [X Wochen], während ein E-Book in [X Wochen] fertiggestellt werden kann. Alle Details erhalten Sie in Ihrem persönlichen Angebot.',
                    'category' => 'Preise'
                ],
                [
                    'question' => 'Projekt später ändern?',
                    'answer' => 'Ja, ich biete [X Wochen/Monate] Post-Launch-Support, um einen reibungslosen Ablauf zu gewährleisten. Änderungen und Anpassungen sind in diesem Zeitraum inbegriffen.',
                    'category' => 'Flexibilität'
                ],
                [
                    'question' => 'Welchen Support gibt es?',
                    'answer' => 'Halten Sie eine ähnliche Textmenge in jedem Grid-Element für ein ausgewogenes Aussehen, ohne dass ein Element die anderen in Bezug auf die Höhe dominiert. Unser Support ist umfassend und persönlich.',
                    'category' => 'Support'
                ],
                [
                    'question' => 'Gibt es bei euch Rückerstattungen?',
                    'answer' => 'Halten Sie eine ähnliche Textmenge in jedem Grid-Element für ein ausgewogenes Aussehen, ohne dass ein Element die anderen in Bezug auf die Höhe dominiert. Ihre Zufriedenheit steht an erster Stelle.',
                    'category' => 'Garantie'
                ]
            ],
            'allowMultipleOpen' => true,
            'iconStyle' => 'chevron',
            'borderStyle' => 'card',
            'style' => 'clean-format'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['clean-format'], $options);
    
    ob_start();
    include __DIR__ . '/templates/minimal-faq.php';
    return ob_get_clean();
}
?>
