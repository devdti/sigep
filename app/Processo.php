<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    //
    protected $table = "processo";
    protected $fillable = [
        'nome','user_id', 'descricao','painel_de_precos','banco_de_precos','contratacoes_similares','pesquisa_publicada','pesquisa_fornecedores','justificativa','secretaria'
    ];
}
