<?php
/**
 * Hero Sections Index
 * Zentrale Datei für alle Hero-Komponenten
 */

// Lade alle Hero-Komponenten
require_once 'HeroBenefitFocused.php';
require_once 'HeroAuthority.php';
require_once 'HeroSocialProof.php';
/*require_once 'HeroWebinar.php';
require_once 'HeroIndustrySpecific.php';
require_once 'HeroFeatureList.php';
require_once 'HeroVersionUpdate.php';
require_once 'HeroWithStats.php';
require_once 'HeroMinimal.php';
require_once 'HeroWithVideo.php';*/

/**
 * Hero-Registry für einfache Verwendung
 */
class HeroRegistry {
    
    public static $components = [
        // Hero Benefit Focused (8 Varianten)
        'HeroBenefitFocused' => [
            'function' => 'HeroBenefitFocused',
            'variants' => ['productivity', 'cost-reduction', 'time-saving', 'growth-secret', 'smart-way', 'potential', 'tools', 'competitive'],
            'description' => 'Fokus auf konkrete Vorteile und Nutzen'
        ],
        
        // Hero Authority (6 Varianten)
        'HeroAuthority' => [
            'function' => 'HeroAuthority',
            'variants' => ['expert', 'marketing-expert', 'professional', 'real-estate', 'experience', 'customers'],
            'description' => 'Fokus auf Expertise und Autorität'
        ],
        
        // Hero Social Proof (5 Varianten)
        'HeroSocialProof' => [
            'function' => 'HeroSocialProof',
            'variants' => ['experienced', 'rating', 'global', 'satisfaction', 'trust-signals'],
            'description' => 'Fokus auf soziale Beweise und Vertrauen'
        ],
        
        // Hero Webinar (4 Varianten)
        'HeroWebinar' => [
            'function' => 'HeroWebinar',
            'variants' => ['marketing-webinar', 'website-building', 'live-event', 'registration'],
            'description' => 'Fokus auf Events und Webinare'
        ],
        
        // Hero Industry Specific (4 Varianten)
        'HeroIndustrySpecific' => [
            'function' => 'HeroIndustrySpecific',
            'variants' => ['finance', 'financial-advisor', 'same-day-service', 'consulting'],
            'description' => 'Branchenspezifische Hero-Sektionen'
        ],
        
        // Hero Feature List (3 Varianten)
        'HeroFeatureList' => [
            'function' => 'HeroFeatureList',
            'variants' => ['checkmarks', 'benefits', 'feature-showcase'],
            'description' => 'Fokus auf Feature-Listen'
        ],
        
        // Hero Version Update (2 Varianten)
        'HeroVersionUpdate' => [
            'function' => 'HeroVersionUpdate',
            'variants' => ['version-available', 'course-registration'],
            'description' => 'Fokus auf Updates und neue Versionen'
        ],
        
        // Einzelne Varianten
        'HeroWithStats' => [
            'function' => 'HeroWithStats',
            'variants' => ['default'],
            'description' => 'Hero mit Statistiken und Metriken'
        ],
        
        'HeroMinimal' => [
            'function' => 'HeroMinimal',
            'variants' => ['default'],
            'description' => 'Minimale, saubere Hero-Sektion'
        ],
        
        'HeroWithVideo' => [
            'function' => 'HeroWithVideo',
            'variants' => ['default'],
            'description' => 'Hero-Sektion mit Video-Player'
        ]
    ];
    
    /**
     * Rendert eine Hero-Komponente
     */
    public static function render($componentName, $variant = 'default', $options = []) {
        if (isset(self::$components[$componentName])) {
            $component = self::$components[$componentName];
            $function = $component['function'];
            
            if (function_exists($function)) {
                return $function($variant, $options);
            } else {
                error_log("Hero function not found: $function");
            }
        } else {
            error_log("Hero component not found: $componentName");
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
 * Hilfsfunktion für einfache Hero-Verwendung
 */
function renderHero($componentName, $variant = 'default', $options = []) {
    return HeroRegistry::render($componentName, $variant, $options);
}
?>
