<?php
//Aula 5 Rotas
Route::group(['prefix'=>'loja','middleware' => 'auth'],function(){

  Route::get('/users', function(){
    return "Controle de Usuários";
  });
  Route::get('/financeiro', function(){
    return "Controle Financeiro";
  });
  Route::get('/', function(){
    return "Dashboard";
  });

});

Route::get('/login', function(){
  return "#Login Form";
});

Route::get('/categoria2/{idCat?}', function($idCat=1){
  return "Post da Categoria {$idCat}";
});

Route::get('/categoria/{idCat}', function($idCat){
  return "Post da Categoria {$idCat}";
});

Route::get('/contato',function(){
  return view('contato');
});

Route::get('/empresa', function(){
  return view('empresa');
});

Route::get('/', function () {
    return view('welcome');
});
