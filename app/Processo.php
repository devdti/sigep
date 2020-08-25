<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    //
    protected $table = "processo";
    protected $fillable = [
        'nome','user_id','protocolo','secretaria_id','referencia','referencia_doc','descricao','status','dataCriacao'
    ];
}
