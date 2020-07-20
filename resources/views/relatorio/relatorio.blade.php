<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
            <li class="nav-item">
                <a class="nav-link" href="adicionar_item.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Novo Processo</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="adicionar_item.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>itens do Processo</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="adicionar_empresas.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Empresas do Processo</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="empresas_itens.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Relação das Empresas e seus Processos</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>
                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="col-md-12">
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Resultados</h1>
                        <p class="mb-4">Ao Finalizar Processo alterações só poderam ser feitas com a Permisção Do administrador</p>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h4 class="m-0 font-weight-bold text-primary">Processos</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <div id="accordion">
                                            @foreach($item as $itens)
                                            <table class="col-md-12">
                                                <thead>
                                                </thead>
                                                <tbody>
                                                    <td>
                                                        <div class="card">
                                                            <div class="card-header" id="headingOne">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" data-toggle="collapse" data-target="#a{{$itens->id}}" aria-expanded="true" aria-controls="collapseOne">
                                                                        {{$itens->descricao}}
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="a{{$itens->id}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="main-panel">
                                                                        <!-- Navbar -->
                                                                        <!-- End Navbar -->
                                                                        <div class="content">
                                                                            <div class="row">
                                                                                <div class="col-lg-6 col-md-12">
                                                                                    <div class="card">
                                                                                        <div class="card-header card-header-tabs card-header-primary">
                                                                                            <h4 class="card-title">Planilha inicial</h4>
                                                                                            <p class="card-category">New employees on 15th September, 2016</p>
                                                                                            <p class="card-category">@if (session('mensage'))
                                                                                                <div class="alert alert-success" role="alert">
                                                                                                    {{ session('mensage') }}
                                                                                                </div>
                                                                                                @endif</p>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="tab-content">
                                                                                                <div class="tab-pane active" id="profile">
                                                                                                    <table class="table table-hover">
                                                                                                        <thead class="text-warning">
                                                                                                            <th>Nome Empresa</th>
                                                                                                            <th>CNPJ</th>
                                                                                                            <th>Nome Item</th>
                                                                                                            <th>Valor</th>
                                                                                                        </thead>
                                                                                                        <tbody>
                                                                                                            @foreach($relatorios as $relatorio)
                                                                                                            @if($itens->id == $relatorio->id_item)
                                                                                                            <tr class="empresas{{$itens->id}}">
                                                                                                                @foreach($empresas as $empresa)
                                                                                                                @if($relatorio->id_empresa == $empresa->id)
                                                                                                                <td>
                                                                                                                    {{$empresa->nome}}
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    {{$empresa->cnpj}}
                                                                                                                </td>
                                                                                                                @endif
                                                                                                                @endforeach
                                                                                                                <td>
                                                                                                                    {{$itens->descricao}}
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    {{$relatorio->valor}}
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            @endif
                                                                                                            @endforeach
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    <br>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-12">
                                                                                    <div class="card">
                                                                                        <div class="card-header card-header-warning">
                                                                                            <h4 class="card-title">Validos</h4>
                                                                                            <p class="card-category">New employees on 15th September, 2016</p>
                                                                                        </div>
                                                                                        <div class="card-body table-responsive">
                                                                                            <table class="table table-hover">
                                                                                                <thead class="text-warning">
                                                                                                    <th>Nome</th>
                                                                                                    <th>Valor</th>
                                                                                                    <th>Percentual</th>
                                                                                                    <th>Status</th>
                                                                                                    <!-- <th>Data</th>-->
                                                                                                </thead>
                                                                                                <tbody id="resultado{{$itens->id}}" class="resultEmpresa{{$itens->id}}">
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-12">
                                                                                    <div class="card">
                                                                                        <div class="card-header card-header-warning">
                                                                                            <h4 class="card-title">EXEQUÍVEL</h4>
                                                                                            <p class="card-category">New employees on 15th September, 2016</p>
                                                                                        </div>
                                                                                        <div class="card-body table-responsive">
                                                                                            <table class="table table-hover">
                                                                                                <thead class="text-warning">
                                                                                                    <th>Nome</th>
                                                                                                    <th>Valor</th>
                                                                                                    <th>Percentual</th>
                                                                                                    <th>Status</th>
                                                                                                </thead>
                                                                                                <tbody id="empresaFinal{{$itens->id}}">
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-12">
                                                                                    <div class="card">
                                                                                        <div class="card-header card-header-warning">
                                                                                            <h4 class="card-title">Resultado da Cotação</h4>
                                                                                            <p class="card-category">New employees on 15th September, 2016</p>
                                                                                        </div>
                                                                                        <div class="card-body table-responsive">
                                                                                            <table class="table table-hover">
                                                                                                <thead class="text-warning">
                                                                                                    <th>Média</th>
                                                                                                    <!--<th>Desvio</th>-->
                                                                                                    <!--<th>Quadrado do Desvio</th>-->
                                                                                                    <th>Soma Quadrado do Desvio</th>
                                                                                                    <th>Coeficiente de variação</th>
                                                                                                    <th>Variancia</th>
                                                                                                    <th>Desvio Padrao</th>
                                                                                                    <th>Mediana</th>
                                                                                                    <th>Menor Valor</th>
                                                                                                    <th>Total Valor</th>
                                                                                                    <!-- <th>Data</th>-->
                                                                                                </thead>
                                                                                                <tbody id="MediaMediana{{$itens->id}}" class="MediaMedianaEmpresa{{$itens->id}}">
                                                                                                </tbody>
                                                                                            </table>
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
                                            <br>
                                            <script>
                                                $(document).ready(function() {
                                                    //criando objeto empresa
                                                    function converterParaEmpresa(empresas) {
                                                        return Array.from(empresas).map(function(empresa) {
                                                            var nome = empresa.children[0].textContent;
                                                            var cnpj = empresa.children[1].textContent;
                                                            var nomeItem = empresa.children[2].textContent;
                                                            var valorEmpresa = parseFloat(empresa.children[3].textContent);
                                                            var obj = creatObjetoEmpresa(nome, cnpj, nomeItem, valorEmpresa);
                                                            return obj;
                                                        });
                                                    }

                                                    function creatObjetoEmpresa(nomeEmpresa, cnpj, nomeItem, valor) {
                                                        return {
                                                            nome: nomeEmpresa,
                                                            cnpj: cnpj,
                                                            nomeItem: nomeItem,
                                                            valor: valor,
                                                            mediaDosDemais: null,
                                                            percentual: null,
                                                            status: null,
                                                        };
                                                    }
                                                    //fim da criação objeto empresa
                                                    //atribui valor aos campos do  objeto de empresasExequiveis
                                                    function converterParaEmpresaExequivel(empresasExequiveis) {
                                                        return Array.from(empresasExequiveis).map(function(empresaExequivel) {
                                                            var nome = empresaExequivel.children[0].textContent;
                                                            var valor = parseFloat(empresaExequivel.children[1].textContent);
                                                            var percentual = empresaExequivel.children[2].textContent;
                                                            var status = empresaExequivel.children[3].textContent;
                                                            var obj = creatObjetoEmpresaExequivel(nome, valor, percentual, status); //retorna um objeto com valores atribuidos
                                                            return obj;
                                                        });
                                                    }
                                                    //cria o objeto da empresa com status Exequivel
                                                    function creatObjetoEmpresaExequivel(nomeEmpresa, valor, percentual, status) {
                                                        return {
                                                            nome: nomeEmpresa,
                                                            valor: valor,
                                                            percentual: percentual,
                                                            status: status,
                                                        };
                                                    }

                                                    function obterEmpresasExequiveis(empresasExequiveis) {
                                                        return empresasExequiveis.filter(empresa => empresa.status != 'INEXEQUÍVEL');
                                                    }
                                                    //fim da criação objeto empresasExequiveis
                                                    //Função responsável por calcular todo o processo de calculo da média e mediana
                                                    function calcularMediaeMediana(empresas) {
                                                        // var status = empresas.map(empresa => empresa.status);
                                                        var valores = empresas.map(empresa => empresa.valor).sort();
                                                        if (valores.length < 3) {
                                                            $('#empresaFinal{{$itens->id}}').append("<label style='color:red'>WARNING,VOCÊ PRECISA DE NO MINIMO 3 EMPRESAS EXEQUIVEL PARA CONTINUAR O CALCULO</label>");
                                                            $('#MediaMediana{{$itens->id}}').append("WARNING,VOCÊ PRECISA DE NO MINIMO 3 empresas para calcular");
                                                        } else {
                                                            var somaTodosQuadrados = 0;
                                                            var menorValor, totalValor, media, mediana, desvio, quadradoDesvio, variancia, coeficienteDeVariacao, desvioPadrao;

                                                            empresas.forEach(function(empresa) {
                                                                //Soma todos os valores da lista de Exequiveis
                                                                totalValor = valores.reduce((a, b) => a + b) * empresas.length;
                                                                //calcula a média dos exequiveis 1°
                                                                //valores.filter(valor => valor != "empresa.valor");
                                                                media = valores.reduce((a, b) => a + b) / empresas.length;
                                                                //fim do calculo da media
                                                                //calculo do desvio 2°
                                                                menorValor = valores.reduce((a, b) => Math.min(a, b));
                                                                desvio = empresa.valor - media;
                                                                //fim do calculo
                                                                // calculo Quadrado do desvio 3°
                                                                quadradoDesvio = Math.pow(desvio, 2);

                                                                //fim do calculo do quadrado do desvio
                                                                //calcular a soma de todos os quadrados
                                                                somaTodosQuadrados += quadradoDesvio;
                                                                //fim da soma de todos os quadrados
                                                                //calcular a variancia 
                                                                variancia = somaTodosQuadrados / valores.length;
                                                                //fim do calculo da variancia
                                                                somaTodosQuadrados.toFixed(2);
                                                                //calcular o desvio Padrao
                                                                desvioPadrao = Math.sqrt(variancia).toFixed(2);
                                                                //fim do calculo desvio padrao
                                                                //calcular o desvio Padrao
                                                                coeficienteDeVariacao = ((desvioPadrao / media) * 100).toFixed(2);
                                                                //fim do calculo desvio padrao
                                                                //calculo da mediana
                                                                if (empresas.length % 2 == 0) {
                                                                    let index1 = (empresas.length / 2) - 1; // aplicado o -1 pois a lista inicia em zero
                                                                    let index2 = (empresas.length / 2); //na formula solicita aplicação de +1 ao calculo, nao é necessario aplicar o -1 pois já retorna o valor esperado
                                                                    // atribui o valor da mediana.
                                                                    mediana = (valores[index1] + valores[index2]) / 2;
                                                                } else {
                                                                    //encontra o numero da mediana
                                                                    let index = (empresas.length + 1) / 2;

                                                                    mediana = valores[index - 1]; //retorna o numero da mediana 
                                                                }
                                                                //fim do calculo da mediana
                                                            });
                                                            //Exibir Resultado                                                       mediana
                                                            $('#MediaMediana{{$itens->id}}').append(criarLinhaCoeficienteVariacao(media, desvio, quadradoDesvio, somaTodosQuadrados, variancia, desvioPadrao, coeficienteDeVariacao, mediana, menorValor, totalValor));
                                                           
                                                        }
                                                    }

                                                    function criarLinhaCoeficienteVariacao(media, desvio, quadradoDesvio, somaTodosQuadrados, variancia, desvioPadrao, coeficienteVariacao, mediana, menorValor,totalValor) {
                                                        var colunaMedia = '<td>' + media + '</td>';
                                                        //var colunaDesvio = '<td>' + desvio + '</td>';
                                                        //var colunaQuadradoDesvio = '<td>' + quadradoDesvio + '</td>';

                                                        var colunaSomaTodosQuadrados = '<td>' + somaTodosQuadrados + '</td>';
                                                        var colunaVariancia = '<td>' + variancia + '</td>';
                                                        var colunaDesvioPadrao = '<td>' + desvioPadrao + '</td>';
                                                        var colunaCoeficienteVariacao = '<td>' + coeficienteVariacao + '</td>';
                                                        var colunaMediana = '<td>' + mediana + '</td>';
                                                        var menorValor = '<td>' + menorValor + '</td>';
                                                        var totalValor = '<td>' + totalValor + '</td>';
                                                        if (coeficienteVariacao <= 25) {
                                                            return '<tr>' + colunaMedia + colunaSomaTodosQuadrados + colunaCoeficienteVariacao + colunaVariancia + colunaDesvioPadrao + "<td>Parametro não ultilizado</td>" + menorValor+totalValor+'</tr>'
                                                        } else {
                                                            return '<tr>' + "<td>Parametro não ultilizado</td>" + colunaSomaTodosQuadrados + colunaCoeficienteVariacao + colunaVariancia + colunaDesvioPadrao + colunaMediana + menorValor+totalValor+ '</tr>'

                                                        }
                                                        
                                                    }

                                                    function calcularPercentual(empresas) {
                                                        var valores = empresas.map(empresa => empresa.valor).sort();
                                                        if (valores.length < 3) {
                                                            $('#resultado{{$itens->id}}').append("WARNING,VOCÊ PRECISA DE NO MINIMO 3 empresas para calcular");
                                                        } else {
                                                            empresas.forEach(function(empresa) {
                                                                var listaValores = valores.filter(valor => valor != empresa.valor);
                                                                var total = listaValores.reduce((a, b) => a + b);
                                                                var totalFinal = total / (empresas.length - 1);
                                                                var resultado = ((empresa.valor * 100) / totalFinal) - 100;
                                                                empresa.percentual = resultado;
                                                                if (resultado >= 30) {
                                                                    // se o resultado for > ou = a 30 então o codigo insere na tabela o texto...
                                                                    empresa.status = "EXCESSIVAMENTE ELEVADO"
                                                                } else {
                                                                    // caso contrario o sistema retorna que é valido.
                                                                    empresa.status = "Valido"
                                                                }

                                                            });
                                                        }
                                                    }

                                                    function exibirResultado(empresas) {
                                                        empresas.forEach(function(empresa) {
                                                            var linhaEmpresa = criarLinha(empresa, 'empresaValida');
                                                            $('#resultado{{$itens->id}}').append(linhaEmpresa);
                                                        })
                                                    }

                                                    function exibirResultadoEmpresaFinal(empresas) {

                                                        empresas.forEach(function(empresa) {

                                                            var linhaEmpresa = criarLinha(empresa, "empresaFinalExequivel");
                                                            $('#empresaFinal{{$itens->id}}').append(linhaEmpresa);
                                                        })
                                                    }

                                                    function criarLinha(empresa, classe) {
                                                        var colunaNome = '<td>' + empresa.nome + '</td>';
                                                        var colunaValor = '<td>' + empresa.valor + '</td>';
                                                        var colunaPercentual = '<td>' + empresa.percentual.toFixed(2) + '</td>';
                                                        var colunaStatus = '<td>' + empresa.status + '</td>';
                                                        var colunaData = '<td>' + empresa.data + '</td>';
                                                        return '<tr class="' + classe + '{{$itens->id}}"> ' + colunaNome + colunaValor + colunaPercentual + colunaStatus + '</tr>'
                                                    }

                                                    function obterEmpresasAprov(empresas) {
                                                        return empresas.filter(empresa => 'Valido' == empresa.status);
                                                    }
                                                    //
                                                    function calcularEmpresaAprov(empresas) {
                                                        var valores = empresas.map(empresa => empresa.valor);
                                                        empresas.forEach(function(empresa) {
                                                            var listaValores = valores.filter(valor => valor != empresa.valor);
                                                            var total = listaValores.reduce((a, b) => a + b);
                                                            var mediaDosDemais = total / (empresas.length - 1);
                                                            var resultado = (empresa.valor / mediaDosDemais) * 100;
                                                            empresa.percentual = resultado;
                                                            if (resultado < 70) {
                                                                // se o resultado for > ou = a 30 então o codigo insere na tabela o texto...
                                                                empresa.status = "INEXEQUÍVEL"
                                                            } else {
                                                                // caso contrario o sistema retorna que é valido.
                                                                empresa.status = "EXEQUÍVEL"
                                                            }
                                                        });
                                                    }
                                                    var empresasHtml = document.getElementsByClassName('empresas{{$itens->id}}');
                                                    var empresasExequiveisHtml = document.getElementsByClassName('empresaFinalExequivel{{$itens->id}}')
                                                    var empresas = converterParaEmpresa(empresasHtml);
                                                    //calcular o percentual das empresas e exibe os resultados
                                                    calcularPercentual(empresas);
                                                    exibirResultado(empresas);
                                                    //fim do calculo
                                                    //busca as empresas validas e calcula as exequiveis e lança na tabela de exequiveis
                                                    var empresasValidas = obterEmpresasAprov(empresas);
                                                    calcularEmpresaAprov(empresasValidas);
                                                    exibirResultadoEmpresaFinal(empresasValidas);
                                                    //fim do calculo
                                                    var empresasExequiveis = converterParaEmpresaExequivel(empresasExequiveisHtml);
                                                    var empresasExequiveisFinal = obterEmpresasExequiveis(empresasExequiveis);
                                                    calcularMediaeMediana(empresasExequiveisFinal);
                                                });
                                            </script>
                                            @endforeach
                                        </div>
                                        <br><br>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-2">
                                                    <a href="#" class="btn btn-danger btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-trash"></i>
                                                        </span>
                                                        <span class="text">Voltar</span>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#" class="btn btn-success btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                        <span class="text">Finalizar Processo</span>
                                                    </a> </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Main Content -->
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>
        <!-- Page level plugins -->
        <script src="../vendor/chart.js/Chart.min.js"></script>
        <!-- Page level custom scripts -->
        <script src="../js/demo/chart-area-demo.js"></script>
        <script src="../js/demo/chart-pie-demo.js"></script>
</body>

</html>