<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produto;

Route::get('/home', function () {
    return view('welcome');
});

//Route::view('/', 'home');

Route::get('/', function() {

    //dd(Produto::all());

    $listaProdutos = Produto::all();

    return view('home', compact('listaProdutos'));
});

Route::view('/cria-conta', 'cria-conta');

Route::view('/testedeconteudo', 'teste');

Route::post('/salva-usuario',  function(request $request ) {
    //dd($request);

$usuario = new User();
$usuario->name = $request->Nome;
$usuario->email = $request->Email;
$usuario->password = $request->Senha;
$usuario->save();
dd("salvo com sucesso");

})->name('salva-usuario');



//----------------------PRODUTOS-----------------------


Route::view('/cadastra-produto', 'cadastra-produto');

Route::post('/salva-produto',
function (Request $request) {
    //dd($request);

$produto = new Produto();
$produto->name = $request->nome;
$produto->descricao = $request->descricao;
$produto->valor = $request->preco;

$file = $request->file('imagem');
$foto = $file->store('produto', ['disk'=> 'fotos']);
$produto->user_id = 1;
$produto->foto = $foto;
$produto->save();
dd("Salvo com sucesso!!");
})->name('salva-produto');