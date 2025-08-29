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

        <!-- Testimonials Grid -->
        <div class="grid <?php echo $data['layout']; ?> gap-8 mb-16">
            <?php foreach ($data['testimonials'] as $testimonial): ?>
            <div class="group bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                
                <?php if ($data['style'] === 'cards'): ?>
                <!-- Card Style -->
                <div class="p-8">
                    <!-- Quote Icon -->
                    <div class="mb-6">
                        <svg class="w-10 h-10 text-primary-500 opacity-50" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    
                    <!-- Rating -->
                    <div class="flex items-center mb-4">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg class="w-5 h-5 <?php echo $i < $testimonial['rating'] ? 'text-yellow-400' : 'text-gray-300'; ?> fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <?php endfor; ?>
                    </div>
                    
                    <!-- Testimonial Text -->
                    <blockquote class="text-gray-700 text-lg leading-relaxed mb-6 italic">
                        "<?php echo htmlspecialchars($testimonial['text']); ?>"
                    </blockquote>
                    
                    <!-- Author Info -->
                    <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                                <img src="<?php echo htmlspecialchars($testimonial['avatar']); ?>" 
                                     alt="<?php echo htmlspecialchars($testimonial['author']); ?>"
                                     class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">
                                    <?php echo htmlspecialchars($testimonial['author']); ?>
                                </h4>
                                <p class="text-sm text-gray-600">
                                    <?php echo htmlspecialchars($testimonial['position']); ?>
                                </p>
                                <p class="text-sm text-primary-600 font-medium">
                                    <?php echo htmlspecialchars($testimonial['company']); ?>
                                </p>
                            </div>
                        </div>
                        
                        <!-- Company Logo (if available) -->
                        <?php if (isset($testimonial['companyLogo'])): ?>
                        <div class="w-16 h-8 opacity-60">
                            <img src="<?php echo htmlspecialchars($testimonial['companyLogo']); ?>" 
                                 alt="<?php echo htmlspecialchars($testimonial['company']); ?>"
                                 class="w-full h-full object-contain">
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <?php else: ?>
                <!-- Compact Style -->
                <div class="p-6">
                    <!-- Rating -->
                    <div class="flex items-center mb-3">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg class="w-4 h-4 <?php echo $i < $testimonial['rating'] ? 'text-yellow-400' : 'text-gray-300'; ?> fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <?php endfor; ?>
                    </div>
                    
                    <!-- Testimonial Text -->
                    <blockquote class="text-gray-700 leading-relaxed mb-4 italic text-sm">
                        "<?php echo htmlspecialchars($testimonial['text']); ?>"
                    </blockquote>
                    
                    <!-- Author Info -->
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full overflow-hidden mr-3">
                            <img src="<?php echo htmlspecialchars($testimonial['avatar']); ?>" 
                                 alt="<?php echo htmlspecialchars($testimonial['author']); ?>"
                                 class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 text-sm">
                                <?php echo htmlspecialchars($testimonial['author']); ?>
                            </h4>
                            <p class="text-xs text-gray-600">
                                <?php echo htmlspecialchars($testimonial['position']); ?>
                            </p>
                            <p class="text-xs text-primary-600 font-medium">
                                <?php echo htmlspecialchars($testimonial['company']); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Stats Section -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <div class="text-center p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
                <div class="text-4xl font-bold text-primary-600 mb-2">4.9/5</div>
                <div class="text-sm text-gray-600">Durchschnittsbewertung</div>
            </div>
            <div class="text-center p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
                <div class="text-4xl font-bold text-green-600 mb-2">10K+</div>
                <div class="text-sm text-gray-600">Zufriedene Kunden</div>
            </div>
            <div class="text-center p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
                <div class="text-4xl font-bold text-purple-600 mb-2">99%</div>
                <div class="text-sm text-gray-600">Weiterempfehlung</div>
            </div>
            <div class="text-center p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
                <div class="text-4xl font-bold text-orange-600 mb-2">24/7</div>
                <div class="text-sm text-gray-600">Support verfügbar</div>
            </div>
        </div>

        <!-- Trust Logos -->
        <div class="text-center mb-16">
            <p class="text-gray-500 text-sm mb-8">Vertraut von führenden Unternehmen</p>
            <div class="flex flex-wrap justify-center items-center gap-8 opacity-60">
                <?php 
                $logos = ['NovaTech', 'Optima', 'Artistry', 'Stellar', 'Vertex', 'BuildTech'];
                foreach ($logos as $logo): 
                ?>
                <div class="w-24 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
                    <span class="text-xs font-bold text-gray-500"><?php echo $logo; ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Bottom CTA -->
        <div class="text-center">
            <div class="bg-gradient-to-r from-primary-600 to-purple-600 rounded-3xl p-8 lg:p-12 text-white">
                <h3 class="text-3xl lg:text-4xl font-bold mb-4">
                    Werden Sie unser nächster Erfolg
                </h3>
                <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">
                    Schließen Sie sich über 10.000 zufriedenen Kunden an und erleben Sie den Unterschied selbst.
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
                        Live-Demo buchen
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
