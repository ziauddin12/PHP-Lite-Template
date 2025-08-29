<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Multi-Column Footer - 4 Varianten
 * Mehrspaltige Footer-Layouts
 */

function MultiColumnFooter($variant = 'three-column', $options = []) {
    $variants = [
        'three-column' => [
            'logoText' => 'Logotype.',
            'description' => 'Etwa 30 Wörter sind optimal, um einen Absatz zu füllen und für gute Lesbarkeit zu sorgen.',
            'companyNavigation' => [
                ['label' => 'Startseite', 'href' => '/'],
                ['label' => 'Über uns', 'href' => '/about'],
                ['label' => 'Dienstleistungen', 'href' => '/services'],
                ['label' => 'Karriere', 'href' => '/careers']
            ],
            'legalLinks' => [
                ['label' => 'Nutzungsbedingungen', 'href' => '/terms'],
                ['label' => 'Datenschutzerklärung', 'href' => '/privacy'],
                ['label' => 'Impressum', 'href' => '/imprint']
            ],
            'phone' => '+49 30 12345678',
            'email' => 'hallo@gmbh.de',
            'address' => 'Elbstrasse 22, 20457 Hamburg',
            'companyName' => 'Company',
            'copyrightYear' => date('Y'),
            'gridColumns' => 'md:grid-cols-2 lg:grid-cols-3',
            'style' => 'three-column'
        ],
        'four-column' => [
            'logoText' => 'Logotype.',
            'description' => 'Etwa 30 Wörter sind optimal, um einen Absatz zu füllen und für gute Lesbarkeit zu sorgen.',
            'companyNavigation' => [
                ['label' => 'Startseite', 'href' => '/'],
                ['label' => 'Über uns', 'href' => '/about'],
                ['label' => 'Fallstudien', 'href' => '/case-studies'],
                ['label' => 'Karriere', 'href' => '/careers']
            ],
            'serviceNavigation' => [
                ['label' => 'Unternehmensberatung', 'href' => '/consulting'],
                ['label' => 'Marktforschung', 'href' => '/market-research'],
                ['label' => 'Strategieentwicklung', 'href' => '/strategy'],
                ['label' => 'Digitalisierung', 'href' => '/digital']
            ],
            'legalLinks' => [
                ['label' => 'Nutzungsbedingungen', 'href' => '/terms'],
                ['label' => 'Datenschutzerklärung', 'href' => '/privacy'],
                ['label' => 'Impressum', 'href' => '/imprint']
            ],
            'phone' => '+49 30 12345678',
            'email' => 'hallo@gmbh.de',
            'address' => 'Elbstrasse 22, 20457 Hamburg',
            'companyName' => 'Company',
            'copyrightYear' => date('Y'),
            'gridColumns' => 'md:grid-cols-2 lg:grid-cols-4',
            'style' => 'four-column'
        ],
        'extended-services' => [
            'logoText' => 'Logotype.',
            'companyAddress' => 'Nordwerk GmbH Spreeallee 17, 3. OG 10555 Berlin, Germany',
            'companyNavigation' => [
                ['label' => 'Startseite', 'href' => '/'],
                ['label' => 'Über uns', 'href' => '/about'],
                ['label' => 'Team', 'href' => '/team'],
                ['label' => 'Karriere', 'href' => '/careers']
            ],
            'serviceNavigation' => [
                ['label' => 'Unternehmensberatung', 'href' => '/consulting'],
                ['label' => 'Marktforschung', 'href' => '/market-research'],
                ['label' => 'Rechtsberatung', 'href' => '/legal'],
                ['label' => 'Finanzplanung', 'href' => '/finance'],
                ['label' => 'IT-Beratung', 'href' => '/it-consulting'],
                ['label' => 'Projektmanagement', 'href' => '/project-management']
            ],
            'legalLinks' => [
                ['label' => 'Nutzungsbedingungen', 'href' => '/terms'],
                ['label' => 'Datenschutzerklärung', 'href' => '/privacy'],
                ['label' => 'Impressum', 'href' => '/imprint'],
                ['label' => 'Cookie-Richtlinie', 'href' => '/cookies']
            ],
            'companyName' => 'Unternehmen',
            'copyrightYear' => date('Y'),
            'gridColumns' => 'md:grid-cols-2 lg:grid-cols-3',
            'style' => 'extended-services'
        ],
        'comprehensive' => [
            'logoText' => 'Logotype.',
            'description' => 'Etwa 30 Wörter sind optimal, um einen Absatz zu füllen und für gute Lesbarkeit zu sorgen.',
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
            'address' => 'Elbstrasse 22, 20457',
            'legalLinks' => [
                ['label' => 'Nutzungsbedingungen', 'href' => '/terms'],
                ['label' => 'Datenschutzerklärung', 'href' => '/privacy'],
                ['label' => 'Impressum', 'href' => '/imprint']
            ],
            'legalDisclaimer' => 'Die Dienstleistungen werden von der Example GmbH erbracht, einem lizenzierten Finanzinstitut, das den lokalen Vorschriften unterliegt.',
            'registrationNumber' => '1234567890',
            'companyName' => 'Unternehmen',
            'copyrightYear' => date('Y'),
            'gridColumns' => 'md:grid-cols-2 lg:grid-cols-4',
            'style' => 'comprehensive'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['three-column'], $options);
    
    ob_start();
    include __DIR__ . '/templates/multi-column-footer.php';
    return ob_get_clean();
}
?>
