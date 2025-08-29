<?php
require_once __DIR__ . '/../../../../lib/images.php';

/**
 * About Founder Story - 8 Varianten
 * Gründer- und Unternehmensgeschichten
 */

function AboutFounderStory($variant = 'founder-journey', $options = []) {
    $variants = [
        'founder-journey' => [
            'title' => 'Die Geschichte hinter Dyad',
            'subtitle' => 'Wie aus einer Vision ein Unternehmen wurde, das heute Tausende von Kunden weltweit vertraut.',
            'founder' => [
                'name' => 'Dr. Sarah Weber',
                'title' => 'Gründerin & CEO',
                'image' => ImageLibrary::$aboutImages['founders']['female_ceo'],
                'story' => 'Alles begann 2014 in einer kleinen Garage in München. Als Informatikerin mit einer Leidenschaft für elegante Lösungen war ich frustriert von der Komplexität bestehender Systeme. Ich träumte von Software, die so intuitiv ist wie das Atmen.',
                'journey' => [
                    [
                        'year' => '2014',
                        'title' => 'Der Anfang',
                        'description' => 'Erste Prototypen in der Garage entwickelt. 18-Stunden-Tage, unzählige Kaffees und der unerschütterliche Glaube an die Vision.'
                    ],
                    [
                        'year' => '2016',
                        'title' => 'Erster Durchbruch',
                        'description' => 'Der erste Großkunde vertraut uns. 50.000€ Umsatz im ersten Jahr - ein Meilenstein, der alles veränderte.'
                    ],
                    [
                        'year' => '2018',
                        'title' => 'Team-Aufbau',
                        'description' => 'Aus einem Ein-Frau-Unternehmen wird ein 15-köpfiges Team. Neue Büros, neue Herausforderungen, neue Erfolge.'
                    ],
                    [
                        'year' => '2020',
                        'title' => 'Internationale Expansion',
                        'description' => 'Erste Kunden in den USA und Asien. Die Vision wird global - über 1000 Kunden vertrauen uns bereits.'
                    ],
                    [
                        'year' => '2023',
                        'title' => 'Heute',
                        'description' => 'Über 10.000 zufriedene Kunden, 50+ Mitarbeiter und die Mission, Technologie menschlicher zu machen.'
                    ]
                ],
                'quote' => 'Erfolg ist nicht das Ziel - es ist das Nebenprodukt davon, anderen dabei zu helfen, erfolgreich zu sein.',
                'values' => [
                    'Innovation durch Einfachheit',
                    'Kundenzentrierung in allem',
                    'Nachhaltiges Wachstum',
                    'Authentische Partnerschaften'
                ]
            ],
            'stats' => [
                ['number' => '10.000+', 'label' => 'Zufriedene Kunden'],
                ['number' => '50+', 'label' => 'Teammitglieder'],
                ['number' => '25+', 'label' => 'Länder weltweit'],
                ['number' => '99%', 'label' => 'Kundenzufriedenheit']
            ],
            'style' => 'narrative'
        ],
        'company-origin' => [
            'title' => 'Unsere Entstehungsgeschichte',
            'subtitle' => 'Von der ersten Idee bis zum erfolgreichen Unternehmen - eine Reise voller Herausforderungen und Erfolge.',
            'origin' => [
                'problem' => 'Das Problem, das alles begann',
                'problemText' => '2014 standen Unternehmen vor einem Dilemma: Entweder komplexe, teure Enterprise-Lösungen oder einfache Tools ohne Power. Es gab nichts dazwischen.',
                'solution' => 'Unsere Lösung',
                'solutionText' => 'Wir entwickelten eine Plattform, die Enterprise-Funktionalität mit der Einfachheit eines Smartphones verbindet. Powerful, aber nicht kompliziert.',
                'vision' => 'Die Vision',
                'visionText' => 'Technologie, die sich an Menschen anpasst - nicht umgekehrt. Jedes Unternehmen sollte Zugang zu erstklassigen Tools haben.',
                'mission' => 'Unsere Mission heute',
                'missionText' => 'Wir demokratisieren Enterprise-Software. Vom Startup bis zum Konzern - jeder verdient Weltklasse-Tools.'
            ],
            'timeline' => [
                ['phase' => 'Ideenfindung', 'duration' => '6 Monate', 'description' => 'Marktforschung und erste Prototypen'],
                ['phase' => 'MVP Development', 'duration' => '12 Monate', 'description' => 'Erstes funktionsfähiges Produkt'],
                ['phase' => 'Beta Testing', 'duration' => '6 Monate', 'description' => '50 Testkunden, unzähliges Feedback'],
                ['phase' => 'Market Launch', 'duration' => '3 Monate', 'description' => 'Öffentlicher Launch und erste Kunden'],
                ['phase' => 'Scale & Growth', 'duration' => 'Ongoing', 'description' => 'Kontinuierliche Verbesserung und Expansion']
            ],
            'achievements' => [
                'Über 10.000 aktive Nutzer in 25+ Ländern',
                'ISO 27001 Zertifizierung für höchste Sicherheit',
                '99.9% Uptime über die letzten 3 Jahre',
                'Auszeichnung als "Best B2B Software 2023"',
                '50+ Integrationen mit führenden Plattformen'
            ],
            'style' => 'timeline'
        ],
        'mission-driven' => [
            'title' => 'Mehr als nur ein Unternehmen',
            'subtitle' => 'Wir sind eine Mission. Eine Bewegung. Ein Versprechen an eine bessere digitale Zukunft.',
            'mission' => [
                'core' => 'Unsere Kernmission',
                'coreText' => 'Wir glauben, dass Technologie ein Werkzeug für menschlichen Fortschritt sein sollte - nicht eine Barriere. Deshalb schaffen wir Lösungen, die Menschen ermächtigen, nicht überfordern.',
                'impact' => 'Unser Impact',
                'impactText' => 'Jeden Tag helfen wir Tausenden von Unternehmen dabei, effizienter zu arbeiten, bessere Entscheidungen zu treffen und mehr Zeit für das zu haben, was wirklich zählt.',
                'future' => 'Unsere Zukunftsvision',
                'futureText' => 'Eine Welt, in der jeder Zugang zu erstklassiger Technologie hat. Wo Innovation demokratisiert ist und Größe kein Vorteil mehr darstellt.'
            ],
            'principles' => [
                [
                    'title' => 'Menschen zuerst',
                    'description' => 'Technologie sollte Menschen dienen, nicht beherrschen. User Experience steht bei uns an erster Stelle.',
                    'icon' => 'users'
                ],
                [
                    'title' => 'Transparenz',
                    'description' => 'Offene Kommunikation, faire Preise, ehrliches Feedback. Wir verstecken nichts.',
                    'icon' => 'eye'
                ],
                [
                    'title' => 'Kontinuierliche Innovation',
                    'description' => 'Stillstand ist Rückschritt. Wir hinterfragen täglich unsere Annahmen und verbessern kontinuierlich.',
                    'icon' => 'lightbulb'
                ],
                [
                    'title' => 'Nachhaltigkeit',
                    'description' => 'Wir denken langfristig - für unser Unternehmen, unsere Kunden und unseren Planeten.',
                    'icon' => 'leaf'
                ]
            ],
            'social_impact' => [
                '1% unseres Umsatzes geht an Bildungsprojekte',
                'CO2-neutrales Hosting seit 2020',
                'Kostenlose Lizenzen für gemeinnützige Organisationen',
                'Open-Source Beiträge zur Developer-Community'
            ],
            'style' => 'values'
        ],
        'team-story' => [
            'title' => 'Die Menschen hinter Dyad',
            'subtitle' => 'Lernen Sie die Gesichter kennen, die täglich daran arbeiten, Ihre digitalen Träume Realität werden zu lassen.',
            'team_story' => 'Was als Ein-Person-Startup begann, ist heute ein diverses Team von 50+ Experten aus 15 Ländern. Jeder bringt einzigartige Perspektiven und Fähigkeiten mit.',
            'culture' => [
                'title' => 'Unsere Unternehmenskultur',
                'values' => [
                    'Remote-first, aber menschlich verbunden',
                    'Fehler sind Lernmöglichkeiten, nicht Strafen',
                    'Work-Life-Balance ist nicht verhandelbar',
                    'Jede Stimme zählt, unabhängig von Hierarchie'
                ]
            ],
            'diversity' => [
                'title' => 'Vielfalt als Stärke',
                'stats' => [
                    '40% Frauen in Führungspositionen',
                    '15 verschiedene Nationalitäten',
                    '8 gesprochene Sprachen im Team',
                    '25% des Teams arbeitet remote'
                ]
            ],
            'growth' => [
                'title' => 'Wachstum und Entwicklung',
                'description' => 'Wir investieren 10% unserer Arbeitszeit in Lernen und Entwicklung. Jeder Mitarbeiter hat ein jährliches Budget für Weiterbildung.',
                'programs' => [
                    'Mentorship-Programme',
                    'Konferenz-Teilnahmen',
                    'Interne Wissenssessions',
                    'Sabbatical-Möglichkeiten'
                ]
            ],
            'style' => 'team-focused'
        ],
        'innovation-story' => [
            'title' => 'Innovation in unserer DNA',
            'subtitle' => 'Wie wir durch kontinuierliche Innovation die Grenzen des Möglichen verschieben.',
            'innovation' => [
                'philosophy' => 'Unsere Innovationsphilosophie',
                'philosophyText' => 'Innovation entsteht nicht durch Zufall. Sie ist das Ergebnis von Neugier, Experimentierfreude und der Bereitschaft, auch mal zu scheitern.',
                'process' => 'Unser Innovationsprozess',
                'processSteps' => [
                    'Kundenprobleme identifizieren',
                    'Hypothesen entwickeln',
                    'Schnelle Prototypen bauen',
                    'Mit echten Nutzern testen',
                    'Lernen und iterieren'
                ]
            ],
            'breakthroughs' => [
                [
                    'year' => '2015',
                    'innovation' => 'One-Click Integration',
                    'impact' => 'Reduzierte Setup-Zeit von Tagen auf Minuten'
                ],
                [
                    'year' => '2017',
                    'innovation' => 'AI-powered Insights',
                    'impact' => 'Automatische Datenanalyse ohne Expertenwissen'
                ],
                [
                    'year' => '2019',
                    'innovation' => 'Collaborative Workflows',
                    'impact' => 'Teams arbeiten 40% effizienter zusammen'
                ],
                [
                    'year' => '2021',
                    'innovation' => 'Zero-Code Automation',
                    'impact' => 'Jeder kann komplexe Prozesse automatisieren'
                ],
                [
                    'year' => '2023',
                    'innovation' => 'Predictive Analytics',
                    'impact' => 'Vorhersagen mit 95%+ Genauigkeit'
                ]
            ],
            'future_innovations' => [
                'AI-native User Interfaces',
                'Quantum-resistant Security',
                'Sustainable Computing',
                'Augmented Collaboration'
            ],
            'style' => 'innovation'
        ],
        'customer-centric' => [
            'title' => 'Kunden im Mittelpunkt',
            'subtitle' => 'Jede Entscheidung, jede Funktion, jede Innovation - alles dreht sich um Sie, unsere Kunden.',
            'customer_focus' => [
                'philosophy' => 'Unsere Kunden-Philosophie',
                'philosophyText' => 'Wir existieren nur, weil Sie uns vertrauen. Deshalb steht Ihr Erfolg im Zentrum alles dessen, was wir tun.',
                'approach' => 'Unser Ansatz',
                'approachText' => 'Wir hören zu. Wir verstehen. Wir handeln. Jedes Feedback wird ernst genommen und fließt in unsere Produktentwicklung ein.'
            ],
            'customer_success' => [
                [
                    'metric' => '99.2%',
                    'label' => 'Kundenzufriedenheit',
                    'description' => 'Basierend auf über 5.000 Bewertungen'
                ],
                [
                    'metric' => '< 2h',
                    'label' => 'Durchschnittliche Response-Zeit',
                    'description' => 'Unser Support-Team antwortet schnell'
                ],
                [
                    'metric' => '95%',
                    'label' => 'Customer Retention Rate',
                    'description' => 'Kunden bleiben langfristig bei uns'
                ],
                [
                    'metric' => '4.9/5',
                    'label' => 'Durchschnittsbewertung',
                    'description' => 'Auf allen Bewertungsplattformen'
                ]
            ],
            'testimonials' => [
                [
                    'text' => 'Dyad hat unsere Art zu arbeiten revolutioniert. Was früher Stunden dauerte, erledigen wir jetzt in Minuten.',
                    'author' => 'Maria Gonzalez, CEO TechStart',
                    'image' => ImageLibrary::$testimonialImages['professionals']['marketing_manager_female']
                ],
                [
                    'text' => 'Der beste Support, den ich je erlebt habe. Schnell, kompetent und immer freundlich.',
                    'author' => 'Thomas Weber, IT-Leiter Enterprise Corp',
                    'image' => ImageLibrary::$testimonialImages['professionals']['sales_director_male']
                ]
            ],
            'commitment' => [
                'title' => 'Unser Versprechen an Sie',
                'promises' => [
                    'Transparente Kommunikation ohne Marketingsprech',
                    'Faire Preise ohne versteckte Kosten',
                    'Kontinuierliche Verbesserung basierend auf Ihrem Feedback',
                    'Support, der wirklich hilft - nicht nur antwortet'
                ]
            ],
            'style' => 'customer'
        ],
        'global-impact' => [
            'title' => 'Unser globaler Einfluss',
            'subtitle' => 'Wie ein kleines Team aus München die Art verändert, wie Unternehmen weltweit arbeiten.',
            'global_reach' => [
                'countries' => 25,
                'customers' => 10000,
                'transactions' => '1M+',
                'uptime' => '99.9%'
            ],
            'regional_stories' => [
                [
                    'region' => 'Europa',
                    'story' => 'Über 5.000 europäische Unternehmen nutzen unsere Plattform. Von Startups in Berlin bis zu Konzernen in London.',
                    'impact' => '40% Effizienzsteigerung im Durchschnitt'
                ],
                [
                    'region' => 'Nordamerika',
                    'story' => 'Unsere US-Expansion 2020 war ein Meilenstein. Heute vertrauen uns über 3.000 amerikanische Unternehmen.',
                    'impact' => '$50M+ an Kosteneinsparungen für Kunden'
                ],
                [
                    'region' => 'Asien-Pazifik',
                    'story' => 'Der asiatische Markt bringt einzigartige Herausforderungen. Wir haben lokale Teams aufgebaut und kulturelle Unterschiede berücksichtigt.',
                    'impact' => '200% Wachstum in 2 Jahren'
                ]
            ],
            'sustainability' => [
                'title' => 'Nachhaltigkeit und Verantwortung',
                'initiatives' => [
                    'CO2-neutrale Server seit 2020',
                    '1% for the Planet Mitgliedschaft',
                    'Lokale Bildungsprogramme in allen Märkten',
                    'Open-Source Contributions'
                ]
            ],
            'future_goals' => [
                '50 Länder bis 2025',
                '100.000 aktive Nutzer',
                'Carbon-negative Operations',
                '10M$ in Bildungsinvestitionen'
            ],
            'style' => 'global'
        ],
        'behind-scenes' => [
            'title' => 'Hinter den Kulissen',
            'subtitle' => 'Ein ehrlicher Blick darauf, wie wir wirklich arbeiten, welche Herausforderungen wir meistern und was uns antreibt.',
            'daily_life' => [
                'title' => 'Ein typischer Tag bei Dyad',
                'description' => 'Kein Tag ist wie der andere, aber einige Dinge bleiben konstant: Kaffee, Kollaboration und die Leidenschaft für großartige Software.',
                'schedule' => [
                    '9:00 - Team Standup (remote & vor Ort)',
                    '9:30 - Deep Work Time (keine Meetings)',
                    '12:00 - Gemeinsames Mittagessen (wer kann)',
                    '14:00 - Kundenfeedback-Review',
                    '15:30 - Innovation Time (20% der Zeit)',
                    '17:00 - Code Review & Collaboration'
                ]
            ],
            'challenges' => [
                'title' => 'Unsere größten Herausforderungen',
                'items' => [
                    [
                        'challenge' => 'Skalierung ohne Qualitätsverlust',
                        'solution' => 'Automatisierte Tests und strenge Code-Reviews'
                    ],
                    [
                        'challenge' => 'Remote-Team-Zusammenhalt',
                        'solution' => 'Regelmäßige Retreats und virtuelle Social Events'
                    ],
                    [
                        'challenge' => 'Technische Schulden',
                        'solution' => '20% der Entwicklungszeit für Refactoring'
                    ],
                    [
                        'challenge' => 'Work-Life-Balance',
                        'solution' => 'Flexible Arbeitszeiten und Mental Health Support'
                    ]
                ]
            ],
            'office_culture' => [
                'title' => 'Unsere Bürokultur',
                'elements' => [
                    'Offene Küche mit Barista-Kaffee',
                    'Gaming-Ecke für Entspannung',
                    'Bibliothek mit Tech- und Business-Büchern',
                    'Ruheräume für Meditation oder Power-Naps',
                    'Hunde willkommen (wir haben 3 Büro-Hunde)'
                ]
            ],
            'fun_facts' => [
                'Wir haben über 2.000 Kaffees pro Monat getrunken',
                'Unser ältester Code-Commit ist von 3:47 AM',
                'Das Team spricht zusammen 12 Sprachen',
                'Wir haben 15 verschiedene Tastaturen im Büro',
                'Freitag ist "Bring your pet to work" Tag'
            ],
            'style' => 'authentic'
        ]
    ];
    
    // Merge mit übergebenen Optionen
    $data = array_merge($variants[$variant] ?? $variants['founder-journey'], $options);
    
    include 'templates/about-founder-story.php';
}
?>
