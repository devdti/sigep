<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Item;
use App\Processo;
use App\Relatorio;
use Illuminate\Http\Request;
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
        return view('index');
    }
    public function empresaItens($id)
    {
        $processo = Processo::find($id);
        $item = DB::table('item')->where("processo_id", $id)->get(); //busca todos os itens
        $quantidadeItens = $item->count();
        $empresas = Empresa::all()->where('processo_id', $id); // busca todas as empresas do mesmo processo
        $quantidadeEmpresas = $empresas->count();
        return view('empresa.empresaItens', compact('processo', 'empresas', 'item', 'id', 'quantidadeItens', 'quantidadeEmpresas'));
    }

    public function show($id)
    {
        //busca a empresa atual
        $empresa = Empresa::find($id);
        $processo = Processo::find($empresa->processo_id);
        //verifica se existe algum valor cadastrado no sistema com essa empresa e retorna os seus dados caso encontre
        $verificaExistencia =  DB::table('relatorio')
            ->join('item', 'relatorio.id_item', '=', 'item.id')
            ->select('relatorio.*', 'item.numero', 'item.descricao')
            ->where('relatorio.id_empresa', $id)
            ->get();
        $resultadoBusca = $verificaExistencia->count();

        $item = Item::all()->where('processo_id', $empresa->processo_id);
        return view('relatorio.cadastroItemEmpresa', compact('processo', 'empresa', 'item', 'verificaExistencia', 'resultadoBusca'))->with(['id_processo' => $empresa->idProcesso]);
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
        return redirect()->route('itemEmpresa', $item->id_empresa)->with(['status' => "Valor Atualizado"]);
    }
    //Excluir valores dos itensEmpresas cadastrados
    public function excluirValor($id)
    {
        Relatorio::find($id)->delete();
        return back()->with(['status' => "Dado Excluido"]);
    }
    public function store(Request $request)
    {

        //contador para anexar as posições do array, e inserir de acordo.
        $contador = 0;

        foreach ($request->valor as $valor) {
            $verificaExistencia = Relatorio::all()->where('id_item', $request->idItem[$contador])->count();
            if ($verificaExistencia > 0) {
                return back()->with(['mensageError' => "Item já cadatrado.", 'id_processo' => $request->idProcesso]);
            }
            if ($valor != null) {
                Relatorio::create([
                    'id_processo' => $request->idProcesso,
                    'id_empresa' => $request->idEmpresa,
                    'id_item' => $request->idItem[$contador],
                    'valor' => $valor
                ]);
            }
            $contador += 1;
        }

        return back()->with(['mensage' => "Item adicionado a empresa com sucesso.", 'id_processo' => $request->idProcesso]);
    }

    public function gerarRelatorio($id)
    {
        $processo  = Processo::find($id);
        $item = DB::table('item')->where("processo_id", $id)->get();
        $empresas = Empresa::all();
        $itensQuantidade = $item->count();
        $relatorios = Relatorio::all();

        if ($itensQuantidade <= 0) {
            return redirect()->route('cadastroItem', $processo->id)->with(['mensageRelatorio' => "Quantidade de itens insuficiente"]);
        }
        return view("relatorio.relatorio", compact('id', 'empresas', 'item', 'relatorios', 'itensQuantidade', 'processo'));
    }
}
