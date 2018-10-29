
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="/assets/css/mypage/profile.css">

<style>

</style>
<div id="mypage_contents">
	<div class="inner">
			<?php echo $__env->make('mypage.profile.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="right_contents">
			<div class="form contact">
				<?php echo Form::model($user, array('id' => 'form', 'action' => array('Mypage\ProfileController@confirmContact'), 'class' => 'h-adr')); ?>
					<input type="hidden" class="p-country-name" value="Japan">
					<table class="edit_form myaccout">
						<tr>
							<td><span class="required">必須</span><span class="item">氏名</span><span class="lower">登録者の氏名を入力してください。</span></td>
							<td>
								<?php echo Form::text('name1', null, ['maxlength' => '20', 'placeholder' => '例）スペース']); ?>
								<?php echo Form::text('name2', null, ['maxlength' => '20', 'placeholder' => '例）太郎']); ?>
								<?php echo App\Helper::error($errors, ['name1', 'name2']); ?>
							</td>
						</tr>
						<tr>
							<td><span class="required">必須</span><span class="item">電話番号</span><span class="lower">ハイフン無しの半角数字。</span></td>
							<td>
								<?php echo Form::text('tel', null, ['maxlength' => '20', 'style' => 'width: 150px;', 'placeholder' => '08012345678']); ?>
								<?php echo App\Helper::error($errors, ['tel']); ?>
							</td>
						</tr>
						<tr>
							<td><span class="any">任意</span><span class="item">電話番号認証</span><br>
<span class="lower">※電話番号認証すると認証済みアカウントとなり、予約リクエストが承認されやすくなります。</span></td>
						</tr>
						<tr>
							<td><a class="tel_code" href="">携帯電話に認証コードを送信する</a></td>
							<td>
								<p>※電話番号が、固定電話番号や海外の電話番号等の場合は認証できません。<br>詳しくは<a href="">ヘルプページ</a>をご確認ください。</p>
							</td>
						</tr>
						<tr class="job">
							<td><span class="any">任意</span><span class="item">業種</span><?php echo Form::select('industry_id', ['' => '選択してください'] + $industryList, null, []); ?></td>
							<td><span class="any">任意</span><span class="item">職種</span>
								<?php echo Form::select('job_id', ['' => '選択してください'] + $jobList, null, []); ?>	</td>
						</tr>
						<tr class="job">
							<td><span class="required">必須</span><span class="item">法人・団体</span><span class="lower">法人、団体の場合はチェックを入れてください。</span></td>
							<td class="check">
								<label>
								<input type="hidden" name="corporation" value="0">
								<?php echo Form::checkbox('corporation', 1, null, ['id' => 'corporation']); ?>法人・団体
								</label>
							</td>
						</tr>
						<tr class="corporation job">
							<td><span class="required">必須</span><span class="item">法人・団体名</span></td>
							<td>
								<?php echo Form::text('corporation_name', null, ['class' => '', 'maxlength' => '100']); ?>
								<?php echo App\Helper::error($errors, ['corporation_name']); ?>
							</td>
						</tr>
						<tr class="corporation">
							<td><span class="any">任意</span><span class="item">部署名・肩書</span></td>
							<td>
								<?php echo Form::text('department_name', null, ['class' => '', 'maxlength' => '100']); ?>
								<?php echo App\Helper::error($errors, ['department_name']); ?>
							</td>
						</tr>
						<tr class="job">
							<td><span class="required">必須</span><span class="item">郵便番号</span><br>
<span class="lower">ハイフン無しの半角数字。入力すると住所が自動補完されます。</span></td>
							<td>
								<?php echo Form::text('zip', null, ['class' => 'p-postal-code', 'maxlength' => '7', 'style' => 'width: 100px;', 'placeholder' => '例）1234567']); ?>
								<?php echo App\Helper::error($errors, ['zip']); ?>
							</td>
						</tr>
						<tr class="address_type">
							<td><span class="required">必須</span><span class="item">都道府県・市区町村</span></td>
							<td>
								<?php echo Form::select('prefecture_id', ['' => '選択してください'] + $prefectureList, null, ['class' => 'p-region-id']); ?>
								<?php echo Form::text('address1', null, ['class' => 'p-locality', 'maxlength' => '100', 'placeholder' => '例）大阪府']); ?>
								<?php echo App\Helper::error($errors, ['address1']); ?>
							</td>
						</tr>
						<tr>
							<td><span class="required">必須</span><span class="item">町名・番地</span></td>
							<td>
								<?php echo Form::text('address2', null, ['class' => 'p-street-address', 'maxlength' => '100', 'placeholder' => '例）大阪市北区梅田2-2-2']); ?>
								<?php echo App\Helper::error($errors, ['address2']); ?>
							</td>
						</tr>
						<tr>
							<td><span class="any">任意</span><span class="item">ビル名・部屋番号</span></td>
							<td>
								<?php echo Form::text('address3', null, ['class' => 'p-extended-address', 'maxlength' => '100', 'placeholder' => '例）ヒルトンプラザウエストオフィスタワー19F']); ?>
								<?php echo App\Helper::error($errors, ['address3']); ?>
							</td>
						</tr>
					</table>
				<?php echo Form::close(); ?>
			</div>
		</div>
	</div>
	<div class="submit_button"><a id="submit-button" href="javascript:void(0);">保存</a></div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php echo $__env->make('mypage.layouts.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script>
$(function() {
	
	$('#submit-button').on('click', function() {
		$('#form').submit();
		return false;
	});
	
	$('#corporation').on('change', function() {
		
		if ($(this).prop('checked')) {
			$('.corporation').show();
		} else {
			$('.corporation').hide();
		}
		
	}).change();
	
});
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('mypage.layouts.master_pop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>