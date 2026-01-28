<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PostController;


Route:: resource('categories', CategorieController::class);
Route:: resource('posts',PostController::class);
// Route:: get('/',function ()){
//     return
// }
Route::get('/hello', function () {
    return 'Bienvenue dans Laravel !';
});

