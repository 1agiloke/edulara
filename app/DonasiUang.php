<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonasiUang extends Model
{
	public $timestamps = false;
    protected $table = "donasiuang";
    protected $keyType = "varchar";
	protected $guarded = [];    
}
