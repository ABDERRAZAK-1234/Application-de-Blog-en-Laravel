<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier la Tâche</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#f3f4f6] min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-lg">
        <a href="{{ route('posts.index') }}" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-indigo-600 mb-6 transition-colors">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Retour à la liste
        </a>

        <div class="bg-white rounded-2xl shadow-xl shadow-gray-200/50 border border-gray-100 p-8">
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-gray-900">Modifier la post</h1>
                <p class="text-gray-500 text-sm mt-1">Mettez à jour les détails de votre projet.</p>
            </div>

            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')


                <div>
                    <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Titre du post</label>
                    <input type="text" name="titre" id="titre"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all outline-none"
                        placeholder="Ex: Acheter le pain..."
                        value="{{ $post->titre }}" required>
                </div>

                <div>
                    <label for="contenu" class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                    <textarea name="contenu" id="contenu" rows="4"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all outline-none"
                        placeholder="Détaillez votre posts ici...">{{ $post->contenu }}</textarea>
                </div>

                <div>
                    <label for="contenu" class="block text-sm font-semibold text-gray-700 mb-2">Image</label>
                    <input type="file" name="image" id="image">
                </div>

                <div>
                        <label for="categorie_id" class="block text-sm font-semibold text-gray-700 mb-2">Catégorie</label>
                        <select name="categorie_id" id="categorie_id"
                            class="bg-transparent text-sm font-semibold text-indigo-600 uppercase tracking-wider border-none focus:ring-0 cursor-pointer p-0 outline-none" required>
                            <option value="" disabled selected>Choisir une catégorie</option>
                            @foreach($categories as $categorie)
                                <option value="{{ $categorie->id }}"
                                    {{ $post->categorie_id == $categorie->id ? 'selected' : '' }}>
                                    {{ $categorie->nom }}
                                </option>
                            @endforeach
                        </select>
                </div>


                <div class="pt-4">
                    <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-indigo-200 transition-all active:scale-[0.98]">
                        Enregistrer les modifications
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
