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
        $processos = Processo::all()->where('status', "Aberto");
        return view('index', compact('processos'));
    }
    public function empresaItens($id)
    {
        $item = Item::all(); //busca todos os itens
        $empresas = Empresa::all()->where('processo_id', $id); // busca todas as empresas do mesmo processo
        if ($empresas->count() <= 0) {
            return redirect()->route('cadastrarEmpresa', $id);
        }

        return view('empresa.empresaItens', compact('empresas', 'item'));
    }

    public function show($id)
    {
        $empresa = Empresa::find($id);
        $verificaExistencia =  Relatorio::where('id_empresa',$empresa->id)->first();
        $item = Item::all()->where('processo_id', $empresa->processo_id);
        return view('relatorio.cadastroItemEmpresa', compact('empresa', 'item','verificaExistencia'))->with(['id_processo' => $empresa->idProcesso]);
    }
    public function store(Request $request)
    {
        //contador para anexar as posições do array, e inserir de acordo.
        $contador = 0;
        foreach ($request->valor as $valor) {
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

        return redirect()->route('empresaItens', ['id' => $request->idProcesso])->with(['mensage' => "Itens adicionados a empresa com sucesso.", 'id_processo' => $request->idProcesso]);
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
