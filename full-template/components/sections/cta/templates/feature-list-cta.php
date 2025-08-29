<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?> <?php echo $textColor; ?>">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <!-- Content -->
                <div class="text-center lg:text-left">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                        <?php echo htmlspecialchars($headline); ?>
                    </h2>
                    
                    <p class="text-lg leading-relaxed mb-8 opacity-90">
                        <?php echo htmlspecialchars($description); ?>
                    </p>
                    
                    <!-- Price -->
                    <?php if ($price): ?>
                        <div class="mb-8">
                            <div class="flex items-baseline justify-center lg:justify-start space-x-2">
                                <span class="text-4xl md:text-5xl font-bold">
                                    <?php echo htmlspecialchars($price['amount']); ?><?php echo htmlspecialchars($price['currency']); ?>
                                </span>
                                <?php if (isset($price['period'])): ?>
                                    <span class="text-xl opacity-80">
                                        <?php echo htmlspecialchars($price['period']); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
                        <button class="inline-flex items-center px-8 py-4 bg-white text-slate-900 font-semibold rounded-2xl hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl">
                            <?php echo htmlspecialchars($ctaText); ?>
                            <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                        
                        <?php if ($secondaryCtaText): ?>
                            <button class="inline-flex items-center px-8 py-4 bg-white/20 backdrop-blur-sm font-semibold rounded-2xl hover:bg-white/30 transition-all duration-300">
                                <?php echo htmlspecialchars($secondaryCtaText); ?>
                            </button>
                        <?php endif; ?>
                    </div>
                    
                    <!-- Guarantee -->
                    <?php if ($guarantee): ?>
                        <div class="flex items-center justify-center lg:justify-start space-x-2 opacity-90 mb-6">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <span class="text-sm"><?php echo htmlspecialchars($guarantee); ?></span>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Social Proof -->
                    <?php if ($socialProof): ?>
                        <div class="text-center lg:text-left">
                            <p class="opacity-90">
                                ✅ <?php echo htmlspecialchars($socialProof); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Features -->
                <div class="<?php echo count($features) > 4 ? 'grid md:grid-cols-2 gap-6' : 'space-y-6'; ?>">
                    <?php foreach ($features as $feature): ?>
                        <div class="flex items-start space-x-4 p-6 bg-white/10 backdrop-blur-sm rounded-2xl hover:bg-white/20 transition-all duration-300">
                            <div class="flex-shrink-0 w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                                <?php echo $iconMap[$feature['icon']] ?? $iconMap['check']; ?>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-2">
                                    <?php echo htmlspecialchars($feature['title']); ?>
                                </h3>
                                <p class="opacity-80 text-sm">
                                    <?php echo htmlspecialchars($feature['description']); ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
            </div>
        </div>
    </div>
</section>
