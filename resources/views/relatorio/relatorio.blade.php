@extends('layouts.menulateral')
<!-- Begin Page Content -->
@section('content')
<!-- Begin Page Content -->
<div class="col-md-12" id="teste">
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Resultados</h1>
        <p class="mb-4">Ao Finalizar Processo, alterações só poderam ser feitas com a Permição do administrador. <br><strong>Obs: Para finalizar o processo é necessário ter ao menos 1 empresa com 3 empresas exequiveis</strong></p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Cotação</h4><br>
                @if(Session('alerta'))
                <strong class="alert alert-danger">{{Session('alerta')}}</strong>
                @endif
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
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <h5>
                                                            <button class="btn btn-link" data-toggle="collapse" data-target="#a{{$itens->id}}" aria-expanded="true" aria-controls="collapseOne">
                                                                Numero do item: {{$itens->numero}}
                                                            </button>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <h5>Cotação : {{$processo->nome}}</h5>
                                                    </div>
                                                    <div class="col-sm">
                                                        <h5>Valor Total : <label for="" id="valorTotal{{$itens->id}}"></label></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <h5>Secretaria : {{$processo->secretaria}}</h5>
                                                    </div>
                                                    <div class="col-sm">
                                                        <h5>Menor Valor :<label for="" id="menorValor{{$itens->id}}"></label></h5>
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
                                                                        <div class="card-header card-header-tabs card-header-primary">
                                                                            <h4 class="card-title">Planilha inicial</h4>
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
                                                                                            <th>Nome Empresa</th>
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
                                                                            <h4 class="card-title">Validos</h4>
                                                                        </div>
                                                                        <div class="card-body table-responsive">
                                                                            <table class="table table-hover">
                                                                                <thead class="text-primary">
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
                                                                <div class="col-lg-6 col-md-12 mt-3">
                                                                    <div class="card">
                                                                        <div class="card-header card-header-warning">
                                                                            <h4 class="card-title">EXEQUÍVEL</h4>
                                                                            <p class="card-category">New employees on 15th September, 2016</p>
                                                                        </div>
                                                                        <div class="card-body table-responsive">
                                                                            <table class="table table-hover">
                                                                                <thead class="text-primary">
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
                                                                <div class="col-lg-6 col-md-12 mt-3 ">
                                                                    <div class="card">
                                                                        <div class="card-header card-header-warning">
                                                                            <h4 class="card-title">Resultado da Cotação</h4>
                                                                            <p id="resultadoCotacao{{$itens->id}}" class="card-category"></p>
                                                                        </div>
                                                                        <div class="card-body table-responsive">
                                                                            <table class="table table-hover">
                                                                                <thead class="text-primary">
                                                                                    <!--<th>Desvio</th>-->
                                                                                    <!--<th>Quadrado do Desvio</th>-->
                                                                                    <th>Coeficiente de variação</th>
                                                                                    <th>Variancia</th>
                                                                                    <th>Desvio Padrao</th>
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

                                    function criarLinhaCoeficienteVariacao(media, desvio, quadradoDesvio, somaTodosQuadrados, variancia, desvioPadrao, coeficienteVariacao, mediana, menorValor, totalValor) {
                                        var colunaMedia = '<td>' + media.toFixed(2) + '</td>';
                                        //var colunaDesvio = '<td>' + desvio + '</td>';
                                        //var colunaQuadradoDesvio = '<td>' + quadradoDesvio + '</td>';
                                        var colunaSomaTodosQuadrados = '<td>' + somaTodosQuadrados + '</td>';
                                        var colunaVariancia = '<td>' + variancia.toFixed(2) + '</td>';
                                        var colunaDesvioPadrao = '<td>' + desvioPadrao + '</td>';
                                        var colunaCoeficienteVariacao = '<td>' + coeficienteVariacao + '</td>';
                                        var colunaMediana = '<td>' + mediana.toFixed(2) + '</td>';
                                        var colunaMenorValor = '<td>' + menorValor + '</td>';
                                        var colunaTotalValor = '<td>' + totalValor + '</td>';
                                        document.getElementById('valorTotal{{$itens->id}}').append(totalValor);
                                        document.getElementById('menorValor{{$itens->id}}').append(menorValor);
                                        document.getElementById('finalizarProcesso').disabled = false;
                                        if (colunaCoeficienteVariacao <= 25) {
                                            document.getElementById('resultadoCotacao{{$itens->id}}').append(' Resultado Media : ' + media);
                                            return '<tr>' + colunaCoeficienteVariacao + colunaVariancia + colunaDesvioPadrao + '</tr>'
                                        } else {
                                            document.getElementById('resultadoCotacao{{$itens->id}}').append('Parametro Utilizado : Mediana -  Resultado Mediana : ' + mediana);
                                            return '<tr>' + colunaCoeficienteVariacao + colunaVariancia + colunaDesvioPadrao + '</tr>'
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
                                    <a href="{{ url()->previous() }}" class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Voltar</span>
                                    </a>
                                </div>
                                @if($processo->status != "Encerrado")
                                <!-- Button trigger modal -->
                                <button id="finalizarProcesso" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Finalizar Processo
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Selecione os parametros de pesquisa para finalizar o processo</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('finalizarProcesso',$id)}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="idProcesso" value="{{$id}}">
                                                    <div class="checkbox">
                                                        <label><input name="painel_de_precos" type="checkbox" value="Painel De preços">Painel De preços</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input name="banco_de_precos" type="checkbox" value="Portal do banco de preços">Portal do banco de preços</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input name="contratacoes_similares" type="checkbox" value="Contratações similares de outros entes públicos">Contratações similares de outros entes públicos</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input name="pesquisa_publicada" type="checkbox" value="Pesquisa publicada em mídia especializada">Pesquisa publicada em mídia especializada</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input name="pesquisa_fornecedores" type="checkbox" value="Pesquisa com os fornecedores">Pesquisa com os fornecedores</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input name="justificativa" type="file">Pesquisa com os fornecedores</label>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <input type="submit" class="btn btn-success" value="Finalizar Processo">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>


                                        </div>
                                    </div>
                                </div>


                                @else
                                <div class="col-4">
                                    <a onclick="window.print()" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Imprimir</span>
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