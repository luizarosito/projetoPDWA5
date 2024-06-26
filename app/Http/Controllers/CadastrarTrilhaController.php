<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trilhas;

class CadastrarTrilhaController extends Controller
{
    //Regra negócio: validar e persistir dados
    public function salvar(Request $request) {
        $request->validate([
             "descrição" => "required|max:100",
             "data_saida" => "required|date",
             "data_retorno" => "required|date",
             "preço" => "required",
             "status" => "required|boolean"
        ],
        [
            "descrição.required" => "O campo `Texto curto` deve ser preenchido",
            "descrição.max" => "O campo `Texto curto` deve ter no máximo 100 caracteres",
            "data_saida.required" => "O campo 'Data de saída' deve ser preenchido",
            "data_saida.date" => "O campo 'Data de saída' deve ser válido",
            "data_retorno.required" => "O campo 'Data de retorno' deve ser preenchido",
            "preço.required" => "O campo 'Preço' deve ser preenchido",
            "data_retorno.date" => "O campo 'Data de retorno' deve ser preenchido",
            "status.required" => "O campo 'status' deve ser preenchido"
        ]);

        $trilhas = new Trilhas();
        $trilhas->fill($request->all());
        $trilhas->save();

        //dd($request);

        return view('cadastrosalvo');
    }
}
