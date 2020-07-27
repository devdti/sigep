@extends('layouts.menulateral')
<!-- Begin Page Content -->
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Tables</h1>
            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
            <!-- DataTales Example -->
            <p>@if(Session('mensage'))
                {{Session('mensage')}}
                @endif
            </p>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">Processo  - {{$processo->descricao}}</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    </div><br>
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="update-nag">
                                    <div class="update-split"><i class="glyphicon glyphicon-refresh"></i></div>
                                    <div class="update-text"> <strong>Processo : </strong>  <a href="#">{{$processo->secretaria}}</a> </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="update-nag">
                                    <div class="update-split update-info"><i class="glyphicon glyphicon-folder-open"></i></div>
                                    <div class="update-text"> <strong>Status : </strong>  <a href="#">{{$processo->status}}</a></div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="update-nag">
                                    <div class="update-split update-success"><i class="glyphicon glyphicon-leaf"></i></div>
                                    <div class="update-text"> <strong>Quantidade </strong> <a href="#">Itens : </a>  <a href="#">{{$quantidadeItensProcesso}}</a> </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="update-nag">
                                    <div class="update-split update-danger"><i class="glyphicon glyphicon-warning-sign"></i></div>
                                    <div class="update-text"> <strong>Quantidade </strong> <a href="#">Empresas : </a>  <a href="#">{{$quantidadeEmpresaProcesso}}</a> </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                </table>
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <a href="/" class="btn btn-danger btn-icon-split">
                                <span class="icon text-white-50">

                                </span>
                                <span class="text">Sair</span>
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="{{route('cadastrarEmpresa',$processo->id)}}" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-flag"></i>
                                </span>
                                <span class="text">Adicionar Empresa</span>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{route('cadastroItem',$processo->id)}}" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-flag"></i>
                                </span>
                                <span class="text">Adicionar Item</span>
                            </a>
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