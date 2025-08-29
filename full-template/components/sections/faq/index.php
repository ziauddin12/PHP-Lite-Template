<?php
/**
 * FAQ Sections Index
 * Zentrale Datei für alle FAQ-Komponenten
 */

// Lade alle FAQ-Komponenten
require_once 'BusinessProcessFAQ.php';
require_once 'EventConferenceFAQ.php';
require_once 'ProductServiceFAQ.php';
require_once 'NumberedFAQ.php';
require_once 'MinimalFAQ.php';

/**
 * FAQ-Registry für einfache Verwendung
 */
class FAQRegistry {
    
    public static $components = [
        // Business Process FAQ (1 Variante)
        'BusinessProcessFAQ' => [
            'function' => 'businessProcessFAQ',
            'variants' => ['process-focused'],
            'description' => 'FAQ für Geschäftsprozesse und Projekt-Workflows'
        ],
        
        // Event Conference FAQ (1 Variante)
        'EventConferenceFAQ' => [
            'function' => 'eventConferenceFAQ',
            'variants' => ['event-focused'],
            'description' => 'FAQ für Events, Konferenzen, Tickets und Logistik'
        ],
        
        // Product Service FAQ (1 Variante)
        'ProductServiceFAQ' => [
            'function' => 'productServiceFAQ',
            'variants' => ['service-focused'],
            'description' => 'FAQ für Produktfeatures, Preise und Support'
        ],
        
        // Numbered FAQ (1 Variante)
        'NumberedFAQ' => [
            'function' => 'numberedFAQ',
            'variants' => ['numbered-format'],
            'description' => 'FAQ mit visueller Nummerierung und verbessertem Design'
        ],
        
        // Minimal FAQ (1 Variante)
        'MinimalFAQ' => [
            'function' => 'minimalFAQ',
            'variants' => ['clean-format'],
            'description' => 'FAQ mit sauberem, minimalem Design und flexiblen Styling-Optionen'
        ]
    ];
    
    /**
     * Rendert eine FAQ-Komponente
     */
    public static function render($componentName, $variant = 'default', $options = []) {
        if (isset(self::$components[$componentName])) {
            $component = self::$components[$componentName];
            $function = $component['function'];
            
            if (function_exists($function)) {
                return $function($variant, $options);
            } else {
                error_log("FAQ function not found: $function");
            }
        } else {
            error_log("FAQ component not found: $componentName");
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

// Hilfsfunktionen für alle FAQ-Komponenten
function renderBusinessProcessFAQ($variant = 'process-focused', $options = []) {
    return FAQRegistry::render('BusinessProcessFAQ', $variant, $options);
}

function renderEventConferenceFAQ($variant = 'event-focused', $options = []) {
    return FAQRegistry::render('EventConferenceFAQ', $variant, $options);
}

function renderProductServiceFAQ($variant = 'service-focused', $options = []) {
    return FAQRegistry::render('ProductServiceFAQ', $variant, $options);
}

function renderNumberedFAQ($variant = 'numbered-format', $options = []) {
    return FAQRegistry::render('NumberedFAQ', $variant, $options);
}

function renderMinimalFAQ($variant = 'clean-format', $options = []) {
    return FAQRegistry::render('MinimalFAQ', $variant, $options);
}

/**
 * Hilfsfunktion für einfache FAQ-Verwendung
 */
function renderFAQ($componentName, $variant = 'default', $options = []) {
    return FAQRegistry::render($componentName, $variant, $options);
}
?>
