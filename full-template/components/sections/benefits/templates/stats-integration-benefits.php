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
            
            <!-- Stats Grid -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <?php foreach ($stats as $stat): ?>
                    <div class="text-center p-6 bg-white/70 dark:bg-slate-800/70 rounded-2xl backdrop-blur-sm border border-slate-200/50 dark:border-slate-700/50 hover:bg-white/90 dark:hover:bg-slate-800/90 transition-all duration-300">
                        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center text-white">
                            <?php echo $iconMap[$stat['icon']] ?? $iconMap['target']; ?>
                        </div>
                        
                        <div class="text-3xl md:text-4xl font-bold <?php echo $textColor; ?> mb-2">
                            <?php echo htmlspecialchars($stat['number']); ?>
                        </div>
                        
                        <p class="text-sm font-medium <?php echo $textColor; ?> opacity-80">
                            <?php echo htmlspecialchars($stat['label']); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Feature List (für measurable-impact Variante) -->
            <?php if (!empty($featureList)): ?>
                <div class="mb-16">
                    <div class="max-w-4xl mx-auto">
                        <div class="grid md:grid-cols-2 gap-6">
                            <?php foreach ($featureList as $feature): ?>
                                <div class="flex items-start space-x-4 p-6 bg-white/70 dark:bg-slate-800/70 rounded-xl backdrop-blur-sm border border-slate-200/50 dark:border-slate-700/50">
                                    <div class="flex-shrink-0 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mt-1">
                                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="<?php echo $textColor; ?> leading-relaxed">
                                        <?php echo htmlspecialchars($feature); ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Benefits Grid -->
            <div class="grid md:grid-cols-<?php echo count($benefits) <= 2 ? count($benefits) : 3; ?> gap-8">
                <?php foreach ($benefits as $benefit): ?>
                    <div class="p-8 bg-white/70 dark:bg-slate-800/70 rounded-2xl backdrop-blur-sm border border-slate-200/50 dark:border-slate-700/50 hover:bg-white/90 dark:hover:bg-slate-800/90 transition-all duration-300">
                        
                        <!-- Icon -->
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center text-white mb-6">
                            <?php echo $iconMap[$benefit['icon']] ?? $iconMap['target']; ?>
                        </div>
                        
                        <!-- Content -->
                        <h3 class="text-xl font-bold <?php echo $textColor; ?> mb-4">
                            <?php echo htmlspecialchars($benefit['title']); ?>
                        </h3>
                        
                        <p class="<?php echo $textColor; ?> opacity-80 leading-relaxed">
                            <?php echo htmlspecialchars($benefit['description']); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Call to Action -->
            <div class="text-center mt-16">
                <div class="max-w-2xl mx-auto p-8 bg-white/50 dark:bg-slate-800/50 rounded-2xl backdrop-blur-sm border border-slate-200/50 dark:border-slate-700/50">
                    <h3 class="text-2xl font-bold <?php echo $textColor; ?> mb-4">
                        Bereit für messbare Ergebnisse?
                    </h3>
                    <p class="<?php echo $textColor; ?> opacity-80 mb-6">
                        Lassen Sie uns gemeinsam Ihre Geschäftsziele erreichen.
                    </p>
                    <button class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Jetzt starten
                        <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
        </div>
    </div>
</section>
