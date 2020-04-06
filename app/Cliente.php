<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'id';
    
    function estado(){
    	return $this->belongsTo('App\Estado', 'id_estado', 'id');
    }
}
