<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = 'venda';
    protected $primaryKey = 'id';

    function item(){
    	return $this->hasMany('App\Item', 'id_venda', 'id');
    }
}
