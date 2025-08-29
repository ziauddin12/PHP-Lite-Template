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
            
            <?php if ($variant === 'problem-solver'): ?>
                <!-- Problem-Solution Layout -->
                
                <!-- Problem-Solution Comparison -->
                <?php if ($problemSolution): ?>
                    <div class="grid lg:grid-cols-2 gap-12 mb-16">
                        <!-- Problem -->
                        <div class="p-8 bg-red-100/70 dark:bg-red-900/20 rounded-2xl border-l-4 border-red-500">
                            <h3 class="text-2xl font-bold text-red-700 dark:text-red-300 mb-4">
                                ❌ Das Problem
                            </h3>
                            <p class="text-lg <?php echo $textColor; ?> opacity-90 leading-relaxed">
                                <?php echo htmlspecialchars($problemSolution['problem']); ?>
                            </p>
                        </div>
                        
                        <!-- Solution -->
                        <div class="p-8 bg-green-100/70 dark:bg-green-900/20 rounded-2xl border-l-4 border-green-500">
                            <h3 class="text-2xl font-bold text-green-700 dark:text-green-300 mb-4">
                                ✅ Unsere Lösung
                            </h3>
                            <p class="text-lg <?php echo $textColor; ?> opacity-90 leading-relaxed mb-6">
                                <?php echo htmlspecialchars($problemSolution['solution']); ?>
                            </p>
                            
                            <!-- Benefits -->
                            <div class="flex flex-wrap gap-3">
                                <?php foreach ($problemSolution['benefits'] as $benefit): ?>
                                    <span class="px-4 py-2 bg-green-200 dark:bg-green-800 text-green-800 dark:text-green-200 rounded-full text-sm font-semibold">
                                        <?php echo htmlspecialchars($benefit); ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                
                <!-- Features List -->
                <?php if (!empty($features)): ?>
                    <div class="mb-16">
                        <h3 class="text-2xl font-bold <?php echo $textColor; ?> text-center mb-12">
                            Warum unsere Lösung revolutionär ist:
                        </h3>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <?php foreach ($features as $feature): ?>
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
                <?php endif; ?>
                
            <?php elseif ($variant === 'application-process'): ?>
                <!-- Application Process Layout -->
                
                <!-- Steps -->
                <?php if (!empty($steps)): ?>
                    <div class="mb-16">
                        <div class="space-y-12">
                            <?php foreach ($steps as $step): ?>
                                <div class="flex flex-col lg:flex-row items-start lg:items-center gap-8">
                                    
                                    <!-- Step Number & Icon -->
                                    <div class="flex-shrink-0">
                                        <div class="w-24 h-24 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex flex-col items-center justify-center text-white shadow-lg">
                                            <div class="text-2xl font-bold mb-1">
                                                <?php echo $step['stepNumber']; ?>
                                            </div>
                                            <?php echo $iconMap[$step['icon']] ?? $iconMap['user-check']; ?>
                                        </div>
                                    </div>
                                    
                                    <!-- Content -->
                                    <div class="flex-1">
                                        <div class="p-8 bg-white/70 dark:bg-slate-800/70 rounded-2xl backdrop-blur-sm border border-slate-200/50 dark:border-slate-700/50">
                                            <h3 class="text-2xl font-bold <?php echo $textColor; ?> mb-4">
                                                <?php echo htmlspecialchars($step['title']); ?>
                                            </h3>
                                            
                                            <p class="text-lg <?php echo $textColor; ?> opacity-80 leading-relaxed mb-6">
                                                <?php echo htmlspecialchars($step['description']); ?>
                                            </p>
                                            
                                            <!-- Details -->
                                            <?php if (isset($step['details'])): ?>
                                                <div class="flex flex-wrap gap-3">
                                                    <?php foreach ($step['details'] as $detail): ?>
                                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                                                            <?php echo htmlspecialchars($detail); ?>
                                                        </span>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Connection Arrow (except for last step) -->
                                <?php if ($step !== end($steps)): ?>
                                    <div class="flex justify-center my-8">
                                        <svg class="h-12 w-12 <?php echo $textColor; ?> opacity-40 transform rotate-90 lg:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                        </svg>
                                    </div>
                                <?php endif; ?>
                                
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                
                <!-- Additional Info -->
                <?php if (!empty($additionalInfo)): ?>
                    <div class="text-center">
                        <div class="max-w-2xl mx-auto p-8 bg-white/50 dark:bg-slate-800/50 rounded-2xl backdrop-blur-sm border border-slate-200/50 dark:border-slate-700/50">
                            <h3 class="text-xl font-bold <?php echo $textColor; ?> mb-6">
                                Weitere Informationen:
                            </h3>
                            <div class="space-y-3">
                                <?php foreach ($additionalInfo as $info): ?>
                                    <div class="flex items-center justify-center space-x-3">
                                        <svg class="h-5 w-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="<?php echo $textColor; ?> opacity-90"><?php echo htmlspecialchars($info); ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                
            <?php endif; ?>
            
            <!-- CTA Button -->
            <div class="text-center mt-16">
                <button class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <?php echo $variant === 'application-process' ? 'Jetzt bewerben' : 'Lösung entdecken'; ?>
                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </button>
            </div>
            
        </div>
    </div>
</section>
