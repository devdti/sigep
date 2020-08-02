<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;


        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 2px solid #000;
        }

        td {
            padding: 2px;
            text-align: left;
            border-bottom: 2px solid #000;


        }

        .conteudo-left {

            width: 500px;

            height: 300px;


            background-color: #FF0;

        }

        .conteudo-right {

            width: 500px;
            margin-left: 600px;
            margin-top: -300px;

            height: 300px;


            background-color: #F00;
        }
    </style>
</head>

<body style="width:2400px; font-size: 14px;  ">
    <div class="container">
        <div style="margin-top: 20px;">
            <img src="logorelatorio.jfif" width="30%">
        </div>
        <h2 style="margin-left: 123px;">{{ date('d/m/Y' ,strtotime($processo->created_at))}} - {{$processo->nome}}</h2>
        <p style="margin-left: 123px; margin-top: -17px;">SECRETARIA DEMANDANTE: SECAD</p>
        <br>
        @foreach($item as $itens)
        <strong>
            <p style="margin-bottom: -5px; font-size: 16px;">Nº: {{$itens->numero}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$itens->descricao}}</p>
        </strong><br>
        Status : <label for="" id="demo{{$itens->id}}"> </label>
        <table style="width:2400; height: 3490 ">
            <thead>
                <tr>
                    <hr style="color: #000;">
                    <th>Parametro Utilizado :
                        <strong id="resultadoCotacao{{$itens->id}}"></strong>
                        </p>
                    </th>
                    <th>Resultado Média/Mediana : <strong id="resultadoCotacaoMediana{{$itens->id}}"></strong></th>
                    <th>Menor Preço Cotado : <strong for="" id="menorValor{{$itens->id}}"></strong></th>
                    <th>Quantidade : <strong id="quantidadeItem{{$itens->id}}">{{$itens->quantidade}}</strong></th>
                    <th>Valor Total : <strong for="" id="valorTotal{{$itens->id}}"></strong></th>
                </tr>
            </thead>
            <th>Coeficiente de Variação</th>
            <th>Variancia</th>
            <th>Desvio Padrão</th>
            <tbody id="MediaMediana{{$itens->id}}" class="MediaMedianaEmpresa{{$itens->id}}">
            </tbody>
            <div class="col-md-12" id="teste">
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Resultado Cotação</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <div id="accordion">
                                        <table class="col-md-12">
                                            <tbody id="myTable{{$itens->id}}">
                                                <div class="card">
                                                    <div id="a{{$itens->id}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <div class="main-panel">
                                                                <!-- Navbar -->
                                                                <!-- End Navbar -->
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-lg-6 col-md-12">
                                                                            <div class="card">
                                                                                <div class="card-header card-header-primary">
                                                                                    <p class="card-category">@if (session('mensageRelatorio'))
                                                                                        <div class="alert alert-success" role="alert">
                                                                                            {{ session('mensageRelatorio') }}
                                                                                        </div>
                                                                                        @endif</p>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="tab-content">
                                                                                        <div class="tab-pane active" id="profile">
                                                                                            <table class="table table-hover">
                                                                                                <thead class="text-primary">
                                                                                                    <th>Empresa</th>
                                                                                                    <th>CNPJ</th>
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
                                                                                    <h5 class="card-title">Válidos <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="rigth" title="Será considerado manifestamente inexequível o preço cujo valor represente
menos de 70% (setenta por cento) da média aritmética dos demais preços analisados. Conforme Art.10 da Resolução 001/2020/CGN">
                                                                                        </i></h5>
                                                                                </div>
                                                                                <div class="card-body table-responsive">
                                                                                    <table class="table table-hover">
                                                                                        <thead class="text-primary">
                                                                                            <th></th>
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
                                                                        <div class="col-lg-6 col-md-12 mt-3">
                                                                            <div class="card">
                                                                                <div class="card-header card-header-warning">
                                                                                    <h5 class="card-title">Exequível <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="rigth" title="Será considerado excessivo o preço que for superior a 30% (trinta por cento) da
média aritmética dos demais valores avaliados.">
                                                                                        </i>
                                                                                    </h5>
                                                                                </div>
                                                                                <div class="card-body table-responsive">
                                                                                    <table class="table table-hover">
                                                                                        <thead class="text-primary">
                                                                                            <th></th>
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
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tbody>
                                        </table>
                                    </div>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </table>
        <script>
            $(document).ready(function() {
                //criando objeto empresa
                function converterParaEmpresa(empresas) {
                    return Array.from(empresas).map(function(empresa) {
                        var nome = empresa.children[0].textContent;
                        var cnpj = empresa.children[1].textContent;
                        var valorEmpresa = parseFloat(empresa.children[2].textContent);
                        var obj = creatObjetoEmpresa(nome, cnpj, valorEmpresa);
                        return obj;
                    });
                }

                function creatObjetoEmpresa(nomeEmpresa, cnpj, valor) {
                    return {
                        nome: nomeEmpresa,
                        cnpj: cnpj,
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
                    return empresasExequiveis.filter(empresa => empresa.status == 'Exequível');
                }
                //fim da criação objeto empresasExequiveis
                //Função responsável por calcular todo o processo de calculo da média e mediana
                function calcularMediaeMediana(empresas) {
                    // var status = empresas.map(empresa => empresa.status);
                    var valores = empresas.map(empresa => empresa.valor).sort();
                    if (valores.length < 3) {
                        $('#empresaFinal{{$itens->id}}').append("<label style='color:red'>Número de cotações mínimas não atingidas.</label>");
                        $('#MediaMediana{{$itens->id}}').append("<label style='color:red'>Número de cotações mínimas não atingidas.</label>");
                    } else {
                        var somaTodosQuadrados = 0;
                        var menorValor, totalValor, media, mediana, desvio, quadradoDesvio, variancia, coeficienteDeVariacao, desvioPadrao;

                        empresas.forEach(function(empresa) {
                            /*Soma todos os valores da lista de Exequiveis
                            totalValor = valores.reduce((a, b) => a + b) * empresas.length;
                            Não vai mais ser desta forma...**/
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

                function criarLinhaCoeficienteVariacao(media, desvio, quadradoDesvio, somaTodosQuadrados, variancia, desvioPadrao, coeficienteVariacao, mediana, menorValor, totalValor) {
                    var quantidadeItem = parseInt(document.getElementById('quantidadeItem{{$itens->id}}').textContent);
                    //var resultadoMenorValor
                    var totalValor = menorValor * quantidadeItem;
                    var colunaMedia = '<td>' + media.toFixed(2) + '</td>';
                    //var colunaDesvio = '<td>' + desvio + '</td>';
                    //var colunaQuadradoDesvio = '<td>' + quadradoDesvio + '</td>';
                    var colunaSomaTodosQuadrados = '<td>' + somaTodosQuadrados + '</td>';
                    var colunaVariancia = '<td>' + variancia.toFixed(2) + '</td>';
                    var colunaDesvioPadrao = '<td>' + desvioPadrao + '</td>';
                    var colunaCoeficienteVariacao = '<td>' + coeficienteVariacao + '</td>';
                    var colunaMediana = '<td>' + mediana.toFixed(2) + '</td>';
                    //var colunaMenorValor = '<td>' + resultadoMenorValor + '</td>';

                    var colunaTotalValor = '<td>' + totalValor + '</td>';
                    document.getElementById('valorTotal{{$itens->id}}').append(totalValor);
                    //Trazer o menor valor dos Exequiveis.
                    document.getElementById('menorValor{{$itens->id}}').append(menorValor);
                    if (colunaCoeficienteVariacao <= 25) {
                        document.getElementById('resultadoCotacao{{$itens->id}}').append('Media');
                        document.getElementById('resultadoCotacaoMediana{{$itens->id}}').append(media);

                        return '<tr>' + colunaCoeficienteVariacao + colunaVariancia + colunaDesvioPadrao + '</tr>'
                    } else {
                        document.getElementById('resultadoCotacao{{$itens->id}}').append('Mediana');
                        document.getElementById('resultadoCotacaoMediana{{$itens->id}}').append(mediana);
                        return '<tr>' + colunaCoeficienteVariacao + colunaVariancia + colunaDesvioPadrao + '</tr>'
                    }
                }

                function calcularPercentual(empresas) {
                    var valores = empresas.map(empresa => empresa.valor).sort();
                    if (valores.length < 3) {
                        $('#resultado{{$itens->id}}').append("<label style='color:red'>Número de cotações mínimas não atingidas.</label>");
                    } else {
                        empresas.forEach(function(empresa) {
                            var listaValores = valores.filter(valor => valor != empresa.valor);
                            var total = listaValores.reduce((a, b) => a + b);
                            var totalFinal = total / (empresas.length - 1);
                            var resultado = ((empresa.valor * 100) / totalFinal) - 100;
                            empresa.percentual = resultado;
                            if (resultado >= 30) {
                                // se o resultado for > ou = a 30 então o codigo insere na tabela o texto...

                                empresa.status = "<label style='color:red'>Excessivamente Elevado</label>"
                            } else {
                                // caso contrario o sistema retorna que é valido.
                                empresa.status = "Válido"
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
                    return empresas.filter(empresa => 'Válido' == empresa.status);
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
                            empresa.status = "<label style='color:red'> Inexequivel </label>";
                        } else {
                            // caso contrario o sistema retorna que é valido.
                            empresa.status = "Exequível"
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
                listaTamanhoEmpresas.push(empresasExequiveisFinal.length);
                finalizaProcesso(listaTamanhoEmpresas);

                function finalizaProcesso(empresas) {
                    //verifica se existe algum item com menos de 3 empresas cadastradas
                    var quantidadeEmpresasItem = empresas.find(valor => valor < 3);
                    if (quantidadeEmpresasItem < 3) {
                        document.getElementById('finalizarProcesso').disabled = true;
                        document.getElementById("demo{{$itens->id}}").style.color = "red";
                        document.getElementById("demo{{$itens->id}}").innerHTML = "Pendente";
                    } else {
                        document.getElementById("demo{{$itens->id}}").style.color = "green";
                        document.getElementById("demo{{$itens->id}}").innerHTML = "Concluído";
                        document.getElementById('finalizarProcesso').disabled = false;
                    }
                }
            });
        </script>
        @endforeach
        <script>
            //calcular quantidade de empresas
            var listaTamanhoEmpresas = [];
        </script>
    </div>
    <br><br>

    <div class="col-2">
        <a href="{{ url()->previous() }}" class="btn btn-info btn-icon-split">
            <span class="icon text-white-50">
                <i class="fa fa-arrow-left"></i>
            </span>
            <span class="text">Voltar</span>
        </a>
    </div>
    <div class="col-4">
        <a href="#" onclick="window.print()" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">Imprimir</span>
        </a>
    </div>
    </div>
    </footer>
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
<!-- End of Main Content -->