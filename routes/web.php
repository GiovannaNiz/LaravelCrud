<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Models\Pessoa;

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

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/listar', [PessoaController::class, 'listarpessoas']);


Route::get('/editar/{id}',function($id){

    $pessoa = Pessoa::find($id);
    return view('editar', ['pessoa' => $pessoa]);
});

Route::get('/excluir/{id}',function($id){
    //dd($request->all());

    $pessoa = Pessoa::find($id);
    $pessoa->delete();

    echo '<alert>Cadastro excluido com sucesso!</alert> &nbsp;&nbsp;';
    echo '<a href="/listar"><button>Voltar</button></a>';
});

/* Post Method */

Route::post('/inserir-pessoas', [PessoaController::class, 'store']);

Route::post('/editar-pessoa/{id}',[PessoaController::class, 'update']);

