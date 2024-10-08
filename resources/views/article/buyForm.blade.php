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
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold mb-4">Acheter: {{ $article->description }}</h2>
        <p>Prix: {{ $article->prix_vent }} MAD</p>
        <p>Quantité disponible: {{ $article->quantite }}</p>
    
        <form action="{{ route('articles.buy', $article) }}" method="POST">
            @csrf
            <input type="text" name="nom_client" placeholder="Nom du client" class="border rounded p-1 mb-4 w-full" required>
            <input type="number" name="quantite" min="1" max="{{ $article->quantite }}" value="1" class="border rounded p-1 mb-4 w-full" required>
            <button type="submit" class="mt-2 bg-blue-500 text-white rounded p-2 w-full">Acheter</button>
        </form>
    </div> 
</body>
</html>