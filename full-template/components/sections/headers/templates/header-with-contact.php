<header class="sticky top-0 z-50 <?php echo $data['bgClass']; ?> backdrop-blur-sm">
    <div class="max-w-6xl mx-auto px-4">
        
        <!-- Main Header Row -->
        <div class="flex items-center justify-between py-4">
            
            <!-- Logo -->
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
            
            <!-- Desktop Navigation & Contact -->
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
                
                <!-- Contact Info -->
                <?php if (isset($data['contactInfo'])): ?>
                    <div class="flex items-center space-x-4 <?php echo (isset($data['contactInfo']['prominent']) && $data['contactInfo']['prominent']) ? 'bg-white dark:bg-slate-800 px-4 py-2 rounded-lg shadow-sm' : ''; ?>">
                        
                        <!-- Phone -->
                        <?php if (isset($data['contactInfo']['phone'])): ?>
                            <a href="tel:<?php echo str_replace(' ', '', $data['contactInfo']['phone']); ?>" 
                               class="flex items-center space-x-2 text-slate-700 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                                <?php if (isset($data['contactInfo']['showIcons']) && $data['contactInfo']['showIcons']): ?>
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                <?php endif; ?>
                                <span class="font-medium"><?php echo htmlspecialchars($data['contactInfo']['phone']); ?></span>
                            </a>
                        <?php endif; ?>
                        
                        <!-- Email -->
                        <?php if (isset($data['contactInfo']['email'])): ?>
                            <a href="mailto:<?php echo htmlspecialchars($data['contactInfo']['email']); ?>" 
                               class="flex items-center space-x-2 text-slate-700 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                                <?php if (isset($data['contactInfo']['showIcons']) && $data['contactInfo']['showIcons']): ?>
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                <?php endif; ?>
                                <span class="font-medium"><?php echo htmlspecialchars($data['contactInfo']['email']); ?></span>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                
                <!-- Language Selector -->
                <?php if (isset($data['languageSelector'])): ?>
                    <div class="relative">
                        <button class="flex items-center space-x-2 text-slate-700 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors" 
                                onclick="toggleLanguageMenu()">
                            <span><?php echo htmlspecialchars($data['languageSelector']['current']); ?></span>
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <div id="languageMenu" class="hidden absolute right-0 mt-2 w-48 bg-white dark:bg-slate-800 rounded-lg shadow-lg border border-slate-200 dark:border-slate-700 z-50">
                            <?php foreach ($data['languageSelector']['options'] as $option): ?>
                                <a href="?lang=<?php echo htmlspecialchars($option['code']); ?>" 
                                   class="flex items-center space-x-3 px-4 py-2 text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors">
                                    <span><?php echo htmlspecialchars($option['flag']); ?></span>
                                    <span><?php echo htmlspecialchars($option['label']); ?></span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                
                <!-- CTA Button -->
                <?php if (isset($data['ctaButton'])): ?>
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
        
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden lg:hidden border-t border-slate-200 dark:border-slate-700 py-4">
            
            <!-- Mobile Navigation -->
            <nav class="space-y-2 mb-4">
                <?php foreach ($data['navigation'] as $item): ?>
                    <a href="<?php echo htmlspecialchars($item['href']); ?>" 
                       class="block px-4 py-2 text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700 rounded-lg transition-colors">
                        <?php echo htmlspecialchars($item['label']); ?>
                    </a>
                <?php endforeach; ?>
            </nav>
            
            <!-- Mobile Contact Info -->
            <?php if (isset($data['contactInfo'])): ?>
                <div class="border-t border-slate-200 dark:border-slate-700 pt-4 mb-4 space-y-2">
                    <?php if (isset($data['contactInfo']['phone'])): ?>
                        <a href="tel:<?php echo str_replace(' ', '', $data['contactInfo']['phone']); ?>" 
                           class="flex items-center space-x-3 px-4 py-2 text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700 rounded-lg transition-colors">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span><?php echo htmlspecialchars($data['contactInfo']['phone']); ?></span>
                        </a>
                    <?php endif; ?>
                    
                    <?php if (isset($data['contactInfo']['email'])): ?>
                        <a href="mailto:<?php echo htmlspecialchars($data['contactInfo']['email']); ?>" 
                           class="flex items-center space-x-3 px-4 py-2 text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700 rounded-lg transition-colors">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span><?php echo htmlspecialchars($data['contactInfo']['email']); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            
            <!-- Mobile CTA Button -->
            <?php if (isset($data['ctaButton'])): ?>
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

function toggleLanguageMenu() {
    const languageMenu = document.getElementById('languageMenu');
    if (languageMenu) {
        languageMenu.classList.toggle('hidden');
    }
}

// Close language menu when clicking outside
document.addEventListener('click', function(event) {
    const languageMenu = document.getElementById('languageMenu');
    if (languageMenu && !event.target.closest('.relative')) {
        languageMenu.classList.add('hidden');
    }
});
</script>
