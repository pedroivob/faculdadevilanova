<?php


use App\Http\Controllers\{AlunoController, AulaController, ProfessorController, PlanoFinanceiroController,
    HomeController, CursoController};
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Rotas para Alunos
Route::group(['middleware' => 'auth.role:0'], function () {   
    Route::get('/aluno/meusdados', [App\Http\Controllers\AlunoController::class, 'index'])->name('aluno.meusdados');
    Route::get('/aluno/aulas', [App\Http\Controllers\AulaController::class, 'index'])->name('aluno.aulas');
    Route::resource('alunos', AlunoController::class)->except('index');
});

//Rotas para Professores  
Route::group(['middleware' => 'auth.role:1'], function () {    
        Route::resource('professores', ProfessorController::class)->except('index');
        Route::get('/professor/meusdados', [App\Http\Controllers\ProfessorController::class, 'index'])->name('professor.meusdados');
        Route::get('/professor/aulas', [App\Http\Controllers\AulaController::class, 'index'])->name('professor.aulas');
        Route::get('/professor/alunos', [App\Http\Controllers\AlunoController::class, 'index'])->name('professor.alunos');
});
//Rotas para Administradores
   Route::group(['middleware' => 'auth.role:9'], function () {
Route::resource('alunos', AlunoController::class)->except('store', 'update'); 
Route::resource('cursos', CursoController::class);
Route::resource('planos-financeiros', PlanoFinanceiroController::class);
Route::resource('aulas', AulaController::class);
Route::resource('users', UserController::class );
Route::resource('professores', ProfessorController::class)->except('store', 'update');


Route::get('/endpoints/api', [App\Http\Controllers\HomeController::class, 'endpoints'])->name('endpoints');
  
});

   