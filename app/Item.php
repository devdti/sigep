<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table="item";
    protected $fillable = ['user_id','processo_id','descricao','numero','unidade','quantidade'];
}
