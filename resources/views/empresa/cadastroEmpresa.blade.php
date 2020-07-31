@extends('layouts.menulateral')
@extends('layouts.mascaraCnpj')
<!-- Begin Page Content -->
@section('content')
<!-- Begin Page Content -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{$idProcesso->nome}}</h1><br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Empresas</h6>
          </div>
          <div class="card-body">
            <form action="../salvar" method="post" enctype="multipart/form-data">
              <!--Grid column-->
              <input class="form-control" type="hidden" value="{{$idProcesso->id}}" name="processo">
              @csrf
              <th colspan="3">
                <div class="row">
                  <div class="col-md-3">
                    <label>Nome da Empresa :</label>
                    <input required type="text" class="form-control form-control-user" name="nome" placeholder="Insira o nome da Empresa">
                  </div>
                  <div class="col-md-3">
                    <label for="cpj">CNPJ :</label>
                    <input onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()' minlength="14" maxlength="18" required type="text" class="form-control form-control-user" name="cnpj" id="exampleFirstName" placeholder="Insira o CNPJ da Empresa">
                  </div>
                  <div class="col-md-6">
                    <label for="">Descrição :</label>
                    <textarea type="text" id="message" name="descricao" rows="2" class="form-control md-textarea" placeholder="Descreva a a descrição"></textarea>
                  </div>
                  <div class="col-md-12 mt-4">
                    <div class="col-md-2 mb-3">
                      <button href="#" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Adicionar</span>
                      </button>
                    </div>
                  </div>
                </div>
                <form>
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      @if(Session('status'))
                      <div class="card shadow mb-4">
                        <strong class="alert alert-success">{{Session('status')}}</strong>
                      </div>
                      @endif
                      @if(Session('mensage'))
                      <div class="card shadow mb-4">
                        <strong class="alert alert-danger">{{Session('mensage')}}</strong>
                      </div>
                      @endif
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>CNPJ</th>
                          <th>Descrição</th>
                          <th>Ações</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach($empresas as $empresa)
                        <tr>
                          <td>{{$empresa->nome}}</td>
                          <td>{{$empresa->cnpj}}</td>
                          <td>{{$empresa->descricao}}</td>
                          <td><a class="btn btn-warning" href="{{route('editarEmpresa',$empresa->id)}}">Editar</a>
                            <a class="btn btn-danger" href="{{route('destroyEmpresa',$empresa->id)}}">
                              Excluir
                            </a>
                          </td>
                        </tr>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <div class="container">
                      <div class="row">
                        <div class="col-2">
                          <a href="{{route('empresaItens',$idProcesso)}}" class="btn btn-info btn-icon-split">
                            <span class="icon text-white-50">
                              <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">Voltar</span>
                          </a>
                        </div>

                        <div class="col-2">

                          <a href="{{route('empresaItens',$idProcesso->id)}}" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                              <i class="fa fa-arrow-right"></i>
                            </span>
                            <span class="text">Próximo</span>
                          </a> </div>
                        <div class="col-md-6"> </div>
                        <div class="col-2">
                          <a href="/" class="btn btn-danger btn-icon-split">

                            <span class="icon text-white-50">
                              <i class="fas fa-times"></i>
                            </span>
                            <span class="text">Sair</span>
                          </a>
                        </div>

                      </div>

                    </div>
                  </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</div>
</div>
<!-- End of Main Content -->
@endsection