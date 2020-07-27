@extends('layouts.menulateral')
<!-- Begin Page Content -->
@section('content')
<!-- Begin Page Content -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Empresas e Itens</h1>
        <p class="mb-4">Ao colcoar o preço em cada item, o sistema assume automaticamente que a empresa possui o item e os itens em brancos a empresa não possui</p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Empresa de exemplo</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <form action="../relatorio" method="post">
                  @csrf
                  <input type="hidden" name="idEmpresa" value="{{$empresa->id}}">
                  <input type="hidden" name="idProcesso" value="{{$empresa->processo_id}}">
                  <thead>
                    <tr>
                      <th>Item</th>
                      <th>Numero</th>
                      <th>Preço</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($item as $itens)
                    <tr>
                      <input type="hidden" name="idItem[]" value="{{$itens->id}}">
                      <td><input class="form-control" type="text" name="nome[]" value="{{$itens->descricao}}" readonly></td>
                      <td><small><textarea class="form-control" name="descricao[]" readonly>{{$itens->numero}}</textarea></small></td>
                      <td>
                        @if($verificaExistencia == true )
                        <div class="col-md-6">
                          <input type="text" class="form-control form-control-user " name="valor[]" id="exampleFirstName" readonly value="{{$verificaExistencia->valor}}">
                        </div>
                        @else
                        <div class="col-md-6">
                          <input type="text" class="form-control form-control-user " name="valor[]" id="exampleFirstName" placeholder="Adicionar Preço">
                        </div>
                        @endif
                      </td>

                      @endforeach
                  </tbody>
              </table>
              <div class="container">
                <div class="row">
                  <div class="col-2">
                    <a href="{{route('empresaItens',$empresa->processo_id)}}" class="btn btn-danger btn-icon-split">
                      <span class="icon text-white-50">
                      </span>
                      <span class="text">Voltar</span>
                    </a>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-success btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                      </span>
                      <span class="text">Salvar</span>
                    </button> </div>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->

</div>
@endsection