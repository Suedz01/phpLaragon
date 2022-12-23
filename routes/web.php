<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cadastroMembros', [App\Http\Controllers\HomeController::class, 'cadastroMembros'])->name('cadastroMembros');
Route::get('/vagasDisponiveis', [App\Http\Controllers\HomeController::class, 'vagasDisponiveis'])->name('vagasDisponiveis');
Route::get('/controleDeMembros', [App\Http\Controllers\HomeController::class, 'controleDeMembros'])->name('controleDeMembros');

//Rota -> controller -> view

//Rota do controller dos membros cadastrados na tabela 

//Route::get('/cadastroMembros/create', [MembrosController::class, 'create']);

Route::resource('/membro', 'App\Http\Controllers\MembrosController'); 
//O que exatamente eu tenho que passar como primeiro parâmetro? 
//Obs:Se for passado '/cadastroMembros' ele quebra a página
//Estou passando como parâmetro o Model "Membro"