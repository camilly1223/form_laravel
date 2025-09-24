<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function(){return PrincipalController::principal();})->name('principal');
Route::get('/form', function(){return PrincipalController::form();})->name('form');

Route::fallback(function() {
    echo 'Essa rota não existe. <a href="'.route('principal').'">clique aqui</a>';
});