<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?>">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 dark:text-slate-100 mb-6 leading-tight">
                    <?php echo htmlspecialchars($headline); ?>
                </h2>
                
                <?php if ($subheadline): ?>
                    <h3 class="text-xl text-slate-600 dark:text-slate-400 mb-6">
                        <?php echo htmlspecialchars($subheadline); ?>
                    </h3>
                <?php endif; ?>
                
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed max-w-3xl mx-auto">
                    <?php echo htmlspecialchars($description); ?>
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                
                <!-- Product Image -->
                <div class="<?php echo ($variant === 'house-configurator') ? 'lg:order-2' : ''; ?>">
                    <?php if ($image): ?>
                        <div class="relative">
                            <img src="<?php echo htmlspecialchars($image); ?>" 
                                 alt="<?php echo htmlspecialchars($headline); ?>" 
                                 class="w-full h-[500px] object-cover rounded-2xl shadow-2xl">
                            
                            <!-- Rating Overlay -->
                            <?php if ($rating): ?>
                                <div class="absolute top-6 left-6 bg-white/90 dark:bg-black/80 backdrop-blur-sm rounded-xl p-4 shadow-lg">
                                    <div class="flex items-center space-x-2">
                                        <div class="flex items-center space-x-1">
                                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                                <svg class="h-4 w-4 <?php echo $i <= floor($rating['score']) ? 'text-yellow-400 fill-current' : 'text-gray-300'; ?>" viewBox="0 0 24 24">
                                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                                </svg>
                                            <?php endfor; ?>
                                        </div>
                                        <span class="text-sm font-medium text-slate-900 dark:text-slate-100">
                                            <?php echo number_format($rating['score'], 1); ?>
                                        </span>
                                    </div>
                                    <p class="text-xs text-slate-600 dark:text-slate-400 mt-1">
                                        <?php echo number_format($rating['reviewCount']); ?> Bewertungen
                                    </p>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Features List for Product Options -->
                    <?php if ($variant === 'product-options' && !empty($features)): ?>
                        <div class="mt-8 p-6 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl">
                            <h4 class="text-lg font-semibold text-slate-900 dark:text-slate-100 mb-4">Produktfeatures:</h4>
                            <ul class="space-y-2">
                                <?php foreach ($features as $feature): ?>
                                    <li class="flex items-center space-x-2 text-slate-600 dark:text-slate-400">
                                        <svg class="h-5 w-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span><?php echo htmlspecialchars($feature); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Configurator -->
                <div class="<?php echo ($variant === 'house-configurator') ? 'lg:order-1' : ''; ?>">
                    <div class="p-8 bg-white/60 dark:bg-black/20 backdrop-blur-sm rounded-2xl">
                        
                        <!-- Price Display -->
                        <div class="text-center mb-8 p-6 bg-white/80 dark:bg-black/40 rounded-xl">
                            <div class="text-sm text-slate-600 dark:text-slate-400 mb-2">Gesamtpreis:</div>
                            <div id="total-price" class="text-4xl font-bold text-slate-900 dark:text-slate-100">
                                <?php echo number_format($basePrice, 0, ',', '.'); ?><?php echo htmlspecialchars($currency); ?>
                            </div>
                        </div>
                        
                        <!-- Color Options -->
                        <?php if (!empty($colorOptions)): ?>
                            <div class="mb-8">
                                <label class="block text-lg font-semibold text-slate-900 dark:text-slate-100 mb-4">
                                    Farbe wählen:
                                </label>
                                <div class="flex flex-wrap gap-3">
                                    <?php foreach ($colorOptions as $index => $color): ?>
                                        <label class="cursor-pointer">
                                            <input type="radio" name="color" value="<?php echo htmlspecialchars($color['value']); ?>" 
                                                   class="sr-only color-option" <?php echo $index === 0 ? 'checked' : ''; ?>>
                                            <div class="w-12 h-12 rounded-full border-4 border-transparent hover:border-slate-400 transition-all duration-200 flex items-center justify-center"
                                                 style="background-color: <?php echo htmlspecialchars($color['color']); ?>">
                                                <div class="w-8 h-8 rounded-full <?php echo $color['value'] === 'white' ? 'border border-slate-300' : ''; ?>"
                                                     style="background-color: <?php echo htmlspecialchars($color['color']); ?>"></div>
                                            </div>
                                            <div class="text-center mt-2 text-sm text-slate-600 dark:text-slate-400">
                                                <?php echo htmlspecialchars($color['name']); ?>
                                            </div>
                                        </label>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Size Options -->
                        <?php if (!empty($sizeOptions)): ?>
                            <div class="mb-8">
                                <label class="block text-lg font-semibold text-slate-900 dark:text-slate-100 mb-4">
                                    Größe wählen:
                                </label>
                                <div class="grid grid-cols-2 gap-3">
                                    <?php foreach ($sizeOptions as $index => $size): ?>
                                        <label class="cursor-pointer">
                                            <input type="radio" name="size" value="<?php echo htmlspecialchars($size['value']); ?>" 
                                                   class="sr-only size-option" <?php echo $index === 0 ? 'checked' : ''; ?>
                                                   data-price-modifier="<?php echo $size['priceModifier']; ?>">
                                            <div class="p-4 bg-white/60 dark:bg-black/20 rounded-xl border-2 border-transparent hover:border-slate-400 transition-all duration-200 text-center">
                                                <div class="font-semibold text-slate-900 dark:text-slate-100">
                                                    <?php echo htmlspecialchars($size['name']); ?>
                                                </div>
                                                <?php if ($size['priceModifier'] > 0): ?>
                                                    <div class="text-sm text-slate-600 dark:text-slate-400">
                                                        +<?php echo number_format($size['priceModifier'], 0, ',', '.'); ?><?php echo htmlspecialchars($currency); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </label>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Additional Options -->
                        <?php if (!empty($additionalOptions)): ?>
                            <?php foreach ($additionalOptions as $option): ?>
                                <div class="mb-8">
                                    <label class="block text-lg font-semibold text-slate-900 dark:text-slate-100 mb-4">
                                        <?php echo htmlspecialchars($option['name']); ?>:
                                    </label>
                                    
                                    <?php if ($option['type'] === 'radio'): ?>
                                        <div class="space-y-3">
                                            <?php foreach ($option['options'] as $subIndex => $subOption): ?>
                                                <label class="cursor-pointer flex items-center p-4 bg-white/60 dark:bg-black/20 rounded-xl hover:bg-white/80 dark:hover:bg-black/30 transition-all duration-200">
                                                    <input type="radio" name="<?php echo htmlspecialchars($option['value']); ?>" 
                                                           value="<?php echo htmlspecialchars($subOption['value']); ?>" 
                                                           class="w-4 h-4 text-slate-600 additional-option" <?php echo $subIndex === 0 ? 'checked' : ''; ?>
                                                           data-price-modifier="<?php echo $subOption['priceModifier']; ?>">
                                                    <div class="ml-3 flex-1">
                                                        <div class="font-medium text-slate-900 dark:text-slate-100">
                                                            <?php echo htmlspecialchars($subOption['name']); ?>
                                                        </div>
                                                        <?php if ($subOption['priceModifier'] > 0): ?>
                                                            <div class="text-sm text-slate-600 dark:text-slate-400">
                                                                +<?php echo number_format($subOption['priceModifier'], 0, ',', '.'); ?><?php echo htmlspecialchars($currency); ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </label>
                                            <?php endforeach; ?>
                                        </div>
                                        
                                    <?php elseif ($option['type'] === 'checkbox'): ?>
                                        <div class="space-y-3">
                                            <?php foreach ($option['options'] as $subOption): ?>
                                                <label class="cursor-pointer flex items-center p-4 bg-white/60 dark:bg-black/20 rounded-xl hover:bg-white/80 dark:hover:bg-black/30 transition-all duration-200">
                                                    <input type="checkbox" name="<?php echo htmlspecialchars($option['value']); ?>[]" 
                                                           value="<?php echo htmlspecialchars($subOption['value']); ?>" 
                                                           class="w-4 h-4 text-slate-600 checkbox-option"
                                                           data-price-modifier="<?php echo $subOption['priceModifier']; ?>">
                                                    <div class="ml-3 flex-1">
                                                        <div class="font-medium text-slate-900 dark:text-slate-100">
                                                            <?php echo htmlspecialchars($subOption['name']); ?>
                                                        </div>
                                                        <?php if ($subOption['priceModifier'] > 0): ?>
                                                            <div class="text-sm text-slate-600 dark:text-slate-400">
                                                                +<?php echo number_format($subOption['priceModifier'], 0, ',', '.'); ?><?php echo htmlspecialchars($currency); ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </label>
                                            <?php endforeach; ?>
                                        </div>
                                        
                                    <?php elseif ($option['type'] === 'select'): ?>
                                        <select name="<?php echo htmlspecialchars($option['value']); ?>" 
                                                class="w-full p-4 bg-white/60 dark:bg-black/20 rounded-xl border-2 border-transparent focus:border-slate-400 transition-all duration-200 select-option">
                                            <?php foreach ($option['options'] as $subOption): ?>
                                                <option value="<?php echo htmlspecialchars($subOption['value']); ?>" 
                                                        data-price-modifier="<?php echo $subOption['priceModifier']; ?>">
                                                    <?php echo htmlspecialchars($subOption['name']); ?>
                                                    <?php if ($subOption['priceModifier'] > 0): ?>
                                                        (+<?php echo number_format($subOption['priceModifier'], 0, ',', '.'); ?><?php echo htmlspecialchars($currency); ?>)
                                                    <?php endif; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        
                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button class="flex-1 inline-flex items-center justify-center px-8 py-4 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 font-semibold rounded-2xl hover:bg-slate-800 dark:hover:bg-slate-200 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <?php echo htmlspecialchars($ctaButton['text']); ?>
                                <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m1.6 8L5 3H3m4 10v6a1 1 0 001 1h10a1 1 0 001-1v-6m-12 0h12"></path>
                                </svg>
                            </button>
                            
                            <?php if ($secondaryButton): ?>
                                <button class="flex-1 inline-flex items-center justify-center px-8 py-4 bg-white/60 dark:bg-black/20 text-slate-900 dark:text-slate-100 font-semibold rounded-2xl hover:bg-white/80 dark:hover:bg-black/30 transition-all duration-300 backdrop-blur-sm">
                                    <?php echo htmlspecialchars($secondaryButton['text']); ?>
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- JavaScript for Price Calculation -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const basePrice = <?php echo $basePrice; ?>;
            const currency = '<?php echo htmlspecialchars($currency); ?>';
            const totalPriceElement = document.getElementById('total-price');
            
            function updatePrice() {
                let total = basePrice;
                
                // Size options
                const selectedSize = document.querySelector('input[name="size"]:checked');
                if (selectedSize) {
                    total += parseInt(selectedSize.dataset.priceModifier || 0);
                }
                
                // Additional radio options
                document.querySelectorAll('.additional-option:checked').forEach(option => {
                    total += parseInt(option.dataset.priceModifier || 0);
                });
                
                // Checkbox options
                document.querySelectorAll('.checkbox-option:checked').forEach(option => {
                    total += parseInt(option.dataset.priceModifier || 0);
                });
                
                // Select options
                document.querySelectorAll('.select-option').forEach(select => {
                    const selectedOption = select.options[select.selectedIndex];
                    total += parseInt(selectedOption.dataset.priceModifier || 0);
                });
                
                totalPriceElement.textContent = new Intl.NumberFormat('de-DE').format(total) + currency;
            }
            
            // Add event listeners
            document.querySelectorAll('.size-option, .additional-option, .checkbox-option').forEach(input => {
                input.addEventListener('change', updatePrice);
            });
            
            document.querySelectorAll('.select-option').forEach(select => {
                select.addEventListener('change', updatePrice);
            });
            
            // Color selection visual feedback
            document.querySelectorAll('.color-option').forEach(input => {
                input.addEventListener('change', function() {
                    document.querySelectorAll('.color-option').forEach(colorInput => {
                        const container = colorInput.parentElement.querySelector('div');
                        container.classList.remove('border-slate-600');
                        container.classList.add('border-transparent');
                    });
                    
                    if (this.checked) {
                        const container = this.parentElement.querySelector('div');
                        container.classList.remove('border-transparent');
                        container.classList.add('border-slate-600');
                    }
                });
            });
            
            // Size selection visual feedback
            document.querySelectorAll('.size-option').forEach(input => {
                input.addEventListener('change', function() {
                    document.querySelectorAll('.size-option').forEach(sizeInput => {
                        const container = sizeInput.parentElement.querySelector('div');
                        container.classList.remove('border-slate-600', 'bg-white/80', 'dark:bg-black/40');
                        container.classList.add('border-transparent', 'bg-white/60', 'dark:bg-black/20');
                    });
                    
                    if (this.checked) {
                        const container = this.parentElement.querySelector('div');
                        container.classList.remove('border-transparent', 'bg-white/60', 'dark:bg-black/20');
                        container.classList.add('border-slate-600', 'bg-white/80', 'dark:bg-black/40');
                    }
                });
            });
            
            // Initialize color selection
            const firstColorOption = document.querySelector('.color-option:checked');
            if (firstColorOption) {
                firstColorOption.dispatchEvent(new Event('change'));
            }
            
            // Initialize size selection
            const firstSizeOption = document.querySelector('.size-option:checked');
            if (firstSizeOption) {
                firstSizeOption.dispatchEvent(new Event('change'));
            }
            
            // Initial price calculation
            updatePrice();
        });
    </script>
</section>
