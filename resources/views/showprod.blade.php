@extends('layouts.master')

@section('header')
<div style="background-color: #FFFF99; padding: 10px; text-align: center;">
    <h2>Liste des Produits</h2>
</div>
@stop

@section('contenu')
<div class="container">
    <ul>
        @foreach ($produits as $produit)
            <li>
                <h4>
                    <a href="#"> {{ $produit->NomProduit }}</a>
                </h4>
                <p>{{ $produit->Description }}</p>
                
                <!-- Link to Add New Product -->
                <a href="{{ url('/nouveau') }}" style="background-color: blue; color: white; border: none; padding: 5px 10px; text-decoration: none;">Ajouter</a>
                
                <!-- Link to Edit Product -->
                <a href="{{ url('/edition/' . $produit->id) }}" style="background-color: orange; color: white; border: none; padding: 5px 10px; text-decoration: none;">Editer</a>
                
                <!-- Link to Delete Product -->
                <form action="{{ url('/delete/' . $produit->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background-color: red; color: white; border: none; padding: 5px 10px;">Supprimer</button>
                </form>
            </li>
            <hr>
        @endforeach
    </ul>
</div>
@stop

@section('aside')
<div>
    <h4>Catégories:</h4>
    <ul>
        <li>Shoes</li>
        <li>Téléphone & Tablette</li>
        <li>Électroménager</li>
        <li>Supermarché</li>
        <li>Sports & Loisirs</li>
        <li>Beauté & Santé</li>
    </ul>
</div>
@stop