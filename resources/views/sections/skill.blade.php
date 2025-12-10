<!-- ============================================================================
     SKILLS SECTION
     ============================================================================ -->
<section id="skills" class="py-20 px-4 bg-slate-900/50" x-data="{ activeTab: 'all' }">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold mb-16 text-center" data-aos="fade-up">
            <span class="bg-gradient-to-r from-accent to-blue-500 bg-clip-text text-transparent">
                Keahlian & Teknologi
            </span>
        </h2>

        <!-- Tabs -->
        <div class="flex flex-wrap justify-center gap-3 mb-12" data-aos="fade-up">
            <button
                @click="activeTab = 'all'"
                :class="{ 'bg-accent text-slate-900': activeTab === 'all', 'glass-effect': activeTab !== 'all' }"
                class="px-6 py-2 font-semibold rounded-lg transition hover:scale-105">
                Semua
            </button>
            <button
                @click="activeTab = 'front-end'"
                :class="{ 'bg-accent text-slate-900': activeTab === 'front-end', 'glass-effect': activeTab !== 'front-end' }"
                class="px-6 py-2 font-semibold rounded-lg transition hover:scale-105">
                Front-End
            </button>
            <button
                @click="activeTab = 'back-end'"
                :class="{ 'bg-accent text-slate-900': activeTab === 'back-end', 'glass-effect': activeTab !== 'back-end' }"
                class="px-6 py-2 font-semibold rounded-lg transition hover:scale-105">
                Back-End
            </button>
            <button
                @click="activeTab = 'devops'"
                :class="{ 'bg-accent text-slate-900': activeTab === 'devops', 'glass-effect': activeTab !== 'devops' }"
                class="px-6 py-2 font-semibold rounded-lg transition hover:scale-105">
                DevOps
            </button>
            <button
                @click="activeTab = 'design'"
                :class="{ 'bg-accent text-slate-900': activeTab === 'design', 'glass-effect': activeTab !== 'design' }"
                class="px-6 py-2 font-semibold rounded-lg transition hover:scale-105">
                Design
            </button>
            <button
                @click="activeTab = 'programming-language'"
                :class="{ 'bg-accent text-slate-900': activeTab === 'programming-language', 'glass-effect': activeTab !== 'programming-language' }"
                class="px-6 py-2 font-semibold rounded-lg transition hover:scale-105">
                Programming Language
            </button>
            <button
                @click="activeTab = 'version-control'"
                :class="{ 'bg-accent text-slate-900': activeTab === 'version-control', 'glass-effect': activeTab !== 'version-control' }"
                class="px-6 py-2 font-semibold rounded-lg transition hover:scale-105">
                Version Control
            </button>
            <button
                @click="activeTab = 'network'"
                :class="{ 'bg-accent text-slate-900': activeTab === 'network', 'glass-effect': activeTab !== 'network' }"
                class="px-6 py-2 font-semibold rounded-lg transition hover:scale-105">
                Jaringan
            </button>
            <button
                @click="activeTab = 'cybersecurity'"
                :class="{ 'bg-accent text-slate-900': activeTab === 'cybersecurity', 'glass-effect': activeTab !== 'cybersecurity' }"
                class="px-6 py-2 font-semibold rounded-lg transition hover:scale-105">
                Cybersecurity
            </button>
            <button
                @click="activeTab = 'framework'"
                :class="{ 'bg-accent text-slate-900': activeTab === 'framework', 'glass-effect': activeTab !== 'framework' }"
                class="px-6 py-2 font-semibold rounded-lg transition hover:scale-105">
                Framework
            </button>
            <button
                @click="activeTab = 'library'"
                :class="{ 'bg-accent text-slate-900': activeTab === 'library', 'glass-effect': activeTab !== 'library' }"
                class="px-6 py-2 font-semibold rounded-lg transition hover:scale-105">
                Library
            </button>
            <button
                @click="activeTab = 'operating-system'"
                :class="{ 'bg-accent text-slate-900': activeTab === 'operating-system', 'glass-effect': activeTab !== 'operating-system' }"
                class="px-6 py-2 font-semibold rounded-lg transition hover:scale-105">
                Sistem Operasi
            </button>
            <button
                @click="activeTab = 'other'"
                :class="{ 'bg-accent text-slate-900': activeTab === 'other', 'glass-effect': activeTab !== 'other' }"
                class="px-6 py-2 font-semibold rounded-lg transition hover:scale-105">
                Other
            </button>
        </div>

        <!-- Hard Skills Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mb-16" data-aos="fade-up">
            @foreach ($hard_skills as $skill)
            <div
                x-show="activeTab === 'all' || activeTab === '{{ $skill->category }}'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90"
                class="glass-effect rounded-lg p-4 text-center hover-lift transition">
                <span class="text-accent font-semibold">{{ $skill->skill_name }}</span>
            </div>
            @endforeach
        </div>

        <!-- Soft Skills -->
        <div class="mb-8">
            <h3 class="text-2xl font-bold mb-6 text-accent" data-aos="fade-up">Soft Skills</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($soft_skills as $skill)
                <div class="glass-effect rounded-lg p-4 hover-lift transition" data-aos="fade-up">
                    <div class="flex items-start space-x-3">
                        <span class="w-3 h-3 bg-accent rounded-full mt-1.5 flex-shrink-0"></span>
                        <div>
                            <h4 class="text-gray-100 font-semibold">{{ $skill->skill_name }}</h4>
                            <p class="text-gray-400 text-sm">{{ $skill->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>