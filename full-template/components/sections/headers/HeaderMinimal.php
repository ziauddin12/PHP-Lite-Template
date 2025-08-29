<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Header Minimal - 4 Varianten
 * Minimalistische Header-Layouts
 */

function HeaderMinimal($variant = 'clean', $options = []) {
    $variants = [
        'clean' => [
            'logo' => [
                'text' => 'Logo',
                'href' => '/'
            ],
            'navigation' => [
                ['label' => 'Über uns', 'href' => '/about'],
                ['label' => 'Dienstleistungen', 'href' => '/services'],
                ['label' => 'Fallstudien', 'href' => '/case-studies'],
                ['label' => 'Karriere', 'href' => '/careers'],
                ['label' => 'Kontakt', 'href' => '/contact']
            ],
            'ctaButton' => [
                'text' => 'Call-to-Action',
                'href' => '#',
                'variant' => 'default'
            ],
            'showCTA' => false,
            'style' => 'clean',
            'bgClass' => 'bg-white dark:bg-slate-900'
        ],
        'centered' => [
            'logo' => [
                'text' => 'Logo',
                'href' => '/'
            ],
            'navigation' => [
                ['label' => 'Über uns', 'href' => '/about'],
                ['label' => 'Dienstleistungen', 'href' => '/services'],
                ['label' => 'Fallstudien', 'href' => '/case-studies'],
                ['label' => 'Karriere', 'href' => '/careers'],
                ['label' => 'Kontakt', 'href' => '/contact']
            ],
            'ctaButton' => [
                'text' => 'Jetzt starten',
                'href' => '#',
                'variant' => 'default'
            ],
            'showCTA' => true,
            'style' => 'centered',
            'bgClass' => 'bg-white dark:bg-slate-900 border-b border-slate-100 dark:border-slate-800'
        ],
        'split-nav' => [
            'logo' => [
                'text' => 'Logo',
                'href' => '/'
            ],
            'leftNavigation' => [
                ['label' => 'Über uns', 'href' => '/about'],
                ['label' => 'Dienstleistungen', 'href' => '/services'],
                ['label' => 'Fallstudien', 'href' => '/case-studies']
            ],
            'rightNavigation' => [
                ['label' => 'Karriere', 'href' => '/careers'],
                ['label' => 'Industries', 'href' => '/industries'],
                ['label' => 'Kontakt', 'href' => '/contact']
            ],
            'ctaButton' => [
                'text' => 'Demo buchen',
                'href' => '#demo',
                'variant' => 'outline'
            ],
            'showCTA' => true,
            'style' => 'split-nav',
            'bgClass' => 'bg-slate-50 dark:bg-slate-800'
        ],
        'logo-prominent' => [
            'logo' => [
                'text' => 'Logo',
                'href' => '/',
                'prominent' => true
            ],
            'navigation' => [
                ['label' => 'Über uns', 'href' => '/about'],
                ['label' => 'Dienstleistungen', 'href' => '/services'],
                ['label' => 'Portfolio', 'href' => '/portfolio'],
                ['label' => 'Blog', 'href' => '/blog'],
                ['label' => 'Kontakt', 'href' => '/contact']
            ],
            'ctaButton' => [
                'text' => 'Projekt starten',
                'href' => '#contact',
                'variant' => 'default'
            ],
            'showCTA' => true,
            'style' => 'logo-prominent',
            'bgClass' => 'bg-white dark:bg-slate-900 shadow-sm'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['clean'], $options);
    
    ob_start();
    include __DIR__ . '/templates/header-minimal.php';
    return ob_get_clean();
}
?>
