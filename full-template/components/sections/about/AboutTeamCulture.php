<?php
/**
 * About Team Culture Component
 * Fokus auf Teamkultur, Arbeitsplatz-Benefits und Unternehmensstatistiken
 */

function AboutTeamCulture($variant = 'team-culture', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'team-culture' => [
            'headline' => 'Eine großartige Teamkultur, in der sich jeder geschätzt fühlt und gerne arbeitet',
            'description' => 'Wir aktualisieren unsere Abschnitte, Vorlagen und Elemente ständig, um mit aktuellen Webdesign-Trends Schritt zu halten. Gerade jetzt bedeutet das abgerundete Ecken, großzügige Layouts, Verläufe und einzigartige Elemente.',
            'bgClass' => 'bg-gradient-to-br from-purple-50 to-pink-100 dark:from-purple-900 dark:to-pink-800',
            'benefits' => [
                ['title' => 'Flexibles Arbeiten', 'description' => 'Remote oder im Büro - du entscheidest', 'icon' => 'home'],
                ['title' => 'Team Events', 'description' => 'Regelmäßige Teambuilding-Aktivitäten', 'icon' => 'heart'],
                ['title' => 'Weiterbildung', 'description' => 'Persönliche und berufliche Entwicklung', 'icon' => 'award']
            ]
        ],
        'work-benefits' => [
            'headline' => 'Vorteile der Arbeit für unser Unternehmen',
            'description' => 'Wir bieten nicht nur einen Job, sondern eine Karriere mit Sinn und Zweck. Hier sind einige der Vorteile, die unsere Mitarbeiter schätzen.',
            'bgClass' => 'bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900 dark:to-emerald-800',
            'benefits' => [
                ['title' => 'Flexible Arbeitszeiten', 'description' => '30 Stunden Woche bei vollem Gehalt', 'icon' => 'clock'],
                ['title' => 'Gesundheitsvorsorge', 'description' => 'Vollständige Krankenversicherung', 'icon' => 'heart'],
                ['title' => 'Weiterbildungsbudget', 'description' => '2.000€ jährlich für Kurse und Konferenzen', 'icon' => 'award'],
                ['title' => 'Remote Work', 'description' => 'Arbeite von überall auf der Welt', 'icon' => 'home']
            ]
        ],
        'company-stats' => [
            'headline' => 'Unsere Erfolgsgeschichte in Zahlen',
            'description' => 'Diese Statistiken zeigen, wie wir als Team gewachsen sind und was wir gemeinsam erreicht haben.',
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800',
            'stats' => [
                ['number' => '150+', 'label' => 'Team-Mitglieder weltweit'],
                ['number' => '12', 'label' => 'Büros in 8 Ländern'],
                ['number' => '98%', 'label' => 'Mitarbeiterzufriedenheit'],
                ['number' => '5000+', 'label' => 'Erfolgreich abgeschlossene Projekte']
            ]
        ],
        'office-benefits' => [
            'headline' => 'Unser Büro - Dein zweites Zuhause',
            'description' => 'Moderne Arbeitsplätze, die Kreativität und Produktivität fördern. Hier macht Arbeiten Spaß!',
            'bgClass' => 'bg-gradient-to-br from-orange-50 to-amber-100 dark:from-orange-900 dark:to-amber-800',
            'benefits' => [
                ['title' => 'Moderne Ausstattung', 'description' => 'Neueste Technik und ergonomische Arbeitsplätze', 'icon' => 'briefcase'],
                ['title' => 'Kostenlose Verpflegung', 'description' => 'Kaffee, Snacks und frisches Obst den ganzen Tag', 'icon' => 'coffee'],
                ['title' => 'Entspannungszonen', 'description' => 'Ruhebereiche und Gaming-Ecken für Pausen', 'icon' => 'heart'],
                ['title' => 'Zentrale Lage', 'description' => 'Perfekte Anbindung an öffentliche Verkehrsmittel', 'icon' => 'globe']
            ]
        ],
        'global-team' => [
            'headline' => 'Ein globales Team, eine gemeinsame Vision',
            'description' => 'Wir arbeiten über Kontinente hinweg zusammen und bringen verschiedene Kulturen und Perspektiven in unsere Projekte ein.',
            'bgClass' => 'bg-gradient-to-br from-cyan-50 to-teal-100 dark:from-cyan-900 dark:to-teal-800',
            'teamInfo' => [
                'size' => '150+ Mitarbeiter',
                'offices' => '12 Büros weltweit',
                'countries' => '8 Länder'
            ],
            'benefits' => [
                ['title' => 'Kulturelle Vielfalt', 'description' => 'Team aus über 20 verschiedenen Ländern', 'icon' => 'globe'],
                ['title' => 'Flexible Zeitzonen', 'description' => '24/7 Support durch globale Präsenz', 'icon' => 'clock'],
                ['title' => 'Internationale Projekte', 'description' => 'Arbeite an Projekten für globale Kunden', 'icon' => 'briefcase']
            ]
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['team-culture'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $subheadline = $options['subheadline'] ?? ($content['subheadline'] ?? null);
    $description = $options['description'] ?? $content['description'];
    $ctaText = $options['ctaText'] ?? ($content['ctaText'] ?? 'Mehr erfahren');
    $bgClass = $content['bgClass'];
    $benefits = $options['benefits'] ?? ($content['benefits'] ?? []);
    $stats = $options['stats'] ?? ($content['stats'] ?? []);
    $teamInfo = $options['teamInfo'] ?? ($content['teamInfo'] ?? null);
    
    // Icon-Mapping
    $iconMap = [
        'coffee' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'clock' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'home' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>',
        'heart' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>',
        'award' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>',
        'briefcase' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6"></path></svg>',
        'globe' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'users' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>'
    ];
    
    ob_start();
    include __DIR__ . '/templates/about-team-culture.php';
    return ob_get_clean();
}
?>
