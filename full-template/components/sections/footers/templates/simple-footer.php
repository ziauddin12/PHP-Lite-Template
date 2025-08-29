<?php
// Social Media Icons
$socialIcons = [
    'twitter' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>',
    'linkedin' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13v10h-6v-9a3 3 0 00-3-3 3 3 0 00-3 3v9H3V13M7 9a2 2 0 100-4 2 2 0 000 4z"/>',
    'github' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/>',
    'instagram' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z M4 2a2 2 0 100 4 2 2 0 000-4z"/>',
    'youtube' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M23 12s0-4.7-1.4-6.6c-.8-.9-1.7-.9-2.1-1C16.8 4 12 4 12 4s-4.8 0-7.5.4c-.4.1-1.3.1-2.1 1C1 7.3 1 12 1 12s0 4.7 1.4 6.6c.8.9 1.7.9 2.1 1C7.2 20 12 20 12 20s4.8 0 7.5-.4c.4-.1 1.3-.1 2.1-1C23 16.7 23 12 23 12z"/>',
    'xing' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 2l4 7-4 7h3l4-7-4-7H8z"/>'
];
?>

<footer class="bg-gray-900 text-white">
    <?php if ($data['style'] === 'minimal'): ?>
    <!-- Minimal Footer -->
    <div class="container-custom py-12">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <!-- Logo and Tagline -->
            <div class="flex items-center mb-6 md:mb-0">
                <div class="text-2xl font-bold mr-4">
                    <?php echo htmlspecialchars($data['companyName']); ?>
                </div>
                <div class="text-gray-400 text-sm">
                    <?php echo htmlspecialchars($data['tagline']); ?>
                </div>
            </div>
            
            <!-- Links -->
            <div class="flex items-center space-x-6 mb-6 md:mb-0">
                <?php foreach ($data['links'] as $text => $url): ?>
                <a href="<?php echo htmlspecialchars($url); ?>" 
                   class="text-gray-400 hover:text-white transition-colors duration-200 text-sm">
                    <?php echo htmlspecialchars($text); ?>
                </a>
                <?php endforeach; ?>
            </div>
            
            <!-- Social Links -->
            <div class="flex space-x-4">
                <?php foreach ($data['social'] as $platform => $url): ?>
                <a href="<?php echo htmlspecialchars($url); ?>" 
                   class="w-10 h-10 bg-gray-800 hover:bg-primary-600 text-gray-400 hover:text-white rounded-full flex items-center justify-center transition-all duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <?php echo $socialIcons[$platform] ?? $socialIcons['twitter']; ?>
                    </svg>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400 text-sm">
            <?php echo htmlspecialchars($data['copyright']); ?>
        </div>
    </div>
    
    <?php elseif ($data['style'] === 'basic'): ?>
    <!-- Basic Footer -->
    <div class="container-custom py-16">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <!-- Company Info -->
            <div class="lg:col-span-2">
                <div class="flex items-center mb-6">
                    <div class="text-3xl font-bold">
                        <?php echo htmlspecialchars($data['companyName']); ?>
                    </div>
                </div>
                <p class="text-gray-400 mb-6 text-lg leading-relaxed">
                    <?php echo htmlspecialchars($data['description']); ?>
                </p>
                <p class="text-primary-400 font-medium mb-6">
                    <?php echo htmlspecialchars($data['tagline']); ?>
                </p>
                
                <!-- Contact Info -->
                <div class="space-y-3 text-gray-400">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <?php echo htmlspecialchars($data['contact']['address']); ?>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <?php echo htmlspecialchars($data['contact']['phone']); ?>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <a href="mailto:<?php echo htmlspecialchars($data['contact']['email']); ?>" 
                           class="hover:text-white transition-colors duration-200">
                            <?php echo htmlspecialchars($data['contact']['email']); ?>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-6">Quick Links</h3>
                <ul class="space-y-3">
                    <?php foreach ($data['quickLinks'] as $text => $url): ?>
                    <li>
                        <a href="<?php echo htmlspecialchars($url); ?>" 
                           class="text-gray-400 hover:text-white transition-colors duration-200">
                            <?php echo htmlspecialchars($text); ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <!-- Legal Links -->
            <div>
                <h3 class="text-lg font-semibold mb-6">Rechtliches</h3>
                <ul class="space-y-3 mb-6">
                    <?php foreach ($data['legalLinks'] as $text => $url): ?>
                    <li>
                        <a href="<?php echo htmlspecialchars($url); ?>" 
                           class="text-gray-400 hover:text-white transition-colors duration-200">
                            <?php echo htmlspecialchars($text); ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                
                <!-- Newsletter -->
                <div>
                    <h4 class="font-semibold mb-3"><?php echo htmlspecialchars($data['newsletter']['title']); ?></h4>
                    <p class="text-gray-400 text-sm mb-4"><?php echo htmlspecialchars($data['newsletter']['description']); ?></p>
                    <div class="flex">
                        <input type="email" placeholder="E-Mail-Adresse" 
                               class="flex-1 px-4 py-2 bg-gray-800 border border-gray-700 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-primary-500 text-white">
                        <button class="px-6 py-2 bg-primary-600 hover:bg-primary-700 rounded-r-lg transition-colors duration-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Section -->
        <div class="border-t border-gray-800 pt-8">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="text-gray-400 text-sm mb-4 md:mb-0">
                    <?php echo htmlspecialchars($data['copyright']); ?>
                </div>
                
                <!-- Social Links -->
                <div class="flex space-x-4">
                    <?php foreach ($data['social'] as $platform => $url): ?>
                    <a href="<?php echo htmlspecialchars($url); ?>" 
                       class="w-10 h-10 bg-gray-800 hover:bg-primary-600 text-gray-400 hover:text-white rounded-full flex items-center justify-center transition-all duration-200 transform hover:scale-110">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <?php echo $socialIcons[$platform] ?? $socialIcons['twitter']; ?>
                        </svg>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    
    <?php else: ?>
    <!-- Contact Footer -->
    <div class="container-custom py-16">
        <div class="grid lg:grid-cols-4 gap-12 mb-12">
            <!-- Company Info -->
            <div class="lg:col-span-1">
                <div class="text-3xl font-bold mb-4">
                    <?php echo htmlspecialchars($data['companyName']); ?>
                </div>
                <p class="text-primary-400 font-medium mb-4">
                    <?php echo htmlspecialchars($data['tagline']); ?>
                </p>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    <?php echo htmlspecialchars($data['description']); ?>
                </p>
                
                <!-- Certifications -->
                <div>
                    <h4 class="font-semibold mb-3">Zertifizierungen</h4>
                    <div class="space-y-2">
                        <?php foreach ($data['certifications'] as $cert): ?>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-400 text-sm"><?php echo htmlspecialchars($cert); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
            <!-- Offices -->
            <div class="lg:col-span-1">
                <h3 class="text-lg font-semibold mb-6">Unsere Standorte</h3>
                <div class="space-y-6">
                    <?php foreach ($data['offices'] as $office): ?>
                    <div>
                        <h4 class="font-semibold text-primary-400 mb-2"><?php echo htmlspecialchars($office['city']); ?></h4>
                        <div class="text-gray-400 text-sm space-y-1">
                            <div><?php echo htmlspecialchars($office['address']); ?></div>
                            <div><?php echo htmlspecialchars($office['phone']); ?></div>
                            <div>
                                <a href="mailto:<?php echo htmlspecialchars($office['email']); ?>" 
                                   class="hover:text-white transition-colors duration-200">
                                    <?php echo htmlspecialchars($office['email']); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- Services -->
            <div>
                <h3 class="text-lg font-semibold mb-6">Services</h3>
                <ul class="space-y-3">
                    <?php foreach ($data['services'] as $text => $url): ?>
                    <li>
                        <a href="<?php echo htmlspecialchars($url); ?>" 
                           class="text-gray-400 hover:text-white transition-colors duration-200 flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <?php echo htmlspecialchars($text); ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <!-- Resources -->
            <div>
                <h3 class="text-lg font-semibold mb-6">Ressourcen</h3>
                <ul class="space-y-3">
                    <?php foreach ($data['resources'] as $text => $url): ?>
                    <li>
                        <a href="<?php echo htmlspecialchars($url); ?>" 
                           class="text-gray-400 hover:text-white transition-colors duration-200 flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <?php echo htmlspecialchars($text); ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        
        <!-- Bottom Section -->
        <div class="border-t border-gray-800 pt-8">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <div class="text-gray-400 text-sm mb-4 lg:mb-0">
                    <?php echo htmlspecialchars($data['copyright']); ?>
                </div>
                
                <!-- Social Links -->
                <div class="flex space-x-4">
                    <?php foreach ($data['social'] as $platform => $url): ?>
                    <a href="<?php echo htmlspecialchars($url); ?>" 
                       class="w-12 h-12 bg-gray-800 hover:bg-primary-600 text-gray-400 hover:text-white rounded-full flex items-center justify-center transition-all duration-200 transform hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <?php echo $socialIcons[$platform] ?? $socialIcons['twitter']; ?>
                        </svg>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</footer>
