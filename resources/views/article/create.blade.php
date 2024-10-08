<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold mb-4">Ajouter un Article</h2>
    
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="ref" class="block text-sm font-medium text-gray-700">Référence</label>
                <input type="text" name="ref" id="ref" class="mt-1 block w-full border rounded-md p-2" required>
            </div>
    
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <input type="text" name="description" id="description" class="mt-1 block w-full border rounded-md p-2" required>
            </div>
    
            <div class="mb-4">
                <label for="prix_vent" class="block text-sm font-medium text-gray-700">Prix de vente</label>
                <input type="number" name="prix_vent" id="prix_vent" class="mt-1 block w-full border rounded-md p-2" required>
            </div>
    
            <div class="mb-4">
                <label for="prix_de_mout" class="block text-sm font-medium text-gray-700">Prix de mout</label>
                <input type="number" name="prix_route" id="prix_de_mout" class="mt-1 block w-full border rounded-md p-2" required>
            </div>
    
            <div class="mb-4">
                <label for="quantite" class="block text-sm font-medium text-gray-700">Quantité</label>
                <input type="number" name="quantite" id="quantite" class="mt-1 block w-full border rounded-md p-2" required>
            </div>
    
            <div class="mb-4">
                <label for="categorie" class="block text-sm font-medium text-gray-700">Catégorie</label>
                <input type="text" name="categorie" id="categorie" class="mt-1 block w-full border rounded-md p-2" required>
            </div>
    
            <div class="mb-4">
                <label for="sous_categorie" class="block text-sm font-medium text-gray-700">Sous-catégorie</label>
                <input type="text" name="sous_categorie" id="sous_categorie" class="mt-1 block w-full border rounded-md p-2" required>
            </div>
    
            <div class="mb-4">
                <label for="indicator_01" class="block text-sm font-medium text-gray-700">Indicator 01</label>
                <input type="text" name="indicator_01" id="indicator_01" class="mt-1 block w-full border rounded-md p-2" required>
            </div>
    
            <div class="mb-4">
                <label for="indicator_02" class="block text-sm font-medium text-gray-700">Indicator 02</label>
                <input type="text" name="indicator_02" id="indicator_02" class="mt-1 block w-full border rounded-md p-2">
            </div>
    
            <div class="mb-4">
                <label for="indicator_03" class="block text-sm font-medium text-gray-700">Indicator 03</label>
                <input type="text" name="indicator_03" id="indicator_03" class="mt-1 block w-full border rounded-md p-2">
            </div>
    
            <button type="submit" class="mt-4 bg-blue-500 text-white rounded p-2 w-full">Créer l'Article</button>
        </form>
    </div>
</body>
</html>