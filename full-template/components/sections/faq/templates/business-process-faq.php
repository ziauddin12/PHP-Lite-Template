<section class="py-24 lg:py-32 bg-white dark:bg-slate-900">
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
                <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 overflow-hidden transition-all duration-300 hover:shadow-xl">
                    
                    <!-- Question Header -->
                    <button class="w-full px-8 py-6 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-slate-800"
                            onclick="toggleFAQ(<?php echo $index; ?>)">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <?php if (isset($data['showCategories']) && $data['showCategories'] && isset($faq['category'])): ?>
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium 
                                        <?php
                                        switch(strtolower($faq['category'])) {
                                            case 'prozess':
                                                echo 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200';
                                                break;
                                            case 'zeitrahmen':
                                                echo 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200';
                                                break;
                                            case 'kommunikation':
                                                echo 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200';
                                                break;
                                            case 'flexibilität':
                                                echo 'bg-orange-100 text-orange-800 dark:bg-orange-900 dark:text-orange-200';
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
                    <div class="faq-content-<?php echo $index; ?> hidden px-8 pb-6">
                        <div class="pt-4 border-t border-slate-200 dark:border-slate-600">
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                                <?php echo htmlspecialchars($faq['answer']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Additional Help Section -->
        <div class="mt-16 text-center">
            <div class="bg-slate-50 dark:bg-slate-800 rounded-2xl p-8">
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4">
                    Weitere Fragen?
                </h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    Unser Team steht dir gerne für ein persönliches Gespräch zur Verfügung.
                </p>
                <a href="#contact" 
                   class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                    Kontakt aufnehmen
                </a>
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
