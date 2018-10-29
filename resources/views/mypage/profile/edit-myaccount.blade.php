@extends('mypage.layouts.master_pop')
@section('content')
<div id="mypage_contents">
	<div class="inner">
			@include('mypage.profile.sidebar')
		<div class="right_contents">
			<div class="form">
				<form>
					<table class="edit_form myaccout">
						<tr>
							<td><span class="required">必須</span><span class="item">氏名</span><span class="lower">登録者の氏名を入力してください。</span></td>
							<td>
								<input type="text">
								<input type="text">
							</td>
						</tr>
						<tr>
							<td><span class="required">必須</span><span class="item">電話番号</span><span class="lower">ハイフン無しの半角数字。</span></td>
							<td>
								<input type="tel">
							</td>
						</tr>
						<tr>
							<td><span class="any">任意</span><span class="item">電話番号認証</span><span class="lower">※電話番号認証すると認証済みアカウントとなり、予約リクエストが承認されやすくなります。</span></td>
						</tr>
						<tr>
							<td><a class="tel_code" href="">携帯電話に認証コードを送信する</a></td>
							<td>
								<p>※電話番号が、固定電話番号や海外の電話番号等の場合は認証できません。<br>詳しくは<a href="">ヘルプページ</a>をご確認ください。</p>
							</td>
						</tr>
						<tr class="job">
							<td><span class="any">任意</span><span class="item">業種</span></td>
							<td><span class="any">任意</span><span class="item">業種</span></td>
						</tr>
						<tr class="job_2">
							<td>
								<select>
									<option value="指定なし">指定なし</option>
								</select>
							</td>
							<td>
								<select>
									<option value="指定なし">指定なし</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><span class="required">必須</span><span class="item">法人・団体</span><span class="lower">法人、団体の場合はチェックを入れてください。</span></td>
							<td class="check">
								<label>
								<input type="checkbox">法人・団体
								</label>
							</td>
						</tr>
						<tr>
							<td><span class="required">必須</span><span class="item">郵便番号</span><span class="lower">ハイフン無しの半角数字。入力すると住所が自動補完されます。</span></td>
							<td>
								<input type="text">
							</td>
						</tr>
						<tr class="address_type">
							<td><span class="required">必須</span><span class="item">都道府県・市区町村</span></td>
							<td>
								<select>
									<option value="東京都">東京都</option>
								</select>
								<input type="text">
							</td>
						</tr>
						<tr>
							<td><span class="required">必須</span><span class="item">町名・バンチ</span></td>
							<td>
								<input type="text">
							</td>
						</tr>
						<tr>
							<td><span class="any">任意</span><span class="item">ビル名・部屋番号</span></td>
							<td>
								<input type="text">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	<div class="submit_button"><a href="">保存</a></div>
</div>
@stop
