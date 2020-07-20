<?php

use App\Empresa;
use App\Http\Controllers\CalcularController;
use App\Item;
use GuzzleHttp\Psr7\Request;
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

Auth::routes();
Route::any('/calcular/{id}', 'HomeController@show')->name('calcular');

Route::get('/user', function () {
    return view('usuario.cadastroUsuario');
});


Route::get('/', 'HomeController@index')->name('index');
Route::get('/empresaItens/{id}', 'HomeController@empresaItens')->name('empresaItens');

//rotas de processo
Route::get('/cadastroProcesso', 'ProcessoController@index')->name('cadastroProcesso');
Route::post('/store', 'ProcessoController@store');

//cadastro Item
Route::post('/storeItem', 'ItemController@store');
Route::get('/cadastroItem/{id}', 'ItemController@create')->name('cadastroItem');
Route::get('destroyItem/{id}','ItemController@destroy')->name("destroyItem");

//Calculo Empresas
Route::get('/cadastrarEmpresa/{id}', 'EmpresaController@index')->name('cadastrarEmpresa');
Route::post('/salvar','EmpresaController@store')->name('salvar')->name('salvar');


//cadastrar Item Empresa
Route::get('/itemEmpresa/{id}','HomeController@show')->name('itemEmpresa');
//gerar Relatorio

Route::post('/relatorio','HomeController@store')->name('relatorio');
Route::get('/gerarRelatorio/{id}','HomeController@gerarRelatorio')->name('gerarRelatorio');
