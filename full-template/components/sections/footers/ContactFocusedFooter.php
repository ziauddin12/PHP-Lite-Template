<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Contact-Focused Footer - 2 Varianten
 * Kontakt-fokussierte Footer
 */

function ContactFocusedFooter($variant = 'contact-simple', $options = []) {
    $variants = [
        'contact-simple' => [
            'logoText' => 'Logotype.',
            'navigation' => [
                ['label' => 'Startseite', 'href' => '/'],
                ['label' => 'Über uns', 'href' => '/about'],
                ['label' => 'Dienstleistungen', 'href' => '/services'],
                ['label' => 'Fallstudien', 'href' => '/case-studies'],
                ['label' => 'Karriere', 'href' => '/careers']
            ],
            'phone' => '+49 30 12345678',
            'email' => 'hallo@gmbh.de',
            'companyName' => 'Unternehmen',
            'copyrightYear' => date('Y'),
            'style' => 'contact-simple'
        ],
        'contact-detailed' => [
            'logoText' => 'Logotype.',
            'description' => 'Etwa 30 Wörter sind optimal, um einen Absatz zu füllen und für gute Lesbarkeit zu sorgen.',
            'navigation' => [
                ['label' => 'Startseite', 'href' => '/'],
                ['label' => 'Über uns', 'href' => '/about'],
                ['label' => 'Dienstleistungen', 'href' => '/services'],
                ['label' => 'Portfolio', 'href' => '/portfolio'],
                ['label' => 'Blog', 'href' => '/blog'],
                ['label' => 'Karriere', 'href' => '/careers']
            ],
            'legalLinks' => [
                ['label' => 'Nutzungsbedingungen', 'href' => '/terms'],
                ['label' => 'Datenschutzerklärung', 'href' => '/privacy'],
                ['label' => 'Impressum', 'href' => '/imprint'],
                ['label' => 'Cookie-Richtlinie', 'href' => '/cookies']
            ],
            'phone' => '+49 30 12345678',
            'email' => 'hallo@gmbh.de',
            'address' => 'Elbstrasse 22, 20457',
            'companyName' => 'Company',
            'copyrightYear' => date('Y'),
            'style' => 'contact-detailed'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['contact-simple'], $options);
    
    ob_start();
    include __DIR__ . '/templates/contact-focused-footer.php';
    return ob_get_clean();
}
?>
