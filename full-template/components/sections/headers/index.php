<?php
/**
 * Headers/Navigation Sections Index
 * Zentrale Datei für alle Header-Komponenten
 */

// Lade alle Header-Komponenten
require_once 'HeaderWithContact.php';
require_once 'HeaderWithAuth.php';
require_once 'HeaderMinimal.php';

/**
 * Headers-Registry für einfache Verwendung
 */
class HeadersRegistry {
    
    public static $components = [
        // Header With Contact (4 Varianten)
        'HeaderWithContact' => [
            'function' => 'HeaderWithContact',
            'variants' => ['full-contact', 'phone-only', 'email-primary', 'contact-prominent'],
            'description' => 'Header mit Kontaktinformationen'
        ],
        
        // Header With Auth (4 Varianten)
        'HeaderWithAuth' => [
            'function' => 'HeaderWithAuth',
            'variants' => ['login-register', 'user-menu', 'auth-prominent', 'minimal-auth'],
            'description' => 'Header mit Authentifizierung'
        ],
        
        // Header Minimal (4 Varianten)
        'HeaderMinimal' => [
            'function' => 'HeaderMinimal',
            'variants' => ['clean', 'centered', 'split-nav', 'logo-prominent'],
            'description' => 'Minimalistische Header-Layouts'
        ]
    ];
    
    /**
     * Rendert eine Header-Komponente
     */
    public static function render($componentName, $variant = 'default', $options = []) {
        if (isset(self::$components[$componentName])) {
            $component = self::$components[$componentName];
            $function = $component['function'];
            
            if (function_exists($function)) {
                return $function($variant, $options);
            } else {
                error_log("Header function not found: $function");
            }
        } else {
            error_log("Header component not found: $componentName");
        }
    }
    
    /**
     * Holt alle verfügbaren Komponenten
     */
    public static function getAllComponents() {
        return self::$components;
    }
    
    /**
     * Holt alle Varianten einer Komponente
     */
    public static function getVariants($componentName) {
        return self::$components[$componentName]['variants'] ?? [];
    }
    
    /**
     * Prüft ob eine Komponente existiert
     */
    public static function exists($componentName) {
        return isset(self::$components[$componentName]);
    }
}

// Hilfsfunktionen für alle Header-Komponenten
function renderHeaderWithContact($variant = 'full-contact', $options = []) {
    return HeadersRegistry::render('HeaderWithContact', $variant, $options);
}

function renderHeaderWithAuth($variant = 'login-register', $options = []) {
    return HeadersRegistry::render('HeaderWithAuth', $variant, $options);
}

function renderHeaderMinimal($variant = 'clean', $options = []) {
    return HeadersRegistry::render('HeaderMinimal', $variant, $options);
}

/**
 * Hilfsfunktion für einfache Header-Verwendung
 */
function renderHeader($componentName, $variant = 'default', $options = []) {
    return HeadersRegistry::render($componentName, $variant, $options);
}
?>
