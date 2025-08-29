<?php
/**
 * Contact CTA Component
 * Kontakt-fokussierte CTA-Sektionen
 */

function ContactCTA($variant = 'phone-contact', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'phone-contact' => [
            'headline' => 'Lass uns telefonieren',
            'description' => 'Persönlicher Kontakt ist uns wichtig. Sprechen Sie direkt mit unserem Team und lassen Sie sich individuell beraten.',
            'contactPerson' => [
                'name' => 'Max Mustermann',
                'position' => 'Geschäftsführer',
                'phone' => '+49-123-456789',
                'email' => 'max@unternehmen.de'
            ],
            'ctaText' => 'Jetzt anrufen',
            'secondaryCtaText' => 'E-Mail senden',
            'availability' => 'Mo-Fr 9:00-18:00 Uhr',
            'bgClass' => 'bg-gradient-to-br from-green-600 to-emerald-600',
            'textColor' => 'text-white'
        ],
        'country-form' => [
            'headline' => 'Kontaktiere uns einfach!',
            'subheadline' => 'Für Interessenten',
            'description' => 'Wählen Sie Ihr Land aus und wir verbinden Sie mit dem richtigen Ansprechpartner.',
            'showCountrySelector' => true,
            'countries' => [
                ['code' => 'DE', 'name' => 'Deutschland', 'phone' => '+49-123-456789'],
                ['code' => 'AT', 'name' => 'Österreich', 'phone' => '+43-123-456789'],
                ['code' => 'CH', 'name' => 'Schweiz', 'phone' => '+41-123-456789']
            ],
            'ctaText' => 'Kontakt aufnehmen',
            'bgClass' => 'bg-gradient-to-br from-blue-600 to-indigo-600',
            'textColor' => 'text-white'
        ],
        'multi-contact' => [
            'headline' => 'Zeit zum Handeln!',
            'description' => 'Verschiedene Anliegen, verschiedene Ansprechpartner. Wählen Sie den direkten Weg zu Ihrem Ziel.',
            'contactOptions' => [
                ['type' => 'phone', 'label' => 'Vertrieb & Partnerschaften', 'value' => '+49-123-456789', 'icon' => 'phone'],
                ['type' => 'phone', 'label' => 'Support & Hilfe', 'value' => '+49-123-456790', 'icon' => 'support'],
                ['type' => 'email', 'label' => 'Allgemeine Anfragen', 'value' => 'info@unternehmen.de', 'icon' => 'mail']
            ],
            'ctaText' => 'Kontakt wählen',
            'bgClass' => 'bg-gradient-to-br from-purple-600 to-violet-600',
            'textColor' => 'text-white'
        ],
        'contact-form' => [
            'headline' => 'Bereit, mit uns zu wachsen?',
            'description' => 'Senden Sie uns Ihre Nachricht und wir melden uns innerhalb von 24 Stunden bei Ihnen.',
            'formFields' => [
                ['name' => 'name', 'label' => 'Ihr Name', 'type' => 'text', 'required' => true],
                ['name' => 'email', 'label' => 'E-Mail Adresse', 'type' => 'email', 'required' => true],
                ['name' => 'phone', 'label' => 'Telefonnummer', 'type' => 'tel', 'required' => false],
                ['name' => 'message', 'label' => 'Ihre Nachricht', 'type' => 'textarea', 'required' => true]
            ],
            'ctaText' => 'Nachricht senden',
            'responseTime' => 'Antwort innerhalb von 24 Stunden',
            'bgClass' => 'bg-gradient-to-br from-slate-700 to-slate-800',
            'textColor' => 'text-white'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['phone-contact'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $subheadline = $options['subheadline'] ?? ($content['subheadline'] ?? null);
    $description = $options['description'] ?? $content['description'];
    $contactPerson = $options['contactPerson'] ?? ($content['contactPerson'] ?? null);
    $contactOptions = $options['contactOptions'] ?? ($content['contactOptions'] ?? []);
    $countries = $options['countries'] ?? ($content['countries'] ?? []);
    $formFields = $options['formFields'] ?? ($content['formFields'] ?? []);
    $ctaText = $options['ctaText'] ?? $content['ctaText'];
    $secondaryCtaText = $options['secondaryCtaText'] ?? ($content['secondaryCtaText'] ?? null);
    $availability = $options['availability'] ?? ($content['availability'] ?? null);
    $responseTime = $options['responseTime'] ?? ($content['responseTime'] ?? null);
    $showCountrySelector = $options['showCountrySelector'] ?? ($content['showCountrySelector'] ?? false);
    $bgClass = $content['bgClass'];
    $textColor = $content['textColor'];
    
    ob_start();
    include __DIR__ . '/templates/contact-cta.php';
    return ob_get_clean();
}
?>
