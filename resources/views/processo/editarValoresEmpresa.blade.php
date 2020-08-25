@extends('layouts.menulateral')
<!-- Begin Page Content -->
@section('content')
<!-- Begin Page Content -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Alteração de valores </h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Empresa</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <form action="{{route('updateValor')}}" method="post">
                  @if(Session('status'))
                  <div class="card shadow mb-4">
                    <strong class="alert alert-success">{{Session('status')}}</strong>
                  </div>
                  @endif
                  @csrf
                  <thead>
                    <tr>

                      <th>Preço</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <input type="hidden" name="id" value="{{$relatorio->id}}">

                      <td>
                        <div class="col-md-8">
                          <label for="">Digite o novo preço</label>
                          <input type="text" class="form-control form-control-user " name="valor" id="exampleFirstName" value="{{$relatorio->valor}}">
                        </div>
                      </td>
                    </tr>
                  </tbody>
              </table>
              <div class="container">
                <div class="row">
                  <div class="col-2">
                    <a href="{{route('empresaItens',$relatorio->processo_id)}}" class="btn btn-info btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fa fa-arrow-left"></i>
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