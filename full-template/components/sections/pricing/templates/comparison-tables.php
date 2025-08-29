<section class="section-padding bg-gradient-to-br from-blue-50 via-white to-purple-50">
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

        <?php if ($data['style'] === 'detailed'): ?>
        <!-- Detailed Feature Comparison -->
        <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 overflow-hidden">
            <!-- Plan Headers -->
            <div class="grid grid-cols-4 bg-gray-50">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900">Features</h3>
                </div>
                <?php foreach ($data['plans'] as $plan): ?>
                <div class="p-6 text-center <?php echo $plan['highlight'] ? 'bg-primary-50 border-l-4 border-r-4 border-primary-500' : ''; ?>">
                    <?php if (isset($plan['popular']) && $plan['popular']): ?>
                    <div class="inline-block px-3 py-1 bg-primary-600 text-white text-xs font-semibold rounded-full mb-3">
                        Beliebtester Plan
                    </div>
                    <?php endif; ?>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2"><?php echo htmlspecialchars($plan['name']); ?></h3>
                    <div class="mb-2">
                        <span class="text-4xl font-bold text-primary-600">€<?php echo htmlspecialchars($plan['price']); ?></span>
                        <span class="text-gray-600"><?php echo htmlspecialchars($plan['period']); ?></span>
                    </div>
                    <p class="text-sm text-gray-600 mb-4"><?php echo htmlspecialchars($plan['description']); ?></p>
                    <a href="#signup" class="inline-block w-full px-6 py-3 <?php echo $plan['highlight'] ? 'bg-primary-600 hover:bg-primary-700 text-white' : 'bg-gray-100 hover:bg-gray-200 text-gray-900'; ?> font-semibold rounded-xl transition-colors duration-200">
                        <?php echo $plan['highlight'] ? 'Jetzt starten' : 'Plan wählen'; ?>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Feature Categories -->
            <?php foreach ($data['feature_categories'] as $category): ?>
            <div class="border-t border-gray-200">
                <!-- Category Header -->
                <div class="bg-gray-100 px-6 py-4">
                    <h4 class="text-lg font-semibold text-gray-900"><?php echo htmlspecialchars($category['name']); ?></h4>
                </div>
                
                <!-- Features -->
                <?php foreach ($category['features'] as $feature): ?>
                <div class="grid grid-cols-4 border-t border-gray-100">
                    <div class="p-4 flex items-center">
                        <span class="text-gray-700"><?php echo htmlspecialchars($feature['name']); ?></span>
                    </div>
                    <?php foreach ($data['plans'] as $plan): ?>
                    <div class="p-4 text-center flex items-center justify-center <?php echo $plan['highlight'] ? 'bg-primary-50' : ''; ?>">
                        <?php 
                        $value = $plan['features'][$feature['key']];
                        if ($value === true): ?>
                            <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        <?php elseif ($value === false): ?>
                            <svg class="w-6 h-6 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        <?php else: ?>
                            <span class="text-gray-900 font-medium"><?php echo htmlspecialchars($value); ?></span>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
        </div>

        <?php elseif ($data['style'] === 'competitive'): ?>
        <!-- Competitive Comparison -->
        <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 overflow-hidden">
            <!-- Competitor Headers -->
            <div class="grid grid-cols-4 bg-gray-50">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900">Vergleichskriterien</h3>
                </div>
                <?php foreach ($data['competitors'] as $competitor): ?>
                <div class="p-6 text-center <?php echo $competitor['highlight'] ? 'bg-green-50 border-l-4 border-r-4 border-green-500' : ''; ?>">
                    <?php if ($competitor['highlight']): ?>
                    <div class="inline-block px-3 py-1 bg-green-600 text-white text-xs font-semibold rounded-full mb-3">
                        Beste Wahl
                    </div>
                    <?php endif; ?>
                    <div class="w-16 h-16 mx-auto mb-4 bg-gray-200 rounded-full flex items-center justify-center">
                        <img src="<?php echo htmlspecialchars($competitor['logo']); ?>" alt="<?php echo htmlspecialchars($competitor['name']); ?>" class="w-12 h-12 object-contain">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2"><?php echo htmlspecialchars($competitor['name']); ?></h3>
                    <div class="mb-4">
                        <span class="text-3xl font-bold <?php echo $competitor['highlight'] ? 'text-green-600' : 'text-gray-900'; ?>">
                            <?php echo htmlspecialchars($competitor['price']); ?>
                        </span>
                        <span class="text-gray-600"><?php echo htmlspecialchars($competitor['period']); ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Comparison Categories -->
            <?php foreach ($data['comparison_categories'] as $category): ?>
            <div class="border-t border-gray-200">
                <!-- Category Header -->
                <div class="bg-gray-100 px-6 py-4">
                    <h4 class="text-lg font-semibold text-gray-900"><?php echo htmlspecialchars($category['name']); ?></h4>
                </div>
                
                <!-- Features -->
                <?php foreach ($category['features'] as $feature): ?>
                <div class="grid grid-cols-4 border-t border-gray-100">
                    <div class="p-4 flex items-center">
                        <span class="text-gray-700"><?php echo htmlspecialchars($feature['name']); ?></span>
                    </div>
                    <?php foreach ($data['competitors'] as $competitor): ?>
                    <div class="p-4 text-center flex items-center justify-center <?php echo $competitor['highlight'] ? 'bg-green-50' : ''; ?>">
                        <span class="text-sm <?php echo $competitor['highlight'] ? 'text-green-900 font-semibold' : 'text-gray-700'; ?>">
                            <?php echo htmlspecialchars($competitor['features'][$feature['key']]); ?>
                        </span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Why Choose Us -->
        <div class="mt-16 bg-gradient-to-r from-green-600 to-blue-600 rounded-3xl p-8 lg:p-12 text-white text-center">
            <h3 class="text-3xl lg:text-4xl font-bold mb-6">Warum über 10.000 Unternehmen Dyad wählen</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <div class="text-4xl font-bold mb-2">50%</div>
                    <div class="text-lg opacity-90">Günstiger als die Konkurrenz</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">10x</div>
                    <div class="text-lg opacity-90">Schnelleres Setup</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">24/7</div>
                    <div class="text-lg opacity-90">Support ohne Aufpreis</div>
                </div>
            </div>
        </div>

        <?php elseif ($data['style'] === 'calculator'): ?>
        <!-- ROI Calculator -->
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Calculator Input -->
            <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-8">Ihre Angaben</h3>
                
                <form id="roi-calculator" class="space-y-6">
                    <?php foreach ($data['calculator_inputs'] as $input): ?>
                    <div>
                        <label for="<?php echo $input['id']; ?>" class="block text-sm font-semibold text-gray-900 mb-2">
                            <?php echo htmlspecialchars($input['label']); ?>
                        </label>
                        <input type="<?php echo $input['type']; ?>" 
                               id="<?php echo $input['id']; ?>" 
                               value="<?php echo $input['default']; ?>"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent"
                               oninput="calculateROI()">
                    </div>
                    <?php endforeach; ?>
                </form>

                <!-- Cost Breakdown -->
                <div class="mt-8">
                    <h4 class="text-lg font-semibold text-gray-900 mb-4">Einsparungskategorien</h4>
                    <div class="space-y-3">
                        <?php foreach ($data['cost_breakdown'] as $item): ?>
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <div class="font-medium text-gray-900"><?php echo htmlspecialchars($item['category']); ?></div>
                                <div class="text-sm text-gray-600"><?php echo htmlspecialchars($item['description']); ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Results -->
            <div class="space-y-8">
                <!-- ROI Metrics -->
                <div class="bg-gradient-to-r from-primary-600 to-purple-600 rounded-3xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-8">Ihre ROI-Berechnung</h3>
                    <div class="grid grid-cols-2 gap-6">
                        <?php foreach ($data['roi_metrics'] as $metric): ?>
                        <div class="text-center">
                            <div id="<?php echo $metric['key']; ?>" class="text-3xl font-bold mb-2">€0</div>
                            <div class="text-sm opacity-90"><?php echo htmlspecialchars($metric['label']); ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Plan Recommendations -->
                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-gray-900">Empfohlener Plan</h3>
                    <?php foreach ($data['plans'] as $plan): ?>
                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="text-xl font-bold text-gray-900"><?php echo htmlspecialchars($plan['name']); ?></h4>
                                <p class="text-gray-600">Für bis zu <?php echo htmlspecialchars($plan['users']); ?> Benutzer</p>
                            </div>
                            <div class="text-right">
                                <div class="text-2xl font-bold text-primary-600">€<?php echo htmlspecialchars($plan['price']); ?></div>
                                <div class="text-gray-600">/Monat</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="#signup" class="block w-full text-center px-6 py-3 bg-primary-600 hover:bg-primary-700 text-white font-semibold rounded-xl transition-colors duration-200">
                                Plan wählen
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <?php else: ?>
        <!-- Usage-Based Pricing -->
        <div class="space-y-16">
            <!-- Base Plans -->
            <div class="grid md:grid-cols-2 gap-8">
                <?php foreach ($data['base_plans'] as $plan): ?>
                <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4"><?php echo htmlspecialchars($plan['name']); ?></h3>
                    <div class="mb-6">
                        <span class="text-5xl font-bold text-primary-600">€<?php echo htmlspecialchars($plan['base_price']); ?></span>
                        <span class="text-gray-600">/Monat Grundgebühr</span>
                    </div>
                    <p class="text-gray-600 mb-6"><?php echo htmlspecialchars($plan['description']); ?></p>
                    
                    <ul class="space-y-3 mb-8">
                        <?php foreach ($plan['included'] as $feature): ?>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700"><?php echo htmlspecialchars($feature); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    
                    <a href="#signup" class="block w-full text-center px-6 py-3 bg-primary-600 hover:bg-primary-700 text-white font-semibold rounded-xl transition-colors duration-200">
                        Plan wählen
                    </a>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Usage Tiers -->
            <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 overflow-hidden">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Nutzungsbasierte Preise</h3>
                    <p class="text-gray-600 mb-8">Transparente Staffelpreise - je mehr Sie nutzen, desto günstiger wird es pro Einheit.</p>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Nutzungsbereich</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Preis</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Einheit</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <?php foreach ($data['usage_tiers'] as $tier): ?>
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    <?php echo number_format($tier['from']); ?> - <?php echo $tier['to'] ? number_format($tier['to']) : '∞'; ?>
                                </td>
                                <td class="px-6 py-4 text-sm font-semibold text-primary-600">
                                    <?php echo $tier['price'] == 0 ? 'Kostenlos' : '€' . number_format($tier['price'], 3); ?>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600">
                                    <?php echo htmlspecialchars($tier['unit']); ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Additional Services -->
            <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Zusatzleistungen</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <?php foreach ($data['additional_services'] as $service): ?>
                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl">
                        <div>
                            <div class="font-semibold text-gray-900"><?php echo htmlspecialchars($service['service']); ?></div>
                        </div>
                        <div class="text-right">
                            <div class="font-bold text-primary-600">
                                <?php echo $service['price'] == 0 ? 'Kostenlos' : '€' . $service['price']; ?>
                            </div>
                            <div class="text-sm text-gray-600"><?php echo htmlspecialchars($service['unit']); ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Bottom CTA -->
        <div class="mt-20 text-center">
            <div class="bg-gradient-to-r from-primary-600 to-purple-600 rounded-3xl p-8 lg:p-12 text-white">
                <h3 class="text-3xl lg:text-4xl font-bold mb-4">
                    Bereit loszulegen?
                </h3>
                <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">
                    Starten Sie noch heute mit einer 14-tägigen kostenlosen Testphase. Keine Kreditkarte erforderlich.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#trial" 
                       class="inline-flex items-center justify-center px-8 py-4 bg-white text-primary-600 font-semibold rounded-xl hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                        14 Tage kostenlos testen
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="#demo" 
                       class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-semibold rounded-xl hover:bg-white hover:text-primary-600 transition-all duration-200">
                        Live-Demo buchen
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if ($data['style'] === 'calculator'): ?>
<script>
function calculateROI() {
    const employees = parseInt(document.getElementById('employees').value) || 0;
    const hourlyRate = parseFloat(document.getElementById('hourly_rate').value) || 0;
    const hoursSaved = parseFloat(document.getElementById('hours_saved').value) || 0;
    const currentTools = parseFloat(document.getElementById('current_tools').value) || 0;
    
    // Berechnungen
    const weeklySavings = employees * hourlyRate * hoursSaved;
    const monthlySavings = weeklySavings * 4.33 + currentTools; // 4.33 Wochen pro Monat
    const annualSavings = monthlySavings * 12;
    const dyadCost = employees <= 25 ? 99 : 299; // Plan basierend auf Mitarbeiterzahl
    const netMonthlySavings = monthlySavings - dyadCost;
    const netAnnualSavings = netMonthlySavings * 12;
    const roiPercentage = dyadCost > 0 ? ((netMonthlySavings / dyadCost) * 100) : 0;
    const paybackPeriod = netMonthlySavings > 0 ? (dyadCost / netMonthlySavings) : 0;
    
    // Ergebnisse anzeigen
    document.getElementById('monthly_savings').textContent = '€' + Math.round(netMonthlySavings).toLocaleString();
    document.getElementById('annual_savings').textContent = '€' + Math.round(netAnnualSavings).toLocaleString();
    document.getElementById('roi_percentage').textContent = Math.round(roiPercentage) + '%';
    document.getElementById('payback_period').textContent = paybackPeriod > 0 ? Math.round(paybackPeriod * 30) + ' Tage' : 'Sofort';
}

// Initiale Berechnung
document.addEventListener('DOMContentLoaded', calculateROI);
</script>
<?php endif; ?>
</section>
