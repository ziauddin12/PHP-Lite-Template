<?php
/**
 * Product Grid Component
 * Produkt-Raster und -Übersichten
 */

function ProductGrid($variant = 'simple-grid', $options = []) {
    
    // Standard-Inhalte für jede Variante
    $variants = [
        'simple-grid' => [
            'headline' => 'Unsere Produkte',
            'description' => 'Entdecke unsere hochwertigen Produkte mit erstklassiger Qualität und modernem Design.',
            'bgClass' => 'bg-white dark:bg-slate-900',
            'columns' => 3,
            'showFeatures' => false,
            'showRatings' => true,
            'showDescriptions' => false
        ],
        'detailed-grid' => [
            'headline' => 'Premium Produktsortiment',
            'description' => 'Jedes Produkt wurde sorgfältig ausgewählt und bietet höchste Qualität und Funktionalität.',
            'bgClass' => 'bg-slate-50 dark:bg-slate-800',
            'columns' => 2,
            'showFeatures' => true,
            'showRatings' => true,
            'showDescriptions' => true
        ],
        'sale-grid' => [
            'headline' => '🔥 Mega Sale - Bis zu 50% Rabatt',
            'description' => 'Limitierte Zeit! Sichere dir jetzt unsere besten Produkte zu unschlagbaren Preisen.',
            'bgClass' => 'bg-gradient-to-br from-red-50 to-orange-100 dark:from-red-900 dark:to-orange-800',
            'columns' => 3,
            'showFeatures' => false,
            'showRatings' => true,
            'showDescriptions' => false,
            'showSaleBadges' => true
        ],
        'feature-grid' => [
            'headline' => 'Top Features Produkte',
            'description' => 'Produkte mit den beliebtesten Features und höchsten Bewertungen.',
            'bgClass' => 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800',
            'columns' => 2,
            'showFeatures' => true,
            'showRatings' => true,
            'showDescriptions' => true
        ],
        'new-arrivals' => [
            'headline' => '✨ Neu eingetroffen',
            'description' => 'Die neuesten Produkte in unserem Sortiment - frisch und innovativ.',
            'bgClass' => 'bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900 dark:to-emerald-800',
            'columns' => 3,
            'showFeatures' => false,
            'showRatings' => true,
            'showDescriptions' => false,
            'showNewBadges' => true
        ]
    ];
    
    // Standard-Produkte
    $defaultProducts = [
        [
            'id' => '1',
            'name' => 'Perfekte Produktbox',
            'price' => 100,
            'originalPrice' => 150,
            'currency' => '€',
            'features' => ['Bluetooth 5.1', '360° Sound', 'USB-C Laden'],
            'description' => 'Bluetooth 5.1, 360°-Sound, 12 Stunden Akkulaufzeit und USB-C-Ladefunktion',
            'rating' => 4.8,
            'reviewCount' => 124,
            'isNew' => true,
            'onSale' => true,
            'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'
        ],
        [
            'id' => '2',
            'name' => 'Premium Kopfhörer',
            'price' => 200,
            'currency' => '€',
            'features' => ['Noise Cancelling', 'Wireless', '30h Akkulaufzeit'],
            'description' => 'Premium Noise-Cancelling Kopfhörer mit erstklassiger Soundqualität',
            'rating' => 4.9,
            'reviewCount' => 89,
            'isNew' => true,
            'image' => 'https://images.unsplash.com/photo-1484704849700-f032a568e944?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'
        ],
        [
            'id' => '3',
            'name' => 'Smart Watch Pro',
            'price' => 299,
            'originalPrice' => 399,
            'currency' => '€',
            'features' => ['GPS Tracking', 'Fitness Monitor', 'Wasserdicht'],
            'description' => 'Intelligente Smartwatch mit umfassenden Gesundheits- und Fitness-Features',
            'rating' => 4.7,
            'reviewCount' => 203,
            'onSale' => true,
            'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'
        ],
        [
            'id' => '4',
            'name' => 'Wireless Charger',
            'price' => 49,
            'currency' => '€',
            'features' => ['Qi-Standard', 'LED Anzeige', 'Schnellladen'],
            'description' => 'Kabelloses Ladegerät mit Schnellladefunktion für alle Qi-kompatiblen Geräte',
            'rating' => 4.6,
            'reviewCount' => 156,
            'isNew' => true,
            'image' => 'https://images.unsplash.com/photo-1572569511254-d8f925fe2cbb?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'
        ]
    ];
    
    // Hole Varianten-Inhalte
    $content = $variants[$variant] ?? $variants['simple-grid'];
    
    // Überschreibe mit benutzerdefinierten Optionen
    $headline = $options['headline'] ?? $content['headline'];
    $description = $options['description'] ?? $content['description'];
    $products = $options['products'] ?? $defaultProducts;
    $columns = $options['columns'] ?? $content['columns'];
    $showFeatures = $options['showFeatures'] ?? $content['showFeatures'];
    $showRatings = $options['showRatings'] ?? $content['showRatings'];
    $showDescriptions = $options['showDescriptions'] ?? $content['showDescriptions'];
    $showSaleBadges = $options['showSaleBadges'] ?? ($content['showSaleBadges'] ?? false);
    $showNewBadges = $options['showNewBadges'] ?? ($content['showNewBadges'] ?? false);
    $bgClass = $content['bgClass'];
    
    ob_start();
    include __DIR__ . '/templates/product-grid.php';
    return ob_get_clean();
}
?>
