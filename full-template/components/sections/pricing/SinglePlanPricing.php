<?php
/**
 * Single Plan Pricing Component
 * Einzelne oder wenige Preispläne
 */

function SinglePlanPricing($variant = 'one-time-compact', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'one-time-compact' => [
            'headline' => 'Unsere Preise. Kompakt und übersichtlich.',
            'description' => 'Ein kurzer Blick auf unser Angebot:',
            'plan' => [
                'price' => '1900',
                'currency' => '€',
                'period' => 'Einmalzahlung',
                'features' => [
                    'Maßgeschneiderte Webseite',
                    'Persönliche Domain',
                    'Monatlicher Leistungsbericht',
                    'Keine Einrichtungsgebühr'
                ],
                'ctaText' => 'Jetzt bestellen',
                'guarantee' => '14 Tage Geld-Zurück-Garantie'
            ],
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800'
        ],
        'one-time-with-trust' => [
            'headline' => 'Professionelle Lösung zum Festpreis',
            'description' => 'Alles was Sie brauchen, transparent und ohne versteckte Kosten.',
            'plan' => [
                'price' => '2500',
                'currency' => '€',
                'period' => 'Einmalzahlung',
                'features' => [
                    'Vollständige Website-Entwicklung',
                    'Responsive Design für alle Geräte',
                    'SEO-Optimierung inklusive',
                    '6 Monate kostenloser Support',
                    'SSL-Zertifikat inklusive'
                ],
                'ctaText' => 'Projekt starten',
                'guarantee' => '30 Tage Geld-Zurück-Garantie'
            ],
            'showTrustBadge' => true,
            'trustLogos' => [
                'Über 500 zufriedene Kunden',
                '98% Weiterempfehlungsrate',
                'TÜV-zertifizierte Qualität'
            ],
            'bgClass' => 'bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900 dark:to-emerald-800'
        ],
        'two-plans-guarantee' => [
            'headline' => 'Wählen Sie Ihren Plan',
            'description' => 'Beide Pläne enthalten unsere Erfolgsgarantie.',
            'plan' => [
                'name' => 'Essential',
                'price' => '149',
                'currency' => '€',
                'period' => 'monatlich',
                'features' => [
                    'Bis zu 10 Projekte',
                    '50 GB Speicherplatz',
                    'E-Mail Support',
                    'Standard Templates'
                ],
                'ctaText' => 'Essential wählen',
                'guarantee' => '30 Tage Geld-zurück-Garantie'
            ],
            'secondaryPlan' => [
                'name' => 'Pro',
                'price' => '299',
                'currency' => '€',
                'period' => 'monatlich',
                'features' => [
                    'Unbegrenzte Projekte',
                    '200 GB Speicherplatz',
                    'Priority Support',
                    'Premium Templates',
                    'API-Zugang'
                ],
                'ctaText' => 'Pro wählen',
                'guarantee' => '30 Tage Geld-zurück-Garantie',
                'popular' => true
            ],
            'bgClass' => 'bg-gradient-to-br from-purple-50 to-violet-100 dark:from-purple-900 dark:to-violet-800'
        ],
        'fixed-plans' => [
            'headline' => 'Fixe Preise, maximaler Wert',
            'description' => 'Transparente Preisgestaltung ohne Überraschungen.',
            'plan' => [
                'name' => 'Starter Paket',
                'price' => '799',
                'currency' => '€',
                'period' => 'einmalig',
                'setupFee' => '99',
                'features' => [
                    'Landing Page Design',
                    'Mobile Optimierung',
                    'Basis SEO-Setup',
                    '3 Monate Support'
                ],
                'ctaText' => 'Starter wählen'
            ],
            'secondaryPlan' => [
                'name' => 'Business Paket',
                'price' => '1599',
                'currency' => '€',
                'period' => 'einmalig',
                'setupFee' => '199',
                'features' => [
                    'Komplette Website (bis 10 Seiten)',
                    'CMS Integration',
                    'Erweiterte SEO-Optimierung',
                    '6 Monate Support',
                    'Analytics Setup'
                ],
                'ctaText' => 'Business wählen',
                'popular' => true
            ],
            'bgClass' => 'bg-gradient-to-br from-orange-50 to-amber-100 dark:from-orange-900 dark:to-amber-800'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['one-time-compact'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $subheadline = $options['subheadline'] ?? ($content['subheadline'] ?? null);
    $description = $options['description'] ?? $content['description'];
    $plan = $options['plan'] ?? $content['plan'];
    $secondaryPlan = $options['secondaryPlan'] ?? ($content['secondaryPlan'] ?? null);
    $showTrustBadge = $options['showTrustBadge'] ?? ($content['showTrustBadge'] ?? false);
    $trustLogos = $options['trustLogos'] ?? ($content['trustLogos'] ?? []);
    $bgClass = $content['bgClass'];
    
    ob_start();
    include __DIR__ . '/templates/single-plan-pricing.php';
    return ob_get_clean();
}
?>
