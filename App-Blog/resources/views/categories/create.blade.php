<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une Catégorie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-6">

    <div class="max-w-xl w-full">
        <a href="{{ route('categories.index') }}" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-indigo-600 mb-8 transition-colors group">
            <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Retour aux catégories
        </a>

        <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <div class="p-8 sm:p-12">
                <div class="mb-10 text-center">
                    <div class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </div>
                    <h1 class="text-3xl font-bold text-gray-900">Nouvelle Catégorie</h1>
                    <p class="text-gray-500 mt-2">Définissez un nouveau segment pour vos articles.</p>
                </div>

                <form action="{{ route('categories.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="nom" class="block text-sm font-semibold text-gray-700 mb-2">Nom de la catégorie</label>
                        <input type="text" name="nom" id="nom"
                            class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all outline-none placeholder-gray-400"
                            placeholder="Ex: Technologie, Santé..." required>
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                        <textarea name="description" id="description" rows="4"
                            class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all outline-none placeholder-gray-400 resize-none"
                            placeholder="Décrivez brièvement cette catégorie..."></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 rounded-2xl shadow-lg shadow-indigo-200 transition-all transform active:scale-[0.98]">
                        Créer la catégorie
                    </button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
