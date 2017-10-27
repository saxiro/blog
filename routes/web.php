<?php
//Aula 5 Rotas
Route::resource('/painel/produtos','Painel\ProdutoController');
Route::get('/loja','SiteController@loja');
Route::get('/','SiteController@home');
Route::get('/contato','SiteController@contato');
Route::group(['namespace'=>'Painel'], function(){
  Route::get('/usuarios','PainelController@usuarios');
  Route::get('/funcionarios','PainelController@funcionarios')->middleware('auth');
});
