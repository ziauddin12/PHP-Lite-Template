<?php
/**
 * Product Showcase Component
 * Service- und Produkt-Showcases mit Preisen, Features und Bewertungen
 */

function ProductShowcase($variant = 'service-consultation', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'service-consultation' => [
            'headline' => 'Dein perfekter Plan für alles, was du vorhast',
            'description' => 'Onepage ist super flexibel und passt sich genau deinen Bedürfnissen an. Wir haben viele vorgefertigte Abschnitte, damit du sofort loslegen und kreativ sein kannst.',
            'price' => ['amount' => '450', 'currency' => '€'],
            'rating' => ['score' => 4.9, 'reviewCount' => 1000],
            'features' => [
                ['title' => 'Unternehmensanalyse fokussiert auf Ihre Ziele', 'description' => 'Personalisierte Analyse', 'icon' => 'star'],
                ['title' => 'Einzelberatung mit Expertenbegleitung', 'description' => '1:1 Betreuung', 'icon' => 'users'],
                ['title' => 'Zusammenfassungsbericht mit Empfehlungen', 'description' => 'Detaillierte Empfehlungen', 'icon' => 'shield']
            ],
            'ctaButton' => ['text' => 'Jetzt buchen'],
            'secondaryButton' => ['text' => 'Bewertungen lesen'],
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800'
        ],
        'strategy-session' => [
            'badge' => 'STRATEGIE-SESSION',
            'headline' => 'Strategische Beratung für dein Business',
            'description' => 'In einer intensiven Session entwickeln wir gemeinsam die perfekte Strategie für dein Unternehmen.',
            'price' => ['amount' => '750', 'currency' => '€'],
            'rating' => ['score' => 4.8, 'reviewCount' => 850],
            'features' => [
                ['title' => 'Marktanalyse und Wettbewerbsforschung', 'description' => 'Tiefgreifende Analyse', 'icon' => 'search'],
                ['title' => 'Individuelle Strategieentwicklung', 'description' => 'Maßgeschneidert für dich', 'icon' => 'target'],
                ['title' => 'Umsetzungsplan mit Meilensteinen', 'description' => 'Klare Roadmap', 'icon' => 'map']
            ],
            'ctaButton' => ['text' => 'Session buchen'],
            'secondaryButton' => ['text' => 'Mehr Details'],
            'bgClass' => 'bg-gradient-to-br from-purple-50 to-violet-100 dark:from-purple-900 dark:to-violet-800',
            'backgroundImage' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
        ],
        'limited-offer' => [
            'badge' => '⚡ LIMITIERTES ANGEBOT',
            'headline' => 'Nur für kurze Zeit: 50% Rabatt auf alle Services',
            'description' => 'Sichere dir jetzt unsere Premium-Services zum halben Preis. Angebot gültig nur noch wenige Tage!',
            'price' => ['amount' => '299', 'currency' => '€', 'originalPrice' => '599'],
            'rating' => ['score' => 4.9, 'reviewCount' => 1200],
            'features' => [
                ['title' => 'Vollständige Website-Analyse', 'description' => 'Technische und SEO-Prüfung', 'icon' => 'check'],
                ['title' => 'Optimierungsempfehlungen', 'description' => 'Konkrete Verbesserungsvorschläge', 'icon' => 'check'],
                ['title' => '30 Tage Support inklusive', 'description' => 'Betreuung nach der Analyse', 'icon' => 'check']
            ],
            'ctaButton' => ['text' => 'Jetzt 50% sparen'],
            'secondaryButton' => ['text' => 'Angebot Details'],
            'bgClass' => 'bg-gradient-to-br from-red-50 to-orange-100 dark:from-red-900 dark:to-orange-800',
            'urgency' => true
        ],
        'business-system' => [
            'headline' => 'Stärke dein Business-System',
            'description' => 'Mit unserem bewährten System bringst du dein Unternehmen auf das nächste Level. Über 1000 zufriedene Kunden vertrauen bereits auf unsere Expertise.',
            'price' => ['amount' => '1200', 'currency' => '€'],
            'rating' => ['score' => 4.9, 'reviewCount' => 1000],
            'features' => [
                ['title' => 'Bewährtes System mit 95% Erfolgsrate', 'description' => 'Getestet und optimiert', 'icon' => 'award'],
                ['title' => 'Persönliche 1:1 Betreuung', 'description' => 'Individueller Support', 'icon' => 'user'],
                ['title' => 'Lebenslanger Zugang zu Updates', 'description' => 'Immer aktuell bleiben', 'icon' => 'refresh']
            ],
            'ctaButton' => ['text' => 'System jetzt starten'],
            'socialProof' => '1000+ zufriedene Kunden',
            'bgClass' => 'bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900 dark:to-emerald-800'
        ],
        'course-overview' => [
            'badge' => 'ONLINE-KURS',
            'headline' => 'E-Commerce Blueprint: Von 0 auf 100k€',
            'description' => 'Lerne in diesem umfassenden Kurs, wie du ein profitables E-Commerce Business aufbaust. Mit praktischen Modulen und Schritt-für-Schritt Anleitungen.',
            'price' => ['amount' => '497', 'currency' => '€'],
            'rating' => ['score' => 4.8, 'reviewCount' => 650],
            'features' => [
                ['title' => '12 Module mit über 50 Videos', 'description' => '15+ Stunden Videomaterial', 'icon' => 'play'],
                ['title' => 'Templates und Checklisten', 'description' => 'Sofort einsetzbare Vorlagen', 'icon' => 'document'],
                ['title' => 'Private Community', 'description' => 'Austausch mit anderen Teilnehmern', 'icon' => 'users']
            ],
            'ctaButton' => ['text' => 'Kurs jetzt starten'],
            'secondaryButton' => ['text' => 'Kostenlose Vorschau'],
            'guarantee' => '30-Tage Geld-zurück-Garantie',
            'bgClass' => 'bg-gradient-to-br from-yellow-50 to-orange-100 dark:from-yellow-900 dark:to-orange-800'
        ],
        'agency-service' => [
            'badge' => 'FULL-SERVICE AGENTUR',
            'headline' => 'Digitaler Erfolg für dein Unternehmen',
            'description' => 'Wir übernehmen dein komplettes Online-Marketing und sorgen für messbare Ergebnisse. Von der Strategie bis zur Umsetzung - alles aus einer Hand.',
            'price' => ['amount' => '2500', 'currency' => '€', 'period' => 'monatlich'],
            'rating' => ['score' => 4.9, 'reviewCount' => 450],
            'features' => [
                ['title' => 'SEO & Content Marketing', 'description' => 'Mehr Sichtbarkeit in Google', 'icon' => 'search'],
                ['title' => 'Social Media Management', 'description' => 'Professionelle Betreuung', 'icon' => 'share'],
                ['title' => 'Performance Marketing', 'description' => 'Google Ads & Facebook Ads', 'icon' => 'target']
            ],
            'ctaButton' => ['text' => 'Kostenlose Beratung'],
            'secondaryButton' => ['text' => 'Portfolio ansehen'],
            'benefits' => [
                'Keine Vertragslaufzeit',
                'Monatlich kündbar',
                'Transparente Reportings'
            ],
            'bgClass' => 'bg-gradient-to-br from-cyan-50 to-teal-100 dark:from-cyan-900 dark:to-teal-800'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['service-consultation'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $badge = $options['badge'] ?? ($content['badge'] ?? null);
    $headline = $options['headline'] ?? $content['headline'];
    $subheadline = $options['subheadline'] ?? ($content['subheadline'] ?? null);
    $description = $options['description'] ?? $content['description'];
    $price = $options['price'] ?? $content['price'];
    $rating = $options['rating'] ?? ($content['rating'] ?? null);
    $features = $options['features'] ?? ($content['features'] ?? []);
    $ctaButton = $options['ctaButton'] ?? $content['ctaButton'];
    $secondaryButton = $options['secondaryButton'] ?? ($content['secondaryButton'] ?? null);
    $guarantee = $options['guarantee'] ?? ($content['guarantee'] ?? null);
    $socialProof = $options['socialProof'] ?? ($content['socialProof'] ?? null);
    $benefits = $options['benefits'] ?? ($content['benefits'] ?? []);
    $urgency = $options['urgency'] ?? ($content['urgency'] ?? false);
    $backgroundImage = $options['backgroundImage'] ?? ($content['backgroundImage'] ?? null);
    $bgClass = $content['bgClass'];
    
    // Icon-Mapping
    $iconMap = [
        'star' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>',
        'users' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>',
        'shield' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>',
        'search' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>',
        'target' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>',
        'map' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>',
        'check' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>',
        'award' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>',
        'user' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>',
        'refresh' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>',
        'play' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.586a1 1 0 01.707.293L12 11l.707-.707A1 1 0 0113.414 10H15M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'document' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>',
        'share' => '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path></svg>'
    ];
    
    ob_start();
    include __DIR__ . '/templates/product-showcase.php';
    return ob_get_clean();
}
?>
