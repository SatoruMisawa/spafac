<?php

namespace App;

class Common {
	
	public static function localFileName($org) {
		
		if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
			//xampp対応。Windows系の場合、文字コードを変換
			$local = mb_convert_encoding($org, 'CP932', 'UTF-8');
		} else {
			$local = $org;
		}
		
		return $local;
	}

}
