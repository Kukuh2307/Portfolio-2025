<!-- ============================================================================
     EDUCATION & ORGANIZATION SECTION (Futuristic Aurora Style)
     ============================================================================ -->
<section id="education" class="relative py-24 px-4 bg-gradient-to-b from-slate-900 via-slate-800/70 to-slate-900 overflow-hidden">

    <!-- Ambient Background Aurora -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="aurora-bg opacity-40"></div>
        <div class="absolute w-96 h-96 bg-cyan-500/20 blur-3xl rounded-full top-10 left-10 animate-pulse-slow"></div>
        <div class="absolute w-80 h-80 bg-blue-500/20 blur-3xl rounded-full bottom-10 right-10 animate-pulse-slow delay-1000"></div>
    </div>

    <div class="max-w-6xl mx-auto relative z-10">
        <!-- Section Title -->
        <h2 class="text-4xl md:text-5xl font-bold mb-20 text-center font-heading" data-aos="fade-up">
            <span class="bg-gradient-to-r from-cyan-400 to-blue-600 bg-clip-text text-transparent drop-shadow-lg">
                Pendidikan & Organisasi
            </span>
        </h2>

        <!-- Content Grid -->
        <div class="grid md:grid-cols-2 gap-12">

            @include('partials.education')

            @include('partials.organization')

        </div>
    </div>
</section>

<!-- ============================================================================
     ANIMATIONS & GLOW EFFECTS
     ============================================================================ -->
<style>
@keyframes pulse-slow {
    0%, 100% { opacity: 0.3; transform: scale(1); }
    50% { opacity: 0.6; transform: scale(1.05); }
}
.animate-pulse-slow {
    animation: pulse-slow 8s ease-in-out infinite;
}
</style>
