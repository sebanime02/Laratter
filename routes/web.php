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

//Aqui(routes/web) se define el contenido de las variables de los blades, asi como tambien la vista que se va a renderizar dependiendo de la URL

//Es mas mantenible usar Controller@metodo

Route::get('/', 'PagesController@home');


Route::get('/acerca', 'PagesController@aboutUs');
