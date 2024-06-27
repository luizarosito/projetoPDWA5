<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trilhas;

class XmlController extends Controller
{
    //pegar todos os dados e gerar um XML 
    public function gerarXML(){
        //buscar registros no BD
        $dados = Trilhas::all();
        //print_r($dados);

        return response()->view('data-xml', ['registros' => $dados])->header('Content-Type', 'application/xml');

    }
}
