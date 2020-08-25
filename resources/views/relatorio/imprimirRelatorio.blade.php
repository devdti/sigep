<!DOCTYPE html>

<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

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

        @media print {
            #buttonImprimir {
                display: none;
            }
        }
    </style>
</head>

<body style="max-width:100%; font-size: 14px;  ">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md"></div>
                <div class="col-md"></div>
                <div class="col-md">
                    <div class="col-4">
                        <a id="buttonImprimir" href="#" onclick="window.print()" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Imprimir</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 20px;">
            <img src="../img/logo_prefeituracamaragibe.png" width="30%">
        </div>
        <h5 style="margin-left: 105px;">{{$processo->id}}/{{ date('Y' ,strtotime($processo->created_at))}} - {{$processo->nome}}</h5>
        <p style="margin-left: 105px; margin-top: -12px;">SECRETARIA DEMANDANTE: SECAD</p>
        <br>
        @foreach($item as $itens)
        <strong>
            <p style="margin-bottom: -25px; font-size: 16px; margin-bottom: -25px;">Nº: {{$itens->numero}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$itens->descricao}}</p>
        </strong><br>
        Status : <label for="" id="demo{{$itens->id}}"> </label>
        <table>
            <thead>
                <tr>
                    <hr style="color: #000;">
                    <th>Parametro Utilizado
                    </th>
                    <th>Resultado Média/Mediana</th>
                    <th>Coeficiente de Variação</th>
                    <th>Variância</th>
                    <th>Desvio Padrão</th>
                    <th>Menor Preço Cotado</th>
                    <th>Quantidade</th>
                    <th>Valor Total</th>
                </tr>
            </thead>
            <tbody id="MediaMediana{{$itens->id}}" class="MediaMedianaEmpresa{{$itens->id}}">
                <tr>
                    <td><strong id="resultadoCotacao{{$itens->id}}"></strong></td>
                    <td><strong id="resultadoCotacaoMediana{{$itens->id}}"></strong></td>
                    <td><strong id="colunaCoeficienteVariacao{{$itens->id}}"> </strong></td>
                    <td><strong id="colunaVariancia{{$itens->id}}"> </strong></td>
                    <td><strong id="colunaDesvioPadrao{{$itens->id}}"> </strong></td>
                    <td><strong for="" id="menorValor{{$itens->id}}"></strong></td>
                    <td><strong id="quantidadeItem{{$itens->id}}">{{$itens->quantidade}}</strong></td>
                    <td><strong for="" id="valorTotal{{$itens->id}}"></strong></td>
                </tr>
            </tbody>
            <!-- Navbar -->
            <!-- End Navbar -->
            <div class="row">
                <table class="table table-hover" style="display: none;">
                    <thead class="text-primary">
                        <th>Empresa</th>
                        <th>CNPJ</th>
                        <th>Valor</th>
                        <th>Parametro de pesquisa</th>
                    </thead>
                    <tbody>
                        @foreach($relatorios as $key=>$relatorio)
                       
                            
                            @if( $itens->id == $relatorio->item_id)
                            <tr class="empresas{{$itens->id}}">
                            <td>{{$relatorio->nome}}</td>
                            <td>{{$relatorio->cnpj}}</td>
                            <td>{{$relatorio->valor}}</td>
                            <td>{{$relatorio->parametro_pesquisa}}</td>
                            </tr>
                            @endif
                        
                        @endforeach
                    </tbody>
                </table>
                <br>
                <div style="margin-top: -20px;">
                    <div class="row">
                        <div class="col-8">
                            <table style="width:2400; height: 3490">
                                <thead class="text-primary">
                                    <th>Empresa </th>
                                    <th>Valor</th>
                                    <th>Percentual</th>
                                    <th>Avaliação de Válidade</th>
                                    <th>Parâmetro de pesquisa</th>
                                    <!-- <th>Data</th>-->
                                </thead>
                                <tbody id="resultado{{$itens->id}}" class="resultEmpresa{{$itens->id}}">
                                </tbody>
                            </table>
                        </div>
                        <div class="col-4" style="width: 30px; margin-top:-22px;">
                            <div>
                                <div class="card-body table-responsive">
                                    <table style="max-width: 100%;">
                                        <thead class="text-primary">
                                            <th>Empresa </th>
                                            <th>Percentual</th>
                                            <th>Avaliação de Exequível </th>
                                        </thead>
                                        <tbody id="empresaFinal{{$itens->id}}" style="height: 33px;">
                                        </tbody>
                                    </table>
                                </div>
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
                        var parametroPesquisa = empresa.children[3].textContent;
                        var obj = creatObjetoEmpresa(nome, cnpj, valorEmpresa, parametroPesquisa);
                        return obj;
                    });
                }

                function creatObjetoEmpresa(nomeEmpresa, cnpj, valor, parametroPesquisa) {
                    return {
                        nome: nomeEmpresa,
                        cnpj: cnpj,
                        valor: valor,
                        mediaDosDemais: null,
                        percentual: null,
                        status: null,
                        parametroPesquisa: parametroPesquisa
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
                function creatObjetoEmpresaExequivel(nomeEmpresa, valor, percentual, status, ) {
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

                function criarLinhaCoeficienteVariacao(media, desvio, quadradoDesvio, somaTodosQuadrados, variancia, desvioPadrao, coeficienteVariacao, mediana, menorValor, totalValor) {
                    var quantidadeItem = parseInt(document.getElementById('quantidadeItem{{$itens->id}}').textContent);
                    //var resultadoMenorValor
                    var totalValor = menorValor * quantidadeItem;
                    var colunaMedia = '<td>' + media.toFixed(2) + '</td>';
                    //var colunaDesvio = '<td>' + desvio + '</td>';
                    //var colunaQuadradoDesvio = '<td>' + quadradoDesvio + '</td>';
                    var colunaSomaTodosQuadrados = '<td>' + somaTodosQuadrados + '</td>';
                    var colunaVariancia = variancia.toFixed(2);
                    var colunaDesvioPadrao = desvioPadrao;
                    var colunaCoeficienteVariacao = coeficienteVariacao;
                    var colunaMediana = '<td>' + mediana.toFixed(2) + '</td>';
                    //var colunaMenorValor = '<td>' + resultadoMenorValor + '</td>';
                    var colunaTotalValor = '<td>' + totalValor + '</td>';
                    document.getElementById('valorTotal{{$itens->id}}').append(totalValor);
                    //Trazer o menor valor dos Exequiveis.
                    document.getElementById('menorValor{{$itens->id}}').append(menorValor);
                    if (colunaCoeficienteVariacao <= 25) {
                        document.getElementById('resultadoCotacao{{$itens->id}}').append('Média');
                        document.getElementById('resultadoCotacaoMediana{{$itens->id}}').append(media);
                        document.getElementById('colunaCoeficienteVariacao{{$itens->id}}').append(colunaCoeficienteVariacao);
                        document.getElementById('colunaVariancia{{$itens->id}}').append(colunaVariancia);
                        document.getElementById('colunaDesvioPadrao{{$itens->id}}').append(colunaDesvioPadrao);
                    } else {
                        document.getElementById('resultadoCotacao{{$itens->id}}').append('Mediana');
                        document.getElementById('resultadoCotacaoMediana{{$itens->id}}').append(mediana);
                        document.getElementById('colunaCoeficienteVariacao{{$itens->id}}').append(colunaCoeficienteVariacao);
                        document.getElementById('colunaVariancia{{$itens->id}}').append(colunaVariancia);
                        document.getElementById('colunaDesvioPadrao{{$itens->id}}').append(colunaDesvioPadrao);
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
                        var linhaEmpresa = criarLinhaExequivel(empresa, "empresaFinalExequivel");
                        $('#empresaFinal{{$itens->id}}').append(linhaEmpresa);
                    })
                }

                function criarLinha(empresa, classe) {
                    var colunaNome = '<td>' + empresa.nome + '</td>';
                    var colunaValor = '<td>' + empresa.valor + '</td>';
                    var colunaPercentual = '<td>' + empresa.percentual.toFixed(2) + '</td>';
                    var colunaStatus = '<td>' + empresa.status + '</td>';
                    var parametroPesquisa = '<td>' + empresa.parametroPesquisa + '</td>';
                    return '<tr class="' + classe + '{{$itens->id}}"> ' + colunaNome + colunaValor + colunaPercentual + colunaStatus + parametroPesquisa + '</tr>'
                }

                function criarLinhaExequivel(empresa, classe) {
                    var colunaNome = '<td>' + empresa.nome + '</td>';
                    var colunaValor = '<td  style="display:none">' + empresa.valor + '</td>';
                    var colunaPercentual = '<td>' + empresa.percentual.toFixed(2) + '</td>';
                    var colunaStatus = '<td>' + empresa.status + '</td>';
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
                            empresa.status = "<label style='color:red'> Inexequível </label>";
                        } else {
                            // caso contrario o sistema retorna que é valido.
                            empresa.status = "Exequível"
                        }
                    });
                }
                var empresasHtml = document.getElementsByClassName('empresas{{$itens->id}}');
                console.log(empresasHtml);
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
        <br><br>
        @endforeach
        <script>
            //calcular quantidade de empresas
            var listaTamanhoEmpresas = [];
        </script>
    </div>
    <br><br>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-3">
                <strong>
                    <p>_____________________________</p>
                </strong>
                <strong>
                    <p style="margin-top: -15px;">Nome Usuário:</p>
                </strong>
                <strong>
                    <p style="margin-top: -15px;"> Codigo Identificador:</p>
                </strong>
            </div>
            <div class="col-2"></div>
            <div class="col-3">
                <strong>
                    <p>_____________________________</p>
                </strong>
                <strong>
                    <p style="margin-top: -15px;">Nome Diretor:</p>
                </strong>
                <strong>
                    <p style="margin-top: -15px;">Codigo Identificador:</p>
                </strong>
            </div>
            <div class="col-3"></div>
        </div>

    </div>
    <br><br>
    <hr style="color:#000; background:#000;">
    <div class="container">
        <div class="col-md-12">
            <p>Observações:</p>
            <br><br><br><br>
        </div>

        <div>
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