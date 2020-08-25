<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIGEP</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->

    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        .card-counter {
            box-shadow: 2px 2px 10px #DADADA;
            margin: 5px;
            padding: 20px 10px;
            background-color: #fff;
            height: 100px;
            border-radius: 5px;
            transition: .3s linear all;
        }

        .card-counter:hover {
            box-shadow: 4px 4px 20px #DADADA;
            transition: .3s linear all;
        }

        .card-counter.primary {
            background-color: #007bff;
            color: #FFF;
        }

        .card-counter.danger {
            background-color: #ef5350;
            color: #FFF;
        }

        .card-counter.success {
            background-color: #66bb6a;
            color: #FFF;
        }

        .card-counter.info {
            background-color: #26c6da;
            color: #FFF;
        }

        .card-counter i {
            font-size: 5em;
            opacity: 0.2;
        }

        .card-counter .count-numbers {
            position: absolute;
            right: 35px;
            top: 20px;
            font-size: 32px;
            display: block;
        }

        .card-counter .count-name {
            position: absolute;
            right: 35px;
            top: 65px;
            font-style: italic;
            text-transform: capitalize;
            opacity: 0.5;
            display: block;
            font-size: 18px;
        }

        body {

            margin-top: 10px;
            background: #e0e0e0;
        }

        .update-nag {
            display: inline-block;
            font-size: 14px;
            text-align: left;
            background-color: #fff;
            height: 40px;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .2);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            margin-bottom: 10px;
        }

        .update-nag:hover {
            cursor: pointer;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .4);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .3);
        }

        .update-nag>.update-split {
            background: #337ab7;
            width: 33px;
            float: left;
            color: #fff !important;
            height: 100%;
            text-align: center;
        }

        .update-nag>.update-split>.glyphicon {
            position: relative;
            top: calc(50% - 9px) !important;
            /* 50% - 3/4 of icon height */
        }

        .update-nag>.update-split.update-success {
            background: #5cb85c !important;
        }

        .update-nag>.update-split.update-danger {
            background: #d9534f !important;
        }

        .update-nag>.update-split.update-info {
            background: #5bc0de !important;
        }



        .update-nag>.update-text {
            line-height: 19px;
            padding-top: 11px;
            padding-left: 45px;
            padding-right: 20px;
        }
    </style>
    <style>
        @media print {
            #teste {
                background-color: white;
                height: 100%;
                width: 100%;
                position: fixed;
                top: 0;
                left: 0;
                margin: 0;
                padding: 15px;
                font-size: 14px;
                line-height: 18px;
            }
        }
    </style>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">

                </div>
                <div class="sidebar-brand-text mx-3">SIGEP <br>
                    <p style="font-size: 7px;">Sistema de Gerenciamento de Escolha de Preço</p>
                </div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>
            @if(Auth::user()->nivel != 3)

            <li class="nav-item">
                <a href="/" class="nav-link" href="adicionar_item.html">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span>Início</span></a>
            </li>
            <li class="nav-item">
                <a href="{{route('cadastroProcesso')}}" class="nav-link" href="adicionar_item.html">
                    <i class="fas fa-file-alt"></i>
                    <span>Nova Cotação</span></a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="{{route('listarProcessos')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>listar Cotações</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('listarProcessosEncerrados')}}">
                    <i class="fas fa-archive"></i>
                    <span>listar Cotações Encerrados</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('legislacao')}}">
                    <i class="fas fa-gavel"></i>
                    <span>Legislação</span></a>
            </li>
            @if(Auth::user()->nivel == 0 || Auth::user()->nivel == 1 )
            <li class="nav-item">
                <button type="button" class="ml-3 btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Reabrir Processo
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Código Processo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('reabrirProcesso')}}" method="post">
                                    @csrf
                                    <input class="form-control" type="text" name="protocolo">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Reabrir</button>
                            </div>
                                </form>
                        </div>
                    </div>
                </div>
            </li>
            @endif
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

                    <!-- Topbar Navbar -->

                    <img class="img-profile rounded-circle" src="https://www.camaragibe.pe.gov.br/wp-content/uploads/2019/10/logo_prefeituracamaragibe.png">

                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a data-toggle="modal" data-target="#logoutModal" class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div data-target="#logoutModal" class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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
                                <<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="container">
                    @yield('content')
                </div>
                <!-- End of Topbar -->
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; DTI - Diretoria de tecnologia da informação 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
                <!-- End of Content Wrapper -->
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
                                <h5 class="modal-title" id="exampleModalLabel">Deseja Realmente Sair</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    SAIR
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
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
                <!-- Bootstrap core JavaScript-->
                <script src="../vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin-2.min.js"></script>
                <!-- Page level plugins -->
                <script src="vendor/chart.js/Chart.min.js"></script>
                <!-- Page level custom scripts -->
                <script src="js/demo/chart-area-demo.js"></script>
                <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>