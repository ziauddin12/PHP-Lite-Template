<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Hero Authority - 6 Varianten
 * Fokus auf Expertise und Autorität
 */

function HeroAuthority($variant = 'expert', $options = []) {
    $variants = [
        'expert' => [
            'title' => 'Der Experte für digitale Transformation',
            'subtitle' => 'Mit über 15 Jahren Erfahrung helfe ich Unternehmen dabei, ihre digitale Zukunft zu gestalten. Vertrauen Sie auf bewährte Expertise.',
            'expertName' => 'Dr. Michael Weber',
            'expertTitle' => 'Digital Transformation Expert',
            'expertImage' => ImageLibrary::$heroImages['people']['expert_male'],
            'ctaText' => 'Beratung anfragen',
            'ctaLink' => '#consultation',
            'secondaryCtaText' => 'Portfolio ansehen',
            'secondaryCtaLink' => '#portfolio',
            'credentials' => [
                '15+ Jahre Erfahrung',
                '200+ erfolgreiche Projekte',
                'Forbes Top Consultant',
                'Harvard Business School'
            ],
            'testimonial' => [
                'text' => 'Dr. Weber hat unser Unternehmen revolutioniert. Seine Expertise ist unübertroffen.',
                'author' => 'Sarah Miller',
                'position' => 'CEO, TechCorp'
            ],
            'stats' => [
                ['value' => '200+', 'label' => 'Erfolgreiche Projekte'],
                ['value' => '98%', 'label' => 'Kundenzufriedenheit'],
                ['value' => '15+', 'label' => 'Jahre Erfahrung']
            ]
        ],
        'marketing-expert' => [
            'title' => 'Marketing-Strategin mit Millionen-Impact',
            'subtitle' => 'Ich entwickle Marketing-Strategien, die Ergebnisse liefern. Über 50 Millionen Euro Umsatz für meine Kunden generiert.',
            'expertName' => 'Lisa Hoffmann',
            'expertTitle' => 'Senior Marketing Strategist',
            'expertImage' => ImageLibrary::$heroImages['people']['expert_female'],
            'ctaText' => 'Strategie entwickeln',
            'ctaLink' => '#strategy',
            'secondaryCtaText' => 'Case Studies',
            'secondaryCtaLink' => '#cases',
            'credentials' => [
                '€50M+ Umsatz generiert',
                '10+ Jahre Marketing',
                'Google Premier Partner',
                'Marketing Automation Expert'
            ],
            'testimonial' => [
                'text' => 'Lisa hat unseren Umsatz in 6 Monaten verdoppelt. Absolute Empfehlung!',
                'author' => 'Thomas Klein',
                'position' => 'Geschäftsführer, E-Commerce GmbH'
            ],
            'stats' => [
                ['value' => '€50M+', 'label' => 'Generierter Umsatz'],
                ['value' => '300%', 'label' => 'ROI Steigerung'],
                ['value' => '100+', 'label' => 'Erfolgreiche Kampagnen']
            ]
        ],
        'professional' => [
            'title' => 'Professionelle Beratung auf höchstem Niveau',
            'subtitle' => 'Wir sind das führende Beratungsunternehmen für mittelständische Unternehmen. Unsere Expertise bringt Sie zum Erfolg.',
            'expertName' => 'Weber & Partner',
            'expertTitle' => 'Management Consulting',
            'expertImage' => ImageLibrary::$heroImages['business']['team_meeting'],
            'ctaText' => 'Beratung starten',
            'ctaLink' => '#consulting',
            'secondaryCtaText' => 'Unternehmen kennenlernen',
            'secondaryCtaLink' => '#about',
            'credentials' => [
                'Top 10 Beratung Deutschland',
                '25+ Jahre am Markt',
                '500+ zufriedene Kunden',
                'Branchenführer im Mittelstand'
            ],
            'testimonial' => [
                'text' => 'Weber & Partner haben unser Unternehmen auf das nächste Level gebracht.',
                'author' => 'Dr. Anna Schmidt',
                'position' => 'CEO, InnovateTech AG'
            ],
            'stats' => [
                ['value' => '500+', 'label' => 'Zufriedene Kunden'],
                ['value' => '25+', 'label' => 'Jahre Erfahrung'],
                ['value' => '95%', 'label' => 'Erfolgsrate']
            ]
        ],
        'real-estate' => [
            'title' => 'Ihr Immobilien-Experte mit Erfolgsgarantie',
            'subtitle' => 'Über 1000 erfolgreich verkaufte Immobilien. Ich kenne den Markt und sorge für den bestmöglichen Preis für Ihre Immobilie.',
            'expertName' => 'Alexander Richter',
            'expertTitle' => 'Immobilien-Makler & Investor',
            'expertImage' => ImageLibrary::$heroImages['people']['professional_male'],
            'ctaText' => 'Immobilie bewerten',
            'ctaLink' => '#valuation',
            'secondaryCtaText' => 'Referenzen ansehen',
            'secondaryCtaLink' => '#references',
            'credentials' => [
                '1000+ verkaufte Immobilien',
                '€200M+ Transaktionsvolumen',
                'IHK-zertifizierter Makler',
                'Top 1% der Branche'
            ],
            'testimonial' => [
                'text' => 'Alexander hat unsere Immobilie 20% über dem Marktpreis verkauft. Fantastisch!',
                'author' => 'Familie Müller',
                'position' => 'Immobilien-Verkäufer'
            ],
            'stats' => [
                ['value' => '1000+', 'label' => 'Verkaufte Immobilien'],
                ['value' => '€200M+', 'label' => 'Transaktionsvolumen'],
                ['value' => '4.9/5', 'label' => 'Kundenbewertung']
            ]
        ],
        'experience' => [
            'title' => '20+ Jahre Branchenerfahrung für Ihren Erfolg',
            'subtitle' => 'Seit zwei Jahrzehnten begleite ich Unternehmen auf ihrem Weg zum Erfolg. Meine Erfahrung ist Ihr Vorteil.',
            'expertName' => 'Prof. Dr. Martina Fischer',
            'expertTitle' => 'Senior Business Consultant',
            'expertImage' => ImageLibrary::$heroImages['people']['professional_female'],
            'ctaText' => 'Erfahrung nutzen',
            'ctaLink' => '#experience',
            'secondaryCtaText' => 'Vita herunterladen',
            'secondaryCtaLink' => '#cv',
            'credentials' => [
                '20+ Jahre Consulting',
                'Professor für BWL',
                '300+ Projekte geleitet',
                'Bestseller-Autorin'
            ],
            'testimonial' => [
                'text' => 'Prof. Fischer hat mit ihrer Erfahrung unser Unternehmen transformiert.',
                'author' => 'Marcus Weber',
                'position' => 'Vorstand, Global Solutions AG'
            ],
            'stats' => [
                ['value' => '20+', 'label' => 'Jahre Erfahrung'],
                ['value' => '300+', 'label' => 'Geleitete Projekte'],
                ['value' => '3', 'label' => 'Bestseller-Bücher']
            ]
        ],
        'customers' => [
            'title' => 'Von 10.000+ Kunden vertraut und geschätzt',
            'subtitle' => 'Unser Erfolg spricht für sich: Tausende zufriedene Kunden weltweit vertrauen auf unsere Expertise und Zuverlässigkeit.',
            'expertName' => 'Global Excellence Team',
            'expertTitle' => 'International Consulting Group',
            'expertImage' => ImageLibrary::$heroImages['business']['office_modern'],
            'ctaText' => 'Teil der Familie werden',
            'ctaLink' => '#join',
            'secondaryCtaText' => 'Kundenstimmen lesen',
            'secondaryCtaLink' => '#testimonials',
            'credentials' => [
                '10.000+ zufriedene Kunden',
                'Präsenz in 25 Ländern',
                '99.5% Kundenzufriedenheit',
                'Award-winning Service'
            ],
            'testimonial' => [
                'text' => 'Der beste Service, den wir je erhalten haben. Absolute Weltklasse!',
                'author' => 'Jennifer Thompson',
                'position' => 'International Director, MegaCorp'
            ],
            'stats' => [
                ['value' => '10K+', 'label' => 'Zufriedene Kunden'],
                ['value' => '25', 'label' => 'Länder weltweit'],
                ['value' => '99.5%', 'label' => 'Kundenzufriedenheit']
            ]
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['expert'], $options);
    
    include 'templates/hero-authority.php';
}
?>
