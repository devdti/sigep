<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Processo;
use App\Empresa;
use App\Processo_empresa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Process\Process;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $idProcesso = Processo::find($id);
        $empresas = DB::table('processo_empresa')
            ->join('empresa', 'empresa.id', '=', 'processo_empresa.empresa_id')
            ->select('processo_empresa.*', 'empresa.id', 'empresa.nome', 'empresa.cnpj', 'empresa.descricao')
            ->where('processo_empresa.processo_id', $id)->get();
        // busca todas as empresas do mesmo processo
        return view("empresa.cadastroEmpresa", compact('idProcesso', 'empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //
        //passo a passo
        //Caso o usuario tente cadastrar o mesmo item 2
        //verifica se ja existe uma empresa cadastrada com cnpj inserido.
        if (isset($request->empresaCadastradaCnpj)) {
            $empresaConsulta = Empresa::where('cnpj', $request->empresaCadastradaCnpj)->first(); //retorna  numero de registros encontrados

            if ($empresaConsulta != null) { //caso seja diferente de zero 
                //continua para guardar os seus falores pegando o primeiro registro encontrado
                $empresaConsulta = Empresa::where('cnpj', $request->empresaCadastradaCnpj)->first();
                return back()->with(['empresaConsulta' => $empresaConsulta]); //retorna uma sessão com a empresa encontrada
            } else {
                //caso contrario retorna uma sessão informando que não foi encontrada nenhuma empresa
                return back()->with(["mensage" => 'Não existe Empresa cadastrada com esse CNPJ']);
            }
        } else {
            //input de verificção da empresa existenrte para diferenciar: 
            // caso a empresa já exista ele só cadsatra na tabela processoEmpresa
            if ($request->empresaExistente == true) {
                $empresaConsulta = Processo_empresa::where([
                    'empresa_id'=>$request->empresaId,
                    'processo_id'=> $request->processo
                ])->first(); //retorna  numero de registros encontrados 
                
                if ($empresaConsulta != null) {
                    return back()->with(["mensage" => 'Você já cadastrou está empresa']);
                } else {
                    Processo_empresa::create([
                        'empresa_id' => $request->empresaId,
                        'processo_id' => $request->processo,
                        'parametro_pesquisa' => $request->parametro_pesquisa,
                        'descricao_justificativa' => $request->descricao_justificativa
                    ]);
                }
            } else {
                //caso contrario cadastra em ambas as tabelas.

                $empresaConsulta = Empresa::where('cnpj', $request->cnpj)->first(); //retorna  numero de registros encontrados 
                if ($empresaConsulta != null) {
                    return back()->with(["mensage" => 'Você já cadastrou está empresa']);
                } else {
                    $empresa = Empresa::create([
                        "user_id" => Auth::user()->id,
                        "nome" => $request->nome,
                        "cnpj" => $request->cnpj,
                        "descricao" => $request->descricao
                    ]);
                    Processo_empresa::create([
                        'empresa_id' => $empresa->id,
                        'processo_id' => $request->processo,
                        'parametro_pesquisa' => $request->parametro_pesquisa,
                        'descricao_justificativa' => $request->descricao_justificativa
                    ]);
                }
            }
        }
        //por fim retorna o status positivo de empresa cadastrada.

        return back()->with(["status" => 'Empresa Cadastrada']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $empresaAtual = Empresa::find($id);
        $empresas = Processo_empresa::all()->where('processo_id', $empresaAtual->id);
        $processoId = Processo_empresa::select('processo_id')->where('empresa_id',$empresaAtual->id)->first();
        return view('empresa.editarEmpresa', compact('empresas', 'empresaAtual', 'processoId'));
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
        $empresaAtt = Empresa::find($id);
        $empresaAtt->nome = $request->nome;
        $empresaAtt->cnpj = $request->cnpj;
        $empresaAtt->descricao = $request->descricao;
        $empresaAtt->save();
        return back()->with(['mensage' => "Alteração realizada com sucesso"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyEmpresa($id)
    {
        //
        DB::table('processo_empresa')->where('empresa_id', $id)->delete();
        return back()->with(['mensage' => "Empresa Exclúida"]);
    }
}
