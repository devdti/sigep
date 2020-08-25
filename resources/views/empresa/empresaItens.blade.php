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
            <h6 class="m-0 font-weight-bold text-primary">Relação de Empresas
            </h6>
            <h6>Quantidade de empresas cadastradas: <strong>{{$quantidadeEmpresas}}</strong></h6>
            <h6>Quantidade de itens cadastrados: <strong>{{$quantidadeItens}}</strong></h6>
          </div>
          @if(Session('mensage'))
          <div class="card shadow mb-4">
            <strong class="alert alert-success">{{Session('mensage')}}</strong>
          </div>
          @endif
          @if(Session('aviso'))
          <div class="card shadow mb-4">
            <strong class="alert alert-warning">{{Session('aviso')}}</strong>
          </div>
          @endif
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Clique nas empresas para incluir itens e preços.</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($empresas as $empresa)
                  <tr>
                    <td>
                      @if(Auth::user()->nivel !=3)
                      <!--MOSTRA ESSAS INFORMAÇÕES CASO O USUARIO SEJA QUALQUER OUTRO NIVEL DIFERENTE DE COMUM -3 -->
                      <form action="{{route('itemEmpresa')}}" method="post">
                        @csrf
                        <div class="col-md-12">
                          <div class="card border-left-primary shadow h-100 ">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 20px;">

                                    <input type="hidden" name="empresaId" value="{{$empresa->id}}">
                                    <input type="hidden" name="processoId" value="{{$empresa->processo_id}}">
                                    <input type="submit" value="{{$empresa->nome}}">
                                  </div>
                                </div>
                                <div class="col-auto">

                                  <i class="fas fa-building fa-2x text-blue-300"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                      @else
                      <!--MOSTRA ESSAS INFORMAÇÕES CASO O USUARIO SEJA COMUM -->
                      <div class="col-md-12">
                        <div class="card border-left-primary shadow h-100 ">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 20px;">
                                  {{$empresa->nome}}
                                </div>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-building fa-2x text-blue-300"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              @if(Auth::user()->nivel !=3)
              <div class="container">
                <div class="row">
                  <div class="col-2">
                    <a href="{{route('listarProcessos')}}" class="btn btn-info btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fa fa-arrow-left"></i>
                      </span>
                      <span class="text">Voltar</span>
                    </a>
                  </div>
                  <div class="col-md-2">
                    <a href="{{route('cadastrarEmpresa',$id)}}" class="btn btn-primary btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-building "></i>
                      </span>
                      <small class="text">Adicionar Empresa</small>
                    </a>
                  </div>
                  <div class="col-md">
                    <a href="{{route('cadastroItem',$id)}}" class="btn btn-primary btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-dolly"></i>
                      </span>
                      <small class="text">Adicionar Item</small>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="{{route('gerarRelatorio',$id)}}" class="btn btn-success btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                      </span>
                      <span class="text">Gerar Calculo do Processo</span>
                    </a>
                  </div>
                  <div class="col-2">
                    <a href="/" class="btn btn-danger btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fa fa-arrow-left"></i>
                      </span>
                      <span class="text">Sair</span>
                    </a>
                  </div>
                </div>
              </div>
              @endif
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