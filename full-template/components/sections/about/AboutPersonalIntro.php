<?php
/**
 * About Personal Intro Component
 * Persönliche Vorstellungen, CEO-Messages und Experten-Intros
 */

function AboutPersonalIntro($variant = 'ceo-message', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'ceo-message' => [
            'name' => 'Maria Schmidt',
            'title' => 'CEO & Gründerin',
            'company' => 'Unser Unternehmen',
            'headline' => 'Eine persönliche Nachricht von unserer CEO',
            'description' => 'Willkommen bei unserem Unternehmen. Seit der Gründung vor über 10 Jahren ist es meine Mission, innovative Lösungen zu entwickeln, die echten Mehrwert schaffen.',
            'quote' => '"Erfolg entsteht nicht über Nacht, sondern durch kontinuierliche Arbeit, Leidenschaft und das richtige Team."',
            'image' => 'https://images.unsplash.com/photo-1494790108755-2616b612b1c5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800'
        ],
        'expert-intro' => [
            'name' => 'Dr. Thomas Weber',
            'title' => 'Senior Consultant & Experte',
            'company' => 'Beratungsunternehmen',
            'headline' => 'Expertise, die Sie voranbringt',
            'description' => 'Mit über 15 Jahren Erfahrung in der Branche helfe ich Unternehmen dabei, ihre Ziele zu erreichen und nachhaltiges Wachstum zu erzielen.',
            'quote' => '"Die beste Lösung ist die, die perfekt zu Ihren individuellen Bedürfnissen passt."',
            'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'bgClass' => 'bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900 dark:to-emerald-800'
        ],
        'fitness-expert' => [
            'name' => 'Sarah Johnson',
            'title' => 'Personal Trainerin & Ernährungsberaterin',
            'company' => 'FitLife Studio',
            'headline' => 'Dein Weg zu einem gesünderen Leben',
            'description' => 'Als zertifizierte Trainerin und Ernährungsberaterin unterstütze ich Menschen dabei, ihre Fitness- und Gesundheitsziele zu erreichen.',
            'quote' => '"Jeder kleine Schritt zählt. Wichtig ist, dass du anfängst und dranbbleibst."',
            'image' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'bgClass' => 'bg-gradient-to-br from-orange-50 to-red-100 dark:from-orange-900 dark:to-red-800'
        ],
        'copywriter' => [
            'name' => 'Anna Mueller',
            'title' => 'Senior Copywriterin & Content Strategin',
            'company' => 'Creative Agency',
            'headline' => 'Worte, die verkaufen und begeistern',
            'description' => 'Ich entwickle überzeugende Texte und Content-Strategien, die Ihre Zielgruppe ansprechen und zu Handlungen motivieren.',
            'quote' => '"Guter Content ist nicht nur informativ, sondern erzählt eine Geschichte, die im Gedächtnis bleibt."',
            'image' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'bgClass' => 'bg-gradient-to-br from-purple-50 to-pink-100 dark:from-purple-900 dark:to-pink-800'
        ],
        'founder-quote' => [
            'name' => 'Michael Chen',
            'title' => 'Gründer & Visionär',
            'company' => 'Tech Startup',
            'headline' => 'Die Vision hinter unserem Unternehmen',
            'description' => 'Alles begann mit einer einfachen Idee: Technologie zu entwickeln, die das Leben der Menschen wirklich verbessert. Diese Vision treibt uns jeden Tag an.',
            'quote' => '"Innovation entsteht nicht im Komfort, sondern wenn man bereit ist, Risiken einzugehen und neue Wege zu beschreiten."',
            'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'bgClass' => 'bg-gradient-to-br from-cyan-50 to-teal-100 dark:from-cyan-900 dark:to-teal-800'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['ceo-message'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $name = $options['name'] ?? $content['name'];
    $title = $options['title'] ?? $content['title'];
    $company = $options['company'] ?? $content['company'];
    $headline = $options['headline'] ?? $content['headline'];
    $description = $options['description'] ?? $content['description'];
    $quote = $options['quote'] ?? $content['quote'];
    $image = $options['image'] ?? $content['image'];
    $ctaText = $options['ctaText'] ?? 'Kontakt aufnehmen';
    $bgClass = $content['bgClass'];
    
    ob_start();
    include __DIR__ . '/templates/about-personal-intro.php';
    return ob_get_clean();
}
?>
