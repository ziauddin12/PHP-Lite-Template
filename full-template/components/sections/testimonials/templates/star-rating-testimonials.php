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
        
        <!-- Overall Rating -->
        <div class="text-center mb-16">
            <div class="max-w-2xl mx-auto p-8 bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700">
                <div class="flex items-center justify-center space-x-4 mb-4">
                    <div class="text-6xl font-bold text-slate-900 dark:text-white">
                        <?php echo number_format($data['overallRating'], 1); ?>
                    </div>
                    <div>
                        <!-- Stars -->
                        <div class="flex items-center space-x-1 mb-2">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="h-8 w-8 <?php echo $i < floor($data['overallRating']) ? 'text-yellow-400 fill-current' : 'text-slate-300 dark:text-slate-600'; ?>" 
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                            <?php endfor; ?>
                        </div>
                        <div class="text-slate-600 dark:text-slate-400 text-lg">
                            Basierend auf <?php echo $data['totalReviews']; ?> Bewertungen
                        </div>
                    </div>
                </div>
                
                <!-- Rating Distribution -->
                <div class="space-y-2">
                    <?php
                    $distribution = [5 => 78, 4 => 15, 3 => 5, 2 => 1, 1 => 1];
                    foreach ($distribution as $stars => $percentage):
                    ?>
                        <div class="flex items-center space-x-3">
                            <span class="text-sm text-slate-600 dark:text-slate-400 w-8"><?php echo $stars; ?>★</span>
                            <div class="flex-1 bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                                <div class="bg-yellow-400 h-2 rounded-full" style="width: <?php echo $percentage; ?>%"></div>
                            </div>
                            <span class="text-sm text-slate-600 dark:text-slate-400 w-10"><?php echo $percentage; ?>%</span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        
        <!-- Testimonials Grid -->
        <div class="grid <?php echo $data['layout']; ?> gap-6">
            
            <?php foreach ($data['testimonials'] as $testimonial): ?>
                <div class="group">
                    <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-xl transition-all duration-300 p-6 h-full">
                        
                        <!-- Header -->
                        <div class="flex items-center justify-between mb-4">
                            <!-- Stars -->
                            <div class="flex items-center space-x-1">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <svg class="h-5 w-5 <?php echo $i < $testimonial['rating'] ? 'text-yellow-400 fill-current' : 'text-slate-300 dark:text-slate-600'; ?>" 
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                    </svg>
                                <?php endfor; ?>
                            </div>
                            
                            <!-- Date -->
                            <?php if (isset($testimonial['date'])): ?>
                                <span class="text-sm text-slate-500 dark:text-slate-400">
                                    <?php echo htmlspecialchars($testimonial['date']); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Review Text -->
                        <blockquote class="text-slate-700 dark:text-slate-300 leading-relaxed mb-6">
                            "<?php echo htmlspecialchars($testimonial['text']); ?>"
                        </blockquote>
                        
                        <!-- Author Info -->
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="relative">
                                <img src="<?php echo htmlspecialchars($testimonial['avatar']); ?>" 
                                     alt="<?php echo htmlspecialchars($testimonial['name']); ?>"
                                     class="w-12 h-12 rounded-full object-cover">
                                <!-- Initial Badge -->
                                <?php if (isset($testimonial['initial'])): ?>
                                    <div class="absolute -bottom-1 -right-1 bg-blue-500 text-white text-xs font-bold rounded-full w-6 h-6 flex items-center justify-center">
                                        <?php echo htmlspecialchars(substr($testimonial['initial'], 0, 1)); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="flex-1">
                                <div class="font-semibold text-slate-900 dark:text-white">
                                    <?php echo htmlspecialchars($testimonial['name']); ?>
                                </div>
                                <?php if (isset($testimonial['initial'])): ?>
                                    <div class="text-slate-600 dark:text-slate-400 text-sm">
                                        Verifizierter Kunde
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <!-- Helpful Counter -->
                        <?php if (isset($testimonial['helpful'])): ?>
                            <div class="flex items-center justify-between text-sm text-slate-500 dark:text-slate-400 border-t border-slate-200 dark:border-slate-700 pt-4">
                                <div class="flex items-center space-x-2">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                    </svg>
                                    <span><?php echo $testimonial['helpful']; ?> fanden dies hilfreich</span>
                                </div>
                                
                                <button class="flex items-center space-x-1 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                    </svg>
                                    <span>Hilfreich</span>
                                </button>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            
        </div>
        
        <!-- CTA Section -->
        <div class="mt-16 text-center">
            <div class="max-w-2xl mx-auto p-8 bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700">
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">
                    Werden Sie unser nächster zufriedener Kunde
                </h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    Schließen Sie sich über 10.000 zufriedenen Kunden an und erleben Sie selbst, warum wir so hoch bewertet werden.
                </p>
                <button class="inline-flex items-center px-8 py-4 bg-blue-600 text-white font-semibold rounded-2xl hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                    Jetzt kostenlos testen
                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </button>
            </div>
        </div>
        
    </div>
</section>
