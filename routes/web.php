<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $nome = "Matheus";
    $idade = "29";
    $profissao = "desenvolvedor";

    return view('welcome', ['nome' => $nome, 'idade' => $idade, 'profissão' => $profissao]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contact', function () {
    return view('contact');
});