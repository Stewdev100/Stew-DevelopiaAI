@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 text-white">
    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight mb-8">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-500">
                        AI-Powered Customer Service
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-3xl mx-auto">
                    Transform your customer support with our Web3-ready AI chatbot. 24/7 instant responses, powered by your custom knowledge base.
                </p>
                <div class="flex justify-center gap-4">
                    <a href="#features" class="px-8 py-3 bg-blue-600 hover:bg-blue-700 rounded-lg font-semibold transition-colors">
                        Get Started
                    </a>
                    <a href="#demo" class="px-8 py-3 bg-gray-700 hover:bg-gray-600 rounded-lg font-semibold transition-colors">
                        Try Demo
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div id="features" class="py-24 bg-gray-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-16">Powerful Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="p-6 bg-gray-700/50 rounded-xl hover:bg-gray-700/70 transition-colors">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">24/7 Instant Support</h3>
                    <p class="text-gray-300">Always available to answer customer queries, track orders, and resolve issues instantly.</p>
                </div>

                <!-- Feature 2 -->
                <div class="p-6 bg-gray-700/50 rounded-xl hover:bg-gray-700/70 transition-colors">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Custom Knowledge Base</h3>
                    <p class="text-gray-300">Train the bot with your specific FAQs, documentation, and product information.</p>
                </div>

                <!-- Feature 3 -->
                <div class="p-6 bg-gray-700/50 rounded-xl hover:bg-gray-700/70 transition-colors">
                    <div class="w-12 h-12 bg-green-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Smart RAG Integration</h3>
                    <p class="text-gray-300">Powered by advanced RAG technology for accurate, context-aware responses.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- How It Works Section -->
    <div class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-16">How It Works</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center flex-shrink-0">1</div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Onboard Your Content</h3>
                            <p class="text-gray-300">Upload your FAQs, documentation, and product information through our intuitive dashboard.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center flex-shrink-0">2</div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Vectorize & Index</h3>
                            <p class="text-gray-300">Our system automatically processes and indexes your content using pgvector or Pinecone.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center flex-shrink-0">3</div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Deploy & Monitor</h3>
                            <p class="text-gray-300">Integrate the chat widget and monitor performance through our analytics dashboard.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/50 p-8 rounded-xl">
                    <div id="demo" class="aspect-video bg-gray-600 rounded-lg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-24 bg-gradient-to-r from-blue-600 to-purple-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-8">Ready to Transform Your Customer Service?</h2>
            <p class="text-xl text-gray-100 mb-12 max-w-2xl mx-auto">
                Join the future of customer support with our AI-powered solution.
            </p>
            <a href="#" class="inline-block px-8 py-4 bg-white text-gray-900 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                Get Started Now
            </a>
        </div>
    </div>
</div>
@endsection
