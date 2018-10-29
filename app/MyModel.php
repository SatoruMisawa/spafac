<?php

namespace App;

use Auth;
use DB;
use Illuminate\Database\Eloquent\Model;

trait MyModel
{
	
	/**
	* relations
	*/
	
	public static function addCollate($column) {
		
		$c = DB::raw($column . ' COLLATE utf8mb4_unicode_ci');
		return $c;
	}
	
	public function save(array $options = []) {
		
		//空文字を保存すると、「0」、「0000-00-00」等に保存されるため
		foreach ($this->attributes as $key => $value) {
			$this->attributes[$key] = $value === '' ? null : $value;
		}
		
		parent::save($options);
	}
	
	/**
	* リクエストから受け取ったデータで埋める
	*/
	public function fillRequestData($request) {
		
		foreach ($this->fillable as $item) {
			if ($request->exists($item)) {
				$this->setAttribute($item, $request->input($item));
			}
		}
		
	}
	
}
