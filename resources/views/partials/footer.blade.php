    <!-- ============================================================================
         CONTACT SECTION / FOOTER
         ============================================================================ -->
    <footer id="contact" class="bg-slate-900 border-t border-gray-700">
        <div class="max-w-6xl mx-auto px-4 py-20">
            <!-- Contact CTA -->
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-accent to-blue-500 bg-clip-text text-transparent">Tertarik Bekerja Sama?</span>
                </h2>
                <p class="text-gray-400 text-lg mb-8 max-w-2xl mx-auto">
                    Saya selalu terbuka untuk peluang baru, kolaborasi, dan pertanyaan. Jangan ragu untuk menghubungi saya!
                </p>
                
                <!-- Contact Methods -->
                <div class="flex flex-col md:flex-row justify-center gap-6 mb-12">
                    <!-- Email -->
                    <a href="mailto:<?php echo $developer_email; ?>" class="glass-effect rounded-lg px-6 py-4 hover:border-accent hover:bg-accent/10 transition flex items-center justify-center gap-3">
                        <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span class="font-semibold"><?php echo $developer_email; ?></span>
                    </a>
                    
                    <!-- Phone -->
                    <a href="tel:<?php echo $developer_phone; ?>" class="glass-effect rounded-lg px-6 py-4 hover:border-accent hover:bg-accent/10 transition flex items-center justify-center gap-3">
                        <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span class="font-semibold"><?php echo $developer_phone; ?></span>
                    </a>
                </div>
            </div>
            
            <!-- Social Links -->
            <div class="flex justify-center gap-8 mb-16" data-aos="fade-up">
                <?php foreach($social_links as $social): ?>
                    <?php if($social['icon'] === 'linkedin'): ?>
                    <a href="<?php echo $social['url']; ?>" target="_blank" class="text-gray-400 hover:text-accent transition w-10 h-10 flex items-center justify-center rounded-lg glass-effect">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.475-2.236-1.986-2.236-1.081 0-1.722.722-2.004 1.418-.103.249-.129.597-.129.946v5.441h-3.554s.047-8.842 0-9.769h3.554v1.383c.43-.664 1.199-1.61 2.920-1.61 2.134 0 3.734 1.39 3.734 4.38v5.616zM5.337 9.341c-1.142 0-1.888-.755-1.888-1.701 0-.958.746-1.7 1.932-1.7 1.185 0 1.887.742 1.907 1.7 0 .946-.722 1.701-1.951 1.701zm1.608 11.111H3.615V9.683h3.33v10.769zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z"/>
                        </svg>
                    </a>
                    <?php elseif($social['icon'] === 'github'): ?>
                    <a href="<?php echo $social['url']; ?>" target="_blank" class="text-gray-400 hover:text-accent transition w-10 h-10 flex items-center justify-center rounded-lg glass-effect">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.768.84 1.235 1.911 1.235 3.222 0 4.606-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    <?php elseif($social['icon'] === 'mail'): ?>
                    <a href="<?php echo $social['url']; ?>" class="text-gray-400 hover:text-accent transition w-10 h-10 flex items-center justify-center rounded-lg glass-effect">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            
            <!-- Footer Bottom -->
            <div class="border-t border-gray-700 pt-8 text-center text-gray-500">
                <p>© <?php echo date('Y'); ?> <?php echo $developer_name; ?>. Semua hak dilindungi. Dibuat dengan ❤️ dan passion.</p>
            </div>
        </div>
    </footer>