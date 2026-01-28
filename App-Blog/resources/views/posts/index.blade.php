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
<body class="bg-[#f8fafc] text-slate-900 antialiased pb-20">

    <a href="{{ route('posts.create') }}"
       class="fixed bottom-8 right-8 z-50 md:hidden bg-blue-600 text-white p-4 rounded-full shadow-2xl hover:bg-blue-700 transition-all active:scale-90">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
    </a>

    <div class="max-w-4xl mx-auto px-4 py-12">
        <header class="mb-16 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div class="text-center md:text-left">
                <h1 class="text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl mb-4">
                    Dernières Actualités
                </h1>
                <div class="h-1 w-20 bg-blue-600 mx-auto md:mx-0 rounded-full"></div>
            </div>

            <a href="{{ route('posts.create') }}"
               class="hidden md:flex items-center gap-2 bg-white border border-slate-200 text-slate-700 px-6 py-3 rounded-xl font-semibold shadow-sm hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all duration-300 group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Créer un post
            </a>
        </header>

        <div class="space-y-12">
            @forelse ($posts as $post)
            <article class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col md:flex-row relative">

                <div class="absolute top-4 right-4 z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <a href="{{ route('posts.edit', $post) }}"
                       class="flex items-center justify-center w-10 h-10 bg-white/90 backdrop-blur-sm border border-slate-200 text-slate-600 rounded-full hover:bg-blue-600 hover:text-white hover:border-blue-600 shadow-sm transition-all"
                       title="Modifier le post">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </a>
                </div>

                <div class="md:w-1/3 h-48 md:h-auto overflow-hidden">
                    <img src="{{ $post['image'] }}"
                         alt="{{ $post['titre'] }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>

                <div class="p-8 md:w-2/3 flex flex-col justify-center">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-3 py-1 bg-blue-50 text-blue-600 text-xs font-semibold rounded-full uppercase tracking-wider">
                            Article
                        </span>
                    </div>
                    <div class="flex items-center gap-2 mb-3">
                        @if(isset($post->category))
                            <span class="px-3 py-1 bg-indigo-50 text-indigo-600 text-xs font-semibold rounded-full uppercase tracking-wider">
                                {{ $post->categorie->nom }}
                            </span>
                        @endif
                    </div>

                    <h2 class="text-2xl font-bold text-slate-800 mb-3 group-hover:text-blue-600 transition-colors pr-8">
                        {{ $post['titre'] }}
                    </h2>

                    <p class="text-slate-600 leading-relaxed mb-6 line-clamp-3">
                        {{ $post['contenu'] }}
                    </p>

                    <div class="flex items-center justify-between mt-auto">
                        <div class="flex items-center text-sm font-semibold text-blue-600 cursor-pointer">
                            Lire la suite
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                </div>
            </article>
            @empty
                <div class="text-center py-20 bg-white rounded-2xl border-2 border-dashed border-slate-200">
                    <p class="text-slate-400">Aucun post pour le moment.</p>
                    <a href="{{ route('posts.create') }}" class="text-blue-600 font-bold mt-2 inline-block hover:underline">Commencez par en créer un !</a>
                </div>
            @endforelse
        </div>
    </div>

</body>
</html>
