<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeSimple - All-in-One POS & Inventory Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .fade-in { animation: fadeIn 0.8s ease-out forwards; opacity: 0; }
        @keyframes fadeIn { to { opacity: 1; } }
        .float { animation: float 3s ease-in-out infinite; }
        @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
        .card-hover { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .card-hover:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(62, 64, 149, 0.15); }
        @keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    33% { transform: translateY(-15px) rotate(5deg); }
    66% { transform: translateY(-8px) rotate(-5deg); }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-primary">TradeSimple</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#features" class="text-gray-700 hover:text-primary transition">Features</a>
                    <a href="#benefits" class="text-gray-700 hover:text-primary transition">Benefits</a>
                </div>
                <div class="flex space-x-4">
                    <button class="bg-secondary text-white px-6 py-2 rounded-lg font-medium hover:bg-opacity-90 transition">Request A Demo</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-linear-to-br from-primary to-blue-900 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-20 w-72 h-72 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-20 w-96 h-96 bg-secondary rounded-full blur-3xl"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32 relative">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="fade-in" style="animation-delay: 0.2s;">
                    <h1 class="text-5xl lg:text-6xl font-bold leading-tight mb-6">
                        All-in-One POS & Inventory Management for Modern Businesses
                    </h1>
                    <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                        Sell, track inventory, manage purchases, and gain real-time insights — all from one powerful platform.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <button class="bg-secondary text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-opacity-90 transition shadow-lg hover:shadow-xl">
                            Request A Demo
                        </button>
                        <button class="bg-white text-primary px-8 py-4 rounded-lg font-semibold text-lg hover:bg-opacity-90 transition">
                            <a href="#features">View Features</a>
                        </button>
                    </div>
                </div>
              <div class="fade-in flex items-center lg:justify-end " style="animation-delay: 0.4s;">
    <div class="relative w-full max-w-md sm:max-w-xl lg:max-w-2xl h-[24rem] sm:h-[30rem] lg:h-[36rem] mx-auto">
        <!-- Floating decorative elements -->
        <div class="absolute -top-8 -left-8 w-20 h-20 opacity-20 animate-float" style="animation-delay: 0s;">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#FFD700" d="M47.1,-57.8C59.9,-45.5,68.4,-29.3,71.5,-11.8C74.6,5.7,72.3,24.5,63.3,39.9C54.3,55.3,38.6,67.3,21.2,72.8C3.8,78.3,-15.3,77.3,-31.8,70.5C-48.3,63.7,-62.2,51.1,-69.8,35.3C-77.4,19.5,-78.7,0.5,-75.1,-17.3C-71.5,-35.1,-63,-51.7,-49.5,-63.8C-36,-75.9,-18,-83.5,-0.3,-83.1C17.4,-82.7,34.3,-70.1,47.1,-57.8Z" transform="translate(100 100)" />
            </svg>
        </div>

        <div class="absolute top-12 -right-12 w-16 h-16 opacity-15 animate-float" style="animation-delay: 1s;">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#60A5FA" d="M39.5,-65.5C50.4,-56.5,58.1,-43.5,63.6,-29.3C69.1,-15.1,72.4,0.3,70.3,15.1C68.2,29.9,60.7,44.1,49.3,54.2C37.9,64.3,22.6,70.3,6.8,70.8C-9,71.3,-25.3,66.3,-38.8,56.8C-52.3,47.3,-63,33.3,-68.5,17.3C-74,1.3,-74.3,-16.7,-68.5,-31.5C-62.7,-46.3,-50.8,-57.9,-37.5,-66.3C-24.2,-74.7,-9.6,-79.9,3.5,-85.5C16.6,-91.1,28.6,-74.5,39.5,-65.5Z" transform="translate(100 100)" />
            </svg>
        </div>

        <div class="absolute bottom-16 -left-6 w-12 h-12 opacity-20 animate-float" style="animation-delay: 2s;">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#34D399" d="M43.3,-72.8C54.9,-64.3,62.5,-49.4,67.7,-33.9C72.9,-18.4,75.7,-2.3,73.6,12.9C71.5,28.1,64.5,42.4,54.3,53.5C44.1,64.6,30.7,72.5,15.9,75.8C1.1,79.1,-15.1,77.8,-29.3,72.3C-43.5,66.8,-55.7,57.1,-64.5,44.9C-73.3,32.7,-78.7,18,-78.5,3.5C-78.3,-11,-72.5,-25.3,-63.5,-36.9C-54.5,-48.5,-42.3,-57.4,-29.1,-65.1C-15.9,-72.8,-1.7,-79.3,12.7,-78.9C27.1,-78.5,31.7,-81.3,43.3,-72.8Z" transform="translate(100 100)" />
            </svg>
        </div>

        <!-- Animated circles -->
        <div class="absolute top-1/4 left-1/4 w-32 h-32 border-2 border-white/10 rounded-full animate-ping" style="animation-duration: 3s;"></div>
        <div class="absolute bottom-1/4 right-1/4 w-24 h-24 border-2 border-blue-300/10 rounded-full animate-ping" style="animation-duration: 4s; animation-delay: 1s;"></div>

        <!-- Sparkle dots -->
        <div class="absolute top-8 left-1/3 w-2 h-2 bg-yellow-300/60 rounded-full animate-pulse" style="animation-duration: 2s;"></div>
        <div class="absolute top-1/3 right-12 w-3 h-3 bg-blue-300/60 rounded-full animate-pulse" style="animation-duration: 3s; animation-delay: 0.5s;"></div>
        <div class="absolute bottom-1/3 left-16 w-2 h-2 bg-green-300/60 rounded-full animate-pulse" style="animation-duration: 2.5s; animation-delay: 1s;"></div>
        <div class="absolute bottom-12 right-1/4 w-3 h-3 bg-purple-300/60 rounded-full animate-pulse" style="animation-duration: 3.5s;"></div>

        <!-- Gradient glow effects -->
        <div class="absolute top-0 right-0 w-48 h-48 bg-gradient-to-br from-blue-400/20 to-transparent rounded-full blur-3xl animate-pulse" style="animation-duration: 4s;"></div>
        <div class="absolute bottom-0 left-0 w-56 h-56 bg-gradient-to-tr from-purple-400/20 to-transparent rounded-full blur-3xl animate-pulse" style="animation-duration: 5s; animation-delay: 1s;"></div>

        <!-- Plus icons -->
        <div class="absolute top-20 right-8 opacity-20 animate-float" style="animation-delay: 0.5s;">
            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C12.5523 2 13 2.44772 13 3V11H21C21.5523 11 22 11.4477 22 12C22 12.5523 21.5523 13 21 13H13V21C13 21.5523 12.5523 22 12 22C11.4477 22 11 21.5523 11 21V13H3C2.44772 13 2 12.5523 2 12C2 11.4477 2.44772 11 3 11H11V3C11 2.44772 11.4477 2 12 2Z"/>
            </svg>
        </div>

        <div class="absolute bottom-24 left-12 opacity-15 animate-float" style="animation-delay: 1.5s;">
            <svg class="w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C12.5523 2 13 2.44772 13 3V11H21C21.5523 11 22 11.4477 22 12C22 12.5523 21.5523 13 21 13H13V21C13 21.5523 12.5523 22 12 22C11.4477 22 11 21.5523 11 21V13H3C2.44772 13 2 12.5523 2 12C2 11.4477 2.44772 11 3 11H11V3C11 2.44772 11.4477 2 12 2Z"/>
            </svg>
        </div>

        <!-- Phone images -->
        <div class="absolute left-0 top-1/2 w-[60%] sm:w-[55%] lg:w-[52%] z-10 -translate-y-1/2">
            <img src="/assets/img/mobile-1.png" alt="Mobile POS interface angled left" class="w-full h-auto drop-shadow-[0_30px_60px_rgba(15,23,42,0.35)] object-contain" style="transform: perspective(1000px) rotateY(-16deg) translateY(-6px);">
        </div>
        <div class="absolute right-0 top-1/2 w-[60%] sm:w-[55%] lg:w-[52%] z-20 -translate-y-1/2">
            <img src="/assets/img/mobile-2.png" alt="Mobile POS interface angled right" class="w-full h-auto drop-shadow-[0_35px_70px_rgba(15,23,42,0.4)] object-contain" style="transform: perspective(1000px) rotateY(16deg) translateY(6px);">
        </div>
    </div>
</div>
            </div>
        </div>
    </section>

    <!-- What TradeSimple Is -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Everything You Need to Run Your Business</h2>
                <p class="text-xl text-gray-600">Powerful features designed for modern commerce</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="card-hover bg-gray-50 rounded-xl p-8 border border-gray-100">
                    <div class="w-14 h-14 bg-primary rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">POS System</h3>
                    <p class="text-gray-600">Fast, intuitive checkout with barcode scanning and receipt printing</p>
                </div>
                <div class="card-hover bg-gray-50 rounded-xl p-8 border border-gray-100">
                    <div class="w-14 h-14 bg-primary rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Inventory Management</h3>
                    <p class="text-gray-600">Track stock levels, transfers, and alerts across multiple locations</p>
                </div>
                <div class="card-hover bg-gray-50 rounded-xl p-8 border border-gray-100">
                    <div class="w-14 h-14 bg-primary rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Sales & Purchases</h3>
                    <p class="text-gray-600">Manage orders, quotations, and supplier purchases seamlessly</p>
                </div>
                <div class="card-hover bg-gray-50 rounded-xl p-8 border border-gray-100">
                    <div class="w-14 h-14 bg-primary rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Reports & Insights</h3>
                    <p class="text-gray-600">Real-time analytics and reports to drive smarter decisions</p>
                </div>
                <div class="card-hover bg-gray-50 rounded-xl p-8 border border-gray-100">
                    <div class="w-14 h-14 bg-primary rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Customer Management</h3>
                    <p class="text-gray-600">Build relationships with customer profiles and purchase history</p>
                </div>
                <div class="card-hover bg-gray-50 rounded-xl p-8 border border-gray-100">
                    <div class="w-14 h-14 bg-primary rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Multi-User & Permissions</h3>
                    <p class="text-gray-600">Control access with role-based permissions for your team</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why TradeSimple (Benefits) -->
    <section id="benefits" class="py-20 bg-linear-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Businesses Choose TradeSimple</h2>
                <p class="text-xl text-gray-600">Benefits that drive real growth</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="flex items-start space-x-4">
                    <div class="shrink-0 w-12 h-12 bg-secondary rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Know Your Stock in Real-Time</h3>
                        <p class="text-gray-600 text-lg">Never run out of popular items or overstock slow movers with live inventory tracking</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="shrink-0 w-12 h-12 bg-secondary rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Sell Faster with Seamless POS</h3>
                        <p class="text-gray-600 text-lg">Speed up checkout with barcode scanning, quick search, and instant receipt generation</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="shrink-0 w-12 h-12 bg-secondary rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Make Smarter Decisions with Live Reports</h3>
                        <p class="text-gray-600 text-lg">Understand your business performance with comprehensive sales, profit, and inventory analytics</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="shrink-0 w-12 h-12 bg-secondary rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Manage Everything from One Dashboard</h3>
                        <p class="text-gray-600 text-lg">No more juggling multiple tools—sales, inventory, customers, and reports in one place</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Get Started in Minutes</h2>
                <p class="text-xl text-gray-600">Three simple steps to transform your business</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">1</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Install in 5 Minutes</h3>
                    <p class="text-gray-600 text-lg">Quick setup with guided onboarding—no technical expertise required</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">2</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Add Products & Users</h3>
                    <p class="text-gray-600 text-lg">Import your inventory and invite your team with custom permissions</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">3</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Sell, Track & Grow</h3>
                    <p class="text-gray-600 text-lg">Start processing sales and watch your business insights grow in real-time</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Highlights -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Powerful Features for Every Need</h2>
                <p class="text-lg text-gray-600">Explore the product in action</p>
            </div>
            <div class="relative max-w-[1920px] mx-auto">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl bg-white">
                    <div id="feature-carousel" class="relative w-full aspect-video">
                        <div class="carousel-slide absolute inset-0 translate-x-full opacity-0 pointer-events-none transition-all duration-700" data-carousel-slide>
                            <img src="/assets/img/1%20(1).png" alt="POS dashboard overview" class="w-full h-full object-cover">
                        </div>
                        <div class="carousel-slide absolute inset-0 translate-x-full opacity-0 pointer-events-none transition-all duration-700" data-carousel-slide>
                            <img src="/assets/img/1%20(2).png" alt="Inventory management screen" class="w-full h-full object-cover">
                        </div>
                        <div class="carousel-slide absolute inset-0 translate-x-full opacity-0 pointer-events-none transition-all duration-700" data-carousel-slide>
                            <img src="/assets/img/1%20(3).png" alt="Sales analytics view" class="w-full h-full object-cover">
                        </div>
                        <div class="carousel-slide absolute inset-0 translate-x-full opacity-0 pointer-events-none transition-all duration-700" data-carousel-slide>
                            <img src="/assets/img/1%20(4).png" alt="Customer management panel" class="w-full h-full object-cover">
                        </div>
                        <div class="carousel-slide absolute inset-0 translate-x-full opacity-0 pointer-events-none transition-all duration-700" data-carousel-slide>
                            <img src="/assets/img/1%20(5).png" alt="Supplier and purchase tools" class="w-full h-full object-cover">
                        </div>
                        <div class="carousel-slide absolute inset-0 translate-x-full opacity-0 pointer-events-none transition-all duration-700" data-carousel-slide>
                            <img src="/assets/img/1%20(6).png" alt="Reports and insights dashboard" class="w-full h-full object-cover">
                        </div>
                        <div class="carousel-slide absolute inset-0 translate-x-full opacity-0 pointer-events-none transition-all duration-700" data-carousel-slide>
                            <img src="/assets/img/1%20(7).png" alt="Multi-location inventory view" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
                <button type="button" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/90 text-primary hover:bg-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg transition" data-carousel-prev>
                    <span class="sr-only">Previous</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/90 text-primary hover:bg-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg transition" data-carousel-next>
                    <span class="sr-only">Next</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
                <div class="flex justify-center mt-6 gap-2">
                    <button type="button" class="w-3 h-3 rounded-full bg-gray-300 transition" data-carousel-dot="0" aria-pressed="false"></button>
                    <button type="button" class="w-3 h-3 rounded-full bg-gray-300 transition" data-carousel-dot="1" aria-pressed="false"></button>
                    <button type="button" class="w-3 h-3 rounded-full bg-gray-300 transition" data-carousel-dot="2" aria-pressed="false"></button>
                    <button type="button" class="w-3 h-3 rounded-full bg-gray-300 transition" data-carousel-dot="3" aria-pressed="false"></button>
                    <button type="button" class="w-3 h-3 rounded-full bg-gray-300 transition" data-carousel-dot="4" aria-pressed="false"></button>
                    <button type="button" class="w-3 h-3 rounded-full bg-gray-300 transition" data-carousel-dot="5" aria-pressed="false"></button>
                    <button type="button" class="w-3 h-3 rounded-full bg-gray-300 transition" data-carousel-dot="6" aria-pressed="false"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust & Flexibility -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-2">Built for All Businesses</h4>
                    <p class="text-gray-600">From small shops to enterprise operations</p>
                </div>
                <div>
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-2">Multi-Language Support</h4>
                    <p class="text-gray-600">Available in your preferred language</p>
                </div>
                <div>
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-2">Email & SMS Notifications</h4>
                    <p class="text-gray-600">Stay updated on critical business events</p>
                </div>
                <div>
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-2">Mobile-Friendly</h4>
                    <p class="text-gray-600">Access your business from anywhere</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-24 bg-linear-to-br from-primary to-blue-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-5xl font-bold mb-6">Run Your Business Smarter with TradeSimple</h2>
            <p class="text-xl text-blue-100 mb-10">Join thousands of businesses already growing with TradeSimple</p>
            <div class="flex flex-wrap justify-center gap-4">
                <button class="bg-secondary text-white px-10 py-5 rounded-lg font-semibold text-lg hover:bg-opacity-90 transition shadow-xl hover:shadow-2xl">
                    Start Now
                </button>
                <button class="bg-white text-primary px-10 py-5 rounded-lg font-semibold text-lg hover:bg-opacity-90 transition">
                    Request a Demo
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-white text-xl font-bold mb-4">TradeSimple</h3>
                    <p class="text-sm">All-in-One POS & Inventory Management for Modern Businesses</p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Product</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Features</a></li>
                        <li><a href="#" class="hover:text-white transition">Pricing</a></li>
                        <li><a href="#" class="hover:text-white transition">Demo</a></li>
                        <li><a href="#" class="hover:text-white transition">Updates</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Company</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">About</a></li>
                        <li><a href="#" class="hover:text-white transition">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Support</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Help Center</a></li>
                        <li><a href="#" class="hover:text-white transition">Documentation</a></li>
                        <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white transition">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm">&copy; 2025 TradeSimple. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" class="hover:text-white transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    <a href="#" class="hover:text-white transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        (() => {
            const root = document.getElementById('feature-carousel');
            if (!root) {
                return;
            }

            const slides = Array.from(root.querySelectorAll('[data-carousel-slide]'));
            const dots = Array.from(document.querySelectorAll('[data-carousel-dot]'));
            const prev = document.querySelector('[data-carousel-prev]');
            const next = document.querySelector('[data-carousel-next]');
            let index = 0;
            let timer = null;
            let isAnimating = false;

            const applySlideState = (slide, state) => {
                slide.classList.remove('translate-x-full', '-translate-x-full', 'translate-x-0', 'opacity-0', 'opacity-100');
                if (state == 'active') {
                    slide.classList.add('translate-x-0', 'opacity-100');
                    slide.classList.remove('pointer-events-none');
                } else if (state == 'next') {
                    slide.classList.add('translate-x-full', 'opacity-0', 'pointer-events-none');
                } else {
                    slide.classList.add('-translate-x-full', 'opacity-0', 'pointer-events-none');
                }
            };

            const show = (nextIndex, direction) => {
                if (isAnimating || nextIndex == index) {
                    return;
                }

                isAnimating = true;

                const current = index;
                const incoming = nextIndex;
                const forward = direction == 'next';

                slides.forEach((slide, slideIndex) => {
                    if (slideIndex === incoming) {
                        applySlideState(slide, forward ? 'next' : 'prev');
                        slide.setAttribute('aria-hidden', 'false');
                    } else {
                        slide.setAttribute('aria-hidden', slideIndex === current ? 'false' : 'true');
                    }
                });

                requestAnimationFrame(() => {
                    slides.forEach((slide, slideIndex) => {
                        if (slideIndex === incoming) {
                            applySlideState(slide, 'active');
                        } else if (slideIndex === current) {
                            applySlideState(slide, forward ? 'prev' : 'next');
                        } else {
                            applySlideState(slide, slideIndex < incoming ? 'prev' : 'next');
                        }
                    });
                });

                dots.forEach((dot, dotIndex) => {
                    const active = dotIndex == nextIndex;
                    dot.classList.toggle('bg-primary', active);
                    dot.classList.toggle('bg-gray-300', !active);
                    dot.setAttribute('aria-pressed', active ? 'true' : 'false');
                });

                index = nextIndex;

                window.setTimeout(() => {
                    isAnimating = false;
                }, 750);
            };

            const nextSlide = () => show((index + 1) % slides.length, 'next');
            const prevSlide = () => show((index - 1 + slides.length) % slides.length, 'prev');

            const start = () => {
                if (timer) {
                    clearInterval(timer);
                }
                timer = setInterval(nextSlide, 5000);
            };

            if (!slides.length) {
                return;
            }

            slides.forEach((slide, slideIndex) => {
                applySlideState(slide, slideIndex === 0 ? 'active' : 'next');
                slide.setAttribute('aria-hidden', slideIndex === 0 ? 'false' : 'true');
            });
            show(0, 'next');
            start();

            if (next) {
                next.addEventListener('click', () => {
                    nextSlide();
                    start();
                });
            }

            if (prev) {
                prev.addEventListener('click', () => {
                    prevSlide();
                    start();
                });
            }

            dots.forEach((dot) => {
                dot.addEventListener('click', () => {
                    const nextIndex = Number(dot.dataset.carouselDot);
                    if (!Number.isNaN(nextIndex)) {
                        show(nextIndex, nextIndex > index ? 'next' : 'prev');
                        start();
                    }
                });
            });
        })();
    </script>
</body>
</html>
