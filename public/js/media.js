//
// メディアクラス
//
var Media = function(options) {
	
	this.options = {
		baseName: 'mediaList',
		mediaList: [],
		uploader: 'media-uploader',
		thumbnail: '/host/media/thumbnail',
		uploadUrl: "/host/media/upload",
		fit: 0,
		width: 0,
		height: 0,
		multiple: true
	}
	
	if (options.baseName) {
		this.options.baseName = options.baseName;
	}
	if (options.mediaList) {
		this.options.mediaList = options.mediaList;
	}
	if (options.uploader) {
		this.options.uploader = options.uploader;
	}
	
	if (options.thumbnail) {
		this.options.thumbnail = options.thumbnail;
	}

	if (options.uploadUrl) {
		this.options.uploadUrl = options.uploadUrl;
	}

	if (options.fit) {
		this.options.fit = options.fit;
	}
	
	if (options.width) {
		this.options.width = options.width;
	}
	
	if (options.height) {
		this.options.height = options.height;
	}
	
	if (options.multiple !== undefined) {
		this.options.multiple = options.multiple;
	}
	
	this.mediaCount = 0; //options.mediaList.length;
	this.validMediaCount = 0;
	
	for (var index in this.options.mediaList) {
		var data = this.options.mediaList[index];
		this.appendMedia(data.media_id, data);
	}
	
	$.support.cors = true;
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		xhrFields: {
			withCredentials: true
		}
	});

	//初期化
	this.initialize();

};

//画像追加
Media.prototype.appendMedia = function(mediaId, data) {
	
	if (!this.options.multiple) {
		this.removeMedias();
	}
	
	var src = this.options.thumbnail + '/' + mediaId;
	if (this.options.width > 0) {
		src += '/' + this.options.width + '/' + this.options.height + '/' + this.options.fit;
	}
	
	var li = $('#' + this.options.uploader + ' .media-template').clone();
	li.removeAttr('id');
	
	var baseName;
	
	if (this.options.multiple) {
		baseName = this.options.baseName + '[' + this.mediaCount + ']';
		
		li.attr('class', 'media media-' + this.mediaCount).show();
		li.find('.id').attr('name', baseName + '[id]');
		li.find('.media_id').attr('name', baseName + '[media_id]').val(mediaId);
		li.find('img.preview').attr('src', src);
		li.find('.delete-media').data('index', this.mediaCount);
		
		if (data && data.id) {
			li.find('.id').val(data.id);
		}
	} else {
		
		baseName = this.options.baseName;
		
		li.attr('class', 'media media-' + this.mediaCount).show();
		li.find('.id').remove();
		li.find('.media_id').attr('name', baseName).val(mediaId);
		li.find('img.preview').attr('src', src);
		li.find('.delete-media').data('index', this.mediaCount);
		
		if (data && data.id) {
			li.find('.id').val(data.id);
		}
	}
	
	
	$('#' + this.options.uploader + ' .media-container').append(li);
	++this.mediaCount;
	++this.validMediaCount;

}

//画像削除
Media.prototype.removeMedias = function() {
	
	var mediaObject = this;
	$('#' + this.options.uploader + ' .media').each(function() {
		this.remove();
		--mediaObject.validMediaCount;
	});
	
}

//画像アップロード処理
Media.prototype.uploadFiles = function(files) {
	
	var mediaObject = this;
	var url = this.options.uploadUrl; //"/shop/media/upload";

	// FormDataオブジェクトを用意
	var fd = new FormData();

	// ファイルの個数を取得
	var filesLength = files.length;

	// ファイル情報を追加
	for (var i = 0; i < filesLength; i++) {
		fd.append("files[]", files[i]);
	}
	
	// Ajaxでアップロード処理をするファイルへ内容渡す
	$.ajax({
		url: url,
		type: 'POST',
		data: fd,
		processData: false,
		contentType: false,
		success: function(json) {
			console.log('ファイルがアップロードされました。');
			
			if (json.success) {
				for (var index in json.idList) {
					var mediaId = json.idList[index];
					mediaObject.appendMedia(mediaId, null);
				}
			}
			
		},
		dataType: 'json'
	});
}

//初期化
Media.prototype.initialize = function() {
	
	var mediaObject = this;
	var options = this.options;
	
	$('#' + this.options.uploader + ' .media-container').sortable();
	$('#' + this.options.uploader + ' .media-container').disableSelection();

	//ファイルをドロップした時の処理
	$('#' + this.options.uploader + ' .drag-area').bind('drop', function(e){
		// デフォルトの挙動を停止
		e.preventDefault();

		// ファイル情報を取得
		var files = e.originalEvent.dataTransfer.files;

		mediaObject.uploadFiles(files);
		$(this).removeClass('over');

	}).bind('dragenter', function(){
		// デフォルトの挙動を停止
		$(this).addClass('over');
		return false;
	}).bind('dragleave', function(){
		// デフォルトの挙動を停止
		$(this).removeClass('over');
		return false;
	}).bind('dragover', function(){
		// デフォルトの挙動を停止
		return false;
	});

	//ダミーボタンを押した時の処理
	$('#' + this.options.uploader + ' .media-button').click(function() {
		// ダミーボタンとinput[type="file"]を連動
		$('#' + options.uploader + ' input[type="file"]').click();
		return false;
	});

	$('#' + this.options.uploader + ' input[type="file"]').change(function(){
		// ファイル情報を取得
		var files = this.files;

		mediaObject.uploadFiles(files);
	});

	//画像削除ボタン
	$('#' + this.options.uploader + ' .media-container').on('click', '.delete-media', function() {
		var index = $(this).data('index');
		$('#' + options.uploader + ' .media-' + index).remove();
		--this.validMediaCount;
	});
	
};
