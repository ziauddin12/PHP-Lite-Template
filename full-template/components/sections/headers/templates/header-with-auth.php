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
            
            <!-- Desktop Navigation & Auth -->
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
                
                <!-- Auth Section -->
                <?php if (isset($data['userMenu']) && isset($data['userMenu']['isLoggedIn']) && $data['userMenu']['isLoggedIn']): ?>
                    <!-- User Menu (Logged In) -->
                    <div class="relative">
                        <button onclick="toggleUserMenu()" 
                                class="flex items-center space-x-3 text-slate-700 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                            <img src="<?php echo htmlspecialchars($data['userMenu']['userAvatar']); ?>" 
                                 alt="<?php echo htmlspecialchars($data['userMenu']['userName']); ?>"
                                 class="w-8 h-8 rounded-full object-cover">
                            <span class="font-medium"><?php echo htmlspecialchars($data['userMenu']['userName']); ?></span>
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <div id="userMenu" class="hidden absolute right-0 mt-2 w-48 bg-white dark:bg-slate-800 rounded-lg shadow-lg border border-slate-200 dark:border-slate-700 z-50">
                            <?php foreach ($data['userMenu']['menuItems'] as $item): ?>
                                <?php if (isset($item['separator']) && $item['separator']): ?>
                                    <div class="border-t border-slate-200 dark:border-slate-700 my-1"></div>
                                <?php else: ?>
                                    <a href="<?php echo htmlspecialchars($item['href']); ?>" 
                                       class="flex items-center space-x-3 px-4 py-2 text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors">
                                        <?php
                                        switch($item['icon']) {
                                            case 'user':
                                                echo '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>';
                                                break;
                                            case 'settings':
                                                echo '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>';
                                                break;
                                            case 'logout':
                                                echo '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>';
                                                break;
                                        }
                                        ?>
                                        <span><?php echo htmlspecialchars($item['label']); ?></span>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                <?php elseif (isset($data['authButtons'])): ?>
                    <!-- Auth Buttons (Not Logged In) -->
                    <div class="flex items-center space-x-4">
                        
                        <?php if (isset($data['authButtons']['prominent']) && $data['authButtons']['prominent']): ?>
                            <!-- Prominent Auth Buttons -->
                            <a href="<?php echo htmlspecialchars($data['authButtons']['loginHref']); ?>" 
                               class="text-slate-700 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors">
                                <?php echo htmlspecialchars($data['authButtons']['loginText']); ?>
                            </a>
                            <a href="<?php echo htmlspecialchars($data['authButtons']['registerHref']); ?>" 
                               class="inline-flex items-center px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-200 shadow-sm">
                                <?php echo htmlspecialchars($data['authButtons']['registerText']); ?>
                            </a>
                            
                        <?php elseif (isset($data['authButtons']['minimal']) && $data['authButtons']['minimal']): ?>
                            <!-- Minimal Auth Links -->
                            <div class="text-sm text-slate-600 dark:text-slate-400">
                                <a href="<?php echo htmlspecialchars($data['authButtons']['loginHref']); ?>" 
                                   class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                                    <?php echo htmlspecialchars($data['authButtons']['loginText']); ?>
                                </a>
                                <span><?php echo htmlspecialchars($data['authButtons']['separator']); ?></span>
                                <a href="<?php echo htmlspecialchars($data['authButtons']['registerHref']); ?>" 
                                   class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                                    <?php echo htmlspecialchars($data['authButtons']['registerText']); ?>
                                </a>
                            </div>
                            
                        <?php else: ?>
                            <!-- Standard Auth Links -->
                            <div class="text-slate-700 dark:text-slate-300">
                                <a href="<?php echo htmlspecialchars($data['authButtons']['loginHref']); ?>" 
                                   class="hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors">
                                    <?php echo htmlspecialchars($data['authButtons']['loginText']); ?>
                                </a>
                                <span class="mx-2"><?php echo htmlspecialchars($data['authButtons']['separator']); ?></span>
                                <a href="<?php echo htmlspecialchars($data['authButtons']['registerHref']); ?>" 
                                   class="hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors">
                                    <?php echo htmlspecialchars($data['authButtons']['registerText']); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                
                <!-- CTA Button -->
                <?php if (isset($data['ctaButton'])): ?>
                    <a href="<?php echo htmlspecialchars($data['ctaButton']['href']); ?>" 
                       class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-200 shadow-sm hover:shadow-md">
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
            
            <!-- Mobile Auth Section -->
            <?php if (isset($data['userMenu']) && isset($data['userMenu']['isLoggedIn']) && $data['userMenu']['isLoggedIn']): ?>
                <!-- Mobile User Menu -->
                <div class="border-t border-slate-200 dark:border-slate-700 pt-4 space-y-2">
                    <div class="flex items-center space-x-3 px-4 py-2">
                        <img src="<?php echo htmlspecialchars($data['userMenu']['userAvatar']); ?>" 
                             alt="<?php echo htmlspecialchars($data['userMenu']['userName']); ?>"
                             class="w-8 h-8 rounded-full object-cover">
                        <span class="font-medium text-slate-900 dark:text-white"><?php echo htmlspecialchars($data['userMenu']['userName']); ?></span>
                    </div>
                    
                    <?php foreach ($data['userMenu']['menuItems'] as $item): ?>
                        <?php if (!isset($item['separator'])): ?>
                            <a href="<?php echo htmlspecialchars($item['href']); ?>" 
                               class="flex items-center space-x-3 px-4 py-2 text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700 rounded-lg transition-colors">
                                <?php
                                switch($item['icon']) {
                                    case 'user':
                                        echo '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>';
                                        break;
                                    case 'settings':
                                        echo '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>';
                                        break;
                                    case 'logout':
                                        echo '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>';
                                        break;
                                }
                                ?>
                                <span><?php echo htmlspecialchars($item['label']); ?></span>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                
            <?php elseif (isset($data['authButtons'])): ?>
                <!-- Mobile Auth Buttons -->
                <div class="border-t border-slate-200 dark:border-slate-700 pt-4 space-y-2">
                    <a href="<?php echo htmlspecialchars($data['authButtons']['loginHref']); ?>" 
                       class="block px-4 py-2 text-center text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700 rounded-lg transition-colors font-medium">
                        <?php echo htmlspecialchars($data['authButtons']['loginText']); ?>
                    </a>
                    <a href="<?php echo htmlspecialchars($data['authButtons']['registerHref']); ?>" 
                       class="block px-4 py-2 text-center bg-blue-600 text-white hover:bg-blue-700 rounded-lg transition-colors font-medium">
                        <?php echo htmlspecialchars($data['authButtons']['registerText']); ?>
                    </a>
                </div>
            <?php endif; ?>
            
            <!-- Mobile CTA Button -->
            <?php if (isset($data['ctaButton'])): ?>
                <div class="px-4 mt-4">
                    <a href="<?php echo htmlspecialchars($data['ctaButton']['href']); ?>" 
                       class="block text-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-200">
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

function toggleUserMenu() {
    const userMenu = document.getElementById('userMenu');
    if (userMenu) {
        userMenu.classList.toggle('hidden');
    }
}

// Close user menu when clicking outside
document.addEventListener('click', function(event) {
    const userMenu = document.getElementById('userMenu');
    if (userMenu && !event.target.closest('.relative')) {
        userMenu.classList.add('hidden');
    }
});
</script>
