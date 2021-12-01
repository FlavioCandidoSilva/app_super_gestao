<?php

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

/*
Route::get('/', function () {
    return "olá seja bem vindo ao curso";
});

*/

Route::get('/','PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos','SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato','ContatoController@contato')->name('site.contato'); // nome, categoria, assunto, mensagem
Route::get('/login', function(){return 'login';})->name('site.login');


Route::prefix('/app')->group(function(){
    Route::get('/clientes',function(){return 'cliente';})->name('app.clientes');
    Route::get('/fornecedores','FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos',function(){return 'produtos';})->name('site.produtos');
});


Route::get('/teste/{p1}/{p2}','TesteController@teste')->name('site.teste');


Route::fallback(function(){
    echo 'A rota não existe <a href="'.route('site.index').'">Volte para a página principal</a>';
});


// Outros exemplos

/*
Route::redirect('/rota1','/rota2');
*/


/*
Route::get('/contato/{nome}/{categoria_id}', 
function(
    string $nome = 'Desconhecido', 
    int $categoria_id = 1 // 1 - 'informação'
    ){
        echo "estamos aqui: $nome-$categoria_id";
    }
)->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');
*/