<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?> <?php echo $backgroundImage ? 'bg-cover bg-center' : ''; ?>" <?php echo $backgroundImage ? 'style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(' . htmlspecialchars($backgroundImage) . ');"' : ''; ?>>
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            
            <?php if ($variant === 'feature-showcase' && $backgroundImage): ?>
                <!-- Feature Showcase with Background -->
                <div class="text-center text-white mb-16">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                        <?php echo htmlspecialchars($headline); ?>
                    </h2>
                    <p class="text-lg leading-relaxed max-w-3xl mx-auto text-white/90">
                        <?php echo htmlspecialchars($description); ?>
                    </p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <?php foreach ($showcaseItems as $item): ?>
                        <div class="text-center text-white p-8 bg-white/10 backdrop-blur-sm rounded-2xl">
                            <h3 class="text-xl font-semibold mb-4">
                                <?php echo htmlspecialchars($item['title']); ?>
                            </h3>
                            <p class="text-white/80 mb-4">
                                <?php echo htmlspecialchars($item['description']); ?>
                            </p>
                            <div class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium">
                                <?php echo htmlspecialchars($item['highlight']); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
            <?php elseif ($variant === 'sticky-features'): ?>
                <!-- Sticky Features Layout -->
                <div class="grid lg:grid-cols-2 gap-16 items-start">
                    
                    <!-- Sticky Product Info -->
                    <div class="lg:sticky lg:top-8">
                        <div class="p-8 bg-white/80 dark:bg-black/40 backdrop-blur-sm rounded-2xl">
                            <h2 class="text-2xl font-bold text-slate-900 dark:text-slate-100 mb-4">
                                <?php echo htmlspecialchars($headline); ?>
                            </h2>
                            
                            <p class="text-slate-600 dark:text-slate-400 mb-6">
                                <?php echo htmlspecialchars($description); ?>
                            </p>
                            
                            <?php if ($rating): ?>
                                <div class="flex items-center space-x-2 mb-6">
                                    <div class="flex items-center space-x-1">
                                        <?php for ($i = 1; $i <= 5; $i++): ?>
                                            <svg class="h-5 w-5 <?php echo $i <= floor($rating['score']) ? 'text-yellow-400 fill-current' : 'text-gray-300'; ?>" viewBox="0 0 24 24">
                                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                            </svg>
                                        <?php endfor; ?>
                                    </div>
                                    <span class="font-medium text-slate-900 dark:text-slate-100">
                                        <?php echo number_format($rating['score'], 1); ?> (<?php echo number_format($rating['reviewCount']); ?> Bewertungen)
                                    </span>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ($price): ?>
                                <div class="text-3xl font-bold text-slate-900 dark:text-slate-100 mb-6">
                                    <?php echo htmlspecialchars($price['amount']); ?><?php echo htmlspecialchars($price['currency']); ?>
                                </div>
                            <?php endif; ?>
                            
                            <button class="w-full inline-flex items-center justify-center px-8 py-4 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 font-semibold rounded-2xl hover:bg-slate-800 dark:hover:bg-slate-200 transition-all duration-300 shadow-lg hover:shadow-xl">
                                Jetzt kaufen
                                <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m1.6 8L5 3H3m4 10v6a1 1 0 001 1h10a1 1 0 001-1v-6m-12 0h12"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Scrolling Features -->
                    <div class="space-y-8">
                        <?php foreach ($features as $feature): ?>
                            <div class="p-8 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100 mb-3">
                                    <?php echo htmlspecialchars($feature['title']); ?>
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                                    <?php echo htmlspecialchars($feature['description']); ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
            <?php else: ?>
                <!-- Standard Layout -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 dark:text-slate-100 mb-6 leading-tight">
                        <?php echo htmlspecialchars($headline); ?>
                    </h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed max-w-3xl mx-auto">
                        <?php echo htmlspecialchars($description); ?>
                    </p>
                </div>
                
                <?php if ($variant === 'feature-grid'): ?>
                    <!-- Feature Grid -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <?php foreach ($features as $feature): ?>
                            <div class="text-center p-8 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl hover:bg-white/80 dark:hover:bg-black/30 transition-all duration-300">
                                <div class="w-16 h-16 mx-auto mb-6 text-slate-700 dark:text-slate-300 bg-white/80 dark:bg-black/40 rounded-2xl flex items-center justify-center">
                                    <?php echo $iconMap[$feature['icon']] ?? $iconMap['filter']; ?>
                                </div>
                                <h3 class="text-lg font-semibold text-slate-900 dark:text-slate-100 mb-3">
                                    <?php echo htmlspecialchars($feature['title']); ?>
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 text-sm">
                                    <?php echo htmlspecialchars($feature['description']); ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                <?php else: ?>
                    <!-- Benefit List -->
                    <div class="grid md:grid-cols-2 gap-8">
                        <?php foreach ($benefits as $benefit): ?>
                            <div class="flex items-start space-x-6 p-8 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl hover:bg-white/80 dark:hover:bg-black/30 transition-all duration-300">
                                <div class="flex-shrink-0 w-16 h-16 bg-white/80 dark:bg-black/40 rounded-2xl flex items-center justify-center text-slate-700 dark:text-slate-300">
                                    <?php echo $iconMap[$benefit['icon']] ?? $iconMap['health']; ?>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100 mb-3">
                                        <?php echo htmlspecialchars($benefit['title']); ?>
                                    </h3>
                                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                                        <?php echo htmlspecialchars($benefit['description']); ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            
        </div>
    </div>
</section>
