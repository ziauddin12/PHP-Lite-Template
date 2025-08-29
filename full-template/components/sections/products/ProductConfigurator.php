<?php
/**
 * Product Configurator Component
 * Interaktive Produkt-Konfiguratoren mit Preisberechnung
 */

function ProductConfigurator($variant = 'tshirt-configurator', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'tshirt-configurator' => [
            'headline' => 'Dein perfektes T-Shirt',
            'description' => 'Onepage ist wie ein flexibler Baukasten, der sich an jeden Zweck anpassen lässt. Wir erstellen Abschnitte, um dich zu inspirieren und dir den Start zu erleichtern.',
            'basePrice' => 90,
            'currency' => '€',
            'rating' => ['score' => 4.9, 'reviewCount' => 1000],
            'colorOptions' => [
                ['name' => 'Schwarz', 'value' => 'black', 'color' => '#000000'],
                ['name' => 'Weiß', 'value' => 'white', 'color' => '#FFFFFF'],
                ['name' => 'Grau', 'value' => 'gray', 'color' => '#808080']
            ],
            'sizeOptions' => [
                ['name' => 'Standard', 'value' => 'standard', 'priceModifier' => 0],
                ['name' => 'Größe L', 'value' => 'large', 'priceModifier' => 0],
                ['name' => 'Größe XL', 'value' => 'xl', 'priceModifier' => 10]
            ],
            'ctaButton' => ['text' => 'Jetzt bestellen'],
            'secondaryButton' => ['text' => 'Bewertungen lesen'],
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800',
            'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
        ],
        'house-configurator' => [
            'headline' => 'Dein Traumhaus konfigurieren',
            'description' => 'Onepage ist ein flexibler Baukasten, der sich an jeden Zweck anpasst. Wir inspirieren dich mit vielfältigen Abschnitten und erleichtern dir den Start.',
            'basePrice' => 450000,
            'currency' => '€',
            'colorOptions' => [
                ['name' => 'Schwarz', 'value' => 'black', 'color' => '#000000'],
                ['name' => 'Grau', 'value' => 'gray', 'color' => '#808080'],
                ['name' => 'Weiß', 'value' => 'white', 'color' => '#FFFFFF']
            ],
            'additionalOptions' => [
                [
                    'name' => 'Dachtyp',
                    'value' => 'roof-type',
                    'type' => 'radio',
                    'options' => [
                        ['name' => 'Flaches Dach', 'value' => 'flat', 'priceModifier' => 0],
                        ['name' => 'Schräges Dach', 'value' => 'sloped', 'priceModifier' => 15000],
                        ['name' => 'Metalldach', 'value' => 'metal', 'priceModifier' => 25000]
                    ]
                ]
            ],
            'ctaButton' => ['text' => 'Angebot anfordern'],
            'secondaryButton' => ['text' => 'Beratung buchen'],
            'bgClass' => 'bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900 dark:to-emerald-800',
            'image' => 'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
        ],
        'form-configurator' => [
            'headline' => 'Dieses modulare Haus wird dich begeistern und erstaunen',
            'description' => 'Du kannst Listen mit nur einem Klick in umschaltbare Listen verwandeln. Es ist im Grunde dasselbe Element.',
            'basePrice' => 320000,
            'currency' => '€',
            'additionalOptions' => [
                [
                    'name' => 'Ausstattung',
                    'value' => 'features',
                    'type' => 'checkbox',
                    'options' => [
                        ['name' => 'WLAN', 'value' => 'wifi', 'priceModifier' => 2000],
                        ['name' => 'Smart Home', 'value' => 'smart-home', 'priceModifier' => 15000],
                        ['name' => '2 Badezimmer', 'value' => 'two-bathrooms', 'priceModifier' => 20000],
                        ['name' => 'Klimaanlage', 'value' => 'ac', 'priceModifier' => 10000],
                        ['name' => '24/7 Zugang', 'value' => '24-7-access', 'priceModifier' => 5000],
                        ['name' => 'Sicherer Bereich', 'value' => 'secure-area', 'priceModifier' => 7500]
                    ]
                ]
            ],
            'ctaButton' => ['text' => 'Konfiguration speichern'],
            'bgClass' => 'bg-gradient-to-br from-purple-50 to-violet-100 dark:from-purple-900 dark:to-violet-800',
            'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
        ],
        'product-options' => [
            'headline' => 'Luftreiniger Pro - Saubere Luft für dein Zuhause',
            'description' => 'Hochmoderner Luftreiniger mit HEPA-Filter und intelligenter Steuerung. Perfekt für Allergiker und alle, die Wert auf saubere Luft legen.',
            'basePrice' => 299,
            'currency' => '€',
            'rating' => ['score' => 4.8, 'reviewCount' => 850],
            'colorOptions' => [
                ['name' => 'Weiß', 'value' => 'white', 'color' => '#FFFFFF'],
                ['name' => 'Schwarz', 'value' => 'black', 'color' => '#000000'],
                ['name' => 'Silber', 'value' => 'silver', 'color' => '#C0C0C0']
            ],
            'additionalOptions' => [
                [
                    'name' => 'Zusatzfilter',
                    'value' => 'extra-filters',
                    'type' => 'select',
                    'options' => [
                        ['name' => 'Keine', 'value' => 'none', 'priceModifier' => 0],
                        ['name' => '2 Ersatzfilter', 'value' => 'two-filters', 'priceModifier' => 49],
                        ['name' => '4 Ersatzfilter', 'value' => 'four-filters', 'priceModifier' => 89]
                    ]
                ]
            ],
            'ctaButton' => ['text' => 'In den Warenkorb'],
            'secondaryButton' => ['text' => 'Auf Wunschliste'],
            'bgClass' => 'bg-gradient-to-br from-orange-50 to-amber-100 dark:from-orange-900 dark:to-amber-800',
            'image' => 'https://images.unsplash.com/photo-1586953208448-b95a79798f07?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'features' => [
                'HEPA-Filter für 99,97% Filterung',
                'Leiser Betrieb unter 30dB',
                'Smart Home Integration',
                'Automatische Luftqualitätsmessung'
            ]
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['tshirt-configurator'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $subheadline = $options['subheadline'] ?? ($content['subheadline'] ?? null);
    $description = $options['description'] ?? $content['description'];
    $basePrice = $options['basePrice'] ?? $content['basePrice'];
    $currency = $options['currency'] ?? $content['currency'];
    $rating = $options['rating'] ?? ($content['rating'] ?? null);
    $colorOptions = $options['colorOptions'] ?? ($content['colorOptions'] ?? []);
    $sizeOptions = $options['sizeOptions'] ?? ($content['sizeOptions'] ?? []);
    $additionalOptions = $options['additionalOptions'] ?? ($content['additionalOptions'] ?? []);
    $ctaButton = $options['ctaButton'] ?? $content['ctaButton'];
    $secondaryButton = $options['secondaryButton'] ?? ($content['secondaryButton'] ?? null);
    $image = $options['image'] ?? ($content['image'] ?? null);
    $features = $options['features'] ?? ($content['features'] ?? []);
    $bgClass = $content['bgClass'];
    
    ob_start();
    include __DIR__ . '/templates/product-configurator.php';
    return ob_get_clean();
}
?>
