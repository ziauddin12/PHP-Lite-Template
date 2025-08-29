<?php
// Style-abhängige CSS-Klassen
$styleClasses = [
    'gradient' => 'bg-gradient-to-br from-red-600 via-red-500 to-orange-500',
    'clean' => 'bg-gradient-to-br from-green-50 via-white to-green-50',
    'professional' => 'bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900',
    'bold' => 'bg-gradient-to-br from-orange-600 via-red-500 to-pink-600',
    'split' => 'bg-gradient-to-r from-purple-900 via-blue-900 to-indigo-900',
    'minimal' => 'bg-gray-50'
];

$textColorClasses = [
    'gradient' => 'text-white',
    'clean' => 'text-gray-900',
    'professional' => 'text-white',
    'bold' => 'text-white',
    'split' => 'text-white',
    'minimal' => 'text-gray-900'
];

$bgClass = $styleClasses[$data['style']] ?? $styleClasses['gradient'];
$textClass = $textColorClasses[$data['style']] ?? $textColorClasses['gradient'];
?>

<section class="relative section-padding overflow-hidden <?php echo $bgClass; ?>" 
         <?php if ($data['backgroundImage']): ?>
         style="background-image: url('<?php echo htmlspecialchars($data['backgroundImage']); ?>'); background-size: cover; background-position: center;"
         <?php endif; ?>>
    
    <!-- Background Overlay -->
    <?php if ($data['backgroundImage']): ?>
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <?php endif; ?>
    
    <!-- Background Elements -->
    <?php if ($data['style'] === 'gradient' || $data['style'] === 'bold'): ?>
    <div class="absolute inset-0">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-white bg-opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-white bg-opacity-10 rounded-full blur-3xl"></div>
    </div>
    <?php endif; ?>
    
    <div class="relative z-10 container-custom">
        <?php if ($data['style'] === 'split'): ?>
        <!-- Split Layout -->
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Text Content -->
            <div class="space-y-8">
                <?php if ($data['urgency']): ?>
                <div class="inline-flex items-center px-4 py-2 bg-red-500 text-white rounded-full text-sm font-bold animate-pulse">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.414-1.414L11 9.586V6z" clip-rule="evenodd"></path>
                    </svg>
                    <?php echo htmlspecialchars($data['urgency']); ?>
                </div>
                <?php endif; ?>
                
                <div>
                    <h2 class="text-4xl lg:text-6xl font-bold <?php echo $textClass; ?> mb-6 leading-tight">
                        <?php echo htmlspecialchars($data['title']); ?>
                    </h2>
                    <p class="text-xl <?php echo $data['style'] === 'clean' ? 'text-gray-600' : 'text-white opacity-90'; ?> leading-relaxed">
                        <?php echo htmlspecialchars($data['subtitle']); ?>
                    </p>
                </div>
                
                <!-- Benefits -->
                <ul class="space-y-3">
                    <?php foreach ($data['benefits'] as $benefit): ?>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="<?php echo $data['style'] === 'clean' ? 'text-gray-700' : 'text-white'; ?> font-medium">
                            <?php echo htmlspecialchars($benefit); ?>
                        </span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <!-- CTA Buttons -->
            <div class="space-y-6">
                <a href="<?php echo htmlspecialchars($data['ctaLink']); ?>" 
                   class="block w-full text-center py-6 px-8 bg-white text-gray-900 font-bold text-xl rounded-2xl hover:bg-gray-100 transition-all duration-200 shadow-2xl hover:shadow-3xl transform hover:-translate-y-1">
                    <?php echo htmlspecialchars($data['ctaText']); ?>
                    <svg class="w-6 h-6 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                
                <?php if ($data['secondaryCtaText']): ?>
                <a href="<?php echo htmlspecialchars($data['secondaryCtaLink']); ?>" 
                   class="block w-full text-center py-4 px-8 border-2 border-white text-white font-semibold text-lg rounded-2xl hover:bg-white hover:text-gray-900 transition-all duration-200">
                    <?php echo htmlspecialchars($data['secondaryCtaText']); ?>
                </a>
                <?php endif; ?>
            </div>
        </div>
        
        <?php else: ?>
        <!-- Centered Layout -->
        <div class="text-center max-w-4xl mx-auto">
            <?php if ($data['urgency']): ?>
            <div class="inline-flex items-center px-6 py-3 bg-red-500 text-white rounded-full text-sm font-bold mb-8 animate-pulse shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.414-1.414L11 9.586V6z" clip-rule="evenodd"></path>
                </svg>
                <?php echo htmlspecialchars($data['urgency']); ?>
            </div>
            <?php endif; ?>
            
            <h2 class="text-4xl lg:text-6xl xl:text-7xl font-bold <?php echo $textClass; ?> mb-8 leading-tight">
                <?php echo htmlspecialchars($data['title']); ?>
            </h2>
            
            <p class="text-xl lg:text-2xl <?php echo $data['style'] === 'clean' ? 'text-gray-600' : 'text-white opacity-90'; ?> mb-12 leading-relaxed max-w-3xl mx-auto">
                <?php echo htmlspecialchars($data['subtitle']); ?>
            </p>
            
            <!-- Benefits -->
            <div class="flex flex-wrap justify-center gap-6 mb-12">
                <?php foreach ($data['benefits'] as $benefit): ?>
                <div class="flex items-center bg-white bg-opacity-20 backdrop-blur-sm rounded-full px-6 py-3">
                    <svg class="w-5 h-5 text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="<?php echo $data['style'] === 'clean' ? 'text-gray-700' : 'text-white'; ?> font-medium">
                        <?php echo htmlspecialchars($benefit); ?>
                    </span>
                </div>
                <?php endforeach; ?>
            </div>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="<?php echo htmlspecialchars($data['ctaLink']); ?>" 
                   class="inline-flex items-center justify-center px-12 py-6 <?php 
                   if ($data['style'] === 'clean') {
                       echo 'bg-primary-600 hover:bg-primary-700 text-white';
                   } else {
                       echo 'bg-white text-gray-900 hover:bg-gray-100';
                   }
                   ?> font-bold text-xl rounded-2xl transition-all duration-200 shadow-2xl hover:shadow-3xl transform hover:-translate-y-2">
                    <?php echo htmlspecialchars($data['ctaText']); ?>
                    <svg class="w-6 h-6 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                
                <?php if ($data['secondaryCtaText']): ?>
                <a href="<?php echo htmlspecialchars($data['secondaryCtaLink']); ?>" 
                   class="inline-flex items-center justify-center px-8 py-4 <?php 
                   if ($data['style'] === 'clean') {
                       echo 'border-2 border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white';
                   } else {
                       echo 'border-2 border-white text-white hover:bg-white hover:text-gray-900';
                   }
                   ?> font-semibold text-lg rounded-xl transition-all duration-200">
                    <?php echo htmlspecialchars($data['secondaryCtaText']); ?>
                </a>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Trust Indicators -->
        <?php if ($data['style'] !== 'minimal'): ?>
        <div class="mt-16 text-center">
            <p class="<?php echo $data['style'] === 'clean' ? 'text-gray-500' : 'text-white opacity-70'; ?> text-sm mb-6">
                Vertraut von über 10.000 Unternehmen weltweit
            </p>
            <div class="flex justify-center items-center space-x-8 opacity-60">
                <div class="w-20 h-8 bg-white bg-opacity-20 rounded flex items-center justify-center text-xs font-bold <?php echo $data['style'] === 'clean' ? 'text-gray-600' : 'text-white'; ?>">LOGO 1</div>
                <div class="w-20 h-8 bg-white bg-opacity-20 rounded flex items-center justify-center text-xs font-bold <?php echo $data['style'] === 'clean' ? 'text-gray-600' : 'text-white'; ?>">LOGO 2</div>
                <div class="w-20 h-8 bg-white bg-opacity-20 rounded flex items-center justify-center text-xs font-bold <?php echo $data['style'] === 'clean' ? 'text-gray-600' : 'text-white'; ?>">LOGO 3</div>
                <div class="w-20 h-8 bg-white bg-opacity-20 rounded flex items-center justify-center text-xs font-bold <?php echo $data['style'] === 'clean' ? 'text-gray-600' : 'text-white'; ?>">LOGO 4</div>
            </div>
        </div>
        <?php endif; ?>
    </div>
    
    <!-- Floating Elements -->
    <?php if ($data['style'] === 'bold' || $data['style'] === 'gradient'): ?>
    <div class="absolute top-20 right-20 w-4 h-4 bg-white bg-opacity-30 rounded-full animate-ping"></div>
    <div class="absolute bottom-32 left-16 w-6 h-6 bg-white bg-opacity-20 rounded-full animate-pulse"></div>
    <div class="absolute top-1/2 right-32 w-3 h-3 bg-white bg-opacity-40 rounded-full animate-bounce"></div>
    <?php endif; ?>
</section>
