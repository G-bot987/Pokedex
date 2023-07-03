@extends('layouts\layout')
@section('title', 'Home Page')

@section('content')
    <div class="text-center">
        <h1>Red/Blue/Yellow Pokedex!</h1>
        <h2>Which is your favorite?</h2>
    </div>

    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-4">
                <form action="{{ route('pokedex') }}" method="GET">
                    <div class="input-group">
                        <select class="form-select" name="type" aria-label="Select Type">
                            <option value="">All Types</option>
                            <option value="Normal">Normal</option>
                            <option value="Fire">Fire</option>
                            <option value="Water">Water</option>
                            <option value="Electric">Electric</option>
                            <option value="Grass">Grass</option>
                            <option value="Ice">Ice</option>
                            <option value="Fighting">Fighting</option>
                            <option value="Poison">Poison</option>
                            <option value="Ground">Ground</option>
                            <option value="Flying">Flying</option>
                            <option value="Psychic">Psychic</option>
                            <option value="Bug">Bug</option>
                            <option value="Rock">Rock</option>
                            <option value="Ghost">Ghost</option>
                            <option value="Dragon">Dragon</option>
                        </select>
                        <button class="btn btn-primary" type="submit">Filter</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            @foreach ($pokemon as $poke)
                <div class="poke-container rounded bg-light d-flex flex-column mb-3 p-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="poke-details">
                                <div class="poke-image">
                                    <img src="{{ $poke->gif }}" alt="{{ $poke->pokemon }}" class="rounded-top">
                                </div>
                                <h4 class="poke-name">Name: {{ $poke->pokemon }}</h4>
                                <h6 class="poke-id">No: {{ $poke->id }}</h6>

                                <div class="row">
                                    <div class="col">
                                        <div class="poke-stats d-flex align-items-start">
                                            <div class="poke-stat pe-3">
                                                <strong>Attack:</strong> {{ $poke->attack }}
                                            </div>
                                            <div class="poke-stat pe-3">
                                                <strong>Defense:</strong> {{ $poke->defense }}
                                            </div>
                                            <div class="poke-stat pe-3">
                                                <strong>Speed:</strong> {{ $poke->speed }}
                                            </div>
                                            <div class="poke-stat pe-3">
                                                <strong>Special:</strong> {{ $poke->special }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-between">
                            <div class="poke-description">
                                {{ $poke->description }}
                            </div>
                            <div class="mt-3">
                                <a href="pokedex/{{ $poke->id }}">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#pokeModal">View
                                        Details</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach

            <div class="row justify-content-center">
                <div class="col-2">
                    <div>
                        {{ $pokemon->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        @endsection
