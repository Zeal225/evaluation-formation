<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('index');
});

Route::get('/signup', function () {
    return view('signup');
});


Route::get('/utilisateurs', function () {
    return view('utilisateurs');
});
Route::get('/utilisateurs/add', function () {
    return view('utilisateur_ajouter');
});
Route::get('/formateur', function () {
    return view('formateur');
});
Route::get('/objectif', function () {
    return view('objectif');
});
Route::get('/objectif/add', function () {
    return view('objectif_ajouter');
});
Route::get('/formation', function () {
    return view('formation');
});
Route::get('/formation/add', function () {
    return view('formation_ajouter');
});

