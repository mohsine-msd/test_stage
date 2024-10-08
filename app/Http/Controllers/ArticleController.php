<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Vente;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Http\Request;
class ArticleController extends Controller
{
    
    
    public function index(Request $request)
{
    // $query = Article::query();

    // // Check if an indicator filter is applied
    // if ($request->has('indicator') && $request->indicator != '') {
    //     $query->where('indicator_01', $request->indicator);
    // }

    // $articls = $query->get();

    // // Fetch unique indicators for the dropdown
    // $uniqueIndicators = Article::select('indicator_01')->distinct()->pluck('indicator_01');

    // return view('article.index', compact('articls', 'uniqueIndicators'));
    return Article::all();
}


    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'ref' => 'required|string|max:255',
            'description' => 'required|string',
            'prix_vent' => 'required|numeric',
            'prix_route' => 'required|numeric',
            'quantite' => 'required|integer',
            'categorie' => 'required|string',
            'sous_categorie' => 'required|string',
            'indicator_01' => 'required|string',
            'indicator_02' => 'required|string',
            'indicator_03' => 'required|string',
        ]);

        // Create a new article
        Article::create($request->all());

        // Redirect after successful creation
        return redirect()->route('articles.index')->with('success', 'Article created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
