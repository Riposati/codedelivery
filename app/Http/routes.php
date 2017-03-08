<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin' ,'middleware' => 'auth.checkrole', 'as' => 'admin.'], function(){

    /**
     *
     * Rotas das categorias
     */

    Route::get('categorias/index', ['as' => 'categorias.index', 'uses' => 'CategoriesController@index']);
    Route::get('categorias/create', ['as' => 'categorias.create', 'uses' => 'CategoriesController@create']);
    Route::post('categorias/store', ['as' => 'categorias.store', 'uses' => 'CategoriesController@store']);

    Route::get('categorias/edit/{id}',['as' => 'categorias.edit' , 'uses' => 'CategoriesController@edit']);
    Route::get('categorias/delete/{id}', ['as'=> 'categorias.delete' , 'uses' => 'CategoriesController@delete']);
    Route::put('categorias/update', ['as' => 'categorias.update', 'uses' => 'CategoriesController@update']);

    /*
     *
     * Rotas dos produtos
     */

    Route::get('produtos/index', ['as' => 'produtos.index', 'uses' => 'ProductsController@index']);
    Route::get('produtos/create', ['as' => 'produtos.create', 'uses' => 'ProductsController@create']);
    Route::post('produtos/store', ['as' => 'produtos.store', 'uses' => 'ProductsController@store']);

    Route::get('produtos/edit/{id}',['as' => 'produtos.edit' , 'uses' => 'ProductsController@edit']);
    Route::get('produtos/delete/{id}', ['as'=> 'produtos.delete' , 'uses' => 'ProductsController@delete']);
    Route::put('produtos/update', ['as' => 'produtos.update', 'uses' => 'ProductsController@update']);

    /**
     *
     * Rotas dos clientes
     */

    Route::get('clientes/index' , ['as' => 'clientes.index' , 'uses' => 'ClientsController@index']);
    Route::get('clientes/ver/{id}',['as' => 'clientes.ver' , 'uses' => 'ClientsController@ver']);
    Route::get('clientes/create', ['as' => 'clientes.create', 'uses' => 'ClientsController@create']);
    Route::post('clientes/store', ['as' => 'clientes.store', 'uses' => 'ClientsController@store']);
    Route::get('clientes/delete/{id}', ['as'=> 'clientes.delete' , 'uses' => 'ClientsController@delete']);
    Route::get('clientes/edit/{id}',['as' => 'clientes.edit' , 'uses' => 'ClientsController@edit']);
    Route::put('clientes/update/{id}', ['as' => 'clientes.update', 'uses' => 'ClientsController@update']);

    Route::get('clientes/trocasenha/{id}',['as' => 'clientes.trocasenha' , 'uses' => 'ClientsController@editpass']);
    Route::put('clientes/storePass',['as' => 'clientes.storePass' , 'uses' => 'ClientsController@storePass']);

    /**
     * Rotas dos entregadores
     *
     */

    Route::get('entregadores/index' , ['as' => 'entregadores.index' , 'uses' => 'DeliverymenController@index']);
    Route::get('entregadores/create', ['as' => 'entregadores.create', 'uses' => 'DeliverymenController@create']);
    Route::post('entregadores/store', ['as' => 'entregadores.store', 'uses' => 'DeliverymenController@store']);
    Route::get('entregadores/delete/{id}', ['as'=> 'entregadores.delete' , 'uses' => 'DeliverymenController@delete']);
    Route::get('entregadores/edit/{id}',['as' => 'entregadores.edit' , 'uses' => 'DeliverymenController@edit']);
    Route::put('entregadores/update/{id}', ['as' => 'entregadores.update', 'uses' => 'DeliverymenController@update']);

    Route::get('entregadores/trocasenha/{id}',['as' => 'entregadores.trocasenha' , 'uses' => 'DeliverymenController@editpass']);
    Route::put('entregadores/storePass',['as' => 'entregadores.storePass' , 'uses' => 'DeliverymenController@storePass']);

    /*
     * Rotas dos pedidos
     *
     */

    Route::get('pedidos/index' , ['as' => 'pedidos.index' , 'uses' => 'OrdersController@index']);
    Route::get('pedidos/edit/{id}',['as' => 'pedidos.edit' , 'uses' => 'OrdersController@edit']);
    Route::get('pedidos/ver/{id}',['as' => 'pedidos.ver' , 'uses' => 'OrdersController@ver']);
    Route::post('pedidos/update/{id}', ['as' => 'pedidos.update', 'uses' => 'OrdersController@update']);
});

