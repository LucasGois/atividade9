<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'id';
    
    function estado(){
    	return $this->hasOne('App\Estado', 'id', 'id_estado');
    }

    function venda(){
    	return $this->hasMany('App\Venda', 'id', 'id_cliente');
    }
}
