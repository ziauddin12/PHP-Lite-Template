<footer class="bg-slate-900 dark:bg-slate-950 text-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        
        <!-- Main Footer Content -->
        <div class="grid <?php echo $data['gridColumns']; ?> gap-8 mb-12">
            
            <!-- Company Column -->
            <div class="<?php echo ($data['style'] === 'four-column' || $data['style'] === 'comprehensive') ? 'lg:col-span-1' : 'lg:col-span-1'; ?>">
                <!-- Logo -->
                <div class="mb-6">
                    <?php if (isset($data['logo'])): ?>
                        <img src="<?php echo htmlspecialchars($data['logo']); ?>" 
                             alt="<?php echo htmlspecialchars($data['logoText']); ?>"
                             class="h-8 mb-4">
                    <?php else: ?>
                        <div class="text-2xl font-bold mb-4">
                            <?php echo htmlspecialchars($data['logoText']); ?>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Description -->
                <?php if (isset($data['description'])): ?>
                    <p class="text-slate-400 mb-6 leading-relaxed">
                        <?php echo htmlspecialchars($data['description']); ?>
                    </p>
                <?php endif; ?>
                
                <!-- Company Address (for extended-services) -->
                <?php if (isset($data['companyAddress'])): ?>
                    <div class="text-slate-400 mb-6">
                        <div class="whitespace-pre-line"><?php echo htmlspecialchars($data['companyAddress']); ?></div>
                    </div>
                <?php endif; ?>
                
                <!-- Company Navigation -->
                <?php if (isset($data['companyNavigation']) && !empty($data['companyNavigation'])): ?>
                    <div class="mb-6">
                        <h4 class="text-white font-semibold mb-4">Unternehmen</h4>
                        <ul class="space-y-3">
                            <?php foreach ($data['companyNavigation'] as $item): ?>
                                <li>
                                    <a href="<?php echo htmlspecialchars($item['href']); ?>" 
                                       class="text-slate-400 hover:text-white transition-colors duration-200">
                                        <?php echo htmlspecialchars($item['label']); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
            
            <!-- Services Column (for 4-column layouts) -->
            <?php if (isset($data['serviceNavigation']) && !empty($data['serviceNavigation'])): ?>
                <div>
                    <h4 class="text-white font-semibold mb-4">
                        <?php echo ($data['style'] === 'extended-services') ? 'Dienstleistungen' : 'Services'; ?>
                    </h4>
                    <ul class="space-y-3">
                        <?php foreach ($data['serviceNavigation'] as $item): ?>
                            <li>
                                <a href="<?php echo htmlspecialchars($item['href']); ?>" 
                                   class="text-slate-400 hover:text-white transition-colors duration-200">
                                    <?php echo htmlspecialchars($item['label']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            
            <!-- Legal Links Column -->
            <?php if (isset($data['legalLinks']) && !empty($data['legalLinks'])): ?>
                <div>
                    <h4 class="text-white font-semibold mb-4">Rechtliches</h4>
                    <ul class="space-y-3">
                        <?php foreach ($data['legalLinks'] as $item): ?>
                            <li>
                                <a href="<?php echo htmlspecialchars($item['href']); ?>" 
                                   class="text-slate-400 hover:text-white transition-colors duration-200">
                                    <?php echo htmlspecialchars($item['label']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            
            <!-- Contact Column -->
            <?php if (isset($data['phone']) || isset($data['email']) || isset($data['address'])): ?>
                <div>
                    <h4 class="text-white font-semibold mb-4">Kontakt</h4>
                    <div class="space-y-3">
                        
                        <!-- Phone -->
                        <?php if (isset($data['phone'])): ?>
                            <div class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <a href="tel:<?php echo str_replace(' ', '', $data['phone']); ?>" 
                                   class="text-slate-400 hover:text-white transition-colors duration-200">
                                    <?php echo htmlspecialchars($data['phone']); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Email -->
                        <?php if (isset($data['email'])): ?>
                            <div class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <a href="mailto:<?php echo htmlspecialchars($data['email']); ?>" 
                                   class="text-slate-400 hover:text-white transition-colors duration-200">
                                    <?php echo htmlspecialchars($data['email']); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Address -->
                        <?php if (isset($data['address'])): ?>
                            <div class="flex items-start space-x-3">
                                <svg class="h-5 w-5 text-slate-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div class="text-slate-400">
                                    <?php echo nl2br(htmlspecialchars($data['address'])); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        
        <!-- Footer Bottom -->
        <div class="border-t border-slate-800 pt-8">
            
            <!-- Legal Disclaimer (for comprehensive) -->
            <?php if (isset($data['legalDisclaimer'])): ?>
                <div class="mb-6">
                    <p class="text-slate-400 text-sm leading-relaxed">
                        <?php echo htmlspecialchars($data['legalDisclaimer']); ?>
                    </p>
                    <?php if (isset($data['registrationNumber'])): ?>
                        <p class="text-slate-500 text-sm mt-2">
                            Registrierungsnummer: <?php echo htmlspecialchars($data['registrationNumber']); ?>
                        </p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            
            <!-- Copyright -->
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="text-slate-400 text-sm mb-4 md:mb-0">
                    © <?php echo htmlspecialchars($data['copyrightYear']); ?> <?php echo htmlspecialchars($data['companyName']); ?>. Alle Rechte vorbehalten.
                </div>
                
                <!-- Social Links -->
                <div class="flex space-x-4">
                    <a href="#" class="text-slate-400 hover:text-white transition-colors duration-200">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-white transition-colors duration-200">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-white transition-colors duration-200">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24c6.624 0 11.99-5.367 11.99-11.987C24.007 5.367 18.641.001.001 12.017z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
