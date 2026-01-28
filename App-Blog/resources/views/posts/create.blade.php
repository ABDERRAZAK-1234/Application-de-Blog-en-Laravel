<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Nouveau Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen pb-20">

    <nav class="bg-white border-b border-gray-100 py-4 mb-10 shadow-sm">
        <div class="max-w-3xl mx-auto px-4 flex justify-between items-center">
            <a href="{{ route('posts.index') }}" class="text-gray-400 hover:text-indigo-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </a>
            <span class="font-semibold text-gray-700">Créer un Post</span>
            <div class="w-6"></div>
        </div>
    </nav>

    <div class="max-w-3xl mx-auto px-4">
        <header class="mb-10">
            <h1 class="text-4xl font-bold text-gray-900 tracking-tight">Nouvelle Publication</h1>
            <p class="text-gray-500 mt-2 text-lg">Partagez vos idées avec le monde entier.</p>
        </header>

        <form action="{{ route('posts.store') }}" method="POST" class="space-y-8" enctype="multipart/form-data">
            @csrf

            <!-- Upload image -->
            <div class="group relative bg-white border-2 border-dashed border-gray-200 rounded-2xl p-12 text-center hover:border-indigo-400 transition-colors cursor-pointer">
                <div class="space-y-2">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="text-sm text-gray-600">
                        <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500">
                            <span>Télécharger une photo de couverture</span>
                            <input id="image" name="image" type="file" class="sr-only" required>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Title + Category + Contenu -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 sm:p-8 space-y-6">
                    <div>
                        <input type="text" name="titre" id="titre"
                            class="w-full text-3xl font-bold placeholder-gray-300 border-none focus:ring-0 p-0 outline-none"
                            placeholder="Titre de votre post..." required>
                    </div>

                    <div class="flex items-center gap-2">
                        <div class="bg-indigo-50 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                        </div>
                        <select name="categorie_id" id="categorie_id"
                            class="bg-transparent text-sm font-semibold text-indigo-600 uppercase tracking-wider border-none focus:ring-0 cursor-pointer p-0 outline-none" required>
                            <option value="" disabled selected>Choisir une catégorie</option>
                            @foreach($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <hr class="border-gray-100">

                    <div>
                        <textarea name="contenu" id="contenu" rows="10"
                            class="w-full text-lg text-gray-700 placeholder-gray-300 border-none focus:ring-0 p-0 outline-none resize-none"
                            placeholder="Il était une fois..."></textarea>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex items-center justify-end space-x-4">
                <a href="{{ route('posts.index') }}" class="px-6 py-3 text-sm font-semibold text-gray-600 hover:text-gray-900 transition-colors">
                    Annuler
                </a>
                <button type="submit"
                    class="px-8 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl shadow-lg shadow-indigo-200 transition-all transform hover:-translate-y-1 active:scale-95">
                    Publier le post
                </button>
            </div>
        </form>
    </div>

</body>
</html>
