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
            
            <p class="text-lg leading-relaxed max-w-4xl mx-auto text-slate-600 dark:text-slate-400">
                <?php echo htmlspecialchars($data['description']); ?>
            </p>
            
            <!-- Overall Rating -->
            <?php if (isset($data['overallRating']) && isset($data['totalReviews'])): ?>
                <div class="flex items-center justify-center space-x-4 mt-8">
                    <div class="flex items-center space-x-1">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                            <svg class="h-6 w-6 <?php echo $i < floor($data['overallRating']) ? 'text-yellow-400 fill-current' : 'text-slate-300 dark:text-slate-600'; ?>" 
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                        <?php endfor; ?>
                    </div>
                    <span class="text-2xl font-bold text-slate-900 dark:text-white">
                        <?php echo number_format($data['overallRating'], 1); ?>
                    </span>
                    <span class="text-slate-600 dark:text-slate-400">
                        (<?php echo $data['totalReviews']; ?> Bewertungen)
                    </span>
                </div>
            <?php endif; ?>
        </div>
        
        <!-- Masonry Grid -->
        <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6">
            
            <?php foreach ($data['testimonials'] as $testimonial): ?>
                <?php
                $sizeClasses = [
                    'small' => 'break-inside-avoid',
                    'medium' => 'break-inside-avoid',
                    'large' => 'break-inside-avoid'
                ];
                $sizeClass = $sizeClasses[$testimonial['size']] ?? 'break-inside-avoid';
                ?>
                
                <div class="<?php echo $sizeClass; ?> mb-6">
                    <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-2xl transition-all duration-300 p-6 <?php echo (isset($testimonial['featured']) && $testimonial['featured']) ? 'ring-2 ring-blue-500 ring-opacity-50' : ''; ?>">
                        
                        <!-- Featured Badge -->
                        <?php if (isset($testimonial['featured']) && $testimonial['featured']): ?>
                            <div class="absolute top-4 right-4">
                                <div class="bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400 px-3 py-1 rounded-full text-sm font-medium">
                                    Empfohlen
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Quote Icon -->
                        <div class="mb-4">
                            <svg class="h-8 w-8 text-blue-500 opacity-60" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                            </svg>
                        </div>
                        
                        <!-- Stars -->
                        <div class="flex items-center space-x-1 mb-4">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="h-4 w-4 <?php echo $i < $testimonial['rating'] ? 'text-yellow-400 fill-current' : 'text-slate-300 dark:text-slate-600'; ?>" 
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                            <?php endfor; ?>
                        </div>
                        
                        <!-- Testimonial Text -->
                        <blockquote class="<?php echo ($testimonial['size'] === 'small') ? 'text-base' : (($testimonial['size'] === 'large') ? 'text-lg' : 'text-base'); ?> leading-relaxed text-slate-700 dark:text-slate-300 mb-6">
                            "<?php echo htmlspecialchars($testimonial['text']); ?>"
                        </blockquote>
                        
                        <!-- Author Info -->
                        <div class="flex items-center space-x-3 mb-4">
                            <img src="<?php echo htmlspecialchars($testimonial['avatar']); ?>" 
                                 alt="<?php echo htmlspecialchars($testimonial['name']); ?>"
                                 class="w-10 h-10 rounded-full object-cover">
                            <div class="flex-1">
                                <div class="font-semibold text-slate-900 dark:text-white text-sm">
                                    <?php echo htmlspecialchars($testimonial['name']); ?>
                                </div>
                                <div class="text-slate-600 dark:text-slate-400 text-xs">
                                    <?php echo htmlspecialchars($testimonial['position']); ?>
                                </div>
                                <div class="text-blue-600 dark:text-blue-400 text-xs font-medium">
                                    <?php echo htmlspecialchars($testimonial['company']); ?>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Company Logo -->
                        <?php if (isset($testimonial['companyLogo'])): ?>
                            <div class="flex justify-end">
                                <img src="<?php echo htmlspecialchars($testimonial['companyLogo']); ?>" 
                                     alt="<?php echo htmlspecialchars($testimonial['company']); ?>"
                                     class="h-6 opacity-50 dark:opacity-30 filter grayscale hover:grayscale-0 transition-all duration-300">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            
        </div>
        
        <!-- Bottom CTA -->
        <div class="mt-16 text-center">
            <div class="max-w-2xl mx-auto p-8 bg-slate-50 dark:bg-slate-800/50 rounded-2xl border border-slate-200 dark:border-slate-700">
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">
                    Überzeugen Sie sich selbst
                </h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    Schließen Sie sich über 500 zufriedenen Kunden an und erleben Sie selbst, warum wir so hoch bewertet werden.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-xl hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Kostenlos testen
                        <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </button>
                    <button class="inline-flex items-center px-6 py-3 bg-white dark:bg-slate-700 text-slate-900 dark:text-white font-semibold rounded-xl border border-slate-300 dark:border-slate-600 hover:bg-slate-50 dark:hover:bg-slate-600 transition-all duration-300">
                        Alle Bewertungen
                        <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
    </div>
</section>
