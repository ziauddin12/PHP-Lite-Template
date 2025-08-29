<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * About Company Values - 8 Varianten
 * Unternehmenswerte und -kultur
 */

function AboutCompanyValues($variant = 'core-values', $options = []) {
    $variants = [
        'core-values' => [
            'title' => 'Unsere Grundwerte',
            'subtitle' => 'Diese Werte leiten uns täglich und formen die Art, wie wir arbeiten, entscheiden und mit unseren Kunden umgehen.',
            'values' => [
                [
                    'title' => 'Kundenzentrierung',
                    'description' => 'Jede Entscheidung treffen wir mit dem Kunden im Fokus. Ihr Erfolg ist unser Erfolg.',
                    'icon' => 'users',
                    'details' => [
                        'Persönlicher Ansprechpartner für jeden Kunden',
                        '24/7 Support ohne Wartezeiten',
                        'Kontinuierliches Feedback-Management',
                        'Individuelle Lösungen statt Standard-Pakete'
                    ],
                    'image' => ImageLibrary::$aboutImages['values']['customer_focus'],
                    'color' => 'blue'
                ],
                [
                    'title' => 'Innovation durch Einfachheit',
                    'description' => 'Komplexe Probleme verdienen einfache Lösungen. Wir machen das Schwierige leicht.',
                    'icon' => 'lightbulb',
                    'details' => [
                        'User-zentriertes Design in allem was wir tun',
                        'Kontinuierliche Vereinfachung bestehender Prozesse',
                        'Cutting-edge Technologie, intuitiv bedienbar',
                        'Innovation die echten Nutzen bringt'
                    ],
                    'image' => ImageLibrary::$aboutImages['values']['innovation'],
                    'color' => 'purple'
                ],
                [
                    'title' => 'Transparenz & Ehrlichkeit',
                    'description' => 'Offene Kommunikation schafft Vertrauen. Wir verstecken nichts und kommunizieren klar.',
                    'icon' => 'eye',
                    'details' => [
                        'Keine versteckten Kosten oder Gebühren',
                        'Ehrliches Feedback auch wenn es unbequem ist',
                        'Transparente Roadmap und Entwicklungsprozesse',
                        'Offene Kommunikation über Herausforderungen'
                    ],
                    'image' => ImageLibrary::$aboutImages['values']['transparency'],
                    'color' => 'green'
                ],
                [
                    'title' => 'Exzellenz in der Ausführung',
                    'description' => 'Qualität ist nicht verhandelbar. Wir liefern nur das, womit wir selbst zufrieden wären.',
                    'icon' => 'star',
                    'details' => [
                        'Strenge Qualitätskontrollen bei jedem Schritt',
                        'Kontinuierliche Verbesserung aller Prozesse',
                        'Best-Practice Standards in der Entwicklung',
                        'Null-Toleranz für "good enough" Mentalität'
                    ],
                    'image' => ImageLibrary::$aboutImages['values']['excellence'],
                    'color' => 'orange'
                ],
                [
                    'title' => 'Nachhaltigkeit & Verantwortung',
                    'description' => 'Wir denken langfristig - für unser Unternehmen, unsere Kunden und unseren Planeten.',
                    'icon' => 'leaf',
                    'details' => [
                        'CO2-neutrale Infrastruktur seit 2020',
                        '1% des Umsatzes für Bildungsprojekte',
                        'Ethische Geschäftspraktiken ohne Kompromisse',
                        'Langfristige Partnerschaften statt Quick-Wins'
                    ],
                    'image' => ImageLibrary::$aboutImages['values']['sustainability'],
                    'color' => 'emerald'
                ],
                [
                    'title' => 'Teamwork & Respekt',
                    'description' => 'Gemeinsam sind wir stärker. Vielfalt und gegenseitiger Respekt machen uns erfolgreich.',
                    'icon' => 'heart',
                    'details' => [
                        'Diverse Teams aus 15+ Nationalitäten',
                        'Flache Hierarchien und offene Türen',
                        'Mentorship-Programme für alle Mitarbeiter',
                        'Work-Life-Balance als Non-Negotiable'
                    ],
                    'image' => ImageLibrary::$aboutImages['values']['teamwork'],
                    'color' => 'pink'
                ]
            ],
            'stats' => [
                ['number' => '99%', 'label' => 'Mitarbeiterzufriedenheit'],
                ['number' => '4.9/5', 'label' => 'Kundenbewertung'],
                ['number' => '0%', 'label' => 'Fluktuation im Führungsteam'],
                ['number' => '100%', 'label' => 'Werte-basierte Entscheidungen']
            ],
            'style' => 'comprehensive'
        ],
        'culture-focused' => [
            'title' => 'Unsere Unternehmenskultur',
            'subtitle' => 'Kultur ist nicht das, was an der Wand hängt - es ist das, was täglich gelebt wird.',
            'culture_elements' => [
                [
                    'title' => 'Remote-First, aber menschlich',
                    'description' => 'Wir arbeiten von überall, aber vergessen nie den menschlichen Faktor.',
                    'practices' => [
                        'Wöchentliche Video-Calls mit dem gesamten Team',
                        'Virtuelle Kaffeepausen und Social Events',
                        'Jährliche Team-Retreats an inspirierenden Orten',
                        'Flexible Arbeitszeiten für alle Zeitzonen'
                    ],
                    'image' => ImageLibrary::$aboutImages['culture']['remote_work']
                ],
                [
                    'title' => 'Lernen als Lifestyle',
                    'description' => 'Stillstand ist Rückschritt. Wir investieren massiv in die Weiterentwicklung.',
                    'practices' => [
                        '10% der Arbeitszeit für Lernen und Experimente',
                        'Jährliches Weiterbildungsbudget von €5.000 pro Person',
                        'Interne Tech-Talks und Wissenssessions',
                        'Sabbatical-Möglichkeiten nach 3 Jahren'
                    ],
                    'image' => ImageLibrary::$aboutImages['culture']['learning']
                ],
                [
                    'title' => 'Fehler als Lernchance',
                    'description' => 'Wer nicht scheitert, experimentiert nicht genug. Wir feiern intelligente Fehler.',
                    'practices' => [
                        'Monatliche "Failure Parties" zum Lernen aus Fehlern',
                        'Blameless Post-Mortems bei Incidents',
                        'Experimentier-Budget für verrückte Ideen',
                        'Fail-Fast Mentalität in allen Projekten'
                    ],
                    'image' => ImageLibrary::$aboutImages['culture']['experimentation']
                ],
                [
                    'title' => 'Ownership & Autonomie',
                    'description' => 'Jeder ist CEO seines Bereichs. Verantwortung und Entscheidungsfreiheit gehen Hand in Hand.',
                    'practices' => [
                        'Dezentrale Entscheidungsfindung',
                        'Budgetverantwortung auf allen Ebenen',
                        'OKRs statt Micromanagement',
                        'Entrepreneurship-Programme für Mitarbeiter'
                    ],
                    'image' => ImageLibrary::$aboutImages['culture']['autonomy']
                ]
            ],
            'testimonials' => [
                [
                    'text' => 'Hier kann ich wirklich ich selbst sein und trotzdem professionell wachsen.',
                    'author' => 'Sarah M., Senior Developer',
                    'image' => ImageLibrary::$testimonialImages['employees']['developer_female']
                ],
                [
                    'text' => 'Die Lernmöglichkeiten hier sind unbegrenzt. Jeden Tag lerne ich etwas Neues.',
                    'author' => 'Marcus L., Product Manager',
                    'image' => ImageLibrary::$testimonialImages['employees']['manager_male']
                ]
            ],
            'style' => 'culture'
        ],
        'mission-vision' => [
            'title' => 'Mission, Vision & Purpose',
            'subtitle' => 'Warum wir existieren und wohin wir gehen - unser Nordstern für alle Entscheidungen.',
            'mission' => [
                'title' => 'Unsere Mission',
                'text' => 'Wir demokratisieren erstklassige Technologie. Jedes Unternehmen, egal ob Startup oder Konzern, soll Zugang zu den besten Tools haben.',
                'details' => [
                    'Komplexe Technologie einfach zugänglich machen',
                    'Faire Preise für alle Unternehmensgrößen',
                    'Persönlicher Support ohne Warteschlangen',
                    'Innovation die echte Probleme löst'
                ]
            ],
            'vision' => [
                'title' => 'Unsere Vision',
                'text' => 'Eine Welt, in der Technologie ein Werkzeug für menschlichen Fortschritt ist - nicht eine Barriere.',
                'details' => [
                    'Technologie die Menschen ermächtigt, nicht überfordert',
                    'KI die menschliche Kreativität verstärkt',
                    'Automatisierung die Zeit für wichtige Dinge schafft',
                    'Software die sich an Menschen anpasst, nicht umgekehrt'
                ]
            ],
            'purpose' => [
                'title' => 'Unser Purpose',
                'text' => 'Wir glauben, dass großartige Software großartige Menschen hervorbringt. Unser Ziel ist es, jeden zu befähigen, sein volles Potenzial zu entfalten.',
                'details' => [
                    'Mitarbeiter die über sich hinauswachsen',
                    'Kunden die ihre Träume verwirklichen',
                    'Partner die gemeinsam Großes schaffen',
                    'Communities die von Innovation profitieren'
                ]
            ],
            'impact_metrics' => [
                ['metric' => '10.000+', 'description' => 'Unternehmen nutzen unsere Plattform'],
                ['metric' => '€50M+', 'description' => 'Kosteneinsparungen für Kunden'],
                ['metric' => '1M+', 'description' => 'Arbeitsstunden automatisiert'],
                ['metric' => '25', 'description' => 'Länder erreicht']
            ],
            'style' => 'mission-vision'
        ],
        'principles-driven' => [
            'title' => 'Unsere Führungsprinzipien',
            'subtitle' => 'Diese Prinzipien leiten unsere Entscheidungen und definieren, wie wir führen und geführt werden wollen.',
            'principles' => [
                [
                    'title' => 'Customer Obsession',
                    'description' => 'Wir beginnen mit dem Kunden und arbeiten rückwärts.',
                    'examples' => [
                        'Jeden Monat persönliche Kundengespräche führen',
                        'Features basierend auf Kundenfeedback priorisieren',
                        'Support-Tickets als Produktentwicklungs-Input nutzen'
                    ]
                ],
                [
                    'title' => 'Ownership',
                    'description' => 'Führungskräfte sind Eigentümer. Sie denken langfristig und opfern nicht langfristigen Wert für kurzfristige Ergebnisse.',
                    'examples' => [
                        'Entscheidungen treffen als wäre es das eigene Unternehmen',
                        'Verantwortung für Ergebnisse übernehmen',
                        'Nachhaltige Lösungen bevorzugen'
                    ]
                ],
                [
                    'title' => 'Invent and Simplify',
                    'description' => 'Innovation und Vereinfachung gehen Hand in Hand.',
                    'examples' => [
                        'Komplexe Prozesse hinterfragen und vereinfachen',
                        'Neue Wege finden statt bewährte Pfade kopieren',
                        'Einfache Lösungen für komplexe Probleme entwickeln'
                    ]
                ],
                [
                    'title' => 'Learn and Be Curious',
                    'description' => 'Neugier treibt uns an. Wir hören nie auf zu lernen.',
                    'examples' => [
                        'Regelmäßige Weiterbildung als Selbstverständlichkeit',
                        'Andere Branchen und Denkweisen erkunden',
                        'Feedback aktiv suchen und annehmen'
                    ]
                ],
                [
                    'title' => 'Hire and Develop the Best',
                    'description' => 'Wir erhöhen die Leistungsstandards bei jeder Einstellung.',
                    'examples' => [
                        'A-Player einstellen die andere A-Player anziehen',
                        'Mentorship als Führungsverantwortung verstehen',
                        'Diverse Teams bewusst aufbauen'
                    ]
                ],
                [
                    'title' => 'Deliver Results',
                    'description' => 'Fokus auf wichtige Inputs und Ergebnisse liefern.',
                    'examples' => [
                        'Klare Ziele setzen und konsequent verfolgen',
                        'Obstacles überwinden statt Ausreden finden',
                        'Qualität und Timing gleichermaßen im Blick behalten'
                    ]
                ]
            ],
            'style' => 'principles'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['core-values'], $options);
    
    include 'templates/about-company-values.php';
}
?>
