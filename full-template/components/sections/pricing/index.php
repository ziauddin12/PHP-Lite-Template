<?php
/**
 * Pricing Sections Index
 * Zentrale Datei für alle Pricing-Komponenten
 */

// Lade alle Pricing-Komponenten
require_once 'StandardPricingCards.php';
require_once 'ComparisonTables.php';
require_once 'SinglePlanPricing.php';
require_once 'ServiceBasedPricing.php';
require_once 'CustomLayoutPricing.php';

/**
 * Pricing-Registry für einfache Verwendung
 */
class PricingRegistry {
    
    public static $components = [
        // Standard Pricing Cards (8 Varianten)
        'StandardPricingCards' => [
            'function' => 'StandardPricingCards',
            'variants' => ['basic-business-pro', 'free-pro-elite', 'free-with-negatives', 'essential-monthly', 'essential-with-descriptions', 'overview-highlights', 'detailed-descriptions', 'comprehensive-features'],
            'description' => 'Klassische 3-Spalten Pricing-Karten'
        ],
        
        // Single Plan Pricing (4 Varianten)
        'SinglePlanPricing' => [
            'function' => 'SinglePlanPricing',
            'variants' => ['one-time-compact', 'one-time-with-trust', 'two-plans-guarantee', 'fixed-plans'],
            'description' => 'Einzelne oder wenige Preispläne'
        ],
        
        // Service Based Pricing (3 Varianten)
        'ServiceBasedPricing' => [
            'function' => 'ServiceBasedPricing',
            'variants' => ['service-packages', 'service-with-descriptions', 'enterprise-focused'],
            'description' => 'Service- und Beratungspreise'
        ],
        
        // Comparison Tables (7 Varianten)
        'ComparisonTables' => [
            'function' => 'ComparisonTables',
            'variants' => ['feature-comparison', 'detailed-comparison', 'simple-comparison', 'advanced-features', 'pro-comparison', 'business-tiers', 'enterprise-comparison'],
            'description' => 'Detaillierte Preisvergleichstabellen'
        ],
        
        // Custom Layout Pricing (6 Varianten)
        'CustomLayoutPricing' => [
            'function' => 'CustomLayoutPricing',
            'variants' => ['starts-at-pricing', 'custom-solution', 'single-price-detailed', 'pro-mode', 'professional-rating', 'comprehensive-single'],
            'description' => 'Individuelle Pricing-Layouts'
        ]
    ];
    
    /**
     * Rendert eine Pricing-Komponente
     */
    public static function render($componentName, $variant = 'default', $options = []) {
        if (isset(self::$components[$componentName])) {
            $component = self::$components[$componentName];
            $function = $component['function'];
            
            if (function_exists($function)) {
                return $function($variant, $options);
            } else {
                error_log("Pricing function not found: $function");
            }
        } else {
            error_log("Pricing component not found: $componentName");
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
 * Hilfsfunktion für einfache Pricing-Verwendung
 */
// Hilfsfunktionen für alle Pricing-Komponenten
function renderStandardPricingCards($variant = 'basic-business-pro', $options = []) {
    return PricingRegistry::render('StandardPricingCards', $variant, $options);
}

function renderSinglePlanPricing($variant = 'one-time-compact', $options = []) {
    return PricingRegistry::render('SinglePlanPricing', $variant, $options);
}

function renderServiceBasedPricing($variant = 'service-packages', $options = []) {
    return PricingRegistry::render('ServiceBasedPricing', $variant, $options);
}

function renderComparisonTables($variant = 'feature-comparison', $options = []) {
    return PricingRegistry::render('ComparisonTables', $variant, $options);
}

function renderCustomLayoutPricing($variant = 'starts-at-pricing', $options = []) {
    return PricingRegistry::render('CustomLayoutPricing', $variant, $options);
}

function renderPricing($componentName, $variant = 'default', $options = []) {
    return PricingRegistry::render($componentName, $variant, $options);
}
?>
