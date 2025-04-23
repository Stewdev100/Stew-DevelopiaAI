<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DevelopiaAI - AI-Powered Customer Service</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans">
    <!-- Navigation -->
    <nav class="fixed w-full bg-white/80 backdrop-blur-sm z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <span class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                        DevelopiaAI
                    </span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#features" class="text-gray-600 hover:text-indigo-600">Features</a>
                    <a href="#pricing" class="text-gray-600 hover:text-indigo-600">Pricing</a>
                    <a href="#integrations" class="text-gray-600 hover:text-indigo-600">Integrations</a>
                    <a href="/login" class="text-gray-600 hover:text-indigo-600">Login</a>
                    <a href="/register" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                        Start Free Trial
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative pt-16">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 to-purple-50"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                        AI-Powered Customer Service
                    </span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                    Transform your customer support with our intelligent AI chatbot. Answer questions, track orders, and provide instant help 24/7.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/register" class="bg-indigo-600 text-white px-8 py-4 rounded-lg hover:bg-indigo-700 text-lg font-semibold">
                        Start Free Trial
                    </a>
                    <a href="#" class="bg-white text-indigo-600 px-8 py-4 rounded-lg border border-indigo-600 hover:bg-indigo-50 text-lg font-semibold">
                        Watch Demo
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div id="features" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900">Powerful Features</h2>
                <p class="mt-4 text-xl text-gray-600">Everything you need to provide exceptional customer service</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 rounded-2xl bg-white shadow-lg hover:shadow-xl transition-shadow">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">AI-Driven FAQ Lookup</h3>
                    <p class="text-gray-600">Instantly find relevant answers from your knowledge base using natural language processing.</p>
                </div>
                <div class="p-8 rounded-2xl bg-white shadow-lg hover:shadow-xl transition-shadow">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Order Tracking</h3>
                    <p class="text-gray-600">Provide real-time order status updates and tracking information to your customers.</p>
                </div>
                <div class="p-8 rounded-2xl bg-white shadow-lg hover:shadow-xl transition-shadow">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Video Tutorials</h3>
                    <p class="text-gray-600">Share helpful video tutorials and guides to assist your customers.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div id="pricing" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900">Simple, Transparent Pricing</h2>
                <p class="mt-4 text-xl text-gray-600">Choose the plan that's right for you</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 rounded-2xl bg-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Starter</h3>
                    <div class="text-4xl font-bold mb-6">$29<span class="text-lg text-gray-500">/month</span></div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Up to 1,000 conversations
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Basic AI features
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Email support
                        </li>
                    </ul>
                    <a href="/register" class="block w-full bg-indigo-600 text-white text-center py-3 rounded-lg hover:bg-indigo-700">
                        Get Started
                    </a>
                </div>
                <div class="p-8 rounded-2xl bg-white shadow-lg border-2 border-indigo-600">
                    <div class="absolute top-0 right-0 bg-indigo-600 text-white px-3 py-1 rounded-bl-lg">Popular</div>
                    <h3 class="text-2xl font-bold mb-4">Professional</h3>
                    <div class="text-4xl font-bold mb-6">$79<span class="text-lg text-gray-500">/month</span></div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Up to 5,000 conversations
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Advanced AI features
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Priority support
                        </li>
                    </ul>
                    <a href="/register" class="block w-full bg-indigo-600 text-white text-center py-3 rounded-lg hover:bg-indigo-700">
                        Get Started
                    </a>
                </div>
                <div class="p-8 rounded-2xl bg-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Enterprise</h3>
                    <div class="text-4xl font-bold mb-6">Custom</div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Unlimited conversations
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Custom AI solutions
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Dedicated support
                        </li>
                    </ul>
                    <a href="/contact" class="block w-full bg-indigo-600 text-white text-center py-3 rounded-lg hover:bg-indigo-700">
                        Contact Sales
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Integrations Section -->
    <div id="integrations" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900">Works with Your Favorite Platforms</h2>
                <p class="mt-4 text-xl text-gray-600">Seamlessly integrate with your existing tools</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="flex items-center justify-center p-8 bg-gray-50 rounded-lg">
                    <img src="https://cdn.shopify.com/shopifycloud/hatchful_web_two/bundles/0d70200090b21d6e0d3fde7eb894b303.png" alt="Shopify" class="h-12">
                </div>
                <div class="flex items-center justify-center p-8 bg-gray-50 rounded-lg">
                    <img src="https://s.w.org/style/images/about/WordPress-logotype-standard.png" alt="WordPress" class="h-12">
                </div>
                <div class="flex items-center justify-center p-8 bg-gray-50 rounded-lg">
                    <img src="https://www.wix.com/favicon.ico" alt="Wix" class="h-12">
                </div>
                <div class="flex items-center justify-center p-8 bg-gray-50 rounded-lg">
                    <img src="https://www.squarespace.com/favicon.ico" alt="Squarespace" class="h-12">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">DevelopiaAI</h3>
                    <p class="text-gray-400">AI-powered customer service solution for modern businesses.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Product</h4>
                    <ul class="space-y-2">
                        <li><a href="#features" class="text-gray-400 hover:text-white">Features</a></li>
                        <li><a href="#pricing" class="text-gray-400 hover:text-white">Pricing</a></li>
                        <li><a href="#integrations" class="text-gray-400 hover:text-white">Integrations</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Company</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">About</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Legal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Security</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; 2024 DevelopiaAI. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Chat Widget Button -->
    <button class="fixed bottom-4 right-4 bg-indigo-600 text-white p-4 rounded-full shadow-lg hover:bg-indigo-700 transition-colors">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
        </svg>
    </button>
</body>
</html>
