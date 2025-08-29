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
            
            <?php if ($variant === 'timeline-view'): ?>
                <!-- Timeline View -->
                <div class="relative">
                    <!-- Timeline Line -->
                    <div class="absolute left-8 top-0 bottom-0 w-1 bg-slate-300 dark:bg-slate-600"></div>
                    
                    <div class="space-y-12">
                        <?php foreach ($scheduleItems as $index => $item): ?>
                            <div class="relative flex items-start space-x-8">
                                <!-- Timeline Dot -->
                                <div class="relative z-10 w-16 h-16 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 rounded-full flex items-center justify-center font-bold text-lg shadow-lg">
                                    <?php echo $index + 1; ?>
                                </div>
                                
                                <!-- Content -->
                                <div class="flex-1 p-8 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl hover:bg-white/80 dark:hover:bg-black/30 transition-all duration-300">
                                    <div class="flex items-center justify-between mb-4">
                                        <div>
                                            <?php if ($showTime && isset($item['time'])): ?>
                                                <div class="text-sm text-slate-500 dark:text-slate-400 mb-2">
                                                    <?php echo htmlspecialchars($item['time']); ?>
                                                </div>
                                            <?php endif; ?>
                                            <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100">
                                                <?php echo htmlspecialchars($item['title']); ?>
                                            </h3>
                                        </div>
                                        
                                        <?php if ($showPrices && isset($item['price'])): ?>
                                            <div class="text-right">
                                                <div class="text-2xl font-bold text-slate-900 dark:text-slate-100">
                                                    <?php echo number_format($item['price']['amount'], 0, ',', '.'); ?><?php echo htmlspecialchars($item['price']['currency']); ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <p class="text-slate-600 dark:text-slate-400">
                                        <?php echo htmlspecialchars($item['description']); ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
            <?php else: ?>
                <!-- Grid View -->
                <div class="grid md:grid-cols-<?php echo $columns; ?> gap-8">
                    <?php foreach ($scheduleItems as $item): ?>
                        <div class="p-8 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl hover:bg-white/80 dark:hover:bg-black/30 transition-all duration-300 shadow-lg hover:shadow-xl">
                            
                            <!-- Header -->
                            <div class="flex items-center justify-between mb-4">
                                <?php if ($showTime && isset($item['time'])): ?>
                                    <div class="text-lg font-bold text-slate-900 dark:text-slate-100">
                                        <?php echo htmlspecialchars($item['time']); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if ($showAvailability && isset($item['available'])): ?>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-3 h-3 rounded-full <?php echo $item['available'] ? 'bg-green-500' : 'bg-red-500'; ?>"></div>
                                        <span class="text-sm <?php echo $item['available'] ? 'text-green-600 dark:text-green-400' : 'text-red-600 dark:text-red-400'; ?>">
                                            <?php echo $item['available'] ? 'Verfügbar' : 'Belegt'; ?>
                                        </span>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if ($showPrices && isset($item['price'])): ?>
                                    <div class="text-right">
                                        <div class="text-2xl font-bold text-slate-900 dark:text-slate-100">
                                            <?php echo number_format($item['price']['amount'], 0, ',', '.'); ?><?php echo htmlspecialchars($item['price']['currency']); ?>
                                        </div>
                                        <?php if (isset($item['duration'])): ?>
                                            <div class="text-sm text-slate-500 dark:text-slate-400">
                                                <?php echo htmlspecialchars($item['duration']); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Title -->
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100 mb-3">
                                <?php echo htmlspecialchars($item['title']); ?>
                            </h3>
                            
                            <!-- Company -->
                            <?php if ($showCompany && isset($item['company'])): ?>
                                <div class="text-sm text-slate-500 dark:text-slate-400 mb-3">
                                    <?php echo htmlspecialchars($item['company']); ?>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Description -->
                            <p class="text-slate-600 dark:text-slate-400 mb-6">
                                <?php echo htmlspecialchars($item['description']); ?>
                            </p>
                            
                            <!-- Action Button -->
                            <?php if ($variant === 'price-list'): ?>
                                <button class="w-full inline-flex items-center justify-center px-6 py-3 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 font-semibold rounded-xl hover:bg-slate-800 dark:hover:bg-slate-200 transition-all duration-300">
                                    Jetzt buchen
                                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </button>
                            <?php elseif ($showAvailability && isset($item['available']) && $item['available']): ?>
                                <button class="w-full inline-flex items-center justify-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-xl transition-all duration-300">
                                    <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 8a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                    Termin buchen
                                </button>
                            <?php elseif ($showCompany): ?>
                                <button class="w-full inline-flex items-center justify-center px-6 py-3 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 font-semibold rounded-xl hover:bg-slate-800 dark:hover:bg-slate-200 transition-all duration-300">
                                    Mehr erfahren
                                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </button>
                            <?php endif; ?>
                            
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            
            <!-- Call to Action -->
            <div class="text-center mt-16">
                <button class="inline-flex items-center px-8 py-4 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 font-semibold rounded-2xl hover:bg-slate-800 dark:hover:bg-slate-200 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <?php if ($variant === 'price-list'): ?>
                        Kostenlose Beratung buchen
                    <?php else: ?>
                        Kontakt aufnehmen
                    <?php endif; ?>
                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </button>
            </div>
            
        </div>
    </div>
</section>
