<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Processo;
use App\Empresa;
use Illuminate\Support\Facades\Auth;
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
        $empresas = Empresa::all()->where('processo_id', $id); // busca todas as empresas do mesmo processo
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

        $verificaExistencia = Empresa::all()->where('cnpj',$request->cnpj)->count();
        if($verificaExistencia>0){
            return back()->with(["mensage" => 'Já existe uma empresa cadastrada com esse CNPJ']);
        }
        Empresa::create([
            "user_id" => Auth::user()->id,
            "processo_id" => $request->processo,
            "nome" => $request->nome,
            "valor" => $request->valor,
            "cnpj" => $request->cnpj,
            "descricao" => $request->descricao
        ]);
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
        $empresas = Empresa::all()->where('processo_id',$empresaAtual->processo_id);
        return view('empresa.editarEmpresa', compact('empresas', 'empresaAtual'));
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
        Empresa::find($id)->delete();
        return back()->with(['mensage' => "Empresa Exclúida"]);
    }
}
