<?php
// Icon-Mapping für verschiedene Benefit-Typen
$iconMap = [
    'rocket' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />',
    'shield' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />',
    'support' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.944a11.955 11.955 0 00-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016A11.955 11.955 0 0012 2.944z" />',
    'quality' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />',
    'speed' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />',
    'innovation' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />',
    'reliability' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />',
    'growth' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />',
    'time' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />',
    'cost' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />',
    'security' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />',
    'integration' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />',
    'users' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />',
    'globe' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />',
    'award' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />',
    'trending' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />',
    'lightning' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />',
    'heart' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />'
];
?>

<section class="section-padding bg-gradient-to-br from-gray-50 via-white to-blue-50">
    <div class="container-custom">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                <?php echo htmlspecialchars($data['title']); ?>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                <?php echo htmlspecialchars($data['subtitle']); ?>
            </p>
        </div>

        <!-- Benefits Grid -->
        <?php if ($data['style'] === 'masonry'): ?>
        <!-- Masonry Layout -->
        <div class="columns-1 md:columns-2 lg:columns-3 gap-8 space-y-8">
            <?php foreach ($data['benefits'] as $benefit): ?>
            <div class="break-inside-avoid bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 
                <?php 
                $size = $benefit['size'] ?? 'medium';
                if ($size === 'large') echo 'p-8';
                elseif ($size === 'small') echo 'p-4';
                else echo 'p-6';
                ?>">
                
                <!-- Icon -->
                <div class="mb-6">
                    <div class="w-16 h-16 bg-gradient-to-r from-primary-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <?php echo $iconMap[$benefit['icon']] ?? $iconMap['quality']; ?>
                        </svg>
                    </div>
                </div>
                
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <?php echo htmlspecialchars($benefit['title']); ?>
                </h3>
                <p class="text-gray-600 leading-relaxed">
                    <?php echo htmlspecialchars($benefit['description']); ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
        
        <?php else: ?>
        <!-- Standard Grid Layout -->
        <div class="grid <?php echo $data['layout']; ?> gap-8">
            <?php foreach ($data['benefits'] as $benefit): ?>
            <div class="group bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                
                <?php if ($data['style'] === 'cards'): ?>
                <!-- Card Style with Image -->
                <div class="aspect-w-16 aspect-h-9">
                    <img src="<?php echo htmlspecialchars($benefit['image']); ?>" 
                         alt="<?php echo htmlspecialchars($benefit['title']); ?>"
                         class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-primary-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <?php echo $iconMap[$benefit['icon']] ?? $iconMap['quality']; ?>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">
                            <?php echo htmlspecialchars($benefit['title']); ?>
                        </h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        <?php echo htmlspecialchars($benefit['description']); ?>
                    </p>
                </div>
                
                <?php elseif ($data['style'] === 'compact'): ?>
                <!-- Compact Style -->
                <div class="p-6 text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-primary-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <?php echo $iconMap[$benefit['icon']] ?? $iconMap['quality']; ?>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">
                        <?php echo htmlspecialchars($benefit['title']); ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        <?php echo htmlspecialchars($benefit['description']); ?>
                    </p>
                </div>
                
                <?php else: ?>
                <!-- Detailed Style -->
                <div class="p-8">
                    <div class="flex items-start mb-6">
                        <div class="w-14 h-14 bg-gradient-to-r from-primary-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg mr-6 flex-shrink-0">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <?php echo $iconMap[$benefit['icon']] ?? $iconMap['quality']; ?>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">
                                <?php echo htmlspecialchars($benefit['title']); ?>
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                <?php echo htmlspecialchars($benefit['description']); ?>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Learn More Link -->
                    <div class="pt-4 border-t border-gray-100">
                        <a href="#" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium text-sm transition-colors duration-200">
                            Mehr erfahren
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <!-- Bottom CTA -->
        <div class="mt-20 text-center">
            <div class="bg-gradient-to-r from-primary-600 to-blue-600 rounded-3xl p-8 lg:p-12 text-white">
                <h3 class="text-3xl lg:text-4xl font-bold mb-4">
                    Überzeugt? Starten Sie noch heute!
                </h3>
                <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">
                    Schließen Sie sich den über 50.000 zufriedenen Kunden an und erleben Sie die Vorteile selbst.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#start" 
                       class="inline-flex items-center justify-center px-8 py-4 bg-white text-primary-600 font-semibold rounded-xl hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                        Jetzt kostenlos starten
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="#demo" 
                       class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-semibold rounded-xl hover:bg-white hover:text-primary-600 transition-all duration-200">
                        Live-Demo ansehen
                    </a>
                </div>
            </div>
        </div>

        <!-- Stats Bar -->
        <div class="mt-16 grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <div class="p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
                <div class="text-3xl font-bold text-primary-600 mb-2">50K+</div>
                <div class="text-sm text-gray-600">Zufriedene Kunden</div>
            </div>
            <div class="p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
                <div class="text-3xl font-bold text-green-600 mb-2">99.9%</div>
                <div class="text-sm text-gray-600">Verfügbarkeit</div>
            </div>
            <div class="p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
                <div class="text-3xl font-bold text-purple-600 mb-2">24/7</div>
                <div class="text-sm text-gray-600">Support</div>
            </div>
            <div class="p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
                <div class="text-3xl font-bold text-orange-600 mb-2">400%</div>
                <div class="text-sm text-gray-600">ROI Durchschnitt</div>
            </div>
        </div>
    </div>
</section>
