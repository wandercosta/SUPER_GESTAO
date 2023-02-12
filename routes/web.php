<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobrenos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function () {
    return 'Login';
})->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'clientes';
    })->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedor');
    Route::get('/produtos', function () {
        return 'produtos';
    })->name('app.produtos');
});

Route::fallback(function (){
    echo "nao localizamos a rota informada !!<a href='".route('site.index')."'> Clique Aqui para voltar a pagina principal </a>";
});


Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');




//Route::get('/rota1', function () {
//    return 'rota1';
//})->name('site.rota1');
//
//Route::get('/rota2', function () {
//    return redirect()->route('site.rota1');
//})->name('site.rota2');


//Route::redirect('/rota2','/rota1');

//Route::get(
//    '/contato/{nome}/{idcategoria}/{assunto?}/{mensagem?}',
//    function (
//        string $nome,
//        int    $idcategoria = 1,
//        string $assunto = "Sem Assunto",
//        string $mensagem = "Sem Memsagem"
//    ) {
//        echo "Nome: {$nome} <br>";
//        echo "Categoria: {$idcategoria} <br>";
//        echo "Assunto: {$assunto} <br>";
//        echo "Mensagem: {$mensagem}";
//    }
//)->where('idcategoria', '[0-9]+')->where('nome', '[A-Za-z]+');
//Route::get('/sobre-nos', function () {
//    return 'Sobre Nos ';
//});



//Route::get('/','PrincipalController@principal');






