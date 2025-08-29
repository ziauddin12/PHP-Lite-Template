<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?>">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            
            <!-- Header -->
            <div class="text-center mb-16">
                <?php if ($subheadline): ?>
                    <div class="mb-4">
                        <span class="inline-block px-4 py-2 bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 text-sm font-semibold rounded-full">
                            <?php echo htmlspecialchars($subheadline); ?>
                        </span>
                    </div>
                <?php endif; ?>
                
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 dark:text-slate-100 mb-6 leading-tight">
                    <?php echo htmlspecialchars($headline); ?>
                </h2>
                
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed max-w-3xl mx-auto">
                    <?php echo htmlspecialchars($description); ?>
                </p>
            </div>
            
            <?php if ($variant === 'starts-at-pricing' && $secondaryPlan): ?>
                <!-- Starts At Pricing with Two Plans -->
                <div class="grid md:grid-cols-2 gap-8 mb-16">
                    
                    <!-- Plan 1 -->
                    <div class="p-8 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-slate-100 mb-2">
                                <?php echo htmlspecialchars($plan['name']); ?>
                            </h3>
                            <div class="flex items-baseline justify-center space-x-2 mb-4">
                                <?php if (isset($plan['startsAt']) && $plan['startsAt']): ?>
                                    <span class="text-lg text-slate-600 dark:text-slate-400">ab</span>
                                <?php endif; ?>
                                <span class="text-4xl font-bold text-slate-900 dark:text-slate-100">
                                    <?php echo number_format($plan['price'], 0, ',', '.'); ?><?php echo htmlspecialchars($plan['currency']); ?>
                                </span>
                            </div>
                            <p class="text-slate-600 dark:text-slate-400">
                                <?php echo htmlspecialchars($plan['description']); ?>
                            </p>
                        </div>
                        
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
                        
                        <button class="w-full inline-flex items-center justify-center px-8 py-4 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 font-semibold rounded-2xl hover:bg-slate-800 dark:hover:bg-slate-200 transition-all duration-300 shadow-lg hover:shadow-xl">
                            <?php echo htmlspecialchars($plan['ctaText']); ?>
                            <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                    
                    <!-- Plan 2 -->
                    <div class="p-8 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-slate-100 mb-2">
                                <?php echo htmlspecialchars($secondaryPlan['name']); ?>
                            </h3>
                            <div class="flex items-baseline justify-center space-x-2 mb-4">
                                <?php if (isset($secondaryPlan['startsAt']) && $secondaryPlan['startsAt']): ?>
                                    <span class="text-lg text-slate-600 dark:text-slate-400">ab</span>
                                <?php endif; ?>
                                <span class="text-4xl font-bold text-slate-900 dark:text-slate-100">
                                    <?php echo number_format($secondaryPlan['price'], 0, ',', '.'); ?><?php echo htmlspecialchars($secondaryPlan['currency']); ?>
                                </span>
                            </div>
                            <p class="text-slate-600 dark:text-slate-400">
                                <?php echo htmlspecialchars($secondaryPlan['description']); ?>
                            </p>
                        </div>
                        
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
                        
                        <button class="w-full inline-flex items-center justify-center px-8 py-4 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 font-semibold rounded-2xl hover:bg-slate-800 dark:hover:bg-slate-200 transition-all duration-300 shadow-lg hover:shadow-xl">
                            <?php echo htmlspecialchars($secondaryPlan['ctaText']); ?>
                            <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Custom Solution Section -->
                <?php if ($customSolution): ?>
                    <div class="text-center p-8 bg-white/80 dark:bg-black/40 backdrop-blur-sm rounded-2xl">
                        <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100 mb-4">
                            <?php echo htmlspecialchars($customSolution['title']); ?>
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 mb-6">
                            <?php echo htmlspecialchars($customSolution['description']); ?>
                        </p>
                        <button class="inline-flex items-center px-8 py-4 bg-white/60 dark:bg-black/20 text-slate-900 dark:text-slate-100 font-semibold rounded-2xl hover:bg-white/80 dark:hover:bg-black/30 transition-all duration-300 backdrop-blur-sm">
                            <?php echo htmlspecialchars($customSolution['ctaText']); ?>
                            <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                        </button>
                    </div>
                <?php endif; ?>
                
            <?php elseif ($variant === 'custom-solution' && $customSolution): ?>
                <!-- Custom Solution Layout -->
                <div class="max-w-4xl mx-auto">
                    <div class="p-12 bg-white/80 dark:bg-black/40 backdrop-blur-sm rounded-2xl shadow-2xl text-center">
                        <h3 class="text-3xl font-bold text-slate-900 dark:text-slate-100 mb-6">
                            <?php echo htmlspecialchars($customSolution['title']); ?>
                        </h3>
                        
                        <p class="text-xl text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                            <?php echo htmlspecialchars($customSolution['description']); ?>
                        </p>
                        
                        <div class="grid md:grid-cols-2 gap-6 mb-8">
                            <?php foreach ($customSolution['features'] as $feature): ?>
                                <div class="flex items-center space-x-3 text-left">
                                    <svg class="h-6 w-6 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-slate-700 dark:text-slate-300"><?php echo htmlspecialchars($feature); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        
                        <button class="inline-flex items-center px-12 py-6 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 font-semibold text-lg rounded-2xl hover:bg-slate-800 dark:hover:bg-slate-200 transition-all duration-300 shadow-lg hover:shadow-xl mb-6">
                            <?php echo htmlspecialchars($customSolution['ctaText']); ?>
                            <svg class="ml-3 h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                        </button>
                        
                        <p class="text-slate-500 dark:text-slate-400 text-sm">
                            <?php echo htmlspecialchars($customSolution['contactInfo']); ?>
                        </p>
                    </div>
                </div>
                
            <?php else: ?>
                <!-- Single Plan Layouts -->
                <div class="max-w-2xl mx-auto">
                    <div class="p-8 bg-white/80 dark:bg-black/40 backdrop-blur-sm rounded-2xl shadow-2xl">
                        
                        <!-- Plan Name -->
                        <?php if (isset($plan['name'])): ?>
                            <div class="text-center mb-6">
                                <h3 class="text-2xl font-bold text-slate-900 dark:text-slate-100">
                                    <?php echo htmlspecialchars($plan['name']); ?>
                                </h3>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Price -->
                        <div class="text-center mb-8">
                            <div class="flex items-baseline justify-center space-x-2">
                                <span class="text-5xl md:text-6xl font-bold text-slate-900 dark:text-slate-100">
                                    <?php echo number_format($plan['price'], 0, ',', '.'); ?><?php echo htmlspecialchars($plan['currency']); ?>
                                </span>
                                <?php if (isset($plan['period'])): ?>
                                    <span class="text-xl text-slate-600 dark:text-slate-400">
                                        / <?php echo htmlspecialchars($plan['period']); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            
                            <?php if (isset($plan['setupFee'])): ?>
                                <div class="text-slate-500 dark:text-slate-400 mt-2">
                                    + <?php echo htmlspecialchars($plan['setupFee']); ?><?php echo htmlspecialchars($plan['currency']); ?> Einrichtungsgebühr
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Rating -->
                        <?php if (isset($plan['rating'])): ?>
                            <div class="text-center mb-8">
                                <div class="flex items-center justify-center space-x-2 mb-2">
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <svg class="h-5 w-5 <?php echo $i <= floor($plan['rating']['score']) ? 'text-yellow-400 fill-current' : 'text-gray-300'; ?>" viewBox="0 0 24 24">
                                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                        </svg>
                                    <?php endfor; ?>
                                </div>
                                <p class="text-slate-600 dark:text-slate-400">
                                    <?php echo htmlspecialchars($plan['rating']['score']); ?> von 5 Sternen (<?php echo htmlspecialchars($plan['rating']['reviews']); ?> Bewertungen)
                                </p>
                            </div>
                        <?php endif; ?>
                        
                        <!-- User Trust -->
                        <?php if (isset($plan['userTrust'])): ?>
                            <div class="text-center mb-8 p-4 bg-white/60 dark:bg-black/20 rounded-xl">
                                <p class="text-slate-700 dark:text-slate-300 font-medium">
                                    ✅ <?php echo htmlspecialchars($plan['userTrust']); ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Features -->
                        <div class="mb-8">
                            <ul class="space-y-4 text-left">
                                <?php foreach ($plan['features'] as $feature): ?>
                                    <li class="flex items-start space-x-3">
                                        <svg class="h-6 w-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-slate-700 dark:text-slate-300 text-lg"><?php echo htmlspecialchars($feature); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <!-- CTA Button -->
                        <div class="text-center mb-6">
                            <button class="inline-flex items-center px-12 py-6 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 font-semibold text-lg rounded-2xl hover:bg-slate-800 dark:hover:bg-slate-200 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <?php echo htmlspecialchars($plan['ctaText']); ?>
                                <svg class="ml-3 h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>
                        
                        <!-- Guarantee -->
                        <?php if (isset($plan['guarantee'])): ?>
                            <div class="text-center">
                                <div class="flex items-center justify-center space-x-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                    <span><?php echo htmlspecialchars($plan['guarantee']); ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            
        </div>
    </div>
</section>
