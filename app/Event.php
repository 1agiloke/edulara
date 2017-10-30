<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;
    protected $dates = ['delete_at'];
    // protected $table = "events";
	public $timestamps = false;
	protected $primaryKey = "idevent";
	protected $keyType = "varchar";
	protected $guarded = [];
	
}
