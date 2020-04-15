<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado';
    protected $primaryKey = 'id';

    function vendas(){
    	return $this->hasMany('App\Venda', 'id', 'id_usuario');
    }
    function cliente(){
    	return $this->belongsTo('App\Cliente', 'id', 'id_usuario');
    }
}
