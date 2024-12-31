@extends('layouts.master')

@section('header')
    <h1>Create New Product</h1>
@stop

@section('contenu')
    <form action="{{ route('creationProd') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="NomProduit" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="NomProduit" name="NomProduit" required>
        </div>

        <div class="mb-3">
            <label for="Description" class="form-label">Description</label>
            <textarea class="form-control" id="Description" name="Description" required></textarea>
        </div>

        <div class="mb-3">
            <label for="Categorie_id" class="form-label">Category</label>
            <select class="form-control" id="Categorie_id" name="Categorie_id" required>
                <option value="">Select a category</option>
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->NomCategorie }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
@stop

@section('aside')
    <p>Choose a category for the new product from the list.</p>
@stop

