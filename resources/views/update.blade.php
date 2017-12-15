@extends('layouts.body')
@section('title', 'Modifier')
@section('section')
    <h1 class="display-1">{{ $product->name }}</h1>
    <h3 class="display-3">D'ici vous pouvez modifier les informations du produit</h3>
    <div class="container">
        {!! Form::open(['url' => '/update/launch', 'class' => 'perso-form', 'name' => 'formUpdate']) !!}
            {{--Récupération de l'id en le cachant--}}
            {{{ Form::hidden('id', $product->id) }}}
            {{{ Form::label('nameLabel', 'Nom : ') }}} <br>
            {{{ Form::text('nameField', $product->name) }}}
        <br>
            {{--Affiche la valeur actuelle du stock dans la base de données et une vide--}}
            {{{ Form::label('qtyLabelExists', 'Quantité présente : ') }}} <br>
            {{{ Form::number('qtyFieldExists', $product->quantity, ['id' => 'qtyFieldExists']) }}}
        <br>
            {{{ Form::label('qtyLabelAdd', 'Quantité à ajouter : ') }}}<br>
            {{{ Form::number('qtyFieldAdd', 0, ['id' => 'qtyFieldAdd']) }}}
            {{{ Form::hidden('qtyTotal', 0, ['id' => 'qtyTotal']) }}}
            {{--TODO: Récupérer la valeur des deux inputs, les additionner dans le total--}}
        <br>
            {{{ Form::label('brandLabel', 'Marque : ') }}} <br>
            {{{ Form::select('brandList', $brands, $product->brand->brand) }}}
        <br>
            {{{ Form::label('genreLabel', 'Genres : ') }}} <br>
            {{{ Form::select('genderList[]', $genres, $product->genres, ['multiple' => true]) }}}
        <br>
            {{{ Form::label('levelLabel', 'Niveau : ') }}} <br>
            {{--Je ne sais pas pourquoi, sans le placeholder, il ne se place pas automatiquement sur le niveau, il prend le premier de base (débutant)--}}
            {{{ Form::select('levelList', $levels, $product->level, ['placeholder' => $product->level->level]) }}}
        <br>
            {{{ Form::submit('Modifier ce produit', ['class' => 'btn btn-outline-warning', 'onclick' => 'return calcStock()']) }}}
        {!! Form::close() !!}
    </div>
@endsection