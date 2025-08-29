<section class="relative py-24 lg:py-32 <?php echo ($data['style'] === 'before-after') ? 'bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900 dark:to-emerald-800' : (($data['style'] === 'case-studies') ? 'bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900 dark:to-indigo-800' : 'bg-white dark:bg-slate-900'); ?>">
    <div class="max-w-6xl mx-auto px-4">
        
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 dark:text-white mb-6">
                <?php echo htmlspecialchars($data['headline']); ?>
            </h2>
            <p class="text-xl text-slate-600 dark:text-slate-400 max-w-3xl mx-auto leading-relaxed">
                <?php echo htmlspecialchars($data['description']); ?>
            </p>
        </div>
        
        <!-- Gallery Grid -->
        <div class="grid <?php echo ($data['gridColumns'] === 2) ? 'grid-cols-1 md:grid-cols-2' : (($data['gridColumns'] === 3) ? 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3' : 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4'); ?> gap-8">
            <?php foreach ($data['images'] as $index => $image): ?>
                <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 bg-white dark:bg-slate-800">
                    
                    <?php if ($data['style'] === 'before-after' && isset($image['beforeImage']) && isset($image['afterImage'])): ?>
                        <!-- Before/After Comparison -->
                        <div class="relative overflow-hidden aspect-[4/3]">
                            <div class="before-after-container relative w-full h-full">
                                <!-- Before Image -->
                                <img src="<?php echo htmlspecialchars($image['beforeImage']); ?>" 
                                     alt="Vorher: <?php echo htmlspecialchars($image['alt']); ?>"
                                     class="absolute inset-0 w-full h-full object-cover">
                                
                                <!-- After Image with Clip Path -->
                                <div class="after-image absolute inset-0 w-1/2 overflow-hidden">
                                    <img src="<?php echo htmlspecialchars($image['afterImage']); ?>" 
                                         alt="Nachher: <?php echo htmlspecialchars($image['alt']); ?>"
                                         class="w-full h-full object-cover">
                                </div>
                                
                                <!-- Divider -->
                                <div class="absolute top-0 left-1/2 w-1 h-full bg-white shadow-lg transform -translate-x-1/2 z-10">
                                    <div class="absolute top-1/2 left-1/2 w-8 h-8 bg-white rounded-full shadow-lg transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4"></path>
                                        </svg>
                                    </div>
                                </div>
                                
                                <!-- Labels -->
                                <div class="absolute top-4 left-4 bg-black/50 text-white px-3 py-1 rounded-full text-sm font-medium">
                                    Vorher
                                </div>
                                <div class="absolute top-4 right-4 bg-black/50 text-white px-3 py-1 rounded-full text-sm font-medium">
                                    Nachher
                                </div>
                            </div>
                        </div>
                        
                    <?php else: ?>
                        <!-- Standard Image -->
                        <div class="relative overflow-hidden aspect-[4/3]">
                            <img src="<?php echo htmlspecialchars($image['src']); ?>" 
                                 alt="<?php echo htmlspecialchars($image['alt']); ?>"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                 loading="lazy">
                            
                            <!-- Category Badge -->
                            <?php if (isset($image['category'])): ?>
                                <div class="absolute top-4 left-4">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                        <?php echo htmlspecialchars($image['category']); ?>
                                    </span>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                
                                <!-- Lightbox Button -->
                                <?php if (isset($data['showLightbox']) && $data['showLightbox']): ?>
                                    <button onclick="openLightbox(<?php echo $index; ?>)" 
                                            class="absolute top-4 right-4 w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors duration-200">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                        </svg>
                                    </button>
                                <?php endif; ?>
                                
                                <!-- Content Overlay -->
                                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                    <h3 class="text-xl font-bold mb-2"><?php echo htmlspecialchars($image['title']); ?></h3>
                                    <p class="text-sm text-white/90"><?php echo htmlspecialchars($image['description']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Content Below Image -->
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                            <?php echo htmlspecialchars($image['title']); ?>
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-4">
                            <?php echo htmlspecialchars($image['description']); ?>
                        </p>
                        
                        <!-- Metadata -->
                        <?php if (isset($data['showMetadata']) && $data['showMetadata']): ?>
                            <div class="space-y-2 text-sm">
                                
                                <!-- Date -->
                                <?php if (isset($image['date'])): ?>
                                    <div class="flex items-center text-slate-500 dark:text-slate-400">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span><?php echo htmlspecialchars($image['date']); ?></span>
                                    </div>
                                <?php endif; ?>
                                
                                <!-- Price (for product gallery) -->
                                <?php if (isset($image['price'])): ?>
                                    <div class="flex items-center text-green-600 dark:text-green-400 font-semibold">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                        </svg>
                                        <span><?php echo htmlspecialchars($image['price']); ?></span>
                                    </div>
                                <?php endif; ?>
                                
                                <!-- Results (for case studies) -->
                                <?php if (isset($image['results'])): ?>
                                    <div class="flex items-center text-blue-600 dark:text-blue-400 font-semibold">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                        </svg>
                                        <span><?php echo htmlspecialchars($image['results']); ?></span>
                                    </div>
                                <?php endif; ?>
                                
                                <!-- Tags -->
                                <?php if (isset($image['tags']) && is_array($image['tags'])): ?>
                                    <div class="flex flex-wrap gap-1 mt-3">
                                        <?php foreach ($image['tags'] as $tag): ?>
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-slate-100 text-slate-600 dark:bg-slate-700 dark:text-slate-300">
                                                <?php echo htmlspecialchars($tag); ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                                
                                <!-- Link -->
                                <?php if (isset($image['link'])): ?>
                                    <div class="mt-4">
                                        <a href="<?php echo htmlspecialchars($image['link']); ?>" 
                                           class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 font-medium text-sm transition-colors duration-200"
                                           target="_blank" rel="noopener noreferrer">
                                            <span>Projekt ansehen</span>
                                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                            </svg>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <!-- Lightbox Modal -->
    <?php if (isset($data['showLightbox']) && $data['showLightbox']): ?>
        <div id="lightboxModal" class="fixed inset-0 z-50 hidden bg-black/90 backdrop-blur-sm">
            <div class="flex items-center justify-center min-h-screen p-4">
                
                <!-- Close Button -->
                <button onclick="closeLightbox()" 
                        class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors duration-200 z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                
                <!-- Navigation Buttons -->
                <button onclick="prevImage()" 
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors duration-200 z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                
                <button onclick="nextImage()" 
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors duration-200 z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                
                <!-- Image Container -->
                <div class="relative max-w-4xl max-h-full">
                    <img id="lightboxImage" 
                         src="" 
                         alt=""
                         class="max-w-full max-h-[80vh] object-contain rounded-lg">
                    
                    <!-- Image Info -->
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 text-white rounded-b-lg">
                        <h3 id="lightboxTitle" class="text-2xl font-bold mb-2"></h3>
                        <p id="lightboxDescription" class="text-white/90"></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>

<script>
let currentImageIndex = 0;
const images = <?php echo json_encode($data['images']); ?>;

function openLightbox(index) {
    currentImageIndex = index;
    updateLightboxContent();
    document.getElementById('lightboxModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    document.getElementById('lightboxModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    updateLightboxContent();
}

function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    updateLightboxContent();
}

function updateLightboxContent() {
    const image = images[currentImageIndex];
    document.getElementById('lightboxImage').src = image.src;
    document.getElementById('lightboxImage').alt = image.alt;
    document.getElementById('lightboxTitle').textContent = image.title;
    document.getElementById('lightboxDescription').textContent = image.description;
}

// Keyboard navigation
document.addEventListener('keydown', function(e) {
    const modal = document.getElementById('lightboxModal');
    if (!modal.classList.contains('hidden')) {
        switch(e.key) {
            case 'Escape':
                closeLightbox();
                break;
            case 'ArrowLeft':
                prevImage();
                break;
            case 'ArrowRight':
                nextImage();
                break;
        }
    }
});

// Close lightbox when clicking outside image
document.getElementById('lightboxModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeLightbox();
    }
});
</script>
