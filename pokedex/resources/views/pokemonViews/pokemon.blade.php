@extends('layouts\layout')
@section('title', 'pokemon')

@section('content')

    <div class="container bg-light rounded p-4 m-4">
        <h1>
            Name: {{ $pokemon->pokemon }}
        </h1>
        <h2>
            No: {{ $pokemon->id }}

        </h2>
        <div class="poke-image text-center">
            <img src="{{ $pokemon->png }}" alt="{{ $pokemon->pokemon }}" class="rounded-top">
        </div>
        <div class="row">
            <div class="col">
                <div class="poke-stats d-flex align-items-start">
                    <div class="poke-stat pe-3">
                        <strong>Attack:</strong> {{ $pokemon->attack }}
                    </div>
                    <div class="poke-stat pe-3">
                        <strong>Defense:</strong> {{ $pokemon->defense }}
                    </div>
                    <div class="poke-stat pe-3">
                        <strong>Speed:</strong> {{ $pokemon->speed }}
                    </div>
                    <div class="poke-stat pe-3">
                        <strong>Special:</strong> {{ $pokemon->special }}
                    </div>
                </div>
            </div>
        </div>

        <div class="poke-description mt-3">
            <strong>Description:</strong> {{ $pokemon->description }}
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <a class="nav-link" href="{{ route('pokedex') }}">
            <div class="mx-auto">
                <button class="btn btn-primary" data-toggle="modal" data-target="#pokeModal">Back</button>
            </div>
        </a>
    </div>
@endsection
