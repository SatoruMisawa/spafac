<?php

namespace App\Http\Controllers\Host;

use App\Media;
use App\Http\Controllers\Host\Controller as HostController;
use Illuminate\Http\Request;

/**
 * メディア管理
 */
class MediaController extends HostController
{

	/**
	* 画像アップロード
	*/
	public function upload(Request $request) {
		
		$files = $request->file('files');
		
		$idList = array();
		foreach ($files as $file) {
			
			$media = Media::uploadMedia($file);
			if ($media) {
				$idList[] = $media->id;
			}
		}
		
		$success = true;
		$result = compact('success', 'idList');
		
		return response()->json($result);
	}
	
	/**
	* 画像アップロード for CKEditor
	*/
	public function upload4CKEditor(Request $request) {
		
//		Array
//		(
//		    [upload] => Array
//		        (
//		            [name] => img_tg01.jpg
//		            [type] => image/jpeg
//		            [tmp_name] => /tmp/phpYrgKo0
//		            [error] => 0
//		            [size] => 39277
//		        )
//
//		)
		
		$uploaded = 0;
		$fileName = null;
		$url = null;
		$error = null;
		
		$file = $request->file('upload');
		$media = Media::uploadMedia($file);
		if ($media) {
			$uploaded = 1;
			$fileName = $file->getClientOriginalName();
			//$url = url('shop/media/thumbnail', $media->id);
			$url = url('page/' . $this->getShop()->id . '/media/thumbnail', $media->id);
		}
		
		$result = compact('uploaded', 'fileName', 'url');
		
		return response()->json($result);
		
	}
	
	/**
	* 画像アップロード for CKEditor
	*/
	public function upload4CKEditor2(Request $request) {
		
//		Array
//		(
//		    [CKEditor] => content
//		    [CKEditorFuncNum] => 1
//		    [langCode] => ja
//		)
//		Array
//		(
//		    [upload] => Array
//		        (
//		            [name] => img_tg01.jpg
//		            [type] => image/jpeg
//		            [tmp_name] => /tmp/phpYrgKo0
//		            [error] => 0
//		            [size] => 39277
//		        )
//
//		)
		
		$funcNum = $_GET[ 'CKEditorFuncNum' ];
		$url = '';
		$message = '';
		
		$file = $request->file('upload');
		$media = Media::uploadMedia($file);
		if ($media) {
			//$url = url('shop/media/thumbnail', $media->id);
			$url = url('page/' . $this->getShop()->id . '/media/thumbnail', $media->id);
		}
		
		$result = "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction(";
		$result .= $funcNum . ", '" . $url . "', '" . $message . "')";
		$result .= "</script>";
		
		echo $result;
	}
	
	/**
	* 画像
	*/
	public function thumbnail($media = null, $width = null, $height = null, $fit = false) {
		
		if ($media) {
			return $media->responseThumbnail($fit, $width, $height);
		}
		
		//画像無し
		return Media::responseNoThumbnail($width, $height);
		
	}
	

}
