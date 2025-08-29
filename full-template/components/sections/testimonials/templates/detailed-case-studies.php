<section class="relative py-24 lg:py-32 <?php echo $data['bgClass']; ?>">
    <div class="max-w-6xl mx-auto px-4">
        
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 dark:text-white mb-6 leading-tight">
                <?php echo htmlspecialchars($data['title']); ?>
            </h2>
            
            <?php if (isset($data['subtitle'])): ?>
                <h3 class="text-xl font-semibold text-slate-700 dark:text-slate-300 mb-6">
                    <?php echo htmlspecialchars($data['subtitle']); ?>
                </h3>
            <?php endif; ?>
            
            <p class="text-lg leading-relaxed max-w-3xl mx-auto text-slate-600 dark:text-slate-400">
                <?php echo htmlspecialchars($data['description']); ?>
            </p>
        </div>
        
        <!-- Case Studies -->
        <div class="space-y-16">
            
            <?php foreach ($data['caseStudies'] as $caseStudy): ?>
                <div class="group">
                    
                    <?php if ($data['style'] === 'full'): ?>
                        <!-- Full Case Study Style -->
                        <div class="bg-white dark:bg-slate-800 rounded-3xl shadow-2xl border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-3xl transition-all duration-300">
                            <div class="grid lg:grid-cols-2 gap-0">
                                
                                <!-- Image -->
                                <div class="aspect-w-16 aspect-h-10 lg:aspect-h-full">
                                    <img src="<?php echo htmlspecialchars($caseStudy['image']); ?>" 
                                         alt="<?php echo htmlspecialchars($caseStudy['title']); ?>"
                                         class="w-full h-full object-cover">
                                    
                                    <!-- Overlay with Category -->
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex items-end p-8">
                                        <div class="flex items-center space-x-4">
                                            <?php if (isset($caseStudy['category'])): ?>
                                                <span class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold">
                                                    <?php echo htmlspecialchars($caseStudy['category']); ?>
                                                </span>
                                            <?php endif; ?>
                                            <?php if (isset($caseStudy['timeline'])): ?>
                                                <span class="bg-white/20 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-semibold">
                                                    <?php echo htmlspecialchars($caseStudy['timeline']); ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Content -->
                                <div class="p-8 lg:p-12 flex flex-col justify-center">
                                    <div class="mb-8">
                                        <h3 class="text-2xl lg:text-3xl font-bold text-slate-900 dark:text-white mb-3">
                                            <?php echo htmlspecialchars($caseStudy['title']); ?>
                                        </h3>
                                        <?php if (isset($caseStudy['subtitle'])): ?>
                                            <p class="text-blue-600 dark:text-blue-400 font-semibold text-lg mb-6">
                                                <?php echo htmlspecialchars($caseStudy['subtitle']); ?>
                                            </p>
                                        <?php endif; ?>
                                        
                                        <!-- Client Info -->
                                        <div class="flex items-center space-x-4 mb-6">
                                            <img src="<?php echo htmlspecialchars($caseStudy['client']['avatar']); ?>" 
                                                 alt="<?php echo htmlspecialchars($caseStudy['client']['name']); ?>"
                                                 class="w-12 h-12 rounded-full object-cover">
                                            <div>
                                                <div class="font-semibold text-slate-900 dark:text-white">
                                                    <?php echo htmlspecialchars($caseStudy['client']['name']); ?>
                                                </div>
                                                <div class="text-slate-600 dark:text-slate-400 text-sm">
                                                    <?php echo htmlspecialchars($caseStudy['client']['position']); ?> bei <?php echo htmlspecialchars($caseStudy['client']['company']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Problem & Solution -->
                                    <?php if ($data['showProblemSolution']): ?>
                                        <div class="space-y-6 mb-8">
                                            <div>
                                                <h4 class="text-lg font-semibold text-slate-900 dark:text-white mb-3 flex items-center">
                                                    <svg class="h-5 w-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                                    </svg>
                                                    Herausforderung
                                                </h4>
                                                <p class="text-slate-600 dark:text-slate-400">
                                                    <?php echo htmlspecialchars($caseStudy['problem']); ?>
                                                </p>
                                            </div>
                                            
                                            <div>
                                                <h4 class="text-lg font-semibold text-slate-900 dark:text-white mb-3 flex items-center">
                                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                                    </svg>
                                                    Lösung
                                                </h4>
                                                <p class="text-slate-600 dark:text-slate-400">
                                                    <?php echo htmlspecialchars($caseStudy['solution']); ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <!-- Results -->
                                    <?php if ($data['showResults'] && isset($caseStudy['results'])): ?>
                                        <div class="mb-8">
                                            <h4 class="text-lg font-semibold text-slate-900 dark:text-white mb-4 flex items-center">
                                                <svg class="h-5 w-5 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                                </svg>
                                                Ergebnisse
                                            </h4>
                                            <div class="grid md:grid-cols-2 gap-4">
                                                <?php foreach ($caseStudy['results'] as $result): ?>
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="h-5 w-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>
                                                        <div>
                                                            <span class="font-semibold text-slate-900 dark:text-white"><?php echo htmlspecialchars($result['metric']); ?>:</span>
                                                            <span class="text-blue-600 dark:text-blue-400 font-bold ml-1"><?php echo htmlspecialchars($result['value']); ?></span>
                                                            <?php if (isset($result['description'])): ?>
                                                                <p class="text-slate-600 dark:text-slate-400 text-sm"><?php echo htmlspecialchars($result['description']); ?></p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <!-- Testimonial Quote -->
                                    <?php if (isset($caseStudy['testimonial'])): ?>
                                        <blockquote class="text-lg italic text-slate-700 dark:text-slate-300 border-l-4 border-blue-500 pl-4 mb-8">
                                            "<?php echo htmlspecialchars($caseStudy['testimonial']); ?>"
                                        </blockquote>
                                    <?php endif; ?>
                                    
                                    <!-- Links -->
                                    <?php if ($data['showLinks'] && isset($caseStudy['links'])): ?>
                                        <div class="flex flex-wrap gap-3">
                                            <?php foreach ($caseStudy['links'] as $link): ?>
                                                <a href="<?php echo htmlspecialchars($link['url']); ?>" 
                                                   class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-300">
                                                    <?php echo htmlspecialchars($link['label']); ?>
                                                    <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                                    </svg>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        
                    <?php elseif ($data['style'] === 'compact'): ?>
                        <!-- Compact Case Study Style -->
                        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-xl transition-all duration-300 p-8">
                            <div class="grid md:grid-cols-3 gap-8 items-center">
                                
                                <!-- Image -->
                                <div class="aspect-w-16 aspect-h-10">
                                    <img src="<?php echo htmlspecialchars($caseStudy['image']); ?>" 
                                         alt="<?php echo htmlspecialchars($caseStudy['title']); ?>"
                                         class="w-full h-48 object-cover rounded-xl">
                                </div>
                                
                                <!-- Content -->
                                <div class="md:col-span-2">
                                    <div class="mb-6">
                                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">
                                            <?php echo htmlspecialchars($caseStudy['title']); ?>
                                        </h3>
                                        <?php if (isset($caseStudy['subtitle'])): ?>
                                            <p class="text-blue-600 dark:text-blue-400 font-semibold mb-4">
                                                <?php echo htmlspecialchars($caseStudy['subtitle']); ?>
                                            </p>
                                        <?php endif; ?>
                                        
                                        <!-- Client Info -->
                                        <div class="flex items-center space-x-3 mb-4">
                                            <img src="<?php echo htmlspecialchars($caseStudy['client']['avatar']); ?>" 
                                                 alt="<?php echo htmlspecialchars($caseStudy['client']['name']); ?>"
                                                 class="w-8 h-8 rounded-full object-cover">
                                            <div class="text-sm">
                                                <span class="font-semibold text-slate-900 dark:text-white"><?php echo htmlspecialchars($caseStudy['client']['name']); ?></span>
                                                <span class="text-slate-600 dark:text-slate-400">, <?php echo htmlspecialchars($caseStudy['client']['company']); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Results Grid -->
                                    <?php if (isset($caseStudy['results'])): ?>
                                        <div class="grid grid-cols-2 gap-4">
                                            <?php foreach ($caseStudy['results'] as $result): ?>
                                                <div class="text-center p-3 bg-slate-50 dark:bg-slate-700 rounded-lg">
                                                    <div class="text-lg font-bold text-blue-600 dark:text-blue-400">
                                                        <?php echo htmlspecialchars($result['value']); ?>
                                                    </div>
                                                    <div class="text-sm text-slate-600 dark:text-slate-400">
                                                        <?php echo htmlspecialchars($result['metric']); ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        
                    <?php else: ?>
                        <!-- Minimal Case Study Style -->
                        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-xl transition-all duration-300 p-6">
                            <div class="flex items-center space-x-6">
                                
                                <!-- Image -->
                                <div class="flex-shrink-0">
                                    <img src="<?php echo htmlspecialchars($caseStudy['image']); ?>" 
                                         alt="<?php echo htmlspecialchars($caseStudy['title']); ?>"
                                         class="w-24 h-24 object-cover rounded-xl">
                                </div>
                                
                                <!-- Content -->
                                <div class="flex-1">
                                    <div class="mb-4">
                                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1">
                                            <?php echo htmlspecialchars($caseStudy['title']); ?>
                                        </h3>
                                        <?php if (isset($caseStudy['subtitle'])): ?>
                                            <p class="text-blue-600 dark:text-blue-400 font-semibold text-sm">
                                                <?php echo htmlspecialchars($caseStudy['subtitle']); ?>
                                            </p>
                                        <?php endif; ?>
                                        
                                        <!-- Client -->
                                        <div class="flex items-center space-x-2 mt-2">
                                            <img src="<?php echo htmlspecialchars($caseStudy['client']['avatar']); ?>" 
                                                 alt="<?php echo htmlspecialchars($caseStudy['client']['name']); ?>"
                                                 class="w-6 h-6 rounded-full object-cover">
                                            <span class="text-sm text-slate-600 dark:text-slate-400">
                                                <?php echo htmlspecialchars($caseStudy['client']['company']); ?>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <!-- Quick Results -->
                                    <?php if (isset($caseStudy['results'])): ?>
                                        <div class="flex space-x-4 mb-4">
                                            <?php foreach (array_slice($caseStudy['results'], 0, 3) as $result): ?>
                                                <div class="text-center">
                                                    <div class="text-sm font-bold text-blue-600 dark:text-blue-400">
                                                        <?php echo htmlspecialchars($result['value']); ?>
                                                    </div>
                                                    <div class="text-xs text-slate-600 dark:text-slate-400">
                                                        <?php echo htmlspecialchars($result['metric']); ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <!-- Links -->
                                    <?php if (isset($caseStudy['links'])): ?>
                                        <div class="flex space-x-2">
                                            <?php foreach (array_slice($caseStudy['links'], 0, 2) as $link): ?>
                                                <a href="<?php echo htmlspecialchars($link['url']); ?>" 
                                                   class="text-xs px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400 rounded-full hover:bg-blue-200 dark:hover:bg-blue-900/50 transition-colors">
                                                    <?php echo htmlspecialchars($link['label']); ?>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                </div>
            <?php endforeach; ?>
            
        </div>
        
        <!-- CTA Section -->
        <div class="mt-16 text-center">
            <div class="max-w-2xl mx-auto p-8 bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700">
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">
                    Ihr Projekt könnte das nächste Erfolgsbeispiel sein
                </h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    Lassen Sie uns gemeinsam Ihre Vision in messbare Erfolge verwandeln.
                </p>
                <button class="inline-flex items-center px-8 py-4 bg-blue-600 text-white font-semibold rounded-2xl hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                    Kostenloses Strategiegespräch
                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </button>
            </div>
        </div>
        
    </div>
</section>
