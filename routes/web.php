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
/*
Route::get('/', function () {
	//return '<h1>Olá Mundo!</h1>';
    //return view('welcome');
});
*/
//Auth::routes();

//Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['web']], function () {
    Route::get('/usuario/novo', 'LoginController@novo');
    Route::post('/usuario/novo', 'LoginController@novoPost');
    Route::get('/usuario/login', 'LoginController@login');    
    Route::post('/usuario/login', 'LoginController@loginPost');
    Route::get('/usuario/logout', 'LoginController@logout');

    //Rota de/para Test xD    
    Route::get('/tt', 'LoginController@tt');



    Route::get('/', 'ProdutoController@lista');
    Route::get('/produtos', 'ProdutoController@lista');
	Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
	Route::get('/produtos/novo', 'ProdutoController@novo');
	Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
	Route::get('/produtos/excluir/{id}', 'ProdutoController@excluir');
});