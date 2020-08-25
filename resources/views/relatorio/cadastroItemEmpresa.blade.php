@extends('layouts.menulateral')
<!-- Begin Page Content -->
@section('content')
<!-- Begin Page Content -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{$processo->nome}}</h1><br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Empresa: {{$empresaAtual->nome}} - CNPJ: {{$empresaAtual->cnpj}}</h4>
          </div>
          <div class="card-body">
            @if(Session('mensage'))
            <div class="card shadow mb-4">
              <strong class="alert alert-success">{{Session('mensage')}}</strong>
            </div>
            @endif
            @if(Session('mensageError'))
            <div class="card shadow mb-4">
              <strong class="alert alert-warning">{{Session('mensageError')}}</strong>
            </div>
            @endif

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <form action="{{route('relatorio')}}" method="post">
                  @csrf
                  <input type="hidden" name="idEmpresa" value="{{$empresa->id}}">
                  <input type="hidden" name="idProcesso" value="{{$empresa->processo_id}}">
                  <thead>
                    <tr>
                      <th>N° do item</th>
                      <th>Descrição</th>
                      <th>Preço</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($item as $itens)
                    <tr>
                      <input type="hidden" name="idItem[]" value="{{$itens->id}}">
                      <td><input class="form-control" type="text" name="nome[]" value="{{$itens->numero}}" readonly></td>
                      <td><small><textarea class="form-control" name="descricao[]" readonly>{{$itens->descricao}}</textarea></small>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" class="form-control form-control-user " name="valor[]" id="exampleFirstName" placeholder="Adicionar Preço">
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
              <div class="container">
                <div class="row">
                  <div class="col-4"></div>
                  <div class="col-6"></div>
                  <div class="col-2">
                    <button class="btn btn-success btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                      </span>
                      <span class="text">Salvar</span>
                    </button> </div>


                  <div class="table-responsive mt-4">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      @if(Session('status'))
                      <div class="card shadow mb-4">
                        <strong class="alert alert-success">{{Session('status')}}</strong>
                      </div>
                      @endif
                      <thead>
                        <tr>
                          <th>N° do Item</th>
                          <th>Descrição</th>
                          <th>Valor</th>
                          <th>Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($buscaItemEmpresa as $itensExistentes)
                        <tr>
                          <td>{{$itensExistentes->numero}}</td>
                          <td>{{$itensExistentes->descricao}}</td>
                          <td>{{$itensExistentes->valor}}</td>
                          <td><a class="btn btn-warning" href="{{route('editarValor',$itensExistentes->id)}}">Editar</a>
                            <a class="btn btn-danger" href="{{route('excluirValor',$itensExistentes->id)}}">
                              Excluir
                            </a>
                          </td>
                        </tr>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <div class="col-2">
                      <a href="{{route('empresaItens',$empresa->processo_id)}}" class="btn btn-info btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fa fa-arrow-left"></i>
                        </span>
                        <span class="text">Voltar</span>
                      </a>
                    </div>

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
</div>
</div>
@endsection