<section class="relative py-24 lg:py-32 <?php echo $bgClass; ?> <?php echo $textColor; ?>">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            
            <!-- Header -->
            <div class="mb-12">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                    <?php echo htmlspecialchars($headline); ?>
                </h2>
                
                <?php if ($subheadline): ?>
                    <h3 class="text-xl md:text-2xl font-semibold mb-6 opacity-90">
                        <?php echo htmlspecialchars($subheadline); ?>
                    </h3>
                <?php endif; ?>
                
                <p class="text-lg leading-relaxed max-w-2xl mx-auto opacity-90">
                    <?php echo htmlspecialchars($description); ?>
                </p>
            </div>
            
            <!-- Countdown Timer -->
            <div class="mb-12">
                <p class="text-lg font-semibold mb-6 opacity-90">
                    <?php echo htmlspecialchars($countdownText); ?>
                </p>
                
                <div id="countdown-timer" class="flex justify-center space-x-4 mb-8" data-target="<?php echo htmlspecialchars($targetDate); ?>">
                    <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-6 min-w-[80px]">
                        <div class="text-3xl md:text-4xl font-bold" id="days">--</div>
                        <div class="text-sm opacity-80">Tage</div>
                    </div>
                    <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-6 min-w-[80px]">
                        <div class="text-3xl md:text-4xl font-bold" id="hours">--</div>
                        <div class="text-sm opacity-80">Std</div>
                    </div>
                    <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-6 min-w-[80px]">
                        <div class="text-3xl md:text-4xl font-bold" id="minutes">--</div>
                        <div class="text-sm opacity-80">Min</div>
                    </div>
                    <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-6 min-w-[80px]">
                        <div class="text-3xl md:text-4xl font-bold" id="seconds">--</div>
                        <div class="text-sm opacity-80">Sek</div>
                    </div>
                </div>
            </div>
            
            <!-- Urgency Message -->
            <div class="mb-12">
                <div class="inline-block px-6 py-3 bg-white/20 backdrop-blur-sm rounded-full">
                    <p class="font-semibold">
                        ⚡ <?php echo htmlspecialchars($urgencyMessage); ?>
                    </p>
                </div>
            </div>
            
            <!-- Spots Progress (für limited-spots Variante) -->
            <?php if ($spotsLeft && $totalSpots): ?>
                <div class="mb-12">
                    <div class="max-w-md mx-auto">
                        <div class="flex justify-between text-sm mb-2 opacity-90">
                            <span>Verfügbare Plätze</span>
                            <span><?php echo $spotsLeft; ?> von <?php echo $totalSpots; ?></span>
                        </div>
                        <div class="w-full bg-white/20 rounded-full h-3">
                            <div class="bg-white rounded-full h-3 transition-all duration-300" 
                                 style="width: <?php echo ($spotsLeft / $totalSpots) * 100; ?>%"></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Features -->
            <?php if (!empty($features)): ?>
                <div class="mb-12">
                    <div class="grid md:grid-cols-3 gap-6 max-w-3xl mx-auto">
                        <?php foreach ($features as $feature): ?>
                            <div class="flex items-center justify-center space-x-2">
                                <svg class="h-5 w-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="opacity-90"><?php echo htmlspecialchars($feature); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="inline-flex items-center px-8 py-4 bg-white text-slate-900 font-semibold rounded-2xl hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <?php echo htmlspecialchars($ctaText); ?>
                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </button>
                
                <?php if ($secondaryCtaText): ?>
                    <button class="inline-flex items-center px-8 py-4 bg-white/20 backdrop-blur-sm font-semibold rounded-2xl hover:bg-white/30 transition-all duration-300">
                        <?php echo htmlspecialchars($secondaryCtaText); ?>
                    </button>
                <?php endif; ?>
            </div>
            
        </div>
    </div>
    
    <!-- Countdown JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const countdownElement = document.getElementById('countdown-timer');
            const targetDate = new Date(countdownElement.dataset.target).getTime();
            
            function updateCountdown() {
                const now = new Date().getTime();
                const distance = targetDate - now;
                
                if (distance < 0) {
                    document.getElementById('days').textContent = '00';
                    document.getElementById('hours').textContent = '00';
                    document.getElementById('minutes').textContent = '00';
                    document.getElementById('seconds').textContent = '00';
                    return;
                }
                
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
                document.getElementById('days').textContent = days.toString().padStart(2, '0');
                document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
                document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
                document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
            }
            
            updateCountdown();
            setInterval(updateCountdown, 1000);
        });
    </script>
</section>
