<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Newsletter Footer - 3 Varianten
 * Newsletter-fokussierte Footer
 */

function NewsletterFooter($variant = 'newsletter-simple', $options = []) {
    $variants = [
        'newsletter-simple' => [
            'logoText' => 'Logotype.',
            'companyNavigation' => [
                ['label' => 'Startseite', 'href' => '/'],
                ['label' => 'Über uns', 'href' => '/about'],
                ['label' => 'Dienstleistungen', 'href' => '/services'],
                ['label' => 'Karriere', 'href' => '/careers']
            ],
            'phone' => '+49 30 12345678',
            'email' => 'hallo@gmbh.de',
            'newsletterTitle' => 'Smarte Business-Tipps direkt in dein Postfach',
            'newsletterPlaceholder' => 'Deine E-Mail-Adresse',
            'newsletterDisclaimer' => 'Mit der Anmeldung stimmst du unseren Datenschutzbestimmungen zu. Du kannst dich jederzeit abmelden.',
            'companyName' => 'Unternehmen',
            'copyrightYear' => date('Y'),
            'gridColumns' => 'md:grid-cols-2 lg:grid-cols-3',
            'style' => 'newsletter-simple'
        ],
        'newsletter-extended' => [
            'logoText' => 'Logotype.',
            'companyNavigation' => [
                ['label' => 'Startseite', 'href' => '/'],
                ['label' => 'Über uns', 'href' => '/about'],
                ['label' => 'Team', 'href' => '/team'],
                ['label' => 'Karriere', 'href' => '/careers']
            ],
            'serviceNavigation' => [
                ['label' => 'Unternehmensberatung', 'href' => '/consulting'],
                ['label' => 'Marktforschung', 'href' => '/market-research'],
                ['label' => 'Strategieentwicklung', 'href' => '/strategy'],
                ['label' => 'Change Management', 'href' => '/change-management']
            ],
            'phone' => '+49 30 12345678',
            'email' => 'hallo@gmbh.de',
            'legalLinks' => [
                ['label' => 'Nutzungsbedingungen', 'href' => '/terms'],
                ['label' => 'Datenschutzerklärung', 'href' => '/privacy'],
                ['label' => 'Impressum', 'href' => '/imprint']
            ],
            'newsletterTitle' => 'Melde dich für unseren Newsletter an:',
            'newsletterPlaceholder' => 'E-Mail-Adresse eingeben',
            'newsletterDisclaimer' => 'Erhalte wöchentliche Updates zu neuen Artikeln und Branchentrends. Abmeldung jederzeit möglich.',
            'companyName' => 'Unternehmen',
            'copyrightYear' => date('Y'),
            'gridColumns' => 'md:grid-cols-2 lg:grid-cols-4',
            'style' => 'newsletter-extended'
        ],
        'newsletter-comprehensive' => [
            'logoText' => 'Logotype.',
            'companyNavigation' => [
                ['label' => 'Startseite', 'href' => '/'],
                ['label' => 'Über uns', 'href' => '/about'],
                ['label' => 'Team', 'href' => '/team'],
                ['label' => 'Blog', 'href' => '/blog'],
                ['label' => 'Karriere', 'href' => '/careers']
            ],
            'serviceNavigation' => [
                ['label' => 'Unternehmensberatung', 'href' => '/consulting'],
                ['label' => 'Marktforschung', 'href' => '/market-research'],
                ['label' => 'Digitalisierung', 'href' => '/digital'],
                ['label' => 'Projektmanagement', 'href' => '/project-management'],
                ['label' => 'IT-Beratung', 'href' => '/it-consulting']
            ],
            'phone' => '+49 30 12345678',
            'email' => 'hallo@gmbh.de',
            'address' => 'Elbstrasse 22, 20457 Hamburg',
            'legalLinks' => [
                ['label' => 'Nutzungsbedingungen', 'href' => '/terms'],
                ['label' => 'Datenschutzerklärung', 'href' => '/privacy'],
                ['label' => 'Impressum', 'href' => '/imprint'],
                ['label' => 'Cookie-Richtlinie', 'href' => '/cookies']
            ],
            'newsletterTitle' => 'Smarte Business-Tipps direkt in dein Postfach',
            'newsletterPlaceholder' => 'E-Mail-Adresse',
            'newsletterDisclaimer' => 'Bleibe auf dem Laufenden mit unseren neuesten Einblicken, Tipps und Branchentrends. Kostenlos und jederzeit kündbar.',
            'companyName' => 'Unternehmen',
            'copyrightYear' => date('Y'),
            'gridColumns' => 'md:grid-cols-2 lg:grid-cols-4',
            'style' => 'newsletter-comprehensive'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['newsletter-simple'], $options);
    
    ob_start();
    include __DIR__ . '/templates/newsletter-footer.php';
    return ob_get_clean();
}
?>
