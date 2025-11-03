            <!-- =====================================
                 ORGANIZATION COLUMN
                 ===================================== -->
            <div data-aos="fade-left">
                <div class="flex items-center gap-2 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400 animate-bounce-slow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17l4 4 4-4m0-10l-4-4-4 4m4 6v4m0-10V7m0 4H7m10 0h-4" />
        </svg>
                    <h3 class="text-2xl font-bold text-blue-400 font-heading">Organisasi</h3>
                </div>

                <div class="space-y-6">
                    @forelse ($organizations as $org)
                        <div class="group relative glass-effect rounded-2xl p-6 border border-blue-500/20 hover:border-blue-400/60 transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_0_30px_-10px_rgba(59,130,246,0.5)]">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 rounded-2xl"></div>

                            <h4 class="text-lg md:text-xl font-bold text-gray-100 mb-1">{{ $org->position }}</h4>
                            <p class="text-blue-400 font-semibold">{{ $org->organization }}</p>
                            <p class="text-sm text-gray-400">
                                {{ $org->start_year ?? '' }}
                                @if($org->end_year)
                                    - {{ $org->end_year }}
                                @endif
                            </p>
                        </div>
                    @empty
                        <p class="text-gray-400 italic">Belum ada data organisasi.</p>
                    @endforelse
                </div>
            </div>