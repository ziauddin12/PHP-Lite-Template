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
            
            <!-- Features Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <?php foreach ($features as $feature): ?>
                    <div class="group p-8 bg-white/70 dark:bg-slate-800/70 rounded-2xl backdrop-blur-sm border border-slate-200/50 dark:border-slate-700/50 hover:bg-white/90 dark:hover:bg-slate-800/90 transition-all duration-300 shadow-lg hover:shadow-xl">
                        
                        <!-- Icon & Highlight Badge -->
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300">
                                <?php echo $iconMap[$feature['icon']] ?? $iconMap['star']; ?>
                            </div>
                            
                            <?php if (isset($feature['highlight'])): ?>
                                <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 text-xs font-semibold rounded-full">
                                    <?php echo htmlspecialchars($feature['highlight']); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Content -->
                        <h3 class="text-xl font-bold <?php echo $textColor; ?> mb-4 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300">
                            <?php echo htmlspecialchars($feature['title']); ?>
                        </h3>
                        
                        <p class="<?php echo $textColor; ?> opacity-80 leading-relaxed mb-6">
                            <?php echo htmlspecialchars($feature['description']); ?>
                        </p>
                        
                        <!-- Stats (für service-highlights Variante) -->
                        <?php if (isset($feature['stats'])): ?>
                            <div class="pt-4 border-t border-slate-200/50 dark:border-slate-700/50">
                                <div class="flex flex-wrap gap-3">
                                    <?php foreach ($feature['stats'] as $stat): ?>
                                        <span class="px-3 py-1 bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 text-sm font-medium rounded-full">
                                            <?php echo htmlspecialchars($stat); ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
                
            </div>
            
            <!-- Call to Action -->
            <div class="text-center mt-16">
                <div class="max-w-2xl mx-auto p-8 bg-white/50 dark:bg-slate-800/50 rounded-2xl backdrop-blur-sm border border-slate-200/50 dark:border-slate-700/50">
                    <h3 class="text-2xl font-bold <?php echo $textColor; ?> mb-4">
                        <?php echo $variant === 'service-highlights' ? 'Bereit für erstklassigen Service?' : 'Überzeugt von unseren Fakten?'; ?>
                    </h3>
                    <p class="<?php echo $textColor; ?> opacity-80 mb-6">
                        <?php echo $variant === 'service-highlights' ? 'Lassen Sie uns gemeinsam Ihre Ziele erreichen.' : 'Kontaktieren Sie uns und erleben Sie die Vorteile selbst.'; ?>
                    </p>
                    <button class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <?php echo $variant === 'service-highlights' ? 'Service anfragen' : 'Jetzt kontaktieren'; ?>
                        <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
        </div>
    </div>
</section>
