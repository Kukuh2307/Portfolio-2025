    <section id="hero" class="min-h-screen flex items-center justify-center px-4 py-8 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-accent opacity-5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-500 opacity-5 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 left-1/4 w-64 h-64 bg-purple-500 opacity-5 rounded-full blur-3xl"></div>
    
    <!-- Floating Elements -->
    <div class="absolute top-20 left-10 w-6 h-6 bg-accent rounded-full opacity-20 animate-pulse" data-aos="fade-right"></div>
    <div class="absolute top-40 right-20 w-4 h-4 bg-blue-400 rounded-full opacity-30 animate-bounce" data-aos="fade-left"></div>
    <div class="absolute bottom-32 left-20 w-8 h-8 bg-purple-400 rounded-full opacity-20 animate-ping" data-aos="fade-up"></div>
    
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10">
        <!-- Text Content -->
        <div class="lg:col-span-7 text-center lg:text-left" data-aos="fade-right">
            
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                <span class="block mb-2 text-white">{{ $developer_name }}</span>
                <span class="text-lg bg-gradient-to-r from-accent to-blue-500 bg-clip-text text-transparent">{{ $developer_title }}</span>
            </h1>
            
            <p class="text-lg md:text-xl text-gray-300 mb-8 leading-relaxed max-w-2xl lg:max-w-none">
                {{ $developer_bio }}
            </p>
            
            <!-- Tech Stack Badges -->
            <div class="flex flex-wrap gap-3 justify-center lg:justify-start mb-8">
                <span class="px-3 py-2 bg-slate-800/50 border border-slate-700 rounded-lg text-sm text-gray-300">PHP</span>
                <span class="px-3 py-2 bg-slate-800/50 border border-slate-700 rounded-lg text-sm text-gray-300">JavaScript</span>
                <span class="px-3 py-2 bg-slate-800/50 border border-slate-700 rounded-lg text-sm text-gray-300">Laravel</span>
                <span class="px-3 py-2 bg-slate-800/50 border border-slate-700 rounded-lg text-sm text-gray-300">React</span>
                <span class="px-3 py-2 bg-slate-800/50 border border-slate-700 rounded-lg text-sm text-gray-300">Tailwind CSS</span>
            </div>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <a href="#projects" class="group px-8 py-4 bg-accent text-slate-900 font-bold rounded-lg hover:shadow-2xl hover:shadow-accent/30 transition-all transform hover:scale-105 flex items-center justify-center gap-2">
                    <span>Lihat Proyek Saya</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
                <a href="#contact" class="group px-8 py-4 border-2 border-accent text-accent font-bold rounded-lg hover:bg-accent/10 transition-all flex items-center justify-center gap-2">
                    <span>Hubungi Saya</span>
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </a>
            </div>
            
            <!-- Social Links -->
            <div class="flex justify-center lg:justify-start gap-4 mt-8">
                <a href="#" class="p-3 bg-slate-800/50 border border-slate-700 rounded-lg text-gray-400 hover:text-accent hover:border-accent/50 transition-all">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                    </svg>
                </a>
                <a href="#" class="p-3 bg-slate-800/50 border border-slate-700 rounded-lg text-gray-400 hover:text-accent hover:border-accent/50 transition-all">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
                <a href="#" class="p-3 bg-slate-800/50 border border-slate-700 rounded-lg text-gray-400 hover:text-accent hover:border-accent/50 transition-all">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                </a>
            </div>
        </div>
        
        <!-- Profile Image & Stats -->
        <div class="lg:col-span-5 flex justify-center" data-aos="fade-left" data-aos-delay="200">
            <div class="relative">
                <!-- Profile Image Container -->
                <div class="relative w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96">
                    <!-- Background Glow -->
                    <div class="absolute inset-0 bg-gradient-to-r from-accent to-blue-500 rounded-full blur-xl opacity-20 animate-pulse"></div>
                    
                    <!-- Profile Image -->
                    <div class="relative w-full h-full rounded-full overflow-hidden border-4 border-slate-700/50 shadow-2xl">
                        <img 
                            src="{{ $profile_image }}" 
                            alt="{{ $developer_name }}"
                            class="w-full h-full object-cover"
                            onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIiBmaWxsPSIjMzQ0MDU2Ii8+CjxjaXJjbGUgY3g9IjEwMCIgY3k9IjgwIiByPSIzMCIgZmlsbD0iIzk0QTRCRSIvPgo8cmVjdCB4PSI2MCIgeT0iMTIwIiB3aWR0aD0iODAiIGhlaWdodD0iODAiIGZpbGw9IiM5NEE0QkUiLz4KPC9zdmc+Cg=='"
                        >
                    </div>
                    
                    <!-- Floating Badge -->
                    <div class="absolute -bottom-2 -right-2 bg-accent text-slate-900 px-4 py-2 rounded-full font-bold text-sm shadow-lg">
                        Tersedia untuk Projek
                    </div>
                </div>
                
                <!-- Experience Stats -->
                <div class="absolute -left-4 top-8 bg-slate-800/80 backdrop-blur-sm border border-slate-700 rounded-2xl p-4 shadow-2xl">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-white">3+</div>
                        <div class="text-xs text-gray-400">Tahun Pengalaman</div>
                    </div>
                </div>
                
                <!-- Projects Stats -->
                <div class="absolute -right-4 bottom-20 bg-slate-800/80 backdrop-blur-sm border border-slate-700 rounded-2xl p-4 shadow-2xl">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-white">50+</div>
                        <div class="text-xs text-gray-400">Proyek Selesai</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2" data-aos="fade-up" data-aos-delay="500">
        <a href="#about" class="flex flex-col items-center text-gray-400 hover:text-accent transition-colors group">
            <span class="text-sm mb-2">Scroll untuk eksplor</span>
            <div class="w-6 h-10 border-2 border-gray-400 rounded-full flex justify-center group-hover:border-accent transition-colors">
                <div class="w-1 h-3 bg-gray-400 rounded-full mt-2 animate-bounce group-hover:bg-accent transition-colors"></div>
            </div>
        </a>
    </div>
</section>