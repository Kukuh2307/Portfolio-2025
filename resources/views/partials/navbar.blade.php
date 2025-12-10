    <!-- ============================================================================
         NAVBAR / HEADER
         ============================================================================ -->
    <nav class="sticky top-0 z-50 glass-effect border-b border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <h1
                        class="text-2xl font-bold bg-gradient-to-r from-accent to-blue-500 bg-clip-text text-transparent">
                        <img class="w-10 h-10 rounded-full" src="{{ asset('img/favicon.png') }}" alt="Logo">
                    </h1>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex space-x-8">
                    <a href="#hero" class="hover:text-accent transition">Hero</a>
                    <a href="#experience" class="hover:text-accent transition">Experience</a>
                    <a href="#projects" class="hover:text-accent transition">Projects</a>
                    <a href="#skills" class="hover:text-accent transition">Skills</a>
                    <a href="#contact" class="hover:text-accent transition">Contact</a>
                </div>

                <!-- Mobile Menu Toggle -->
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-300 hover:text-accent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div x-show="mobileMenuOpen" x-transition class="md:hidden pb-4 space-y-2">
                <a href="#hero" class="block py-2 hover:text-accent transition">Hero</a>
                <a href="#experience" class="block py-2 hover:text-accent transition">Experience</a>
                <a href="#projects" class="block py-2 hover:text-accent transition">Projects</a>
                <a href="#skills" class="block py-2 hover:text-accent transition">Skills</a>
                <a href="#contact" class="block py-2 hover:text-accent transition">Contact</a>
            </div>
        </div>
    </nav>
