<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?>">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            
            <!-- Header -->
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-white/20 dark:bg-black/20 backdrop-blur-sm rounded-full text-sm font-medium text-slate-700 dark:text-slate-300 mb-6">
                    <?php echo htmlspecialchars($headline); ?>
                </div>
                
                <?php if ($subheadline): ?>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 dark:text-slate-100 mb-6">
                        <?php echo htmlspecialchars($subheadline); ?>
                    </h2>
                <?php endif; ?>
                
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed max-w-3xl mx-auto">
                    <?php echo htmlspecialchars($description); ?>
                </p>
            </div>
            
            <!-- Bento Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12">
                <?php foreach ($bentoItems as $index => $item): ?>
                    <div class="<?php echo $sizeClasses[$item['size']] ?? $sizeClasses['medium']; ?> bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl p-6 hover:bg-white/80 dark:hover:bg-black/30 transition-all duration-300 shadow-lg hover:shadow-xl">
                        
                        <?php if ($item['type'] === 'stat'): ?>
                            <!-- Statistik Item -->
                            <div class="text-center h-full flex flex-col justify-center">
                                <?php if (isset($item['icon'])): ?>
                                    <div class="w-12 h-12 mx-auto mb-4 text-slate-700 dark:text-slate-300">
                                        <?php echo $iconMap[$item['icon']] ?? ''; ?>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-slate-100 mb-2">
                                    <?php echo htmlspecialchars($item['number']); ?>
                                </div>
                                
                                <div class="text-slate-600 dark:text-slate-400 font-medium text-sm">
                                    <?php echo htmlspecialchars($item['label']); ?>
                                </div>
                            </div>
                            
                        <?php elseif ($item['type'] === 'text'): ?>
                            <!-- Text Item -->
                            <div class="h-full flex flex-col">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100 mb-3">
                                    <?php echo htmlspecialchars($item['title']); ?>
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed flex-1">
                                    <?php echo htmlspecialchars($item['content']); ?>
                                </p>
                            </div>
                            
                        <?php elseif ($item['type'] === 'quote'): ?>
                            <!-- Quote Item -->
                            <div class="h-full flex flex-col justify-center relative">
                                <svg class="absolute top-2 left-2 w-8 h-8 text-slate-300 dark:text-slate-600 opacity-50" fill="currentColor" viewBox="0 0 32 32">
                                    <path d="M10 8c-3.3 0-6 2.7-6 6v10h6V14h-4c0-1.1.9-2 2-2s2 .9 2 2v2h4V14c0-3.3-2.7-6-6-6zm16 0c-3.3 0-6 2.7-6 6v10h6V14h-4c0-1.1.9-2 2-2s2 .9 2 2v2h4V14c0-3.3-2.7-6-6-6z"/>
                                </svg>
                                <blockquote class="text-slate-900 dark:text-slate-100 font-medium text-sm leading-relaxed pl-6">
                                    <?php echo htmlspecialchars($item['content']); ?>
                                </blockquote>
                            </div>
                            
                        <?php elseif ($item['type'] === 'value'): ?>
                            <!-- Value Item -->
                            <div class="h-full flex flex-col">
                                <?php if (isset($item['icon'])): ?>
                                    <div class="w-12 h-12 mb-4 text-slate-700 dark:text-slate-300">
                                        <?php echo $iconMap[$item['icon']] ?? ''; ?>
                                    </div>
                                <?php endif; ?>
                                
                                <h3 class="text-lg font-semibold text-slate-900 dark:text-slate-100 mb-3">
                                    <?php echo htmlspecialchars($item['title']); ?>
                                </h3>
                                
                                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed flex-1">
                                    <?php echo htmlspecialchars($item['content']); ?>
                                </p>
                            </div>
                            
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            
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
