<?php
/**
 * Custom Layout Pricing Component
 * Individuelle Pricing-Layouts
 */

function CustomLayoutPricing($variant = 'starts-at-pricing', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'starts-at-pricing' => [
            'headline' => 'Fixed plans',
            'subheadline' => 'Unsere Preise auf einen Blick',
            'description' => 'Egal, ob du Produkte oder Dienstleistungen anbietest, es ist sehr empfehlenswert, mehrere Preispläne zu haben. Das kann dir helfen, deinen durchschnittlichen Bestellwert zu steigern und deine Konversionsrate zu verbessern.',
            'plan' => [
                'name' => 'Basis plan',
                'price' => '500',
                'currency' => '€',
                'description' => 'Perfekt für alle, die gerade erst anfangen, neue Möglichkeiten zu erkunden.',
                'features' => [
                    'Maßgeschneiderte Webseite',
                    'Persönliche Domain',
                    'Monatlicher Leistungsbericht',
                    'Keine Einrichtungsgebühr'
                ],
                'ctaText' => 'Basis wählen',
                'startsAt' => true
            ],
            'secondaryPlan' => [
                'name' => 'Pro plan',
                'price' => '1000',
                'currency' => '€',
                'description' => 'Das ideale Angebot für dich, wenn das Geschäft schnell skalieren muss.',
                'features' => [
                    'Alle Basis Features',
                    'Priority Support',
                    'Erweiterte Analytics',
                    'Custom Integrations'
                ],
                'ctaText' => 'Pro wählen',
                'startsAt' => true
            ],
            'customSolution' => [
                'title' => 'Auf der Suche nach einer individuellen Lösung?',
                'description' => 'Wir entwickeln eine maßgeschneiderte Lösung für dich.',
                'ctaText' => 'Jetzt Kontakt aufnehmen!'
            ],
            'bgClass' => 'bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900 dark:to-emerald-800'
        ],
        'custom-solution' => [
            'headline' => 'Individuelle Lösungen',
            'description' => 'Jedes Unternehmen ist einzigartig. Deshalb entwickeln wir maßgeschneiderte Lösungen.',
            'customSolution' => [
                'title' => 'Maßgeschneiderte Entwicklung',
                'description' => 'Wir entwickeln die perfekte Lösung für Ihre spezifischen Anforderungen. Von der ersten Idee bis zur finalen Umsetzung begleiten wir Sie professionell.',
                'features' => [
                    'Individuelle Beratung und Konzeption',
                    'Maßgeschneiderte Entwicklung',
                    'Persönlicher Ansprechpartner',
                    'Flexible Anpassungen während der Entwicklung',
                    'Umfassende Dokumentation',
                    'Langfristige Wartung und Support'
                ],
                'ctaText' => 'Kostenlose Beratung vereinbaren',
                'contactInfo' => 'Rufen Sie uns an oder schreiben Sie uns eine E-Mail für ein unverbindliches Gespräch.'
            ],
            'bgClass' => 'bg-white dark:bg-slate-900'
        ],
        'single-price-detailed' => [
            'headline' => 'FESTPREIS',
            'description' => 'Transparente Preisgestaltung ohne versteckte Kosten.',
            'plan' => [
                'price' => '2499',
                'currency' => '€',
                'period' => 'einmalig',
                'features' => [
                    'Komplette Website-Entwicklung',
                    'Responsive Design für alle Geräte',
                    'Content Management System',
                    'SEO-Grundoptimierung',
                    'Google Analytics Integration',
                    'Kontaktformular mit Spam-Schutz',
                    'SSL-Zertifikat Setup',
                    '3 Monate kostenloser Support',
                    'Einführung und Schulung',
                    'Backup-System'
                ],
                'ctaText' => 'Jetzt beauftragen',
                'guarantee' => '100% Zufriedenheitsgarantie'
            ],
            'bgClass' => 'bg-slate-50 dark:bg-slate-800'
        ],
        'pro-mode' => [
            'headline' => 'Pro-Mode',
            'description' => 'Für Profis, die das Maximum aus ihren Projekten herausholen möchten.',
            'plan' => [
                'price' => '199',
                'currency' => '€',
                'period' => 'Monat',
                'userTrust' => 'Über 2.500 zufriedene Nutzer',
                'features' => [
                    'Unbegrenzte Projekte',
                    'Premium Templates',
                    'Advanced Analytics',
                    'White-Label Option',
                    'API-Zugang',
                    'Priority Support',
                    'Custom Integrations',
                    'Team Collaboration'
                ],
                'ctaText' => 'Pro-Mode aktivieren'
            ],
            'bgClass' => 'bg-gradient-to-br from-purple-50 to-violet-100 dark:from-purple-900 dark:to-violet-800'
        ],
        'professional-rating' => [
            'headline' => 'Professional',
            'description' => 'Der professionelle Plan für anspruchsvolle Projekte.',
            'plan' => [
                'price' => '150',
                'currency' => '€',
                'period' => 'Monat',
                'rating' => [
                    'score' => '4.8',
                    'reviews' => '1450'
                ],
                'features' => [
                    'Arbeite unkompliziert an vielen Projekten',
                    'Kollaboration mit deinem gesamten Team',
                    'Setze individuelle Freigaben für Mitarbeiter',
                    'Erhalte wöchentlich ein automatisches Reporting',
                    'Nutze erweiterte Analyse-Tools',
                    'Profitiere von Priority Support'
                ],
                'ctaText' => 'Professional wählen'
            ],
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800'
        ],
        'comprehensive-single' => [
            'headline' => 'Alles-in-einem Paket',
            'description' => 'Eine umfassende Lösung für alle Ihre Bedürfnisse.',
            'plan' => [
                'name' => 'Complete Solution',
                'price' => '499',
                'currency' => '€',
                'period' => 'Monat',
                'features' => [
                    'Vollständige Website-Verwaltung',
                    'Content-Erstellung und -Pflege',
                    'SEO-Optimierung und -Monitoring',
                    'Social Media Integration',
                    'E-Mail Marketing Setup',
                    'Performance-Überwachung',
                    'Security-Updates',
                    'Monatliche Reports',
                    'Dedicated Account Manager',
                    '24/7 Support'
                ],
                'ctaText' => 'Complete Solution starten',
                'setupFee' => '299',
                'guarantee' => '30 Tage Geld-zurück-Garantie'
            ],
            'bgClass' => 'bg-white dark:bg-slate-900'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['starts-at-pricing'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $subheadline = $options['subheadline'] ?? ($content['subheadline'] ?? null);
    $description = $options['description'] ?? $content['description'];
    $plan = $options['plan'] ?? ($content['plan'] ?? null);
    $secondaryPlan = $options['secondaryPlan'] ?? ($content['secondaryPlan'] ?? null);
    $customSolution = $options['customSolution'] ?? ($content['customSolution'] ?? null);
    $bgClass = $content['bgClass'];
    
    ob_start();
    include __DIR__ . '/templates/custom-layout-pricing.php';
    return ob_get_clean();
}
?>
