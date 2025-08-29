<section class="section-padding bg-gradient-to-br from-gray-50 via-white to-purple-50">
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

        <!-- Pricing Toggle (Optional) -->
        <div class="flex justify-center mb-12">
            <div class="bg-gray-100 rounded-full p-1 flex items-center">
                <button class="px-6 py-2 rounded-full text-sm font-medium bg-white text-gray-900 shadow-sm">
                    Monatlich
                </button>
                <button class="px-6 py-2 rounded-full text-sm font-medium text-gray-600 hover:text-gray-900">
                    Jährlich <span class="text-xs bg-green-100 text-green-600 px-2 py-1 rounded-full ml-1">-20%</span>
                </button>
            </div>
        </div>

        <!-- Pricing Cards -->
        <div class="grid lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <?php foreach ($data['plans'] as $plan): ?>
            <div class="relative bg-white rounded-3xl shadow-lg border border-gray-200 overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 <?php echo $plan['popular'] ? 'ring-2 ring-primary-500 scale-105' : ''; ?>">
                
                <!-- Popular Badge -->
                <?php if ($plan['popular']): ?>
                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <div class="bg-gradient-to-r from-primary-500 to-purple-600 text-white px-6 py-2 rounded-full text-sm font-bold shadow-lg">
                        Beliebtester Plan
                    </div>
                </div>
                <?php endif; ?>

                <div class="p-8">
                    <!-- Plan Header -->
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">
                            <?php echo htmlspecialchars($plan['name']); ?>
                        </h3>
                        <p class="text-gray-600 mb-6">
                            <?php echo htmlspecialchars($plan['description']); ?>
                        </p>
                        
                        <!-- Price -->
                        <div class="flex items-baseline justify-center mb-2">
                            <span class="text-5xl font-bold text-gray-900">
                                <?php echo htmlspecialchars($plan['currency'] . $plan['price']); ?>
                            </span>
                            <span class="text-xl text-gray-600 ml-1">
                                <?php echo htmlspecialchars($plan['period']); ?>
                            </span>
                        </div>
                    </div>

                    <!-- Features -->
                    <ul class="space-y-4 mb-8">
                        <?php foreach ($plan['features'] as $feature): ?>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700"><?php echo htmlspecialchars($feature); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <!-- CTA Button -->
                    <a href="<?php echo htmlspecialchars($plan['ctaLink']); ?>" 
                       class="block w-full text-center py-4 px-6 rounded-xl font-semibold transition-all duration-200 <?php 
                       if ($plan['popular']) {
                           echo 'bg-gradient-to-r from-primary-600 to-purple-600 hover:from-primary-700 hover:to-purple-700 text-white shadow-lg hover:shadow-xl';
                       } else {
                           echo 'bg-gray-100 hover:bg-gray-200 text-gray-900 border border-gray-200 hover:border-gray-300';
                       }
                       ?>">
                        <?php echo htmlspecialchars($plan['ctaText']); ?>
                    </a>
                </div>

                <!-- Bottom accent -->
                <div class="h-2 bg-gradient-to-r <?php 
                switch ($plan['color']) {
                    case 'primary': echo 'from-primary-500 to-blue-600'; break;
                    case 'purple': echo 'from-purple-500 to-pink-600'; break;
                    case 'green': echo 'from-green-500 to-emerald-600'; break;
                    case 'blue': echo 'from-blue-500 to-cyan-600'; break;
                    default: echo 'from-gray-400 to-gray-600';
                }
                ?>"></div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Guarantee Badge -->
        <div class="text-center mt-12">
            <div class="inline-flex items-center px-6 py-3 bg-green-50 text-green-700 rounded-full border border-green-200">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                <?php echo htmlspecialchars($data['guarantee']); ?>
            </div>
        </div>

        <!-- FAQ Section -->
        <?php if (!empty($data['faq'])): ?>
        <div class="mt-20">
            <h3 class="text-3xl font-bold text-gray-900 text-center mb-12">Häufige Fragen</h3>
            <div class="max-w-3xl mx-auto space-y-6">
                <?php foreach ($data['faq'] as $item): ?>
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                    <h4 class="text-lg font-semibold text-gray-900 mb-3">
                        <?php echo htmlspecialchars($item['question']); ?>
                    </h4>
                    <p class="text-gray-600">
                        <?php echo htmlspecialchars($item['answer']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- Bottom CTA -->
        <div class="mt-20 text-center">
            <div class="bg-gradient-to-r from-gray-900 to-gray-800 rounded-3xl p-8 lg:p-12 text-white">
                <h3 class="text-3xl lg:text-4xl font-bold mb-4">
                    Noch Fragen zu unseren Plänen?
                </h3>
                <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">
                    Unser Team hilft Ihnen gerne dabei, den perfekten Plan für Ihre Bedürfnisse zu finden.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact" 
                       class="inline-flex items-center justify-center px-8 py-4 bg-white text-gray-900 font-semibold rounded-xl hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                        Beratung anfragen
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </a>
                    <a href="#demo" 
                       class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-semibold rounded-xl hover:bg-white hover:text-gray-900 transition-all duration-200">
                        Live-Demo buchen
                    </a>
                </div>
            </div>
        </div>

        <!-- Trust Indicators -->
        <div class="mt-16 text-center">
            <p class="text-gray-500 text-sm mb-6">Vertraut von über 10.000 Unternehmen weltweit</p>
            <div class="flex justify-center items-center space-x-8 opacity-60">
                <div class="w-20 h-8 bg-gray-300 rounded flex items-center justify-center text-xs font-bold text-gray-600">LOGO 1</div>
                <div class="w-20 h-8 bg-gray-300 rounded flex items-center justify-center text-xs font-bold text-gray-600">LOGO 2</div>
                <div class="w-20 h-8 bg-gray-300 rounded flex items-center justify-center text-xs font-bold text-gray-600">LOGO 3</div>
                <div class="w-20 h-8 bg-gray-300 rounded flex items-center justify-center text-xs font-bold text-gray-600">LOGO 4</div>
                <div class="w-20 h-8 bg-gray-300 rounded flex items-center justify-center text-xs font-bold text-gray-600">LOGO 5</div>
            </div>
        </div>
    </div>
</section>
