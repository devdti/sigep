<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Processo;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $itens = DB::table('item')->where("processo_id", $id)->get();
        
        $processo = Processo::find($id);
        return view('item.cadastroItem', compact('processo', 'itens'));
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
        $item = DB::table('item')->where("processo_id", $request->processo)->get();
        $itensQuantidade = $item->count();
        $verificaExistencia = Item::all()->where([
            'descricao'=>$request->descricao,
            'processo_id'=>$request->processo
            ])->count();
        if($verificaExistencia>0){
            return back()->with(["cadError" => 'O item já está cadastrado no sistema']);
        }
        Item::create([
            "user_id" => Auth::user()->id,
            "processo_id" => $request->processo,
            "descricao" => $request->descricao,
            "numero" => $itensQuantidade+1,
            "unidade" => $request->unidade,
            "quantidade" => $request->quantidade
        ]);
        return back()->with(["status" => 'item cadastrado']);
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
        $itemAtual = Item::find($id);
        $itens = Item::all()->where('processo_id', $itemAtual->processo_id);
        $processo = Processo::find($itemAtual->processo_id);
        return view('item.editarItem', compact('itemAtual', 'processo', 'itens'));
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
        $updateItem = Item::find($id);
        $updateItem->descricao = $request->descricao;
        $updateItem->unidade = $request->unidade;
        $updateItem->quantidade = $request->quantidade;
        $updateItem->save();
        return back()->with(['mensage'=>'Item Atualizado com sucesso.']);
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
        DB::table('item')->where('id', $id)->delete();
        return back();
    }
}
