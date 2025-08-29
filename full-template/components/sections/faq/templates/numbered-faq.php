<section class="py-24 lg:py-32 <?php echo ($data['colorScheme'] === 'blue') ? 'bg-gradient-to-br from-blue-50 to-cyan-100 dark:from-blue-900 dark:to-cyan-800' : (($data['colorScheme'] === 'purple') ? 'bg-gradient-to-br from-purple-50 to-pink-100 dark:from-purple-900 dark:to-pink-800' : (($data['colorScheme'] === 'green') ? 'bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900 dark:to-emerald-800' : 'bg-gradient-to-br from-orange-50 to-red-100 dark:from-orange-900 dark:to-red-800')); ?>">
    <div class="max-w-4xl mx-auto px-4">
        
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 dark:text-white mb-6">
                <?php echo htmlspecialchars($data['headline']); ?>
            </h2>
            <p class="text-xl text-slate-600 dark:text-slate-400 max-w-3xl mx-auto leading-relaxed">
                <?php echo htmlspecialchars($data['description']); ?>
            </p>
        </div>
        
        <!-- FAQ Numbered List -->
        <div class="space-y-8">
            <?php foreach ($data['faqs'] as $index => $faq): ?>
                <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 overflow-hidden transition-all duration-300 hover:shadow-xl">
                    
                    <!-- Question Header -->
                    <button class="w-full px-8 py-6 text-left focus:outline-none focus:ring-2 focus:ring-<?php echo $data['colorScheme']; ?>-500 focus:ring-offset-2 dark:focus:ring-offset-slate-800"
                            onclick="toggleFAQ(<?php echo $index; ?>)">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-6">
                                
                                <!-- Number Badge -->
                                <div class="<?php echo ($data['numberStyle'] === 'circle') ? 'w-12 h-12 rounded-full' : 'w-12 h-8 rounded-lg'; ?> 
                                    <?php 
                                    switch($data['colorScheme']) {
                                        case 'blue':
                                            echo 'bg-blue-600 text-white';
                                            break;
                                        case 'purple':
                                            echo 'bg-purple-600 text-white';
                                            break;
                                        case 'green':
                                            echo 'bg-green-600 text-white';
                                            break;
                                        case 'orange':
                                            echo 'bg-orange-600 text-white';
                                            break;
                                        default:
                                            echo 'bg-blue-600 text-white';
                                    }
                                    ?> flex items-center justify-center font-bold text-lg shadow-lg">
                                    <?php echo sprintf('%02d', $index + 1); ?>
                                </div>
                                
                                <div class="flex-1">
                                    <?php if (isset($faq['category'])): ?>
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium mb-2
                                            <?php
                                            switch($data['colorScheme']) {
                                                case 'blue':
                                                    echo 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200';
                                                    break;
                                                case 'purple':
                                                    echo 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200';
                                                    break;
                                                case 'green':
                                                    echo 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200';
                                                    break;
                                                case 'orange':
                                                    echo 'bg-orange-100 text-orange-800 dark:bg-orange-900 dark:text-orange-200';
                                                    break;
                                                default:
                                                    echo 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200';
                                            }
                                            ?>">
                                            <?php echo htmlspecialchars($faq['category']); ?>
                                        </span>
                                    <?php endif; ?>
                                    
                                    <h3 class="text-lg font-semibold text-slate-900 dark:text-white">
                                        <?php echo htmlspecialchars($faq['question']); ?>
                                    </h3>
                                </div>
                            </div>
                            <svg class="w-6 h-6 text-<?php echo $data['colorScheme']; ?>-600 dark:text-<?php echo $data['colorScheme']; ?>-400 transform transition-transform duration-200 faq-icon-<?php echo $index; ?>" 
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </button>
                    
                    <!-- Answer Content -->
                    <div class="faq-content-<?php echo $index; ?> hidden px-8 pb-6">
                        <div class="pt-4 border-t border-slate-200 dark:border-slate-600 ml-18">
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                                <?php echo htmlspecialchars($faq['answer']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Progress Indicator -->
        <div class="mt-16 text-center">
            <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-lg">
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4">
                    Schritt für Schritt zum Erfolg
                </h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    Folgen Sie unserem bewährten Prozess für optimale Ergebnisse.
                </p>
                <div class="flex justify-center items-center space-x-4">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                        <div class="flex items-center">
                            <div class="w-8 h-8 rounded-full bg-<?php echo $data['colorScheme']; ?>-600 text-white flex items-center justify-center text-sm font-bold">
                                <?php echo $i; ?>
                            </div>
                            <?php if ($i < 5): ?>
                                <div class="w-8 h-0.5 bg-<?php echo $data['colorScheme']; ?>-200 dark:bg-<?php echo $data['colorScheme']; ?>-700 mx-2"></div>
                            <?php endif; ?>
                        </div>
                    <?php endfor; ?>
                </div>
                <div class="mt-6">
                    <a href="#start" 
                       class="inline-flex items-center px-6 py-3 bg-<?php echo $data['colorScheme']; ?>-600 text-white font-semibold rounded-lg hover:bg-<?php echo $data['colorScheme']; ?>-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                        Jetzt starten
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
const allowMultipleOpen = <?php echo isset($data['allowMultipleOpen']) && $data['allowMultipleOpen'] ? 'true' : 'false'; ?>;
let openItems = [];

function toggleFAQ(index) {
    const content = document.querySelector(`.faq-content-${index}`);
    const icon = document.querySelector(`.faq-icon-${index}`);
    
    if (allowMultipleOpen) {
        // Multiple items can be open
        if (openItems.includes(index)) {
            // Close this item
            openItems = openItems.filter(i => i !== index);
            content.classList.add('hidden');
            icon.style.transform = 'rotate(0deg)';
        } else {
            // Open this item
            openItems.push(index);
            content.classList.remove('hidden');
            icon.style.transform = 'rotate(180deg)';
        }
    } else {
        // Only one item can be open
        if (openItems.includes(index)) {
            // Close this item
            openItems = [];
            content.classList.add('hidden');
            icon.style.transform = 'rotate(0deg)';
        } else {
            // Close all other items and open this one
            openItems.forEach(openIndex => {
                const openContent = document.querySelector(`.faq-content-${openIndex}`);
                const openIcon = document.querySelector(`.faq-icon-${openIndex}`);
                openContent.classList.add('hidden');
                openIcon.style.transform = 'rotate(0deg)';
            });
            
            openItems = [index];
            content.classList.remove('hidden');
            icon.style.transform = 'rotate(180deg)';
        }
    }
}
</script>
