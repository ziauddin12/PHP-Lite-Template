<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?> <?php echo $textColor; ?>">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            
            <!-- Header -->
            <div class="text-center mb-12">
                <?php if ($subheadline): ?>
                    <div class="mb-4">
                        <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm text-sm font-semibold rounded-full">
                            <?php echo htmlspecialchars($subheadline); ?>
                        </span>
                    </div>
                <?php endif; ?>
                
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                    <?php echo htmlspecialchars($headline); ?>
                </h2>
                
                <p class="text-lg leading-relaxed opacity-90">
                    <?php echo htmlspecialchars($description); ?>
                </p>
            </div>
            
            <?php if ($variant === 'phone-contact' && $contactPerson): ?>
                <!-- Phone Contact Layout -->
                <div class="text-center">
                    <div class="inline-block p-8 bg-white/10 backdrop-blur-sm rounded-2xl mb-8">
                        <div class="w-20 h-20 bg-white/20 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        
                        <h3 class="text-xl font-semibold mb-2">
                            <?php echo htmlspecialchars($contactPerson['name']); ?>
                        </h3>
                        
                        <p class="opacity-90 mb-4">
                            <?php echo htmlspecialchars($contactPerson['position']); ?>
                        </p>
                        
                        <div class="space-y-2">
                            <p class="font-semibold">
                                📞 <?php echo htmlspecialchars($contactPerson['phone']); ?>
                            </p>
                            <?php if (isset($contactPerson['email'])): ?>
                                <p class="opacity-90">
                                    ✉️ <?php echo htmlspecialchars($contactPerson['email']); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        
                        <?php if ($availability): ?>
                            <p class="text-sm opacity-80 mt-4">
                                <?php echo htmlspecialchars($availability); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="tel:<?php echo htmlspecialchars($contactPerson['phone']); ?>" 
                           class="inline-flex items-center px-8 py-4 bg-white text-slate-900 font-semibold rounded-2xl hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl">
                            <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <?php echo htmlspecialchars($ctaText); ?>
                        </a>
                        
                        <?php if ($secondaryCtaText && isset($contactPerson['email'])): ?>
                            <a href="mailto:<?php echo htmlspecialchars($contactPerson['email']); ?>" 
                               class="inline-flex items-center px-8 py-4 bg-white/20 backdrop-blur-sm font-semibold rounded-2xl hover:bg-white/30 transition-all duration-300">
                                <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <?php echo htmlspecialchars($secondaryCtaText); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                
            <?php elseif ($variant === 'country-form' && $showCountrySelector): ?>
                <!-- Country Form Layout -->
                <div class="max-w-2xl mx-auto">
                    <div class="p-8 bg-white/10 backdrop-blur-sm rounded-2xl">
                        <form class="space-y-6">
                            <div>
                                <label class="block text-sm font-semibold mb-2">Land auswählen:</label>
                                <select class="w-full p-4 bg-white/20 backdrop-blur-sm rounded-xl border-2 border-transparent focus:border-white/50 transition-all duration-200 text-white">
                                    <option value="">Bitte wählen...</option>
                                    <?php foreach ($countries as $country): ?>
                                        <option value="<?php echo htmlspecialchars($country['code']); ?>" class="text-slate-900">
                                            <?php echo htmlspecialchars($country['name']); ?> (<?php echo htmlspecialchars($country['phone']); ?>)
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold mb-2">Name:</label>
                                    <input type="text" class="w-full p-4 bg-white/20 backdrop-blur-sm rounded-xl border-2 border-transparent focus:border-white/50 transition-all duration-200 placeholder-white/60" placeholder="Ihr Name">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold mb-2">E-Mail:</label>
                                    <input type="email" class="w-full p-4 bg-white/20 backdrop-blur-sm rounded-xl border-2 border-transparent focus:border-white/50 transition-all duration-200 placeholder-white/60" placeholder="ihre@email.de">
                                </div>
                            </div>
                            
                            <button type="submit" class="w-full inline-flex items-center justify-center px-8 py-4 bg-white text-slate-900 font-semibold rounded-2xl hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <?php echo htmlspecialchars($ctaText); ?>
                                <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                
            <?php elseif ($variant === 'multi-contact'): ?>
                <!-- Multi Contact Layout -->
                <div class="grid md:grid-cols-3 gap-6">
                    <?php foreach ($contactOptions as $option): ?>
                        <div class="p-6 bg-white/10 backdrop-blur-sm rounded-2xl hover:bg-white/20 transition-all duration-300 text-center">
                            <div class="w-16 h-16 bg-white/20 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                                <?php if ($option['icon'] === 'phone'): ?>
                                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                <?php elseif ($option['icon'] === 'support'): ?>
                                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                <?php else: ?>
                                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                <?php endif; ?>
                            </div>
                            
                            <h3 class="text-lg font-semibold mb-3">
                                <?php echo htmlspecialchars($option['label']); ?>
                            </h3>
                            
                            <p class="opacity-90 mb-4 text-sm">
                                <?php echo htmlspecialchars($option['value']); ?>
                            </p>
                            
                            <a href="<?php echo $option['type'] === 'phone' ? 'tel:' : 'mailto:'; ?><?php echo htmlspecialchars($option['value']); ?>" 
                               class="inline-flex items-center px-6 py-3 bg-white text-slate-900 font-semibold rounded-xl hover:bg-gray-100 transition-all duration-300">
                                Kontakt
                                <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                
            <?php elseif ($variant === 'contact-form'): ?>
                <!-- Contact Form Layout -->
                <div class="max-w-2xl mx-auto">
                    <div class="p-8 bg-white/10 backdrop-blur-sm rounded-2xl">
                        <form class="space-y-6">
                            <?php foreach ($formFields as $field): ?>
                                <div>
                                    <label class="block text-sm font-semibold mb-2">
                                        <?php echo htmlspecialchars($field['label']); ?>
                                        <?php if ($field['required']): ?>
                                            <span class="text-red-300">*</span>
                                        <?php endif; ?>
                                    </label>
                                    
                                    <?php if ($field['type'] === 'textarea'): ?>
                                        <textarea name="<?php echo htmlspecialchars($field['name']); ?>" 
                                                  rows="4" 
                                                  class="w-full p-4 bg-white/20 backdrop-blur-sm rounded-xl border-2 border-transparent focus:border-white/50 transition-all duration-200 placeholder-white/60 resize-none" 
                                                  placeholder="<?php echo htmlspecialchars($field['label']); ?>" 
                                                  <?php echo $field['required'] ? 'required' : ''; ?>></textarea>
                                    <?php else: ?>
                                        <input type="<?php echo htmlspecialchars($field['type']); ?>" 
                                               name="<?php echo htmlspecialchars($field['name']); ?>" 
                                               class="w-full p-4 bg-white/20 backdrop-blur-sm rounded-xl border-2 border-transparent focus:border-white/50 transition-all duration-200 placeholder-white/60" 
                                               placeholder="<?php echo htmlspecialchars($field['label']); ?>" 
                                               <?php echo $field['required'] ? 'required' : ''; ?>>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                            
                            <button type="submit" class="w-full inline-flex items-center justify-center px-8 py-4 bg-white text-slate-900 font-semibold rounded-2xl hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <?php echo htmlspecialchars($ctaText); ?>
                                <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                            </button>
                            
                            <?php if ($responseTime): ?>
                                <p class="text-center text-sm opacity-80">
                                    ⏱️ <?php echo htmlspecialchars($responseTime); ?>
                                </p>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            <?php endif; ?>
            
        </div>
    </div>
</section>
