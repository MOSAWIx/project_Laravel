@extends('layouts.master')

@section('header')
<h1>{{ $categorie->NomCategorie }}</h1>
@stop

@section('contenu')
<ul>
    @foreach ($categorie->produits as $produit)
        <li>{{ $produit->NomProduit }} - {{ $produit->Description }}</li>
    @endforeach
</ul>
@stop

