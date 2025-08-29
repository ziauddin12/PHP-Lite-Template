<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?> <?php echo $backgroundImage ? 'bg-cover bg-center' : ''; ?>" <?php echo $backgroundImage ? 'style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(' . htmlspecialchars($backgroundImage) . ');"' : ''; ?>>
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            
            <?php if ($variant === 'strategy-session' && $backgroundImage): ?>
                <!-- Strategy Session with Background Image -->
                <div class="text-center text-white">
                    <?php if ($badge): ?>
                        <div class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium mb-6">
                            <?php echo htmlspecialchars($badge); ?>
                        </div>
                    <?php endif; ?>
                    
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                        <?php echo htmlspecialchars($headline); ?>
                    </h2>
                    
                    <p class="text-lg leading-relaxed max-w-3xl mx-auto mb-12 text-white/90">
                        <?php echo htmlspecialchars($description); ?>
                    </p>
                    
                    <!-- Features Grid -->
                    <div class="grid md:grid-cols-3 gap-8 mb-12">
                        <?php foreach ($features as $feature): ?>
                            <div class="text-center p-6 bg-white/10 backdrop-blur-sm rounded-2xl">
                                <div class="w-12 h-12 mx-auto mb-4 text-white">
                                    <?php echo $iconMap[$feature['icon']] ?? $iconMap['star']; ?>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">
                                    <?php echo htmlspecialchars($feature['title']); ?>
                                </h3>
                                <p class="text-sm text-white/80">
                                    <?php echo htmlspecialchars($feature['description']); ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <!-- Price and CTA -->
                    <div class="text-center">
                        <div class="text-4xl font-bold mb-4">
                            <?php echo htmlspecialchars($price['amount']); ?><?php echo htmlspecialchars($price['currency']); ?>
                        </div>
                        
                        <div class="space-x-4">
                            <button class="inline-flex items-center px-8 py-4 bg-white text-slate-900 font-semibold rounded-2xl hover:bg-slate-100 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <?php echo htmlspecialchars($ctaButton['text']); ?>
                                <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                            
                            <?php if ($secondaryButton): ?>
                                <button class="inline-flex items-center px-8 py-4 bg-white/20 text-white font-semibold rounded-2xl hover:bg-white/30 transition-all duration-300 backdrop-blur-sm">
                                    <?php echo htmlspecialchars($secondaryButton['text']); ?>
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
            <?php else: ?>
                <!-- Standard Product Showcase Layout -->
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    
                    <!-- Content -->
                    <div class="<?php echo ($variant === 'agency-service') ? 'lg:order-2' : ''; ?>">
                        <?php if ($badge): ?>
                            <div class="inline-block px-4 py-2 <?php echo $urgency ? 'bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-400 animate-pulse' : 'bg-white/20 dark:bg-black/20 text-slate-700 dark:text-slate-300'; ?> backdrop-blur-sm rounded-full text-sm font-medium mb-6">
                                <?php echo htmlspecialchars($badge); ?>
                            </div>
                        <?php endif; ?>
                        
                        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 dark:text-slate-100 mb-6 leading-tight">
                            <?php echo htmlspecialchars($headline); ?>
                        </h2>
                        
                        <?php if ($subheadline): ?>
                            <h3 class="text-xl text-slate-600 dark:text-slate-400 mb-6">
                                <?php echo htmlspecialchars($subheadline); ?>
                            </h3>
                        <?php endif; ?>
                        
                        <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                            <?php echo htmlspecialchars($description); ?>
                        </p>
                        
                        <!-- Rating -->
                        <?php if ($rating): ?>
                            <div class="flex items-center space-x-4 mb-8">
                                <div class="flex items-center space-x-1">
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <svg class="h-5 w-5 <?php echo $i <= floor($rating['score']) ? 'text-yellow-400 fill-current' : 'text-gray-300 dark:text-gray-600'; ?>" viewBox="0 0 24 24">
                                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                        </svg>
                                    <?php endfor; ?>
                                </div>
                                <span class="text-slate-600 dark:text-slate-400 font-medium">
                                    <?php echo number_format($rating['score'], 1); ?> (<?php echo number_format($rating['reviewCount']); ?> Bewertungen)
                                </span>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Price -->
                        <div class="mb-8">
                            <div class="flex items-baseline space-x-2">
                                <?php if (isset($price['originalPrice'])): ?>
                                    <span class="text-2xl text-slate-400 dark:text-slate-500 line-through">
                                        <?php echo htmlspecialchars($price['originalPrice']); ?><?php echo htmlspecialchars($price['currency']); ?>
                                    </span>
                                <?php endif; ?>
                                <span class="text-4xl md:text-5xl font-bold text-slate-900 dark:text-slate-100">
                                    <?php echo htmlspecialchars($price['amount']); ?><?php echo htmlspecialchars($price['currency']); ?>
                                </span>
                                <?php if (isset($price['period'])): ?>
                                    <span class="text-slate-600 dark:text-slate-400">
                                        / <?php echo htmlspecialchars($price['period']); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <!-- Social Proof -->
                        <?php if ($socialProof): ?>
                            <div class="mb-8 p-4 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-xl">
                                <p class="text-slate-700 dark:text-slate-300 font-medium">
                                    ✅ <?php echo htmlspecialchars($socialProof); ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4 mb-8">
                            <button class="inline-flex items-center justify-center px-8 py-4 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 font-semibold rounded-2xl hover:bg-slate-800 dark:hover:bg-slate-200 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <?php echo htmlspecialchars($ctaButton['text']); ?>
                                <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                            
                            <?php if ($secondaryButton): ?>
                                <button class="inline-flex items-center justify-center px-8 py-4 bg-white/60 dark:bg-black/20 text-slate-900 dark:text-slate-100 font-semibold rounded-2xl hover:bg-white/80 dark:hover:bg-black/30 transition-all duration-300 backdrop-blur-sm">
                                    <?php echo htmlspecialchars($secondaryButton['text']); ?>
                                </button>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Guarantee -->
                        <?php if ($guarantee): ?>
                            <div class="flex items-center space-x-2 text-slate-600 dark:text-slate-400 text-sm">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                                <span><?php echo htmlspecialchars($guarantee); ?></span>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Benefits List -->
                        <?php if (!empty($benefits)): ?>
                            <div class="mt-6">
                                <ul class="space-y-2">
                                    <?php foreach ($benefits as $benefit): ?>
                                        <li class="flex items-center space-x-2 text-slate-600 dark:text-slate-400">
                                            <svg class="h-5 w-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span><?php echo htmlspecialchars($benefit); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <!-- Features -->
                    <div class="<?php echo ($variant === 'agency-service') ? 'lg:order-1' : ''; ?>">
                        <div class="grid gap-6">
                            <?php foreach ($features as $feature): ?>
                                <div class="flex items-start space-x-4 p-6 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl hover:bg-white/80 dark:hover:bg-black/30 transition-all duration-300">
                                    <div class="flex-shrink-0 w-12 h-12 bg-slate-100 dark:bg-slate-800 rounded-xl flex items-center justify-center text-slate-700 dark:text-slate-300">
                                        <?php echo $iconMap[$feature['icon']] ?? $iconMap['star']; ?>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-slate-900 dark:text-slate-100 mb-2">
                                            <?php echo htmlspecialchars($feature['title']); ?>
                                        </h3>
                                        <p class="text-slate-600 dark:text-slate-400">
                                            <?php echo htmlspecialchars($feature['description']); ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                </div>
            <?php endif; ?>
            
        </div>
    </div>
</section>
