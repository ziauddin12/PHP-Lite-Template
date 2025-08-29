<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?>">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold <?php echo $textColor; ?> mb-6 leading-tight">
                    <?php echo htmlspecialchars($headline); ?>
                </h2>
                
                <p class="text-lg leading-relaxed max-w-3xl mx-auto opacity-80 <?php echo $textColor; ?>">
                    <?php echo htmlspecialchars($description); ?>
                </p>
            </div>
            
            <!-- Strengths Highlight -->
            <?php if ($strengthsHighlight): ?>
                <div class="text-center mb-12">
                    <div class="max-w-4xl mx-auto p-6 bg-white/50 dark:bg-slate-800/50 rounded-2xl backdrop-blur-sm border border-slate-200/50 dark:border-slate-700/50">
                        <p class="text-xl font-semibold <?php echo $textColor; ?> leading-relaxed">
                            <?php echo htmlspecialchars($strengthsHighlight); ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Masonry Benefits Grid -->
            <div class="columns-1 md:columns-2 lg:columns-3 gap-8 space-y-8">
                
                <?php foreach ($benefits as $benefit): ?>
                    <div class="break-inside-avoid mb-8">
                        <div class="p-6 bg-white/70 dark:bg-slate-800/70 rounded-2xl backdrop-blur-sm border border-slate-200/50 dark:border-slate-700/50 hover:bg-white/90 dark:hover:bg-slate-800/90 transition-all duration-300 shadow-lg hover:shadow-xl
                            <?php 
                            // Dynamische Höhen basierend auf size
                            switch($benefit['size']) {
                                case 'large':
                                    echo ' min-h-[320px]';
                                    break;
                                case 'small':
                                    echo ' min-h-[180px]';
                                    break;
                                default:
                                    echo ' min-h-[240px]';
                            }
                            
                            // Featured Styling
                            if (isset($benefit['featured']) && $benefit['featured']) {
                                echo ' ring-2 ring-blue-500/50 bg-gradient-to-br from-blue-50/50 to-purple-50/50 dark:from-blue-900/20 dark:to-purple-900/20';
                            }
                            ?>">
                            
                            <!-- Featured Badge -->
                            <?php if (isset($benefit['featured']) && $benefit['featured']): ?>
                                <div class="absolute -top-3 -right-3">
                                    <span class="inline-block px-3 py-1 bg-gradient-to-r from-blue-600 to-purple-600 text-white text-xs font-semibold rounded-full">
                                        Highlight
                                    </span>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Icon -->
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center text-white mb-6">
                                <?php echo $iconMap[$benefit['icon']] ?? $iconMap['target']; ?>
                            </div>
                            
                            <!-- Content -->
                            <h3 class="text-xl font-bold <?php echo $textColor; ?> mb-4">
                                <?php echo htmlspecialchars($benefit['title']); ?>
                            </h3>
                            
                            <p class="<?php echo $textColor; ?> opacity-80 leading-relaxed mb-4">
                                <?php echo htmlspecialchars($benefit['description']); ?>
                            </p>
                            
                            <!-- Stats (für highlighted-strengths Variante) -->
                            <?php if (isset($benefit['stats'])): ?>
                                <div class="flex flex-wrap gap-4 mt-4">
                                    <?php foreach ($benefit['stats'] as $stat): ?>
                                        <div class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 rounded-lg">
                                            <span class="text-sm font-bold text-blue-600 dark:text-blue-400">
                                                <?php echo htmlspecialchars($stat); ?>
                                            </span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                
            </div>
            
            <!-- CTA Button -->
            <div class="text-center mt-16">
                <button class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                    Ihre TOP-Ergebnisse starten
                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </button>
            </div>
            
        </div>
    </div>
</section>
