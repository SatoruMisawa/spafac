<?php

namespace App;

class MyValidator extends \Illuminate\Validation\Validator {
	
	var $accessesMessage = '';
	
	protected function getMessage($attribute, $rule) {
		
		if ($attribute == 'rule') {
			
		}
		return parent::getMessage($attribute, $rule);
	}
	
	/**
	* 空欄
	*/
	public function validateEmpty($attribute, $value, $parameters) {
		return empty($value);
	}
	
	/**
	* 郵便番号
	*/
	public function validateZip($attribute, $value, $parameters) {
		return preg_match("/^[0-9]{3}[0-9]{4}$/", $value);
	}
	
	/**
	* 電話番号
	*/
	public function validateTel($attribute, $value, $parameters) {
		return preg_match("/^[0-9]{2,4}[0-9]{2,4}[0-9]{3,4}$/", $value);
	}
	
	/**
	* 半角カナ
	*/
	public function validateHankakuKana($attribute, $value, $parameters) {
		
		$regex = '{^(
			(\xef\xbd[\xa6-\xbf]) # 半角カタカナ
			|(\xef\xbe[\x80-\x9f]) # 半角カタカナ
			|[0-9a-zA-Z ]     # 半角英数字空白
			)+$}x';
		return preg_match($regex, $value, $match);
	}
	
	/**
	* 全角カナ
	*/
	public function validateZenkakuKana($attribute, $value, $parameters) {
		
		$regex = '{^(
			(\xe3\x82[\xa1-\xbf]) # カタカナ
			|(\xe3\x83[\x80-\xbe]) # カタカナ
			|(\xef\xbc[\x90-\x99]) # 全角数字
			|[ ]     # 半角空白
			|(\xe3\x80\x80)   # 全角スペース
			|[a-zA-Z0-9-/]      # 半角英数字記号
			)+$}x';
		return preg_match($regex, $value, $match);
	}
	
	// /**
	// * パスワードベリファイ
	// */
	// public function validatePasswordVerify($attribute, $value, $parameters) {
		
	// 	$hash = $parameters[0];
	// 	return password_verify($value, $hash);
	// }
	
}