@extends('layouts.menulateral')
<!-- Begin Page Content -->
@section('content')
<!-- Begin Page Content -->
<div class="col-md-12" id="teste">
    <div class="container-fluid">
        <!-- Page Heading -->
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Relatório de parâmetro de pesquisa</h4>
                @if(Session('alerta'))
                <strong class="alert alert-danger">{{Session('alerta')}}</strong>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <div id="accordion">
                            @foreach($item as $itens)
                            <!--script para filtro  -->
                            <table class="col-md-12">
                                <thead>
                                </thead>
                                <tbody id="myTable{{$itens->id}}">
                                    <td>
                                        <div class="card">
                                            <div class="card-header" id="headingOne{{$itens->id}}">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <h5>
                                                            <h5>Número do item: {{$itens->numero}}</h5>
                                                        </h5>
                                                        <label class="ml-3" style="margin-top:-40px">Descrição do item: {{$itens->descricao}}</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="main-panel">
                                                    <!-- Navbar -->
                                                    <!-- End Navbar -->
                                                    <div class="content">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="card">
                                                                    <div class="card-header card-header-primary">
                                                                        <p class="card-category">
                                                                            @if (session('mensageRelatorio'))
                                                                            <div class="alert alert-success" role="alert">
                                                                                {{ session('mensageRelatorio') }}
                                                                            </div>
                                                                            @endif</p>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="tab-content">
                                                                            <div class="tab-pane active" id="profile">
                                                                                <table class="table table-hover">
                                                                                    <thead class="text-primary">
                                                                                        <th>Empresa</th>
                                                                                        <th>CNPJ</th>
                                                                                        <th>Parâmetro utilizado</th>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        @foreach($relatorios as $item)
                                                                                        <tr>
                                                                                            @if($itens->id == $item->item_id)
                                                                                            <td>{{$item->nome}}</td>
                                                                                            <td>{{$item->cnpj}}</td>
                                                                                            <td>{{$item->parametro_pesquisa}}</td>
                                                                                            @endif
                                                                                        </tr>
                                                                                        @endforeach
                                                                                    </tbody>
                                                                                </table>
                                                                                <br>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        </div>
                        </td>
                        </tbody>

                    </table>
                    @endforeach
                    <br>
                </div>
                <br><br>
                <div class="container" id="buttonImprimir">
                    <div class="row">
                        <div class="col-2" id="voltar">
                            <a href="{{ url()->previous() }}" class="btn btn-info btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fa fa-arrow-left"></i>
                                </span>
                                <span class="text">Voltar</span>
                            </a>
                        </div>
                        @if($processo->status != "Encerrado")
                        <!-- Button trigger modal -->
                        <form action="{{route('finalizarProcesso',$id)}}" method="post">
                            @csrf
                            <input type="hidden" name="idProcesso" value="{{$id}}">
                            <button disabled id="finalizarProcesso" type="submit" class="btn btn-primary">
                                Finalizar Processo
                            </button>
                        </form>
                    </div>

                    @else

                    <div class="col-3" id="simplificado">
                        <a href="#" onclick="window.print()" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Imprimir Relatório simplificado</span>
                        </a>
                    </div>


                    <div class="col-3" id="detalhado">
                        <a target="_blanc" href="{{route('imprimirRelatorio',$processo->id)}}" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Imprimir Relatório Detalhado</span>
                        </a>
                    </div>

                    <div class="col-3">
                        <a href="#" onclick="window.print()" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Imprimir Relatório de Pesquisa</span>

                        </a>
                    </div>


                    @endif

                </div>
                <style>
                    @media print {
                        #buttonImprimir {
                            display: none;
                        }
                    }
                </style>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
<!-- End of Main Content -->