@extends('layouts.menulateral')
@extends('layouts.mascaraCnpj')
<!-- Begin Page Content -->
@section('content')
<!-- Begin Page Content -->
<div>
  <div class="row">
    <div class="col-md-12">
      <div>

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{$idProcesso->nome}}</h1><br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Empresas</h6>
          </div>
          <div class="card-body">
            <!--Modulo para cadastro de empresa já existente -->
            <label for=""> Digite o cnpj da empresa para verificar se ela já esta cadastrada no nosso sistema.</label>
            <form action="../salvar" method="post">
              @csrf
              <div class="row">
                <div class="md-6 ml-3" style="width:300px;">
                  <input onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()' required minlength="14" maxlength="19" class="form-control form-control-user" id="myInput" type="text" name="empresaCadastradaCnpj" placeholder="CNPJ"><br>

                </div>
                <div class="md-6 ml-3">
                  <input class="btn btn-success" type="submit" value="Consultar">
                </div>
              </div>


            </form>
            <!-- Fim do Modulo para cadastro de empresa já existente -->
            @if(Session('empresaConsulta'))
            <form action="../salvar" method="post">
              <!--Grid column-->
              <input class="form-control" type="hidden" value="{{$idProcesso->id}}" name="processo">
              <!--inpute EmpresaExistente para diferenciar o processo de cadastro de empresa, com esse form do outro, fazendo assim o 
              sistema redirecionar o cadastro para a empresa certa e não tentar cadastrar a mesma empresa novamente-->
              <input class="form-control" type="hidden" value="true" name="empresaExistente">
              <input class="form-control" type="hidden" name="empresaId" value="{{Session('empresaConsulta')->id}}">
              @csrf
              <th colspan="3">
                <div class="row">
                  <div class="col-md-2">
                    <label>Nome da Empresa :</label>
                    <input required type="text" class="form-control form-control-user" value="{{Session('empresaConsulta')->nome}}" readonly>
                  </div>
                  <div class="col-md-2">
                    <label for="cpj">CNPJ :</label>
                    
                    <input onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()' required minlength="14" maxlength="19" type="text" class="form-control form-control-user" value="{{Session('empresaConsulta')->cnpj}}" readonly>
                  </div>
                  <div class="col-md-3">
                    <label for="">Descrição Empresa:</label>
                    <textarea required type="text" id="message" rows="2" class="form-control md-textarea" readonly>{{Session('empresaConsulta')->descricao}}</textarea>
                  </div>
                  <div class="col-md-2">
                    <label for="">Parametro de Pesquisa :</label><br>
                    <select  class="form-control" name="parametro_pesquisa"  required>
                      <option value="null">Selecione</option>
                      <option value="Painel De preços">Painel De preços</option>
                      <option value="Portal do banco de preços">Portal do banco de preços</option>
                      <option value="Contratações similares de outros entes públicos">Contratações similares de outros entes públicos</option>
                      <option value="Pesquisa publicada em mídia especializada">Pesquisa publicada em mídia especializada</option>
                      <option value="Pesquisa com os fornecedores">Pesquisa com os fornecedores</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label for="">Descrição Parâmetro de Pesquisa:</label>
                    <textarea required type="text" id="message" name="descricao_justificativa" rows="2" class="form-control md-textarea" placeholder="Descreva o motivo do uso do parametro de pesquisa."></textarea>
                  </div>
                  <div class="col-md-12 mt-4">
                    <div class="col-md-2 mb-3">
                      <button href="#" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Adicionar</span>
                      </button>
                    </div>
                  </div>
                </div>
            </form>
            @else
            <form action="../salvar" method="post">
              <!--Grid column-->
              <input class="form-control" type="hidden" value="{{$idProcesso->id}}" name="processo">
              @csrf
              <th colspan="3">
                <div class="row">
                  <div class="col-md-2">

                    <label>Nome da Empresa :</label>
                    <input required type="text" class="form-control form-control-user" name="nome" placeholder="Insira o nome">
                  </div>
                  <div class="col-md-2">
                    <label for="cpj">CNPJ :</label>
                    <input onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()' minlength="14" maxlength="19" required type="text" class="form-control form-control-user" name="cnpj" id="exampleFirstName" placeholder="Insira o CNPJ">
                  </div>
                  <div class="col-md-3">
                    <label for="">Descrição Empresa:</label>
                    <textarea required type="text" id="message" name="descricao" rows="2" class="form-control md-textarea" placeholder="Descreva a empresa."></textarea>
                  </div>
                  <div class="col-md-2">
                    <label for="">Parametro de Pesquisa :</label><br>
                    <select  class="form-control" name="parametro_pesquisa" id="" required >
                      <option value="null">Selecione</option>
                      <option value="Painel De preços">Painel De preços</option>
                      <option value="Portal do banco de preços">Portal do banco de preços</option>
                      <option value="Contratações similares de outros entes públicos">Contratações similares de outros entes públicos</option>
                      <option value="Pesquisa publicada em mídia especializada">Pesquisa publicada em mídia especializada</option>
                      <option value="Pesquisa com os fornecedores">Pesquisa com os fornecedores</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label for="">Descrição Parâmetro de Pesquisa:</label>
                    <textarea required type="text" id="message" name="descricao_justificativa" rows="2" class="form-control md-textarea" placeholder="Descreva o motivo do uso do parametro de pesquisa."></textarea>
                  </div>
                  <div class="col-md-12 mt-4">
                    <div class="col-md-2 mb-3">
                      <button href="#" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Adicionar</span>
                      </button>
                    </div>
                  </div>
                </div>
            </form>
            @endif

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                @if(Session('status'))
                <div class="card shadow mb-4">
                  <strong class="alert alert-success">{{Session('status')}}</strong>
                </div>
                @endif
                @if(Session('mensage'))
                <div class="card shadow mb-4">
                  <strong class="alert alert-danger">{{Session('mensage')}}</strong>
                </div>
                @endif
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>CNPJ</th>
                    <th>Descrição</th>
                    <th>Ações</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach($empresas as $empresa)
                  <tr>
                    <td>{{$empresa->nome}}</td>
                    <td>{{$empresa->cnpj}}</td>
                    <td>{{$empresa->descricao}}</td>
                    <td><a class="btn btn-warning" href="{{route('editarEmpresa',$empresa->id)}}">Editar</a>
                      <a class="btn btn-danger" href="{{route('destroyEmpresa',$empresa->id)}}">
                        Excluir
                      </a>
                    </td>
                  </tr>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="container">
                <div class="row">
                  <div class="col-2">
                    <a href="{{route('empresaItens',$idProcesso)}}" class="btn btn-info btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fa fa-arrow-left"></i>
                      </span>
                      <span class="text">Voltar</span>
                    </a>
                  </div>

                  <div class="col-2">

                    <a href="{{route('empresaItens',$idProcesso)}}" class="btn btn-success btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fa fa-arrow-right"></i>
                      </span>
                      <span class="text">Próximo</span>
                    </a> </div>
                  <div class="col-md-6"> </div>
                  <div class="col-2">
                    <a href="/" class="btn btn-danger btn-icon-split">

                      <span class="icon text-white-50">
                        <i class="fas fa-times"></i>
                      </span>
                      <span class="text">Sair</span>
                    </a>
                  </div>

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
</div>
<!-- End of Main Content -->
@endsection