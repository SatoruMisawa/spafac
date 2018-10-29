<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Common;
use Image;

class Media extends Model {
	
	const NO_IMAGE_PNG = 'img/no-image.png';
	
	use SoftDeletes;
	
	/**
	* The database table used by the model.
	*
	* @var string
	*/
	protected $table = 'medias';
	
	/**
	* The attributes excluded from the model's JSON form.
	*
	* @var array
	*/
	protected $dates = ['deleted_at'];
	
	
	/**
	* アップロード
	*/
	public static function uploadMedia($file) {
		
		if (!$file->isValid()) {
			return false;
		}
		
		$mimeType = $file->getClientMimeType();
		if ($mimeType != 'image/jpeg' && $mimeType != 'image/png' && $mimeType != 'image/gif') {
			return false;
		}
		
		$media = new self();
		$media->title = $file->getClientOriginalName();
		$media->mime_type = $mimeType;
		$media->original_name = $file->getClientOriginalName();
		$media->save();
		
		//移動
		$file->move($media->getFolder(), $media->getFileName());
		
		return $media;
	}
	
	/**
	* メディアリストJSON作成
	*/
	public static function jsonSingle($mediaId) {
		
		$list = array();
		if ($mediaId) {
			$list = array(['media_id' => $mediaId]);
		}
		
		return json_encode($list);
	}
	
	/**
	* メディアリストJSON作成
	*/
	public static function jsonMulti($mediaList) {
		
		if (!$mediaList) {
			$mediaList = array();
		}
		
		return json_encode($mediaList);
	}
	
	/**
	* メディア取得
	*/
	public static function getSingle($mediaList) {
		
		if (is_array($mediaList)) {
			$mediaData = current($mediaList);
			return $mediaData['media_id'];
		}
		return null;
	}
	
	/**
	* メディアフォルダ取得
	*/
	public function getFolder() {
		
		$path = storage_path('medias');
		
		return $path;
	}
	
	/**
	* ファイル名取得
	*/
	public function getFileName() {
		
		$path = Common::localFileName(sprintf('%08d_%s', $this->id, $this->original_name));
		
		return $path;
	}
	
	/**
	* ファイルパス取得
	*/
	public function getFilePath() {
		
		$path = $this->getFolder() . '/' . $this->getFileName();
		
		return $path;
	}
	
	/**
	* response image
	*/
	public function responseImage() {
		
		$path = $this->getFilePath();
		
		$image = Image::make(file_get_contents($path));
		
		return $image->response('jpg');
		
	}
	
	/**
	* response thumbnail
	*/
	public function responseFit($width = 150, $height = 150) {
		
		$path = $this->getFilePath();
		
		//$image = Image::make(file_get_contents($path));
		//$image->resize(150, 150);
		
		$cacheImage = Image::cache(function($image) use($path, $width, $height) {
			
			//$image->make($path)->resize($width, $height, function ($constraint) {
			//	$constraint->aspectRatio();
			//});
			$image->make($path)->orientate()->resize($width, $height);
			
		}, 5, true);
		
		//$image = Image::make($cacheImage);
		return $cacheImage->response($this->mime_type);
		
	}
	
	/**
	* response thumbnail
	*/
	public function responseThumbnail($fit, $width = null, $height = null) {
		
		$path = $this->getFilePath();
		
		//$image = Image::make(file_get_contents($path));
		//$image->resize(150, 150);
		
		$cacheImage = Image::cache(function($image) use($fit, $path, $width, $height) {
			
			if ($width && $height) {
				if ($fit) {
					//$image->make($path)->trim($width, $height);
					$image->make($path)->orientate()->fit($width, $height);
					//$image->make($path)->resize($width, $height, function ($constraint) {
					//	$constraint->aspectRatio();
					//	$constraint->upsize();
					//});
				} else {
					$image->make($path)->orientate()->resize($width, $height, function ($constraint) {
						$constraint->aspectRatio();
					});
				}
			} else {
				$image->make($path)->orientate();
			}
		}, 5, true);
		
		//$image = Image::make($cacheImage);
		return $cacheImage->response($this->mime_type);
		
	}
	
	/**
	* noImage
	*/
	public static function responseNoThumbnail($width = 150, $height = 150) {
		
		$path = public_path() . '/' . self::NO_IMAGE_PNG;
		
		$cacheImage = Image::cache(function($image) use($path, $width, $height) {
			
			$image->make($path)->fit($width, $height);
			
		}, 60, true);
		
		return $cacheImage->response('image/png');
	}
	
	/**
	* 指定されたファイルを出力
	*/
	public static function responseImageFile($path, $width = 150, $height = 150) {
		
		$path = public_path() . '/' . $path;
		
		$cacheImage = Image::cache(function($image) use($path, $width, $height) {
			
			$image->make($path)->fit($width, $height);
			
		}, 60, true);
		
		return $cacheImage->response();
		
	}
}