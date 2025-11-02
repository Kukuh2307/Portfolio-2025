<!-- Organization Column -->
<div>
    <h3 class="text-2xl font-bold mb-6 text-accent">Organisasi</h3>
    <div class="space-y-4">
        @forelse ($organizations as $org)
            <div class="glass-effect rounded-lg p-6 hover-lift" data-aos="fade-up">
                <h4 class="text-lg font-bold text-gray-100 mb-1">
                    {{ $org->position }}
                </h4>
                <p class="text-accent font-semibold">
                    {{ $org->organization }}
                </p>
                <p class="text-sm text-gray-400">
                    {{ $org->start_year ?? '' }}
                    @if($org->end_year)
                        - {{ $org->end_year }}
                    @endif
                </p>
            </div>
        @empty
            <p class="text-gray-400">Belum ada data organisasi.</p>
        @endforelse
    </div>
</div>
