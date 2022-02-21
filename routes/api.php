<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'App\Http\Controllers\Api', 'middleware' => 'auth.basic', 'as' => 'api.'], function () {
    Route::apiResource('/professores', 'ProfessorController');
    Route::apiResource('/alunos', 'AlunoController');
    Route::get('/cursos/disponiveis', 'CursoControllerApi@disponiveis')->name('cursos.disponiveis');
    Route::get('/cursos/indisponiveis', 'CursoControllerApi@indisponiveis')->name('cursos.indisponiveis');
    Route::apiResource('/cursos', 'CursoControllerApi');
    Route::apiResource('/planos-financeiros', 'PlanoFinanceiroController');
    Route::apiResource('/aulas', 'AulaController');
});
