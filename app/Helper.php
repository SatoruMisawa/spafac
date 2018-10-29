<?php
namespace App;

class Helper {
	
	/**
	* エラー表示
	*/
	public static function error($errors, $keys) {
		
		if (!is_array($keys)) {
			$keys = (array)$keys;
		}
		
		$html = '';
		foreach ($keys as $key) {
			if ($errors->has($key)) {
				$html .= '<p><label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>' . e($errors->first($key)) . '</label><p>';
			}
		}
		return $html;
	}
	
	/**
	* エラー表示
	*/
	public static function errorClass($errors, $keys) {
		
		if (!is_array($keys)) {
			$keys = (array)$keys;
		}
		foreach ($keys as $key) {
			if ($errors->has($key)) {
				return 'has-error';
			}
		}
		return '';
	}
	
	/**
	* ソートヘッダー
	*/
	public static function sortHeader($url, $sort, $current, $params = null, $queryString = null) {
		
		$currentSort = $current;
		$currentOrder = '';
		
		if ($current) {
			if (!preg_match('/^(-?)(.+)$/u', $current, $matches)) {
				return false;
			}
			$currentOrder = $matches[1];
			$currentSort = $matches[2];
		}
		
		if ($currentSort == $sort) {
			$order = $currentOrder == '-' ? '' : '-';
		} else {
			$order = '';
		}
		
		if (!is_array($params)) {
			$params = array();
		}
		
		$link = url($url, $params);
		
		if (!is_array($queryString)) {
			$queryString = array();
		}
		$queryString['sort'] = $order . $sort;
		$link .= '?' . http_build_query($queryString);
		
		return $link;
	}
	
	/**
	* 数値フォーマット
	*/
	public static function formatNumber($num, $digit = 0) {
		
		if (!strlen($num) || !is_numeric($num)) {
			return '';
		}
		
		return number_format($num, $digit);
	}
	
	/**
	* 数値フォーマット(nullは0を表示)
	*/
	public static function formatNumberZ($num, $digit = 0) {
		
		if (!strlen($num) || !is_numeric($num)) {
			$num = 0;
		}
		
		return number_format($num, $digit);
	}
	
	/**
	* 率(%)
	*/
	public static function formatPercentage($numerator, $denominator, $digit = 0) {
		
		if (!$denominator) {
			return '-';
		}
		
		return number_format($numerator / $denominator * 100, $digit) . '%';
	}
	
	/**
	* 和暦
	*/
	public static function formatWareki($date = '') {
		
		// 明治 1868/01/25
		// 大正 1912/07/30
		// 昭和 1926/12/25
		// 平成 1989/01/08
		
		if (preg_match('/^[0-9]{4}$/u', $date)) {
			$date = $date . '-01-01';
		}
		
		$tm = time();
		if ($date) {
			$tm = strtotime($date);
		}
		$d = intval(strftime('%Y%m%d', $tm));
		$y = intval(date('Y', $tm));
		$g = '';
		
		if ($d >= 19890108) {
			$y -= (1989 - 1);
			$g = '平成';
		} else if ($d >= 19261225) {
			$y -= (1926 - 1);
			$g = '昭和';
		} else if ($d >= 19120730) {
			$y -= (1912 - 1);
			$g = '大正';
		} else {
			$y -= (1868 - 1);
			$g = '明治';
		}
		
		return $g . $y . '年';
	}
	
	/**
	* 日付フォーマット
	*/
	public static function formatDate($date, $fmt = '%Y年%m月%d日') {
		
		if (empty($date)) {
			return '';
		}
		
		$s = strftime($fmt, strtotime($date));
		$s = preg_replace(
			array('/Sun/u', '/Mon/u', '/Tue/u', '/Wed/u', '/Thu/u', '/Fri/u', '/Sat/u')
			, array('日', '月', '火', '水', '木', '金', '土')
			, $s);
		
		return $s;
	}
	
	/**
	* 日付フォーマット2
	*/
	public static function formatDate2($date, $fmt = 'Y年n月j日') {
		
		if (empty($date)) {
			return '';
		}
		
		$s = date($fmt, strtotime($date));
		$s = preg_replace(
			array('/Sun/u', '/Mon/u', '/Tue/u', '/Wed/u', '/Thu/u', '/Fri/u', '/Sat/u')
			, array('日', '月', '火', '水', '木', '金', '土')
			, $s);

		return $s;
	}
	
	/**
	* 日付フォーマットE
	*/
	public static function formatDateE($date, $fmt = 'Y/n/j') {
		
		if (empty($date)) {
			return '';
		}
		
		$s = date($fmt, strtotime($date));

		return $s;
	}
	
	/**
	* 時刻フォーマット
	*/
	public static function formatTime($time) {
		
		if (!preg_match('/^([0-9]{2})([0-9]{2})$/u', $time, $matches)) {
			return '';
		}
		
		$s = sprintf('%d:%02d', $matches[1], $matches[2]);
		return $s;
	}
	
	/**
	* 時刻フォーマット
	*/
	public static function formatTimeRange($time1, $time2) {
		
		$s1 = self::formatTime($time1);
		$s2 = self::formatTime($time2);
		
		$s = $s1;
		if (strlen($s)) {
			$s .= ' ～ ';
		}
		$s .= $s2;
		
		return $s;
	}
	
	/**
	* コードフォーマット
	*/
	public static function formatCode($list, $key) {
		if (!isset($list[$key])) {
			return '';
		}
		return $list[$key];
	}
	
	/**
	* strimwidth
	*/
	public static function strimwidth($str, $width) {
		
		$str = strip_tags($str);
		$str = mb_strimwidth($str, 0, $width, '...');
		
		return $str;
		
	}
	
	/**
	* リンク
	*/
	public static function convertLink($text) {
		$text = e($text);
		$text = preg_replace('/((http:|https:)\/\/[\x21-\x26\x28-\x7e]+)/i', '<a target="_blank" href="$1">$1</a>', $text);
		return $text;
	}
	

}

