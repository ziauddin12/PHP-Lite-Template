<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Product Service FAQ - 1 Variante
 * FAQ für Produktfeatures, Preise und Support
 */

function productServiceFAQ($variant = 'service-focused', $options = []) {
    $variants = [
        'service-focused' => [
            'headline' => 'Häufig gestellte Fragen',
            'description' => 'Es ist wichtig, deine Stärken hervorzuheben. Lass uns potenziellen Kunden zeigen, was dich von der Konkurrenz abhebt.',
            'faqs' => [
                [
                    'question' => 'Wie funktioniert das Onboarding?',
                    'answer' => 'Wir begleiten dich Schritt für Schritt beim Einrichten, mit persönlicher Unterstützung von deinem ersten Login bis zur Veröffentlichung deiner ersten Live-Seite. Unser Onboarding-Prozess ist darauf ausgelegt, dass du schnell und erfolgreich startest.',
                    'category' => 'Erste Schritte',
                    'featured' => true
                ],
                [
                    'question' => 'Projekt später ändern?',
                    'answer' => 'Du kannst deine Inhalte, das Layout oder deinen Plan jederzeit ändern – egal, ob du neue Abschnitte hinzufügen, dein Design anpassen oder eine andere Vorlage nutzen möchtest. Flexibilität steht bei uns im Vordergrund.',
                    'category' => 'Flexibilität'
                ],
                [
                    'question' => 'Gibt es bei euch Rückerstattungen?',
                    'answer' => 'Wir bieten eine 14-tägige Geld-zurück-Garantie an, wenn das Produkt deinen Erwartungen nicht entspricht. Ohne Fragen, ohne Probleme – deine Zufriedenheit steht an erster Stelle.',
                    'category' => 'Garantie'
                ],
                [
                    'question' => 'Was ist im Preis enthalten?',
                    'answer' => 'Der Preis beinhaltet die volle Funktionalität, regelmäßige Updates, Zugang zu unserem Premium-Support und alle zukünftigen Features – keine versteckten Kosten, keine Überraschungen.',
                    'category' => 'Preise',
                    'featured' => true
                ],
                [
                    'question' => 'Welchen Support gibt es?',
                    'answer' => 'Unser Support-Team steht dir per E-Mail, Live-Chat und Telefon zur Verfügung. Zusätzlich bieten wir umfangreiche Dokumentation, Video-Tutorials und ein aktives Community-Forum.',
                    'category' => 'Support'
                ]
            ],
            'allowMultipleOpen' => true,
            'showNumbers' => false,
            'highlightFeatured' => true,
            'style' => 'service-focused'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['service-focused'], $options);
    
    ob_start();
    include __DIR__ . '/templates/product-service-faq.php';
    return ob_get_clean();
}
?>
