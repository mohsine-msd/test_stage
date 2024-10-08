<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Vente;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVenteRequest;
use App\Http\Requests\UpdateVenteRequest;

class VenteController extends Controller
{
    

    public function buyForm(Article $article)
{
    return view('article.buyForm', compact('article'));
}
public function buy(Request $request, Article $article)
{
    $request->validate([
        'nom_client' => 'required|string|max:255',
        'quantite' => 'required|integer|min:1|max:' . $article->quantite,
    ]);

    // Create the sale record
    Vente::create([
        'ref' => 'vente' . now()->format('Ymd'), 
        'ref_articl' => $article->ref,
        'nom_client' => $request->input('nom_client'),
        'date_vente' => now(),
        'prix_vente' => $article->prix_vent,
        'indicator_01' => $article->indicator_01,
    ]);

    $article->decrement('quantite', $request->input('quantite'));

    return redirect()->route('articles.index')->with('success', 'Vente enregistrée avec succès.');
}

    public function index()
    {
        return Vente::all();
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVenteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vente $vente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vente $vente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVenteRequest $request, Vente $vente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vente $vente)
    {
        //
    }
}
