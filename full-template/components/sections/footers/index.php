<?php
/**
 * Footer Sections Index
 * Zentrale Datei für alle Footer-Komponenten
 */

// Lade alle Footer-Komponenten
require_once 'SimpleFooter.php';
require_once 'MultiColumnFooter.php';
require_once 'ContactFocusedFooter.php';
require_once 'NewsletterFooter.php';

/**
 * Footer-Registry für einfache Verwendung
 */
class FooterRegistry {
    
    public static $components = [
        // Simple Footer (3 Varianten)
        'SimpleFooter' => [
            'function' => 'SimpleFooter',
            'variants' => ['minimal', 'basic', 'contact'],
            'description' => 'Einfache Footer-Layouts'
        ],
        
        // Multi Column Footer (4 Varianten)
        'MultiColumnFooter' => [
            'function' => 'MultiColumnFooter',
            'variants' => ['three-column', 'four-column', 'extended-services', 'comprehensive'],
            'description' => 'Mehrspaltige Footer-Layouts'
        ],
        
        // Contact Focused Footer (2 Varianten)
        'ContactFocusedFooter' => [
            'function' => 'ContactFocusedFooter',
            'variants' => ['contact-simple', 'contact-detailed'],
            'description' => 'Kontakt-fokussierte Footer'
        ],
        
        // Newsletter Footer (3 Varianten)
        'NewsletterFooter' => [
            'function' => 'NewsletterFooter',
            'variants' => ['newsletter-simple', 'newsletter-extended', 'newsletter-comprehensive'],
            'description' => 'Newsletter-fokussierte Footer'
        ]
    ];
    
    /**
     * Rendert eine Footer-Komponente
     */
    public static function render($componentName, $variant = 'default', $options = []) {
        if (isset(self::$components[$componentName])) {
            $component = self::$components[$componentName];
            $function = $component['function'];
            
            if (function_exists($function)) {
                return $function($variant, $options);
            } else {
                error_log("Footer function not found: $function");
            }
        } else {
            error_log("Footer component not found: $componentName");
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

/**
 * Hilfsfunktion für einfache Footer-Verwendung
 */
function renderFooter($componentName, $variant = 'default', $options = []) {
    return FooterRegistry::render($componentName, $variant, $options);
}
// Hilfsfunktionen für alle Footer-Komponenten
function renderSimpleFooter($variant = 'minimal', $options = []) {
    return FooterRegistry::render('SimpleFooter', $variant, $options);
}

function renderMultiColumnFooter($variant = 'three-column', $options = []) {
    return FooterRegistry::render('MultiColumnFooter', $variant, $options);
}

function renderContactFocusedFooter($variant = 'contact-simple', $options = []) {
    return FooterRegistry::render('ContactFocusedFooter', $variant, $options);
}

function renderNewsletterFooter($variant = 'newsletter-simple', $options = []) {
    return FooterRegistry::render('NewsletterFooter', $variant, $options);
}
?>
