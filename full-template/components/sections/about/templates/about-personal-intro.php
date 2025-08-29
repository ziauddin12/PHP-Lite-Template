<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?>">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            
            <?php if ($variant === 'founder-quote'): ?>
                <!-- Founder Quote Layout - Centered with Large Quote -->
                <div class="text-center mb-16">
                    <div class="max-w-4xl mx-auto">
                        <!-- Large Quote -->
                        <div class="relative mb-12">
                            <svg class="absolute -top-8 -left-4 w-16 h-16 text-slate-300 dark:text-slate-600 opacity-50" fill="currentColor" viewBox="0 0 32 32">
                                <path d="M10 8c-3.3 0-6 2.7-6 6v10h6V14h-4c0-1.1.9-2 2-2s2 .9 2 2v2h4V14c0-3.3-2.7-6-6-6zm16 0c-3.3 0-6 2.7-6 6v10h6V14h-4c0-1.1.9-2 2-2s2 .9 2 2v2h4V14c0-3.3-2.7-6-6-6z"/>
                            </svg>
                            <blockquote class="text-2xl md:text-3xl lg:text-4xl font-bold text-slate-900 dark:text-slate-100 leading-tight">
                                <?php echo htmlspecialchars($quote); ?>
                            </blockquote>
                        </div>
                        
                        <!-- Person Info -->
                        <div class="flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-6">
                            <img src="<?php echo htmlspecialchars($image); ?>" 
                                 alt="<?php echo htmlspecialchars($name); ?>" 
                                 class="w-20 h-20 rounded-full object-cover border-4 border-white/50 shadow-lg">
                            <div class="text-center md:text-left">
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100">
                                    <?php echo htmlspecialchars($name); ?>
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400">
                                    <?php echo htmlspecialchars($title); ?>, <?php echo htmlspecialchars($company); ?>
                                </p>
                            </div>
                        </div>
                        
                        <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mt-8">
                            <?php echo htmlspecialchars($description); ?>
                        </p>
                    </div>
                </div>
                
            <?php else: ?>
                <!-- Standard Personal Intro Layout -->
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    
                    <!-- Text Content -->
                    <div class="<?php echo ($variant === 'fitness-expert') ? 'lg:order-2' : ''; ?>">
                        <div class="inline-block px-4 py-2 bg-white/20 dark:bg-black/20 backdrop-blur-sm rounded-full text-sm font-medium text-slate-700 dark:text-slate-300 mb-6">
                            <?php echo htmlspecialchars($title); ?>
                        </div>
                        
                        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 dark:text-slate-100 mb-6 leading-tight">
                            <?php echo htmlspecialchars($headline); ?>
                        </h2>
                        
                        <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                            <?php echo htmlspecialchars($description); ?>
                        </p>
                        
                        <!-- Quote Block -->
                        <div class="relative p-6 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl mb-8">
                            <svg class="absolute top-4 left-4 w-8 h-8 text-slate-300 dark:text-slate-600" fill="currentColor" viewBox="0 0 32 32">
                                <path d="M10 8c-3.3 0-6 2.7-6 6v10h6V14h-4c0-1.1.9-2 2-2s2 .9 2 2v2h4V14c0-3.3-2.7-6-6-6zm16 0c-3.3 0-6 2.7-6 6v10h6V14h-4c0-1.1.9-2 2-2s2 .9 2 2v2h4V14c0-3.3-2.7-6-6-6z"/>
                            </svg>
                            <blockquote class="text-lg font-medium text-slate-900 dark:text-slate-100 pl-8">
                                <?php echo htmlspecialchars($quote); ?>
                            </blockquote>
                        </div>
                        
                        <!-- Person Info -->
                        <div class="flex items-center space-x-4 mb-8">
                            <img src="<?php echo htmlspecialchars($image); ?>" 
                                 alt="<?php echo htmlspecialchars($name); ?>" 
                                 class="w-16 h-16 rounded-full object-cover border-3 border-white/50 shadow-lg">
                            <div>
                                <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100">
                                    <?php echo htmlspecialchars($name); ?>
                                </h3>
                                <p class="text-slate-600 dark:text-slate-400">
                                    <?php echo htmlspecialchars($title); ?>
                                </p>
                            </div>
                        </div>
                        
                        <!-- CTA Button -->
                        <button class="inline-flex items-center px-8 py-4 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 font-semibold rounded-2xl hover:bg-slate-800 dark:hover:bg-slate-200 transition-all duration-300 shadow-lg hover:shadow-xl">
                            <?php echo htmlspecialchars($ctaText); ?>
                            <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                    
                    <!-- Image -->
                    <div class="<?php echo ($variant === 'fitness-expert') ? 'lg:order-1' : ''; ?>">
                        <div class="relative">
                            <!-- Background Decoration -->
                            <div class="absolute -inset-4 bg-gradient-to-r from-white/20 to-white/10 dark:from-black/20 dark:to-black/10 rounded-3xl transform rotate-3"></div>
                            
                            <img src="<?php echo htmlspecialchars($image); ?>" 
                                 alt="<?php echo htmlspecialchars($name); ?>" 
                                 class="relative w-full h-[600px] object-cover rounded-2xl shadow-2xl">
                            
                            <!-- Floating Stats/Info Card -->
                            <div class="absolute bottom-6 left-6 right-6 p-6 bg-white/90 dark:bg-black/80 backdrop-blur-sm rounded-2xl shadow-xl">
                                <h4 class="text-lg font-semibold text-slate-900 dark:text-slate-100 mb-1">
                                    <?php echo htmlspecialchars($name); ?>
                                </h4>
                                <p class="text-slate-600 dark:text-slate-400 text-sm mb-2">
                                    <?php echo htmlspecialchars($title); ?>
                                </p>
                                <div class="flex items-center space-x-4 text-sm text-slate-500 dark:text-slate-500">
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <?php echo htmlspecialchars($company); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            <?php endif; ?>
            
        </div>
    </div>
</section>
