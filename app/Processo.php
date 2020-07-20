<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    //
    protected $table = "processo";
    protected $fillable = [
        'nome','user_id', 'descricao','parametro_1','parametro_2','justificativa_k','justificativa_l'
    ];
}
