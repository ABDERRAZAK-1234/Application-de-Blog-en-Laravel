<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier la Catégorie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-6">

    <div class="max-w-xl w-full">
        <a href="{{ route('categories.index') }}" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-amber-600 mb-8 transition-colors group">
            <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Annuler les changements
        </a>

        <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden border-t-4 border-t-amber-500">
            <div class="p-8 sm:p-12">
                <div class="mb-10">
                    <h1 class="text-3xl font-bold text-gray-900">Modifier : {{ $categorie->nom }}</h1>
                    <p class="text-gray-500 mt-2">Mettez à jour les informations de cette catégorie.</p>
                </div>

                <form action="{{ route('categories.update', $categorie) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="nom" class="block text-sm font-semibold text-gray-700 mb-2">Nom de la catégorie</label>
                        <input type="text" name="nom" id="nom"
                            class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-amber-500/10 focus:border-amber-500 transition-all outline-none"
                            value="{{ $categorie->nom }}" required>
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                        <textarea name="description" id="description" rows="4"
                            class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-amber-500/10 focus:border-amber-500 transition-all outline-none resize-none">{{ $categorie->description }}</textarea>
                    </div>

                    <div class="flex gap-4">
                        <button type="submit"
                            class="flex-1 bg-amber-500 hover:bg-amber-600 text-white font-bold py-4 rounded-2xl shadow-lg shadow-amber-200 transition-all transform active:scale-[0.98]">
                            Mettre à jour
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
