@extends('layouts.menulateral')
@extends('layouts.mascaraCnpj')
<!-- Begin Page Content -->
@section('content')

<!-- End of Topbar -->
<!-- Begin Page Content -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="container-fluid">
        <!-- Page Heading -->
       
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Nova Cotação</h4>
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
                                <label for="message">Secretaria Demandante</label>
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
                                <label for="message">Documento de Referência</label>
                                <input required type="text" id="message" name="cotacao" class="form-control md-textarea"></textarea>
                              </div>
                            </div><br>
                            
                            <div class="col-md-12">
                              <div class="md-form">
                                <label for="message">Finalidade da Cotação</label>
                                <textarea  type="text" id="message" name="descricao" rows="2" class="form-control md-textarea"></textarea>
                              </div>
                            </div><br>
                            <div class="center-on-small-only">
                              <a href="{{route('index')}}" class="btn btn-info btn-icon-split">
                                <span class="icon text-white-50">
                                  <i class="fa fa-arrow-left"></i>
                                </span>
                                <span class="text">Voltar</span>
                              </a>
                              <button type="submit" class="btn btn-primary">Proximo</button>
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
</div>
</div>
@endsection