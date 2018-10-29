@extends('mypage.layouts.master_pop')
@section('content')
<link rel="stylesheet" type="text/css" href="/assets/css/mypage/profile.css">
<div id="mypage_contents">
	<div class="inner">
			@include('mypage.profile.sidebar')

		<div class="right_contents">
			<div class="form account">
				<?php echo Form::model($user, array('id' => 'form', 'action' => array('Mypage\ProfileController@confirmAccount'))); ?>
					<table class="edit_form">
						<tr>
							<td><span class="required">必須</span><span class="item">名前</span></td>
							<td>
								<?php echo Form::text('name', null, ['maxlength' => '20', 'placeholder' => '例）スペース 太郎']); ?>
								<?php echo App\Helper::error($errors, ['name']); ?>
							</td>
						</tr>
						<tr>
							<td><span class="required">必須</span><span class="item">メールアドレス</span><span class="lower">半角英数字</span></td>
							<td>
								<?php echo Form::text('email', null, ['maxlength' => '100', 'placeholder' => '例）example@example.com']); ?>
								<?php echo App\Helper::error($errors, ['email']); ?>
							</td>
						</tr>
						<tr>
							<td><span class="required">必須</span><span class="item">ニックネーム	</span></td>
							<td>
								<?php echo Form::text('nickname', null, ['maxlength' => '20', 'placeholder' => '例）スペタロウ']); ?>
								<?php echo App\Helper::error($errors, ['nickname']); ?>
							</td>
						</tr>
						<tr>
							<td><span class="required">必須</span><span class="item">プロフィール画像</span><span class="lower">5メガバイトまで</span></td>
							<td>
								<!--<label class="fileup"><img src="<?php echo url('assets/mypage/img/file.png'); ?>" alt="">
								<input type="file">
								</label>-->
								
								<div id="profile-uploader">
									<p>
										<input type="file">
										<!--
										<label class="fileup"><img src="<?php echo url('assets/mypage/img/file.png'); ?>" alt="">
										<input type="file">
										</label>-->
									</p>
									<div>
										<ul class="media-container">
										</ul>
									</div>
									<div class="drag-area" style="display: none;">
										<span>アップロードするファイルをここにドロップ　(最大画像ファイルサイズ<?php echo ini_get('upload_max_filesize'); ?>バイト)</span>
									</div>
									
									<!-- 写真テンプレート -->
									<li class="media-template ui-state-default" style="display: none; width: 200px;">
										<input type="hidden" class="id">
										<input type="hidden" class="media_id">
										<img src="" class="preview img-responsive" style="display: block; max-width: 100%; height: auto;">
										<img src="<?php echo url('img/ico-delete.gif'); ?>" class="delete-media">
									</li>

								</div>





							</td>
						</tr>
						<tr>
							<td><span class="required">必須</span><span class="item">プロフィール</span><span class="lower">ゲストとしてのプロフィールを入力してください。</span></td>
							<td>
								<?php echo Form::textarea('profile', null, ['rows' => '6', 'placeholder' => '例）プロフィールを入力することで、スペースを借りる方にアピールすることができます。']); ?>
								<?php echo App\Helper::error($errors, ['profile']); ?>
							</td>
						</tr>
					</table>
				<?php echo Form::close(); ?>
			</div>
		</div>
	</div>
	<div class="submit_button"><a id="submit-button" href="javascript:void(0);">保存</a></div>
</div>
@stop

@section('script')
<script>
	
	$(function() {
		$('#submit-button').on('click', function() {
			$('#form').submit();
			return false;
		});

		//プロフィール画像
		var profileMediaList = <?php echo App\Media::jsonSingle($user->profile_media_id); ?>;
		var profileMedia = new Media({
			baseName: 'profile_media_id',
			mediaList: profileMediaList,
			uploader: 'profile-uploader',
			multiple: false
		});

	});
</script>
@stop
