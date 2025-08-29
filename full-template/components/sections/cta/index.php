<?php
/**
 * CTA Sections Index
 * Zentrale Datei für alle CTA-Komponenten
 */

// Lade alle CTA-Komponenten
require_once 'SimpleCTA.php';
require_once 'CountdownCTA.php';
require_once 'FeatureListCTA.php';
require_once 'MultiOptionCTA.php';
require_once 'ContactCTA.php';
require_once 'StatsCTA.php';
require_once 'ProblemSolutionCTA.php';
require_once 'PartnerCTA.php';

/**
 * CTA-Registry für einfache Verwendung
 */
class CTARegistry {
    
    public static $components = [
        // Simple CTA (6 Varianten)
        'SimpleCTA' => [
            'function' => 'SimpleCTA',
            'variants' => ['immediate-action', 'growth-focused', 'investment-focused', 'action-oriented', 'dual-button', 'simple-centered'],
            'description' => 'Einfache, direkte Call-to-Action Sektionen'
        ],
        
        // Countdown CTA (3 Varianten)
        'CountdownCTA' => [
            'function' => 'CountdownCTA',
            'variants' => ['immediate-countdown', 'exclusive-launch', 'limited-spots'],
            'description' => 'CTA mit Countdown-Timer und Dringlichkeit'
        ],
        
        // Feature List CTA (2 Varianten)
        'FeatureListCTA' => [
            'function' => 'FeatureListCTA',
            'variants' => ['pricing-features', 'service-checklist'],
            'description' => 'CTA mit Feature-Liste und Vorteilen'
        ],
        
        // Multi Option CTA (3 Varianten)
        'MultiOptionCTA' => [
            'function' => 'MultiOptionCTA',
            'variants' => ['business-options', 'demo-partner', 'service-options'],
            'description' => 'CTA mit mehreren Handlungsoptionen'
        ],
        
        // Contact CTA (4 Varianten)
        'ContactCTA' => [
            'function' => 'ContactCTA',
            'variants' => ['phone-contact', 'country-form', 'multi-contact', 'contact-form'],
            'description' => 'Kontakt-fokussierte CTA-Sektionen'
        ],
        
        // Stats CTA (3 Varianten)
        'StatsCTA' => [
            'function' => 'StatsCTA',
            'variants' => ['business-stats', 'service-stats', 'achievement-stats'],
            'description' => 'CTA mit Statistiken und Erfolgsmetriken'
        ],
        
        // Problem Solution CTA (3 Varianten)
        'ProblemSolutionCTA' => [
            'function' => 'ProblemSolutionCTA',
            'variants' => ['service-transformation', 'skill-monetization', 'problem-solver'],
            'description' => 'Problem-Lösung fokussierte CTA'
        ],
        
        // Partner CTA (3 Varianten)
        'PartnerCTA' => [
            'function' => 'PartnerCTA',
            'variants' => ['investment-focused', 'partnership-focused', 'eco-focused'],
            'description' => 'Partnership und Kooperations-CTA'
        ]
    ];
    
    /**
     * Rendert eine CTA-Komponente
     */
    public static function render($componentName, $variant = 'default', $options = []) {
        if (isset(self::$components[$componentName])) {
            $component = self::$components[$componentName];
            $function = $component['function'];
            
            if (function_exists($function)) {
                return $function($variant, $options);
            } else {
                error_log("CTA function not found: $function");
            }
        } else {
            error_log("CTA component not found: $componentName");
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

// Hilfsfunktionen für alle CTA-Komponenten
function renderSimpleCTA($variant = 'immediate-action', $options = []) {
    return CTARegistry::render('SimpleCTA', $variant, $options);
}

function renderCountdownCTA($variant = 'immediate-countdown', $options = []) {
    return CTARegistry::render('CountdownCTA', $variant, $options);
}

function renderFeatureListCTA($variant = 'pricing-features', $options = []) {
    return CTARegistry::render('FeatureListCTA', $variant, $options);
}

function renderMultiOptionCTA($variant = 'business-options', $options = []) {
    return CTARegistry::render('MultiOptionCTA', $variant, $options);
}

function renderContactCTA($variant = 'phone-contact', $options = []) {
    return CTARegistry::render('ContactCTA', $variant, $options);
}

function renderStatsCTA($variant = 'business-stats', $options = []) {
    return CTARegistry::render('StatsCTA', $variant, $options);
}

function renderProblemSolutionCTA($variant = 'service-transformation', $options = []) {
    return CTARegistry::render('ProblemSolutionCTA', $variant, $options);
}

function renderPartnerCTA($variant = 'investment-focused', $options = []) {
    return CTARegistry::render('PartnerCTA', $variant, $options);
}

/**
 * Hilfsfunktion für einfache CTA-Verwendung
 */
function renderCTA($componentName, $variant = 'default', $options = []) {
    return CTARegistry::render($componentName, $variant, $options);
}
?>
