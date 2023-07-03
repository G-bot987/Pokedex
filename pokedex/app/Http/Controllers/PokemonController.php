<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $pokemon = Pokemon::paginate(35);
        return view('pokemonViews\pokedex', [
            'pokemon' => $pokemon
        ]);
    }

    // public function type(Request $request)
    // {
    //     $type = $request->input('type');

    //     $pokemon = Pokemon::query();

    //     if ($type) {
    //         $pokemon->where('type', $type);
    //     }

    //     $pokemon = $pokemon->paginate(10);

    //     return view('pokedex.index', compact('pokemon'));
    // }


    public function show($id)
    {
        $pokemon = Pokemon::find($id);
        return view('pokemonViews\pokemon')->with('pokemon', $pokemon);
    }
}
