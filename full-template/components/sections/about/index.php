<?php
/**
 * About Sections Index
 * Zentrale Datei für alle About-Komponenten
 */

// Lade alle About-Komponenten
require_once 'AboutCompanyHistory.php';
require_once 'AboutFounderStory.php';
require_once 'AboutCompanyValues.php';
require_once 'AboutTeamCulture.php';
require_once 'AboutPersonalIntro.php';
require_once 'AboutProcess.php';
require_once 'AboutBentoLayout.php';

/**
 * About-Registry für einfache Verwendung
 */
class AboutRegistry {
    
    public static $components = [
        // About Company History (6 Varianten)
        'AboutCompanyHistory' => [
            'function' => 'AboutCompanyHistory',
            'variants' => ['growth-story', 'quality-delivery', 'mission-statement', 'founder-story', 'b2b-services', 'experience'],
            'description' => 'Fokus auf Unternehmensgeschichte und Entwicklung'
        ],
        
        // About Founder Story (8 Varianten)
        'AboutFounderStory' => [
            'function' => 'AboutFounderStory',
            'variants' => ['founder-journey', 'company-origin', 'mission-driven', 'team-story', 'innovation-story', 'customer-centric', 'global-impact', 'behind-scenes'],
            'description' => 'Gründer- und Unternehmensgeschichten'
        ],
        
        // About Company Values (4 Varianten)
        'AboutCompanyValues' => [
            'function' => 'AboutCompanyValues',
            'variants' => ['core-values', 'culture-focused', 'mission-vision', 'principles-driven'],
            'description' => 'Unternehmenswerte und -kultur'
        ],
        
        // About Team Culture (5 Varianten)
        'AboutTeamCulture' => [
            'function' => 'AboutTeamCulture',
            'variants' => ['team-culture', 'work-benefits', 'company-stats', 'office-benefits', 'global-team'],
            'description' => 'Fokus auf Teamkultur und Arbeitsplatz'
        ],
        
        // About Personal Intro (5 Varianten)
        'AboutPersonalIntro' => [
            'function' => 'AboutPersonalIntro',
            'variants' => ['ceo-message', 'expert-intro', 'fitness-expert', 'copywriter', 'founder-quote'],
            'description' => 'Persönliche Vorstellungen und Botschaften'
        ],
        
        // About Process (4 Varianten)
        'AboutProcess' => [
            'function' => 'AboutProcess',
            'variants' => ['how-we-work', 'service-process', 'z-pattern-flow', 'benefits-checklist'],
            'description' => 'Fokus auf Arbeitsprozesse und Methoden'
        ],
        
        // About Bento Layout (4 Varianten)
        'AboutBentoLayout' => [
            'function' => 'AboutBentoLayout',
            'variants' => ['team-overview', 'company-metrics', 'mission-values', 'global-presence'],
            'description' => 'Moderne Bento-Grid Layouts'
        ]
    ];
    
    /**
     * Rendert eine About-Komponente
     */
    public static function render($componentName, $variant = 'default', $options = []) {
        if (isset(self::$components[$componentName])) {
            $component = self::$components[$componentName];
            $function = $component['function'];
            
            if (function_exists($function)) {
                return $function($variant, $options);
            } else {
                error_log("About function not found: $function");
            }
        } else {
            error_log("About component not found: $componentName");
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
 * Hilfsfunktion für einfache About-Verwendung
 */
function renderAbout($componentName, $variant = 'default', $options = []) {
    return AboutRegistry::render($componentName, $variant, $options);
}
?>
