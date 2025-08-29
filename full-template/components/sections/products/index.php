<?php
/**
 * Products Sections Index
 * Zentrale Datei für alle Product-Komponenten
 */

// Lade alle Product-Komponenten
require_once 'ProductShowcase.php';
require_once 'ProductConfigurator.php';
require_once 'ProductGrid.php';
require_once 'CourseOverview.php';
require_once 'ProductFeatures.php';
require_once 'ProductSchedule.php';

/**
 * Products-Registry für einfache Verwendung
 */
class ProductsRegistry {
    
    public static $components = [
        // Product Showcase (6 Varianten)
        'ProductShowcase' => [
            'function' => 'ProductShowcase',
            'variants' => ['service-consultation', 'strategy-session', 'limited-offer', 'business-system', 'course-overview', 'agency-service'],
            'description' => 'Service- und Produkt-Showcases mit Preisen und Features'
        ],
        
        // Product Configurator (4 Varianten)
        'ProductConfigurator' => [
            'function' => 'ProductConfigurator',
            'variants' => ['tshirt-configurator', 'house-configurator', 'form-configurator', 'product-options'],
            'description' => 'Interaktive Produkt-Konfiguratoren mit Preisberechnung'
        ],
        
        // Product Grid (5 Varianten)
        'ProductGrid' => [
            'function' => 'ProductGrid',
            'variants' => ['simple-grid', 'detailed-grid', 'sale-grid', 'feature-grid', 'new-arrivals'],
            'description' => 'Produkt-Raster und -Übersichten'
        ],
        
        // Course Overview (4 Varianten)
        'CourseOverview' => [
            'function' => 'CourseOverview',
            'variants' => ['course-modules', 'service-overview', 'course-features', 'bonus-content'],
            'description' => 'Kurs- und Service-Übersichten mit Modulen'
        ],
        
        // Product Features (4 Varianten)
        'ProductFeatures' => [
            'function' => 'ProductFeatures',
            'variants' => ['feature-grid', 'sticky-features', 'benefit-list', 'feature-showcase'],
            'description' => 'Produkt-Features und Vorteile-Darstellungen'
        ],
        
        // Product Schedule (4 Varianten)
        'ProductSchedule' => [
            'function' => 'ProductSchedule',
            'variants' => ['schedule-grid', 'service-schedule', 'price-list', 'timeline-view'],
            'description' => 'Zeitpläne, Preislisten und Service-Schedules'
        ]
    ];
    
    /**
     * Rendert eine Products-Komponente
     */
    public static function render($componentName, $variant = 'default', $options = []) {
        if (isset(self::$components[$componentName])) {
            $component = self::$components[$componentName];
            $function = $component['function'];
            
            if (function_exists($function)) {
                return $function($variant, $options);
            } else {
                error_log("Products function not found: $function");
            }
        } else {
            error_log("Products component not found: $componentName");
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
 * Hilfsfunktionen für einfache Product-Verwendung
 */
function renderProductShowcase($variant = 'service-consultation', $options = []) {
    return ProductsRegistry::render('ProductShowcase', $variant, $options);
}

function renderProductConfigurator($variant = 'tshirt-configurator', $options = []) {
    return ProductsRegistry::render('ProductConfigurator', $variant, $options);
}

function renderProductGrid($variant = 'simple-grid', $options = []) {
    return ProductsRegistry::render('ProductGrid', $variant, $options);
}

function renderCourseOverview($variant = 'course-modules', $options = []) {
    return ProductsRegistry::render('CourseOverview', $variant, $options);
}

function renderProductFeatures($variant = 'feature-grid', $options = []) {
    return ProductsRegistry::render('ProductFeatures', $variant, $options);
}

function renderProductSchedule($variant = 'schedule-grid', $options = []) {
    return ProductsRegistry::render('ProductSchedule', $variant, $options);
}

/**
 * Hilfsfunktion für einfache Products-Verwendung
 */
function renderProduct($componentName, $variant = 'default', $options = []) {
    return ProductsRegistry::render($componentName, $variant, $options);
}
?>
