<section class="section-padding bg-gradient-to-br from-gray-50 via-white to-blue-50">
    <div class="container-custom">
        
        <?php if ($data['style'] === 'narrative'): ?>
        <!-- Narrative Style - Founder Journey -->
        <div class="max-w-6xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    <?php echo htmlspecialchars($data['title']); ?>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo htmlspecialchars($data['subtitle']); ?>
                </p>
            </div>

            <!-- Founder Section -->
            <div class="grid lg:grid-cols-2 gap-16 items-center mb-20">
                <div>
                    <div class="aspect-w-4 aspect-h-5 mb-8">
                        <img src="<?php echo htmlspecialchars($data['founder']['image']); ?>" 
                             alt="<?php echo htmlspecialchars($data['founder']['name']); ?>"
                             class="w-full h-full object-cover rounded-3xl shadow-2xl">
                    </div>
                </div>
                <div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">
                        <?php echo htmlspecialchars($data['founder']['name']); ?>
                    </h3>
                    <p class="text-xl text-primary-600 font-semibold mb-6">
                        <?php echo htmlspecialchars($data['founder']['title']); ?>
                    </p>
                    <blockquote class="text-lg text-gray-700 leading-relaxed mb-8 italic border-l-4 border-primary-500 pl-6">
                        "<?php echo htmlspecialchars($data['founder']['quote']); ?>"
                    </blockquote>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        <?php echo htmlspecialchars($data['founder']['story']); ?>
                    </p>
                    
                    <!-- Values -->
                    <div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-4">Unsere Grundwerte:</h4>
                        <ul class="space-y-3">
                            <?php foreach ($data['founder']['values'] as $value): ?>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-primary-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700"><?php echo htmlspecialchars($value); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Journey Timeline -->
            <div class="mb-16">
                <h3 class="text-3xl font-bold text-gray-900 text-center mb-12">Die Reise</h3>
                <div class="relative">
                    <!-- Timeline Line -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-primary-500 to-purple-500"></div>
                    
                    <div class="space-y-12">
                        <?php foreach ($data['founder']['journey'] as $index => $milestone): ?>
                        <div class="relative flex items-center <?php echo $index % 2 === 0 ? 'justify-start' : 'justify-end'; ?>">
                            <!-- Timeline Dot -->
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-white border-4 border-primary-500 rounded-full z-10"></div>
                            
                            <!-- Content -->
                            <div class="w-5/12 <?php echo $index % 2 === 0 ? 'pr-8 text-right' : 'pl-8'; ?>">
                                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
                                    <div class="text-2xl font-bold text-primary-600 mb-2">
                                        <?php echo htmlspecialchars($milestone['year']); ?>
                                    </div>
                                    <h4 class="text-xl font-semibold text-gray-900 mb-3">
                                        <?php echo htmlspecialchars($milestone['title']); ?>
                                    </h4>
                                    <p class="text-gray-600 leading-relaxed">
                                        <?php echo htmlspecialchars($milestone['description']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
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
        </div>
        
        <?php elseif ($data['style'] === 'timeline'): ?>
        <!-- Timeline Style - Company Origin -->
        <div class="max-w-6xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    <?php echo htmlspecialchars($data['title']); ?>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo htmlspecialchars($data['subtitle']); ?>
                </p>
            </div>

            <!-- Origin Story -->
            <div class="grid lg:grid-cols-2 gap-16 mb-20">
                <?php 
                $sections = [
                    ['title' => $data['origin']['problem'], 'text' => $data['origin']['problemText'], 'color' => 'red'],
                    ['title' => $data['origin']['solution'], 'text' => $data['origin']['solutionText'], 'color' => 'blue'],
                    ['title' => $data['origin']['vision'], 'text' => $data['origin']['visionText'], 'color' => 'purple'],
                    ['title' => $data['origin']['mission'], 'text' => $data['origin']['missionText'], 'color' => 'green']
                ];
                
                foreach ($sections as $index => $section):
                    if ($index % 2 === 0 && $index > 0) echo '</div><div class="grid lg:grid-cols-2 gap-16 mb-12">';
                ?>
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8">
                    <div class="w-12 h-12 bg-<?php echo $section['color']; ?>-100 text-<?php echo $section['color']; ?>-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        <?php echo htmlspecialchars($section['title']); ?>
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <?php echo htmlspecialchars($section['text']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Timeline -->
            <div class="mb-16">
                <h3 class="text-3xl font-bold text-gray-900 text-center mb-12">Entwicklungsphasen</h3>
                <div class="space-y-8">
                    <?php foreach ($data['timeline'] as $index => $phase): ?>
                    <div class="flex items-center">
                        <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-r from-primary-500 to-blue-600 text-white rounded-full flex items-center justify-center font-bold text-lg mr-8">
                            <?php echo $index + 1; ?>
                        </div>
                        <div class="flex-1 bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
                            <div class="grid md:grid-cols-3 gap-4 items-center">
                                <div>
                                    <h4 class="text-xl font-semibold text-gray-900 mb-2">
                                        <?php echo htmlspecialchars($phase['phase']); ?>
                                    </h4>
                                    <p class="text-primary-600 font-medium">
                                        <?php echo htmlspecialchars($phase['duration']); ?>
                                    </p>
                                </div>
                                <div class="md:col-span-2">
                                    <p class="text-gray-600 leading-relaxed">
                                        <?php echo htmlspecialchars($phase['description']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Achievements -->
            <div class="bg-gradient-to-r from-primary-600 to-purple-600 rounded-3xl p-8 lg:p-12 text-white text-center">
                <h3 class="text-3xl lg:text-4xl font-bold mb-8">Unsere Erfolge</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <?php foreach ($data['achievements'] as $achievement): ?>
                    <div class="flex items-center justify-center md:justify-start">
                        <svg class="w-6 h-6 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-lg"><?php echo htmlspecialchars($achievement); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        
        <?php else: ?>
        <!-- Default/Other Styles -->
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                <?php echo htmlspecialchars($data['title']); ?>
            </h2>
            <p class="text-xl text-gray-600 leading-relaxed">
                <?php echo htmlspecialchars($data['subtitle']); ?>
            </p>
        </div>
        <?php endif; ?>
    </div>
</section>

<style>
.aspect-w-4 {
    position: relative;
    padding-bottom: 125%;
}

.aspect-h-5 > * {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
</style>
