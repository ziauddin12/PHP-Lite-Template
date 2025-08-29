<?php
// Icon mapping for values
$iconMap = [
    'users' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>',
    'lightbulb' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>',
    'eye' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>',
    'star' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>',
    'leaf' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>',
    'heart' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>'
];

// Color mapping
$colorMap = [
    'blue' => ['bg' => 'bg-blue-100', 'text' => 'text-blue-600', 'border' => 'border-blue-200'],
    'purple' => ['bg' => 'bg-purple-100', 'text' => 'text-purple-600', 'border' => 'border-purple-200'],
    'green' => ['bg' => 'bg-green-100', 'text' => 'text-green-600', 'border' => 'border-green-200'],
    'orange' => ['bg' => 'bg-orange-100', 'text' => 'text-orange-600', 'border' => 'border-orange-200'],
    'emerald' => ['bg' => 'bg-emerald-100', 'text' => 'text-emerald-600', 'border' => 'border-emerald-200'],
    'pink' => ['bg' => 'bg-pink-100', 'text' => 'text-pink-600', 'border' => 'border-pink-200']
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

        <?php if ($data['style'] === 'comprehensive'): ?>
        <!-- Comprehensive Values Style -->
        <div class="grid lg:grid-cols-2 xl:grid-cols-3 gap-8 mb-20">
            <?php foreach ($data['values'] as $index => $value): ?>
            <?php $colors = $colorMap[$value['color']] ?? $colorMap['blue']; ?>
            <div class="bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <!-- Image -->
                <div class="aspect-w-16 aspect-h-12">
                    <img src="<?php echo htmlspecialchars($value['image']); ?>" 
                         alt="<?php echo htmlspecialchars($value['title']); ?>"
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Content -->
                <div class="p-8">
                    <!-- Icon & Title -->
                    <div class="flex items-center mb-6">
                        <div class="w-14 h-14 <?php echo $colors['bg']; ?> <?php echo $colors['text']; ?> rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <?php echo $iconMap[$value['icon']] ?? $iconMap['star']; ?>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">
                            <?php echo htmlspecialchars($value['title']); ?>
                        </h3>
                    </div>
                    
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        <?php echo htmlspecialchars($value['description']); ?>
                    </p>
                    
                    <!-- Details -->
                    <div class="space-y-3">
                        <?php foreach ($value['details'] as $detail): ?>
                        <div class="flex items-start">
                            <svg class="w-5 h-5 <?php echo $colors['text']; ?> mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700 text-sm leading-relaxed"><?php echo htmlspecialchars($detail); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <?php foreach ($data['stats'] as $stat): ?>
            <div class="text-center p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
                <div class="text-4xl font-bold text-primary-600 mb-2">
                    <?php echo htmlspecialchars($stat['number']); ?>
                </div>
                <div class="text-sm text-gray-600">
                    <?php echo htmlspecialchars($stat['label']); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <?php elseif ($data['style'] === 'culture'): ?>
        <!-- Culture-Focused Style -->
        <div class="space-y-20">
            <?php foreach ($data['culture_elements'] as $index => $element): ?>
            <div class="grid lg:grid-cols-2 gap-16 items-center <?php echo $index % 2 === 1 ? 'lg:flex-row-reverse' : ''; ?>">
                <!-- Image -->
                <div class="<?php echo $index % 2 === 1 ? 'lg:order-2' : ''; ?>">
                    <div class="aspect-w-4 aspect-h-3">
                        <img src="<?php echo htmlspecialchars($element['image']); ?>" 
                             alt="<?php echo htmlspecialchars($element['title']); ?>"
                             class="w-full h-full object-cover rounded-3xl shadow-2xl">
                    </div>
                </div>
                
                <!-- Content -->
                <div class="<?php echo $index % 2 === 1 ? 'lg:order-1' : ''; ?>">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">
                        <?php echo htmlspecialchars($element['title']); ?>
                    </h3>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        <?php echo htmlspecialchars($element['description']); ?>
                    </p>
                    
                    <!-- Practices -->
                    <div class="space-y-4">
                        <?php foreach ($element['practices'] as $practice): ?>
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-primary-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700 text-lg"><?php echo htmlspecialchars($practice); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Employee Testimonials -->
        <div class="mt-20">
            <h3 class="text-3xl font-bold text-gray-900 text-center mb-12">Was unsere Mitarbeiter sagen</h3>
            <div class="grid md:grid-cols-2 gap-8">
                <?php foreach ($data['testimonials'] as $testimonial): ?>
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="<?php echo htmlspecialchars($testimonial['image']); ?>" 
                                 alt="<?php echo htmlspecialchars($testimonial['author']); ?>"
                                 class="w-full h-full object-cover">
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900"><?php echo htmlspecialchars($testimonial['author']); ?></div>
                        </div>
                    </div>
                    <blockquote class="text-lg text-gray-700 italic">
                        "<?php echo htmlspecialchars($testimonial['text']); ?>"
                    </blockquote>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <?php elseif ($data['style'] === 'mission-vision'): ?>
        <!-- Mission-Vision Style -->
        <div class="space-y-20">
            <!-- Mission, Vision, Purpose -->
            <?php 
            $sections = [
                ['data' => $data['mission'], 'color' => 'blue'],
                ['data' => $data['vision'], 'color' => 'purple'],
                ['data' => $data['purpose'], 'color' => 'green']
            ];
            foreach ($sections as $index => $section): 
            ?>
            <div class="text-center mb-16">
                <div class="max-w-4xl mx-auto">
                    <h3 class="text-4xl font-bold text-gray-900 mb-6">
                        <?php echo htmlspecialchars($section['data']['title']); ?>
                    </h3>
                    <p class="text-2xl text-gray-600 mb-8 leading-relaxed">
                        <?php echo htmlspecialchars($section['data']['text']); ?>
                    </p>
                    
                    <!-- Details Grid -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <?php foreach ($section['data']['details'] as $detail): ?>
                        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-<?php echo $section['color']; ?>-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700"><?php echo htmlspecialchars($detail); ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Impact Metrics -->
        <div class="bg-gradient-to-r from-primary-600 to-purple-600 rounded-3xl p-8 lg:p-12 text-white text-center">
            <h3 class="text-3xl lg:text-4xl font-bold mb-8">Unser Impact</h3>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <?php foreach ($data['impact_metrics'] as $metric): ?>
                <div>
                    <div class="text-4xl font-bold mb-2"><?php echo htmlspecialchars($metric['metric']); ?></div>
                    <div class="text-lg opacity-90"><?php echo htmlspecialchars($metric['description']); ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <?php else: ?>
        <!-- Principles-Driven Style -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($data['principles'] as $index => $principle): ?>
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-2xl transition-all duration-300">
                <div class="mb-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">
                        <?php echo htmlspecialchars($principle['title']); ?>
                    </h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        <?php echo htmlspecialchars($principle['description']); ?>
                    </p>
                </div>
                
                <!-- Examples -->
                <div>
                    <h4 class="text-sm font-semibold text-gray-900 mb-3">In der Praxis:</h4>
                    <ul class="space-y-2">
                        <?php foreach ($principle['examples'] as $example): ?>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm text-gray-600"><?php echo htmlspecialchars($example); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <!-- Bottom CTA -->
        <div class="mt-20 text-center">
            <div class="bg-gradient-to-r from-primary-600 to-purple-600 rounded-3xl p-8 lg:p-12 text-white">
                <h3 class="text-3xl lg:text-4xl font-bold mb-4">
                    Teilen Sie unsere Werte?
                </h3>
                <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">
                    Werden Sie Teil eines Teams, das täglich diese Werte lebt und gemeinsam Großes erreicht.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#careers" 
                       class="inline-flex items-center justify-center px-8 py-4 bg-white text-primary-600 font-semibold rounded-xl hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                        Karriere-Möglichkeiten
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="#about" 
                       class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-semibold rounded-xl hover:bg-white hover:text-primary-600 transition-all duration-200">
                        Mehr über uns
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.aspect-w-16 {
    position: relative;
    padding-bottom: 75%;
}

.aspect-w-4 {
    position: relative;
    padding-bottom: 75%;
}

.aspect-h-12 > *,
.aspect-h-3 > * {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
</style>
