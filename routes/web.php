<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = 'Pedro';
    $idade = 24;
    return view('welcome', ['nome' => $nome, 'idade' => $idade, 'prof' => 'Dev']);
});
//Primeiro valor é a chave que vamos pegar no blade. EX: 'nome' = chave || $nome = valor

Route::get('/teste', function() {
    return view('teste');
});
