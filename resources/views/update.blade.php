@extends('layouts.body')
@section('title', 'Modifier')
@section('section')
    <h1 class="display-1">{{ $product->name }}</h1>
    <h4 class="display-4">D'ici vous pouvez modifier les informations du produit</h4>
    <div class="container containerForm">
        {!! Form::open(['url' => '/update/launch', 'class' => 'perso-form', 'name' => 'formUpdate']) !!}
            {{--Récupération de l'id en le cachant--}}
            {{{ Form::hidden('id', $product->id) }}}
            {{{ Form::label('nameLabel', 'Nom : ', ['class' => 'lead col-form-label labelForm']) }}} <br>
            {{{ Form::text('nameField', $product->name, ['class' => 'lead form-control']) }}}
        <br>
            {{--Affiche la valeur actuelle du stock dans la base de données et une vide--}}
            {{{ Form::label('qtyLabelExists', 'Quantité présente (non modifiable): ', ['class' => 'lead col-form-label labelForm']) }}} <br>
            {{{ Form::number('qtyFieldExists', $product->quantity, ['id' => 'qtyFieldExists', 'readonly', 'class' => 'lead form-control']) }}}
        <br>
            {{{ Form::label('qtyLabelAdd', 'Quantité à ajouter (valeur négative autorisée pour suppression): ', ['class' => 'lead col-form-label labelForm']) }}}<br>
            {{{ Form::number('qtyFieldAdd', 0, ['id' => 'qtyFieldAdd', 'class' => 'lead form-control']) }}}
            {{{ Form::hidden('qtyTotal', 0, ['id' => 'qtyTotal']) }}}
        <br>
            {{{ Form::label('brandLabel', 'Marque : ', ['class' => 'lead col-form-label labelForm']) }}} <br>
            {{{ Form::select('brandList', $brands, $product->brand->brand, ['class' => 'lead form-control']) }}}
        <br>
            {{{ Form::label('genreLabel', 'Genres : ', ['class' => 'lead col-form-label labelForm']) }}} <br>
            {{{ Form::select('genderList[]', $genres, $product->genres, ['multiple' => true, 'class' => 'lead form-control']) }}}
        <br>
            {{{ Form::label('levelLabel', 'Niveau : ', ['class' => 'lead col-form-label labelForm']) }}} <br>
            {{--Je ne sais pas pourquoi, sans le placeholder, il ne se place pas automatiquement sur le niveau, il prend le premier de base (débutant)--}}
            {{{ Form::select('levelList', $levels, $product->level, ['class' => 'lead form-control']) }}}
        <br>
            {{{ Form::submit('Modifier ce produit', ['class' => 'btn btn-outline-warning', 'onclick' => 'return calcStock()']) }}}
        {!! Form::close() !!}
    </div>
@endsection