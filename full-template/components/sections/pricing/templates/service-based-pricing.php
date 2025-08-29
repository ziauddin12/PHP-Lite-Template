<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?>">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 dark:text-slate-100 mb-6 leading-tight">
                    <?php echo htmlspecialchars($headline); ?>
                </h2>
                
                <?php if ($subheadline): ?>
                    <h3 class="text-xl md:text-2xl font-semibold text-slate-700 dark:text-slate-300 mb-6">
                        <?php echo htmlspecialchars($subheadline); ?>
                    </h3>
                <?php endif; ?>
                
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed max-w-3xl mx-auto">
                    <?php echo htmlspecialchars($description); ?>
                </p>
            </div>
            
            <!-- Services Grid -->
            <div class="grid md:grid-cols-<?php echo count($services) <= 2 ? count($services) : 3; ?> gap-8">
                
                <?php foreach ($services as $service): ?>
                    <div class="relative p-8 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-white/80 dark:hover:bg-black/30 <?php echo (isset($service['popular']) && $service['popular'] && $showPopularBadge) ? 'ring-2 ring-slate-900 dark:ring-slate-100' : ''; ?>">
                        
                        <!-- Popular Badge -->
                        <?php if (isset($service['popular']) && $service['popular'] && $showPopularBadge): ?>
                            <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                                <span class="inline-block px-4 py-2 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 text-sm font-semibold rounded-full">
                                    Beliebt
                                </span>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Service Header -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-slate-100 mb-3">
                                <?php echo htmlspecialchars($service['name']); ?>
                            </h3>
                            
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                                <?php echo htmlspecialchars($service['description']); ?>
                            </p>
                            
                            <?php if (isset($service['longDescription'])): ?>
                                <p class="text-slate-500 dark:text-slate-500 text-sm mt-3 leading-relaxed">
                                    <?php echo htmlspecialchars($service['longDescription']); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Price -->
                        <div class="mb-6">
                            <?php if (isset($service['customPricing']) && $service['customPricing']): ?>
                                <div class="text-3xl font-bold text-slate-900 dark:text-slate-100">
                                    <?php echo htmlspecialchars($service['price']); ?>
                                </div>
                            <?php else: ?>
                                <div class="flex items-baseline space-x-2">
                                    <span class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-slate-100">
                                        <?php echo is_numeric($service['price']) ? number_format($service['price'], 0, ',', '.') : htmlspecialchars($service['price']); ?><?php echo htmlspecialchars($service['currency']); ?>
                                    </span>
                                    <?php if (isset($service['period']) && !empty($service['period'])): ?>
                                        <span class="text-slate-600 dark:text-slate-400">
                                            <?php echo htmlspecialchars($service['period']); ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Additional Info -->
                            <?php if (isset($service['duration'])): ?>
                                <div class="text-sm text-slate-500 dark:text-slate-400 mt-2">
                                    Lieferzeit: <?php echo htmlspecialchars($service['duration']); ?>
                                </div>
                            <?php endif; ?>
                            
                            <?php if (isset($service['minUsers'])): ?>
                                <div class="text-sm text-slate-500 dark:text-slate-400 mt-2">
                                    <?php echo htmlspecialchars($service['minUsers']); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Features -->
                        <div class="mb-8">
                            <ul class="space-y-3">
                                <?php foreach ($service['features'] as $feature): ?>
                                    <li class="flex items-start space-x-3">
                                        <svg class="h-5 w-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-slate-700 dark:text-slate-300"><?php echo htmlspecialchars($feature); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <!-- CTA Button -->
                        <button class="w-full inline-flex items-center justify-center px-8 py-4 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 font-semibold rounded-2xl hover:bg-slate-800 dark:hover:bg-slate-200 transition-all duration-300 shadow-lg hover:shadow-xl">
                            <?php echo htmlspecialchars($service['ctaText']); ?>
                            <?php if (isset($service['customPricing']) && $service['customPricing']): ?>
                                <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            <?php else: ?>
                                <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            <?php endif; ?>
                        </button>
                    </div>
                <?php endforeach; ?>
                
            </div>
            
            <!-- Additional Info -->
            <?php if ($variant === 'service-packages'): ?>
                <div class="mt-16 text-center p-8 bg-white/80 dark:bg-black/40 backdrop-blur-sm rounded-2xl">
                    <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100 mb-4">
                        Haben Sie Fragen zu unseren Services?
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 mb-6">
                        Wir beraten Sie gerne kostenlos und unverbindlich zu Ihrem Projekt.
                    </p>
                    <button class="inline-flex items-center px-8 py-4 bg-white/60 dark:bg-black/20 text-slate-900 dark:text-slate-100 font-semibold rounded-2xl hover:bg-white/80 dark:hover:bg-black/30 transition-all duration-300 backdrop-blur-sm">
                        Kostenlose Beratung
                        <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </button>
                </div>
            <?php endif; ?>
            
            <?php if ($variant === 'enterprise-focused'): ?>
                <div class="mt-16 text-center">
                    <div class="inline-block p-6 bg-white/80 dark:bg-black/40 backdrop-blur-sm rounded-2xl">
                        <p class="text-slate-600 dark:text-slate-400 mb-2">
                            Alle Preise verstehen sich zzgl. der gesetzlichen MwSt.
                        </p>
                        <p class="text-sm text-slate-500 dark:text-slate-500">
                            Enterprise-Preise werden individuell kalkuliert
                        </p>
                    </div>
                </div>
            <?php endif; ?>
            
        </div>
    </div>
</section>
