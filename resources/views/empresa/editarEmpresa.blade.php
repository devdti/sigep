@extends('layouts.menulateral')
@extends('layouts.mascaraCnpj')
<!-- Begin Page Content -->
@section('content')
<!-- Begin Page Content -->
<!--Script para retornar o auto compleete de empresas cadastradas no sistema -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Gestão de Empresas</h1>
                <p class="mb-4">Esse espaço Possibilita o cadastro, Edição e Remoção de empresas. </p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Empresas</h6>
                        @if(Session('mensage'))
                        <div class="card shadow mb-4">
                            <strong class="alert alert-success">{{Session('mensage')}}</strong>
                        </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{route('updateEmpresa',$empresaAtual->id)}}" method="post">
                            <!--Grid column-->
                            @csrf
                            <th colspan="3">
                                <div class="row">
                                    <div class="col-md-3 ">
                                        <label for="">Nome Empresa :</label>
                                        <input required type="text" class="form-control form-control-user" name="nome" value="{{$empresaAtual->nome}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Empresa Cnpj :</label>
                                        <input onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()' minlength="14" maxlength="19" required type="text" class="form-control form-control-user" name="cnpj" id="exampleFirstName" value="{{$empresaAtual->cnpj}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Descrição Empresa</label>
                                        <textarea required type="text" id="message" name="descricao" rows="2" class="form-control md-textarea">{{$empresaAtual->descricao}}</textarea>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <a href="{{route('cadastrarEmpresa',$processoId->processo_id)}}" class="btn btn-danger btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fa fa-arrow-left"></i>
                                                    </span>
                                                    <span class="text">Voltar</span>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <button href="#" class="btn btn-success btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-check"></i>
                                                    </span>
                                                    <span class="text">Salvar</span>
                                                </button>

                                            </div>

                                        </div>
                                    </div>
                                    <form><br>
                                        <!-- Retirando a listagem empresa por falta de usabilidade 
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            @if(Session('status'))
                                            <div class="card shadow mb-4">
                                                <strong class="alert alert-success">{{Session('status')}}</strong>
                                            </div>
                                            @endif
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>CNPJ</th>
                                                    <th>Descrição</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($empresas as $empresa)
                                                <tr>
                                                    <td>{{$empresa->nome}}</td>
                                                    <td>{{$empresa->cnpj}}</td>
                                                    <td>{{$empresa->descricao}}</td>
                                                </tr>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>-->
                                        <div class="container">
                                            <div class="row">

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
</div <!-- End of Main Content -->

@endsection