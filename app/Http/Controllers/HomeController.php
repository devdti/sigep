<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Item;
use App\Processo;
use App\Processo_empresa;
use App\Relatorio;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Boolean;
use SebastianBergmann\Environment\Console;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $quantidadeProcessos = Processo::all()->count();
        $quantidadeEmpresas = Empresa::all()->count();
        $quantidadeItens = Item::all()->count();
        return view('index', compact('quantidadeProcessos', 'quantidadeEmpresas', 'quantidadeItens'));
    }

    public function legislacao()
    {
        return view('legislacao.legislacao');
    }
    public function empresaItens($id)
    {
        $processo = Processo::find($id);
        $item = DB::table('item')->where("processo_id", $id)->get(); //busca todos os itens
        $quantidadeItens = $item->count();
        $empresas = DB::table('processo_empresa')
            ->join('empresa', 'empresa.id', '=', 'processo_empresa.empresa_id')
            ->select('processo_empresa.*', 'empresa.id', 'empresa.nome', 'empresa.cnpj', 'empresa.descricao')
            ->where('processo_empresa.processo_id', $id)->get();
        //$empresas = Processo_empresa::all()->where('processo_id', $id); // busca todas as empresas do mesmo processo
        $quantidadeEmpresas = $empresas->count();
        return view('empresa.empresaItens', compact('processo', 'empresas', 'item', 'id', 'quantidadeItens', 'quantidadeEmpresas'));
    }

    public function show(Request $request)
    {
        //busca a empresa atual
        //$processoId = $request->session()->get('processoId');
        $empresa = Processo_empresa::where([
            'empresa_id' => $request->empresaId,
            'processo_id' =>$request->processoId
        ])->first();
        $empresaAtual = DB::table('processo_empresa')
        ->join('empresa','empresa.id','=','processo_empresa.empresa_id')
        ->select('empresa.nome','empresa.cnpj')
        ->where('processo_empresa.empresa_id',$request->empresaId)->first();
        $processo = Processo::find($empresa->processo_id);
        //verifica se existe algum valor cadastrado no sistema com essa empresa e retorna os seus dados caso encontre
        $buscaItemEmpresa =  DB::table('relatorio')
            ->join('item', 'relatorio.item_id', '=', 'item.id')
            ->select('relatorio.*', 'item.numero', 'item.descricao')
            //verificar o motivo de está trazendo mesmo itens para empresas de processos diferentes.
            ->where([
                'relatorio.processo_empresa_id' => $empresa->id,
                'relatorio.processo_id' => $empresa->processo_id
            ])
            ->get();
        $resultadoBusca = $buscaItemEmpresa->count();

        $item = Item::all()->where('processo_id', $empresa->processo_id);
        return view('relatorio.cadastroItemEmpresa', compact('processo', 'empresa', 'empresaAtual','item', 'buscaItemEmpresa', 'resultadoBusca'))->with(['id_processo' => $empresa->idProcesso]);
    }
    public function editarValor($id)
    {
        $relatorio = Relatorio::find($id);

        return view('processo.editarValoresEmpresa', compact('relatorio'));
    }
    public function updateValor(Request $request)
    {

        $item = Relatorio::find($request->id);
        $item->valor = $request->valor;
        $item->save();
        return back()->with(['status' => "Valor Atualizado"]);
    }
    //Excluir valores dos itensEmpresas cadastrados
    public function excluirValor($id)
    {
        //CONTINUA ERRO SISTEMA>
        $relatorio =  Relatorio::find($id);
        Relatorio::find($id)->delete();

        return redirect()->route('empresaItens', $relatorio->processo_id)->with(['mensage' => "Dado Excluido"]);
    }
    public function store(Request $request)
    {
        //contador para anexar as posições do array, e inserir de acordo.
        $contador = 0;
        foreach ($request->valor as $valor) {
            if ($valor != null) {
                Relatorio::create([
                    'processo_id' => $request->idProcesso,
                    'processo_empresa_id' => $request->idEmpresa,
                    'item_id' => $request->idItem[$contador],
                    'valor' => $valor
                ]);
            }
            $contador += 1;
        }
        return redirect()->route('empresaItens', $request->idProcesso)->with(['mensage' => "Item adicionado a empresa com sucesso.", 'id_processo' => $request->idProcesso]);
    }

    public function gerarRelatorio($id)
    {
        $processo  = Processo::find($id);
        $item = DB::table('item')->where("processo_id", $id)->get();
        //$empresas = Empresa::all();
        //$empresas = Processo_empresa::where('processo_id', )->get();
        //
        $empresas =  DB::table('processo_empresa')
            ->join('empresa', 'empresa.id', '=', 'processo_empresa.empresa_id')
            ->select('processo_empresa.id', 'empresa.id', 'empresa.nome', 'empresa.cnpj', 'empresa.descricao')
            ->where('processo_empresa.processo_id', $id)->get();
        $itensQuantidade = $item->count();
        $relatorios = DB::table('relatorio')
            ->join('processo_empresa', 'processo_empresa.id', '=', 'relatorio.processo_empresa_id')
            ->where('relatorio.processo_id', $id)->get();
        /**
        $relatorios = DB::table('relatorio')
        ->join('processo_empresa','processo_empresa.id','=','relatorio.processo_empresa_id')
        ->select('relatorio.valor')
        ->where('relatorio.processo_id',$id)->get();
         */
        if ($itensQuantidade <= 0) {
            return redirect()->route('cadastroItem', $processo->id)->with(['mensageRelatorio' => "Quantidade de itens insuficiente"]);
        }
        return view("relatorio.relatorio", compact('id', 'empresas', 'item', 'relatorios', 'itensQuantidade', 'processo'));
    }
}
