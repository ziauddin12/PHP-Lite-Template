<section class="relative py-24 lg:py-32 <?php echo $data['bgClass']; ?>">
    <div class="max-w-6xl mx-auto px-4">
        
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 dark:text-white mb-6 leading-tight">
                <?php echo htmlspecialchars($data['title']); ?>
            </h2>
            
            <?php if (isset($data['subtitle'])): ?>
                <h3 class="text-xl font-semibold text-slate-700 dark:text-slate-300 mb-6">
                    <?php echo htmlspecialchars($data['subtitle']); ?>
                </h3>
            <?php endif; ?>
            
            <p class="text-lg leading-relaxed max-w-3xl mx-auto text-slate-600 dark:text-slate-400">
                <?php echo htmlspecialchars($data['description']); ?>
            </p>
        </div>
        
        <!-- Testimonials Grid -->
        <div class="grid <?php echo $data['layout']; ?> gap-6">
            
            <?php foreach ($data['testimonials'] as $testimonial): ?>
                <div class="group">
                    <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-xl transition-all duration-300 p-6 h-full relative">
                        
                        <!-- Verification Badge -->
                        <?php if (isset($testimonial['verified']) && $testimonial['verified']): ?>
                            <div class="absolute top-4 right-4">
                                <div class="flex items-center space-x-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 px-3 py-1 rounded-full text-sm font-medium">
                                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Verifiziert</span>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Stars -->
                        <div class="flex items-center space-x-1 mb-4">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="h-5 w-5 <?php echo $i < $testimonial['rating'] ? 'text-yellow-400 fill-current' : 'text-slate-300 dark:text-slate-600'; ?>" 
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                            <?php endfor; ?>
                        </div>
                        
                        <!-- Review Text -->
                        <blockquote class="text-slate-700 dark:text-slate-300 leading-relaxed mb-6">
                            "<?php echo htmlspecialchars($testimonial['text']); ?>"
                        </blockquote>
                        
                        <!-- Author Info -->
                        <div class="flex items-center space-x-4 mb-4">
                            <img src="<?php echo htmlspecialchars($testimonial['avatar']); ?>" 
                                 alt="<?php echo htmlspecialchars($testimonial['name']); ?>"
                                 class="w-12 h-12 rounded-full object-cover">
                            <div class="flex-1">
                                <div class="font-semibold text-slate-900 dark:text-white">
                                    <?php echo htmlspecialchars($testimonial['name']); ?>
                                </div>
                                <?php if (isset($testimonial['location'])): ?>
                                    <div class="text-slate-600 dark:text-slate-400 text-sm flex items-center">
                                        <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <?php echo htmlspecialchars($testimonial['location']); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <!-- Platform & Date -->
                        <div class="flex items-center justify-between text-sm text-slate-500 dark:text-slate-400 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <?php if (isset($testimonial['platform'])): ?>
                                <div class="flex items-center space-x-2">
                                    <?php
                                    $platformIcon = '';
                                    switch($testimonial['platform']) {
                                        case 'Google Reviews':
                                            $platformIcon = '<svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>';
                                            break;
                                        case 'Trustpilot':
                                            $platformIcon = '<svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0L9.2 8.8H0l7.4 5.4L4.6 23 12 17.6 19.4 23l-2.8-8.8L24 8.8h-9.2L12 0z"/></svg>';
                                            break;
                                        case 'Facebook':
                                            $platformIcon = '<svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>';
                                            break;
                                        case 'LinkedIn':
                                            $platformIcon = '<svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>';
                                            break;
                                        default:
                                            $platformIcon = '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';
                                    }
                                    echo $platformIcon;
                                    ?>
                                    <span><?php echo htmlspecialchars($testimonial['platform']); ?></span>
                                </div>
                            <?php endif; ?>
                            
                            <?php if (isset($testimonial['date'])): ?>
                                <span><?php echo htmlspecialchars($testimonial['date']); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            
        </div>
        
        <!-- Trust Banner -->
        <div class="mt-16 text-center">
            <div class="max-w-4xl mx-auto p-8 bg-slate-50 dark:bg-slate-800/50 rounded-2xl border border-slate-200 dark:border-slate-700">
                <div class="flex items-center justify-center space-x-8 mb-6">
                    <div class="flex items-center space-x-2">
                        <svg class="h-8 w-8 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-slate-900 dark:text-white font-semibold">100% Verifizierte Bewertungen</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="h-8 w-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                        <span class="text-slate-900 dark:text-white font-semibold">SSL-Verschlüsselt</span>
                    </div>
                </div>
                <p class="text-slate-600 dark:text-slate-400">
                    Alle Bewertungen werden von uns geprüft und stammen von echten Kunden. Vertrauen Sie auf authentisches Feedback.
                </p>
            </div>
        </div>
        
    </div>
</section>
