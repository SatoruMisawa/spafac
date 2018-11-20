@extends('host.layouts.master')

@section('content')
@include('host.layouts.sidebar')
<div class="content-wrapper" style="min-height: 622px;">
	<section class="content container-fluid">
		<div class="row">
			<div class="col-md-12">
				{{
				Form::open([
				'route' => ['host.space.attachment.create', $space->id],
				'method' => 'POST',
				'files' => true
				])
				}}
				@csrf
				<div>
					<div class="box box-info">
						<div class="box-header">
							<h1 class="box-title">スペース写真・動画</h1>
							<div class="pull-right box-tools"></div>
						</div>
						<div class="card row-space-4">
							<div class="card-header">
								<div class="SDR4G06kguti">
									<div class="FBtyNIKsrTb">必須</div>
									<div class="BMWerCSq5F">写真</div>
								</div>
							</div>
							@include('layouts.error', ['name' => 'images'])
							@include('layouts.error', ['name' => 'images.*'])
							<div class="card-body">
								<div class="row row-condensed row-space-4">
									<label class="text-right col-3">現在のスペース画像</label>
									<img class="BGDRI7k93ond5" src="https://spafac-storage.s3.amazonaws.com/uploads/profile_image/image/1/something.jpg"
									 alt="Something">
								</div>
								<div class="row row-condensed row-space-4">
									<label for="image-upload-button" class="btn btn-success btn-sm media-button text-right col-3">
										{{
										Form::file('images[]', [
										'id' => 'image-upload-button',
										'style' => 'display: none;',
										'multiple' => true,
										])
										}}
										<i class="fa fa-plus"></i> 新しいスペース画像を登録
									</label>
								</div>
								<p class="help-block">登録しているスペースの外観や内装、設備等の画像を最低1枚追加してください。推奨サイズは1260x840です。</p>
							</div>
						</div>
						<div>
							<div class="card-header">
								<div class="SDR4G06kguti">
									<div class="label bg-blue">任意</div>
									<div class="BMWerCSq5F">動画</div>
								</div>
							</div>
							@include('layouts.error', ['name' => 'video_url'])
							<div class="row">
								<div class="col-sm-6">
									<div class="input-group">
										{{
										Form::text(
										'video_url',
										null,
										[
										'class' => 'form-control',
										'placeholder' => 'https://'
										]
										)
										}}
									</div>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<input type="submit" name="commit" value="保存する" class="btn btn btn-primary btn-large row-space-4"
							 data-disable-with="処理中...">
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</section>
</div>
@endsection