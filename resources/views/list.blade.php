@extends('layouts.body')
@section('title', 'Liste')
@section('section')
    <h1 class="display-1">Liste des produits en stock</h1>
    <p class="lead paraList">Toutes les marques présentes ci-dessous sont déformées pour éviter tout soucis, les noms des produits ont été inventées, toute ressemblance avec la réalité serait fortuite.</p>
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
                    <td class="lead">{{ $product->quantity }}</td>
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