    <!-- ============================================================================
         ACHIEVEMENTS SECTION
         ============================================================================ -->
    <section class="py-20 px-4 bg-slate-800/50">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl font-bold mb-16 text-center" data-aos="fade-up">
                <span class="bg-gradient-to-r from-accent to-blue-500 bg-clip-text text-transparent">Sertifikat & Penghargaan</span>
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php foreach($achievements as $index => $achievement): ?>
                <div class="glass-effect rounded-lg p-6 hover-lift border-l-4 border-accent" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-full bg-accent/20 flex items-center justify-center flex-shrink-0 mr-4">
                            <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-gray-100 mb-1"><?php echo $achievement['title']; ?></h3>
                            <p class="text-accent font-semibold text-sm"><?php echo $achievement['issuer']; ?></p>
                            <p class="text-gray-400 text-sm"><?php echo $achievement['year']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>