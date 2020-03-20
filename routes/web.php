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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos','ProdutoController@lista');

Route::get('/test-conn', function () {
    // Insere um novo usuário ao banco de dados:
    $user = \App\User::create([
        'name'         => 'lazaros',
        'email'     => 'ldxss158@gmail.com.br',
        'password'     => bcrypt('Ldss1209!'),
    ]);
    // Se quiser exibir os dados do usuário: dd($user);
 
    // Listando os usuários
    $users = \App\User::get();
 
    echo '<hr>';
    foreach ($users as $user) {
        echo "{$user->name} <br>";
    }
    echo '<hr>';
});
Route::get('produtos/mostra/{id}','ProdutoController@mostra')->where('id','[0-9]+');

Route::get('/produtos/novo','ProdutoController@novo');

Route::post('/produtos/adiciona','ProdutoController@adiciona');

Route::get('/produtos/json','ProdutoController@listaJson');
Route::get('/produtos/remove/{id}','ProdutoController@remove');
Route::get('/produtos/altera/{id}','ProdutoController@altera');
Route::post('/produtos/alterado/{id}','ProdutoController@alterado');