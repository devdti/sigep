@extends('layouts.menulateral')
<!-- Begin Page Content -->
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="container-fluid">
            <!-- Page Heading -->
            <!-- DataTales Example -->
            <p>@if(Session('mensage'))
                {{Session('mensage')}}
                @endif
            </p>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">Processos Encerrados</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Todos os Processos Encerrados</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($processos as $processo)
                                <tr>
                                    <td>
                                        <a href="{{route('gerarRelatorio',$processo->id)}}">
                                            <div class="col-md-12">
                                                <div class="card border-left-primary shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 20px;">{{$processo->descricao}}</div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
@endsection