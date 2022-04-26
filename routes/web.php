<?php

use App\Models\Produto;
use Illuminate\Http\Request;
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

Route::get('/', function(){
    return view('cadastrar');
});

Route::post('/cadastrar-produto', function(Request $request){
    Produto::create([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
    ]);

    echo 'Produto criado com sucesso';
});

Route::get('/listar-produto/{id}',function($id){
    $produto = Produto::find($id);
    return view('Listar', ['produto' => $produto]);
});

Route::get('/editar-produto/{id}',function($id){
    $produto = Produto::find($id);
    return view('editar', ['produto' => $produto]);
});

Route::Post('/editar-produto/{id}',function(Request $request, $id){
    $produto = Produto::find($id);

    $produto->update([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque,
    ]);

    echo "Produto alterado com sucesso";
});

Route::get('/excluir-produto/{id}',function($id){
    $produto = Produto::find($id);
    $produto->delete();
    echo("Produto excluido com sucesso!");
});