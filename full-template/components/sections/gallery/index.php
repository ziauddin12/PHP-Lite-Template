<?php
/**
 * Gallery Sections Index
 * Zentrale Datei für alle Gallery-Komponenten
 */

// Lade alle Gallery-Komponenten
require_once 'SimpleImageGallery.php';
require_once 'WorkspaceGalleries.php';
require_once 'OfficeEnvironmentGalleries.php';
require_once 'ProjectProductGalleries.php';
require_once 'InteractiveGalleries.php';
require_once 'BrandedGalleries.php';

/**
 * Gallery-Registry für einfache Verwendung
 */
class GalleryRegistry {
    
    public static $components = [
        // Simple Image Gallery (5 Varianten)
        'SimpleImageGallery' => [
            'function' => 'SimpleImageGallery',
            'variants' => ['masonry-grid', 'grid-layout', 'carousel-showcase', 'before-after', 'team-gallery'],
            'description' => 'Einfache Bildergalerien für verschiedene Zwecke'
        ],
        
        // Workspace Galleries (6 Varianten)
        'WorkspaceGalleries' => [
            'function' => 'WorkspaceGalleries',
            'variants' => ['simple-workspace', 'focused-workspace', 'collaboration-space', 'team-space', 'modern-office', 'creative-workspace'],
            'description' => 'Arbeitsplatz-Galerien für verschiedene Büroumgebungen'
        ],
        
        // Office Environment Galleries (5 Varianten)
        'OfficeEnvironmentGalleries' => [
            'function' => 'OfficeEnvironmentGalleries',
            'variants' => ['meeting-rooms', 'reception-areas', 'open-spaces', 'quiet-zones', 'kitchen-break-areas'],
            'description' => 'Büroumgebungs-Galerien für verschiedene Bereiche'
        ],
        
        // Project Product Galleries (4 Varianten)
        'ProjectProductGalleries' => [
            'function' => 'ProjectProductGalleries',
            'variants' => ['portfolio-showcase', 'product-gallery', 'before-after', 'case-studies'],
            'description' => 'Projekt- und Produkt-Galerien'
        ],
        
        // Interactive Galleries (3 Varianten)
        'InteractiveGalleries' => [
            'function' => 'InteractiveGalleries',
            'variants' => ['lightbox-gallery', 'slider-gallery', 'masonry-gallery'],
            'description' => 'Interaktive Galerien mit speziellen Features'
        ],
        
        // Branded Galleries (2 Varianten)
        'BrandedGalleries' => [
            'function' => 'BrandedGalleries',
            'variants' => ['company-culture', 'behind-the-scenes'],
            'description' => 'Unternehmens-Galerien mit Branding-Fokus'
        ]
    ];
    
    /**
     * Rendert eine Gallery-Komponente
     */
    public static function render($componentName, $variant = 'default', $options = []) {
        if (isset(self::$components[$componentName])) {
            $component = self::$components[$componentName];
            $function = $component['function'];
            
            if (function_exists($function)) {
                return $function($variant, $options);
            } else {
                error_log("Gallery function not found: $function");
            }
        } else {
            error_log("Gallery component not found: $componentName");
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

// Hilfsfunktionen für alle Gallery-Komponenten
function renderSimpleImageGallery($variant = 'masonry-grid', $options = []) {
    return GalleryRegistry::render('SimpleImageGallery', $variant, $options);
}

function renderWorkspaceGalleries($variant = 'simple-workspace', $options = []) {
    return GalleryRegistry::render('WorkspaceGalleries', $variant, $options);
}

function renderOfficeEnvironmentGalleries($variant = 'meeting-rooms', $options = []) {
    return GalleryRegistry::render('OfficeEnvironmentGalleries', $variant, $options);
}

function renderProjectProductGalleries($variant = 'portfolio-showcase', $options = []) {
    return GalleryRegistry::render('ProjectProductGalleries', $variant, $options);
}

function renderInteractiveGalleries($variant = 'lightbox-gallery', $options = []) {
    return GalleryRegistry::render('InteractiveGalleries', $variant, $options);
}

function renderBrandedGalleries($variant = 'company-culture', $options = []) {
    return GalleryRegistry::render('BrandedGalleries', $variant, $options);
}

/**
 * Hilfsfunktion für einfache Gallery-Verwendung
 */
function renderGallery($componentName, $variant = 'default', $options = []) {
    return GalleryRegistry::render($componentName, $variant, $options);
}
?>
