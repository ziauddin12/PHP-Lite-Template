<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * Hero Benefit Focused - 8 Varianten
 * Fokus auf konkrete Vorteile und Nutzen
 */

function HeroBenefitFocused($variant = 'productivity', $options = []) {
    $variants = [
        'productivity' => [
            'title' => 'Steigere deine Produktivität um 300%',
            'subtitle' => 'Mit unseren bewährten Strategien und Tools erreichst du in weniger Zeit mehr. Automatisiere deine Workflows und fokussiere dich auf das Wesentliche.',
            'ctaText' => 'Produktivität steigern',
            'ctaLink' => '#productivity',
            'secondaryCtaText' => 'Kostenlose Demo',
            'secondaryCtaLink' => '#demo',
            'image' => ImageLibrary::$heroImages['business']['productivity'],
            'benefits' => [
                'Automatisierte Workflows',
                'Intelligente Zeitplanung', 
                'Fokussierte Arbeitsblöcke',
                'Messbare Ergebnisse'
            ],
            'stats' => [
                ['value' => '300%', 'label' => 'Mehr Produktivität'],
                ['value' => '2.5h', 'label' => 'Zeit gespart täglich'],
                ['value' => '95%', 'label' => 'Zufriedenheit']
            ]
        ],
        'cost-reduction' => [
            'title' => 'Reduziere deine Kosten um bis zu 60%',
            'subtitle' => 'Optimiere deine Ausgaben mit intelligenten Lösungen. Spare Geld ohne Qualitätsverlust und investiere in dein Wachstum.',
            'ctaText' => 'Kosten senken',
            'ctaLink' => '#costs',
            'secondaryCtaText' => 'Kostenanalyse',
            'secondaryCtaLink' => '#analysis',
            'image' => ImageLibrary::$heroImages['finance']['growth_chart'],
            'benefits' => [
                'Automatische Kostenoptimierung',
                'Transparente Ausgabenübersicht',
                'Intelligente Budgetplanung',
                'ROI-Maximierung'
            ],
            'stats' => [
                ['value' => '60%', 'label' => 'Kosteneinsparung'],
                ['value' => '€2.5M', 'label' => 'Bereits gespart'],
                ['value' => '24/7', 'label' => 'Monitoring']
            ]
        ],
        'time-saving' => [
            'title' => 'Spare 20+ Stunden pro Woche',
            'subtitle' => 'Automatisiere wiederkehrende Aufgaben und konzentriere dich auf strategische Entscheidungen. Zeit ist dein wertvollstes Gut.',
            'ctaText' => 'Zeit sparen',
            'ctaLink' => '#time',
            'secondaryCtaText' => 'Zeitanalyse',
            'secondaryCtaLink' => '#analysis',
            'image' => ImageLibrary::$heroImages['business']['office_modern'],
            'benefits' => [
                'Automatisierte Prozesse',
                'Intelligente Terminplanung',
                'Effiziente Workflows',
                'Fokus auf Kernaufgaben'
            ],
            'stats' => [
                ['value' => '20h', 'label' => 'Gespart pro Woche'],
                ['value' => '85%', 'label' => 'Weniger Routine'],
                ['value' => '10x', 'label' => 'Schneller']
            ]
        ],
        'growth-secret' => [
            'title' => 'Das Geheimnis für 400% Wachstum',
            'subtitle' => 'Entdecke die Strategien, die erfolgreiche Unternehmen verwenden. Skaliere dein Business systematisch und nachhaltig.',
            'ctaText' => 'Wachstum starten',
            'ctaLink' => '#growth',
            'secondaryCtaText' => 'Case Studies',
            'secondaryCtaLink' => '#cases',
            'image' => ImageLibrary::$heroImages['business']['growth'],
            'benefits' => [
                'Bewährte Wachstumsstrategien',
                'Skalierbare Systeme',
                'Datengetriebene Entscheidungen',
                'Kontinuierliche Optimierung'
            ],
            'stats' => [
                ['value' => '400%', 'label' => 'Durchschnittswachstum'],
                ['value' => '500+', 'label' => 'Erfolgreiche Kunden'],
                ['value' => '2.3x', 'label' => 'ROI Steigerung']
            ]
        ],
        'smart-way' => [
            'title' => 'Der smarte Weg zu mehr Erfolg',
            'subtitle' => 'Nutze KI und Automatisierung für deinen Erfolg. Arbeite intelligenter, nicht härter, und erreiche deine Ziele schneller.',
            'ctaText' => 'Smart starten',
            'ctaLink' => '#smart',
            'secondaryCtaText' => 'Demo ansehen',
            'secondaryCtaLink' => '#demo',
            'image' => ImageLibrary::$heroImages['technology']['ai_dashboard'],
            'benefits' => [
                'KI-gestützte Entscheidungen',
                'Automatisierte Optimierung',
                'Predictive Analytics',
                'Smart Workflows'
            ],
            'stats' => [
                ['value' => '10x', 'label' => 'Intelligenter'],
                ['value' => '99.9%', 'label' => 'Verfügbarkeit'],
                ['value' => '50ms', 'label' => 'Response Zeit']
            ]
        ],
        'potential' => [
            'title' => 'Entfessle dein volles Potenzial',
            'subtitle' => 'Durchbreche deine Grenzen und erreiche neue Höhen. Mit den richtigen Tools und Strategien ist alles möglich.',
            'ctaText' => 'Potenzial freisetzen',
            'ctaLink' => '#potential',
            'secondaryCtaText' => 'Potenzial-Check',
            'secondaryCtaLink' => '#check',
            'image' => ImageLibrary::$heroImages['people']['expert_male'],
            'benefits' => [
                'Personalisierte Strategien',
                'Individuelle Betreuung',
                'Kontinuierliche Weiterentwicklung',
                'Messbare Fortschritte'
            ],
            'stats' => [
                ['value' => '250%', 'label' => 'Performance Steigerung'],
                ['value' => '1000+', 'label' => 'Erfolgsgeschichten'],
                ['value' => '24/7', 'label' => 'Support']
            ]
        ],
        'tools' => [
            'title' => 'Die Tools, die Profis verwenden',
            'subtitle' => 'Arbeite mit denselben Tools wie die erfolgreichsten Unternehmen. Professionelle Lösungen für professionelle Ergebnisse.',
            'ctaText' => 'Tools entdecken',
            'ctaLink' => '#tools',
            'secondaryCtaText' => 'Tool-Vergleich',
            'secondaryCtaLink' => '#compare',
            'image' => ImageLibrary::$heroImages['technology']['laptop_coding'],
            'benefits' => [
                'Professionelle Tool-Suite',
                'Nahtlose Integration',
                'Enterprise-Sicherheit',
                'Skalierbare Architektur'
            ],
            'stats' => [
                ['value' => '50+', 'label' => 'Integrierte Tools'],
                ['value' => '99.99%', 'label' => 'Uptime'],
                ['value' => '1M+', 'label' => 'Nutzer weltweit']
            ]
        ],
        'competitive' => [
            'title' => 'Verschaffe dir einen Wettbewerbsvorteil',
            'subtitle' => 'Bleibe der Konkurrenz einen Schritt voraus. Mit innovativen Lösungen und strategischen Vorteilen dominierst du deinen Markt.',
            'ctaText' => 'Vorteil sichern',
            'ctaLink' => '#advantage',
            'secondaryCtaText' => 'Marktanalyse',
            'secondaryCtaLink' => '#market',
            'image' => ImageLibrary::$heroImages['business']['success'],
            'benefits' => [
                'Innovative Technologien',
                'Strategische Marktvorteile',
                'Erste Mover Advantage',
                'Kontinuierliche Innovation'
            ],
            'stats' => [
                ['value' => '3x', 'label' => 'Schneller als Konkurrenz'],
                ['value' => '150%', 'label' => 'Marktanteil Wachstum'],
                ['value' => '#1', 'label' => 'In der Branche']
            ]
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['productivity'], $options);
    
    include 'templates/hero-benefit-focused.php';
}
?>
