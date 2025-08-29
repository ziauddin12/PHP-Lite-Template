<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?> <?php echo $textColor; ?>">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                    <?php echo htmlspecialchars($headline); ?>
                </h2>
                
                <p class="text-lg leading-relaxed max-w-2xl mx-auto opacity-90">
                    <?php echo htmlspecialchars($description); ?>
                </p>
            </div>
            
            <!-- Options Grid -->
            <div class="grid md:grid-cols-<?php echo count($optionsList) <= 2 ? count($optionsList) : 3; ?> gap-8">
                
                <?php foreach ($optionsList as $option): ?>
                    <div class="relative p-8 bg-white/10 backdrop-blur-sm rounded-2xl hover:bg-white/20 transition-all duration-300 shadow-lg hover:shadow-xl <?php echo (isset($option['featured']) && $option['featured']) ? 'ring-2 ring-white/50 transform scale-105' : ''; ?>">
                        
                        <!-- Featured Badge -->
                        <?php if (isset($option['featured']) && $option['featured']): ?>
                            <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                                <span class="inline-block px-4 py-2 bg-white text-slate-900 text-sm font-semibold rounded-full">
                                    Empfohlen
                                </span>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Icon -->
                        <div class="text-center mb-6">
                            <div class="w-16 h-16 mx-auto bg-white/20 rounded-2xl flex items-center justify-center mb-4">
                                <?php echo $iconMap[$option['icon']] ?? $iconMap['trending']; ?>
                            </div>
                            
                            <h3 class="text-xl font-semibold mb-3">
                                <?php echo htmlspecialchars($option['title']); ?>
                            </h3>
                            
                            <p class="opacity-90 leading-relaxed">
                                <?php echo htmlspecialchars($option['description']); ?>
                            </p>
                        </div>
                        
                        <!-- Price -->
                        <?php if (isset($option['price'])): ?>
                            <div class="text-center mb-6">
                                <div class="text-2xl font-bold">
                                    <?php echo htmlspecialchars($option['price']); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Features -->
                        <?php if (isset($option['features'])): ?>
                            <div class="mb-8">
                                <ul class="space-y-3">
                                    <?php foreach ($option['features'] as $feature): ?>
                                        <li class="flex items-center space-x-3">
                                            <svg class="h-5 w-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-sm opacity-90"><?php echo htmlspecialchars($feature); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        
                        <!-- CTA Button -->
                        <div class="text-center">
                            <button class="w-full inline-flex items-center justify-center px-6 py-4 bg-white text-slate-900 font-semibold rounded-2xl hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <?php echo htmlspecialchars($option['buttonText']); ?>
                                <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>
                
            </div>
            
            <!-- Additional CTA -->
            <div class="text-center mt-16">
                <p class="opacity-90 mb-6">
                    Nicht sicher, welche Option die richtige für Sie ist?
                </p>
                <button class="inline-flex items-center px-8 py-4 bg-white/20 backdrop-blur-sm font-semibold rounded-2xl hover:bg-white/30 transition-all duration-300">
                    Kostenlose Beratung
                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </button>
            </div>
            
        </div>
    </div>
</section>
