<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    

<div class="max-w-lg mx-auto">
    <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4">
        <h2 class="text-xl font-bold mb-2">{{ $article->ref }}</h2>
        <p class="text-gray-700 mb-2">{{ $article->description }}</p>
        <p class="text-gray-900 font-bold">{{ $article->prix_vent }} MAD</p>
        <p class="text-gray-600">Quantité: {{ $article->quantite }} P</p>
        <p class="text-gray-600">Catégorie: {{ $article->categorie }}</p>
        <p class="text-gray-600">Sous Catégorie: {{ $article->sous_categorie }}</p>
        <p class="text-gray-600">Indicateur 1: {{ $article->indicator_01 }}</p>
        <p class="text-gray-600">Indicateur 2: {{ $article->indicator_02 }}</p>
        <p class="text-gray-600">Indicateur 3: {{ $article->indicator_03 }}</p>
    </div>
</div>

</body>
</html>
