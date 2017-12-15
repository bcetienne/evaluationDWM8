@extends('layouts.body')
@section('title', 'Ajout')
@section('section')
    <h1 class="display-1">Ajout d'un produit au stock</h1>
    <div class="container containerForm">
        {!! Form::open(['url' => '/create/{id}', 'class' => 'perso-form']) !!}
        <div class="form-group">
            {{{ Form::label('nameLabel', 'Nom : ', ['class' => 'lead text-center labelForm']) }}} <br>
            {{{ Form::text('nameField', null, ['class' => 'lead form-control']) }}}
        </div>
        <br>
        <div class="form-group">
            {{{ Form::label('qtyLabel', 'Quantité : ', ['class' => 'lead labelForm']) }}} <br>
            {{{ Form::number('qtyField', 0, ['class' => 'lead form-control'])}}}
        </div>
        <br>
        <div class="form-group">
            {{{ Form::label('brandLabel', 'Marque : ', ['class' => 'lead labelForm']) }}} <br>
            {{{ Form::select('brandList', $brands, null, ['placeholder' => 'Sélectionnez une marque', 'class' => 'lead form-control']) }}}
        </div>
        <br>
        <div class="form-group">
            {{{ Form::label('genreLabel', 'Genres : ', ['class' => 'lead labelForm']) }}} <br>
            {{{ Form::select('genderList', $genres, null, ['placeholder' => 'Sélectionnez un genre', 'multiple' => true, 'class' => 'lead form-control']) }}}
        </div>
        <br>
        <div class="form-group">
            {{{ Form::label('levelLabel', 'Niveau : ', ['class' => 'lead labelForm']) }}} <br>
            {{{ Form::select('levelList', $levels, null, ['placeholder' => 'Sélectionnez un niveau', 'class' => 'lead form-control']) }}}
        </div>
        <br>
            {{{ Form::submit('Ajouter ce produit', ['class' => 'btn btn-outline-warning']) }}}
        {!! Form::close() !!}
    </div>
@endsection