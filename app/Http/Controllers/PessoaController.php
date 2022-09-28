<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public function store(Request $request)
    {

        $dados_validados = $request->validate([
            'nome' => 'required | max:255',
            'idade' => 'integer',

        ]);

        $p = new Pessoa;
        $p->nome = $dados_validados['nome'];
        $p->idade = $dados_validados['idade'];
        $p->save();


        return redirect()->back()->with('xyz', 'Cadastro realizado com sucesso!');
    }

    public function listarpessoas()
    {
        $pessoas = Pessoa::All();
        return view('listar', ['pessoas' => $pessoas]);
    }

    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::find($id);

        $pessoa->update([
            'nome' => $request->nome,
            'idade' => $request->idade
        ]);

        $pessoas = Pessoa::All();
        return view('listar', ['pessoas' => $pessoas]);
    }

    public function delete(Request $request, $id)
    {
        $pessoa = Pessoa::find($id);

        $pessoa->update([
            'nome' => $request->nome,
            'idade' => $request->idade
        ]);

        $pessoas = Pessoa::All();
        return view('listar', ['pessoas' => $pessoas]);
    }
}
