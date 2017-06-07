<?php

namespace Teste\Http\Controllers;

use Teste\Model\Pessoa;
use Request;
use Teste\Http\Requests\PessoaRequest;

class PessoaController extends Controller
{
    public function adiciona(PessoaRequest $request){
        $dados = $request->all();
        $pessoa = new Pessoa($dados);
        $pessoa->save();
        
        return redirect('/cadastrado');
    }
}
