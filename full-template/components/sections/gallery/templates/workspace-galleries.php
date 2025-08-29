<section class="relative py-24 lg:py-32 bg-white dark:bg-slate-900">
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
                    
                    <!-- Image Container -->
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="<?php echo htmlspecialchars($image['src']); ?>" 
                             alt="<?php echo htmlspecialchars($image['alt']); ?>"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                             loading="lazy">
                        
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
                    
                    <!-- Content Below Image -->
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                            <?php echo htmlspecialchars($image['title']); ?>
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                            <?php echo htmlspecialchars($image['description']); ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Additional Content for specific variants -->
        <?php if ($data['style'] === 'creative-workspace'): ?>
            <div class="mt-16 text-center">
                <div class="inline-flex items-center space-x-2 bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 px-6 py-3 rounded-full font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                    <span>Kreativität wird hier gelebt</span>
                </div>
            </div>
        <?php endif; ?>
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
