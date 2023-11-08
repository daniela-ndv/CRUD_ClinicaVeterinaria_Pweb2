<?php

use Illuminate\Support\Facades\Route;
//importar o arquivo do controlador
use App\Http\Controllers\TutorController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\MainController;

Route::get('/',
    [MainController::class, 'index'])->name('index');

//rota tutor
//carrega uma listagem do dados do banco
Route::get('/tutor',
    [TutorController::class, 'index'])->name('tutor.index');

 //chama o formulário tutor
Route::get('/tutor/create',
    [TutorController::class, 'create'])->name('tutor.create');

 //realiza a ação de salvar os dados do fomulário
Route::post('/tutor',
    [TutorController::class, 'store'])->name('tutor.store');

//chama o formulário para edição
Route::get('/tutor/edit/{id}', //passar o ID na edição
    [TutorController::class, 'edit'])->name('tutor.edit');

 //realiza a ação de atualizar os dados do formulário
Route::put('/tutor/update/{id}',
    [TutorController::class, 'update'])->name('tutor.update');

//chama o método para excluir o registro
Route::get('/tutor/destroy/{id}',
    [TutorController::class, 'destroy'])->name('tutor.destroy');

//chama o método search para pesquisar e filtar o registro da listagem
Route::post('/tutor/search',
    [TutorController::class, 'search'])->name('tutor.search');



//rota animal
//carrega uma listagem do dados do banco
Route::get('/animal',
    [AnimalController::class, 'index'])->name('animal.index');

 //chama o formulário animal
Route::get('/animal/create',
    [AnimalController::class, 'create'])->name('animal.create');

 //realiza a ação de salvar os dados do fomulário
Route::post('/animal',
    [AnimalController::class, 'store'])->name('animal.store');

//chama o formulário para edição
Route::get('/animal/edit/{id}', //passar o ID na edição
    [AnimalController::class, 'edit'])->name('animal.edit');

 //realiza a ação de atualizar os dados do formulário
Route::put('/animal/update/{id}',
    [AnimalController::class, 'update'])->name('animal.update');

//chama o método para excluir o registro
Route::get('/animal/destroy/{id}',
    [AnimalController::class, 'destroy'])->name('animal.destroy');

//chama o método search para pesquisar e filtar o registro da listagem
Route::post('/animal/search',
    [AnimalController::class, 'search'])->name('animal.search');


//rota consulta
//carrega uma listagem do dados do banco
Route::get('/consulta',
[ConsultaController::class, 'index'])->name('consulta.index');

//chama o formulário consulta
Route::get('/consulta/create',
[ConsultaController::class, 'create'])->name('consulta.create');

//realiza a ação de salvar os dados do fomulário
Route::post('/consulta',
[ConsultaController::class, 'store'])->name('consulta.store');

//chama o formulário para edição
Route::get('/consulta/edit/{id}', //passar o ID na edição
[ConsultaController::class, 'edit'])->name('consulta.edit');

//realiza a ação de atualizar os dados do formulário
Route::put('/consulta/update/{id}',
[ConsultaController::class, 'update'])->name('consulta.update');

//chama o método para excluir o registro
Route::get('/consulta/destroy/{id}',
[ConsultaController::class, 'destroy'])->name('consulta.destroy');

//chama o método search para pesquisar e filtar o registro da listagem
Route::post('/consulta/search',
[ConsultaController::class, 'search'])->name('consulta.search');
