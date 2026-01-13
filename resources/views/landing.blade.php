<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posly - All-in-One POS & Inventory Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3E4095',
                        secondary: '#FF6600',
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        * { font-family: 'Inter', sans-serif; }
        .fade-in { animation: fadeIn 0.8s ease-out forwards; opacity: 0; }
        @keyframes fadeIn { to { opacity: 1; } }
        .float { animation: float 3s ease-in-out infinite; }
        @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
        .card-hover { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .card-hover:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(62, 64, 149, 0.15); }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-primary">Posly</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#features" class="text-gray-700 hover:text-primary transition">Features</a>
                    <a href="#benefits" class="text-gray-700 hover:text-primary transition">Benefits</a>
                    <a href="#pricing" class="text-gray-700 hover:text-primary transition">Pricing</a>
                </div>
                <div class="flex space-x-4">
                    <button class="text-primary font-medium hover:text-opacity-80 transition">Sign In</button>
                    <button class="bg-secondary text-white px-6 py-2 rounded-lg font-medium hover:bg-opacity-90 transition">Get Started</button>
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
                            Get Started
                        </button>
                        <button class="bg-white text-primary px-8 py-4 rounded-lg font-semibold text-lg hover:bg-opacity-90 transition">
                            View Features
                        </button>
                    </div>
                </div>
                <div class="fade-in float" style="animation-delay: 0.4s;">
                    <div class="bg-white rounded-2xl shadow-2xl p-6">
                        <div class="bg-linear-to-br from-gray-100 to-gray-200 rounded-xl p-6 space-y-4">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600 font-medium">Today's Sales</span>
                                <span class="text-3xl font-bold text-primary">$12,450</span>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="bg-white rounded-lg p-4 text-center">
                                    <div class="text-2xl font-bold text-gray-800">156</div>
                                    <div class="text-xs text-gray-500">Orders</div>
                                </div>
                                <div class="bg-white rounded-lg p-4 text-center">
                                    <div class="text-2xl font-bold text-gray-800">$80</div>
                                    <div class="text-xs text-gray-500">Avg Order</div>
                                </div>
                                <div class="bg-white rounded-lg p-4 text-center">
                                    <div class="text-2xl font-bold text-secondary">+23%</div>
                                    <div class="text-xs text-gray-500">Growth</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What Posly Is -->
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

    <!-- Why Posly (Benefits) -->
    <section id="benefits" class="py-20 bg-linear-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Businesses Choose Posly</h2>
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
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Powerful Features for Every Need</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold text-primary mb-4 flex items-center">
                        <span class="w-2 h-2 bg-secondary rounded-full mr-3"></span>
                        Sales & POS
                    </h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>• Fast checkout process</li>
                        <li>• Discounts, tax & shipping</li>
                        <li>• Gorgeous invoices</li>
                        <li>• Barcode scanning</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-primary mb-4 flex items-center">
                        <span class="w-2 h-2 bg-secondary rounded-full mr-3"></span>
                        Inventory & Warehouses
                    </h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>• Stock transfers</li>
                        <li>• Quantity alerts</li>
                        <li>• Barcode printing</li>
                        <li>• Multi-warehouse support</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-primary mb-4 flex items-center">
                        <span class="w-2 h-2 bg-secondary rounded-full mr-3"></span>
                        Business Management
                    </h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>• Purchases & returns</li>
                        <li>• Customers & suppliers</li>
                        <li>• Accounting & payments</li>
                        <li>• Roles & permissions</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-primary mb-4 flex items-center">
                        <span class="w-2 h-2 bg-secondary rounded-full mr-3"></span>
                        Reports & Insights
                    </h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>• Sales & profit reports</li>
                        <li>• Inventory reports</li>
                        <li>• Customer analytics</li>
                        <li>• Supplier performance</li>
                    </ul>
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
            <h2 class="text-5xl font-bold mb-6">Run Your Business Smarter with Posly</h2>
            <p class="text-xl text-blue-100 mb-10">Join thousands of businesses already growing with Posly</p>
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
                    <h3 class="text-white text-xl font-bold mb-4">Posly</h3>
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
                <p class="text-sm">&copy; 2025 Posly. All rights reserved.</p>
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
</body>
</html>
