<section class="relative py-24 lg:py-32 <?php echo $data['bgClass']; ?>">
    <div class="max-w-6xl mx-auto px-4">
        
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 dark:text-white mb-6 leading-tight">
                <?php echo htmlspecialchars($data['title']); ?>
            </h2>
            
            <?php if (isset($data['subtitle'])): ?>
                <h3 class="text-xl md:text-2xl font-semibold text-slate-700 dark:text-slate-300 mb-6">
                    <?php echo htmlspecialchars($data['subtitle']); ?>
                </h3>
            <?php endif; ?>
            
            <p class="text-lg leading-relaxed max-w-3xl mx-auto text-slate-600 dark:text-slate-400">
                <?php echo htmlspecialchars($data['description']); ?>
            </p>
        </div>
        
        <!-- Stats Bar -->
        <?php if (isset($data['stats'])): ?>
            <div class="mb-16">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">
                            <?php echo htmlspecialchars($data['stats']['totalCustomers']); ?>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 font-medium">Zufriedene Kunden</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">
                            <?php echo number_format($data['stats']['averageRating'], 1); ?>★
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 font-medium">Durchschnittsbewertung</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">
                            <?php echo $data['stats']['countries']; ?>+
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 font-medium">Länder weltweit</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">
                            99%
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 font-medium">Weiterempfehlung</p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
        <!-- Testimonials Grid -->
        <div class="grid <?php echo $data['layout']; ?> gap-8">
            
            <?php foreach ($data['testimonials'] as $testimonial): ?>
                <div class="group <?php echo (isset($testimonial['featured']) && $testimonial['featured']) ? 'lg:col-span-3 lg:row-span-1' : ''; ?>">
                    
                    <?php if (isset($testimonial['featured']) && $testimonial['featured']): ?>
                        <!-- Featured Testimonial -->
                        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-2xl border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-3xl transition-all duration-300 p-8 md:p-12">
                            <div class="grid lg:grid-cols-2 gap-8 items-center">
                                
                                <!-- Content -->
                                <div>
                                    <!-- Quote Icon -->
                                    <div class="mb-6">
                                        <svg class="h-12 w-12 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                        </svg>
                                    </div>
                                    
                                    <!-- Stars -->
                                    <div class="flex items-center space-x-1 mb-6">
                                        <?php for ($i = 0; $i < 5; $i++): ?>
                                            <svg class="h-6 w-6 <?php echo $i < $testimonial['rating'] ? 'text-yellow-400 fill-current' : 'text-slate-300 dark:text-slate-600'; ?>" 
                                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                      d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
                                        <?php endfor; ?>
                                    </div>
                                    
                                    <!-- Text -->
                                    <blockquote class="text-xl md:text-2xl leading-relaxed text-slate-700 dark:text-slate-300 mb-8">
                                        "<?php echo htmlspecialchars($testimonial['text']); ?>"
                                    </blockquote>
                                    
                                    <!-- Results -->
                                    <?php if (isset($testimonial['results'])): ?>
                                        <div class="mb-8">
                                            <h4 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">Erzielte Ergebnisse:</h4>
                                            <ul class="space-y-2">
                                                <?php foreach ($testimonial['results'] as $result): ?>
                                                    <li class="flex items-center space-x-3">
                                                        <svg class="h-5 w-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>
                                                        <span class="text-slate-600 dark:text-slate-400"><?php echo htmlspecialchars($result); ?></span>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <!-- Author Info -->
                                    <div class="flex items-center space-x-4">
                                        <img src="<?php echo htmlspecialchars($testimonial['avatar']); ?>" 
                                             alt="<?php echo htmlspecialchars($testimonial['name']); ?>"
                                             class="w-16 h-16 rounded-full object-cover">
                                        <div>
                                            <div class="font-semibold text-slate-900 dark:text-white text-lg">
                                                <?php echo htmlspecialchars($testimonial['name']); ?>
                                            </div>
                                            <div class="text-slate-600 dark:text-slate-400">
                                                <?php echo htmlspecialchars($testimonial['position']); ?>
                                            </div>
                                            <div class="text-blue-600 dark:text-blue-400 font-medium">
                                                <?php echo htmlspecialchars($testimonial['company']); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Company Logo -->
                                <?php if (isset($testimonial['companyLogo'])): ?>
                                    <div class="text-center lg:text-right">
                                        <img src="<?php echo htmlspecialchars($testimonial['companyLogo']); ?>" 
                                             alt="<?php echo htmlspecialchars($testimonial['company']); ?>"
                                             class="h-20 mx-auto lg:ml-auto lg:mr-0 opacity-70 dark:opacity-50 filter grayscale hover:grayscale-0 transition-all duration-300">
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                    <?php else: ?>
                        <!-- Regular Testimonial -->
                        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-xl transition-all duration-300 p-6 h-full">
                            
                            <!-- Stars -->
                            <div class="flex items-center space-x-1 mb-4">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <svg class="h-5 w-5 <?php echo $i < $testimonial['rating'] ? 'text-yellow-400 fill-current' : 'text-slate-300 dark:text-slate-600'; ?>" 
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                    </svg>
                                <?php endfor; ?>
                            </div>
                            
                            <!-- Text -->
                            <blockquote class="text-lg leading-relaxed text-slate-700 dark:text-slate-300 mb-6">
                                "<?php echo htmlspecialchars($testimonial['text']); ?>"
                            </blockquote>
                            
                            <!-- Author Info -->
                            <div class="flex items-center space-x-4">
                                <img src="<?php echo htmlspecialchars($testimonial['avatar']); ?>" 
                                     alt="<?php echo htmlspecialchars($testimonial['name']); ?>"
                                     class="w-12 h-12 rounded-full object-cover">
                                <div class="flex-1">
                                    <div class="font-semibold text-slate-900 dark:text-white">
                                        <?php echo htmlspecialchars($testimonial['name']); ?>
                                    </div>
                                    <div class="text-slate-600 dark:text-slate-400 text-sm">
                                        <?php echo htmlspecialchars($testimonial['position']); ?>
                                    </div>
                                    <div class="text-blue-600 dark:text-blue-400 text-sm font-medium">
                                        <?php echo htmlspecialchars($testimonial['company']); ?>
                                    </div>
                                </div>
                                
                                <!-- Company Logo -->
                                <?php if (isset($testimonial['companyLogo'])): ?>
                                    <img src="<?php echo htmlspecialchars($testimonial['companyLogo']); ?>" 
                                         alt="<?php echo htmlspecialchars($testimonial['company']); ?>"
                                         class="h-8 opacity-70 dark:opacity-50 filter grayscale hover:grayscale-0 transition-all duration-300">
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                </div>
            <?php endforeach; ?>
            
        </div>
        
        <!-- Trust Indicators -->
        <div class="mt-16 text-center">
            <div class="max-w-4xl mx-auto p-8 bg-white/50 dark:bg-slate-800/50 rounded-2xl backdrop-blur-sm border border-slate-200/50 dark:border-slate-700/50">
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">
                    Vertrauen Sie auf bewährte Qualität
                </h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    Schließen Sie sich tausenden zufriedener Kunden an, die bereits von unseren Lösungen profitieren.
                </p>
                <button class="inline-flex items-center px-8 py-4 bg-blue-600 text-white font-semibold rounded-2xl hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                    Jetzt starten
                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </button>
            </div>
        </div>
        
    </div>
</section>
