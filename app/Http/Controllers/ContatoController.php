<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contato;

class ContatoController extends Controller
{
    public function index() {
        $contatos = [
           (object) ["nome"=>"Maria", "telefone"=>"656556"],
           (object)["nome"=>"Pedro", "telefone"=>"565622"]
        ];

        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);
        return view('contato.index', compact('contatos'));
    }
    public function criar(Request $req) {
        
        dd($req->all());
        return "Esse é o Criar do ContatoControle";
    }
    public function editar() {
        return "Esse é o Editar do ContatoControle";
    }

}
