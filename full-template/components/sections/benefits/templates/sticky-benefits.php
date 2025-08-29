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
            
            <!-- Sticky Layout -->
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                
                <!-- Sticky Content -->
                <div class="lg:sticky lg:top-8">
                    <div class="p-8 bg-white/50 dark:bg-slate-800/50 rounded-2xl backdrop-blur-sm border border-slate-200/50 dark:border-slate-700/50">
                        <h3 class="text-2xl font-bold <?php echo $textColor; ?> mb-4">
                            <?php echo htmlspecialchars($stickyContent['title']); ?>
                        </h3>
                        
                        <p class="text-lg leading-relaxed opacity-80 <?php echo $textColor; ?> mb-6">
                            <?php echo htmlspecialchars($stickyContent['description']); ?>
                        </p>
                        
                        <!-- Dynamic Content based on variant -->
                        <?php if (isset($stickyContent['highlights'])): ?>
                            <div class="space-y-3">
                                <?php foreach ($stickyContent['highlights'] as $highlight): ?>
                                    <div class="flex items-center space-x-3">
                                        <svg class="h-5 w-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="<?php echo $textColor; ?> opacity-90"><?php echo htmlspecialchars($highlight); ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php if (isset($stickyContent['insights'])): ?>
                            <div class="space-y-4">
                                <?php foreach ($stickyContent['insights'] as $insight): ?>
                                    <div class="p-4 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
                                        <p class="<?php echo $textColor; ?> font-medium">
                                            💡 <?php echo htmlspecialchars($insight); ?>
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php if (isset($stickyContent['companyFacts'])): ?>
                            <div class="grid grid-cols-1 gap-4">
                                <?php foreach ($stickyContent['companyFacts'] as $fact): ?>
                                    <div class="p-3 bg-slate-100 dark:bg-slate-700 rounded-lg">
                                        <span class="<?php echo $textColor; ?> font-semibold">
                                            📊 <?php echo htmlspecialchars($fact); ?>
                                        </span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Benefits Content -->
                <div class="space-y-12">
                    <?php foreach ($benefits as $benefit): ?>
                        <div class="p-8 bg-white/70 dark:bg-slate-800/70 rounded-2xl backdrop-blur-sm border border-slate-200/50 dark:border-slate-700/50 hover:bg-white/90 dark:hover:bg-slate-800/90 transition-all duration-300">
                            
                            <!-- Icon & Title -->
                            <div class="flex items-start space-x-4 mb-6">
                                <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center text-white">
                                    <?php echo $iconMap[$benefit['icon']] ?? $iconMap['target']; ?>
                                </div>
                                
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold <?php echo $textColor; ?> mb-3">
                                        <?php echo htmlspecialchars($benefit['title']); ?>
                                    </h3>
                                    
                                    <p class="text-lg leading-relaxed <?php echo $textColor; ?> opacity-80">
                                        <?php echo htmlspecialchars($benefit['description']); ?>
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Features/Stats/Details -->
                            <?php if (isset($benefit['features'])): ?>
                                <div class="grid md:grid-cols-3 gap-4">
                                    <?php foreach ($benefit['features'] as $feature): ?>
                                        <div class="flex items-center space-x-2">
                                            <svg class="h-4 w-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-sm <?php echo $textColor; ?> opacity-80"><?php echo htmlspecialchars($feature); ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            
                            <?php if (isset($benefit['stats'])): ?>
                                <div class="flex flex-wrap gap-6 mt-4">
                                    <?php foreach ($benefit['stats'] as $stat): ?>
                                        <div class="text-center">
                                            <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">
                                                <?php echo htmlspecialchars($stat); ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            
                            <?php if (isset($benefit['details'])): ?>
                                <div class="mt-4 space-y-2">
                                    <?php foreach ($benefit['details'] as $detail): ?>
                                        <div class="flex items-center space-x-2">
                                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                                            <span class="text-sm <?php echo $textColor; ?> opacity-80"><?php echo htmlspecialchars($detail); ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                
            </div>
        </div>
    </div>
</section>
