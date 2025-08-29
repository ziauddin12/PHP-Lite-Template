<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?>">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 dark:text-slate-100 mb-6 leading-tight">
                    <?php echo htmlspecialchars($headline); ?>
                </h2>
                
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed max-w-3xl mx-auto mb-8">
                    <?php echo htmlspecialchars($description); ?>
                </p>
                
                <?php if ($totalDuration): ?>
                    <div class="inline-block px-4 py-2 bg-white/20 dark:bg-black/20 backdrop-blur-sm rounded-full text-sm font-medium text-slate-700 dark:text-slate-300 mb-4">
                        <?php echo htmlspecialchars($totalDuration); ?>
                    </div>
                <?php endif; ?>
            </div>
            
            <?php if ($variant === 'bonus-content' && !empty($bonusItems)): ?>
                <!-- Bonus Content Layout -->
                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <?php foreach ($bonusItems as $item): ?>
                        <div class="p-8 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl hover:bg-white/80 dark:hover:bg-black/30 transition-all duration-300">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-yellow-100 dark:bg-yellow-900/30 rounded-xl flex items-center justify-center text-yellow-600 dark:text-yellow-400">
                                    <?php echo $iconMap[$item['icon']] ?? $iconMap['play']; ?>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2">
                                        <h3 class="text-lg font-semibold text-slate-900 dark:text-slate-100">
                                            <?php echo htmlspecialchars($item['title']); ?>
                                        </h3>
                                        <span class="text-sm font-medium text-green-600 dark:text-green-400 bg-green-100 dark:bg-green-900/30 px-2 py-1 rounded-full">
                                            Wert: <?php echo htmlspecialchars($item['value']); ?>
                                        </span>
                                    </div>
                                    <p class="text-slate-600 dark:text-slate-400">
                                        <?php echo htmlspecialchars($item['description']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <?php if ($totalValue): ?>
                    <div class="text-center p-8 bg-white/80 dark:bg-black/40 backdrop-blur-sm rounded-2xl mb-12">
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-slate-100 mb-2">
                            Gesamtwert aller Boni: <?php echo htmlspecialchars($totalValue); ?>
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Kostenlos bei Buchung des Kurses enthalten!
                        </p>
                    </div>
                <?php endif; ?>
                
            <?php elseif ($variant === 'course-features' && !empty($features)): ?>
                <!-- Course Features Layout -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    <?php foreach ($features as $feature): ?>
                        <div class="flex items-center space-x-3 p-4 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-xl">
                            <div class="flex-shrink-0 w-6 h-6 text-green-500">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-slate-900 dark:text-slate-100 font-medium">
                                <?php echo htmlspecialchars($feature); ?>
                            </span>
                        </div>
                    <?php endforeach; ?>
                </div>
                
            <?php else: ?>
                <!-- Modules/Services Layout -->
                <div class="grid gap-6 mb-12">
                    <?php foreach ($modules as $index => $module): ?>
                        <div class="flex items-start space-x-6 p-8 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl hover:bg-white/80 dark:hover:bg-black/30 transition-all duration-300">
                            
                            <!-- Module Number/Icon -->
                            <div class="flex-shrink-0">
                                <?php if ($variant === 'service-overview'): ?>
                                    <div class="w-16 h-16 bg-slate-100 dark:bg-slate-800 rounded-2xl flex items-center justify-center text-slate-700 dark:text-slate-300">
                                        <?php echo $iconMap[$module['icon']] ?? $iconMap['play']; ?>
                                    </div>
                                <?php else: ?>
                                    <div class="w-16 h-16 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 rounded-2xl flex items-center justify-center font-bold text-lg">
                                        <?php echo htmlspecialchars($module['number']); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Module Content -->
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-3">
                                    <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100">
                                        <?php echo htmlspecialchars($module['title']); ?>
                                    </h3>
                                    <?php if (isset($module['duration'])): ?>
                                        <span class="text-sm text-slate-500 dark:text-slate-400 bg-slate-100 dark:bg-slate-700 px-3 py-1 rounded-full">
                                            <?php echo htmlspecialchars($module['duration']); ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                
                                <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                                    <?php echo htmlspecialchars($module['description']); ?>
                                </p>
                            </div>
                            
                            <!-- Play/Action Button -->
                            <?php if ($variant === 'course-modules'): ?>
                                <div class="flex-shrink-0">
                                    <button class="w-12 h-12 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 rounded-full flex items-center justify-center hover:scale-105 transition-transform duration-200">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.586a1 1 0 01.707.293L12 11l.707-.707A1 1 0 0113.414 10H15M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            <?php endif; ?>
                            
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            
            <!-- Bonus Content List -->
            <?php if (!empty($bonusContent)): ?>
                <div class="p-8 bg-white/80 dark:bg-black/40 backdrop-blur-sm rounded-2xl mb-12">
                    <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100 mb-6 text-center">
                        🎁 Kostenlose Bonus-Inhalte
                    </h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <?php foreach ($bonusContent as $bonus): ?>
                            <div class="flex items-center space-x-2 text-slate-600 dark:text-slate-400">
                                <svg class="h-5 w-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><?php echo htmlspecialchars($bonus); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Price and CTA -->
            <?php if ($price): ?>
                <div class="text-center">
                    <div class="inline-block p-8 bg-white/80 dark:bg-black/40 backdrop-blur-sm rounded-2xl mb-8">
                        <div class="text-4xl md:text-5xl font-bold text-slate-900 dark:text-slate-100 mb-2">
                            <?php echo htmlspecialchars($price['amount']); ?><?php echo htmlspecialchars($price['currency']); ?>
                        </div>
                        <?php if ($guarantee): ?>
                            <div class="flex items-center justify-center space-x-2 text-slate-600 dark:text-slate-400">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                                <span><?php echo htmlspecialchars($guarantee); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <button class="inline-flex items-center px-8 py-4 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 font-semibold rounded-2xl hover:bg-slate-800 dark:hover:bg-slate-200 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Jetzt starten
                        <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </button>
                </div>
            <?php endif; ?>
            
        </div>
    </div>
</section>
