<?php
/**
 * Process Steps Benefits Component
 * Prozess-orientierte Benefits
 */

function ProcessStepsBenefits($variant = 'problem-solver', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'problem-solver' => [
            'headline' => 'Das erste Unternehmen, das ein entscheidendes Problem löst',
            'description' => 'Wir haben eine innovative Lösung für ein Problem entwickelt, das die Branche seit Jahren beschäftigt.',
            'features' => [
                'Revolutionäre Technologie, die 89% effizienter ist',
                'Erste Lösung ihrer Art auf dem Markt',
                'Bewährt durch über 1.000 erfolgreiche Implementierungen',
                'Vollständig skalierbar für Unternehmen jeder Größe',
                'Nahtlose Integration in bestehende Systeme'
            ],
            'problemSolution' => [
                'problem' => 'Herkömmliche Lösungen sind langsam, teuer und schwer zu implementieren.',
                'solution' => 'Unsere innovative Technologie löst alle diese Probleme gleichzeitig.',
                'benefits' => ['89% schneller', '60% kostengünstiger', '95% einfacher zu implementieren']
            ],
            'bgClass' => 'bg-gradient-to-br from-red-50 to-orange-100 dark:from-red-900 dark:to-orange-800',
            'textColor' => 'text-slate-900 dark:text-white'
        ],
        'application-process' => [
            'headline' => 'Einfacher Bewerbungsprozess',
            'description' => 'In nur drei einfachen Schritten zu Ihrem Traumjob. Unser streamlined Prozess macht die Bewerbung so einfach wie nie zuvor.',
            'steps' => [
                [
                    'stepNumber' => 1,
                    'title' => 'Bewirb dich für die Stellenausschreibung',
                    'description' => 'Sende deine Bewerbung über unser einfaches Online-Formular ab. Dauert nur 5 Minuten.',
                    'icon' => 'user-check',
                    'details' => ['Online-Formular', 'CV Upload', 'Anschreiben optional']
                ],
                [
                    'stepNumber' => 2,
                    'title' => 'Erhalte eine Bestätigung',
                    'description' => 'Wir bestätigen den Eingang deiner Bewerbung innerhalb von 24 Stunden per E-Mail.',
                    'icon' => 'mail',
                    'details' => ['Automatische Bestätigung', 'Status-Updates', 'Nächste Schritte']
                ],
                [
                    'stepNumber' => 3,
                    'title' => 'Erwarte unsere Antwort',
                    'description' => 'Unser HR-Team prüft deine Bewerbung und meldet sich innerhalb von 5 Werktagen.',
                    'icon' => 'calendar',
                    'details' => ['Persönliche Prüfung', 'Schnelle Rückmeldung', 'Terminvereinbarung']
                ]
            ],
            'additionalInfo' => [
                'Durchschnittliche Bearbeitungszeit: 3-5 Werktage',
                'Erfolgsquote: 85% der Bewerbungen führen zu einem Interview',
                'Persönliche Betreuung durch unser HR-Team'
            ],
            'bgClass' => 'bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900 dark:to-emerald-800',
            'textColor' => 'text-slate-900 dark:text-white'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['problem-solver'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $description = $options['description'] ?? $content['description'];
    $features = $options['features'] ?? ($content['features'] ?? []);
    $steps = $options['steps'] ?? ($content['steps'] ?? []);
    $problemSolution = $options['problemSolution'] ?? ($content['problemSolution'] ?? null);
    $additionalInfo = $options['additionalInfo'] ?? ($content['additionalInfo'] ?? []);
    $bgClass = $content['bgClass'];
    $textColor = $content['textColor'];
    
    // Icon-Mapping
    $iconMap = [
        'user-check' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>',
        'mail' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>',
        'calendar' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>'
    ];
    
    ob_start();
    include __DIR__ . '/templates/process-steps-benefits.php';
    return ob_get_clean();
}
?>
