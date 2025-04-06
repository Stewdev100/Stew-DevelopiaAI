@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-gray-900 via-gray-800 to-gray-900 text-white">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-500/10 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 -left-40 w-80 h-80 bg-purple-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 right-1/4 w-80 h-80 bg-indigo-500/10 rounded-full blur-3xl"></div>
    </div>

    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="text-left">
                    <div class="inline-block px-4 py-2 bg-blue-500/10 rounded-full text-blue-400 text-sm font-medium mb-6">
                        Web3-Ready AI Assistant
                    </div>
                    <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight mb-8">
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 via-purple-500 to-indigo-500">
                            AI-Powered Customer Service
                        </span>
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-3xl">
                        Transform your customer support with our Web3-ready AI chatbot. 24/7 instant responses, powered by your custom knowledge base.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#features" class="px-8 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 rounded-lg font-semibold transition-all duration-300 shadow-lg shadow-blue-500/20 hover:shadow-blue-500/40">
                            Get Started
                        </a>
                        <a href="#demo" class="px-8 py-3 bg-gray-700/50 hover:bg-gray-600/50 rounded-lg font-semibold transition-all duration-300 border border-gray-600 hover:border-gray-500">
                            Try Demo
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <!-- Local SVG illustration - AI Chat -->
                    <img src="{{ asset('images/ai-chat.svg') }}" alt="AI Chat Illustration" class="w-full h-auto animate-float">
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div id="features" class="py-24 bg-gray-800/30 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Powerful Features</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Our AI-powered chatbot comes with everything you need to provide exceptional customer service.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="p-6 bg-gray-700/30 backdrop-blur-sm rounded-xl hover:bg-gray-700/50 transition-all duration-300 border border-gray-600/30 hover:border-gray-500/50 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500/20 to-indigo-500/20 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                                    </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">24/7 Instant Support</h3>
                    <p class="text-gray-300">Always available to answer customer queries, track orders, and resolve issues instantly.</p>
                </div>

                <!-- Feature 2 -->
                <div class="p-6 bg-gray-700/30 backdrop-blur-sm rounded-xl hover:bg-gray-700/50 transition-all duration-300 border border-gray-600/30 hover:border-gray-500/50 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Custom Knowledge Base</h3>
                    <p class="text-gray-300">Train the bot with your specific FAQs, documentation, and product information.</p>
                </div>

                <!-- Feature 3 -->
                <div class="p-6 bg-gray-700/30 backdrop-blur-sm rounded-xl hover:bg-gray-700/50 transition-all duration-300 border border-gray-600/30 hover:border-gray-500/50 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-green-500/20 to-teal-500/20 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">How It Works</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Get started with our AI chatbot in three simple steps</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div class="flex items-start gap-4 group">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-blue-500/20">1</div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Onboard Your Content</h3>
                            <p class="text-gray-300">Upload your FAQs, documentation, and product information through our intuitive dashboard.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 group">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-blue-500/20">2</div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Vectorize & Index</h3>
                            <p class="text-gray-300">Our system automatically processes and indexes your content using pgvector or Pinecone.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 group">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-blue-500/20">3</div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Deploy & Monitor</h3>
                            <p class="text-gray-300">Integrate the chat widget and monitor performance through our analytics dashboard.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/30 backdrop-blur-sm p-8 rounded-xl border border-gray-600/30">
                    <!-- Local SVG illustration - Chat Bot -->
                    <img src="{{ asset('images/chat-bot.svg') }}" alt="Chat Bot Illustration" class="w-full h-auto">
                </div>
            </div>
        </div>
    </div>

    <!-- Demo Section -->
    <div id="demo" class="py-24 bg-gray-800/30 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">See It In Action</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Experience our AI chatbot firsthand</p>
            </div>
            <div class="bg-gray-700/30 backdrop-blur-sm p-8 rounded-xl border border-gray-600/30">
                <div class="aspect-video bg-gray-600/50 rounded-lg flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                        <p class="text-gray-300">Chat widget demo coming soon</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-24 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 relative overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 -left-40 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl font-bold mb-8">Ready to Transform Your Customer Service?</h2>
            <p class="text-xl text-gray-100 mb-12 max-w-2xl mx-auto">
                Join the future of customer support with our AI-powered solution.
            </p>
            <a href="#" class="inline-block px-8 py-4 bg-white text-gray-900 rounded-lg font-semibold hover:bg-gray-100 transition-all duration-300 shadow-lg shadow-black/20 hover:shadow-black/30">
                Get Started Now
            </a>
        </div>
    </div>
        </div>

<style>
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
        100% { transform: translateY(0px); }
    }
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
</style>
@endsection
