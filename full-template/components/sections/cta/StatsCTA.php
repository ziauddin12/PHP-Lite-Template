<?php
/**
 * Stats CTA Component
 * CTA mit Statistiken und Erfolgsmetriken
 */

function StatsCTA($variant = 'business-stats', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'business-stats' => [
            'headline' => 'Unsere Erfolge sprechen für sich',
            'description' => 'Zahlen lügen nicht. Seit über einem Jahrzehnt helfen wir Unternehmen dabei, ihre Ziele zu erreichen.',
            'stats' => [
                ['number' => '12+', 'label' => 'Jahre Erfahrung', 'icon' => 'calendar'],
                ['number' => '5.200', 'label' => 'Erfolgreiche Projekte', 'icon' => 'target'],
                ['number' => '1.000+', 'label' => 'Zufriedene Kunden', 'icon' => 'users'],
                ['number' => '98%', 'label' => 'Weiterempfehlungsrate', 'icon' => 'star']
            ],
            'ctaText' => 'Jetzt starten',
            'secondaryCtaText' => 'Referenzen ansehen',
            'bgClass' => 'bg-gradient-to-br from-blue-600 to-indigo-600',
            'textColor' => 'text-white'
        ],
        'service-stats' => [
            'headline' => 'Messbare Ergebnisse für Ihren Erfolg',
            'description' => 'Unsere Dienstleistungen liefern nachweisbare Resultate.',
            'stats' => [
                ['number' => '300%', 'label' => 'Durchschnittliches Wachstum', 'icon' => 'trending'],
                ['number' => '24h', 'label' => 'Antwortzeit Support', 'icon' => 'clock'],
                ['number' => '99.9%', 'label' => 'Uptime Garantie', 'icon' => 'shield'],
                ['number' => '50+', 'label' => 'Branchen betreut', 'icon' => 'briefcase']
            ],
            'ctaText' => 'Service anfragen',
            'secondaryCtaText' => 'Case Studies',
            'testimonial' => '"Die beste Entscheidung für unser Unternehmen!" - CEO, TechCorp',
            'bgClass' => 'bg-gradient-to-br from-green-600 to-emerald-600',
            'textColor' => 'text-white'
        ],
        'achievement-stats' => [
            'headline' => 'Auszeichnungen & Erfolge',
            'description' => 'Unsere Leistung wird von der Branche anerkannt.',
            'stats' => [
                ['number' => '15', 'label' => 'Branchen-Awards', 'icon' => 'award'],
                ['number' => '10M+', 'label' => 'Generierte Leads', 'icon' => 'trending'],
                ['number' => '95%', 'label' => 'Projekterfolgsrate', 'icon' => 'check'],
                ['number' => '4.9/5', 'label' => 'Kundenbewertung', 'icon' => 'star']
            ],
            'ctaText' => 'Erfolg starten',
            'achievements' => [
                'Top Digital Agency 2023',
                'Best Customer Service Award',
                'Innovation Leader 2023'
            ],
            'bgClass' => 'bg-gradient-to-br from-purple-600 to-violet-600',
            'textColor' => 'text-white'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['business-stats'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $description = $options['description'] ?? $content['description'];
    $stats = $options['stats'] ?? $content['stats'];
    $ctaText = $options['ctaText'] ?? $content['ctaText'];
    $secondaryCtaText = $options['secondaryCtaText'] ?? ($content['secondaryCtaText'] ?? null);
    $testimonial = $options['testimonial'] ?? ($content['testimonial'] ?? null);
    $achievements = $options['achievements'] ?? ($content['achievements'] ?? []);
    $bgClass = $content['bgClass'];
    $textColor = $content['textColor'];
    
    // Icon-Mapping
    $iconMap = [
        'calendar' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>',
        'target' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'users' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>',
        'star' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>',
        'trending' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>',
        'clock' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'shield' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>',
        'briefcase' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6"></path></svg>',
        'award' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>',
        'check' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>'
    ];
    
    ob_start();
    include __DIR__ . '/templates/stats-cta.php';
    return ob_get_clean();
}
?>
