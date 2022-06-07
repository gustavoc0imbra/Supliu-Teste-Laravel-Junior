<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FaixaController;

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

Route::get('/', [HomeController::class, 'index'])->name('site.index');
Route::get('/home', [HomeController::class, 'show'])->name('site.home');


//Rotas para adicionar álbuns novos
Route::get('/addAlbum', [AlbumController::class, 'cadastro'])->name('site.cadalbum');//mostrar pagina de adicionar albuns
Route::post('/addAlbum', [AlbumController::class, 'adicionar'])->name('site.addalbum'); //adicionar no bd dados

//Rota para adicionar Faixas
Route::get('/addFaixa', [FaixaController::class, 'adicionar'])->name('site.addfaixa');
Route::post('/addFaixa', [FaixaController::class, 'create'])->name('site.createfaixa');


//Rota para editar albuns
Route::get('/editalbum/{album}/edit', [AlbumController::class, 'edit'])->name('site.editalbum');
Route::put('/editalbum/{album?}', [AlbumController::class, 'update'])->name('site.updatealbum');

Route::get('/delete/{album}', [AlbumController::class, 'destroy'])->name('site.destroyalbum');