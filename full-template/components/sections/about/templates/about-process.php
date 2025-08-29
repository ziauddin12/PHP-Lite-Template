<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?>">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            
            <!-- Header -->
            <div class="text-center mb-16">
                <?php if ($subheadline): ?>
                    <div class="inline-block px-4 py-2 bg-white/20 dark:bg-black/20 backdrop-blur-sm rounded-full text-sm font-medium text-slate-700 dark:text-slate-300 mb-6">
                        <?php echo htmlspecialchars($subheadline); ?>
                    </div>
                <?php endif; ?>
                
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 dark:text-slate-100 mb-6 leading-tight">
                    <?php echo htmlspecialchars($headline); ?>
                </h2>
                
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed max-w-3xl mx-auto">
                    <?php echo htmlspecialchars($description); ?>
                </p>
            </div>
            
            <?php if ($variant === 'benefits-checklist' && !empty($benefits)): ?>
                <!-- Benefits Checklist Layout -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    <?php foreach ($benefits as $benefit): ?>
                        <div class="flex items-start space-x-4 p-6 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl hover:bg-white/80 dark:hover:bg-black/30 transition-all duration-300">
                            <div class="flex-shrink-0 w-12 h-12 bg-green-100 dark:bg-green-900/30 rounded-xl flex items-center justify-center text-green-600 dark:text-green-400">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 dark:text-slate-100 mb-2">
                                    <?php echo htmlspecialchars($benefit['title']); ?>
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 text-sm">
                                    <?php echo htmlspecialchars($benefit['description']); ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
            <?php elseif ($variant === 'z-pattern-flow' && !empty($steps)): ?>
                <!-- Z-Pattern Flow Layout -->
                <div class="space-y-24 mb-16">
                    <?php foreach ($steps as $index => $step): ?>
                        <div class="grid lg:grid-cols-2 gap-16 items-center <?php echo ($index % 2 === 1) ? 'lg:grid-flow-col-dense' : ''; ?>">
                            
                            <!-- Content -->
                            <div class="<?php echo ($index % 2 === 1) ? 'lg:col-start-2' : ''; ?>">
                                <div class="inline-block px-4 py-2 bg-white/20 dark:bg-black/20 backdrop-blur-sm rounded-full text-sm font-medium text-slate-700 dark:text-slate-300 mb-4">
                                    Schritt <?php echo htmlspecialchars($step['number']); ?>
                                </div>
                                
                                <h3 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-slate-100 mb-4">
                                    <?php echo htmlspecialchars($step['title']); ?>
                                </h3>
                                
                                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                                    <?php echo htmlspecialchars($step['description']); ?>
                                </p>
                            </div>
                            
                            <!-- Icon/Visual -->
                            <div class="<?php echo ($index % 2 === 1) ? 'lg:col-start-1' : ''; ?>">
                                <div class="relative">
                                    <div class="w-32 h-32 mx-auto bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-3xl flex items-center justify-center text-slate-700 dark:text-slate-300 shadow-xl">
                                        <?php echo $iconMap[$step['icon']] ?? $iconMap['tools']; ?>
                                    </div>
                                    
                                    <!-- Step Number -->
                                    <div class="absolute -top-4 -right-4 w-16 h-16 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 rounded-2xl flex items-center justify-center font-bold text-lg shadow-lg">
                                        <?php echo htmlspecialchars($step['number']); ?>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    <?php endforeach; ?>
                </div>
                
            <?php else: ?>
                <!-- Standard Process Steps Layout -->
                <?php if (!empty($steps)): ?>
                    <div class="relative mb-16">
                        
                        <?php if (count($steps) <= 4): ?>
                            <!-- Horizontal Timeline for 4 or fewer steps -->
                            <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-1 bg-gradient-to-r from-slate-300 to-slate-400 dark:from-slate-600 dark:to-slate-500 transform -translate-y-1/2 z-0"></div>
                            
                            <div class="grid md:grid-cols-<?php echo count($steps); ?> gap-8 relative z-10">
                                <?php foreach ($steps as $index => $step): ?>
                                    <div class="text-center">
                                        <!-- Step Circle -->
                                        <div class="relative mb-6">
                                            <div class="w-20 h-20 mx-auto bg-white dark:bg-slate-800 border-4 border-slate-200 dark:border-slate-600 rounded-full flex items-center justify-center shadow-lg">
                                                <div class="w-12 h-12 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 rounded-full flex items-center justify-center text-lg font-bold">
                                                    <?php echo htmlspecialchars($step['number']); ?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Content -->
                                        <div class="p-6 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl">
                                            <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100 mb-3">
                                                <?php echo htmlspecialchars($step['title']); ?>
                                            </h3>
                                            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                                                <?php echo htmlspecialchars($step['description']); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            
                        <?php else: ?>
                            <!-- Vertical Timeline for 5+ steps -->
                            <div class="space-y-8">
                                <?php foreach ($steps as $index => $step): ?>
                                    <div class="flex items-start space-x-6">
                                        <!-- Step Number -->
                                        <div class="flex-shrink-0 w-16 h-16 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 rounded-2xl flex items-center justify-center font-bold text-lg shadow-lg">
                                            <?php echo htmlspecialchars($step['number']); ?>
                                        </div>
                                        
                                        <!-- Content -->
                                        <div class="flex-1 p-6 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl">
                                            <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100 mb-3">
                                                <?php echo htmlspecialchars($step['title']); ?>
                                            </h3>
                                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                                                <?php echo htmlspecialchars($step['description']); ?>
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <!-- Connector Line (except for last item) -->
                                    <?php if ($index < count($steps) - 1): ?>
                                        <div class="ml-8 w-1 h-8 bg-slate-300 dark:bg-slate-600"></div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            
            <!-- CTA Button -->
            <?php if ($ctaText): ?>
                <div class="text-center">
                    <button class="inline-flex items-center px-8 py-4 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 font-semibold rounded-2xl hover:bg-slate-800 dark:hover:bg-slate-200 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <?php echo htmlspecialchars($ctaText); ?>
                        <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </button>
                </div>
            <?php endif; ?>
            
        </div>
    </div>
</section>
