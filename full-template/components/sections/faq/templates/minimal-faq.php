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
        
        <!-- FAQ List -->
        <div class="space-y-4">
            <?php foreach ($data['faqs'] as $index => $faq): ?>
                <?php 
                $borderClass = '';
                switch($data['borderStyle']) {
                    case 'card':
                        $borderClass = 'bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700';
                        break;
                    case 'line':
                        $borderClass = 'border-b border-slate-200 dark:border-slate-700 pb-4';
                        break;
                    case 'none':
                        $borderClass = '';
                        break;
                    default:
                        $borderClass = 'bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700';
                }
                ?>
                
                <div class="<?php echo $borderClass; ?> transition-all duration-200 hover:shadow-md">
                    
                    <!-- Question Header -->
                    <button class="w-full <?php echo ($data['borderStyle'] === 'card') ? 'px-6 py-5' : 'py-4'; ?> text-left focus:outline-none focus:ring-2 focus:ring-slate-500 focus:ring-offset-2 dark:focus:ring-offset-slate-900 rounded-xl"
                            onclick="toggleFAQ(<?php echo $index; ?>)">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 flex-1">
                                <?php if (isset($faq['category'])): ?>
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-slate-100 text-slate-700 dark:bg-slate-700 dark:text-slate-300">
                                        <?php echo htmlspecialchars($faq['category']); ?>
                                    </span>
                                <?php endif; ?>
                                
                                <h3 class="text-lg font-semibold text-slate-900 dark:text-white pr-4">
                                    <?php echo htmlspecialchars($faq['question']); ?>
                                </h3>
                            </div>
                            
                            <!-- Icon -->
                            <?php if ($data['iconStyle'] !== 'none'): ?>
                                <div class="faq-icon-<?php echo $index; ?> transition-transform duration-200">
                                    <?php if ($data['iconStyle'] === 'plus'): ?>
                                        <svg class="w-5 h-5 text-slate-500 dark:text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                    <?php else: ?>
                                        <!-- Chevron (default) -->
                                        <svg class="w-5 h-5 text-slate-500 dark:text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </button>
                    
                    <!-- Answer Content -->
                    <div class="faq-content-<?php echo $index; ?> <?php echo ($index === 0) ? '' : 'hidden'; ?> <?php echo ($data['borderStyle'] === 'card') ? 'px-6 pb-5' : 'pb-4'; ?>">
                        <div class="<?php echo ($data['borderStyle'] === 'card') ? 'pt-4 border-t border-slate-200 dark:border-slate-600' : 'pt-4'; ?>">
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                                <?php echo htmlspecialchars($faq['answer']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Simple CTA -->
        <div class="mt-16 text-center">
            <div class="<?php echo ($data['borderStyle'] === 'card') ? 'bg-slate-50 dark:bg-slate-800 rounded-2xl p-8' : 'py-8'; ?>">
                <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">
                    Weitere Fragen?
                </h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    Kontaktieren Sie uns für eine persönliche Beratung.
                </p>
                <a href="#contact" 
                   class="inline-flex items-center px-6 py-3 bg-slate-900 dark:bg-white text-white dark:text-slate-900 font-medium rounded-lg hover:bg-slate-800 dark:hover:bg-slate-100 transition-colors duration-200">
                    Kontakt aufnehmen
                </a>
            </div>
        </div>
    </div>
</section>

<script>
const allowMultipleOpen = <?php echo isset($data['allowMultipleOpen']) && $data['allowMultipleOpen'] ? 'true' : 'false'; ?>;
const iconStyle = '<?php echo $data['iconStyle']; ?>';
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
            updateIcon(icon, false);
        } else {
            // Open this item
            openItems.push(index);
            content.classList.remove('hidden');
            updateIcon(icon, true);
        }
    } else {
        // Only one item can be open
        if (openItems.includes(index)) {
            // Close this item
            openItems = [];
            content.classList.add('hidden');
            updateIcon(icon, false);
        } else {
            // Close all other items and open this one
            openItems.forEach(openIndex => {
                const openContent = document.querySelector(`.faq-content-${openIndex}`);
                const openIcon = document.querySelector(`.faq-icon-${openIndex}`);
                openContent.classList.add('hidden');
                updateIcon(openIcon, false);
            });
            
            openItems = [index];
            content.classList.remove('hidden');
            updateIcon(icon, true);
        }
    }
}

function updateIcon(iconElement, isOpen) {
    if (!iconElement || iconStyle === 'none') return;
    
    const svg = iconElement.querySelector('svg');
    if (!svg) return;
    
    if (iconStyle === 'plus') {
        if (isOpen) {
            // Change to minus
            svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>';
        } else {
            // Change to plus
            svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>';
        }
    } else {
        // Chevron
        if (isOpen) {
            iconElement.style.transform = 'rotate(180deg)';
        } else {
            iconElement.style.transform = 'rotate(0deg)';
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
                updateIcon(icon, true);
            }
        });
    }
});
</script>
