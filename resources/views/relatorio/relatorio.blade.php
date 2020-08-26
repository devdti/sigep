@extends('layouts.menulateral')
<!-- Begin Page Content -->
@section('content')
<!-- Begin Page Content -->
<div class="col-md-12" id="teste">
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Nome cotação : {{$processo->nome}}  - Protocolo : {{$processo->protocolo}}</h1>
        <p class="mb-4">Ao Finalizar Processo, novas alterações só poderam ser feitas com a Permição do administrador. <br><strong>Obs: Para finalizar o processo é necessário ter 3 empresas exequiveis</strong></p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Resultado Cotação</h4>
                @if(Session('alerta'))
                <strong class="alert alert-danger">{{Session('alerta')}}</strong>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <div id="accordion">
                            @foreach($item as $itens)

                            <!--script para filtro  -->

                            <table class="col-md-12">
                                <thead>
                                </thead>
                                <tbody id="myTable{{$itens->id}}">
                                    <td>
                                        <div class="card">
                                            <div class="card-header" id="headingOne{{$itens->id}}">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <h5>
                                                            <button class="btn btn-link mt-2" data-toggle="collapse" data-target="#a{{$itens->id}}" class="#a{{$itens->id}}" aria-expanded="true" aria-controls="collapseOne">
                                                                <h5>Número do item: {{$itens->numero}}</h5>
                                                            </button>
                                                            Status : <label for="" id="demo{{$itens->id}}"> </label>
                                                            <br>
                                                        </h5>
                                                        <label class="ml-3" style="margin-top:-40px">Descrição do item: {{$itens->descricao}}</label>
                                                    </div>
                                                    <div class="col-md5">
                                                        <button class="btn btn-link mt-2" data-toggle="collapse" data-target="#a{{$itens->id}}" class="#a{{$itens->id}}" aria-expanded="true" aria-controls="collapseOne">
                                                            <i class="fas fa-arrow-circle-down fa-3x"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-sm ml-3 ">

                                                        <label>Menor Valor: <strong>R$</strong> <strong for="" id="menorValor{{$itens->id}}"></strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label>Quantidade: <strong id="quantidadeItem{{$itens->id}}">{{$itens->quantidade}} {{$itens->unidade}}</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label>Valor total do Item: <strong>R$</strong> <strong for="" id="valorTotal{{$itens->id}}"></strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <br>Parâmetro Utilizado : <strong id="resultadoCotacao{{$itens->id}}"></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        Resultado da Mediana : <strong id="resultadoCotacaoMediana{{$itens->id}}"></strong>
                                                    </div>
                                                </div>
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
                                                                        <div class="card-header card-header-primary">
                                                                            <h5 class="card-title">Relação de Empresas</h5>
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
                                                                                            <th>Valor(R$)</th>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            @foreach($relatorios as $relatorio)
                                                                                            @if($itens->id == $relatorio->item_id)
                                                                                            <tr class="empresas{{$itens->id}}">
                                                                                                @foreach($empresas as $empresa)
                                                                                                @if($relatorio->empresa_id == $empresa->id)
                                                                                                <td>{{$empresa->nome}}</td>
                                                                                                <td>{{$empresa->cnpj}}</td>
                                                                                                <td>{{$relatorio->valor}}</td>
                                                                                                @endif
                                                                                                @endforeach
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
                                                                                    <th>Empresa</th>
                                                                                    <th>Valor(R$)</th>
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
                                                                                    <th>Empresa</th>
                                                                                    <th>Valor(R$)</th>
                                                                                    <th>Percentual</th>
                                                                                    <th>Status</th>
                                                                                </thead>
                                                                                <tbody id="empresaFinal{{$itens->id}}">
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12 mt-3 ">
                                                                    <div class="card">
                                                                        <div class="card-header card-header-warning">
                                                                            <h4 class="card-title">Parâmetros da Cotação</h4>
                                                                            <p class="card-category">
                                                                                Parâmetro Utilizado : <strong id="resultadoCotacaoB{{$itens->id}}"></strong> <br>
                                                                                Resultado da Mediana : <strong id="resultadoCotacaoMedianaB{{$itens->id}}"></strong>
                                                                            </p>
                                                                        </div>
                                                                        <div class="card-body table-responsive">
                                                                            <table class="table table-hover">
                                                                                <thead class="text-primary">
                                                                                    <!--<th>Desvio</th>-->
                                                                                    <!--<th>Quadrado do Desvio</th>-->
                                                                                    <th style="width: 28%;">Coeficiente de variação</th>
                                                                                    <th>Variância</th>
                                                                                    <th>Desvio Padrão</th>
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
                                        if (coeficienteVariacao <= 25) {
                                            document.getElementById('resultadoCotacao{{$itens->id}}').append('Média');
                                            document.getElementById('resultadoCotacaoMediana{{$itens->id}}').append(media);
                                            document.getElementById('resultadoCotacaoB{{$itens->id}}').append('Média');
                                            document.getElementById('resultadoCotacaoMedianaB{{$itens->id}}').append(media);


                                            return '<tr>' + colunaCoeficienteVariacao + colunaVariancia + colunaDesvioPadrao + '</tr>'
                                        } else {
                                            document.getElementById('resultadoCotacao{{$itens->id}}').append('Mediana');
                                            document.getElementById('resultadoCotacaoMediana{{$itens->id}}').append(mediana);

                                            document.getElementById('resultadoCotacaoB{{$itens->id}}').append('Mediana');
                                            document.getElementById('resultadoCotacaoMedianaB{{$itens->id}}').append(media);
                                            return '<tr>' + colunaCoeficienteVariacao + colunaVariancia + colunaDesvioPadrao + '</tr>'
                                        }
                                    }

                                    function calcularPercentual(empresas) {
                                        var valores = empresas.map(empresa => empresa.valor).sort();
                                        
                                        if (valores.length < 3) {
                                            $('#resultado{{$itens->id}}').append("<label style='color:red'>Número de cotações mínimas não atingidas.</label>");
                                        } else {

                                            empresas.forEach(function(empresa) {
                                                var listaValores = valores.filter(valor => valor);
                                                var j1 = 0.25 * (listaValores.length+1);
                                                var q1  = (listaValores[0]+listaValores[1])/2;
                                                var j3 = 0.75*(listaValores.length+1);
                                                var tamanho = listaValores.length;
                                                var q3 =(listaValores[tamanho-1]+listaValores[tamanho-2])/2;
                                                var total = listaValores.reduce((a, b) => a + b);
                                                var totalFinal = total / (empresas.length - 1);
                                                var resultado = ((empresa.valor * 100) / totalFinal) - 100;
                                                empresa.percentual = resultado;
                                                console.log(empresa.valor);
                                                if (empresa.valor > q1 || empresa.valor > q3) {
                                                    // se o resultado for > ou = a 30 então o codigo insere na tabela o texto...
                                                    //veriicar se os dados e eliminar os que nao corresponderem ao solicitado
                                                    listaValores.splice(listaValores.indexOf(empresa.valor), 1);
                                                    //empresa.status = "<label style='color:red'>Excessivamente Elevado</label>"
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
                        <div class="container">
                            <div class="row">
                                <div class="col-2">
                                    <a href="{{ url()->previous() }}" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Voltar</span>
                                    </a>
                                </div>
                                @if($processo->status != "Encerrado")
                                <!-- Button trigger modal -->
                                <form action="{{route('finalizarProcesso',$id)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="idProcesso" value="{{$id}}">
                                    <button disabled id="finalizarProcesso" type="submit" class="btn btn-primary">
                                        Finalizar Processo
                                    </button>
                                </form>
                            </div>

                        </div>

                        @else
                        <div class="col-3">
                            <a href="#" onclick="window.print()" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text">Imprimir Relatório simplificado</span>
                            </a>
                        </div>
                        <div class="col-3">
                            <a target="_blanc" href="{{route('imprimirRelatorio',$processo->id)}}" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text">Imprimir Relatório Detalhado</span>
                            </a>
                        </div>
                        <div class="col-3">
                            <a target="_blanc" href="{{route('relatorioPesquisa',$processo->id)}}" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text">Imprimir Relatório de Pesquisa</span>
                            </a>
                        </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
<!-- End of Main Content -->