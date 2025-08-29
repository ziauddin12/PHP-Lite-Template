<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Business Process FAQ - 1 Variante
 * FAQ für Geschäftsprozesse und Projekt-Workflows
 */

function businessProcessFAQ($variant = 'process-focused', $options = []) {
    $variants = [
        'process-focused' => [
            'headline' => 'Deine Fragen an uns',
            'description' => 'Es ist wichtig, deine Stärken hervorzuheben. Lass uns potenziellen Kunden klar zeigen, was dich von der Konkurrenz abhebt.',
            'faqs' => [
                [
                    'question' => 'Wie beginnen wir den Prozess?',
                    'answer' => 'Es beginnt mit dem Verständnis deiner Expertise und Vision, gefolgt von einem strukturierten Plan, um sie zum Leben zu erwecken. Wir starten mit einem ausführlichen Beratungsgespräch.',
                    'category' => 'Prozess'
                ],
                [
                    'question' => 'Wie lange dauert ein Projekt im Durchschnitt?',
                    'answer' => 'Je nach Komplexität und Art des Produkts variiert es. Typischerweise dauert ein Kurs [X Wochen], während ein E-Book in [X Wochen] fertig sein kann. Wir geben dir einen klaren Zeitrahmen nach der ersten Analyse.',
                    'category' => 'Zeitrahmen'
                ],
                [
                    'question' => 'Was passiert nach dem ersten Gespräch?',
                    'answer' => 'Nach unserem Erstgespräch erstellen wir eine detaillierte Projektplanung mit Meilensteinen, Zeitplan und allen erforderlichen Ressourcen. Du erhältst ein transparentes Angebot.',
                    'category' => 'Prozess'
                ],
                [
                    'question' => 'Wie bleiben wir während des Projekts in Kontakt?',
                    'answer' => 'Wir nutzen moderne Projektmanagement-Tools und halten dich mit regelmäßigen Updates auf dem Laufenden. Wöchentliche Check-ins sind Standard.',
                    'category' => 'Kommunikation'
                ],
                [
                    'question' => 'Was wenn sich Anforderungen ändern?',
                    'answer' => 'Flexibilität ist wichtig. Wir haben Prozesse für Änderungsanfragen etabliert, die transparent kommuniziert und fair bepreist werden.',
                    'category' => 'Flexibilität'
                ]
            ],
            'allowMultipleOpen' => false,
            'showCategories' => true,
            'style' => 'process-focused'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['process-focused'], $options);
    
    ob_start();
    include __DIR__ . '/templates/business-process-faq.php';
    return ob_get_clean();
}
?>
