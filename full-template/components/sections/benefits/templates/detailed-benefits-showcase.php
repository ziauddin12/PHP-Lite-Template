<?php
// Icon mapping for benefits
$iconMap = [
    'clock' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>',
    'trending-down' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"/>',
    'trending-up' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>',
    'chart-bar' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>',
    'currency-dollar' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>',
    'lightning-bolt' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
    'badge-check' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>'
];
?>

<section class="section-padding bg-gradient-to-br from-blue-50 via-white to-purple-50">
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

        <?php if ($data['style'] === 'comprehensive'): ?>
        <!-- Comprehensive Style -->
        <div class="space-y-20">
            <?php foreach ($data['benefits'] as $index => $benefit): ?>
            <div class="grid lg:grid-cols-2 gap-16 items-center <?php echo $index % 2 === 1 ? 'lg:flex-row-reverse' : ''; ?>">
                <!-- Image -->
                <div class="<?php echo $index % 2 === 1 ? 'lg:order-2' : ''; ?>">
                    <div class="aspect-w-16 aspect-h-12 mb-8">
                        <img src="<?php echo htmlspecialchars($benefit['image']); ?>" 
                             alt="<?php echo htmlspecialchars($benefit['title']); ?>"
                             class="w-full h-full object-cover rounded-3xl shadow-2xl">
                    </div>
                </div>
                
                <!-- Content -->
                <div class="<?php echo $index % 2 === 1 ? 'lg:order-1' : ''; ?>">
                    <!-- Icon & Title -->
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-primary-500 to-blue-600 text-white rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <?php echo $iconMap[$benefit['icon']] ?? $iconMap['chart-bar']; ?>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900">
                            <?php echo htmlspecialchars($benefit['title']); ?>
                        </h3>
                    </div>
                    
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        <?php echo htmlspecialchars($benefit['description']); ?>
                    </p>
                    
                    <!-- Details -->
                    <div class="mb-8">
                        <ul class="space-y-4">
                            <?php foreach ($benefit['details'] as $detail): ?>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700 text-lg"><?php echo htmlspecialchars($detail); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-2 gap-6">
                        <?php foreach ($benefit['stats'] as $stat): ?>
                        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6 text-center">
                            <div class="text-3xl font-bold text-primary-600 mb-2">
                                <?php echo htmlspecialchars($stat['value']); ?>
                            </div>
                            <div class="text-sm text-gray-600">
                                <?php echo htmlspecialchars($stat['label']); ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <?php elseif ($data['style'] === 'problem-solution'): ?>
        <!-- Problem-Solution Style -->
        <div class="space-y-16">
            <?php foreach ($data['benefits'] as $index => $benefit): ?>
            <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 overflow-hidden">
                <div class="grid lg:grid-cols-2">
                    <!-- Problem Side -->
                    <div class="bg-red-50 p-8 lg:p-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-red-500 text-white rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.464 0L4.35 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-red-900">Problem</h3>
                        </div>
                        <h4 class="text-xl font-semibold text-red-800 mb-4">
                            <?php echo htmlspecialchars($benefit['problem']); ?>
                        </h4>
                        <div class="bg-red-100 rounded-xl p-4 mb-6">
                            <div class="text-red-700 font-medium">Vorher:</div>
                            <div class="text-red-800"><?php echo htmlspecialchars($benefit['beforeAfter']['before']); ?></div>
                        </div>
                    </div>
                    
                    <!-- Solution Side -->
                    <div class="bg-green-50 p-8 lg:p-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-green-500 text-white rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-green-900">Lösung</h3>
                        </div>
                        <h4 class="text-xl font-semibold text-green-800 mb-4">
                            <?php echo htmlspecialchars($benefit['solution']); ?>
                        </h4>
                        <p class="text-green-700 mb-6">
                            <?php echo htmlspecialchars($benefit['description']); ?>
                        </p>
                        <div class="bg-green-100 rounded-xl p-4 mb-6">
                            <div class="text-green-700 font-medium">Nachher:</div>
                            <div class="text-green-800"><?php echo htmlspecialchars($benefit['beforeAfter']['after']); ?></div>
                        </div>
                        
                        <!-- Features -->
                        <ul class="space-y-3">
                            <?php foreach ($benefit['details'] as $detail): ?>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-green-800"><?php echo htmlspecialchars($detail); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                
                <!-- Image -->
                <div class="p-8">
                    <img src="<?php echo htmlspecialchars($benefit['image']); ?>" 
                         alt="<?php echo htmlspecialchars($benefit['solution']); ?>"
                         class="w-full h-64 object-cover rounded-2xl">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <?php elseif ($data['style'] === 'roi-focused'): ?>
        <!-- ROI-Focused Style -->
        <div class="mb-16">
            <!-- ROI Overview -->
            <div class="bg-gradient-to-r from-green-600 to-blue-600 rounded-3xl p-8 lg:p-12 text-white text-center mb-16">
                <h3 class="text-3xl lg:text-4xl font-bold mb-8">ROI-Übersicht</h3>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                    <div>
                        <div class="text-4xl font-bold mb-2"><?php echo htmlspecialchars($data['roi_overview']['payback_period']); ?></div>
                        <div class="text-lg opacity-90">Amortisationszeit</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2"><?php echo htmlspecialchars($data['roi_overview']['average_roi']); ?></div>
                        <div class="text-lg opacity-90">Durchschnittlicher ROI</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2"><?php echo htmlspecialchars($data['roi_overview']['cost_savings']); ?></div>
                        <div class="text-lg opacity-90">Kosteneinsparung/Jahr</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2"><?php echo htmlspecialchars($data['roi_overview']['time_savings']); ?></div>
                        <div class="text-lg opacity-90">Zeitersparnis/Woche</div>
                    </div>
                </div>
            </div>
            
            <!-- Benefits Categories -->
            <div class="grid lg:grid-cols-3 gap-8">
                <?php foreach ($data['benefits'] as $benefit): ?>
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-primary-100 text-primary-600 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <?php echo $iconMap[$benefit['icon']] ?? $iconMap['chart-bar']; ?>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">
                            <?php echo htmlspecialchars($benefit['category']); ?>
                        </h3>
                    </div>
                    
                    <div class="space-y-4 mb-6">
                        <?php foreach ($benefit['items'] as $item): ?>
                        <div class="flex items-start">
                            <div class="text-2xl font-bold text-primary-600 mr-4 min-w-fit">
                                <?php echo htmlspecialchars($item['metric']); ?>
                            </div>
                            <div class="text-gray-600 text-sm">
                                <?php echo htmlspecialchars($item['description']); ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <div class="border-t border-gray-200 pt-4">
                        <div class="text-lg font-semibold text-green-600">
                            <?php echo htmlspecialchars($benefit['total']); ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <?php else: ?>
        <!-- Feature Deep Dive Style -->
        <div class="space-y-20">
            <?php foreach ($data['features'] as $index => $feature): ?>
            <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 overflow-hidden">
                <div class="grid lg:grid-cols-2 gap-0">
                    <!-- Content -->
                    <div class="p-8 lg:p-12">
                        <div class="mb-6">
                            <h3 class="text-3xl font-bold text-gray-900 mb-2">
                                <?php echo htmlspecialchars($feature['name']); ?>
                            </h3>
                            <p class="text-xl text-primary-600 font-semibold">
                                <?php echo htmlspecialchars($feature['tagline']); ?>
                            </p>
                        </div>
                        
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                            <?php echo htmlspecialchars($feature['description']); ?>
                        </p>
                        
                        <!-- Capabilities -->
                        <div class="mb-8">
                            <h4 class="text-lg font-semibold text-gray-900 mb-4">Kernfunktionen:</h4>
                            <ul class="space-y-3">
                                <?php foreach ($feature['capabilities'] as $capability): ?>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-blue-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700"><?php echo htmlspecialchars($capability); ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <!-- Use Cases -->
                        <div class="mb-8">
                            <h4 class="text-lg font-semibold text-gray-900 mb-4">Anwendungsfälle:</h4>
                            <div class="grid grid-cols-2 gap-4">
                                <?php foreach ($feature['use_cases'] as $useCase): ?>
                                <div class="bg-gray-50 rounded-lg p-3">
                                    <span class="text-sm text-gray-700"><?php echo htmlspecialchars($useCase); ?></span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- Tech Specs -->
                        <div class="bg-gray-50 rounded-xl p-6">
                            <h4 class="text-sm font-semibold text-gray-900 mb-3">Technische Spezifikationen:</h4>
                            <div class="space-y-2">
                                <?php foreach ($feature['tech_specs'] as $spec): ?>
                                <div class="text-sm text-gray-600"><?php echo htmlspecialchars($spec); ?></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Image -->
                    <div class="bg-gradient-to-br from-primary-500 to-blue-600 flex items-center justify-center p-8">
                        <img src="<?php echo htmlspecialchars($feature['image']); ?>" 
                             alt="<?php echo htmlspecialchars($feature['name']); ?>"
                             class="w-full h-full max-h-96 object-contain rounded-2xl shadow-2xl">
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <!-- Bottom CTA -->
        <div class="mt-20 text-center">
            <div class="bg-gradient-to-r from-primary-600 to-purple-600 rounded-3xl p-8 lg:p-12 text-white">
                <h3 class="text-3xl lg:text-4xl font-bold mb-4">
                    Bereit für diese Vorteile?
                </h3>
                <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">
                    Schließen Sie sich über 10.000 erfolgreichen Unternehmen an und erleben Sie den Unterschied selbst.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#start" 
                       class="inline-flex items-center justify-center px-8 py-4 bg-white text-primary-600 font-semibold rounded-xl hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                        Kostenlos testen
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="#demo" 
                       class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-semibold rounded-xl hover:bg-white hover:text-primary-600 transition-all duration-200">
                        Live-Demo buchen
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.aspect-w-16 {
    position: relative;
    padding-bottom: 75%;
}

.aspect-h-12 > * {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
</style>
