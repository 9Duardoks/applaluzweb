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

Route::get('/Seguridad/Login', 'AdministradorController@login')->name('Login');
Route::get('/Principal/Index','AdministradorController@index')->name('Index');
Route::get('/Negocio/Reclamo','ReclamoController@index')->name('Reclamo');

Route::get('/Negocio/FarmaciaPedido','FarmaciaPedidoController@index')->name('FarmaciaPedido');
Route::get('/Negocio/Comentario','ComentarioController@index')->name('Comentario');
Route::get('pedidos','pedidosController@pedidosList')->name('pedidos');





/*Route::group(['prefix'=>'Negocios','namespace' => 'Negocios','middleware' => 'auth'] , function () {
Route::get('', 'negocios\adminController@adminList');
Route::get('pedidos','pedidosController@pedidosList')->name('pedidos');
Route::get('inicio', 'adminController@adminList')->name('admin');
Route::get('/comentario', function () {
    return view('/comentario');
});



});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
