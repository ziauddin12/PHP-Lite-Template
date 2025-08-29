<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?> <?php echo $textColor; ?>">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            
            <!-- Header -->
            <div class="text-center mb-16">
                <?php if ($badge): ?>
                    <div class="mb-6">
                        <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm text-sm font-semibold rounded-full">
                            <?php echo htmlspecialchars($badge); ?>
                        </span>
                    </div>
                <?php endif; ?>
                
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                    <?php echo htmlspecialchars($headline); ?>
                </h2>
                
                <p class="text-lg leading-relaxed max-w-3xl mx-auto opacity-90">
                    <?php echo htmlspecialchars($description); ?>
                </p>
            </div>
            
            <!-- Partner Types -->
            <div class="grid md:grid-cols-<?php echo count($partnerTypes) <= 2 ? count($partnerTypes) : 3; ?> gap-8 mb-16">
                
                <?php foreach ($partnerTypes as $partner): ?>
                    <div class="relative p-8 bg-white/10 backdrop-blur-sm rounded-2xl hover:bg-white/20 transition-all duration-300 shadow-lg hover:shadow-xl <?php echo (isset($partner['featured']) && $partner['featured']) ? 'ring-2 ring-white/50 transform scale-105' : ''; ?>">
                        
                        <!-- Featured Badge -->
                        <?php if (isset($partner['featured']) && $partner['featured']): ?>
                            <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                                <span class="inline-block px-4 py-2 bg-white text-slate-900 text-sm font-semibold rounded-full">
                                    Empfohlen
                                </span>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Icon -->
                        <div class="text-center mb-6">
                            <div class="w-16 h-16 mx-auto bg-white/20 rounded-2xl flex items-center justify-center mb-4">
                                <?php echo $iconMap[$partner['icon']] ?? $iconMap['users']; ?>
                            </div>
                            
                            <h3 class="text-xl font-semibold mb-3">
                                <?php echo htmlspecialchars($partner['title']); ?>
                            </h3>
                            
                            <p class="opacity-90 leading-relaxed mb-6">
                                <?php echo htmlspecialchars($partner['description']); ?>
                            </p>
                        </div>
                        
                        <!-- Additional Info -->
                        <?php if (isset($partner['minInvestment'])): ?>
                            <div class="text-center mb-6 p-3 bg-white/10 backdrop-blur-sm rounded-xl">
                                <span class="text-sm font-medium">
                                    Mindestinvestment: <?php echo htmlspecialchars($partner['minInvestment']); ?>
                                </span>
                            </div>
                        <?php endif; ?>
                        
                        <?php if (isset($partner['focus'])): ?>
                            <div class="text-center mb-6 p-3 bg-white/10 backdrop-blur-sm rounded-xl">
                                <span class="text-sm font-medium">
                                    Fokus: <?php echo htmlspecialchars($partner['focus']); ?>
                                </span>
                            </div>
                        <?php endif; ?>
                        
                        <?php if (isset($partner['impact'])): ?>
                            <div class="text-center mb-6 p-3 bg-white/10 backdrop-blur-sm rounded-xl">
                                <span class="text-sm font-medium">
                                    Impact: <?php echo htmlspecialchars($partner['impact']); ?>
                                </span>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Benefits -->
                        <?php if (isset($partner['benefits'])): ?>
                            <div class="mb-8">
                                <ul class="space-y-3">
                                    <?php foreach ($partner['benefits'] as $benefit): ?>
                                        <li class="flex items-center space-x-3">
                                            <svg class="h-5 w-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-sm opacity-90"><?php echo htmlspecialchars($benefit); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        
                        <!-- CTA Button -->
                        <div class="text-center">
                            <button class="w-full inline-flex items-center justify-center px-6 py-4 bg-white text-slate-900 font-semibold rounded-2xl hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <?php echo htmlspecialchars($partner['buttonText']); ?>
                                <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>
                
            </div>
            
            <!-- Trust Indicators -->
            <?php if (!empty($trustIndicators)): ?>
                <div class="text-center mb-12">
                    <h3 class="text-xl font-semibold mb-6 opacity-90">Vertrauen Sie auf unsere Erfahrung:</h3>
                    <div class="flex flex-wrap justify-center gap-8">
                        <?php foreach ($trustIndicators as $indicator): ?>
                            <div class="px-6 py-3 bg-white/10 backdrop-blur-sm rounded-xl">
                                <span class="font-medium opacity-90">
                                    ✅ <?php echo htmlspecialchars($indicator); ?>
                                </span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Additional CTA -->
            <div class="text-center">
                <p class="opacity-90 mb-6">
                    Haben Sie Fragen zu unseren Partnerschaften?
                </p>
                <button class="inline-flex items-center px-8 py-4 bg-white/20 backdrop-blur-sm font-semibold rounded-2xl hover:bg-white/30 transition-all duration-300">
                    Persönliche Beratung
                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </button>
            </div>
            
        </div>
    </div>
</section>
