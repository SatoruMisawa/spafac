<?php

namespace App;

use DB;
use App\MyModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpacePurpose extends Model
{
	use MyModel;
	use SoftDeletes;
	
	/**
	* The database table used by the model.
	*
	* @var string
	*/
	//protected $table = '';
	
	/**
	* The attributes excluded from the model's JSON form.
	*
	* @var array
	*/
	protected $dates = ['deleted_at'];
	
	/**
	* The attributes that are mass assignable.
	*/
	protected $fillable = [
	];
	
	/**
	* relations
	*/
	public function purpose() {
		return $this->belongsTo('App\Purpose');
	}
}
