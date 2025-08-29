<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?> <?php echo $textColor; ?>">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                    <?php echo htmlspecialchars($headline); ?>
                </h2>
                
                <p class="text-lg leading-relaxed max-w-3xl mx-auto opacity-90 mb-8">
                    <?php echo htmlspecialchars($description); ?>
                </p>
            </div>
            
            <!-- Problem → Solution Flow -->
            <div class="grid lg:grid-cols-2 gap-16 items-center mb-16">
                
                <!-- Problem -->
                <div class="text-center lg:text-left">
                    <div class="p-8 bg-red-500/20 backdrop-blur-sm rounded-2xl border-2 border-red-400/30">
                        <div class="w-16 h-16 bg-red-500/30 rounded-2xl mx-auto lg:mx-0 mb-6 flex items-center justify-center">
                            <svg class="h-8 w-8 text-red-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                        
                        <h3 class="text-xl font-semibold mb-4 text-red-100">
                            Das Problem:
                        </h3>
                        
                        <p class="text-lg leading-relaxed text-red-100">
                            <?php echo htmlspecialchars($problemStatement); ?>
                        </p>
                    </div>
                </div>
                
                <!-- Arrow -->
                <div class="hidden lg:block text-center">
                    <svg class="h-16 w-16 mx-auto opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>
                
                <!-- Solution -->
                <div class="text-center lg:text-left lg:order-3">
                    <div class="p-8 bg-green-500/20 backdrop-blur-sm rounded-2xl border-2 border-green-400/30">
                        <div class="w-16 h-16 bg-green-500/30 rounded-2xl mx-auto lg:mx-0 mb-6 flex items-center justify-center">
                            <svg class="h-8 w-8 text-green-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        
                        <h3 class="text-xl font-semibold mb-4 text-green-100">
                            Die Lösung:
                        </h3>
                        
                        <p class="text-lg leading-relaxed text-green-100">
                            <?php echo htmlspecialchars($solutionHighlight); ?>
                        </p>
                    </div>
                </div>
            </div>
            
            <?php if ($beforeAfter): ?>
                <!-- Before/After Comparison -->
                <div class="grid md:grid-cols-2 gap-8 mb-16">
                    <!-- Before -->
                    <div class="p-6 bg-white/10 backdrop-blur-sm rounded-2xl">
                        <h4 class="text-lg font-semibold mb-4 text-center">
                            ❌ Vorher:
                        </h4>
                        <ul class="space-y-3">
                            <?php foreach ($beforeAfter['before'] as $item): ?>
                                <li class="flex items-center space-x-3 opacity-80">
                                    <svg class="h-5 w-5 text-red-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    <span><?php echo htmlspecialchars($item); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    
                    <!-- After -->
                    <div class="p-6 bg-white/10 backdrop-blur-sm rounded-2xl">
                        <h4 class="text-lg font-semibold mb-4 text-center">
                            ✅ Nachher:
                        </h4>
                        <ul class="space-y-3">
                            <?php foreach ($beforeAfter['after'] as $item): ?>
                                <li class="flex items-center space-x-3">
                                    <svg class="h-5 w-5 text-green-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span><?php echo htmlspecialchars($item); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
            
            <?php if (!empty($steps)): ?>
                <!-- Steps Process -->
                <div class="mb-16">
                    <h3 class="text-2xl font-bold text-center mb-12">So funktioniert's:</h3>
                    <div class="grid md:grid-cols-3 gap-8">
                        <?php foreach ($steps as $step): ?>
                            <div class="text-center p-6 bg-white/10 backdrop-blur-sm rounded-2xl">
                                <div class="w-16 h-16 bg-white/20 rounded-full mx-auto mb-4 flex items-center justify-center">
                                    <span class="text-2xl font-bold"><?php echo htmlspecialchars($step['step']); ?></span>
                                </div>
                                
                                <h4 class="text-lg font-semibold mb-3">
                                    <?php echo htmlspecialchars($step['title']); ?>
                                </h4>
                                
                                <p class="opacity-90 text-sm">
                                    <?php echo htmlspecialchars($step['description']); ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
            
            <?php if (!empty($problemSolutions)): ?>
                <!-- Problem-Solution Pairs -->
                <div class="mb-16">
                    <h3 class="text-2xl font-bold text-center mb-12">Typische Herausforderungen & Lösungen:</h3>
                    <div class="space-y-6">
                        <?php foreach ($problemSolutions as $pair): ?>
                            <div class="grid md:grid-cols-2 gap-6 items-center">
                                <div class="p-4 bg-red-500/20 backdrop-blur-sm rounded-xl text-center">
                                    <span class="text-red-200">Problem: <?php echo htmlspecialchars($pair['problem']); ?></span>
                                </div>
                                <div class="p-4 bg-green-500/20 backdrop-blur-sm rounded-xl text-center">
                                    <span class="text-green-200">Lösung: <?php echo htmlspecialchars($pair['solution']); ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- CTA Section -->
            <div class="text-center">
                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                    <button class="inline-flex items-center px-8 py-4 bg-white text-slate-900 font-semibold rounded-2xl hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <?php echo htmlspecialchars($ctaText); ?>
                        <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </button>
                    
                    <?php if ($secondaryCtaText): ?>
                        <button class="inline-flex items-center px-8 py-4 bg-white/20 backdrop-blur-sm font-semibold rounded-2xl hover:bg-white/30 transition-all duration-300">
                            <?php echo htmlspecialchars($secondaryCtaText); ?>
                        </button>
                    <?php endif; ?>
                </div>
                
                <?php if ($guarantee): ?>
                    <div class="flex items-center justify-center space-x-2 opacity-90">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                        <span><?php echo htmlspecialchars($guarantee); ?></span>
                    </div>
                <?php endif; ?>
            </div>
            
        </div>
    </div>
</section>
