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

        <div class="grid lg:grid-cols-2 gap-16 items-start">
            <!-- Timeline -->
            <div class="space-y-8">
                <?php foreach ($data['timeline'] as $index => $item): ?>
                <div class="relative pl-8">
                    <!-- Timeline Line -->
                    <?php if ($index < count($data['timeline']) - 1): ?>
                    <div class="absolute left-4 top-12 w-px h-24 bg-gradient-to-b from-primary-500 to-primary-300"></div>
                    <?php endif; ?>
                    
                    <!-- Timeline Dot -->
                    <div class="absolute left-0 top-0 w-8 h-8 bg-gradient-to-r from-primary-500 to-blue-600 rounded-full flex items-center justify-center shadow-lg">
                        <div class="w-3 h-3 bg-white rounded-full"></div>
                    </div>
                    
                    <!-- Content -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-2xl font-bold text-primary-600"><?php echo htmlspecialchars($item['year']); ?></span>
                            <span class="px-3 py-1 bg-primary-100 text-primary-700 text-sm font-medium rounded-full">
                                <?php echo htmlspecialchars($item['milestone']); ?>
                            </span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">
                            <?php echo htmlspecialchars($item['title']); ?>
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            <?php echo htmlspecialchars($item['description']); ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Visual Content -->
            <div class="lg:sticky lg:top-8">
                <!-- Main Image -->
                <div class="relative mb-8">
                    <div class="aspect-w-4 aspect-h-3">
                        <img src="<?php echo htmlspecialchars($data['image']); ?>" 
                             alt="<?php echo htmlspecialchars($data['title']); ?>"
                             class="w-full h-full object-cover rounded-3xl shadow-2xl">
                    </div>
                    
                    <!-- Overlay Stats -->
                    <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-6 transform rotate-3 hover:rotate-0 transition-transform duration-300">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary-600"><?php echo htmlspecialchars($data['stats'][0]['value']); ?></div>
                            <div class="text-sm text-gray-600"><?php echo htmlspecialchars($data['stats'][0]['label']); ?></div>
                        </div>
                    </div>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-2 gap-4">
                    <?php foreach (array_slice($data['stats'], 1) as $stat): ?>
                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100 text-center hover:shadow-xl transition-shadow duration-300">
                        <div class="text-2xl lg:text-3xl font-bold text-gray-900 mb-2">
                            <?php echo htmlspecialchars($stat['value']); ?>
                        </div>
                        <div class="text-sm text-gray-600">
                            <?php echo htmlspecialchars($stat['label']); ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Quote/Vision -->
                <div class="mt-8 bg-gradient-to-r from-primary-50 to-blue-50 rounded-2xl p-6 border border-primary-100">
                    <svg class="w-8 h-8 text-primary-500 mb-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <p class="text-gray-700 italic text-lg leading-relaxed">
                        "Unser Erfolg basiert auf dem Vertrauen unserer Kunden und der Leidenschaft unseres Teams. Jeden Tag arbeiten wir daran, diese Werte zu leben und zu stärken."
                    </p>
                    <div class="mt-4 text-sm text-gray-600">
                        — Gründer & CEO
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom CTA -->
        <div class="mt-20 text-center">
            <div class="bg-gradient-to-r from-primary-600 to-blue-600 rounded-3xl p-8 lg:p-12 text-white">
                <h3 class="text-3xl lg:text-4xl font-bold mb-4">
                    Werden Sie Teil unserer Erfolgsgeschichte
                </h3>
                <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">
                    Lassen Sie uns gemeinsam das nächste Kapitel schreiben. Kontaktieren Sie uns noch heute.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact" 
                       class="inline-flex items-center justify-center px-8 py-4 bg-white text-primary-600 font-semibold rounded-xl hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                        Kontakt aufnehmen
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="#services" 
                       class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-semibold rounded-xl hover:bg-white hover:text-primary-600 transition-all duration-200">
                        Services entdecken
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.aspect-w-4 {
    position: relative;
    padding-bottom: 75%;
}

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
