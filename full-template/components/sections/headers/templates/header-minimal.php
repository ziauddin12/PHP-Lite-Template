<header class="sticky top-0 z-50 <?php echo $data['bgClass']; ?> backdrop-blur-sm">
    <div class="max-w-6xl mx-auto px-4">
        
        <?php if ($data['style'] === 'centered'): ?>
            <!-- Centered Layout -->
            <div class="text-center py-6">
                <!-- Logo -->
                <div class="mb-6">
                    <a href="<?php echo htmlspecialchars($data['logo']['href']); ?>" class="inline-flex items-center">
                        <?php if (isset($data['logo']['image'])): ?>
                            <img src="<?php echo htmlspecialchars($data['logo']['image']); ?>" 
                                 alt="<?php echo htmlspecialchars($data['logo']['text']); ?>"
                                 class="h-10 md:h-12">
                        <?php else: ?>
                            <span class="text-3xl font-bold text-slate-900 dark:text-white">
                                <?php echo htmlspecialchars($data['logo']['text']); ?>
                            </span>
                        <?php endif; ?>
                    </a>
                </div>
                
                <!-- Navigation -->
                <div class="hidden lg:flex items-center justify-center space-x-8 mb-4">
                    <?php foreach ($data['navigation'] as $item): ?>
                        <a href="<?php echo htmlspecialchars($item['href']); ?>" 
                           class="text-slate-700 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors duration-200">
                            <?php echo htmlspecialchars($item['label']); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
                
                <!-- CTA Button -->
                <?php if (isset($data['showCTA']) && $data['showCTA'] && isset($data['ctaButton'])): ?>
                    <div>
                        <a href="<?php echo htmlspecialchars($data['ctaButton']['href']); ?>" 
                           class="inline-flex items-center px-6 py-3 <?php echo ($data['ctaButton']['variant'] === 'outline') ? 'border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white' : 'bg-blue-600 text-white hover:bg-blue-700'; ?> font-semibold rounded-lg transition-all duration-200 shadow-sm hover:shadow-md">
                            <?php echo htmlspecialchars($data['ctaButton']['text']); ?>
                        </a>
                    </div>
                <?php endif; ?>
                
                <!-- Mobile Menu Button -->
                <div class="lg:hidden mt-4">
                    <button onclick="toggleMobileMenu()" 
                            class="p-2 text-slate-700 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                        <svg id="menuIcon" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg id="closeIcon" class="h-6 w-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
        <?php elseif ($data['style'] === 'split-nav'): ?>
            <!-- Split Navigation Layout -->
            <div class="flex items-center justify-between py-4">
                
                <!-- Left Navigation -->
                <div class="hidden lg:flex items-center space-x-6">
                    <?php foreach ($data['leftNavigation'] as $item): ?>
                        <a href="<?php echo htmlspecialchars($item['href']); ?>" 
                           class="text-slate-700 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors duration-200">
                            <?php echo htmlspecialchars($item['label']); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
                
                <!-- Center Logo -->
                <div class="flex-shrink-0">
                    <a href="<?php echo htmlspecialchars($data['logo']['href']); ?>" class="flex items-center">
                        <?php if (isset($data['logo']['image'])): ?>
                            <img src="<?php echo htmlspecialchars($data['logo']['image']); ?>" 
                                 alt="<?php echo htmlspecialchars($data['logo']['text']); ?>"
                                 class="h-8 md:h-10">
                        <?php else: ?>
                            <span class="text-2xl font-bold text-slate-900 dark:text-white">
                                <?php echo htmlspecialchars($data['logo']['text']); ?>
                            </span>
                        <?php endif; ?>
                    </a>
                </div>
                
                <!-- Right Navigation & CTA -->
                <div class="hidden lg:flex items-center space-x-6">
                    <?php foreach ($data['rightNavigation'] as $item): ?>
                        <a href="<?php echo htmlspecialchars($item['href']); ?>" 
                           class="text-slate-700 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors duration-200">
                            <?php echo htmlspecialchars($item['label']); ?>
                        </a>
                    <?php endforeach; ?>
                    
                    <?php if (isset($data['showCTA']) && $data['showCTA'] && isset($data['ctaButton'])): ?>
                        <a href="<?php echo htmlspecialchars($data['ctaButton']['href']); ?>" 
                           class="inline-flex items-center px-6 py-3 <?php echo ($data['ctaButton']['variant'] === 'outline') ? 'border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white' : 'bg-blue-600 text-white hover:bg-blue-700'; ?> font-semibold rounded-lg transition-all duration-200 shadow-sm hover:shadow-md">
                            <?php echo htmlspecialchars($data['ctaButton']['text']); ?>
                        </a>
                    <?php endif; ?>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="lg:hidden">
                    <button onclick="toggleMobileMenu()" 
                            class="p-2 text-slate-700 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                        <svg id="menuIcon" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg id="closeIcon" class="h-6 w-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
        <?php else: ?>
            <!-- Standard Layout (Clean & Logo-Prominent) -->
            <div class="flex items-center justify-between py-4">
                
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="<?php echo htmlspecialchars($data['logo']['href']); ?>" class="flex items-center">
                        <?php if (isset($data['logo']['image'])): ?>
                            <img src="<?php echo htmlspecialchars($data['logo']['image']); ?>" 
                                 alt="<?php echo htmlspecialchars($data['logo']['text']); ?>"
                                 class="<?php echo (isset($data['logo']['prominent']) && $data['logo']['prominent']) ? 'h-12 md:h-14' : 'h-8 md:h-10'; ?>">
                        <?php else: ?>
                            <span class="<?php echo (isset($data['logo']['prominent']) && $data['logo']['prominent']) ? 'text-3xl md:text-4xl' : 'text-2xl'; ?> font-bold text-slate-900 dark:text-white">
                                <?php echo htmlspecialchars($data['logo']['text']); ?>
                            </span>
                        <?php endif; ?>
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <!-- Navigation Menu -->
                    <nav class="flex items-center space-x-6">
                        <?php foreach ($data['navigation'] as $item): ?>
                            <a href="<?php echo htmlspecialchars($item['href']); ?>" 
                               class="text-slate-700 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors duration-200">
                                <?php echo htmlspecialchars($item['label']); ?>
                            </a>
                        <?php endforeach; ?>
                    </nav>
                    
                    <!-- CTA Button -->
                    <?php if (isset($data['showCTA']) && $data['showCTA'] && isset($data['ctaButton'])): ?>
                        <a href="<?php echo htmlspecialchars($data['ctaButton']['href']); ?>" 
                           class="inline-flex items-center px-6 py-3 <?php echo ($data['ctaButton']['variant'] === 'outline') ? 'border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white' : 'bg-blue-600 text-white hover:bg-blue-700'; ?> font-semibold rounded-lg transition-all duration-200 shadow-sm hover:shadow-md">
                            <?php echo htmlspecialchars($data['ctaButton']['text']); ?>
                        </a>
                    <?php endif; ?>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="lg:hidden">
                    <button onclick="toggleMobileMenu()" 
                            class="p-2 text-slate-700 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                        <svg id="menuIcon" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg id="closeIcon" class="h-6 w-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        <?php endif; ?>
        
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden lg:hidden border-t border-slate-200 dark:border-slate-700 py-4">
            
            <!-- Mobile Navigation -->
            <nav class="space-y-2 mb-4">
                <?php 
                $mobileNavigation = [];
                if ($data['style'] === 'split-nav') {
                    $mobileNavigation = array_merge($data['leftNavigation'], $data['rightNavigation']);
                } else {
                    $mobileNavigation = $data['navigation'];
                }
                
                foreach ($mobileNavigation as $item): ?>
                    <a href="<?php echo htmlspecialchars($item['href']); ?>" 
                       class="block px-4 py-2 text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700 rounded-lg transition-colors">
                        <?php echo htmlspecialchars($item['label']); ?>
                    </a>
                <?php endforeach; ?>
            </nav>
            
            <!-- Mobile CTA Button -->
            <?php if (isset($data['showCTA']) && $data['showCTA'] && isset($data['ctaButton'])): ?>
                <div class="px-4">
                    <a href="<?php echo htmlspecialchars($data['ctaButton']['href']); ?>" 
                       class="block text-center px-6 py-3 <?php echo ($data['ctaButton']['variant'] === 'outline') ? 'border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white' : 'bg-blue-600 text-white hover:bg-blue-700'; ?> font-semibold rounded-lg transition-all duration-200">
                        <?php echo htmlspecialchars($data['ctaButton']['text']); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>

<script>
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');
    
    if (mobileMenu.classList.contains('hidden')) {
        mobileMenu.classList.remove('hidden');
        menuIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
    } else {
        mobileMenu.classList.add('hidden');
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
    }
}
</script>
