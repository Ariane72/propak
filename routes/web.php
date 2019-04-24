<?php

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

Route::get('/', 'AutenticacaoController@home')->name('home');
Route::get('/login', 'AutenticacaoController@login')->name('login');
Route::post('/logar', 'AutenticacaoController@logar')->name('logar');
Route::get('/registrar', 'UsuarioController@registrar')->name('registrar');
Route::post('/salvar', 'UsuarioController@salvar')->name('salvar');
Route::get('/logout', 'AutenticacaoController@logout')->name('logout');
Route::get('/listar', 'UsuarioController@listar',[
    'usuarios' => App\Usuario::all()
   ]);


Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard', 'AutenticacaoController@privada')->name('dashboard');
    Route::get('/usuarios/{uuid}/editar', 'UsuarioController@editar')->name('editar');
    Route::post('/usuarios/{uuid}/atualizar', 'UsuarioController@atualizar')->name('atualizar');
    Route::get('/usuarios/deletar/{uuid}', 'UsuarioController@deletar')->name('deletar');
    route::get('/usuarios/teste/{uuid}', 'UsuarioController@teste')->name('teste');
    


});
   