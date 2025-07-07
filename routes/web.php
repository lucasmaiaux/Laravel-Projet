<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'homepage')->name('homepage');

Route::view('/projects', 'projects')->name('projects');

Route::get('/recipes', function() {
    $recipes = [
        1 => ['title' => 'Spaghetti Carbonara', 'ingredients' => ['Pasta', 'Eggs', 'Cheese', 'Bacon']],
        2 => ['title' => 'Chicken Curry', 'ingredients' => ['Chicken', 'Coconut Milk', 'Curry Powder']],
        3 => ['title' => 'Vegetable Stir Fry', 'ingredients' => ['Broccoli', 'Carrots', 'Soy Sauce', 'Garlic']]
    ];

    $firstname = 'Marc';
    $lastname = 'Aurèle';

    return view('recipes.index', compact('recipes'));

})->name('recipes.index');

Route::get('/recipes/{id}', function(int $id) {

    $recipes = [
        1 => ['title' => 'Spaghetti Carbonara', 'ingredients' => ['Pasta', 'Eggs', 'Cheese', 'Bacon']],
        2 => ['title' => 'Chicken Curry', 'ingredients' => ['Chicken', 'Coconut Milk', 'Curry Powder']],
        3 => ['title' => 'Vegetable Stir Fry', 'ingredients' => ['Broccoli', 'Carrots', 'Soy Sauce', 'Garlic']]
    ];

    $recipe = Arr::get($recipes, $id, ['title' => 'Recipe not found', 'ingredients' => []]);

    return view('recipes.show', compact('recipe'));

})->name('recipes.show');

Route::get('/product', function() {
    return "Liste des produits";
});

Route::get('/product/{id}', function(int $id) {
    return "Fiche du produit $id";
});

Route::get('/cart', function() {
    return "Panier";
});