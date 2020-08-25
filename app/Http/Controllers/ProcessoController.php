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
use App\Processo_empresa;
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
        if (isset($request->referencia_doc)) {
            //caso exista Referencia no cadastro do processo.
            $imagem = new Processo();
            $imagem->users_id = Auth::user()->id;
            $imagem->protocolo = $request->protocolo;
            $imagem->nome = $request->nome;
            $imagem->secretaria_id = $request->id_secretaria;
            $imagem->referencia = $request->referencia;
            $imagem->descricao = $request->descricao;
            $imagem->dataCriacao = $request->dataCriacao;
            $imagem->referencia_doc = $request->file('referencia_doc')->store('anexos_referencia', 'public');
        } else {
            $imagem = new Processo();
            $imagem->users_id = Auth::user()->id;
            $imagem->protocolo = $request->protocolo;
            $imagem->nome = $request->nome;
            $imagem->secretaria_id = $request->id_secretaria;
            $imagem->descricao = $request->descricao;
            $imagem->dataCriacao = $request->dataCriacao;
        }
        $verificaExistencia = Processo::all()->where('nome', $request->nome);
        if ($verificaExistencia->count() > 0) {
            return back()->with(['mensage' => 'Processo já  Cadastrado no sistema ou ocorreram clicks demais no bottão, verifique em lista de processos.']);
        } else {
            $imagem->save();
            return redirect()->route('cadastroItem', $imagem->id)->with(['mensage' => 'Processo Cadastrado com sucesso']);
        }
    }

    public function finalizarProcesso(Request $request)
    {
        //$verificaQuantidadeEmpresas = Processo_empresa::all()->where('processo_id', $request->idProcesso)->count();

        //Finalização do processo sem justificativa
        $finalizarProcesso = Processo::find($request->idProcesso);
        $finalizarProcesso->status = "Encerrado";
        $finalizarProcesso->save();
        return redirect()->route('imprimirRelatorio', $request->idProcesso);
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
        $processos = Processo::all()->where("status", 'Aberto');
        return view('processo.listaProcesso', compact('processos'));
    }
    public function showEncerrados()
    {
        //
        $processos = Processo::all()->where("status", 'Encerrado');
        return view('processo.listarProcessosEncerrados', compact('processos'));
    }
    public function statusGeralProcesso($id)
    {
        $processo = Processo::find($id);
        $quantidadeItensProcesso = Item::all()->where('processo_id', $id,)->count();
        $quantidadeEmpresaProcesso = Empresa::all()->where('processo_id', $id)->count();
        return view('processo.statusGeralProcesso', compact('processo', 'quantidadeItensProcesso', 'quantidadeEmpresaProcesso'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function imprimirRelatorio($id)
    {
        $processo  = Processo::find($id);
        $item = DB::table('item')->where("processo_id", $id)->get();
        $processoEmpresas = Processo_empresa::all()->where('processo_id', $id);
        $itensQuantidade = $item->count();
        //$relatorios = Relatorio::all()->where('processo_id',$id);
        $relatorios = DB::table('relatorio')
            ->join("item", 'item.id', '=', 'relatorio.item_id')
            ->join("processo_empresa", 'relatorio.processo_empresa_id', '=', 'processo_empresa.id')
            ->join("empresa", 'processo_empresa.empresa_id', '=', 'empresa.id')
            ->select('relatorio.*', 'processo_empresa.*', 'item.*', 'empresa.nome', 'empresa.cnpj')
            ->where('relatorio.processo_id', $id)->get();

        return view('relatorio.imprimirRelatorio', compact('id', 'processoEmpresas', 'item', 'relatorios', 'itensQuantidade', 'processo'));
    }



    public function relatorioPesquisa($id)
    {
        $processo  = Processo::find($id);
        $item = DB::table('item')->where("processo_id", $id)->get();
        $processoEmpresas = Processo_empresa::all()->where('processo_id', $id);
        $itensQuantidade = $item->count();
        //$relatorios = Relatorio::all()->where('processo_id',$id);
        $relatorios = DB::table('relatorio')
            ->join("item", 'item.id', '=', 'relatorio.item_id')
            ->join("processo_empresa", 'relatorio.processo_empresa_id', '=', 'processo_empresa.id')
            ->join("empresa", 'processo_empresa.empresa_id', '=', 'empresa.id')
            ->select('relatorio.*', 'processo_empresa.*', 'item.*', 'empresa.*')
            ->where('relatorio.processo_id', $id)->get();
        return view('relatorio.relatorioPesquisa', compact('id', 'processoEmpresas', 'item', 'relatorios', 'itensQuantidade', 'processo'));
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
    public function reabrirProcesso(Request $request)
    {

        $buscaProcesso = Processo::where('protocolo', $request->protocolo)->first();
        if ($buscaProcesso != null) {
            $processo = Processo::find($buscaProcesso->id);
            $processo->status = "Aberto";
            $processo->save();
            return redirect()->route('index')->with(["mensage" => "O processo foi Reaberto"]);
        }
        return redirect()->route('index')->with(["mensageFail" => "O processo não foi encontrado faça uma nova consulta."]);
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
