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
        
        <?php if ($data['style'] === 'slider-gallery'): ?>
            <!-- Slider Gallery -->
            <div class="relative">
                <div class="slider-container overflow-hidden rounded-2xl shadow-xl">
                    <div id="slider" class="flex transition-transform duration-500 ease-in-out">
                        <?php foreach ($data['images'] as $index => $image): ?>
                            <div class="slider-slide w-full flex-shrink-0 relative">
                                <div class="aspect-[16/9] relative">
                                    <img src="<?php echo htmlspecialchars($image['src']); ?>" 
                                         alt="<?php echo htmlspecialchars($image['alt']); ?>"
                                         class="w-full h-full object-cover">
                                    
                                    <!-- Content Overlay -->
                                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-8 text-white">
                                        <h3 class="text-2xl font-bold mb-2"><?php echo htmlspecialchars($image['title']); ?></h3>
                                        <p class="text-white/90"><?php echo htmlspecialchars($image['description']); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <!-- Navigation Buttons -->
                <button onclick="prevSlide()" 
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                
                <button onclick="nextSlide()" 
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                
                <!-- Thumbnails -->
                <?php if (isset($data['showThumbnails']) && $data['showThumbnails']): ?>
                    <div class="flex justify-center space-x-2 mt-6">
                        <?php foreach ($data['images'] as $index => $image): ?>
                            <button onclick="goToSlide(<?php echo $index; ?>)" 
                                    class="thumbnail w-16 h-16 rounded-lg overflow-hidden transition-opacity duration-200 <?php echo $index === 0 ? 'opacity-100' : 'opacity-50'; ?> hover:opacity-100">
                                <img src="<?php echo htmlspecialchars($image['src']); ?>" 
                                     alt="<?php echo htmlspecialchars($image['alt']); ?>"
                                     class="w-full h-full object-cover">
                            </button>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                
                <!-- Progress Indicators -->
                <div class="flex justify-center space-x-2 mt-4">
                    <?php foreach ($data['images'] as $index => $image): ?>
                        <div class="indicator w-2 h-2 rounded-full transition-colors duration-200 <?php echo $index === 0 ? 'bg-blue-600' : 'bg-slate-300 dark:bg-slate-600'; ?>"></div>
                    <?php endforeach; ?>
                </div>
            </div>
            
        <?php elseif ($data['style'] === 'masonry-gallery'): ?>
            <!-- Masonry Gallery -->
            <div class="masonry-container columns-1 md:columns-2 lg:columns-<?php echo isset($data['masonryColumns']) ? $data['masonryColumns'] : 3; ?> gap-6 space-y-6">
                <?php foreach ($data['images'] as $index => $image): ?>
                    <div class="break-inside-avoid group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 bg-white dark:bg-slate-800 mb-6">
                        
                        <!-- Image with Dynamic Aspect Ratio -->
                        <div class="relative overflow-hidden 
                            <?php 
                            $aspectClass = 'aspect-[4/3]'; // default
                            if (isset($image['aspectRatio'])) {
                                switch ($image['aspectRatio']) {
                                    case 'square': $aspectClass = 'aspect-square'; break;
                                    case 'portrait': $aspectClass = 'aspect-[3/4]'; break;
                                    case 'landscape': $aspectClass = 'aspect-[4/3]'; break;
                                    case 'wide': $aspectClass = 'aspect-[16/9]'; break;
                                }
                            }
                            echo $aspectClass;
                            ?>">
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
                                <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                                    <h3 class="text-lg font-bold mb-1"><?php echo htmlspecialchars($image['title']); ?></h3>
                                    <p class="text-sm text-white/90"><?php echo htmlspecialchars($image['description']); ?></p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Content Below Image -->
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">
                                <?php echo htmlspecialchars($image['title']); ?>
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                                <?php echo htmlspecialchars($image['description']); ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
        <?php else: ?>
            <!-- Standard Lightbox Gallery -->
            <div class="grid <?php echo ($data['gridColumns'] === 2) ? 'grid-cols-1 md:grid-cols-2' : (($data['gridColumns'] === 3) ? 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3' : 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4'); ?> gap-8">
                <?php foreach ($data['images'] as $index => $image): ?>
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 bg-white dark:bg-slate-800">
                        
                        <!-- Image Container with Dynamic Aspect Ratio -->
                        <div class="relative overflow-hidden 
                            <?php 
                            $aspectClass = 'aspect-[4/3]'; // default
                            if (isset($image['aspectRatio'])) {
                                switch ($image['aspectRatio']) {
                                    case 'square': $aspectClass = 'aspect-square'; break;
                                    case 'portrait': $aspectClass = 'aspect-[3/4]'; break;
                                    case 'landscape': $aspectClass = 'aspect-[4/3]'; break;
                                    case 'wide': $aspectClass = 'aspect-[16/9]'; break;
                                }
                            }
                            echo $aspectClass;
                            ?>">
                            <img src="<?php echo htmlspecialchars($image['src']); ?>" 
                                 alt="<?php echo htmlspecialchars($image['alt']); ?>"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 cursor-pointer"
                                 onclick="openLightbox(<?php echo $index; ?>)"
                                 loading="lazy">
                            
                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                
                                <!-- Zoom Icon -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                        </svg>
                                    </div>
                                </div>
                                
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
// Gallery State
let currentImageIndex = 0;
let currentSlideIndex = 0;
let autoPlayInterval = null;
const images = <?php echo json_encode($data['images']); ?>;
const galleryStyle = '<?php echo $data['style']; ?>';
const autoPlay = <?php echo isset($data['autoPlay']) && $data['autoPlay'] ? 'true' : 'false'; ?>;
const autoPlayTime = <?php echo isset($data['autoPlayInterval']) ? $data['autoPlayInterval'] : 5000; ?>;

// Lightbox Functions
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

// Slider Functions
function nextSlide() {
    currentSlideIndex = (currentSlideIndex + 1) % images.length;
    updateSlider();
}

function prevSlide() {
    currentSlideIndex = (currentSlideIndex - 1 + images.length) % images.length;
    updateSlider();
}

function goToSlide(index) {
    currentSlideIndex = index;
    updateSlider();
}

function updateSlider() {
    const slider = document.getElementById('slider');
    if (slider) {
        slider.style.transform = `translateX(-${currentSlideIndex * 100}%)`;
        
        // Update thumbnails
        const thumbnails = document.querySelectorAll('.thumbnail');
        thumbnails.forEach((thumb, index) => {
            thumb.classList.toggle('opacity-100', index === currentSlideIndex);
            thumb.classList.toggle('opacity-50', index !== currentSlideIndex);
        });
        
        // Update indicators
        const indicators = document.querySelectorAll('.indicator');
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('bg-blue-600', index === currentSlideIndex);
            indicator.classList.toggle('bg-slate-300', index !== currentSlideIndex);
            indicator.classList.toggle('dark:bg-slate-600', index !== currentSlideIndex);
        });
    }
}

// Auto Play for Slider
function startAutoPlay() {
    if (autoPlay && galleryStyle === 'slider-gallery') {
        autoPlayInterval = setInterval(nextSlide, autoPlayTime);
    }
}

function stopAutoPlay() {
    if (autoPlayInterval) {
        clearInterval(autoPlayInterval);
        autoPlayInterval = null;
    }
}

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    if (galleryStyle === 'slider-gallery') {
        startAutoPlay();
        
        // Pause auto play on hover
        const sliderContainer = document.querySelector('.slider-container');
        if (sliderContainer) {
            sliderContainer.addEventListener('mouseenter', stopAutoPlay);
            sliderContainer.addEventListener('mouseleave', startAutoPlay);
        }
    }
});

// Keyboard navigation
document.addEventListener('keydown', function(e) {
    const modal = document.getElementById('lightboxModal');
    if (modal && !modal.classList.contains('hidden')) {
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
    } else if (galleryStyle === 'slider-gallery') {
        switch(e.key) {
            case 'ArrowLeft':
                prevSlide();
                break;
            case 'ArrowRight':
                nextSlide();
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
