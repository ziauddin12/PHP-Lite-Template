<section class="py-24 lg:py-32 bg-slate-50 dark:bg-slate-800">
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
        
        <!-- FAQ Accordion -->
        <div class="space-y-6">
            <?php foreach ($data['faqs'] as $index => $faq): ?>
                <div class="<?php echo (isset($data['highlightFeatured']) && $data['highlightFeatured'] && isset($faq['featured']) && $faq['featured']) ? 'bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20 border-2 border-blue-200 dark:border-blue-700' : 'bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600'; ?> rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    
                    <!-- Featured Badge -->
                    <?php if (isset($data['highlightFeatured']) && $data['highlightFeatured'] && isset($faq['featured']) && $faq['featured']): ?>
                        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-2 text-sm font-medium">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                                Besonders wichtig
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Question Header -->
                    <button class="w-full px-8 py-6 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-slate-800"
                            onclick="toggleFAQ(<?php echo $index; ?>)">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <?php if (isset($faq['category'])): ?>
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium 
                                        <?php
                                        switch(strtolower($faq['category'])) {
                                            case 'erste schritte':
                                                echo 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200';
                                                break;
                                            case 'flexibilität':
                                                echo 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200';
                                                break;
                                            case 'garantie':
                                                echo 'bg-orange-100 text-orange-800 dark:bg-orange-900 dark:text-orange-200';
                                                break;
                                            case 'preise':
                                                echo 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200';
                                                break;
                                            case 'support':
                                                echo 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200';
                                                break;
                                            default:
                                                echo 'bg-slate-100 text-slate-800 dark:bg-slate-700 dark:text-slate-200';
                                        }
                                        ?>">
                                        <?php echo htmlspecialchars($faq['category']); ?>
                                    </span>
                                <?php endif; ?>
                                
                                <h3 class="text-lg font-semibold text-slate-900 dark:text-white pr-4">
                                    <?php echo htmlspecialchars($faq['question']); ?>
                                </h3>
                            </div>
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400 transform transition-transform duration-200 faq-icon-<?php echo $index; ?>" 
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </button>
                    
                    <!-- Answer Content -->
                    <div class="faq-content-<?php echo $index; ?> <?php echo ($index === 0) ? '' : 'hidden'; ?> px-8 pb-6">
                        <div class="pt-4 border-t border-slate-200 dark:border-slate-600">
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                                <?php echo htmlspecialchars($faq['answer']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Trust Section -->
        <div class="mt-16 text-center">
            <div class="bg-white dark:bg-slate-700 rounded-2xl p-8 shadow-lg">
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4">
                    Vertrauen Sie auf unsere Expertise
                </h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    Über 10.000 zufriedene Kunden vertrauen bereits auf unsere Lösungen.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <div class="flex items-center space-x-2 text-yellow-500">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <span class="text-slate-600 dark:text-slate-400 ml-2">4.9/5 (2,547 Bewertungen)</span>
                    </div>
                </div>
                <div class="mt-6">
                    <a href="#contact" 
                       class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        Kostenlose Beratung starten
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
const allowMultipleOpen = <?php echo isset($data['allowMultipleOpen']) && $data['allowMultipleOpen'] ? 'true' : 'false'; ?>;
let openItems = [0]; // First item open by default

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

// Initialize first item as open
document.addEventListener('DOMContentLoaded', function() {
    if (openItems.length > 0) {
        openItems.forEach(index => {
            const content = document.querySelector(`.faq-content-${index}`);
            const icon = document.querySelector(`.faq-icon-${index}`);
            if (content && icon) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            }
        });
    }
});
</script>
