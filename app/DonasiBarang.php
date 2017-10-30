<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonasiBarang extends Model
{
	public $timestamps = false;
    protected $table = "donasibarnag";
    protected $primaryKey = "iddonbar";
    protected $keyType = "varchar";
}
