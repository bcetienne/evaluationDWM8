@extends('layouts.body')
@section('title', 'Ajout')
@section('section')
    <h1 class="display-1">Ajout d'un produit au stock</h1>
    <div class="container">
        {!! Form::open(['url' => '/insert', 'class' => 'perso-form']) !!}
            {{{ Form::label('nameLabel', 'Nom : ') }}} <br>
            {{{ Form::text('nameField') }}}
        <br>
            {{{ Form::label('qtyLabel', 'Quantité : ') }}} <br>
            {{{ Form::number('qtyField') }}}
        <br>
            {{{ Form::label('brandLabel', 'Marque : ') }}} <br>
            {{{ Form::select('brandList') }}}
        <br>
            {{{ Form::label('genreLabel', 'Genres : ') }}} <br>
            {{{ Form::select('genderList') }}}
        <br>
            {{{ Form::label('levelLabel', 'Niveau : ') }}} <br>
            {{{ Form::select('levelList') }}}
        <br>
            {{{ Form::submit('Ajouter ce produit', ['class' => 'btn btn-outline-warning']) }}}
        {!! Form::close() !!}
    </div>
@endsection