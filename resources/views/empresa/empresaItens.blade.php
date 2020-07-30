@extends('layouts.menulateral')
<!-- Begin Page Content -->
@section('content')

<!-- Begin Page Content -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Relãção de empresas e seus itens</h1>
        <p class="mb-4">Para Relacionar cada item a cada empresas e seus preços selecione a empresa abaixo.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Empresas
            </h6>
            <h6>Quantidade Empresas : <strong>{{$quantidadeEmpresas}}</strong></h6>
            <h6>Quantidade Itens : <strong>{{$quantidadeItens}}</strong></h6>
          </div>
          @if(Session('mensage'))
          <div class="card shadow mb-4">
            <strong class="alert alert-success">{{Session('mensage')}}</strong>
          </div>
          @endif
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Relacionar Empresas, Itens e Preços</th>

                  </tr>
                </thead>

                <tbody>
                  @foreach($empresas as $empresa)
                  <tr>
                    <td>
                      <a href="{{route('itemEmpresa',$empresa->id)}}">
                        <div class="col-md-12">
                          <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 20px;">{{$empresa->nome}}</div>
                                </div>
                                <div class="col-auto">
                                 
                                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="container">
                <div class="row">
                  <div class="col-2">
                    <a href="/" class="btn btn-danger btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fa fa-arrow-left"></i>
                      </span>
                      <span class="text">Sair</span>
                    </a>
                  </div>
                  <div class="col-md-3">
                    <a href="{{route('cadastrarEmpresa',$id)}}" class="btn btn-success btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-flag"></i>
                      </span>
                      <span class="text">Adicionar Empresa</span>
                    </a>
                  </div>
                  <div class="col-md-3">
                    <a href="{{route('cadastroItem',$id)}}" class="btn btn-success btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-flag"></i>
                      </span>
                      <span class="text">Adicionar Item</span>
                    </a>
                  </div>



                  <div class="col-md-4">
                    <a href="{{route('gerarRelatorio',$id)}}" class="btn btn-primary btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                      </span>
                      <span class="text">Gerar Calculo do Processo</span>
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
<!-- End of Main Content -->

@endsection