<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //

    protected $table = "empresa";
    protected $fillable = [
        'id','user_id','processo_id','nome','cnpj','descricao'
    ];
}