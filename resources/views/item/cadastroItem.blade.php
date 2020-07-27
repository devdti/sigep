@extends('layouts.menulateral')
<!-- Begin Page Content -->
@section('content')

<!-- Begin Page Content -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Gestão de Itens</h1>

        <p class="mb-4">Essa pagina Possibilita o cadastro, Edição e Remoção de itens. </p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          @if(Session('mensage'))
          <div class="card shadow mb-4">
            <strong class="alert alert-success">{{Session('mensage')}}</strong>
          </div>
          @endif
          @if(Session('status'))
          <div class="card shadow mb-4">
            <strong class="alert alert-success">{{Session('status')}}</strong>
          </div>
          @endif
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Itens</h6>
            <h6 class="m-0 font-weight-bold text-primary">{{$processo->cotacao}} / {{$processo->secretaria}}</h6>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4 mr-2">
                <form action="../storeItem" method="post" enctype="multipart/form-data">
                  <!--Grid column-->
                  @csrf
                  <label for="">Digite a descrição do item</label>
                  <input class="form-control" type="hidden" value="{{$processo->id}}" name="processo">
                  <textarea type="text" class="form-control form-control-user" name="descricao" id="exampleFirstName" placeholder="Descrição do  item"></textarea>
              </div>
              <div class="col-md-4 mr-2">
                <label for="">Selecione a unidade do item</label>
                <i style="float:right" class="fa fa-question" data-toggle="tooltip" data-placement="rigth" title="Escolha uma unidade de definição: EX: Un = Unidade , Cx = Caixa">
                </i>
                <br>

                <select name="unidade" required id="" class="form-control">
                  <option value="null"> selecione</option>
                  <option>Un</option>
                  <option>Cx</option>
                  <option>L</option>
                </select>
              </div>

              <div class="col-md-3 mr-2">
                <label for="message">Descreva a quantidade: </label>
                <input required type="number" id="message" name="quantidade" class="form-control">

              </div>
              <div class="col-md-12 mt-4">
                <div class="col-md-2">
                  <button type="submit" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Adicionar</span>
                  </button>
                </div>
              </div>
              </form>
            </div><br>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Descricao</th>
                    <th>N° Item</th>
                    <th>Unidade</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($itens as $item)
                  <tr>
                    <td>{{$item->descricao}}</td>
                    <td>{{$item->numero}}</td>
                    <td>{{$item->unidade}}</td>
                    <td>{{$item->quantidade}}</td>
                    <td><a class="btn btn-warning" href="{{route('editarItem',$item->id)}}">Editar</a>
                    <a class="btn btn-danger" href="{{route('destroyItem',$item->id)}}"><span class="icon text-white-50">
                          <i class="fas fa-trash"></i>
                        </span>Excluir</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="container">
                <div class="row">
                  <div class="col-2">
                    <a href="/" class="btn btn-danger btn-icon-split">
                    
                      <span class="icon text-white-50">
                      <i class="fa fa-arrow-left"></i>
                      </span>
                      <span class="text">Sair</span>
                    </a>
                  </div>
                  <div class="col-2">
                    <a href="{{route('empresaItens',$processo->id)}}" class="btn btn-danger btn-icon-split">
                      <span class="icon text-white-50">
                        
                      </span>
                      <span class="text">voltar</span>
                    </a>
                  </div>
                  <div class="col-2">
                    <a href="{{route('cadastrarEmpresa',$processo->id)}}" class="btn btn-success btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fa fa-arrow-right"></i>
                      </span>
                      <span class="text">Próximo</span>
                    </a> </div>

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