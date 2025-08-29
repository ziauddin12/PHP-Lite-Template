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
            
            <?php if ($secondaryPlan): ?>
                <!-- Two Plans Layout -->
                <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    
                    <!-- Plan 1 -->
                    <div class="relative p-8 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <?php if (isset($plan['name'])): ?>
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-slate-100 mb-4">
                                <?php echo htmlspecialchars($plan['name']); ?>
                            </h3>
                        <?php endif; ?>
                        
                        <!-- Price -->
                        <div class="mb-6">
                            <div class="flex items-baseline space-x-2">
                                <span class="text-4xl md:text-5xl font-bold text-slate-900 dark:text-slate-100">
                                    <?php echo number_format($plan['price'], 0, ',', '.'); ?><?php echo htmlspecialchars($plan['currency']); ?>
                                </span>
                                <?php if (isset($plan['period'])): ?>
                                    <span class="text-slate-600 dark:text-slate-400">
                                        / <?php echo htmlspecialchars($plan['period']); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            
                            <?php if (isset($plan['setupFee'])): ?>
                                <div class="text-sm text-slate-500 dark:text-slate-400 mt-2">
                                    + <?php echo htmlspecialchars($plan['setupFee']); ?><?php echo htmlspecialchars($plan['currency']); ?> Einrichtungsgebühr
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Features -->
                        <div class="mb-8">
                            <ul class="space-y-3">
                                <?php foreach ($plan['features'] as $feature): ?>
                                    <li class="flex items-center space-x-3">
                                        <svg class="h-5 w-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-slate-700 dark:text-slate-300"><?php echo htmlspecialchars($feature); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <!-- CTA Button -->
                        <button class="w-full inline-flex items-center justify-center px-8 py-4 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 font-semibold rounded-2xl hover:bg-slate-800 dark:hover:bg-slate-200 transition-all duration-300 shadow-lg hover:shadow-xl">
                            <?php echo htmlspecialchars($plan['ctaText']); ?>
                            <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                        
                        <!-- Guarantee -->
                        <?php if (isset($plan['guarantee'])): ?>
                            <div class="flex items-center justify-center space-x-2 text-slate-600 dark:text-slate-400 text-sm mt-4">
                                <svg class="h-4 w-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                                <span><?php echo htmlspecialchars($plan['guarantee']); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <!-- Plan 2 -->
                    <div class="relative p-8 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 <?php echo (isset($secondaryPlan['popular']) && $secondaryPlan['popular']) ? 'ring-2 ring-slate-900 dark:ring-slate-100' : ''; ?>">
                        
                        <!-- Popular Badge -->
                        <?php if (isset($secondaryPlan['popular']) && $secondaryPlan['popular']): ?>
                            <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                                <span class="inline-block px-4 py-2 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 text-sm font-semibold rounded-full">
                                    Beliebt
                                </span>
                            </div>
                        <?php endif; ?>
                        
                        <?php if (isset($secondaryPlan['name'])): ?>
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-slate-100 mb-4">
                                <?php echo htmlspecialchars($secondaryPlan['name']); ?>
                            </h3>
                        <?php endif; ?>
                        
                        <!-- Price -->
                        <div class="mb-6">
                            <div class="flex items-baseline space-x-2">
                                <span class="text-4xl md:text-5xl font-bold text-slate-900 dark:text-slate-100">
                                    <?php echo number_format($secondaryPlan['price'], 0, ',', '.'); ?><?php echo htmlspecialchars($secondaryPlan['currency']); ?>
                                </span>
                                <?php if (isset($secondaryPlan['period'])): ?>
                                    <span class="text-slate-600 dark:text-slate-400">
                                        / <?php echo htmlspecialchars($secondaryPlan['period']); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            
                            <?php if (isset($secondaryPlan['setupFee'])): ?>
                                <div class="text-sm text-slate-500 dark:text-slate-400 mt-2">
                                    + <?php echo htmlspecialchars($secondaryPlan['setupFee']); ?><?php echo htmlspecialchars($secondaryPlan['currency']); ?> Einrichtungsgebühr
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Features -->
                        <div class="mb-8">
                            <ul class="space-y-3">
                                <?php foreach ($secondaryPlan['features'] as $feature): ?>
                                    <li class="flex items-center space-x-3">
                                        <svg class="h-5 w-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-slate-700 dark:text-slate-300"><?php echo htmlspecialchars($feature); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <!-- CTA Button -->
                        <button class="w-full inline-flex items-center justify-center px-8 py-4 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 font-semibold rounded-2xl hover:bg-slate-800 dark:hover:bg-slate-200 transition-all duration-300 shadow-lg hover:shadow-xl">
                            <?php echo htmlspecialchars($secondaryPlan['ctaText']); ?>
                            <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                        
                        <!-- Guarantee -->
                        <?php if (isset($secondaryPlan['guarantee'])): ?>
                            <div class="flex items-center justify-center space-x-2 text-slate-600 dark:text-slate-400 text-sm mt-4">
                                <svg class="h-4 w-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                                <span><?php echo htmlspecialchars($secondaryPlan['guarantee']); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                </div>
                
            <?php else: ?>
                <!-- Single Plan Layout -->
                <div class="max-w-2xl mx-auto">
                    <div class="p-8 bg-white/80 dark:bg-black/40 backdrop-blur-sm rounded-2xl shadow-2xl text-center">
                        
                        <!-- Price -->
                        <div class="mb-8">
                            <div class="flex items-baseline justify-center space-x-2">
                                <span class="text-5xl md:text-6xl font-bold text-slate-900 dark:text-slate-100">
                                    <?php echo number_format($plan['price'], 0, ',', '.'); ?><?php echo htmlspecialchars($plan['currency']); ?>
                                </span>
                                <?php if (isset($plan['period'])): ?>
                                    <span class="text-xl text-slate-600 dark:text-slate-400">
                                        <?php echo htmlspecialchars($plan['period']); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <!-- Features -->
                        <div class="mb-8">
                            <ul class="space-y-4 text-left max-w-md mx-auto">
                                <?php foreach ($plan['features'] as $feature): ?>
                                    <li class="flex items-center space-x-3">
                                        <svg class="h-6 w-6 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-slate-700 dark:text-slate-300 text-lg"><?php echo htmlspecialchars($feature); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <!-- CTA Button -->
                        <button class="inline-flex items-center px-12 py-6 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 font-semibold text-lg rounded-2xl hover:bg-slate-800 dark:hover:bg-slate-200 transition-all duration-300 shadow-lg hover:shadow-xl">
                            <?php echo htmlspecialchars($plan['ctaText']); ?>
                            <svg class="ml-3 h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                        
                        <!-- Guarantee -->
                        <?php if (isset($plan['guarantee'])): ?>
                            <div class="flex items-center justify-center space-x-2 text-slate-600 dark:text-slate-400 mt-6">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                                <span><?php echo htmlspecialchars($plan['guarantee']); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Trust Badges -->
            <?php if ($showTrustBadge && !empty($trustLogos)): ?>
                <div class="mt-16 text-center">
                    <p class="text-slate-600 dark:text-slate-400 mb-6">Vertraut von Hunderten von Unternehmen:</p>
                    <div class="flex flex-wrap justify-center items-center gap-8">
                        <?php foreach ($trustLogos as $logo): ?>
                            <div class="px-6 py-3 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-xl">
                                <span class="text-slate-700 dark:text-slate-300 font-medium"><?php echo htmlspecialchars($logo); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
            
        </div>
    </div>
</section>
