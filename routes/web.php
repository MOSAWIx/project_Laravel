<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;

Route::get('/showprod', [ProduitController::class, 'index'])->name('afficher');
Route::get('/nouveau', [ProduitController::class, 'Nouveau_produit']);
Route::post('/creation', [ProduitController::class, 'Creation_produit'])->name('creationProd');
Route::get('/edition/{id}', [ProduitController::class, 'Edition_produit']);
Route::put('/edit/{id}', [ProduitController::class, 'Edit_produit']);
Route::delete('/delete/{id}', [ProduitController::class, 'Delete_produit']);
Route::get('/categorie/{id}', [CategorieController::class, 'ProduitsCategorie']);


Route::get('/', function () {
    return view('welcome');
});
