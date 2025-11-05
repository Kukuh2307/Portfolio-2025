<!-- ============================================================================
     EXPERIENCE SECTION (Enhanced Aurora Style)
     ============================================================================ -->
<section id="experience" class="relative py-24 px-4 bg-gradient-to-b from-slate-900 via-slate-800/40 to-slate-900 overflow-hidden">
    

    {{-- <!-- Aurora Background Effect -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="aurora-bg opacity-40"></div>
        <div class="absolute w-72 h-72 bg-blue-500/20 blur-3xl rounded-full top-60 left-10 animate-pulse-slow"></div>
        <div class="absolute w-96 h-96 bg-indigo-500/20 blur-3xl rounded-full bottom-10 right-10 animate-pulse-slow"></div>
    </div> --}}

    <div class="max-w-6xl mx-auto relative z-10">
        <!-- Section Title -->
        <h2 class="text-4xl md:text-5xl font-bold mb-20 text-center font-heading" data-aos="fade-up">
            <span class="bg-gradient-to-r from-cyan-400 to-blue-600 bg-clip-text text-transparent drop-shadow-lg">
                Pengalaman Kerja
            </span>
        </h2>

        <!-- Timeline Wrapper -->
        <div class="timeline relative">
            <!-- Vertical Line -->
            <div class="absolute left-1/2 transform -translate-x-1/2 w-px h-full bg-gradient-to-b from-cyan-400 via-blue-500 to-transparent hidden md:block animate-gradient-flow"></div>

            @foreach($experiences as $index => $exp)
            @php
                $isEven = $index % 2 === 0;
                $delay = $index * 100;
            @endphp

            <div class="mb-16 md:mb-24 relative" data-aos="fade-up" data-aos-delay="{{ $delay }}">
                <div class="md:flex md:items-center md:justify-center">

                    <!-- Timeline Item -->
                    <div class="timeline-item flex flex-col md:flex-row md:w-full md:max-w-5xl relative">

                        <!-- Left Side (Even items) -->
                        @if($isEven)
                        <div class="md:w-1/2 md:pr-12 md:text-right">
                            <div class="group glass-effect relative rounded-2xl p-6 border border-cyan-500/20 hover:border-cyan-400/60 transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_0_30px_-10px_rgba(6,182,212,0.5)]">
                                <h3 class="text-2xl font-bold text-cyan-400 mb-2 group-hover:text-cyan-300 transition-colors">{{ $exp['position'] }}</h3>
                                <p class="text-gray-300 font-semibold">{{ $exp['company'] }}</p>
                                <p class="text-sm text-gray-400 mb-4 italic">
                                    {{ \Carbon\Carbon::parse($exp['start_date'])->format('M Y') }} –
                                    {{ $exp['end_date'] ? \Carbon\Carbon::parse($exp['end_date'])->format('M Y') : 'Sekarang' }}
                                </p>
                            </div>
                        </div>

                        <!-- Center Dot -->
                        <div class="hidden md:flex items-center justify-center w-4 mx-4 relative z-10">
                            <div class="relative">
                                <div class="absolute inset-0 bg-cyan-400 blur-md opacity-70 animate-ping"></div>
                                <div class="w-4 h-4 bg-cyan-400 rounded-full border-4 border-slate-900 shadow-[0_0_20px_rgba(34,211,238,0.8)]"></div>
                            </div>
                        </div>

                        <!-- Empty Right -->
                        <div class="hidden md:block md:w-1/2"></div>

                        @else
                        <!-- Empty Left -->
                        <div class="hidden md:block md:w-1/2"></div>

                        <!-- Center Dot -->
                        <div class="hidden md:flex items-center justify-center w-4 mx-4 relative z-10">
                            <div class="relative">
                                <div class="absolute inset-0 bg-blue-500 blur-md opacity-70 animate-ping"></div>
                                <div class="w-4 h-4 bg-blue-500 rounded-full border-4 border-slate-900 shadow-[0_0_20px_rgba(59,130,246,0.8)]"></div>
                            </div>
                        </div>

                        <!-- Right Side (Odd items) -->
                        <div class="md:w-1/2 md:pl-12 md:text-left">
                            <div class="group glass-effect relative rounded-2xl p-6 border border-blue-500/20 hover:border-blue-400/60 transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_0_30px_-10px_rgba(59,130,246,0.5)]">
                                <h3 class="text-2xl font-bold text-blue-400 mb-2 group-hover:text-blue-300 transition-colors">{{ $exp['position'] }}</h3>
                                <p class="text-gray-300 font-semibold">{{ $exp['company'] }}</p>
                                <p class="text-sm text-gray-400 mb-4 italic">
                                    {{ \Carbon\Carbon::parse($exp['start_date'])->format('M Y') }} –
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

<!-- ============================================================================
     EXTRA ANIMATION KEYFRAMES (Aurora, Pulse, Gradient Flow)
     ============================================================================ -->
<style>
@keyframes gradient-flow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
.animate-gradient-flow {
    background-size: 200% 200%;
    animation: gradient-flow 6s ease-in-out infinite;
}
@keyframes pulse-slow {
    0%, 100% { opacity: 0.3; transform: scale(1); }
    50% { opacity: 0.6; transform: scale(1.05); }
}
.animate-pulse-slow {
    animation: pulse-slow 8s ease-in-out infinite;
}
</style>
