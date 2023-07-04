<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $type = $request->input('type');

        $pokemon = Pokemon::query();

        if ($type) {
            $pokemon->where(function ($query) use ($type) {
                $query->where('type1', $type)
                    ->orWhere('type2', $type);
            });
        }

        $pokemon = $pokemon->paginate(35);

        return view('pokemonViews.pokedex', [
            'pokemon' => $pokemon
        ]);
    }




    public function show($id)
    {
        $pokemon = Pokemon::find($id);
        return view('pokemonViews\pokemon')->with('pokemon', $pokemon);
    }
}
