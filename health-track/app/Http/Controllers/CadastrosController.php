<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\Cadastros;
use Illuminate\Http\Request;

class CadastrosController extends Controller
{
    public function create(Request $request) {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $telefone = $request->input('telefone');
        $mensagem = $request->input('mensagem');
        $peso = $request->input('peso');
        $altura = $request->input('altura');

        $cadastro = new Cadastros;
        $cadastro->nome = $nome;
        $cadastro->email = $email;
        $cadastro->telefone = $telefone;
        $cadastro->mensagem = $mensagem;
        $cadastro->peso = $peso;
        $cadastro->altura = $altura;
        $cadastro->save();

        return Redirect::to('/');
    }

    public function show(){
        $cadastros = Cadastros::get();
        foreach ($cadastros as $cadastro) {
            $cadastro->imc = $cadastro->calcularIMC();
        }
        return view('index', compact("cadastros"));
    }

    public function update(Request $request, $id){
        $cadastro = Cadastros::find($id);
        $cadastro->nome = $request->input('nome');
        $cadastro->email = $request->input('email');
        $cadastro->telefone = $request->input('telefone');
        $cadastro->mensagem = $request->input('mensagem');
        $cadastro->peso = $request->input('peso');
        $cadastro->altura = $request->input('altura');
        $cadastro->save();
        return Redirect::to('/');
    }

    public function destroy($id){
        Cadastros::findOrFail($id)->delete();
        return Redirect::to('/');
    }

    public function get(Request $request, $id){
        $cadastro = Cadastros::find($id);
        return response()->json($cadastro);
    }
}