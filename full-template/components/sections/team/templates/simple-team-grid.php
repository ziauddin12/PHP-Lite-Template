<?php
// Social Media Icons
$socialIcons = [
    'linkedin' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13v10h-6v-9a3 3 0 00-3-3 3 3 0 00-3 3v9H3V13M7 9a2 2 0 100-4 2 2 0 000 4z"/>',
    'twitter' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>',
    'github' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/>',
    'email' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>',
    'dribbble' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM8.5 8.5c2.5 1 4.5 3 5.5 5.5M15.5 8.5c-2.5 1-4.5 3-5.5 5.5M12 12c1 2.5 3 4.5 5.5 5.5"/>',
    'instagram' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z M4 2a2 2 0 100 4 2 2 0 000-4z"/>',
    'xing' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 2l4 7-4 7h3l4-7-4-7H8z"/>',
    'scholar' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>'
];
?>

<section class="section-padding bg-gradient-to-br from-gray-50 via-white to-blue-50">
    <div class="container-custom">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                <?php echo htmlspecialchars($data['title']); ?>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                <?php echo htmlspecialchars($data['subtitle']); ?>
            </p>
        </div>

        <!-- Team Grid -->
        <div class="grid <?php echo $data['layout']; ?> gap-8 mb-16">
            <?php foreach ($data['members'] as $member): ?>
            <div class="group bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                
                <?php if ($data['style'] === 'card'): ?>
                <!-- Card Style -->
                <div class="aspect-w-4 aspect-h-5">
                    <img src="<?php echo htmlspecialchars($member['image']); ?>" 
                         alt="<?php echo htmlspecialchars($member['name']); ?>"
                         class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                        <?php echo htmlspecialchars($member['name']); ?>
                    </h3>
                    <p class="text-primary-600 font-medium mb-4">
                        <?php echo htmlspecialchars($member['position']); ?>
                    </p>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        <?php echo htmlspecialchars($member['bio']); ?>
                    </p>
                    
                    <!-- Social Links -->
                    <div class="flex space-x-3">
                        <?php foreach ($member['social'] as $platform => $url): ?>
                        <a href="<?php echo htmlspecialchars($url); ?>" 
                           class="w-10 h-10 bg-gray-100 hover:bg-primary-600 text-gray-600 hover:text-white rounded-full flex items-center justify-center transition-all duration-200 transform hover:scale-110">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <?php echo $socialIcons[$platform] ?? $socialIcons['linkedin']; ?>
                            </svg>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <?php elseif ($data['style'] === 'executive'): ?>
                <!-- Executive Style -->
                <div class="p-8 text-center">
                    <div class="w-32 h-32 mx-auto mb-6 relative">
                        <img src="<?php echo htmlspecialchars($member['image']); ?>" 
                             alt="<?php echo htmlspecialchars($member['name']); ?>"
                             class="w-full h-full object-cover rounded-full border-4 border-primary-200 group-hover:border-primary-500 transition-colors duration-300">
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full border-4 border-white"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">
                        <?php echo htmlspecialchars($member['name']); ?>
                    </h3>
                    <p class="text-primary-600 font-semibold mb-4 text-lg">
                        <?php echo htmlspecialchars($member['position']); ?>
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        <?php echo htmlspecialchars($member['bio']); ?>
                    </p>
                    
                    <!-- Social Links -->
                    <div class="flex justify-center space-x-4">
                        <?php foreach ($member['social'] as $platform => $url): ?>
                        <a href="<?php echo htmlspecialchars($url); ?>" 
                           class="w-12 h-12 bg-primary-100 hover:bg-primary-600 text-primary-600 hover:text-white rounded-xl flex items-center justify-center transition-all duration-200 transform hover:scale-110">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <?php echo $socialIcons[$platform] ?? $socialIcons['linkedin']; ?>
                            </svg>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <?php elseif ($data['style'] === 'detailed'): ?>
                <!-- Detailed Style -->
                <div class="p-8">
                    <div class="flex items-start mb-6">
                        <div class="w-20 h-20 mr-6 flex-shrink-0">
                            <img src="<?php echo htmlspecialchars($member['image']); ?>" 
                                 alt="<?php echo htmlspecialchars($member['name']); ?>"
                                 class="w-full h-full object-cover rounded-2xl">
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">
                                <?php echo htmlspecialchars($member['name']); ?>
                            </h3>
                            <p class="text-primary-600 font-semibold text-lg mb-4">
                                <?php echo htmlspecialchars($member['position']); ?>
                            </p>
                        </div>
                    </div>
                    
                    <p class="text-gray-600 leading-relaxed mb-6">
                        <?php echo htmlspecialchars($member['bio']); ?>
                    </p>
                    
                    <?php if (isset($member['achievements'])): ?>
                    <!-- Achievements -->
                    <div class="mb-6">
                        <h4 class="text-sm font-semibold text-gray-900 mb-3">Auszeichnungen & Erfolge:</h4>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($member['achievements'] as $achievement): ?>
                            <span class="px-3 py-1 bg-primary-100 text-primary-700 text-xs font-medium rounded-full">
                                <?php echo htmlspecialchars($achievement); ?>
                            </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Social Links -->
                    <div class="flex space-x-4">
                        <?php foreach ($member['social'] as $platform => $url): ?>
                        <a href="<?php echo htmlspecialchars($url); ?>" 
                           class="flex items-center space-x-2 px-4 py-2 bg-gray-100 hover:bg-primary-600 text-gray-600 hover:text-white rounded-lg transition-all duration-200 text-sm font-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <?php echo $socialIcons[$platform] ?? $socialIcons['linkedin']; ?>
                            </svg>
                            <span class="capitalize"><?php echo $platform; ?></span>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <?php else: ?>
                <!-- Compact/Extended Style -->
                <div class="p-6 text-center">
                    <div class="w-24 h-24 mx-auto mb-4 relative">
                        <img src="<?php echo htmlspecialchars($member['image']); ?>" 
                             alt="<?php echo htmlspecialchars($member['name']); ?>"
                             class="w-full h-full object-cover rounded-full border-2 border-gray-200 group-hover:border-primary-500 transition-colors duration-300">
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1">
                        <?php echo htmlspecialchars($member['name']); ?>
                    </h3>
                    <p class="text-primary-600 font-medium mb-3 text-sm">
                        <?php echo htmlspecialchars($member['position']); ?>
                    </p>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        <?php echo htmlspecialchars($member['bio']); ?>
                    </p>
                    
                    <!-- Social Links -->
                    <div class="flex justify-center space-x-2">
                        <?php foreach ($member['social'] as $platform => $url): ?>
                        <a href="<?php echo htmlspecialchars($url); ?>" 
                           class="w-8 h-8 bg-gray-100 hover:bg-primary-600 text-gray-600 hover:text-white rounded-full flex items-center justify-center transition-all duration-200">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <?php echo $socialIcons[$platform] ?? $socialIcons['linkedin']; ?>
                            </svg>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- CTA Section (if style is 'cta') -->
        <?php if ($data['style'] === 'cta' && isset($data['cta'])): ?>
        <div class="bg-gradient-to-r from-primary-600 to-purple-600 rounded-3xl p-8 lg:p-12 text-white text-center">
            <h3 class="text-3xl lg:text-4xl font-bold mb-4">
                <?php echo htmlspecialchars($data['cta']['title']); ?>
            </h3>
            <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">
                Werde Teil eines Teams, das die Zukunft gestaltet. Entdecke spannende Karrieremöglichkeiten.
            </p>
            <a href="<?php echo htmlspecialchars($data['cta']['link']); ?>" 
               class="inline-flex items-center justify-center px-8 py-4 bg-white text-primary-600 font-semibold rounded-xl hover:bg-gray-100 transition-colors duration-200 shadow-lg transform hover:scale-105">
                <?php echo htmlspecialchars($data['cta']['text']); ?>
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
        <?php else: ?>
        <!-- Standard Bottom CTA -->
        <div class="text-center mt-16">
            <div class="bg-gradient-to-r from-gray-900 to-gray-800 rounded-3xl p-8 lg:p-12 text-white">
                <h3 class="text-3xl lg:text-4xl font-bold mb-4">
                    Interessiert an einer Zusammenarbeit?
                </h3>
                <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">
                    Lassen Sie uns gemeinsam großartige Projekte verwirklichen. Kontaktieren Sie unser Team.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact" 
                       class="inline-flex items-center justify-center px-8 py-4 bg-white text-gray-900 font-semibold rounded-xl hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                        Kontakt aufnehmen
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </a>
                    <a href="#careers" 
                       class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-semibold rounded-xl hover:bg-white hover:text-gray-900 transition-all duration-200">
                        Karriere-Möglichkeiten
                    </a>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
