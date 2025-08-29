<?php
/**
 * Vollständige Bild-Bibliothek für PHP Template System
 * Hochwertige, royalty-free Bilder für alle Sektions-Kategorien
 */

class ImageLibrary {
    
    // Hero Section Images
    public static $heroImages = [
        'business' => [
            'productivity' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'growth' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2015&q=80',
            'team_meeting' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'office_modern' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2069&q=80',
            'presentation' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=2126&q=80',
            'success' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80'
        ],
        'technology' => [
            'laptop_coding' => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=2069&q=80',
            'analytics' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'ai_dashboard' => 'https://images.unsplash.com/photo-1518186285589-2f7649de83e0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2074&q=80',
            'mobile_app' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'data_visualization' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        ],
        'finance' => [
            'growth_chart' => 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'investment' => 'https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2071&q=80',
            'banking' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2026&q=80',
            'calculator' => 'https://images.unsplash.com/photo-1554224154-26032fced8bd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        ],
        'people' => [
            'ceo_male' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80',
            'ceo_female' => 'https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80',
            'expert_male' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80',
            'expert_female' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80',
            'professional_male' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80',
            'professional_female' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=688&q=80'
        ],
        'abstract' => [
            'gradient_blue' => 'https://images.unsplash.com/photo-1557683316-973673baf926?ixlib=rb-4.0.3&auto=format&fit=crop&w=2015&q=80',
            'gradient_purple' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=2071&q=80',
            'geometric' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        ]
    ];
    
    // About Section Images
    public static $aboutImages = [
        'company' => [
            'office_building' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'modern_office' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2069&q=80',
            'growth_chart' => 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'mission_vision' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        ],
        'team' => [
            'collaboration' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'diverse_team' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=2088&q=80',
            'workplace_culture' => 'https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixlib=rb-4.0.3&auto=format&fit=crop&w=2087&q=80',
            'brainstorming' => 'https://images.unsplash.com/photo-1553028826-f4804a6dba3b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        ],
        'professionals' => [
            'business_woman' => 'https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80',
            'business_man' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80',
            'consultant' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80'
        ]
    ];
    
    // Pricing Section Images
    public static $pricingImages = [
        'standard' => [
            'basic_plan' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2026&q=80',
            'business_plan' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2015&q=80',
            'professional_plan' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        ],
        'services' => [
            'consultation' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=2126&q=80',
            'strategy_session' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'implementation' => 'https://images.unsplash.com/photo-1553028826-f4804a6dba3b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        ]
    ];
    
    // CTA Section Images
    public static $ctaImages = [
        'action' => [
            'urgent_action' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'call_to_action' => 'https://images.unsplash.com/photo-1557683316-973673baf926?ixlib=rb-4.0.3&auto=format&fit=crop&w=2015&q=80',
            'immediate_response' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=2071&q=80'
        ],
        'growth' => [
            'business_growth' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2015&q=80',
            'success_celebration' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80',
            'achievements' => 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        ]
    ];
    
    // Benefits Section Images
    public static $benefitsImages = [
        'services' => [
            'support_24_7' => 'https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'quality_assurance' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'customer_service' => 'https://images.unsplash.com/photo-1553028826-f4804a6dba3b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        ],
        'efficiency' => [
            'productivity' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'automation' => 'https://images.unsplash.com/photo-1518186285589-2f7649de83e0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2074&q=80',
            'optimization' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2015&q=80'
        ]
    ];
    
    // Team Section Images
    public static $teamImages = [
        'professionals' => [
            'ceo_male' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80',
            'ceo_female' => 'https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80',
            'cto_male' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80',
            'cfo_female' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80',
            'manager_male' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80',
            'manager_female' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=688&q=80'
        ],
        'leadership' => [
            'founder_male' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80',
            'founder_female' => 'https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80',
            'executive_male' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80',
            'executive_female' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80'
        ]
    ];
    
    // Testimonial Section Images
    public static $testimonialImages = [
        'professionals' => [
            'marketing_manager_male' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80',
            'marketing_manager_female' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=688&q=80',
            'sales_director_male' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80',
            'operations_manager_female' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80'
        ],
        'companyLogos' => [
            'novatech' => 'https://via.placeholder.com/120x40/3B82F6/FFFFFF?text=NovaTech',
            'optima' => 'https://via.placeholder.com/120x40/10B981/FFFFFF?text=Optima',
            'artistry' => 'https://via.placeholder.com/120x40/8B5CF6/FFFFFF?text=Artistry',
            'stellar' => 'https://via.placeholder.com/120x40/F59E0B/FFFFFF?text=Stellar',
            'vertex' => 'https://via.placeholder.com/120x40/EF4444/FFFFFF?text=Vertex'
        ]
    ];
    
    // Gallery Section Images
    public static $galleryImages = [
        'workspace' => [
            'modern_office' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2069&q=80',
            'open_office' => 'https://images.unsplash.com/photo-1497366811353-6870744d04b2?ixlib=rb-4.0.3&auto=format&fit=crop&w=2069&q=80',
            'quiet_workspace' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=2158&q=80',
            'creative_studio' => 'https://images.unsplash.com/photo-1581833971358-2c8b550f87b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        ],
        'office' => [
            'meeting_room' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=2126&q=80',
            'conference_room' => 'https://images.unsplash.com/photo-1553028826-f4804a6dba3b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'reception_area' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=2158&q=80'
        ]
    ];
    
    // FAQ Section Images
    public static $faqImages = [
        'support' => [
            'help_center' => 'https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'customer_service' => 'https://images.unsplash.com/photo-1553028826-f4804a6dba3b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'documentation' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        ]
    ];
    
    // Footer Section Images
    public static $footerImages = [
        'logos' => [
            'logotype_dark' => 'https://via.placeholder.com/150x50/1F2937/FFFFFF?text=Logotype',
            'logotype_light' => 'https://via.placeholder.com/150x50/FFFFFF/1F2937?text=Logotype',
            'company_logo' => 'https://via.placeholder.com/150x50/3B82F6/FFFFFF?text=Company'
        ]
    ];
    
    /**
     * Holt das Standard-Bild für eine Kategorie und Variante
     */
    public static function getDefaultImage($category, $variant) {
        $categories = [
            'hero' => self::$heroImages,
            'about' => self::$aboutImages,
            'pricing' => self::$pricingImages,
            'cta' => self::$ctaImages,
            'benefits' => self::$benefitsImages,
            'team' => self::$teamImages,
            'testimonials' => self::$testimonialImages,
            'gallery' => self::$galleryImages,
            'faq' => self::$faqImages,
            'footer' => self::$footerImages
        ];
        
        if (isset($categories[$category])) {
            foreach ($categories[$category] as $subCategory => $images) {
                if (isset($images[$variant])) {
                    return $images[$variant];
                }
            }
        }
        
        // Fallback image
        return 'https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2069&q=80';
    }
    
    /**
     * Holt eine zufällige Bild-URL aus einer Kategorie
     */
    public static function getRandomImage($category) {
        $categories = [
            'hero' => self::$heroImages,
            'about' => self::$aboutImages,
            'pricing' => self::$pricingImages,
            'cta' => self::$ctaImages,
            'benefits' => self::$benefitsImages,
            'team' => self::$teamImages,
            'testimonials' => self::$testimonialImages,
            'gallery' => self::$galleryImages,
            'faq' => self::$faqImages,
            'footer' => self::$footerImages
        ];
        
        if (isset($categories[$category])) {
            $allImages = [];
            foreach ($categories[$category] as $subCategory => $images) {
                $allImages = array_merge($allImages, array_values($images));
            }
            return $allImages[array_rand($allImages)];
        }
        
        // Fallback
        return self::getDefaultImage('hero', 'default');
    }
    
    /**
     * Generiert eine optimierte Bild-URL mit Parametern
     */
    public static function optimizeImageUrl($url, $width = 1200, $height = null, $quality = 80) {
        if (strpos($url, 'unsplash.com') !== false) {
            $params = ['w' => $width, 'q' => $quality];
            if ($height) {
                $params['h'] = $height;
                $params['fit'] = 'crop';
            }
            
            $queryString = http_build_query($params);
            return $url . '&' . $queryString;
        }
        
        return $url;
    }
}
?>
