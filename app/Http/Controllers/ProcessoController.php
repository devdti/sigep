<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Item as AppItem;
use App\Processo;
use App\Relatorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Item;
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
        //$justificativaK = $request->file('justificativa_k')->store('anexos', 'public');
        //$justificativaL = $request->file('justificativa_l')->store('anexos', 'public');
        $imagem = new Processo();
        $imagem->user_id = Auth::user()->id;
        $imagem->nome = $request->nome;
        $imagem->secretaria = $request->id_secretaria;
        $imagem->cotacao = $request->cotacao;
        $imagem->descricao = $request->descricao;
        //$imagem->justificativa_k = $justificativaK;
        //$imagem->justificativa_l = $justificativaL;

        $verificaExistencia = Processo::all()->where('nome', $request->nome);
        if ($verificaExistencia->count() > 0) {
            return back()->with(['mensage' => 'Processo Cadastrado Com Sucesso ']);
        } else {

            $imagem->save();
            return redirect()->route('cadastroItem', $imagem->id)->with(['mensage' => 'Processo Cadastrado com sucesso']);
        }
    }

    public function finalizarProcesso(Request $request)
    {
        $verificaQuantidadeEmpresas = Relatorio::all()->where('id_processo', $request->idProcesso)->count();
        if ($verificaQuantidadeEmpresas >= 3) {
            $justificativa = $request->file('justificativa')->store('anexos', 'public');
            $finalizarProcesso = Processo::find($request->idProcesso);
            $finalizarProcesso->painel_de_precos = $request->painel_de_precos ;
            $finalizarProcesso->banco_de_precos = $request->banco_de_precos ;
            $finalizarProcesso->contratacoes_similares = $request->contratacoes_similares ;
            $finalizarProcesso->pesquisa_publicada = $request->pesquisa_publicada;
            $finalizarProcesso->pesquisa_fornecedores = $request->pesquisa_fornecedores ;
            $finalizarProcesso->justificativa = $justificativa;
            $finalizarProcesso->status = "Encerrado";
            $finalizarProcesso->save();
            return redirect()->route('index')->with(['mensage' => "Processo Encerrado"]);
        } else {
            return redirect()->route('gerarRelatorio', $request->idProcesso)->with(['alerta' => "Você não pode finalizar o processo com menos de 3 empresas cadastradas no sistema"]);
        }
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
        $processos = Processo::all()->where("status",'Aberto');
        return view('processo.listaProcesso', compact('processos'));
    }
    public function showEncerrados()
    {
        //
        $processos = Processo::all()->where("status",'Encerrado');
        return view('processo.listarProcessosEncerrados', compact('processos'));
    }
    

    public function statusGeralProcesso($id)
    {
        $processo = Processo::find($id);
        $quantidadeItensProcesso = Item::all()->where('processo_id',$id,)->count();
        $quantidadeEmpresaProcesso = Empresa::all()->where('processo_id',$id)->count();
        return view('processo.statusGeralProcesso', compact('processo','quantidadeItensProcesso','quantidadeEmpresaProcesso'));
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
