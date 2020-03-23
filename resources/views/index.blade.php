<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Material Dashboard by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../template/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../template/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">

    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Creative Tim
                </a></div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active  ">
                        <a class="nav-link" href="./dashboard.html">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./user.html">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./tables.html">
                            <i class="material-icons">content_paste</i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./typography.html">
                            <i class="material-icons">library_books</i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./icons.html">
                            <i class="material-icons">bubble_chart</i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./map.html">
                            <i class="material-icons">location_ons</i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./notifications.html">
                            <i class="material-icons">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./rtl.html">
                            <i class="material-icons">language</i>
                            <p>RTL Support</p>
                        </a>
                    </li>
                    <li class="nav-item active-pro ">
                        <a class="nav-link" href="./upgrade.html">
                            <i class="material-icons">unarchive</i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header card-header-tabs card-header-primary">
                                <h4 class="card-title">Employees Stats</h4>
                                <p class="card-category">New employees on 15th September, 2016</p>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">
                                        <table class="table table-hover">
                                            <thead class="text-warning">
                                                <th>Nome Empresa</th>
                                                <th>Valor</th>
                                                <th>...</th>
                                                <th>...</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input class="form-control" type="text" placeholder="Nome Empresa" name="nomeEmpresa" id="nomeEmpresa"></td>
                                                    <td><input class="form-control" type="text" placeholder="Juros" name="valor" id="valor" value=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input class="form-control" type="text" placeholder="Nome Empresa" name="nomeEmpresa2" id="nomeEmpresa2"></td>
                                                    <td><input class="form-control" type="text" placeholder="Valor" name="valor2" id="valor2" value=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input class="form-control" type="text" placeholder="Nome Empresa" name="nomeEmpresa3" id="nomeEmpresa3"></td>
                                                    <td><input class="form-control" type="text" placeholder="Valor" name="valor3" id="valor3" value=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input class="form-control" type="text" placeholder="Nome Empresa" name="nomeEmpresa4" id="nomeEmpresa4"></td>
                                                    <td><input class="form-control" type="text" placeholder="Valor" name="valor4" id="valor4" value=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input class="form-control" type="text" placeholder="Nome Empresa" name="nomeEmpresa5" id="nomeEmpresa5"></td>
                                                    <td><input class="form-control" type="text" placeholder="Valor" name="valor5" id="valor5" value=""></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">Employees Stats</h4>
                                <p class="card-category">New employees on 15th September, 2016</p>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-warning">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Salary</th>
                                        <th>...</th>
                                        <th>...</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td> <input class="form-control" type="text" name="empresa" id="empresa" value="" disabled></td>
                                            <td><input class="form-control" type="int" name="result" id="result" value="" disabled></td>

                                            <td><input class="form-control" type="text" name="calculoFinal1" id="calculoFinal1" disabled></td>
                                            <td><input class="form-control" type="text" name="result1Status" id="result1Status" disabled></td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td> <input class="form-control" type="text" name="empresa2" id="empresa2" value="" disabled></td>
                                            <td><input class="form-control" type="int" name="result2" id="result2" value="" disabled></td>

                                            <td><input class="form-control" type="text" name="calculoFinal2" id="calculoFinal2" disabled></td>
                                            <td><input class="form-control" type="text" name="result2Status" id="result2Status" disabled></td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td> <input class="form-control" type="text" name="empresa3" id="empresa3" value="" disabled></td>
                                            <td><input class="form-control" type="int" name="result3" id="result3" value="" disabled></td>

                                            <td><input class="form-control" type="text" name="calculoFinal3" id="calculoFinal3" disabled></td>
                                            <td><input class="form-control" type="text" name="result3Status" id="result3Status" disabled></td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td> <input class="form-control" type="text" name="empresa4" id="empresa4" value="" disabled></td>
                                            <td><input class="form-control" type="int" name="result4" id="result4" value="" disabled></td>

                                            <td><input class="form-control" type="text" name="calculoFinal4" id="calculoFinal4" disabled></td>
                                            <td><input class="form-control" type="text" name="result4Status" id="result4Status" disabled></td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td> <input class="form-control" type="text" name="empresa5" id="empresa5" value="" disabled></td>
                                            <td><input class="form-control" type="int" name="result5" id="result5" value="" disabled></td>

                                            <td><input class="form-control" type="text" name="calculoFinal5" id="calculoFinal5" disabled></td>
                                            <td><input class="form-control" type="text" name="result5Status" id="result5Status" disabled></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-warning">
                                        <h4 class="card-title">Employees Stats</h4>
                                        <p class="card-category">New employees on 15th September, 2016</p>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table class="table table-hover">
                                            <thead class="text-warning">
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Salary</th>
                                                <th>Country</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Dakota Rice</td>
                                                    <td>$36,738</td>
                                                    <td>Niger</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Minerva Hooper</td>
                                                    <td>$23,789</td>
                                                    <td>Curaçao</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Sage Rodriguez</td>
                                                    <td>$56,142</td>
                                                    <td>Netherlands</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Philip Chaney</td>
                                                    <td>$38,735</td>
                                                    <td>Korea, South</td>
                                                </tr>
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
        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="https://creative-tim.com/presentation">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                </div>
            </div>
        </footer>
    </div>
    </div>

    </div>
    <!--   Core JS Files   -->
    <script src="../template/assets/js/core/jquery.min.js"></script>
    <script src="../template/assets/js/core/popper.min.js"></script>
    <script src="../template/assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="../template/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="../template/assets/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="../template/assets/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="../template/assets/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="../template/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="../template/assets/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="../template/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="../template/assets/js/plugins/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="../template/assets/js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="../template/assets/js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="../template/assets/js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="../template/assets/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../template/assets/js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="../assets/js/plugins/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="../template/assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../template/assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../template/assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="../template/assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');

                $sidebar_img_container = $sidebar.find('.sidebar-background');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                    if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                        $('.fixed-plugin .dropdown').addClass('open');
                    }

                }

                $('.fixed-plugin a').click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .active-color span').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                    }
                });

                $('.fixed-plugin .background-color .badge').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('background-color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                    }
                });

                $('.fixed-plugin .img-holder').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).parent('li').siblings().removeClass('active');
                    $(this).parent('li').addClass('active');


                    var new_image = $(this).find("img").attr('src');

                    if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function() {
                            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                            $sidebar_img_container.fadeIn('fast');
                        });
                    }

                    if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $full_page_background.fadeOut('fast', function() {
                            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                            $full_page_background.fadeIn('fast');
                        });
                    }

                    if ($('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                    }
                });

                $('.switch-sidebar-image input').change(function() {
                    $full_page_background = $('.full-page-background');

                    $input = $(this);

                    if ($input.is(':checked')) {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar_img_container.fadeIn('fast');
                            $sidebar.attr('data-image', '#');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page_background.fadeIn('fast');
                            $full_page.attr('data-image', '#');
                        }

                        background_image = true;
                    } else {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar.removeAttr('data-image');
                            $sidebar_img_container.fadeOut('fast');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page.removeAttr('data-image', '#');
                            $full_page_background.fadeOut('fast');
                        }

                        background_image = false;
                    }
                });

                $('.switch-sidebar-mini input').change(function() {
                    $body = $('body');

                    $input = $(this);

                    if (md.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                    } else {

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function() {
                            $('body').addClass('sidebar-mini');

                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);

                });
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
        //Formula para empresa 01
        jQuery('input').on('keyup', function() {
            var empresa = jQuery('#nomeEmpresa').val();
            var valor = parseFloat(jQuery('#valor').val() != '' ? jQuery('#valor').val() : 0);
            var valor2 = parseFloat(jQuery('#valor2').val() != '' ? jQuery('#valor2').val() : 0);
            var valor3= parseFloat(jQuery('#valor3').val() != '' ? jQuery('#valor3').val() : 0);
            var valor4 = parseFloat(jQuery('#valor4').val() != '' ? jQuery('#valor4').val() : 0);
            var valor5 = parseFloat(jQuery('#valor5').val() != '' ? jQuery('#valor5').val() : 0);
            var somaValores= ((valor2+valor3+valor4+valor5)/4);
            var calculoSoma = (valor*100)/somaValores;
            var calculoFinal = calculoSoma-100;
            var resultado  = calculoFinal.toFixed(2);
            
            if(resultado >= 30){
                jQuery('#result1Status').val('EXCESSIVAMENTE ELEVADO');
            }else{
                jQuery('#result1Status').val('Valido');
            }
            var d = parseInt(jQuery('#desconto').val() != '' ? jQuery('#desconto').val() : 0);
            jQuery('#empresa').val(empresa);
            jQuery('#result').val(somaValores);
            jQuery('#calculoFinal1').val(resultado);
        })
        //fim do calculo para empresa 1
        //Formula para empresa 02
        jQuery('input').on('keyup', function() {
            var empresa2 = jQuery('#nomeEmpresa2').val();
            var valor2 = parseInt(jQuery('#valor2').val() != '' ? jQuery('#valor2').val() : 0);
            var valor = parseFloat(jQuery('#valor').val() != '' ? jQuery('#valor').val() : 0);
            var valor3= parseFloat(jQuery('#valor3').val() != '' ? jQuery('#valor3').val() : 0);
            var valor4 = parseFloat(jQuery('#valor4').val() != '' ? jQuery('#valor4').val() : 0);
            var valor5 = parseFloat(jQuery('#valor5').val() != '' ? jQuery('#valor5').val() : 0);
            
            var somaValores= ((valor+valor3+valor4+valor5)/4);
            var calculoSoma = (valor2*100)/somaValores;
            var calculoFinal = calculoSoma-100;
            var resultado  = calculoFinal.toFixed(2);

            if(resultado >= 30){
                jQuery('#result2Status').val('EXCESSIVAMENTE ELEVADO');
            }else{
                jQuery('#result2Status').val('Valido');
            }
            jQuery('#empresa2').val(empresa2);
            jQuery('#result2').val(somaValores);
            jQuery('#calculoFinal2').val(resultado);
        })
        //fim do calculo para empresa 2
        //Formula para empresa 03
        jQuery('input').on('keyup', function() {
            var empresa3 = jQuery('#nomeEmpresa3').val();
            var valor3 = parseInt(jQuery('#valor3').val() != '' ? jQuery('#valor3').val() : 0);

            var valor = parseFloat(jQuery('#valor').val() != '' ? jQuery('#valor').val() : 0);
            var valor2 = parseInt(jQuery('#valor2').val() != '' ? jQuery('#valor2').val() : 0);
            var valor4 = parseFloat(jQuery('#valor4').val() != '' ? jQuery('#valor4').val() : 0);
            var valor5 = parseFloat(jQuery('#valor5').val() != '' ? jQuery('#valor5').val() : 0);

            var somaValores= ((valor+valor2+valor4+valor5)/4);
            var calculoSoma = (valor3*100)/somaValores;
            var calculoFinal = calculoSoma-100;
            var resultado  = calculoFinal.toFixed(2);
            if(resultado >= 30){
                jQuery('#result3Status').val('EXCESSIVAMENTE ELEVADO');
            }else{
                jQuery('#result3Status').val('Valido');
            }
            jQuery('#empresa3').val(empresa3);
            jQuery('#result3').val(somaValores);
            jQuery('#calculoFinal3').val(resultado);
        })
        //fim do calculo para empresa 3
        //Formula para empresa 04
        jQuery('input').on('keyup', function() {
            var empresa4 = jQuery('#nomeEmpresa4').val();
            var valor4 = parseInt(jQuery('#valor4').val() != '' ? jQuery('#valor4').val() : 0);
            var d = parseInt(jQuery('#desconto').val() != '' ? jQuery('#desconto').val() : 0);
            var valor = parseFloat(jQuery('#valor').val() != '' ? jQuery('#valor').val() : 0);
            var valor2 = parseFloat(jQuery('#valor2').val() != '' ? jQuery('#valor2').val() : 0);
            var valor3= parseFloat(jQuery('#valor3').val() != '' ? jQuery('#valor3').val() : 0);
            var valor5 = parseFloat(jQuery('#valor5').val() != '' ? jQuery('#valor5').val() : 0);
            var somaValores= ((valor+valor2+valor3+valor5)/4);
            var calculoSoma = (valor4*100)/somaValores;
            var calculoFinal = calculoSoma-100;
            var resultado  = calculoFinal.toFixed(2);
            
            if(resultado >= 30){
                jQuery('#result4Status').val('EXCESSIVAMENTE ELEVADO');
            }else{
                jQuery('#result4Status').val('Valido');
            }
            var d = parseInt(jQuery('#desconto').val() != '' ? jQuery('#desconto').val() : 0);
            jQuery('#empresa4').val(empresa4);
            jQuery('#result4').val(somaValores);
            jQuery('#calculoFinal4').val(resultado);

        })
        //fim do calculo para empresa 4
        //Formula para empresa 05
        jQuery('input').on('keyup', function() {
            var empresa5 = jQuery('#nomeEmpresa5').val();
            var valor5 = parseInt(jQuery('#valor5').val() != '' ? jQuery('#valor5').val() : 0);
            var d = parseInt(jQuery('#desconto').val() != '' ? jQuery('#desconto').val() : 0);
            
            jQuery('#result5').val(valor5 / 2);

            var valor = parseFloat(jQuery('#valor').val() != '' ? jQuery('#valor').val() : 0);
            var valor2 = parseFloat(jQuery('#valor2').val() != '' ? jQuery('#valor2').val() : 0);
            var valor3= parseFloat(jQuery('#valor3').val() != '' ? jQuery('#valor3').val() : 0);
            var valor4 = parseFloat(jQuery('#valor4').val() != '' ? jQuery('#valor4').val() : 0);
            var somaValores= ((valor+valor2+valor3+valor4)/4);
            var calculoSoma = (valor5*100)/somaValores;
            var calculoFinal = calculoSoma-100;
            var resultado  = calculoFinal.toFixed(2);
            
            if(resultado >= 30){
                jQuery('#result5Status').val('EXCESSIVAMENTE ELEVADO');
            }else{
                jQuery('#result5Status').val('Valido');
            }
            jQuery('#empresa5').val(empresa5);
            jQuery('#result5').val(somaValores);
            jQuery('#calculoFinal5').val(resultado);
            
            
        })
        //fim do calculo para empresa 5
        //Fim do codigo de calculos para a planilha 2 
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();

        });
    </script>
</body>

</html>