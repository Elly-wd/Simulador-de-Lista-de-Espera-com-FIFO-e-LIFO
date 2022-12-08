<?php

namespace App\Http\Controllers;

use App\Models\Inscritos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InscritoController extends Controller
{
    public function mostraInscritos()
    {
        $inscritos = Inscritos::all();

        if ($inscritos->id >10) {
            return view('totalInscrtos', ['inscritos'=>$inscritos])->with('message', "Candidato não selecionado.");
        }else{
            return view('totalInscrtos', ['inscritos'=>$inscritos])->with('message', "Candidato selecionado.");
        }
    }

    public function store(Request $request)
    {
        
        $validacao = Validator::make($request->all(), [
            'nome' => 'required',
            'email' => 'required',
        ]);

        if ($validacao->fails()) {
            return with('message', "Algo aconteceu. Tente novamente");
        }else{
            $inscrito = new Inscritos();

            $inscrito->nome = $request->nome;
            $inscrito->email = $request->email;
            $inscrito->telefone = $request->telefone;

            $inscrito->save();

            return redirect('/')->with('message', 'Inscrição concluída com sucesso!');
        }
    }

}
