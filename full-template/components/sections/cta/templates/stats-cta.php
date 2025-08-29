<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?> <?php echo $textColor; ?>">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                    <?php echo htmlspecialchars($headline); ?>
                </h2>
                
                <p class="text-lg leading-relaxed max-w-3xl mx-auto opacity-90">
                    <?php echo htmlspecialchars($description); ?>
                </p>
            </div>
            
            <!-- Stats Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <?php foreach ($stats as $stat): ?>
                    <div class="text-center p-6 bg-white/10 backdrop-blur-sm rounded-2xl hover:bg-white/20 transition-all duration-300">
                        <div class="w-16 h-16 bg-white/20 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                            <?php echo $iconMap[$stat['icon']] ?? $iconMap['target']; ?>
                        </div>
                        
                        <div class="text-3xl md:text-4xl font-bold mb-2">
                            <?php echo htmlspecialchars($stat['number']); ?>
                        </div>
                        
                        <p class="opacity-90 text-sm font-medium">
                            <?php echo htmlspecialchars($stat['label']); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Testimonial -->
            <?php if ($testimonial): ?>
                <div class="text-center mb-12">
                    <div class="max-w-2xl mx-auto p-6 bg-white/10 backdrop-blur-sm rounded-2xl">
                        <p class="text-lg italic opacity-90">
                            <?php echo htmlspecialchars($testimonial); ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Achievements -->
            <?php if (!empty($achievements)): ?>
                <div class="text-center mb-12">
                    <h3 class="text-xl font-semibold mb-6 opacity-90">Unsere Auszeichnungen:</h3>
                    <div class="flex flex-wrap justify-center gap-4">
                        <?php foreach ($achievements as $achievement): ?>
                            <div class="px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium opacity-90">
                                🏆 <?php echo htmlspecialchars($achievement); ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- CTA Buttons -->
            <div class="text-center">
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
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
            </div>
            
        </div>
    </div>
</section>
