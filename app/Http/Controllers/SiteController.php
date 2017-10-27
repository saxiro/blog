<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function loja(){
      $loja = '<h1>';
      $loja .='Página da Loja';
      $loja .='</h1>';
      return $loja;
    }

    public function home(){
      $teste1 = "tralalá";
      $nome = "Fabrício Pinto Barbosa";
      return view('site.home', compact('teste1', 'nome'));
    }

    public function contato(){
      $title = "Contato: CCL";
      return view('site.contato', compact('title'));
    }



    public function login(){
      return 'Login:';
    }
}
