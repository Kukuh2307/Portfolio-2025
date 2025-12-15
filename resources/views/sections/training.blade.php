<!-- ============================================================================
     TRAINING SECTION (Horizontal Bar Layout)
     ============================================================================ -->
<section id="training" class="py-24 px-4">
    <div class="max-w-5xl mx-auto">

        <!-- Title -->
        <h2 class="text-4xl md:text-5xl font-bold mb-16 text-center font-heading" data-aos="fade-up">
            <span class="bg-gradient-to-r from-cyan-400 to-blue-600 bg-clip-text text-transparent drop-shadow-lg">
                Pelatihan & Sertifikasi
            </span>
        </h2>

        <!-- List -->
        <div class="space-y-8">
            @foreach ($trainings as $index => $training)
                <div data-aos="fade-up" data-aos-delay="{{ $index * 80 }}">

                    <!-- Header -->
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-2">
                        <div>
                            <h3 class="text-lg font-semibold text-white">
                                {{ $training->training_name }}
                            </h3>
                            <p class="text-sm text-gray-400">
                                {{ $training->organizer }}
                            </p>
                        </div>

                        <div class="flex items-center gap-4 mt-2 sm:mt-0">
                            <span class="text-sm text-gray-400">
                                {{ \Carbon\Carbon::parse($training->start_date)->format('Y') }}
                            </span>

                            @if ($training->certificate_link)
                                <a href="{{ $training->certificate_link }}" target="_blank"
                                    class="text-sm font-semibold text-white hover:text-cyan-300 transition">
                                    Lihat Sertifikat
                                </a>
                            @endif
                        </div>
                    </div>

                    <!-- Progress Bar -->
                    <div class="w-full h-2 rounded-full bg-gray-700 overflow-hidden">
                        <div class="h-full w-full bg-gradient-to-r from-cyan-400 to-blue-600 rounded-full">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
