<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog Moderne</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; }
    </style>
</head>
<body class="bg-[#f8fafc] text-slate-900 antialiased">

    <div class="max-w-4xl mx-auto px-4 py-12">
        <header class="mb-16 text-center">
            <h1 class="text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl mb-4">
                Dernières Actualités
            </h1>
            <div class="h-1 w-20 bg-blue-600 mx-auto rounded-full"></div>
        </header>

        <div class="space-y-12">
            @foreach ($posts as $post)
            <article class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col md:flex-row">
                
                <div class="md:w-1/3 h-48 md:h-auto overflow-hidden">
                    <img src="{{ $post['image'] }}" 
                         alt="{{ $post['title'] }}" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>

                <div class="p-8 md:w-2/3 flex flex-col justify-center">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-3 py-1 bg-blue-50 text-blue-600 text-xs font-semibold rounded-full uppercase tracking-wider">
                            Article
                        </span>
                    </div>

                    <h2 class="text-2xl font-bold text-slate-800 mb-3 group-hover:text-blue-600 transition-colors">
                        {{ $post['titre'] }}
                    </h2>

                    <p class="text-slate-600 leading-relaxed mb-6 line-clamp-3">
                        {{ $post['contenu'] }}
                    </p>

                    <div class="flex items-center text-sm font-semibold text-blue-600">
                        Lire la suite
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>

            </article>
            @endforeach
        </div>
    </div>

</body>
</html>