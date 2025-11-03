<!-- ============================================================================
     PROJECTS SECTION
     ============================================================================ -->
<section id="projects" class="py-20 px-4 bg-slate-900">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-4xl font-bold mb-16 text-center" data-aos="fade-up">
            <span class="bg-gradient-to-r from-accent to-blue-500 bg-clip-text text-transparent">
                Proyek Pilihan Saya
            </span>
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($projects as $index => $project)
                <div class="group relative overflow-hidden rounded-lg hover-lift project-card h-80"
                    data-aos="fade-up"
                    data-aos-delay="{{ $index * 100 }}">

                    <!-- Project Image -->
                    <img src="{{ asset('storage/' . $project->image) }}"
                        alt="{{ $project->title }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-300">

                    <!-- Overlay -->
                    <div class="project-card-overlay">
                        <h3 class="text-2xl font-bold text-white mb-2">{{ $project->title }}</h3>
                        <p class="text-gray-300 text-sm mb-4">{{ $project->description }}</p>
                        
                        <!-- Tech Badges -->
                        <div class="flex flex-wrap gap-2 justify-center mb-4">
                            @foreach ($project->technology as $tech)
                                <span class="text-xs bg-accent/20 text-accent px-2 py-1 rounded">{{ $tech }}</span>
                            @endforeach
                        </div>

                        
                        <!-- Links -->
                        <div class="flex gap-4">
                            @if ($project->link)
                                <a href="{{ $project->link }}" target="_blank" class="text-white hover:text-accent transition">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 ..."></path>
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
