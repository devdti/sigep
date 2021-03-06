@extends('layouts.menulateral')
<!-- Begin Page Content -->
@section('content')
<div class="row">
  <div class="col-md-12">
    <!--DESTACAR MENSAGEM DE CONCLUSÃO DE CADASTRO-->
    <div class="container-fluid">

      <h3 class="text-center">Sistema de Gerenciamento de Escolha de Preço - SIGEP</h3>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card-counter primary">
            <i class="fas fa-file-alt"></i>
            <span class="count-numbers">{{$quantidadeProcessos}}</span>
            <span class="count-name">Quantidade Processos</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-counter success">
            <i class="fab fa-buffer"></i>
            <span class="count-numbers">{{$quantidadeItens}}</span>
            <span class="count-name">Quantidade Itens</span>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card-counter info">
            <i class="fa fa-building" aria-hidden="true"></i>
            <span class="count-numbers">{{$quantidadeEmpresas}}</span>
            <span class="count-name">Quantidade Empresas</span>
          </div>
        </div>

        @if(Session('mensage'))
        <strong class="alert alert-success">{{Session('mensage')}}</strong>
        @endif
        @if(Session('mensageFail'))
        <strong class="alert alert-danger">{{Session('mensageFail')}}</strong>
        @endif
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection