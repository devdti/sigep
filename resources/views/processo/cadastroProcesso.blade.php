@extends('layouts.menulateral')
<!-- Begin Page Content -->
@section('content')

<!-- End of Topbar -->
<!-- Begin Page Content -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Abertura de cotação para verificação de melhor preço de compra</h1>
        <p class="mb-4">Sistema voltado para analise de empresas com preço e oferta</a>.</p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Abertura de Cotação</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                  <tr>
                    <td>
                      <div class="col-md-auto">
                        <form action="store" method="post" enctype="multipart/form-data">
                          <!--Grid column-->
                          @csrf
                          <div>
                            <div class="col-md-12">
                              <div class="md-form">
                                <label for="message">Nome da Cotação</label>
                                <input required type="text" id="message" name="nome" rows="2" class="form-control md-textarea"></textarea>
                              </div>
                            </div><br>
                            <div class="col-md-12">
                              <div class="md-form">
                                <label for="message">Referência a cotação</label>
                                <input required type="text" id="message" name="cotacao" class="form-control md-textarea"></textarea>
                              </div>
                            </div><br>
                            <div class="col-md-12">
                              <div class="md-form">
                                <label for="message">Selecione a secretaria</label>
                                <select class="form-control" name="id_secretaria">
                                  <option value="null">Selecione a secretaria</option>
                                  @foreach ($secretarias as $secretaria)
                                  <option>{{$secretaria->nome}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div><br>
                            <div class="col-md-12">
                              <div class="md-form">
                                <label for="message">Descreva a finalidade da Cotação</label>
                                <textarea required type="text" id="message" name="descricao" rows="2" class="form-control md-textarea"></textarea>
                              </div>
                            </div><br>
                            <div class="center-on-small-only">
                              <a href="{{route('index')}}" class="btn btn-danger btn-icon-split">
                                <span class="icon text-white-50">
                                  <i class="fa fa-arrow-left"></i>
                                </span>
                                <span class="text">Voltar</span>
                              </a>
                              <button type="submit" class="btn btn-primary">proximo</button>
                            </div>
                            <div class="status"></div>
                          </div>
                        </form>
                      </div>
            </div>
          </div>
        </div>
      </div>
      </td>
      </tr>
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