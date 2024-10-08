<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <h1 class="font-bold text-2xl text-center m-4">Liste des articles</h1>

    <form method="GET" action="{{ route('articles.index') }}" class="mb-4 max-w-sm">
        <label for="indicator" class="block text-sm font-medium text-gray-700">Filter by Indicator:</label>
        <select name="indicator" id="indicator" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
            <option value="">All Indicators</option>
            @foreach($uniqueIndicators as $indicator)
                <option value="{{ $indicator }}">{{ $indicator }}</option>
            @endforeach
        </select>
        <button type="submit" class="mt-2 px-4 py-2 bg-blue-600 text-white rounded-md">Filter</button>
    </form>
    <div class="flex flex-wrap justify-center">
        @foreach($articls as $article)
            <div class="max-w-sm mx-2 mb-4">
                <div class="bg-white border border-gray-200 rounded-lg shadow-md  p-4">
                    <h2 class="text-lg font-semibold mb-2">{{ $article->ref }}</h2>
                    <p class="text-gray-700 mb-2">{{ $article->description }}</p>
                    <p class="text-gray-900 font-bold">{{ $article->prix_vent }} MAD</p>
                    <a href="{{ route('articles.show', $article->id) }}" class="text-blue-500 hover:underline">
                        View Details
                    </a>
                    <a href="{{ route('articles.buyForm', $article) }}" class="mt-2 bg-blue-500 text-white rounded p-2 inline-block">Acheter</a>

                </div>
            </div>
        @endforeach
    </div>
    
</body>
</html>