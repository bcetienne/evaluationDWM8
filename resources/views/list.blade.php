@extends('layouts.body')
@section('title', 'Liste')
@section('section')
    <h1 class="display-1">Liste des produits en stock</h1>
    <p class="lead paraList">Toutes les marques présentes ci-dessous sont déformées pour éviter tout soucis, les noms des produits ont été inventées, toute ressemblance avec la réalité serait fortuite.
        <br>
        <span class="badge badge-info">Info</span> L'ajout de marques, de styles de musiques, de niveaux sera dans une prochaine mise à jour. Promis <i class="em em-smiley"></i>
        @foreach($products as $product)
            @if($product->quantity < 0)
                <br>
                Note : Les valeurs entre parenthèses à côté de certaines valeurs à 0 signifient que la valeur est négative dans la base de données.</p>
            @endif
        @endforeach
    <div class="tablePerso">
        <table class="table table-striped">
            <thead class="thead-perso">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Quantité</th>
                <th scope="col">Marque</th>
                <th scope="col">Style de musique</th>
                <th scope="col">Niveau</th>
                <th scope="col" class="text-center">Modifier</th>
                <th scope="col" class="text-center">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td class="lead">{{ ucfirst($product->name) }}</td>
                    @if($product->quantity < 0)
                        <td class="lead">0 ({{ $product->quantity }})</td>
                    @else
                        <td class="lead">{{ $product->quantity }}</td>
                    @endif
                    <td class="lead">{{ ucfirst($product->brand->brand) }}</td>
                    <td class="lead">
                        @foreach($product->genres as $genre)
                            <span>{{ ucfirst($genre->genre) }}</span>
                        @endforeach
                    </td>
                    <td class="lead">{{ ucfirst($product->level->level) }}</td>
                    {{--Bouton d'édition--}}
                    <td>
                        <form action="/update/{{ $product->id }}" class="text-center">
                            {{--Protège le champ d'une possible attaque--}}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>
                    {{--Bouton de suppression--}}
                    <td>
                        <form action="/delete/{{ $product->id }}" class="text-center">
                            {{--Protège le champ d'une possible attaque--}}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-warning">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection