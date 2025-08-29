<section class="relative py-24 lg:py-32 <?php echo $data['bgClass']; ?>">
    <div class="<?php echo isset($data['containerWidth']) && $data['containerWidth'] === 'wide' ? 'max-w-7xl' : 'max-w-6xl'; ?> mx-auto px-4">
        
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 dark:text-white mb-6 leading-tight">
                <?php echo htmlspecialchars($data['title']); ?>
            </h2>
            
            <p class="text-lg leading-relaxed max-w-3xl mx-auto text-slate-600 dark:text-slate-400">
                <?php echo htmlspecialchars($data['subtitle']); ?>
            </p>
        </div>
        
        <!-- Team Grid -->
        <div class="grid <?php echo $data['layout']; ?> gap-8 mb-16">
            
            <?php foreach ($data['members'] as $member): ?>
                <div class="group">
                    
                    <?php if ($data['style'] === 'executive'): ?>
                        <!-- Executive Style -->
                        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                            <div class="aspect-w-4 aspect-h-5">
                                <img src="<?php echo htmlspecialchars($member['image']); ?>" 
                                     alt="<?php echo htmlspecialchars($member['name']); ?>"
                                     class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            
                            <div class="p-8">
                                <div class="text-center mb-6">
                                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">
                                        <?php echo htmlspecialchars($member['name']); ?>
                                    </h3>
                                    <p class="text-blue-600 dark:text-blue-400 font-semibold text-lg">
                                        <?php echo htmlspecialchars($member['position']); ?>
                                    </p>
                                </div>
                                
                                <p class="text-slate-600 dark:text-slate-400 leading-relaxed text-center mb-6">
                                    <?php echo htmlspecialchars($member['bio']); ?>
                                </p>
                                
                                <!-- Social Links -->
                                <?php if (!empty($member['social'])): ?>
                                    <div class="flex justify-center space-x-4">
                                        <?php foreach ($member['social'] as $platform => $link): ?>
                                            <a href="<?php echo htmlspecialchars($link); ?>" 
                                               class="w-10 h-10 bg-slate-100 dark:bg-slate-700 rounded-full flex items-center justify-center hover:bg-blue-100 dark:hover:bg-blue-900 transition-colors duration-300">
                                                <?php
                                                switch($platform) {
                                                    case 'linkedin':
                                                        echo '<svg class="h-5 w-5 text-slate-600 dark:text-slate-400" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>';
                                                        break;
                                                    case 'email':
                                                        echo '<svg class="h-5 w-5 text-slate-600 dark:text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>';
                                                        break;
                                                    case 'github':
                                                        echo '<svg class="h-5 w-5 text-slate-600 dark:text-slate-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>';
                                                        break;
                                                }
                                                ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                    <?php else: ?>
                        <!-- Clean/Standard/Wide Style -->
                        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-xl transition-all duration-300 group-hover:border-blue-300 dark:group-hover:border-blue-600">
                            <div class="aspect-w-4 aspect-h-4">
                                <img src="<?php echo htmlspecialchars($member['image']); ?>" 
                                     alt="<?php echo htmlspecialchars($member['name']); ?>"
                                     class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            
                            <div class="p-6">
                                <div class="text-center">
                                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">
                                        <?php echo htmlspecialchars($member['name']); ?>
                                    </h3>
                                    <p class="text-blue-600 dark:text-blue-400 font-semibold mb-4">
                                        <?php echo htmlspecialchars($member['position']); ?>
                                    </p>
                                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed text-sm mb-4">
                                        <?php echo htmlspecialchars($member['bio']); ?>
                                    </p>
                                    
                                    <!-- Social Links -->
                                    <?php if (!empty($member['social'])): ?>
                                        <div class="flex justify-center space-x-3">
                                            <?php foreach ($member['social'] as $platform => $link): ?>
                                                <a href="<?php echo htmlspecialchars($link); ?>" 
                                                   class="w-8 h-8 bg-slate-100 dark:bg-slate-700 rounded-full flex items-center justify-center hover:bg-blue-100 dark:hover:bg-blue-900 transition-colors duration-300">
                                                    <?php
                                                    switch($platform) {
                                                        case 'linkedin':
                                                            echo '<svg class="h-4 w-4 text-slate-600 dark:text-slate-400" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>';
                                                            break;
                                                        case 'github':
                                                            echo '<svg class="h-4 w-4 text-slate-600 dark:text-slate-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>';
                                                            break;
                                                        case 'dribbble':
                                                            echo '<svg class="h-4 w-4 text-slate-600 dark:text-slate-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.374 0 0 5.374 0 12s5.374 12 12 12 12-5.374 12-12S18.626 0 12 0zm7.568 5.302c1.4 1.5 2.252 3.5 2.273 5.698-.653-.126-7.512-1.5-7.512-1.5s-.669-1.581-1.431-3.012c.000.000 4.537-1.952 6.67.814zM12 2.151c2.75 0 5.25 1.062 7.127 2.804-.126.126-5.362 2.126-5.362 2.126-.875-1.687-1.876-3.063-2.013-3.251.000.000.126-.063.248-.063z"/></svg>';
                                                            break;
                                                        case 'email':
                                                            echo '<svg class="h-4 w-4 text-slate-600 dark:text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>';
                                                            break;
                                                    }
                                                    ?>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                </div>
            <?php endforeach; ?>
            
        </div>
        
        <!-- CTA Section -->
        <?php if (isset($data['showCTA']) && $data['showCTA'] && isset($data['ctaButton'])): ?>
            <div class="text-center">
                <div class="max-w-2xl mx-auto p-8 bg-white/50 dark:bg-slate-800/50 rounded-2xl backdrop-blur-sm border border-slate-200/50 dark:border-slate-700/50">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">
                        Bereit für die Zusammenarbeit?
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 mb-6">
                        Kontaktieren Sie unser Team und lassen Sie uns gemeinsam Ihre Ziele erreichen.
                    </p>
                    <a href="<?php echo htmlspecialchars($data['ctaButton']['link']); ?>" 
                       class="inline-flex items-center px-8 py-4 bg-blue-600 text-white font-semibold rounded-2xl hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <?php echo htmlspecialchars($data['ctaButton']['text']); ?>
                        <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        <?php endif; ?>
        
    </div>
</section>
