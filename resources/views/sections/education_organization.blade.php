    <!-- ============================================================================
         EDUCATION & ORGANIZATION SECTION
         ============================================================================ -->
    <section class="py-20 px-4 bg-slate-900">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl font-bold mb-16 text-center" data-aos="fade-up">
                <span class="bg-gradient-to-r from-accent to-blue-500 bg-clip-text text-transparent">Pendidikan & Organisasi</span>
            </h2>
            
            <div class="grid md:grid-cols-2 gap-8">
                @include('partials.education')
                
                <!-- Organization Column -->
                <div>
                    <h3 class="text-2xl font-bold mb-6 text-accent">Organisasi</h3>
                    <div class="space-y-4">
                        <?php foreach($organizations as $org): ?>
                        <div class="glass-effect rounded-lg p-6 hover-lift" data-aos="fade-up">
                            <h4 class="text-lg font-bold text-gray-100 mb-1"><?php echo $org['position']; ?></h4>
                            <p class="text-accent font-semibold"><?php echo $org['organization']; ?></p>
                            <p class="text-sm text-gray-400"><?php echo $org['year']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>