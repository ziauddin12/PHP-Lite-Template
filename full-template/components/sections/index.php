<?php
/**
 * Master Index für alle Sektions-Komponenten
 * Zentrale Verwaltung aller verfügbaren Komponenten
 */

// Lade alle Sektions-Indices
require_once 'headers/index.php';
require_once 'heroes/index.php';
require_once 'about/index.php';
require_once 'products/index.php';
require_once 'pricing/index.php';
require_once 'cta/index.php';
require_once 'benefits/index.php';
require_once 'testimonials/index.php';
require_once 'team/index.php';
require_once 'faq/index.php';
require_once 'footers/index.php';
require_once 'gallery/index.php';

/**
 * Master-Registry für alle Sektions-Komponenten
 */
class SectionsRegistry {
    
    /**
     * Alle verfügbaren Sektions-Registries
     */
    public static $registries = [
        'headers' => 'HeadersRegistry',
        'heroes' => 'HeroRegistry',
        'about' => 'AboutRegistry',
        'products' => 'ProductsRegistry',
        'pricing' => 'PricingRegistry',
        'cta' => 'CTARegistry',
        'benefits' => 'BenefitsRegistry',
        'testimonials' => 'TestimonialsRegistry',
        'team' => 'TeamRegistry',
        'faq' => 'FAQRegistry',
        'footers' => 'FooterRegistry',
        'gallery' => 'GalleryRegistry'
    ];
    
    /**
     * Übersicht aller verfügbaren Komponenten
     */
    public static function getAllSections() {
        $allSections = [];
        
        foreach (self::$registries as $sectionType => $registryClass) {
            if (class_exists($registryClass)) {
                $components = $registryClass::getAllComponents();
                $allSections[$sectionType] = [
                    'registry' => $registryClass,
                    'components' => $components,
                    'totalComponents' => count($components),
                    'totalVariants' => array_sum(array_map(function($comp) {
                        return count($comp['variants']);
                    }, $components))
                ];
            }
        }
        
        return $allSections;
    }
    
    /**
     * Rendert eine Komponente aus beliebiger Sektion
     */
    public static function render($sectionType, $componentName, $variant = 'default', $options = []) {
        if (isset(self::$registries[$sectionType])) {
            $registryClass = self::$registries[$sectionType];
            
            if (class_exists($registryClass)) {
                return $registryClass::render($componentName, $variant, $options);
            } else {
                error_log("Registry class not found: $registryClass");
            }
        } else {
            error_log("Section type not found: $sectionType");
        }
    }
    
    /**
     * Prüft ob eine Sektion verfügbar ist
     */
    public static function sectionExists($sectionType) {
        return isset(self::$registries[$sectionType]) && class_exists(self::$registries[$sectionType]);
    }
    
    /**
     * Prüft ob eine Komponente in einer Sektion existiert
     */
    public static function componentExists($sectionType, $componentName) {
        if (self::sectionExists($sectionType)) {
            $registryClass = self::$registries[$sectionType];
            return $registryClass::exists($componentName);
        }
        return false;
    }
    
    /**
     * Holt alle Varianten einer Komponente
     */
    public static function getVariants($sectionType, $componentName) {
        if (self::componentExists($sectionType, $componentName)) {
            $registryClass = self::$registries[$sectionType];
            return $registryClass::getVariants($componentName);
        }
        return [];
    }
    
    /**
     * Generiert eine Übersicht aller verfügbaren Komponenten
     */
    public static function generateComponentOverview() {
        $overview = [];
        $totalComponents = 0;
        $totalVariants = 0;
        
        foreach (self::getAllSections() as $sectionType => $sectionData) {
            $overview[$sectionType] = [
                'name' => ucfirst($sectionType),
                'components' => $sectionData['totalComponents'],
                'variants' => $sectionData['totalVariants'],
                'details' => []
            ];
            
            foreach ($sectionData['components'] as $componentName => $componentData) {
                $overview[$sectionType]['details'][$componentName] = [
                    'name' => $componentName,
                    'variants' => count($componentData['variants']),
                    'description' => $componentData['description'],
                    'variantList' => $componentData['variants']
                ];
            }
            
            $totalComponents += $sectionData['totalComponents'];
            $totalVariants += $sectionData['totalVariants'];
        }
        
        return [
            'overview' => $overview,
            'totals' => [
                'sections' => count($overview),
                'components' => $totalComponents,
                'variants' => $totalVariants
            ]
        ];
    }
    
    /**
     * Sucht Komponenten basierend auf Keywords
     */
    public static function searchComponents($keywords) {
        $results = [];
        $keywords = strtolower($keywords);
        
        foreach (self::getAllSections() as $sectionType => $sectionData) {
            foreach ($sectionData['components'] as $componentName => $componentData) {
                // Suche in Name und Description
                $searchText = strtolower($componentName . ' ' . $componentData['description']);
                
                if (strpos($searchText, $keywords) !== false) {
                    $results[] = [
                        'section' => $sectionType,
                        'component' => $componentName,
                        'description' => $componentData['description'],
                        'variants' => $componentData['variants']
                    ];
                }
                
                // Suche in Varianten
                foreach ($componentData['variants'] as $variant) {
                    if (strpos(strtolower($variant), $keywords) !== false) {
                        $results[] = [
                            'section' => $sectionType,
                            'component' => $componentName,
                            'variant' => $variant,
                            'description' => $componentData['description']
                        ];
                    }
                }
            }
        }
        
        return $results;
    }
}

/**
 * Globale Hilfsfunktionen
 */

/**
 * Rendert eine beliebige Komponente
 */
function renderSection($sectionType, $componentName, $variant = 'default', $options = []) {
    return SectionsRegistry::render($sectionType, $componentName, $variant, $options);
}

/**
 * Schnelle Hero-Render-Funktion
 */
function renderHeroSection($componentName, $variant = 'default', $options = []) {
    return SectionsRegistry::render('heroes', $componentName, $variant, $options);
}

/**
 * Schnelle About-Render-Funktion
 */
function renderAboutSection($componentName, $variant = 'default', $options = []) {
    return SectionsRegistry::render('about', $componentName, $variant, $options);
}

/**
 * Schnelle Pricing-Render-Funktion
 */
function renderPricingSection($componentName, $variant = 'default', $options = []) {
    return SectionsRegistry::render('pricing', $componentName, $variant, $options);
}

/**
 * Schnelle CTA-Render-Funktion
 */
function renderCTASection($componentName, $variant = 'default', $options = []) {
    return SectionsRegistry::render('cta', $componentName, $variant, $options);
}

/**
 * Schnelle Benefits-Render-Funktion
 */
function renderBenefitsSection($componentName, $variant = 'default', $options = []) {
    return SectionsRegistry::render('benefits', $componentName, $variant, $options);
}

/**
 * Schnelle Team-Render-Funktion
 */
function renderTeamSection($componentName, $variant = 'default', $options = []) {
    return SectionsRegistry::render('team', $componentName, $variant, $options);
}

/**
 * Schnelle Testimonials-Render-Funktion
 */
function renderTestimonialsSection($componentName, $variant = 'default', $options = []) {
    return SectionsRegistry::render('testimonials', $componentName, $variant, $options);
}

/**
 * Schnelle FAQ-Render-Funktion
 */
function renderFAQSection($componentName, $variant = 'default', $options = []) {
    return SectionsRegistry::render('faq', $componentName, $variant, $options);
}

/**
 * Schnelle Footer-Render-Funktion
 */
function renderFooterSection($componentName, $variant = 'default', $options = []) {
    return SectionsRegistry::render('footers', $componentName, $variant, $options);
}

/**
 * Schnelle Gallery-Render-Funktion
 */
function renderProductsSection($componentName, $variant = 'default', $options = []) {
    return SectionsRegistry::render('products', $componentName, $variant, $options);
}

function renderGallerySection($componentName, $variant = 'default', $options = []) {
    return SectionsRegistry::render('gallery', $componentName, $variant, $options);
}

/**
 * Debug-Funktion: Zeigt alle verfügbaren Komponenten
 */
function debugShowAllComponents() {
    $overview = SectionsRegistry::generateComponentOverview();
    
    echo "<div style='font-family: monospace; background: #f5f5f5; padding: 20px; margin: 20px;'>";
    echo "<h2>📦 Verfügbare Komponenten</h2>";
    echo "<p><strong>Gesamt:</strong> {$overview['totals']['sections']} Sektionen, {$overview['totals']['components']} Komponenten, {$overview['totals']['variants']} Varianten</p>";
    
    foreach ($overview['overview'] as $sectionType => $sectionData) {
        echo "<h3>🎯 {$sectionData['name']} ({$sectionData['components']} Komponenten, {$sectionData['variants']} Varianten)</h3>";
        
        foreach ($sectionData['details'] as $componentName => $componentData) {
            echo "<div style='margin-left: 20px; margin-bottom: 10px;'>";
            echo "<strong>{$componentData['name']}</strong> ({$componentData['variants']} Varianten)<br>";
            echo "<em>{$componentData['description']}</em><br>";
            echo "<small>Varianten: " . implode(', ', $componentData['variantList']) . "</small>";
            echo "</div>";
        }
    }
    
    echo "</div>";
}

/**
 * Komponenten-Suche
 */
function searchSections($keywords) {
    return SectionsRegistry::searchComponents($keywords);
}
?>
