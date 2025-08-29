<?php
// Lite Template - Leere Startseite mit intelligenter Erweiterung
require_once '../includes/config.php';
require_once '../includes/component-loader.php';
require_once '../components/made-with-dyad.php';
?>
<!DOCTYPE html>
<html lang="de" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> - Welcome to Your Blank App</title>
    
    <!-- Meta Tags -->
    <meta name="description" content="Start building your amazing project with the intelligent PHP template system.">
    <meta name="keywords" content="PHP, Template, Landing Page, Modern Design">
    <meta name="author" content="Dyad">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo SITE_NAME; ?>">
    <meta property="og:description" content="Start building your amazing project here!">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL; ?>">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">
    
    <!-- Custom Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            900: '#1e3a8a',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased">
    <!-- Main Content -->
    <main class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-purple-50">
        <div class="container-custom text-center">
            <!-- Welcome Section -->
            <div class="max-w-4xl mx-auto">
                <!-- Icon -->
                <div class="mb-8">
                    <div class="w-20 h-20 mx-auto bg-gradient-to-r from-primary-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                </div>
                
                <!-- Heading -->
                <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    Welcome to Your 
                    <span class="text-gradient">Blank App</span>
                </h1>
                
                <!-- Subtitle -->
                <p class="text-xl lg:text-2xl text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Start building your amazing project here! This intelligent template system will automatically expand based on your needs.
                </p>
                
                <!-- Features Grid -->
                <div class="grid md:grid-cols-3 gap-6 mb-12 max-w-3xl mx-auto">
                    <div class="bg-white/50 backdrop-blur-sm rounded-xl p-6 border border-gray-200/50 hover:shadow-lg transition-shadow duration-200">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4 mx-auto">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Intelligent System</h3>
                        <p class="text-gray-600 text-sm">Automatically detects and adds components based on your requirements.</p>
                    </div>
                    
                    <div class="bg-white/50 backdrop-blur-sm rounded-xl p-6 border border-gray-200/50 hover:shadow-lg transition-shadow duration-200">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4 mx-auto">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">200+ Components</h3>
                        <p class="text-gray-600 text-sm">Professional landing page sections ready to use when needed.</p>
                    </div>
                    
                    <div class="bg-white/50 backdrop-blur-sm rounded-xl p-6 border border-gray-200/50 hover:shadow-lg transition-shadow duration-200">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4 mx-auto">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Mobile First</h3>
                        <p class="text-gray-600 text-sm">Responsive design that looks great on all devices.</p>
                    </div>
                </div>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-16">
                    <a href="#get-started" class="btn-primary">
                        Get Started
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="#learn-more" class="btn-secondary">
                        Learn More
                    </a>
                </div>
                
                <!-- Instructions -->
                <div class="bg-gray-50 rounded-2xl p-8 max-w-2xl mx-auto">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">🚀 How to get started:</h3>
                    <div class="text-left space-y-3">
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-primary-500 text-white rounded-full flex items-center justify-center text-sm font-bold mt-0.5">1</div>
                            <p class="text-gray-700">Tell the AI what kind of page you want to build</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-primary-500 text-white rounded-full flex items-center justify-center text-sm font-bold mt-0.5">2</div>
                            <p class="text-gray-700">The system automatically detects and adds required sections</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-primary-500 text-white rounded-full flex items-center justify-center text-sm font-bold mt-0.5">3</div>
                            <p class="text-gray-700">Customize the components to match your brand and content</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Made with Dyad Badge -->
    <?php renderMadeWithDyad(); ?>
    
    <!-- Scripts -->
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Add some interactivity
        console.log('🚀 Dyad PHP Lite Template loaded successfully!');
        console.log('💡 Ready for intelligent component expansion...');
    </script>
</body>
</html>
