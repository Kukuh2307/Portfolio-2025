<!-- Education Column -->
<div>
    <h3 class="text-2xl font-bold mb-6 text-accent">Pendidikan</h3>
    <div class="space-y-4">
        @foreach ($educations as $edu)
            <div class="glass-effect rounded-lg p-6 hover-lift" data-aos="fade-up">
                <h4 class="text-lg font-bold text-gray-100 mb-1">
                    {{ $edu->degree }}
                </h4>
                <p class="text-accent font-semibold">
                    {{ $edu->institution }}
                </p>
                <p class="text-sm text-gray-400">
                    {{ $edu->major }} • 
                    {{ \Carbon\Carbon::parse($edu->start_date)->format('Y') }}
                    –
                    {{ $edu->end_date ? \Carbon\Carbon::parse($edu->end_date)->format('Y') : 'Sekarang' }}
                </p>
            </div>
        @endforeach
    </div>
</div>
