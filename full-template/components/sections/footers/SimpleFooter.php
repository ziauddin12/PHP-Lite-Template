<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Simple Footer - 3 Varianten
 * Einfache Footer-Layouts
 */

function SimpleFooter($variant = 'minimal', $options = []) {
    $variants = [
        'minimal' => [
            'companyName' => 'Dyad',
            'tagline' => 'Powered by Innovation',
            'logo' => ImageLibrary::$footerImages['logos']['logotype_light'],
            'links' => [
                'Impressum' => '#impressum',
                'Datenschutz' => '#privacy',
                'AGB' => '#terms',
                'Kontakt' => '#contact'
            ],
            'social' => [
                'twitter' => '#',
                'linkedin' => '#',
                'github' => '#'
            ],
            'copyright' => '© 2025 Dyad. Alle Rechte vorbehalten.',
            'style' => 'minimal'
        ],
        'basic' => [
            'companyName' => 'Dyad Solutions',
            'tagline' => 'Ihre digitale Zukunft beginnt hier',
            'description' => 'Wir entwickeln innovative Lösungen für moderne Unternehmen. Von der Idee bis zur Umsetzung - Ihr Erfolg ist unser Antrieb.',
            'logo' => ImageLibrary::$footerImages['logos']['company_logo'],
            'quickLinks' => [
                'Über uns' => '#about',
                'Services' => '#services',
                'Portfolio' => '#portfolio',
                'Blog' => '#blog',
                'Karriere' => '#careers'
            ],
            'legalLinks' => [
                'Impressum' => '#impressum',
                'Datenschutz' => '#privacy',
                'AGB' => '#terms',
                'Cookies' => '#cookies'
            ],
            'contact' => [
                'address' => 'Musterstraße 123, 12345 Musterstadt',
                'phone' => '+49 123 456789',
                'email' => 'info@dyad.sh'
            ],
            'social' => [
                'twitter' => '#',
                'linkedin' => '#',
                'github' => '#',
                'instagram' => '#'
            ],
            'newsletter' => [
                'title' => 'Newsletter abonnieren',
                'description' => 'Bleiben Sie auf dem Laufenden mit unseren neuesten Updates.'
            ],
            'copyright' => '© 2025 Dyad Solutions GmbH. Alle Rechte vorbehalten.',
            'style' => 'basic'
        ],
        'contact' => [
            'companyName' => 'Dyad Technologies',
            'tagline' => 'Innovation. Excellence. Results.',
            'description' => 'Seit 2014 entwickeln wir maßgeschneiderte Technologielösungen für Unternehmen jeder Größe.',
            'logo' => ImageLibrary::$footerImages['logos']['logotype_dark'],
            'offices' => [
                [
                    'city' => 'München',
                    'address' => 'Maximilianstraße 10, 80539 München',
                    'phone' => '+49 89 123456',
                    'email' => 'muenchen@dyad.sh'
                ],
                [
                    'city' => 'Berlin',
                    'address' => 'Unter den Linden 1, 10117 Berlin',
                    'phone' => '+49 30 987654',
                    'email' => 'berlin@dyad.sh'
                ],
                [
                    'city' => 'Hamburg',
                    'address' => 'Speicherstadt 42, 20457 Hamburg',
                    'phone' => '+49 40 555777',
                    'email' => 'hamburg@dyad.sh'
                ]
            ],
            'services' => [
                'Web Development' => '#web-dev',
                'Mobile Apps' => '#mobile',
                'Cloud Solutions' => '#cloud',
                'Consulting' => '#consulting',
                'Support & Maintenance' => '#support'
            ],
            'resources' => [
                'Dokumentation' => '#docs',
                'API Reference' => '#api',
                'Tutorials' => '#tutorials',
                'Community' => '#community',
                'Status Page' => '#status'
            ],
            'social' => [
                'twitter' => '#',
                'linkedin' => '#',
                'github' => '#',
                'youtube' => '#',
                'xing' => '#'
            ],
            'certifications' => [
                'ISO 27001',
                'GDPR Compliant',
                'SOC 2 Type II',
                'AWS Partner'
            ],
            'copyright' => '© 2025 Dyad Technologies GmbH. Ein Unternehmen der Dyad Group.',
            'style' => 'contact'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['minimal'], $options);
    
    include 'templates/simple-footer.php';
}
?>
