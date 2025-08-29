<?php
function renderMadeWithDyad() {
    ?>
    <div class="fixed bottom-4 right-4 z-50">
        <a href="https://www.dyadphp.sh/" 
           target="_blank" 
           rel="noopener noreferrer"
           class="inline-flex items-center px-4 py-2 bg-white/90 backdrop-blur-sm hover:bg-white text-gray-600 hover:text-gray-900 text-sm font-medium rounded-lg shadow-lg hover:shadow-xl transition-all duration-200 border border-gray-200">
            <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2L2 7L12 12L22 7L12 2Z" />
                <path d="M2 17L12 22L22 17" />
                <path d="M2 12L12 17L22 12" />
            </svg>
            Made with DyadPHP
        </a>
    </div>
    <?php
}
?>
