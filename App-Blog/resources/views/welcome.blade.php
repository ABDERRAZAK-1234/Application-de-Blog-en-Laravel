<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlogApp | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: radial-gradient(circle at top right, #eef2ff, #f8fafc);
        }

        /* Animation de flottement pour les cartes */
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        /* Effet de lueur au survol */
        .hover-glow:hover {
            box-shadow: 0 0 25px -5px rgba(79, 70, 229, 0.4);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col items-center justify-center overflow-x-hidden">

    <div class="absolute top-[-10%] left-[-10%] w-72 h-72 bg-indigo-200/30 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-96 h-96 bg-blue-200/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>

    <div class="container max-w-5xl mx-auto px-6 py-12 text-center relative z-10">

        <header data-aos="zoom-out" data-aos-duration="1000">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white border border-slate-200 shadow-sm mb-8">
                <span class="relative flex h-2 w-2">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-600"></span>
                </span>
                <span class="text-xs font-bold text-slate-600 uppercase tracking-widest">Système de gestion prêt</span>
            </div>

            <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 mb-6 leading-[1.1]">
                Prenez le contrôle de <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-blue-500">votre contenu.</span>
            </h1>

            <p class="text-lg md:text-xl text-slate-500 max-w-2xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="200">
                L'interface intuitive pour gérer vos publications et organiser vos catégories en toute simplicité. Rapide, fluide et moderne.
            </p>
        </header>

        <div class="flex flex-col md:flex-row gap-8 justify-center items-stretch w-full max-w-4xl mx-auto">

            <a href="{{ route('posts.index') }}"
               data-aos="fade-right" data-aos-delay="400"
               class="flex-1 group bg-white/70 backdrop-blur-xl p-8 rounded-[2.5rem] border border-white shadow-xl shadow-slate-200/50 transition-all duration-500 hover:-translate-y-2 hover-glow float-animation">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-blue-600 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-indigo-200 group-hover:rotate-6 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-slate-800 mb-2">Gérer les Posts</h2>
                    <p class="text-slate-500 text-sm">Éditez, publiez et supprimez vos articles de blog.</p>
                </div>
            </a>

            <a href="{{ route('categories.index') }}"
               data-aos="fade-left" data-aos-delay="600"
               class="flex-1 group bg-white/70 backdrop-blur-xl p-8 rounded-[2.5rem] border border-white shadow-xl shadow-slate-200/50 transition-all duration-500 hover:-translate-y-2 hover-glow float-animation" style="animation-delay: 1s;">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-slate-700 to-slate-900 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-slate-200 group-hover:-rotate-6 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-slate-800 mb-2">Catégories</h2>
                    <p class="text-slate-500 text-sm">Organisez votre contenu par thématiques précises.</p>
                </div>
            </a>

        </div>

        <footer class="mt-20 text-slate-400 font-medium tracking-wide animate-pulse" data-aos="fade-up" data-aos-offset="0">
            &copy; 2026 MYBLOG APP — TANGER, MOROCCO
        </footer>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true, // L'animation ne se joue qu'une fois
            mirror: false
        });
    </script>
</body>
</html>
