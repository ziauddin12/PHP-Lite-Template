<?php
/**
 * Benefits Sections Index
 * Zentrale Datei für alle Benefits-Komponenten
 */

// Lade alle Benefits-Komponenten
require_once 'SimpleBenefitsGrid.php';
require_once 'DetailedBenefitsShowcase.php';
require_once 'StickyBenefits.php';
require_once 'StatsIntegrationBenefits.php';
require_once 'MasonryBenefits.php';
require_once 'ProcessStepsBenefits.php';
require_once 'FeatureHighlights.php';

/**
 * Benefits-Registry für einfache Verwendung
 */
class BenefitsRegistry {
    
    public static $components = [
        // Simple Benefits Grid (4 Varianten)
        'SimpleBenefitsGrid' => [
            'function' => 'SimpleBenefitsGrid',
            'variants' => ['three-column', 'four-column', 'masonry-layout', 'standard-grid'],
            'description' => 'Einfache Grid-Layouts für Vorteile'
        ],
        
        // Sticky Benefits (3 Varianten)
        'StickyBenefits' => [
            'function' => 'StickyBenefits',
            'variants' => ['sticky-left', 'sticky-insights', 'sticky-company'],
            'description' => 'Sticky-Navigation Benefits'
        ],
        
        // Stats Integration Benefits (4 Varianten)
        'StatsIntegrationBenefits' => [
            'function' => 'StatsIntegrationBenefits',
            'variants' => ['business-insights', 'performance-metrics', 'measurable-impact', 'company-stats'],
            'description' => 'Benefits mit integrierten Statistiken'
        ],
        
        // Masonry Benefits (3 Varianten)
        'MasonryBenefits' => [
            'function' => 'MasonryBenefits',
            'variants' => ['top-results', 'super-results', 'highlighted-strengths'],
            'description' => 'Masonry-Layout Benefits'
        ],
        
        // Process Steps Benefits (2 Varianten)
        'ProcessStepsBenefits' => [
            'function' => 'ProcessStepsBenefits',
            'variants' => ['problem-solver', 'application-process'],
            'description' => 'Prozess-orientierte Benefits'
        ],
        
        // Feature Highlights (2 Varianten)
        'FeatureHighlights' => [
            'function' => 'FeatureHighlights',
            'variants' => ['company-facts', 'service-highlights'],
            'description' => 'Feature-Highlights und Fakten'
        ]
    ];
    
    /**
     * Rendert eine Benefits-Komponente
     */
    public static function render($componentName, $variant = 'default', $options = []) {
        if (isset(self::$components[$componentName])) {
            $component = self::$components[$componentName];
            $function = $component['function'];
            
            if (function_exists($function)) {
                return $function($variant, $options);
            } else {
                error_log("Benefits function not found: $function");
            }
        } else {
            error_log("Benefits component not found: $componentName");
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

// Hilfsfunktionen für alle Benefits-Komponenten
function renderSimpleBenefitsGrid($variant = 'three-column', $options = []) {
    return BenefitsRegistry::render('SimpleBenefitsGrid', $variant, $options);
}

function renderDetailedBenefitsShowcase($variant = 'comprehensive', $options = []) {
    return BenefitsRegistry::render('DetailedBenefitsShowcase', $variant, $options);
}

function renderStickyBenefits($variant = 'sticky-left', $options = []) {
    return BenefitsRegistry::render('StickyBenefits', $variant, $options);
}

function renderStatsIntegrationBenefits($variant = 'business-insights', $options = []) {
    return BenefitsRegistry::render('StatsIntegrationBenefits', $variant, $options);
}

function renderMasonryBenefits($variant = 'top-results', $options = []) {
    return BenefitsRegistry::render('MasonryBenefits', $variant, $options);
}

function renderProcessStepsBenefits($variant = 'problem-solver', $options = []) {
    return BenefitsRegistry::render('ProcessStepsBenefits', $variant, $options);
}

function renderFeatureHighlights($variant = 'company-facts', $options = []) {
    return BenefitsRegistry::render('FeatureHighlights', $variant, $options);
}

/**
 * Hilfsfunktion für einfache Benefits-Verwendung
 */
function renderBenefits($componentName, $variant = 'default', $options = []) {
    return BenefitsRegistry::render($componentName, $variant, $options);
}
?>
