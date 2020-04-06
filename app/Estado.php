<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado';
    protected $primaryKey = 'id';

    function vendas(){
    	return $this->hasMany('App\Venda', 'id_usuario', 'id');
    }
    function usuario(){
    	return $this->belongsTo('App\Usuario', 'id_usuario', 'id');
    }
}
