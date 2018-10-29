<?php

namespace App;

use App\MyModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpacePhoto extends Model
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
		'space_id', 'media_id', 'display_order'
	];
	
	/**
	* relations
	*/
	
	
}
