<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PainelController extends Controller
{
    public function usuarios(){
      return '<h1>USUÁRIOS</h1>';
    }

    public function funcionarios(){
      return "Funcionarios";
    }
}
