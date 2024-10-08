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
    $query = Article::query();

    // Check if an indicator filter is applied
    if ($request->has('indicator') && $request->indicator != '') {
        $query->where('indicator_01', $request->indicator);
    }

    $articls = $query->get();

    // Fetch unique indicators for the dropdown
    $uniqueIndicators = Article::select('indicator_01')->distinct()->pluck('indicator_01');

    return view('article.index', compact('articls', 'uniqueIndicators'));
}


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        //
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
