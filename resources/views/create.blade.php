@extends('layouts.body')
@section('title', 'Ajout')
@section('section')
    <h1 class="display-1">Ajout d'un produit au stock</h1>
    <div class="container">
        {!! Form::open(['url' => '/create/{id}', 'class' => 'perso-form']) !!}
            {{{ Form::label('nameLabel', 'Nom : ') }}} <br>
            {{{ Form::text('nameField') }}}
        <br>
            {{{ Form::label('qtyLabel', 'Quantité : ') }}} <br>
            {{{ Form::number('qtyField') }}}
        <br>
            {{{ Form::label('brandLabel', 'Marque : ') }}} <br>
            {{{ Form::select('brandList', $brands, null, ['placeholder' => 'Sélectionnez une marque']) }}}
        <br>
            {{{ Form::label('genreLabel', 'Genres : ') }}} <br>
            {{{ Form::select('genderList', $genres, null, ['placeholder' => 'Sélectionnez un genre', 'multiple' => true]) }}}
        <br>
            {{{ Form::label('levelLabel', 'Niveau : ') }}} <br>
            {{{ Form::select('levelList', $levels, null, ['placeholder' => 'Sélectionnez un niveau']) }}}
        <br>
            {{{ Form::submit('Ajouter ce produit', ['class' => 'btn btn-outline-warning']) }}}
        {!! Form::close() !!}
    </div>
@endsection