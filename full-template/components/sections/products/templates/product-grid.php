<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?>">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 dark:text-slate-100 mb-6 leading-tight">
                    <?php echo htmlspecialchars($headline); ?>
                </h2>
                
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed max-w-3xl mx-auto">
                    <?php echo htmlspecialchars($description); ?>
                </p>
            </div>
            
            <!-- Product Grid -->
            <div class="grid md:grid-cols-<?php echo $columns; ?> gap-8">
                <?php foreach ($products as $product): ?>
                    <div class="group bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl overflow-hidden hover:bg-white/80 dark:hover:bg-black/30 transition-all duration-300 shadow-lg hover:shadow-xl">
                        
                        <!-- Product Image -->
                        <div class="relative overflow-hidden">
                            <?php if (isset($product['image'])): ?>
                                <img src="<?php echo htmlspecialchars($product['image']); ?>" 
                                     alt="<?php echo htmlspecialchars($product['name']); ?>" 
                                     class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                            <?php else: ?>
                                <div class="w-full h-64 bg-slate-200 dark:bg-slate-700 flex items-center justify-center">
                                    <svg class="h-16 w-16 text-slate-400 dark:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Badges -->
                            <div class="absolute top-4 left-4 flex flex-col space-y-2">
                                <?php if ($showSaleBadges && isset($product['onSale']) && $product['onSale']): ?>
                                    <span class="inline-block px-3 py-1 bg-red-500 text-white text-sm font-semibold rounded-full">
                                        SALE
                                    </span>
                                <?php endif; ?>
                                
                                <?php if ($showNewBadges && isset($product['isNew']) && $product['isNew']): ?>
                                    <span class="inline-block px-3 py-1 bg-green-500 text-white text-sm font-semibold rounded-full">
                                        NEU
                                    </span>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Rating Overlay -->
                            <?php if ($showRatings && isset($product['rating'])): ?>
                                <div class="absolute top-4 right-4 bg-white/90 dark:bg-black/80 backdrop-blur-sm rounded-lg p-2">
                                    <div class="flex items-center space-x-1">
                                        <svg class="h-4 w-4 text-yellow-400 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                        </svg>
                                        <span class="text-sm font-medium text-slate-900 dark:text-slate-100">
                                            <?php echo number_format($product['rating'], 1); ?>
                                        </span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Product Info -->
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100 mb-2">
                                <?php echo htmlspecialchars($product['name']); ?>
                            </h3>
                            
                            <?php if ($showDescriptions && isset($product['description'])): ?>
                                <p class="text-slate-600 dark:text-slate-400 text-sm mb-4 leading-relaxed">
                                    <?php echo htmlspecialchars($product['description']); ?>
                                </p>
                            <?php endif; ?>
                            
                            <!-- Features -->
                            <?php if ($showFeatures && isset($product['features'])): ?>
                                <div class="mb-4">
                                    <div class="flex flex-wrap gap-2">
                                        <?php foreach ($product['features'] as $feature): ?>
                                            <span class="inline-block px-2 py-1 bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-300 text-xs rounded-full">
                                                <?php echo htmlspecialchars($feature); ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Rating -->
                            <?php if ($showRatings && isset($product['rating']) && isset($product['reviewCount'])): ?>
                                <div class="flex items-center space-x-2 mb-4">
                                    <div class="flex items-center space-x-1">
                                        <?php for ($i = 1; $i <= 5; $i++): ?>
                                            <svg class="h-4 w-4 <?php echo $i <= floor($product['rating']) ? 'text-yellow-400 fill-current' : 'text-gray-300 dark:text-gray-600'; ?>" viewBox="0 0 24 24">
                                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                            </svg>
                                        <?php endfor; ?>
                                    </div>
                                    <span class="text-sm text-slate-600 dark:text-slate-400">
                                        (<?php echo $product['reviewCount']; ?>)
                                    </span>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Price and CTA -->
                            <div class="flex items-center justify-between">
                                <div class="flex items-baseline space-x-2">
                                    <?php if (isset($product['originalPrice']) && $product['originalPrice'] > $product['price']): ?>
                                        <span class="text-lg text-slate-400 dark:text-slate-500 line-through">
                                            <?php echo number_format($product['originalPrice'], 0, ',', '.'); ?><?php echo htmlspecialchars($product['currency']); ?>
                                        </span>
                                    <?php endif; ?>
                                    <span class="text-2xl font-bold text-slate-900 dark:text-slate-100">
                                        <?php echo number_format($product['price'], 0, ',', '.'); ?><?php echo htmlspecialchars($product['currency']); ?>
                                    </span>
                                </div>
                                
                                <button class="inline-flex items-center px-6 py-3 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 font-semibold rounded-xl hover:bg-slate-800 dark:hover:bg-slate-200 transition-all duration-300 shadow-lg hover:shadow-xl">
                                    <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m1.6 8L5 3H3m4 10v6a1 1 0 001 1h10a1 1 0 001-1v-6m-12 0h12"></path>
                                    </svg>
                                    Kaufen
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="inline-flex items-center px-8 py-4 bg-white/60 dark:bg-black/20 text-slate-900 dark:text-slate-100 font-semibold rounded-2xl hover:bg-white/80 dark:hover:bg-black/30 transition-all duration-300 backdrop-blur-sm">
                    Mehr Produkte laden
                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>
            
        </div>
    </div>
</section>
