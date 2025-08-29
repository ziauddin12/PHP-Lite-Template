<section class="relative py-24 lg:py-32 <?php echo $data['bgClass']; ?>">
    <div class="max-w-6xl mx-auto px-4">
        
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 dark:text-white mb-6 leading-tight">
                <?php echo htmlspecialchars($data['title']); ?>
            </h2>
            
            <p class="text-lg leading-relaxed max-w-3xl mx-auto text-slate-600 dark:text-slate-400">
                <?php echo htmlspecialchars($data['subtitle']); ?>
            </p>
        </div>
        
        <!-- Team Grid -->
        <div class="grid <?php echo $data['layout']; ?> gap-8">
            
            <?php foreach ($data['members'] as $member): ?>
                <div class="group">
                    
                    <?php if ($data['style'] === 'executive-focus'): ?>
                        <!-- Executive Focus Style -->
                        <div class="max-w-4xl mx-auto">
                            <div class="bg-white dark:bg-slate-800 rounded-3xl shadow-2xl border border-slate-200 dark:border-slate-700 overflow-hidden">
                                <div class="grid lg:grid-cols-2 gap-0">
                                    <!-- Image -->
                                    <div class="aspect-w-4 aspect-h-5 lg:aspect-h-6">
                                        <img src="<?php echo htmlspecialchars($member['image']); ?>" 
                                             alt="<?php echo htmlspecialchars($member['name']); ?>"
                                             class="w-full h-full object-cover">
                                    </div>
                                    
                                    <!-- Content -->
                                    <div class="p-12 flex flex-col justify-center">
                                        <div class="mb-8">
                                            <h3 class="text-3xl font-bold text-slate-900 dark:text-white mb-3">
                                                <?php echo htmlspecialchars($member['name']); ?>
                                            </h3>
                                            <p class="text-blue-600 dark:text-blue-400 font-semibold text-xl mb-6">
                                                <?php echo htmlspecialchars($member['position']); ?>
                                            </p>
                                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed text-lg">
                                                <?php echo htmlspecialchars($member['bio']); ?>
                                            </p>
                                        </div>
                                        
                                        <!-- Achievements -->
                                        <?php if (isset($member['achievements'])): ?>
                                            <div class="mb-8">
                                                <h4 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">
                                                    Erfolge & Auszeichnungen:
                                                </h4>
                                                <ul class="space-y-2">
                                                    <?php foreach ($member['achievements'] as $achievement): ?>
                                                        <li class="flex items-center space-x-3">
                                                            <svg class="h-5 w-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                            </svg>
                                                            <span class="text-slate-600 dark:text-slate-400"><?php echo htmlspecialchars($achievement); ?></span>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                        
                                        <!-- Social Links -->
                                        <?php if (!empty($member['social'])): ?>
                                            <div class="flex space-x-4">
                                                <?php foreach ($member['social'] as $platform => $link): ?>
                                                    <a href="<?php echo htmlspecialchars($link); ?>" 
                                                       class="w-12 h-12 bg-slate-100 dark:bg-slate-700 rounded-full flex items-center justify-center hover:bg-blue-100 dark:hover:bg-blue-900 transition-colors duration-300">
                                                        <?php
                                                        switch($platform) {
                                                            case 'linkedin':
                                                                echo '<svg class="h-6 w-6 text-slate-600 dark:text-slate-400" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>';
                                                                break;
                                                            case 'twitter':
                                                                echo '<svg class="h-6 w-6 text-slate-600 dark:text-slate-400" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>';
                                                                break;
                                                            case 'email':
                                                                echo '<svg class="h-6 w-6 text-slate-600 dark:text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>';
                                                                break;
                                                        }
                                                        ?>
                                                    </a>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <?php elseif ($data['style'] === 'leadership-profile'): ?>
                        <!-- Leadership Profile Style -->
                        <div class="max-w-4xl mx-auto">
                            <div class="bg-white dark:bg-slate-800 rounded-3xl shadow-2xl border border-slate-200 dark:border-slate-700 overflow-hidden">
                                <div class="grid lg:grid-cols-5 gap-0">
                                    <!-- Image -->
                                    <div class="lg:col-span-2 aspect-w-4 aspect-h-5">
                                        <img src="<?php echo htmlspecialchars($member['image']); ?>" 
                                             alt="<?php echo htmlspecialchars($member['name']); ?>"
                                             class="w-full h-full object-cover">
                                    </div>
                                    
                                    <!-- Content -->
                                    <div class="lg:col-span-3 p-12 flex flex-col justify-center">
                                        <div class="mb-8">
                                            <h3 class="text-3xl font-bold text-slate-900 dark:text-white mb-3">
                                                <?php echo htmlspecialchars($member['name']); ?>
                                            </h3>
                                            <p class="text-blue-600 dark:text-blue-400 font-semibold text-xl mb-6">
                                                <?php echo htmlspecialchars($member['position']); ?>
                                            </p>
                                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                                                <?php echo htmlspecialchars($member['bio']); ?>
                                            </p>
                                        </div>
                                        
                                        <!-- Qualifications -->
                                        <?php if (isset($member['qualifications'])): ?>
                                            <div class="mb-8">
                                                <h4 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">
                                                    Qualifikationen & Expertise:
                                                </h4>
                                                <div class="grid md:grid-cols-2 gap-3">
                                                    <?php foreach ($member['qualifications'] as $qualification): ?>
                                                        <div class="flex items-center space-x-3">
                                                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                                                            <span class="text-slate-600 dark:text-slate-400 text-sm"><?php echo htmlspecialchars($qualification); ?></span>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        
                                        <!-- Social Links -->
                                        <?php if (!empty($member['social'])): ?>
                                            <div class="flex space-x-4">
                                                <?php foreach ($member['social'] as $platform => $link): ?>
                                                    <a href="<?php echo htmlspecialchars($link); ?>" 
                                                       class="w-12 h-12 bg-slate-100 dark:bg-slate-700 rounded-full flex items-center justify-center hover:bg-blue-100 dark:hover:bg-blue-900 transition-colors duration-300">
                                                        <?php
                                                        switch($platform) {
                                                            case 'linkedin':
                                                                echo '<svg class="h-6 w-6 text-slate-600 dark:text-slate-400" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>';
                                                                break;
                                                            case 'email':
                                                                echo '<svg class="h-6 w-6 text-slate-600 dark:text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>';
                                                                break;
                                                        }
                                                        ?>
                                                    </a>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <?php else: ?>
                        <!-- Company Branded/Large Team Display Style -->
                        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-xl transition-all duration-300 h-full">
                            <div class="aspect-w-4 aspect-h-4">
                                <img src="<?php echo htmlspecialchars($member['image']); ?>" 
                                     alt="<?php echo htmlspecialchars($member['name']); ?>"
                                     class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            
                            <div class="p-6">
                                <div class="text-center">
                                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">
                                        <?php echo htmlspecialchars($member['name']); ?>
                                    </h3>
                                    <p class="text-blue-600 dark:text-blue-400 font-semibold mb-4">
                                        <?php echo htmlspecialchars($member['position']); ?>
                                    </p>
                                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed text-sm mb-6">
                                        <?php echo htmlspecialchars($member['bio']); ?>
                                    </p>
                                    
                                    <!-- Company Badge -->
                                    <?php if (isset($data['companyName'])): ?>
                                        <div class="mb-4">
                                            <span class="inline-block px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-xs font-semibold rounded-full">
                                                <?php echo htmlspecialchars($data['companyName']); ?>
                                            </span>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <!-- Social Links -->
                                    <?php if (!empty($member['social'])): ?>
                                        <div class="flex justify-center space-x-3">
                                            <?php foreach ($member['social'] as $platform => $link): ?>
                                                <a href="<?php echo htmlspecialchars($link); ?>" 
                                                   class="w-8 h-8 bg-slate-100 dark:bg-slate-700 rounded-full flex items-center justify-center hover:bg-blue-100 dark:hover:bg-blue-900 transition-colors duration-300">
                                                    <?php
                                                    switch($platform) {
                                                        case 'linkedin':
                                                            echo '<svg class="h-4 w-4 text-slate-600 dark:text-slate-400" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>';
                                                            break;
                                                        case 'github':
                                                            echo '<svg class="h-4 w-4 text-slate-600 dark:text-slate-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>';
                                                            break;
                                                        case 'email':
                                                            echo '<svg class="h-4 w-4 text-slate-600 dark:text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>';
                                                            break;
                                                    }
                                                    ?>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                </div>
            <?php endforeach; ?>
            
        </div>
        
    </div>
</section>
