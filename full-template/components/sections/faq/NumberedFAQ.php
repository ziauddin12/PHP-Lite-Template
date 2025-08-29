<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Numbered FAQ - 1 Variante
 * FAQ mit visueller Nummerierung und verbessertem Design
 */

function numberedFAQ($variant = 'numbered-format', $options = []) {
    $variants = [
        'numbered-format' => [
            'headline' => 'Häufig gestellte Fragen',
            'description' => 'Zeigen Sie, was Sie draufhaben! Hier finden Sie Antworten auf die wichtigsten Fragen.',
            'faqs' => [
                [
                    'question' => 'Wie funktioniert das Onboarding?',
                    'answer' => 'Es beginnt mit dem Verständnis Ihrer Expertise und Vision, gefolgt von einem strukturierten Plan, um sie zum Leben zu erwecken. Wir begleiten Sie durch jeden Schritt des Prozesses.',
                    'category' => 'Erste Schritte'
                ],
                [
                    'question' => 'Was ist im Preis enthalten?',
                    'answer' => 'Je nach Komplexität und Art des Produkts variiert es. Typischerweise beinhaltet der Preis alle Grundfunktionen, Support und regelmäßige Updates ohne versteckte Kosten.',
                    'category' => 'Preise'
                ],
                [
                    'question' => 'Wie lange dauert die Implementierung?',
                    'answer' => 'Die Implementierungszeit hängt von Ihren spezifischen Anforderungen ab. Einfache Setups können in wenigen Tagen abgeschlossen werden, während komplexere Projekte 2-4 Wochen dauern können.',
                    'category' => 'Zeitrahmen'
                ],
                [
                    'question' => 'Welchen Support erhalte ich?',
                    'answer' => 'Unser umfassender Support umfasst E-Mail, Live-Chat, Telefon-Support sowie eine ausführliche Dokumentation und Video-Tutorials für alle Funktionen.',
                    'category' => 'Support'
                ],
                [
                    'question' => 'Kann ich später upgraden?',
                    'answer' => 'Ja, Sie können jederzeit auf einen höheren Plan upgraden. Alle Ihre Daten und Einstellungen bleiben erhalten, und Sie erhalten sofort Zugang zu den erweiterten Funktionen.',
                    'category' => 'Flexibilität'
                ]
            ],
            'allowMultipleOpen' => false,
            'numberStyle' => 'circle',
            'colorScheme' => 'blue',
            'style' => 'numbered-format'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['numbered-format'], $options);
    
    ob_start();
    include __DIR__ . '/templates/numbered-faq.php';
    return ob_get_clean();
}
?>
