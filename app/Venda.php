<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = 'venda';
    protected $primaryKey = 'id';

    function cliente(){
    	return $this->belongTo('App\Cliente', 'id', 'id_cliente');
    }

    function item(){
    	return $this->hasMany('App\Item', 'id', 'id_venda');
    }
}
