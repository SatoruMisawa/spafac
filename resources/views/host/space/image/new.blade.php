@extends('host.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		スペース編集
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('host') }}"><i class="fa fa-dashboard"></i> ホーム</a></li>
	</ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
	@include('host.layouts.message', array('errors' => $errors))
	<div class="row">
		<div class="col-md-12">
			{{
				Form::open([
					'route' => ['host.facility.space.image.create', $facility->id, $space->id],
					'method' => 'POST',
					'files' => true
				])
			}}
			<div class="box box-info">
				<div class="box-header">
					<h3 class="box-title">写真・動画</h3>
					<div class="pull-right box-tools">
					</div>
				</div>
				<div class="box-body pad">
					<div class="form-group">
						<label><small class="label bg-red">必須</small> 写真</label>
						<p class="help-block">ゲストが実際に利用するスペース、設備等の画像を最低1枚追加してください。推奨サイズは1260x840です。ドラッグ＆ドロップで入れ替え可。クリックで拡大することができます。最大30枚まで追加できます。</p>
					</div>

					<div class="form-group {{ App\Helper::errorClass($errors, ['images', 'images.*']) }}">
						<div id="space-photo-uploader">
							{{ App\Helper::error($errors, ['images', 'images.*']) }}
							<div>
								<ul class="media-container">
								</ul>
							</div>
							<div class="fix"></div>
							<div class="drag-area">
								<span>アップロードするファイルをここにドロップ　(最大画像ファイルサイズ{{ ini_get('upload_max_filesize') }}バイト)</span>
							</div>
							<p>
								または、
								{{ 
									Form::file('images[]', [
										'id' => 'image-upload-button',
										'style' => 'display: none;',
										'multiple' => true,
									])
								}}
								<label for="image-upload-button" class="btn btn-success btn-sm media-button"><i class="fa fa-plus"></i> 新規写真の作成</label>
							</p>
							
							<!-- 写真テンプレート -->
							<li class="media-template ui-state-default" style="display: none; width: 135px; height: 180px;">
								<input type="hidden" class="id">
								<input type="hidden" class="media_id">
								<img src="" class="preview img-responsive">
								<img src="{{ url('img/ico-delete.gif') }}" class="delete-media">
							</li>

						</div>
					</div>
				</div>

				<div class="box-footer">
					<button type="submit" class="btn btn-default" disabled>保存して戻る</button>
					<button type="submit" class="btn btn-success pull-right">保存して進む</button>
				</div>
			</div>
			{{ Form::close() }}
		</div>
	</div>
</section>
<!-- /.content -->
@stop

@section('script')
@stop
