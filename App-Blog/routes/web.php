<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PostController;


Route::resource('categories', CategorieController::class)->parameters(['categories'=>'categorie']);
Route::resource('posts', PostController::class);

// Route:: get('/',function ()){
//     return
// }
Route::get('/', function () {
    return 'Bienvenue dans Laravel !';
});

