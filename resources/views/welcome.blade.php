<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jibrilian Wulsa Ariswanto &mdash; Konstruksi & Evolusi Perangkat Lunak</title>

    <!-- Google Fonts: Plus Jakarta Sans & Instrument Serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        serif: ['"Instrument Serif"', 'serif'],
                    },
                    colors: {
                        earth: {
                            50: '#f7f8f5',
                            100: '#edf0eb',
                            200: '#dbe2d7',
                            800: '#2b3827',
                            900: '#1b2418',
                            950: '#0e140d',
                        },
                        moss: {
                            400: '#739d67',
                            500: '#54764b',
                            600: '#435e3c',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-[#fcfbf9] text-stone-800 font-sans antialiased selection:bg-moss-500 selection:text-white">

    <!-- Hero Section -->
    <div class="relative min-h-screen flex flex-col justify-between overflow-hidden">
        
        <!-- Background: Fotografi Hutan Berkabut Asli (Unsplash) -->
        <div class="absolute inset-0 -z-10">
            <img 
                src="https://images.unsplash.com/photo-1448375240586-882707db888b?auto=format&fit=crop&w=2400&q=80" 
                alt="Hutan pinus berkabut dan rindang" 
                class="w-full h-full object-cover object-center filter brightness-[0.85] contrast-[1.05]"
            />
            <!-- Layer Gradient Overlay agar teks tetap kontras -->
            <div class="absolute inset-0 bg-gradient-to-b from-earth-950/75 via-earth-950/45 to-earth-950/95 backdrop-blur-[1.5px]"></div>
        </div>

        <!-- Header / Identitas Singkat -->
        <header class="w-full max-w-7xl mx-auto px-6 py-8 flex items-center justify-between z-10">
            <div class="flex items-center space-x-3">
                <div class="h-9 w-9 rounded-full bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-emerald-300">
                    <!-- Icon Cabang / Alur Workflow -->
                    <svg class="w-5 h-5 fill-none stroke-current stroke-2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 3v12a3 3 0 003 3h8m0 0l-3-3m3 3l-3 3M18 9a3 3 0 100-6 3 3 0 000 6zM6 9a3 3 0 100-6 3 3 0 000 6z"/>
                    </svg>
                </div>
                <div class="text-left">
                    <span class="block text-white text-sm font-semibold tracking-wide">
                        Jibrilian Wulsa Ariswanto
                    </span>
                    <span class="block text-stone-400 text-xs font-light">
                        Proyek Konstruksi &amp; Evolusi Perangkat Lunak
                    </span>
                </div>
            </div>

            <!-- Tautan Cepat / Repositori -->
            <div class="flex items-center gap-3 text-xs">
                <a href="#pilar" class="px-4 py-2 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 text-white backdrop-blur-md transition duration-200">
                    Fokus Pembelajaran
                </a>
            </div>
        </header>

        <!-- Main Hero Content -->
        <main class="w-full max-w-4xl mx-auto px-6 py-16 text-center z-10">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 border border-white/20 backdrop-blur-md text-xs tracking-wider uppercase text-emerald-300 font-medium mb-6">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                Portofolio Proyek Akademik
            </span>

            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-serif text-white tracking-tight leading-[1.15] mb-6">
                Membangun perangkat lunak yang <br class="hidden sm:inline" />
                <span class="italic text-emerald-200">tumbuh dan berevolusi.</span>
            </h1>

            <p class="text-stone-300 text-base sm:text-lg font-light max-w-2xl mx-auto mb-10 leading-relaxed">
                Platform ini dikembangkan oleh <span class="text-white font-medium">Jibrilian Wulsa Ariswanto</span> untuk memenuhi tugas mata kuliah 
                <span class="text-emerald-300 font-normal">Konstruksi dan Evolusi Perangkat Lunak</span>. Berpusat pada penerapan otomasi alur kerja, integrasi pengujian, dan siklus rilis berkelanjutan.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#pilar" class="w-full sm:w-auto px-8 py-3.5 rounded-xl bg-emerald-700 hover:bg-emerald-600 text-white font-medium shadow-lg shadow-black/20 hover:shadow-emerald-900/30 transition duration-200">
                    Eksplorasi Modul &amp; Pipeline
                </a>
                <a href="#profil" class="w-full sm:w-auto px-8 py-3.5 rounded-xl bg-white/10 hover:bg-white/15 border border-white/20 text-white font-medium backdrop-blur-md transition duration-200">
                    Tentang Proyek &rarr;
                </a>
            </div>
        </main>

        <!-- Footer Hero -->
        <footer class="w-full max-w-7xl mx-auto px-6 py-6 flex flex-col sm:flex-row items-center justify-between text-xs text-stone-400 border-t border-white/10 z-10 gap-2">
            <p>&copy; {{ date('Y') }} Jibrilian Wulsa Ariswanto &bull; Sekolah Vokasi / Rekayasa Perangkat Lunak</p>
            <p class="text-stone-400 font-mono text-[11px]">Branch: main &bull; Pipeline: passing</p>
        </footer>
    </div>

    <!-- Tiga Pilar Materi / Modul -->
    <section id="pilar" class="py-24 px-6 bg-earth-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-xs uppercase tracking-widest text-moss-600 font-semibold">Ruang Lingkup</span>
                <h2 class="text-3xl font-serif text-earth-900 sm:text-4xl mt-2 mb-4">Pilar Utama Pembelajaran</h2>
                <p class="text-stone-600 font-light text-sm sm:text-base leading-relaxed">
                    Evolusi kode yang sehat membutuhkan ekosistem yang teruji, otomatis, dan tahan terhadap perubahan jangka panjang.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Kartu 1: CI/CD Pipeline -->
                <div class="group bg-white rounded-2xl overflow-hidden border border-earth-200/80 shadow-sm hover:shadow-md transition">
                    <div class="h-48 overflow-hidden">
                        <img 
                            src="https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?auto=format&fit=crop&w=800&q=80" 
                            alt="Daun pakis dengan butir embun" 
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                        />
                    </div>
                    <div class="p-6">
                        <div class="text-xs font-semibold text-moss-600 mb-1">Continuous Integration &amp; Delivery</div>
                        <h3 class="font-semibold text-earth-900 text-lg mb-2">CI/CD Pipeline</h3>
                        <p class="text-stone-600 text-sm leading-relaxed">
                            Membangun alur integrasi otomatis setiap kali ada perubahan kode: dari build, static analysis, unit testing, hingga deployment tanpa intervensi manual.
                        </p>
                    </div>
                </div>

                <!-- Kartu 2: Automasi Pengujian & Build -->
                <div class="group bg-white rounded-2xl overflow-hidden border border-earth-200/80 shadow-sm hover:shadow-md transition">
                    <div class="h-48 overflow-hidden">
                        <img 
                            src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?auto=format&fit=crop&w=800&q=80" 
                            alt="Lembah pegunungan berkabut" 
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                        />
                    </div>
                    <div class="p-6">
                        <div class="text-xs font-semibold text-moss-600 mb-1">Test &amp; Build Automation</div>
                        <h3 class="font-semibold text-earth-900 text-lg mb-2">Automasi Berkala</h3>
                        <p class="text-stone-600 text-sm leading-relaxed">
                            Memastikan kualitas kode tetap terjaga lewat eksekusi tes otomatis dan pengecekan dependensi sebelum perubahan digabungkan ke cabang utama.
                        </p>
                    </div>
                </div>

                <!-- Kartu 3: Workflows & Evolusi Sistem -->
                <div class="group bg-white rounded-2xl overflow-hidden border border-earth-200/80 shadow-sm hover:shadow-md transition">
                    <div class="h-48 overflow-hidden">
                        <img 
                            src="https://images.unsplash.com/photo-1426604966848-d7adac402bff?auto=format&fit=crop&w=800&q=80" 
                            alt="Jalur alam di pegunungan" 
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                        />
                    </div>
                    <div class="p-6">
                        <div class="text-xs font-semibold text-moss-600 mb-1">Workflow Orchestration</div>
                        <h3 class="font-semibold text-earth-900 text-lg mb-2">Manajemen Workflows</h3>
                        <p class="text-stone-600 text-sm leading-relaxed">
                            Menerapkan branching strategy yang rapi (GitHub Actions/GitLab CI), refactoring terukur, dan pemeliharaan struktur arsitektur software seiring bertambahnya fitur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ringkasan Profil & Tugas -->
    <section id="profil" class="py-20 px-6 border-t border-earth-200 bg-white">
        <div class="max-w-4xl mx-auto bg-earth-50 rounded-2xl p-8 sm:p-12 border border-earth-200 flex flex-col md:flex-row items-center justify-between gap-8">
            <div>
                <span class="text-xs uppercase tracking-wider text-moss-600 font-semibold">Tentang Mahasiswa</span>
                <h3 class="text-2xl font-serif text-earth-900 mt-1 mb-2">Jibrilian Wulsa Ariswanto</h3>
                <p class="text-stone-600 text-sm leading-relaxed max-w-xl">
                    Situs ini berfungsi sebagai lembar kerja dan implementasi praktis dari materi kuliah Konstruksi dan Evolusi Perangkat Lunak. Setiap commit dan deployment merefleksikan alur kerja modern dalam rekayasa perangkat lunak.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto shrink-0">
                <a href="#pilar" class="px-5 py-2.5 rounded-xl bg-earth-900 hover:bg-earth-800 text-white text-sm font-medium text-center transition">
                    Kembali ke Atas
                </a>
            </div>
        </div>
    </section>

</body>
</html>