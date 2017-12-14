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
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ ucfirst($product->name) }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ ucfirst($product->brand->brand) }}</td>
                    <td>
                        @foreach($product->genres as $genre)
                            {{ ucfirst($genre->genre) }}
                        @endforeach
                    </td>
                    <td>{{ ucfirst($product->level->level) }}</td>
                    <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection