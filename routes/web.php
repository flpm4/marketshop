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

    //dd("Salvo com sucesso!!");
    
    return redirect('login');

})->name('salva-usuario');



//----------------------PRODUTOS-----------------------


Route::view('/cadastra-produto', 'cadastra-produto')->middleware('auth');

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
})->name('salva-produto')->middleware('auth');

// ----------------------------LOGIN-------------------------------------------

//abre a tela de login

Route::view('/login', 'login')->name("login");

Route::post('/logar', function (Request $request) {
    //testar se está recebendo os dados, depois aágar
    //dd($request);
 

    //verifica se a pessoa preecheu os campos de login
    $credentials = $request->validate([
        'email' => ['required', 'email'], //verifica se tem email e se é email
        'senha' => ['required'], //verifica se tem senha
    ]);
  
    //compara se os dados no banco de dados são iguais o que ele preecheu
    if (Auth::attempt(['email' => $request->email, 'password' => $request->senha])) {
        //cria a sessão do usuário logado
        $request->session()->regenerate();
        var_dump('test');
        //redireciona para a tela de cadastro de produtos
        return redirect()->intended('/cadastra-produto');
    }
    else {dd('usuario ou senha invalidos');}
})->name('logar');
Route::get('/sair', function () {
    Auth::logout();
    return redirect('/');
});