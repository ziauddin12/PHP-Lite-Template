<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Hero Social Proof - 5 Varianten
 * Fokus auf soziale Beweise und Vertrauen
 */

function HeroSocialProof($variant = 'experienced', $options = []) {
    $variants = [
        'experienced' => [
            'title' => 'Über 10 Jahre Erfahrung im Markt',
            'subtitle' => 'Seit 2014 vertrauen Unternehmen auf unsere bewährten Lösungen. Werden Sie Teil unserer Erfolgsgeschichte.',
            'ctaText' => 'Jetzt starten',
            'ctaLink' => '#start',
            'secondaryCtaText' => 'Referenzen ansehen',
            'secondaryCtaLink' => '#references',
            'image' => ImageLibrary::$heroImages['business']['office_modern'],
            'socialProof' => [
                'years' => '10+',
                'clients' => '2.500+',
                'projects' => '5.000+',
                'satisfaction' => '98%'
            ],
            'testimonial' => [
                'text' => 'Die beste Entscheidung, die wir getroffen haben. Absolute Professionalität!',
                'author' => 'Sarah Weber',
                'position' => 'CEO, TechStart GmbH',
                'avatar' => ImageLibrary::$testimonialImages['professionals']['marketing_manager_female']
            ],
            'trustLogos' => [
                'Google Partner', 'Microsoft Certified', 'AWS Partner', 'ISO 27001'
            ]
        ],
        'rating' => [
            'title' => '4.9/5 Sterne von 2.500+ zufriedenen Kunden',
            'subtitle' => 'Unsere Kunden sprechen für uns. Überzeugen Sie sich selbst von der Qualität unserer Arbeit.',
            'ctaText' => 'Bewertungen lesen',
            'ctaLink' => '#reviews',
            'secondaryCtaText' => 'Kostenlos testen',
            'secondaryCtaLink' => '#trial',
            'image' => ImageLibrary::$heroImages['people']['ceo_female'],
            'socialProof' => [
                'rating' => '4.9/5',
                'reviews' => '2.500+',
                'stars' => 5,
                'recommendation' => '96%'
            ],
            'testimonial' => [
                'text' => 'Fantastischer Service, schnelle Umsetzung, faire Preise. Kann ich nur empfehlen!',
                'author' => 'Michael Schmidt',
                'position' => 'Geschäftsführer, Digital Solutions',
                'avatar' => ImageLibrary::$testimonialImages['professionals']['sales_director_male']
            ],
            'trustLogos' => [
                'Trustpilot Excellent', 'Google 5 Stars', 'ProvenExpert', 'Kundentests.com'
            ]
        ],
        'global' => [
            'title' => 'Weltweit von 50.000+ Unternehmen genutzt',
            'subtitle' => 'Von Startups bis Fortune 500 - Unternehmen aller Größen vertrauen auf unsere globale Expertise.',
            'ctaText' => 'Global durchstarten',
            'ctaLink' => '#global',
            'secondaryCtaText' => 'Standorte ansehen',
            'secondaryCtaLink' => '#locations',
            'image' => ImageLibrary::$heroImages['business']['team_meeting'],
            'socialProof' => [
                'companies' => '50.000+',
                'countries' => '25',
                'languages' => '12',
                'uptime' => '99.9%'
            ],
            'testimonial' => [
                'text' => 'Global verfügbar, lokal betreut. Perfekte Kombination für internationale Projekte.',
                'author' => 'Jennifer Thompson',
                'position' => 'International Director, GlobalCorp',
                'avatar' => ImageLibrary::$testimonialImages['professionals']['operations_manager_female']
            ],
            'trustLogos' => [
                'Fortune 500 Partner', 'Global Presence', 'Multi-Language', '24/7 Support'
            ]
        ],
        'satisfaction' => [
            'title' => '99% Kundenzufriedenheit garantiert',
            'subtitle' => 'Wir stehen zu 100% hinter unserer Arbeit. Ihre Zufriedenheit ist unser Erfolg - garantiert.',
            'ctaText' => 'Zufriedenheitsgarantie nutzen',
            'ctaLink' => '#guarantee',
            'secondaryCtaText' => 'Garantiebedingungen',
            'secondaryCtaLink' => '#terms',
            'image' => ImageLibrary::$heroImages['people']['professional_female'],
            'socialProof' => [
                'satisfaction' => '99%',
                'guarantee' => '30 Tage',
                'support' => '24/7',
                'response' => '< 2h'
            ],
            'testimonial' => [
                'text' => 'Noch nie so einen zuverlässigen Partner gehabt. Die Garantie gibt zusätzliche Sicherheit.',
                'author' => 'Dr. Thomas Klein',
                'position' => 'Prokurist, InnovateTech',
                'avatar' => ImageLibrary::$heroImages['people']['expert_male']
            ],
            'trustLogos' => [
                'Zufriedenheitsgarantie', 'Geld-zurück-Garantie', 'TÜV geprüft', 'Qualitätssiegel'
            ]
        ],
        'trust-signals' => [
            'title' => 'Vertraut von Fortune 500 Unternehmen',
            'subtitle' => 'Wenn die größten Unternehmen der Welt uns vertrauen, können Sie das auch. Höchste Sicherheit und Zuverlässigkeit.',
            'ctaText' => 'Enterprise-Lösung anfragen',
            'ctaLink' => '#enterprise',
            'secondaryCtaText' => 'Referenzkunden',
            'secondaryCtaLink' => '#customers',
            'image' => ImageLibrary::$heroImages['business']['presentation'],
            'socialProof' => [
                'fortune500' => '150+',
                'security' => 'ISO 27001',
                'compliance' => 'GDPR',
                'availability' => '99.99%'
            ],
            'testimonial' => [
                'text' => 'Enterprise-Level Security und Support. Genau das, was wir für unsere kritischen Systeme brauchen.',
                'author' => 'Robert Johnson',
                'position' => 'CTO, MegaCorp International',
                'avatar' => ImageLibrary::$heroImages['people']['professional_male']
            ],
            'trustLogos' => [
                'Fortune 500', 'Enterprise Security', 'GDPR Compliant', 'SOC 2 Type II'
            ]
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['experienced'], $options);
    
    include 'templates/hero-social-proof.php';
}
?>
