@extends('layouts.body')
@section('title', 'Modifier')
@section('section')
    <h1 class="display-1">Modification du produit</h1>
    <div class="container">
{{--        {!! Form::open() !!}
            {{{ Form::hidden('id', $product->id) }}}
            {{{ Form::label('nameLabel', 'Nom : ') }}} <br>
            {{{ Form::text('nameField', $product->name) }}}
        <br>
            {{{ Form::label('qtyLabelExists', 'Quantité présente : ') }}} <br>
            {{{ Form::number('qtyFieldExists', $product->quantity) }}}
        <br>
            {{{ Form::label('qtyLabelAdd', 'Quantité à ajouter : ') }}} <br>
            {{{ Form::number('qtyFieldAdd') }}} {{{ Form::hidden('qtyTotal') }}}
        <br>
            {{{ Form::hidden('qtyTotal') }}}
        <br>
            {{{ Form::label('brandLabel', 'Marque : ') }}} <br>
            {{{ Form::select('brandList' , $product->brand) }}}
        <br>
            {{{ Form::label('genreLabel', 'Genres : ') }}} <br>
            {{{ Form::select('genderList', ['multiple' => true]) }}}
        {!! Form::close() !!}--}}



        {!! Form::open(['url' => '/update/launch', 'class' => 'perso-form', 'name' => 'formUpdate']) !!}
            {{--Récupération de l'id en le cachant--}}
            {{{ Form::hidden('id', $product->id) }}}
            {{{ Form::label('nameLabel', 'Nom : ') }}} <br>
            {{{ Form::text('nameField', $product->name) }}}
        <br>
            {{--Affiche la valeur actuelle du stock dans la base de données et une vide--}}
            {{{ Form::label('qtyLabelExists', 'Quantité présente : ') }}} <br>
            {{{ Form::number('qtyFieldExists', $product->quantity) }}}
        <br>
            {{{ Form::label('qtyLabelAdd', 'Quantité à ajouter : ') }}}<br>
            {{{ Form::number('qtyFieldAdd') }}}
            {{{ Form::number('qtyTotal') }}}
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
            {{{ Form::submit('Modifier ce produit', ['class' => 'btn btn-outline-warning']) }}}
        {!! Form::close() !!}
    </div>
@endsection