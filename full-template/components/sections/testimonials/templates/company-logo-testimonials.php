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
        
        <!-- Company Logos Banner -->
        <div class="mb-16">
            <p class="text-center text-slate-600 dark:text-slate-400 mb-8 font-medium">
                Vertrauen von über 100+ führenden Unternehmen
            </p>
            <div class="flex items-center justify-center space-x-8 md:space-x-12 opacity-60 dark:opacity-40">
                <?php foreach (array_slice($data['testimonials'], 0, 5) as $testimonial): ?>
                    <img src="<?php echo htmlspecialchars($testimonial['companyLogo']); ?>" 
                         alt="<?php echo htmlspecialchars($testimonial['company']); ?>"
                         class="h-12 md:h-16 filter grayscale hover:grayscale-0 transition-all duration-300">
                <?php endforeach; ?>
            </div>
        </div>
        
        <!-- Testimonials Grid -->
        <div class="grid <?php echo $data['layout']; ?> gap-8">
            
            <?php foreach ($data['testimonials'] as $testimonial): ?>
                <div class="group">
                    <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-2xl transition-all duration-300 p-8 h-full relative">
                        
                        <!-- Quote Icon -->
                        <div class="absolute top-6 right-6 opacity-20">
                            <svg class="h-12 w-12 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                            </svg>
                        </div>
                        
                        <!-- Company Logo -->
                        <div class="mb-6">
                            <img src="<?php echo htmlspecialchars($testimonial['companyLogo']); ?>" 
                                 alt="<?php echo htmlspecialchars($testimonial['company']); ?>"
                                 class="h-12 filter grayscale hover:grayscale-0 transition-all duration-300">
                        </div>
                        
                        <!-- Stars -->
                        <div class="flex items-center space-x-1 mb-6">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="h-5 w-5 <?php echo $i < $testimonial['rating'] ? 'text-yellow-400 fill-current' : 'text-slate-300 dark:text-slate-600'; ?>" 
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                            <?php endfor; ?>
                        </div>
                        
                        <!-- Testimonial Text -->
                        <blockquote class="text-lg leading-relaxed text-slate-700 dark:text-slate-300 mb-8">
                            "<?php echo htmlspecialchars($testimonial['text']); ?>"
                        </blockquote>
                        
                        <!-- Author Info -->
                        <div class="flex items-center space-x-4">
                            <img src="<?php echo htmlspecialchars($testimonial['avatar']); ?>" 
                                 alt="<?php echo htmlspecialchars($testimonial['name']); ?>"
                                 class="w-14 h-14 rounded-full object-cover">
                            <div class="flex-1">
                                <div class="font-semibold text-slate-900 dark:text-white text-lg">
                                    <?php echo htmlspecialchars($testimonial['name']); ?>
                                </div>
                                <div class="text-slate-600 dark:text-slate-400">
                                    <?php echo htmlspecialchars($testimonial['position']); ?>
                                </div>
                                <div class="flex items-center space-x-2 mt-1">
                                    <div class="text-blue-600 dark:text-blue-400 font-medium">
                                        <?php echo htmlspecialchars($testimonial['company']); ?>
                                    </div>
                                    <?php if (isset($testimonial['industry'])): ?>
                                        <span class="text-slate-400 dark:text-slate-500">•</span>
                                        <div class="text-slate-500 dark:text-slate-400 text-sm">
                                            <?php echo htmlspecialchars($testimonial['industry']); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            
        </div>
        
        <!-- Trust Metrics -->
        <div class="mt-16">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">
                        100+
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 font-medium">Partnerunternehmen</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">
                        4.9★
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 font-medium">Durchschnittsbewertung</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">
                        98%
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 font-medium">Kundenzufriedenheit</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">
                        15+
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 font-medium">Branchen</p>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="mt-16 text-center">
            <div class="max-w-2xl mx-auto p-8 bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700">
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">
                    Werden Sie unser nächster Erfolgspartner
                </h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    Schließen Sie sich führenden Unternehmen an, die bereits auf unsere Expertise vertrauen.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="inline-flex items-center px-8 py-4 bg-blue-600 text-white font-semibold rounded-2xl hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Kostenlose Beratung
                        <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </button>
                    <button class="inline-flex items-center px-8 py-4 bg-white dark:bg-slate-700 text-slate-900 dark:text-white font-semibold rounded-2xl border border-slate-300 dark:border-slate-600 hover:bg-slate-50 dark:hover:bg-slate-600 transition-all duration-300">
                        Referenzen ansehen
                        <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
    </div>
</section>
