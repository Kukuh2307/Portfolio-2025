            <!-- =====================================
                 EDUCATION COLUMN
                 ===================================== -->
            <div data-aos="fade-right">
                <div class="flex items-center gap-2 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-cyan-400 animate-bounce-slow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422A12.083 12.083 0 0118 13.5c0 1.6-.48 3.09-1.3 4.34C15.53 20.07 13.9 21 12 21s-3.53-.93-4.7-3.16A8.497 8.497 0 016 13.5c0-.493.034-.977.1-1.45L12 14z" />
        </svg>
                    <h3 class="text-2xl font-bold text-cyan-400 font-heading">Pendidikan</h3>
                </div>

                <div class="space-y-6">
                    @foreach ($educations as $edu)
                        <div class="group relative glass-effect rounded-2xl p-6 border border-cyan-400/20 hover:border-cyan-300/60 transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_0_30px_-10px_rgba(6,182,212,0.5)]">
                            <div class="absolute inset-0 bg-gradient-to-r from-cyan-400/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 rounded-2xl"></div>
                            
                            <h4 class="text-lg md:text-xl font-bold text-gray-100 mb-1">{{ $edu->degree }}</h4>
                            <p class="text-cyan-400 font-semibold">{{ $edu->institution }}</p>
                            <p class="text-sm text-gray-400">
                                {{ $edu->major }} • 
                                {{ \Carbon\Carbon::parse($edu->start_date)->format('Y') }} –
                                {{ $edu->end_date ? \Carbon\Carbon::parse($edu->end_date)->format('Y') : 'Sekarang' }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>