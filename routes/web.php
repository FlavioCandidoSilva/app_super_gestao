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

Route::get('/','PrincipalController@principal');
Route::get('/sobre-nos','SobreNosController@sobreNos');
Route::get('/contato','ContatoController@contato'); // nome, categoria, assunto, mensagem
Route::get('/login', function(){return 'login';});


Route::prefix('/app')->group(function(){
    Route::get('/clientes',function(){return 'cliente';});
    Route::get('/fornecedores',function(){return 'fornecedores';});
    Route::get('/produtos',function(){return 'produtos';});
});

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