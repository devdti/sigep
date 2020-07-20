<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Processo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Process\Process;

class ProcessoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retorna para view de cadastro de processos
        $secretarias = DB::table('secretaria')->get();
        return view('processo.cadastroProcesso', compact('secretarias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        if (session('mensage') == null) {
            return view("processo.cadastroItem");
        } else {
            return redirect('home')->with(['mensage' => 'Você precisa Abrir um processo.']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Cadastro do processo

        $justificativaK = $request->file('justificativa_k')->store('anexos', 'public');
        $justificativaL = $request->file('justificativa_l')->store('anexos', 'public');
        $imagem = new Processo();
        $imagem->user_id = Auth::user()->id;
        $imagem->nome = $request->nome;
        $imagem->id_secretaria = $request->id_secretaria;
        $imagem->cotacao = $request->cotacao;
        $imagem->descricao = $request->descricao;
        $imagem->parametro_1 = $request->parametro_1;
        $imagem->parametro_2 = $request->parametro_2;
        $imagem->justificativa_k = $justificativaK;
        $imagem->justificativa_l = $justificativaL;
        $imagem->save();
        return redirect()->route('cadastroItem', $imagem->id)->with(['mensage' => 'Processo Cadastrado com sucesso']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $empresa = Empresa::find();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
