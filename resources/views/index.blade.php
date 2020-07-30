@extends('layouts.menulateral')
<!-- Begin Page Content -->
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="container-fluid">
      <p>@if(Session('mensage'))
        {{Session('mensage')}}
        @endif
      </p>


      <img class="rounded mx-auto d-block" src="https://comerciolocal.camaragibe.pe.gov.br/images/logo_prefeituracamaragibe2.png" alt="">
      <h3 class="text-center">Sistema de compras</h3>
    </div>

  </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection