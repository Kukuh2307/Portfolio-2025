<!-- ============================================================================
     EXPERIENCE SECTION
     ============================================================================ -->
<section id="experience" class="py-20 px-4 bg-slate-800/50">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold mb-16 text-center" data-aos="fade-up">
            <span class="bg-gradient-to-r from-blue-500 to-blue-600 bg-clip-text text-transparent">Pengalaman Kerja</span>
        </h2>
        
        <div class="timeline relative">
            <!-- Garis timeline vertikal -->
            <div class="absolute left-1/2 transform -translate-x-1/2 w-0.5 h-full bg-gradient-to-b from-blue-500 to-blue-600 hidden md:block"></div>
            
            @foreach($experiences as $index => $exp)
            <div class="mb-12 md:mb-16" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="md:flex md:items-center md:justify-center">
                    <!-- Item Timeline -->
                    <div class="timeline-item flex flex-col md:flex-row md:w-full md:max-w-4xl">
                        <!-- Bagian Kiri (untuk item genap) -->
                        @if($index % 2 == 0)
                                                <div class="md:w-1/2 md:pl-12">
                            <div class="glass-effect rounded-lg p-6 border-l-2 border-blue-500 hover:transform hover:-translate-y-1 transition-all duration-300">
                                <h3 class="text-xl font-bold text-blue-500 mb-2">{{ $exp['position'] }}</h3>
                                <p class="text-gray-300 font-semibold">{{ $exp['company'] }}</p>
                                <p class="text-sm text-gray-400 mb-4">
                                    {{ \Carbon\Carbon::parse($exp['start_date'])->format('M Y') }} - 
                                    {{ $exp['end_date'] ? \Carbon\Carbon::parse($exp['end_date'])->format('M Y') : 'Sekarang' }}
                                </p>
                            </div>
                        </div>
                        
                        <!-- Dot Timeline -->
                        <div class="hidden md:flex items-center justify-center w-4 mx-4 relative z-10">
                            <div class="w-4 h-4 bg-blue-500 rounded-full border-4 border-slate-800"></div>
                        </div>
                        
                        <!-- Bagian Kanan (kosong untuk item genap) -->
                        <div class="hidden md:block md:w-1/2"></div>
                        
                        @else
                        <!-- Bagian Kiri (kosong untuk item ganjil) -->
                        <div class="hidden md:block md:w-1/2"></div>
                        
                        <!-- Dot Timeline -->
                        <div class="hidden md:flex items-center justify-center w-4 mx-4 relative z-10">
                            <div class="w-4 h-4 bg-blue-500 rounded-full border-4 border-slate-800"></div>
                        </div>
                        
                        <!-- Bagian Kanan (untuk item ganjil) -->
                        <div class="md:w-1/2 md:pl-12">
                            <div class="glass-effect rounded-lg p-6 border-l-2 border-blue-500 hover:transform hover:-translate-y-1 transition-all duration-300">
                                <h3 class="text-xl font-bold text-blue-500 mb-2">{{ $exp['position'] }}</h3>
                                <p class="text-gray-300 font-semibold">{{ $exp['company'] }}</p>
                                <p class="text-sm text-gray-400 mb-4">
                                    {{ \Carbon\Carbon::parse($exp['start_date'])->format('M Y') }} - 
                                    {{ $exp['end_date'] ? \Carbon\Carbon::parse($exp['end_date'])->format('M Y') : 'Sekarang' }}
                                </p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> 