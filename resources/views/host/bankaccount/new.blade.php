@extends('host.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		新規銀行口座
		<small></small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo url('host'); ?>"><i class="fa fa-dashboard"></i> ホーム</a></li>
	</ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
	@include('host.layouts.message', ['errors' => $errors])
	<div class="row">
		<div class="col-md-12">
			{{
			Form::open([
			'route' => 'host.bankaccount.create',
			'method' => 'POST',
			'id' => 'bank-account-form',
			])
			}}
			<div class="box box-info">
				<div class="box-header">
					<h3 class="box-title">振込口座</h3>
					<div class="pull-right box-tools">
					</div>
				</div>
				<div class="box-body pad">
					<div class="form-group">
						<p class="help-block">スペースファクトリーからの利用料の振込先を登録してください。普通預金の口座のみ登録できます。</p>
					</div>
					<div class="form-group <?php echo App\Helper::errorClass($errors, ['bank_name']); ?>">
						<label><small class="label bg-red">必須</small> 銀行名</label>
						@include('layouts.error', ['name' => 'bank_name'])
						<div class="row">
							<div class="col-sm-6">
								<?php echo Form::text('bank_name', null, ['class' => 'form-control', 'maxlength' => '100', 'placeholder' => '例）スペースファクトリー銀行']); ?>
							</div>
						</div>
					</div>
					<div class="form-group <?php echo App\Helper::errorClass($errors, ['bank_code']); ?>">
						<label><small class="label bg-red">必須</small> 銀行コード</label>
						@include('layouts.error', ['name' => 'bank_code'])
						<div class="row">
							<div class="col-sm-3">
								<?php echo Form::text('bank_code', null, ['id' => 'bank-code-input', 'class' => 'form-control', 'maxlength' => '4', 'placeholder' => '例）1100']); ?>
							</div>
						</div>
					</div>
					<div class="form-group <?php echo App\Helper::errorClass($errors, ['branch_name']); ?>">
						<label><small class="label bg-red">必須</small> 支店名</label>
						@include('layouts.error', ['name' => 'branch_name'])
						<div class="row">
							<div class="col-sm-6">
								<?php echo Form::text('branch_name', null, ['class' => 'form-control', 'maxlength' => '100', 'placeholder' => '例）渋谷支店']); ?>
							</div>
						</div>
					</div>
					<div class="form-group <?php echo App\Helper::errorClass($errors, ['branch_code']); ?>">
						<label><small class="label bg-red">必須</small> 支店コード</label>
						@include('layouts.error', ['name' => 'branch_code'])
						<div class="row">
							<div class="col-sm-3">
								<?php echo Form::text('branch_code', null, ['id' => 'branch-code-input', 'class' => 'form-control', 'maxlength' => '3', 'placeholder' => '例）010']); ?>
							</div>
						</div>
					</div>
					<div class="form-group <?php echo App\Helper::errorClass($errors, ['account_number']); ?>">
						<label><small class="label bg-red">必須</small> 口座番号</label>
						@include('layouts.error', ['name' => 'account_number'])
						<div class="row">
							<div class="col-sm-3">
								<?php echo Form::text('account_number', null, ['id' => 'account-number-input', 'class' => 'form-control', 'maxlength' => '8', 'placeholder' => '例）00012345']); ?>
							</div>
						</div>
					</div>
					<div class="form-group <?php echo App\Helper::errorClass($errors, ['account_holder']); ?>">
						<label><small class="label bg-red">必須</small> 口座名義</label>
						@include('layouts.error', ['name' => 'account_holder'])
						<div class="row">
							<div class="col-sm-6">
								<?php echo Form::text('account_holder', null, ['id' => 'account-holder-input', 'class' => 'form-control', 'maxlength' => '100', 'placeholder' => '例）スペースファクトリー']); ?>
							</div>
						</div>
					</div>
					{{ Form::hidden('claimant_bank_account_id', null, ['id' => 'claimant-bank-account-id-input']) }}
				</div>
				<div class="box-footer">
					<button type="submit" name="prevButton" class="btn btn-default" disabled>保存して戻る</button>
					<button type="submit" name="nextButton" id="submit-button" class="btn btn-success pull-right">保存して進む</button>
				</div>
			</div>
			{{ Form::close() }}
		</div>
	</div>
</section>
<!-- /.content -->
@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script>
	$(function () {
		!(function () {
			var stripe = Stripe('pk_test_sWtuOvxNqVcnwv1xAGmDlcpB');
			var $form = $('#bank-account-form')
			var $submitButton = $('#submit-button')
			var $claimantBankAccountIDInput = $('#claimant-bank-account-id-input')
			$submitButton.click(function (e) {
				e.preventDefault()
				var routingNumber = $('#bank-code-input').val() + $('#branch-code-input').val()
				var accountNumber = $('#account-number-input').val()
				var accountHolder = $('#account-holder-input').val()
				console.log(routingNumber)
				stripe.createToken('bank_account', {
					country: 'JP',
					currency: 'JPY',
					routing_number: routingNumber,
					account_number: accountNumber,
					account_holder_name: accountHolder,
					account_holder_type: 'individual',
				}).then(function (result) {
					if (typeof result.error !== 'undefined') {
						console.log(result.error)
						return
					}

					$claimantBankAccountIDInput.val(result.token.id)
					$form.submit()
				});
			});
		}())
	})
</script>