<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?>">
    <div class="container mx-auto px-4">
        <?php if ($variant === 'global-team' && $teamInfo): ?>
            <!-- Global Team Layout -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center space-x-2 px-4 py-2 bg-white/20 dark:bg-black/20 backdrop-blur-sm rounded-full text-sm font-medium mb-6">
                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                    <span><?php echo htmlspecialchars($teamInfo['size']); ?> • <?php echo htmlspecialchars($teamInfo['offices']); ?></span>
                </div>
                
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 dark:text-slate-100 mb-6">
                    <?php echo htmlspecialchars($headline); ?>
                </h2>
                
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed max-w-3xl mx-auto mb-12">
                    <?php echo htmlspecialchars($description); ?>
                </p>
            </div>
            
            <!-- Global Team Benefits Grid -->
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <?php foreach ($benefits as $benefit): ?>
                    <div class="text-center p-6 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl">
                        <div class="w-16 h-16 mx-auto mb-4 text-slate-700 dark:text-slate-300 bg-white/80 dark:bg-black/40 rounded-2xl flex items-center justify-center">
                            <?php echo $iconMap[$benefit['icon']] ?? $iconMap['users']; ?>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100 mb-2">
                            <?php echo htmlspecialchars($benefit['title']); ?>
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            <?php echo htmlspecialchars($benefit['description']); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
            
        <?php elseif ($variant === 'company-stats' && !empty($stats)): ?>
            <!-- Company Stats Layout -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 dark:text-slate-100 mb-6">
                    <?php echo htmlspecialchars($headline); ?>
                </h2>
                
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed max-w-3xl mx-auto mb-12">
                    <?php echo htmlspecialchars($description); ?>
                </p>
            </div>
            
            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
                <?php foreach ($stats as $stat): ?>
                    <div class="text-center p-6 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl">
                        <div class="text-4xl md:text-5xl font-bold text-slate-900 dark:text-slate-100 mb-2">
                            <?php echo htmlspecialchars($stat['number']); ?>
                        </div>
                        <div class="text-slate-600 dark:text-slate-400 font-medium">
                            <?php echo htmlspecialchars($stat['label']); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
        <?php else: ?>
            <!-- Standard Benefits Layout -->
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
                
                <!-- Benefits Grid -->
                <?php if (!empty($benefits)): ?>
                    <div class="grid md:grid-cols-<?php echo min(count($benefits), 3); ?> gap-8 mb-12">
                        <?php foreach ($benefits as $benefit): ?>
                            <div class="text-center p-8 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl hover:bg-white/80 dark:hover:bg-black/30 transition-all duration-300">
                                <div class="w-16 h-16 mx-auto mb-6 text-slate-700 dark:text-slate-300 bg-white/80 dark:bg-black/40 rounded-2xl flex items-center justify-center">
                                    <?php echo $iconMap[$benefit['icon']] ?? $iconMap['users']; ?>
                                </div>
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100 mb-3">
                                    <?php echo htmlspecialchars($benefit['title']); ?>
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                                    <?php echo htmlspecialchars($benefit['description']); ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
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
</section>
