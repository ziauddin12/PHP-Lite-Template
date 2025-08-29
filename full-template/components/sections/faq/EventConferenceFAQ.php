<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Event Conference FAQ - 1 Variante
 * FAQ für Events, Konferenzen, Tickets und Logistik
 */

function eventConferenceFAQ($variant = 'event-focused', $options = []) {
    $variants = [
        'event-focused' => [
            'headline' => 'Event Informationen',
            'description' => 'Alle wichtigen Informationen zu unserem Event. Hier findest du Antworten auf die häufigsten Fragen.',
            'faqs' => [
                [
                    'question' => 'Was ist in meiner Anmeldegebühr enthalten?',
                    'answer' => 'Ihre Anmeldegebühr beinhaltet den Zugang zu allen Vorträgen, Workshop-Sessions, Networking-Events, Mittagessen, Kaffeepausen und alle Event-Materialien. Zusätzlich erhalten Sie ein Welcome-Paket mit nützlichen Informationen.',
                    'category' => 'Kosten',
                    'icon' => 'payment'
                ],
                [
                    'question' => 'Gibt es einen Rabatt für Gruppenanmeldungen?',
                    'answer' => 'Ja! Ab 3 Personen gewähren wir 10% Gruppenrabatt, ab 5 Personen 15% und ab 10 Personen 20% Rabatt. Kontaktieren Sie uns für individuelle Angebote bei größeren Gruppen.',
                    'category' => 'Rabatte',
                    'icon' => 'users'
                ],
                [
                    'question' => 'Wie erreiche ich den Veranstaltungsort?',
                    'answer' => 'Der Veranstaltungsort ist optimal mit öffentlichen Verkehrsmitteln erreichbar. Wir stellen detaillierte Anfahrtsbeschreibungen und Parkmöglichkeiten zur Verfügung. Ein Shuttle-Service vom Bahnhof ist verfügbar.',
                    'category' => 'Anreise',
                    'icon' => 'location'
                ],
                [
                    'question' => 'Kann ich mein Ticket stornieren oder übertragen?',
                    'answer' => 'Tickets können bis zu 14 Tage vor der Veranstaltung kostenfrei storniert werden. Eine Übertragung auf andere Personen ist jederzeit möglich. Bei kurzfristigeren Stornierungen berechnen wir eine Bearbeitungsgebühr.',
                    'category' => 'Tickets',
                    'icon' => 'ticket'
                ],
                [
                    'question' => 'Welche COVID-19 Maßnahmen gelten?',
                    'answer' => 'Wir befolgen alle aktuellen Gesundheitsrichtlinien. Dazu gehören ausreichende Belüftung, Desinfektionsstationen und flexible Teilnahmeoptionen. Aktuelle Updates finden Sie auf unserer Website.',
                    'category' => 'Gesundheit',
                    'icon' => 'shield'
                ],
                [
                    'question' => 'Gibt es Übernachtungsmöglichkeiten?',
                    'answer' => 'Wir haben Sonderkonditionen mit mehreren Hotels in der Nähe vereinbart. Eine Liste mit Empfehlungen und Buchungscodes senden wir Ihnen nach der Anmeldung zu.',
                    'category' => 'Unterkunft',
                    'icon' => 'hotel'
                ]
            ],
            'gridLayout' => true,
            'showIcons' => true,
            'showCategories' => true,
            'allowMultipleOpen' => true,
            'style' => 'event-focused'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['event-focused'], $options);
    
    ob_start();
    include __DIR__ . '/templates/event-conference-faq.php';
    return ob_get_clean();
}
?>
