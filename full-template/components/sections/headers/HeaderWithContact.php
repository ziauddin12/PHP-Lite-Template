<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Header With Contact - 4 Varianten
 * Header mit Kontaktinformationen
 */

function HeaderWithContact($variant = 'full-contact', $options = []) {
    $variants = [
        'full-contact' => [
            'logo' => [
                'text' => 'Logo',
                'href' => '/'
            ],
            'contactInfo' => [
                'phone' => '+49 157 12345678',
                'email' => 'hallo@gmbh.de',
                'showIcons' => true
            ],
            'navigation' => [
                ['label' => 'Über uns', 'href' => '/about'],
                ['label' => 'Dienstleistungen', 'href' => '/services'],
                ['label' => 'Fallstudien', 'href' => '/case-studies'],
                ['label' => 'Karriere', 'href' => '/careers'],
                ['label' => 'Kontakt', 'href' => '/contact']
            ],
            'ctaButton' => [
                'text' => 'Call-to-Action button',
                'href' => '#',
                'variant' => 'default'
            ],
            'languageSelector' => [
                'current' => '🇩🇪',
                'options' => [
                    ['code' => 'de', 'label' => 'Deutsch', 'flag' => '🇩🇪'],
                    ['code' => 'en', 'label' => 'English', 'flag' => '🇺🇸']
                ]
            ],
            'style' => 'full-contact',
            'bgClass' => 'bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-700'
        ],
        'phone-only' => [
            'logo' => [
                'text' => 'Logo',
                'href' => '/'
            ],
            'contactInfo' => [
                'phone' => '+49 157 12345678',
                'showIcons' => true
            ],
            'navigation' => [
                ['label' => 'Über uns', 'href' => '/about'],
                ['label' => 'Dienstleistungen', 'href' => '/services'],
                ['label' => 'Fallstudien', 'href' => '/case-studies'],
                ['label' => 'Karriere', 'href' => '/careers'],
                ['label' => 'Kontakt', 'href' => '/contact']
            ],
            'ctaButton' => [
                'text' => 'Anrufen',
                'href' => 'tel:+4915712345678',
                'variant' => 'default'
            ],
            'style' => 'phone-only',
            'bgClass' => 'bg-slate-50 dark:bg-slate-800 border-b border-slate-200 dark:border-slate-700'
        ],
        'email-primary' => [
            'logo' => [
                'text' => 'Logo',
                'href' => '/'
            ],
            'contactInfo' => [
                'email' => 'hallo@gmbh.de',
                'showIcons' => true
            ],
            'navigation' => [
                ['label' => 'Über uns', 'href' => '/about'],
                ['label' => 'Dienstleistungen', 'href' => '/services'],
                ['label' => 'Fallstudien', 'href' => '/case-studies'],
                ['label' => 'Karriere', 'href' => '/careers'],
                ['label' => 'Kontakt', 'href' => '/contact']
            ],
            'ctaButton' => [
                'text' => 'E-Mail senden',
                'href' => 'mailto:hallo@gmbh.de',
                'variant' => 'default'
            ],
            'style' => 'email-primary',
            'bgClass' => 'bg-white dark:bg-slate-900 shadow-sm'
        ],
        'contact-prominent' => [
            'logo' => [
                'text' => 'Logo',
                'href' => '/'
            ],
            'contactInfo' => [
                'phone' => '+49 157 12345678',
                'email' => 'hallo@gmbh.de',
                'showIcons' => true,
                'prominent' => true
            ],
            'navigation' => [
                ['label' => 'Über uns', 'href' => '/about'],
                ['label' => 'Dienstleistungen', 'href' => '/services'],
                ['label' => 'Fallstudien', 'href' => '/case-studies'],
                ['label' => 'Karriere', 'href' => '/careers'],
                ['label' => 'Kontakt', 'href' => '/contact']
            ],
            'ctaButton' => [
                'text' => 'Kostenlose Beratung',
                'href' => '#contact',
                'variant' => 'default'
            ],
            'style' => 'contact-prominent',
            'bgClass' => 'bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-slate-900 dark:to-slate-800'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['full-contact'], $options);
    
    ob_start();
    include __DIR__ . '/templates/header-with-contact.php';
    return ob_get_clean();
}
?>
