<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Header With Auth - 4 Varianten
 * Header mit Authentifizierung
 */

function HeaderWithAuth($variant = 'login-register', $options = []) {
    $variants = [
        'login-register' => [
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
            'authButtons' => [
                'loginText' => 'Anmelden',
                'registerText' => 'Registrieren',
                'loginHref' => '/login',
                'registerHref' => '/register',
                'separator' => ' | '
            ],
            'style' => 'login-register',
            'bgClass' => 'bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-700'
        ],
        'user-menu' => [
            'logo' => [
                'text' => 'Logo',
                'href' => '/'
            ],
            'navigation' => [
                ['label' => 'Dashboard', 'href' => '/dashboard'],
                ['label' => 'Projekte', 'href' => '/projects'],
                ['label' => 'Team', 'href' => '/team'],
                ['label' => 'Berichte', 'href' => '/reports']
            ],
            'userMenu' => [
                'isLoggedIn' => true,
                'userName' => 'Max Mustermann',
                'userAvatar' => ImageLibrary::$testimonialImages['professionals']['manager_male'],
                'menuItems' => [
                    ['label' => 'Profil', 'href' => '/profile', 'icon' => 'user'],
                    ['label' => 'Einstellungen', 'href' => '/settings', 'icon' => 'settings'],
                    ['separator' => true],
                    ['label' => 'Abmelden', 'href' => '/logout', 'icon' => 'logout']
                ]
            ],
            'style' => 'user-menu',
            'bgClass' => 'bg-slate-50 dark:bg-slate-800 border-b border-slate-200 dark:border-slate-700'
        ],
        'auth-prominent' => [
            'logo' => [
                'text' => 'Logo',
                'href' => '/'
            ],
            'navigation' => [
                ['label' => 'Über uns', 'href' => '/about'],
                ['label' => 'Dienstleistungen', 'href' => '/services'],
                ['label' => 'Preise', 'href' => '/pricing'],
                ['label' => 'Kontakt', 'href' => '/contact']
            ],
            'authButtons' => [
                'loginText' => 'Anmelden',
                'registerText' => 'Kostenlos registrieren',
                'loginHref' => '/login',
                'registerHref' => '/register',
                'prominent' => true
            ],
            'ctaButton' => [
                'text' => 'Jetzt starten',
                'href' => '/register',
                'variant' => 'default'
            ],
            'style' => 'auth-prominent',
            'bgClass' => 'bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-slate-900 dark:to-slate-800'
        ],
        'minimal-auth' => [
            'logo' => [
                'text' => 'Logo',
                'href' => '/'
            ],
            'navigation' => [
                ['label' => 'Über uns', 'href' => '/about'],
                ['label' => 'Dienstleistungen', 'href' => '/services'],
                ['label' => 'Karriere', 'href' => '/careers'],
                ['label' => 'Kontakt', 'href' => '/contact']
            ],
            'authButtons' => [
                'loginText' => 'Login',
                'registerText' => 'Registrieren',
                'loginHref' => '/login',
                'registerHref' => '/register',
                'separator' => ' • ',
                'minimal' => true
            ],
            'style' => 'minimal-auth',
            'bgClass' => 'bg-white dark:bg-slate-900 shadow-sm'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['login-register'], $options);
    
    ob_start();
    include __DIR__ . '/templates/header-with-auth.php';
    return ob_get_clean();
}
?>
