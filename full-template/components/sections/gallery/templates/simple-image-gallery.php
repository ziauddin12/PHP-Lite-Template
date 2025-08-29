<section class="section-padding bg-gradient-to-br from-gray-50 via-white to-purple-50">
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

        <?php if ($data['style'] === 'masonry'): ?>
        <!-- Masonry Grid Style -->
        
        <!-- Category Filter -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <?php foreach ($data['categories'] as $index => $category): ?>
            <button class="px-6 py-3 rounded-full font-medium transition-all duration-200 <?php echo $index === 0 ? 'bg-primary-600 text-white' : 'bg-white text-gray-600 hover:bg-primary-100'; ?>"
                    onclick="filterGallery('<?php echo strtolower(str_replace(' ', '-', $category)); ?>')">
                <?php echo htmlspecialchars($category); ?>
            </button>
            <?php endforeach; ?>
        </div>

        <!-- Masonry Grid -->
        <div class="columns-1 md:columns-2 lg:columns-3 xl:columns-4 gap-6 space-y-6">
            <?php foreach ($data['images'] as $index => $image): ?>
            <div class="gallery-item break-inside-avoid bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2"
                 data-category="<?php echo strtolower(str_replace(' ', '-', $image['category'])); ?>">
                
                <div class="aspect-w-4 aspect-h-<?php echo $image['size'] === 'large' ? '5' : ($image['size'] === 'small' ? '3' : '4'); ?>">
                    <img src="<?php echo htmlspecialchars($image['src']); ?>" 
                         alt="<?php echo htmlspecialchars($image['title']); ?>"
                         class="w-full h-full object-cover cursor-pointer"
                         onclick="openLightbox(<?php echo $index; ?>)">
                </div>
                
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="px-3 py-1 bg-primary-100 text-primary-700 text-xs font-medium rounded-full">
                            <?php echo htmlspecialchars($image['category']); ?>
                        </span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        <?php echo htmlspecialchars($image['title']); ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        <?php echo htmlspecialchars($image['description']); ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <?php elseif ($data['style'] === 'grid'): ?>
        <!-- Grid Layout Style -->
        
        <!-- Category Filter -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <?php foreach ($data['categories'] as $index => $category): ?>
            <button class="px-6 py-3 rounded-full font-medium transition-all duration-200 <?php echo $index === 0 ? 'bg-primary-600 text-white' : 'bg-white text-gray-600 hover:bg-primary-100'; ?>"
                    onclick="filterGallery('<?php echo strtolower(str_replace(' ', '-', $category)); ?>')">
                <?php echo htmlspecialchars($category); ?>
            </button>
            <?php endforeach; ?>
        </div>

        <!-- Grid Layout -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($data['images'] as $index => $image): ?>
            <div class="gallery-item bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2"
                 data-category="<?php echo strtolower(str_replace(' ', '-', $image['category'])); ?>">
                
                <div class="aspect-w-16 aspect-h-12">
                    <img src="<?php echo htmlspecialchars($image['src']); ?>" 
                         alt="<?php echo htmlspecialchars($image['title']); ?>"
                         class="w-full h-full object-cover cursor-pointer"
                         onclick="openLightbox(<?php echo $index; ?>)">
                </div>
                
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="px-3 py-1 bg-primary-100 text-primary-700 text-xs font-medium rounded-full">
                            <?php echo htmlspecialchars($image['category']); ?>
                        </span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">
                        <?php echo htmlspecialchars($image['title']); ?>
                    </h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        <?php echo htmlspecialchars($image['description']); ?>
                    </p>
                    
                    <!-- Metrics -->
                    <div class="space-y-2">
                        <?php foreach ($image['metrics'] as $metric): ?>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm text-gray-700"><?php echo htmlspecialchars($metric); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <?php elseif ($data['style'] === 'carousel'): ?>
        <!-- Carousel Showcase Style -->
        <div class="relative">
            <div class="carousel-container overflow-hidden">
                <div class="carousel-track flex transition-transform duration-500 ease-in-out">
                    <?php foreach ($data['images'] as $index => $story): ?>
                    <div class="carousel-slide flex-shrink-0 w-full">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <!-- Image -->
                            <div class="aspect-w-16 aspect-h-12">
                                <img src="<?php echo htmlspecialchars($story['src']); ?>" 
                                     alt="<?php echo htmlspecialchars($story['title']); ?>"
                                     class="w-full h-full object-cover rounded-3xl shadow-2xl">
                            </div>
                            
                            <!-- Content -->
                            <div>
                                <div class="mb-4">
                                    <span class="px-4 py-2 bg-primary-100 text-primary-700 text-sm font-medium rounded-full">
                                        <?php echo htmlspecialchars($story['category']); ?>
                                    </span>
                                </div>
                                <h3 class="text-3xl font-bold text-gray-900 mb-4">
                                    <?php echo htmlspecialchars($story['title']); ?>
                                </h3>
                                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                                    <?php echo htmlspecialchars($story['description']); ?>
                                </p>
                                
                                <!-- Client -->
                                <div class="mb-6">
                                    <div class="text-sm text-gray-500">Client:</div>
                                    <div class="text-lg font-semibold text-primary-600">
                                        <?php echo htmlspecialchars($story['client']); ?>
                                    </div>
                                </div>
                                
                                <!-- Results -->
                                <div class="mb-6">
                                    <h4 class="text-lg font-semibold text-gray-900 mb-3">Ergebnisse:</h4>
                                    <ul class="space-y-2">
                                        <?php foreach ($story['results'] as $result): ?>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><?php echo htmlspecialchars($result); ?></span>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                
                                <!-- Testimonial -->
                                <blockquote class="bg-gray-50 rounded-xl p-6">
                                    <p class="text-gray-700 italic mb-4">
                                        "<?php echo htmlspecialchars($story['testimonial']); ?>"
                                    </p>
                                    <cite class="text-sm font-semibold text-gray-900">
                                        <?php echo htmlspecialchars($story['author']); ?>
                                    </cite>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- Carousel Controls -->
            <button class="carousel-prev absolute left-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white shadow-lg rounded-full flex items-center justify-center hover:bg-gray-50 transition-colors duration-200"
                    onclick="previousSlide()">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button class="carousel-next absolute right-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white shadow-lg rounded-full flex items-center justify-center hover:bg-gray-50 transition-colors duration-200"
                    onclick="nextSlide()">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
            
            <!-- Carousel Dots -->
            <div class="flex justify-center mt-8 space-x-2">
                <?php foreach ($data['images'] as $index => $story): ?>
                <button class="carousel-dot w-3 h-3 rounded-full <?php echo $index === 0 ? 'bg-primary-600' : 'bg-gray-300'; ?> transition-colors duration-200"
                        onclick="goToSlide(<?php echo $index; ?>)"></button>
                <?php endforeach; ?>
            </div>
        </div>
        
        <?php elseif ($data['style'] === 'before-after'): ?>
        <!-- Before-After Style -->
        <div class="space-y-20">
            <?php foreach ($data['comparisons'] as $index => $comparison): ?>
            <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 overflow-hidden">
                <!-- Header -->
                <div class="p-8 lg:p-12 text-center border-b border-gray-100">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">
                        <?php echo htmlspecialchars($comparison['title']); ?>
                    </h3>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        <?php echo htmlspecialchars($comparison['description']); ?>
                    </p>
                </div>
                
                <!-- Before/After Comparison -->
                <div class="grid lg:grid-cols-2">
                    <!-- Before -->
                    <div class="p-8 lg:p-12 bg-red-50">
                        <div class="text-center mb-6">
                            <div class="inline-flex items-center px-4 py-2 bg-red-500 text-white rounded-full text-sm font-semibold mb-4">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                Vorher
                            </div>
                            <h4 class="text-xl font-semibold text-red-900 mb-4">
                                <?php echo htmlspecialchars($comparison['before']['title']); ?>
                            </h4>
                        </div>
                        
                        <div class="aspect-w-16 aspect-h-12 mb-6">
                            <img src="<?php echo htmlspecialchars($comparison['before']['image']); ?>" 
                                 alt="Vorher"
                                 class="w-full h-full object-cover rounded-xl border-4 border-red-200">
                        </div>
                        
                        <div class="space-y-3">
                            <?php foreach ($comparison['before']['metrics'] as $metric): ?>
                            <div class="flex items-center text-red-800">
                                <svg class="w-5 h-5 mr-3 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"></path>
                                </svg>
                                <?php echo htmlspecialchars($metric); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                    <!-- After -->
                    <div class="p-8 lg:p-12 bg-green-50">
                        <div class="text-center mb-6">
                            <div class="inline-flex items-center px-4 py-2 bg-green-500 text-white rounded-full text-sm font-semibold mb-4">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Nachher
                            </div>
                            <h4 class="text-xl font-semibold text-green-900 mb-4">
                                <?php echo htmlspecialchars($comparison['after']['title']); ?>
                            </h4>
                        </div>
                        
                        <div class="aspect-w-16 aspect-h-12 mb-6">
                            <img src="<?php echo htmlspecialchars($comparison['after']['image']); ?>" 
                                 alt="Nachher"
                                 class="w-full h-full object-cover rounded-xl border-4 border-green-200">
                        </div>
                        
                        <div class="space-y-3">
                            <?php foreach ($comparison['after']['metrics'] as $metric): ?>
                            <div class="flex items-center text-green-800">
                                <svg class="w-5 h-5 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                <?php echo htmlspecialchars($metric); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                
                <!-- Improvements -->
                <div class="p-8 lg:p-12 bg-gradient-to-r from-primary-600 to-blue-600 text-white">
                    <h4 class="text-2xl font-bold text-center mb-6">Verbesserungen</h4>
                    <div class="grid md:grid-cols-3 gap-6">
                        <?php foreach ($comparison['improvements'] as $improvement): ?>
                        <div class="text-center">
                            <div class="text-3xl font-bold mb-2">
                                <?php echo htmlspecialchars($improvement); ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <?php else: ?>
        <!-- Team Gallery Style -->
        
        <!-- Team Stats -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <?php foreach ($data['stats'] as $stat): ?>
            <div class="text-center p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
                <div class="text-4xl font-bold text-primary-600 mb-2">
                    <?php echo htmlspecialchars($stat['number']); ?>
                </div>
                <div class="text-sm text-gray-600">
                    <?php echo htmlspecialchars($stat['label']); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Category Filter -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <?php foreach ($data['categories'] as $index => $category): ?>
            <button class="px-6 py-3 rounded-full font-medium transition-all duration-200 <?php echo $index === 0 ? 'bg-primary-600 text-white' : 'bg-white text-gray-600 hover:bg-primary-100'; ?>"
                    onclick="filterGallery('<?php echo strtolower(str_replace(' ', '-', $category)); ?>')">
                <?php echo htmlspecialchars($category); ?>
            </button>
            <?php endforeach; ?>
        </div>

        <!-- Team Images Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <?php foreach ($data['images'] as $index => $image): ?>
            <div class="gallery-item bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2"
                 data-category="<?php echo strtolower(str_replace(' ', '-', $image['category'])); ?>">
                
                <div class="aspect-w-4 aspect-h-3">
                    <img src="<?php echo htmlspecialchars($image['src']); ?>" 
                         alt="<?php echo htmlspecialchars($image['title']); ?>"
                         class="w-full h-full object-cover cursor-pointer"
                         onclick="openLightbox(<?php echo $index; ?>)">
                </div>
                
                <div class="p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="px-2 py-1 bg-primary-100 text-primary-700 text-xs font-medium rounded-full">
                            <?php echo htmlspecialchars($image['category']); ?>
                        </span>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-1">
                        <?php echo htmlspecialchars($image['title']); ?>
                    </h3>
                    <p class="text-gray-600 text-sm">
                        <?php echo htmlspecialchars($image['description']); ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightbox" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden flex items-center justify-center p-4">
    <div class="relative max-w-4xl max-h-full">
        <img id="lightbox-image" src="" alt="" class="max-w-full max-h-full object-contain">
        <button onclick="closeLightbox()" class="absolute top-4 right-4 w-10 h-10 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-full flex items-center justify-center text-white transition-all duration-200">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
</div>

<script>
// Gallery Filter
function filterGallery(category) {
    const items = document.querySelectorAll('.gallery-item');
    const buttons = document.querySelectorAll('button[onclick^="filterGallery"]');
    
    // Update button states
    buttons.forEach(btn => {
        btn.classList.remove('bg-primary-600', 'text-white');
        btn.classList.add('bg-white', 'text-gray-600');
    });
    event.target.classList.add('bg-primary-600', 'text-white');
    event.target.classList.remove('bg-white', 'text-gray-600');
    
    // Filter items
    items.forEach(item => {
        if (category === 'alle' || item.dataset.category === category) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}

// Lightbox
const galleryImages = <?php echo json_encode(array_column($data['images'] ?? [], 'src')); ?>;

function openLightbox(index) {
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    lightboxImage.src = galleryImages[index];
    lightbox.classList.remove('hidden');
}

function closeLightbox() {
    document.getElementById('lightbox').classList.add('hidden');
}

// Carousel (for carousel style)
let currentSlide = 0;
const totalSlides = <?php echo count($data['images'] ?? []); ?>;

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateCarousel();
}

function previousSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateCarousel();
}

function goToSlide(index) {
    currentSlide = index;
    updateCarousel();
}

function updateCarousel() {
    const track = document.querySelector('.carousel-track');
    const dots = document.querySelectorAll('.carousel-dot');
    
    if (track) {
        track.style.transform = `translateX(-${currentSlide * 100}%)`;
    }
    
    dots.forEach((dot, index) => {
        if (index === currentSlide) {
            dot.classList.add('bg-primary-600');
            dot.classList.remove('bg-gray-300');
        } else {
            dot.classList.add('bg-gray-300');
            dot.classList.remove('bg-primary-600');
        }
    });
}

// Close lightbox on escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeLightbox();
    }
});
</script>

<style>
.aspect-w-4 {
    position: relative;
    padding-bottom: 100%;
}

.aspect-w-16 {
    position: relative;
    padding-bottom: 75%;
}

.aspect-h-3 > *,
.aspect-h-4 > *,
.aspect-h-5 > *,
.aspect-h-12 > * {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
</style>
