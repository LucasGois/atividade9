<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'Item';
    protected $primaryKey = 'id';

    function venda(){
    	return $this->hasOne('App\Venda', 'id', 'id_venda');
    }

    function item(){
    	return $this->hasOne('App\Produto', 'id', 'id_produto');
    }
}
