<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index() {
        $contatos = [
            (object)["nome"=>"André","telefone"=>"9 9999-9999"],
            (object)["nome"=>"Camila","telefone"=>"9 9999-9998"]
        ];

        $contato = new Contato();
        $con = $contato->lista();

        dd($con->nome);

        return view('contato.index', compact('contatos'));
    }
    
    public function criar(Request $req) {
        return "Nome inputado: " . $req['nome'];
    }

}
