<section class="py-24 lg:py-32 bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800">
    <div class="max-w-7xl mx-auto px-4">
        
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 dark:text-white mb-6">
                <?php echo htmlspecialchars($data['headline']); ?>
            </h2>
            <p class="text-xl text-slate-600 dark:text-slate-400 max-w-3xl mx-auto leading-relaxed">
                <?php echo htmlspecialchars($data['description']); ?>
            </p>
        </div>
        
        <?php if (isset($data['gridLayout']) && $data['gridLayout']): ?>
            <!-- Grid Layout -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($data['faqs'] as $index => $faq): ?>
                    <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        
                        <!-- Card Header -->
                        <div class="p-6 border-b border-slate-200 dark:border-slate-600">
                            <div class="flex items-center space-x-4 mb-4">
                                <?php if (isset($data['showIcons']) && $data['showIcons'] && isset($faq['icon'])): ?>
                                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center">
                                        <?php
                                        switch($faq['icon']) {
                                            case 'payment':
                                                echo '<svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>';
                                                break;
                                            case 'users':
                                                echo '<svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path></svg>';
                                                break;
                                            case 'location':
                                                echo '<svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>';
                                                break;
                                            case 'ticket':
                                                echo '<svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path></svg>';
                                                break;
                                            case 'shield':
                                                echo '<svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>';
                                                break;
                                            case 'hotel':
                                                echo '<svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>';
                                                break;
                                            default:
                                                echo '<svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';
                                        }
                                        ?>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="flex-1">
                                    <?php if (isset($data['showCategories']) && $data['showCategories'] && isset($faq['category'])): ?>
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium mb-2
                                            <?php
                                            switch(strtolower($faq['category'])) {
                                                case 'kosten':
                                                    echo 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200';
                                                    break;
                                                case 'rabatte':
                                                    echo 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200';
                                                    break;
                                                case 'anreise':
                                                    echo 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200';
                                                    break;
                                                case 'tickets':
                                                    echo 'bg-orange-100 text-orange-800 dark:bg-orange-900 dark:text-orange-200';
                                                    break;
                                                case 'gesundheit':
                                                    echo 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200';
                                                    break;
                                                case 'unterkunft':
                                                    echo 'bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200';
                                                    break;
                                                default:
                                                    echo 'bg-slate-100 text-slate-800 dark:bg-slate-700 dark:text-slate-200';
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
                        </div>
                        
                        <!-- Card Content -->
                        <div class="p-6">
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                                <?php echo htmlspecialchars($faq['answer']); ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
        <?php else: ?>
            <!-- Accordion Layout -->
            <div class="max-w-4xl mx-auto space-y-6">
                <?php foreach ($data['faqs'] as $index => $faq): ?>
                    <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 overflow-hidden transition-all duration-300 hover:shadow-xl">
                        
                        <!-- Question Header -->
                        <button class="w-full px-8 py-6 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-slate-800"
                                onclick="toggleFAQ(<?php echo $index; ?>)">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <?php if (isset($data['showIcons']) && $data['showIcons'] && isset($faq['icon'])): ?>
                                        <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center">
                                            <!-- Icon SVG here -->
                                        </div>
                                    <?php endif; ?>
                                    
                                    <?php if (isset($data['showCategories']) && $data['showCategories'] && isset($faq['category'])): ?>
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
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
        <?php endif; ?>
        
        <!-- Contact Section -->
        <div class="mt-16 text-center">
            <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-lg">
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4">
                    Noch Fragen zum Event?
                </h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    Unser Event-Team hilft Ihnen gerne weiter und beantwortet alle Ihre Fragen.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="mailto:event@example.com" 
                       class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        E-Mail senden
                    </a>
                    <a href="tel:+49123456789" 
                       class="inline-flex items-center px-6 py-3 bg-white dark:bg-slate-700 text-slate-900 dark:text-white font-semibold rounded-lg border border-slate-300 dark:border-slate-600 hover:bg-slate-50 dark:hover:bg-slate-600 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Anrufen
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (!isset($data['gridLayout']) || !$data['gridLayout']): ?>
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
<?php endif; ?>
