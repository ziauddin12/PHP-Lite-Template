<?php
/**
 * Testimonials Sections Index
 * Zentrale Datei für alle Testimonial-Komponenten
 */

// Lade alle Testimonial-Komponenten
require_once 'SimpleTestimonials.php';
require_once 'FeaturedCustomerStories.php';
require_once 'VerifiedReviews.php';
require_once 'StarRatingTestimonials.php';
require_once 'CompanyLogoTestimonials.php';
require_once 'MasonryTestimonials.php';
require_once 'DetailedCaseStudies.php';

/**
 * Testimonials-Registry für einfache Verwendung
 */
class TestimonialsRegistry {
    
    public static $components = [
        // Simple Testimonials (2 Varianten)
        'SimpleTestimonials' => [
            'function' => 'SimpleTestimonials',
            'variants' => ['basic-grid', 'compact-grid'],
            'description' => 'Einfache Testimonial-Layouts'
        ],
        
        // Featured Customer Stories (1 Variante)
        'FeaturedCustomerStories' => [
            'function' => 'FeaturedCustomerStories',
            'variants' => ['customer-highlight'],
            'description' => 'Hervorgehobene Kundenstories'
        ],
        
        // Verified Reviews (1 Variante)
        'VerifiedReviews' => [
            'function' => 'VerifiedReviews',
            'variants' => ['verified-testimonials'],
            'description' => 'Verifizierte Kundenbewertungen'
        ],
        
        // Star Rating Testimonials (1 Variante)
        'StarRatingTestimonials' => [
            'function' => 'StarRatingTestimonials',
            'variants' => ['star-reviews'],
            'description' => 'Sterne-Bewertungen'
        ],
        
        // Company Logo Testimonials (1 Variante)
        'CompanyLogoTestimonials' => [
            'function' => 'CompanyLogoTestimonials',
            'variants' => ['logo-testimonials'],
            'description' => 'Testimonials mit Unternehmens-Logos'
        ],
        
        // Masonry Testimonials (1 Variante)
        'MasonryTestimonials' => [
            'function' => 'MasonryTestimonials',
            'variants' => ['masonry-grid'],
            'description' => 'Masonry-Grid Testimonials'
        ],
        
        // Detailed Case Studies (3 Varianten)
        'DetailedCaseStudies' => [
            'function' => 'DetailedCaseStudies',
            'variants' => ['case-study-full', 'case-study-compact', 'case-study-minimal'],
            'description' => 'Detaillierte Fallstudien'
        ]
    ];
    
    /**
     * Rendert eine Testimonials-Komponente
     */
    public static function render($componentName, $variant = 'default', $options = []) {
        if (isset(self::$components[$componentName])) {
            $component = self::$components[$componentName];
            $function = $component['function'];
            
            if (function_exists($function)) {
                return $function($variant, $options);
            } else {
                error_log("Testimonials function not found: $function");
            }
        } else {
            error_log("Testimonials component not found: $componentName");
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
 * Hilfsfunktion für einfache Testimonials-Verwendung
 */
// Hilfsfunktionen für alle Testimonials-Komponenten
function renderSimpleTestimonials($variant = 'basic-grid', $options = []) {
    return TestimonialsRegistry::render('SimpleTestimonials', $variant, $options);
}

function renderFeaturedCustomerStories($variant = 'customer-highlight', $options = []) {
    return TestimonialsRegistry::render('FeaturedCustomerStories', $variant, $options);
}

function renderVerifiedReviews($variant = 'verified-testimonials', $options = []) {
    return TestimonialsRegistry::render('VerifiedReviews', $variant, $options);
}

function renderStarRatingTestimonials($variant = 'star-reviews', $options = []) {
    return TestimonialsRegistry::render('StarRatingTestimonials', $variant, $options);
}

function renderCompanyLogoTestimonials($variant = 'logo-testimonials', $options = []) {
    return TestimonialsRegistry::render('CompanyLogoTestimonials', $variant, $options);
}

function renderMasonryTestimonials($variant = 'masonry-grid', $options = []) {
    return TestimonialsRegistry::render('MasonryTestimonials', $variant, $options);
}

function renderDetailedCaseStudies($variant = 'case-study-full', $options = []) {
    return TestimonialsRegistry::render('DetailedCaseStudies', $variant, $options);
}

/**
 * Hilfsfunktion für einfache Testimonials-Verwendung
 */
function renderTestimonials($componentName, $variant = 'default', $options = []) {
    return TestimonialsRegistry::render($componentName, $variant, $options);
}
?>
