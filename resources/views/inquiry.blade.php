@extends('layouts2.master')

@section('content')

<link rel="stylesheet" type="text/css" href="/assets/css/contact.css">
<div id="content" class="site-content inquiry">

<div class="hero-image">&nbsp;</div>

<div id="primary" class="content-area">
	
<div class="content">

<section>
<h2>サービスの利用全般についてのお問い合わせはこちらから<svg version="1.1" id="clickme" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" width="30px" height="30px" viewBox="625 625 30 30" enable-background="new 625 625 30 30" xml:space="preserve">
	<path d="M649.778,636.517H649.7c-0.563,0-1.021,0.163-1.469,0.438c-0.389-1.136-1.377-1.95-2.65-1.95
		c-0.563,0-1.1,0.163-1.543,0.438c-0.389-1.133-1.377-1.95-2.65-1.95c-0.495,0-0.958,0.125-1.367,0.343v-2.917
		c0-1.589-1.203-2.877-2.804-2.877s-2.898,1.288-2.898,2.877v11.17l-1.759-1.753c-1.132-1.124-3.134-0.964-4.098,0
		c-0.964,0.964-1.595,2.904-0.214,4.285l8.095,8.039c0.168,0.166,0.352,0.303,0.544,0.423c1.475,1.202,3.168,1.916,6.743,1.916
		c8.168,0,8.924-4.407,8.924-9.843v-5.754C652.55,637.806,651.378,636.517,649.778,636.517z M651.026,645.15
		c0,4.601-0.021,8.328-7.4,8.328c-3.125,0-5-0.698-6.423-2.108l-7.661-7.611c-0.679-0.681-0.508-1.546,0.049-2.1
		c0.554-0.554,1.573-0.575,2.108-0.044c0,0,1.344,1.338,2.504,2.489c0.875,0.872,1.646,1.637,1.646,1.637v-14.522
		c0-0.752,0.616-1.362,1.375-1.362c0.759,0,1.276,0.61,1.276,1.362v9.237h0.016c-0.009,0.049-0.016,0.101-0.016,0.153
		c0,0.419,0.343,0.756,0.762,0.756c0.422,0,0.762-0.34,0.762-0.756c0-0.053-0.006-0.104-0.015-0.153h0.015v-3.787
		c0-0.752,0.547-1.361,1.307-1.361c0,0,1.343-0.018,1.343,1.361v4.999h0.016c-0.009,0.049-0.016,0.101-0.016,0.152
		c0,0.42,0.344,0.756,0.763,0.756c0.422,0,0.762-0.34,0.762-0.756c0-0.052-0.006-0.1-0.016-0.152h0.016v-3.483
		c0-0.753,0.539-1.362,1.298-1.362c0,0,1.371,0.086,1.371,1.362v4.391h0.015c-0.009,0.05-0.015,0.102-0.015,0.15
		c0,0.42,0.343,0.757,0.762,0.757c0.423,0,0.744-0.341,0.744-0.757c0-0.052-0.006-0.101-0.016-0.15h0.016v-2.999
		c0-0.753,0.566-1.362,1.325-1.362c0,0,1.328-0.056,1.328,1.362C651.026,639.578,651.026,643.927,651.026,645.15z M633.19,635.204
		v-2.543c-0.242-0.542-0.379-1.142-0.379-1.775c0-2.412,1.956-4.367,4.367-4.367s4.367,1.956,4.367,4.367
		c0,0.331-0.039,0.649-0.109,0.958c0.547,0.021,1.043,0.248,1.403,0.615c0.142-0.502,0.225-1.025,0.225-1.573
		c-0.004-3.25-2.638-5.886-5.889-5.886c-3.25,0-5.885,2.636-5.885,5.886C631.289,632.593,632.024,634.129,633.19,635.204z"/>
</svg></h2>

<div class="sub-container">
<p>こちらのフォームから必要事項を記入の上、お問い合わせください。</p>
<p>「お客様ID」もしくは予約リクエスト送信後のお問い合わせは、メールや管理画面に記載の「予約ID」を記入の上、お問い合わせいただけるとスムーズです。</p>
<div class="sf_one_column">
<p class="txtR">必須
<span class="required">＊</span>
</p>
<form >
<div class="sf_type_text">
<label>お問い合わせ内容:</label>
<span class="Category">
<input type="hidden" name="Category" value="サービスの利用全般についてのお問い合わせ">サービスの利用全般についてのお問い合わせ
<input type="hidden" name="to-mail" value="info@spafac.com">
</span>
</div>

<div class="sf_type_text">
<label>氏名: <span class="required">＊</span>
</label>
<input type="text" placeholder="山田 太郎" value="" name="name"  />

</div>
<div class="sf_type_text">
<label>法人名・団体名:</label>
<input type="text" placeholder="スペファク大学" value=""  />

</div>
<div class="sf_type_text">
<label>電話番号:</label>
<input type="text" placeholder="080-1234-5678" value=""  />

</div>
<div class="sf_type_text">
<label>Email: <span class="required">＊</span>
</label>
<input type="text" placeholder="xxxxx@spafac.com" value=""  />

</div>
<div class="sf_type_text">
<label>郵便番号:</label>
<input type="text" placeholder="123-4567" value=""  />

</div>
<div class="sf_type_text">
<label>都道府県:</label>
<input type="text" placeholder="大阪府" value=""  />

</div>
<div class="sf_type_text">
<label>市区町村:</label>
<input type="text" placeholder="大阪市" value=""  />

</div>

<div class="sf_type_text">
<label>お客様ID／予約ID: </label>
<input type="text" placeholder="" value="" name="ID"  />
</div>

<div class="sf_type_text">
<label>本文: <span class="required">＊</span></label>
<textarea>
</textarea>
</div>
<div class="submit">
<input type="submit" name="submit" value="上記の内容で送信する" onClick="return chk('送信しますか？')"/>
</div>
</form>
</div>
</div>
</section>

<section>
<h2>スペースを掲載するにあたってのお問い合わせはこちらから<svg version="1.1" id="clickme" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" width="30px" height="30px" viewBox="625 625 30 30" enable-background="new 625 625 30 30" xml:space="preserve">
	<path d="M649.778,636.517H649.7c-0.563,0-1.021,0.163-1.469,0.438c-0.389-1.136-1.377-1.95-2.65-1.95
		c-0.563,0-1.1,0.163-1.543,0.438c-0.389-1.133-1.377-1.95-2.65-1.95c-0.495,0-0.958,0.125-1.367,0.343v-2.917
		c0-1.589-1.203-2.877-2.804-2.877s-2.898,1.288-2.898,2.877v11.17l-1.759-1.753c-1.132-1.124-3.134-0.964-4.098,0
		c-0.964,0.964-1.595,2.904-0.214,4.285l8.095,8.039c0.168,0.166,0.352,0.303,0.544,0.423c1.475,1.202,3.168,1.916,6.743,1.916
		c8.168,0,8.924-4.407,8.924-9.843v-5.754C652.55,637.806,651.378,636.517,649.778,636.517z M651.026,645.15
		c0,4.601-0.021,8.328-7.4,8.328c-3.125,0-5-0.698-6.423-2.108l-7.661-7.611c-0.679-0.681-0.508-1.546,0.049-2.1
		c0.554-0.554,1.573-0.575,2.108-0.044c0,0,1.344,1.338,2.504,2.489c0.875,0.872,1.646,1.637,1.646,1.637v-14.522
		c0-0.752,0.616-1.362,1.375-1.362c0.759,0,1.276,0.61,1.276,1.362v9.237h0.016c-0.009,0.049-0.016,0.101-0.016,0.153
		c0,0.419,0.343,0.756,0.762,0.756c0.422,0,0.762-0.34,0.762-0.756c0-0.053-0.006-0.104-0.015-0.153h0.015v-3.787
		c0-0.752,0.547-1.361,1.307-1.361c0,0,1.343-0.018,1.343,1.361v4.999h0.016c-0.009,0.049-0.016,0.101-0.016,0.152
		c0,0.42,0.344,0.756,0.763,0.756c0.422,0,0.762-0.34,0.762-0.756c0-0.052-0.006-0.1-0.016-0.152h0.016v-3.483
		c0-0.753,0.539-1.362,1.298-1.362c0,0,1.371,0.086,1.371,1.362v4.391h0.015c-0.009,0.05-0.015,0.102-0.015,0.15
		c0,0.42,0.343,0.757,0.762,0.757c0.423,0,0.744-0.341,0.744-0.757c0-0.052-0.006-0.101-0.016-0.15h0.016v-2.999
		c0-0.753,0.566-1.362,1.325-1.362c0,0,1.328-0.056,1.328,1.362C651.026,639.578,651.026,643.927,651.026,645.15z M633.19,635.204
		v-2.543c-0.242-0.542-0.379-1.142-0.379-1.775c0-2.412,1.956-4.367,4.367-4.367s4.367,1.956,4.367,4.367
		c0,0.331-0.039,0.649-0.109,0.958c0.547,0.021,1.043,0.248,1.403,0.615c0.142-0.502,0.225-1.025,0.225-1.573
		c-0.004-3.25-2.638-5.886-5.889-5.886c-3.25,0-5.885,2.636-5.885,5.886C631.289,632.593,632.024,634.129,633.19,635.204z"/>
</svg></h2>
<div class="sub-container">
<p>こちらのフォームから、お問い合わせ内容に「施設・スペースの新規登録について」を選択し必要事項を入力した上、お問い合わせください。</p>
<div class="sf_one_column">
<p class="txtR">必須
<span class="required">＊</span>
</p>
<form >
<div class="sf_type_text">
<label>お問い合わせ内容:</label>
<span class="Category">
<input type="hidden" name="Category" value="スペースを掲載するにあたっての問い合わせ">スペースを掲載するにあたっての問い合わせ
<input type="hidden" name="to-mail" value="spaceinfo@spafac.com">
</span>
</div>
<div class="sf_type_text">
<label>氏名: <span class="required">＊</span>
</label>
<input type="text" placeholder="山田 太郎" value="" name="name"  />

</div>
<div class="sf_type_text">
<label>法人名・団体名:</label>
<input type="text" placeholder="スペファク大学" value=""  />

</div>
<div class="sf_type_text">
<label>電話番号:</label>
<input type="text" placeholder="080-1234-5678" value=""  />

</div>
<div class="sf_type_text">
<label>Email: <span class="required">＊</span>
</label>
<input type="text" placeholder="xxxxx@spafac.com" value=""  />

</div>
<div class="sf_type_text">
<label>郵便番号:</label>
<input type="text" placeholder="123-4567" value=""  />

</div>
<div class="sf_type_text">
<label>都道府県:</label>
<input type="text" placeholder="大阪府" value=""  />

</div>
<div class="sf_type_text">
<label>市区町村:</label>
<input type="text" placeholder="大阪市" value=""  />

</div>

<div class="sf_type_text">
<label>お客様ID／予約ID: </label>
<input type="text" placeholder="" value="" name="ID"  />
</div>

<div class="sf_type_text">
<label>本文: <span class="required">＊</span></label>
<textarea>
</textarea>
</div>
<div class="submit">
<input type="submit" name="submit" value="上記の内容で送信する" onClick="return chk('送信しますか？')"/>
</div>
</form>
</div>
</div>
</section>

<section>
<h2>スペースの空き状況・掲載情報に関するお問い合わせはこちらから<svg version="1.1" id="clickme" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" width="30px" height="30px" viewBox="625 625 30 30" enable-background="new 625 625 30 30" xml:space="preserve">
	<path d="M649.778,636.517H649.7c-0.563,0-1.021,0.163-1.469,0.438c-0.389-1.136-1.377-1.95-2.65-1.95
		c-0.563,0-1.1,0.163-1.543,0.438c-0.389-1.133-1.377-1.95-2.65-1.95c-0.495,0-0.958,0.125-1.367,0.343v-2.917
		c0-1.589-1.203-2.877-2.804-2.877s-2.898,1.288-2.898,2.877v11.17l-1.759-1.753c-1.132-1.124-3.134-0.964-4.098,0
		c-0.964,0.964-1.595,2.904-0.214,4.285l8.095,8.039c0.168,0.166,0.352,0.303,0.544,0.423c1.475,1.202,3.168,1.916,6.743,1.916
		c8.168,0,8.924-4.407,8.924-9.843v-5.754C652.55,637.806,651.378,636.517,649.778,636.517z M651.026,645.15
		c0,4.601-0.021,8.328-7.4,8.328c-3.125,0-5-0.698-6.423-2.108l-7.661-7.611c-0.679-0.681-0.508-1.546,0.049-2.1
		c0.554-0.554,1.573-0.575,2.108-0.044c0,0,1.344,1.338,2.504,2.489c0.875,0.872,1.646,1.637,1.646,1.637v-14.522
		c0-0.752,0.616-1.362,1.375-1.362c0.759,0,1.276,0.61,1.276,1.362v9.237h0.016c-0.009,0.049-0.016,0.101-0.016,0.153
		c0,0.419,0.343,0.756,0.762,0.756c0.422,0,0.762-0.34,0.762-0.756c0-0.053-0.006-0.104-0.015-0.153h0.015v-3.787
		c0-0.752,0.547-1.361,1.307-1.361c0,0,1.343-0.018,1.343,1.361v4.999h0.016c-0.009,0.049-0.016,0.101-0.016,0.152
		c0,0.42,0.344,0.756,0.763,0.756c0.422,0,0.762-0.34,0.762-0.756c0-0.052-0.006-0.1-0.016-0.152h0.016v-3.483
		c0-0.753,0.539-1.362,1.298-1.362c0,0,1.371,0.086,1.371,1.362v4.391h0.015c-0.009,0.05-0.015,0.102-0.015,0.15
		c0,0.42,0.343,0.757,0.762,0.757c0.423,0,0.744-0.341,0.744-0.757c0-0.052-0.006-0.101-0.016-0.15h0.016v-2.999
		c0-0.753,0.566-1.362,1.325-1.362c0,0,1.328-0.056,1.328,1.362C651.026,639.578,651.026,643.927,651.026,645.15z M633.19,635.204
		v-2.543c-0.242-0.542-0.379-1.142-0.379-1.775c0-2.412,1.956-4.367,4.367-4.367s4.367,1.956,4.367,4.367
		c0,0.331-0.039,0.649-0.109,0.958c0.547,0.021,1.043,0.248,1.403,0.615c0.142-0.502,0.225-1.025,0.225-1.573
		c-0.004-3.25-2.638-5.886-5.889-5.886c-3.25,0-5.885,2.636-5.885,5.886C631.289,632.593,632.024,634.129,633.19,635.204z"/>
</svg></h2>
<div class="sub-container">
<p>スペースやスペースオーナーに関しての情報や質問は、メッセージ機能で直接スペースオーナーにお問い合わせください。</p>
<div class="sf_one_column">
<p class="txtR">必須
<span class="required">＊</span>
</p>
<form >
<div class="sf_type_text">
<label>お問い合わせ内容:</label>
<span class="Category">
<input type="hidden" name="Category" value="スペースの空き状況・掲載情報に関するお問い合わせ">スペースの空き状況・掲載情報に関するお問い合わせ
<input type="hidden" name="to-mail" value="press@spafac.com">
</span>
</div>
<div class="sf_type_text">
<label>氏名: <span class="required">＊</span>
</label>
<input type="text" placeholder="山田 太郎" value="" name="name"  />

</div>
<div class="sf_type_text">
<label>法人名・団体名:</label>
<input type="text" placeholder="スペファク大学" value=""  />

</div>
<div class="sf_type_text">
<label>電話番号:</label>
<input type="text" placeholder="080-1234-5678" value=""  />

</div>
<div class="sf_type_text">
<label>Email: <span class="required">＊</span>
</label>
<input type="text" placeholder="xxxxx@spafac.com" value=""  />

</div>
<div class="sf_type_text">
<label>郵便番号:</label>
<input type="text" placeholder="123-4567" value=""  />

</div>
<div class="sf_type_text">
<label>都道府県:</label>
<input type="text" placeholder="大阪府" value=""  />

</div>
<div class="sf_type_text">
<label>市区町村:</label>
<input type="text" placeholder="大阪市" value=""  />

</div>

<div class="sf_type_text">
<label>お客様ID／予約ID: </label>
<input type="text" placeholder="" value="" name="ID"  />
</div>

<div class="sf_type_text">
<label>本文: <span class="required">＊</span></label>
<textarea>
</textarea>
</div>
<div class="submit">
<input type="submit" name="submit" value="上記の内容で送信する" onClick="return chk('送信しますか？')"/>
</div>
</form>
</div>
</div>
</section>

<section>
<h2>取材・プレス関連のお問い合わせはこちらから<svg version="1.1" id="clickme" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" width="30px" height="30px" viewBox="625 625 30 30" enable-background="new 625 625 30 30" xml:space="preserve">
	<path d="M649.778,636.517H649.7c-0.563,0-1.021,0.163-1.469,0.438c-0.389-1.136-1.377-1.95-2.65-1.95
		c-0.563,0-1.1,0.163-1.543,0.438c-0.389-1.133-1.377-1.95-2.65-1.95c-0.495,0-0.958,0.125-1.367,0.343v-2.917
		c0-1.589-1.203-2.877-2.804-2.877s-2.898,1.288-2.898,2.877v11.17l-1.759-1.753c-1.132-1.124-3.134-0.964-4.098,0
		c-0.964,0.964-1.595,2.904-0.214,4.285l8.095,8.039c0.168,0.166,0.352,0.303,0.544,0.423c1.475,1.202,3.168,1.916,6.743,1.916
		c8.168,0,8.924-4.407,8.924-9.843v-5.754C652.55,637.806,651.378,636.517,649.778,636.517z M651.026,645.15
		c0,4.601-0.021,8.328-7.4,8.328c-3.125,0-5-0.698-6.423-2.108l-7.661-7.611c-0.679-0.681-0.508-1.546,0.049-2.1
		c0.554-0.554,1.573-0.575,2.108-0.044c0,0,1.344,1.338,2.504,2.489c0.875,0.872,1.646,1.637,1.646,1.637v-14.522
		c0-0.752,0.616-1.362,1.375-1.362c0.759,0,1.276,0.61,1.276,1.362v9.237h0.016c-0.009,0.049-0.016,0.101-0.016,0.153
		c0,0.419,0.343,0.756,0.762,0.756c0.422,0,0.762-0.34,0.762-0.756c0-0.053-0.006-0.104-0.015-0.153h0.015v-3.787
		c0-0.752,0.547-1.361,1.307-1.361c0,0,1.343-0.018,1.343,1.361v4.999h0.016c-0.009,0.049-0.016,0.101-0.016,0.152
		c0,0.42,0.344,0.756,0.763,0.756c0.422,0,0.762-0.34,0.762-0.756c0-0.052-0.006-0.1-0.016-0.152h0.016v-3.483
		c0-0.753,0.539-1.362,1.298-1.362c0,0,1.371,0.086,1.371,1.362v4.391h0.015c-0.009,0.05-0.015,0.102-0.015,0.15
		c0,0.42,0.343,0.757,0.762,0.757c0.423,0,0.744-0.341,0.744-0.757c0-0.052-0.006-0.101-0.016-0.15h0.016v-2.999
		c0-0.753,0.566-1.362,1.325-1.362c0,0,1.328-0.056,1.328,1.362C651.026,639.578,651.026,643.927,651.026,645.15z M633.19,635.204
		v-2.543c-0.242-0.542-0.379-1.142-0.379-1.775c0-2.412,1.956-4.367,4.367-4.367s4.367,1.956,4.367,4.367
		c0,0.331-0.039,0.649-0.109,0.958c0.547,0.021,1.043,0.248,1.403,0.615c0.142-0.502,0.225-1.025,0.225-1.573
		c-0.004-3.25-2.638-5.886-5.889-5.886c-3.25,0-5.885,2.636-5.885,5.886C631.289,632.593,632.024,634.129,633.19,635.204z"/>
</svg></h2>
<div class="sub-container">
<p>こちらのフォームから、お問い合わせ内容に「プレス・メディア関連」を選択し必要事項を入力した上、お問い合わせください。</p>
<div class="sf_one_column">
<p class="txtR">必須
<span class="required">＊</span>
</p>
<form >
<div class="sf_type_text">
<label>お問い合わせ内容:</label>
<span class="Category">
<input type="hidden" name="Category" value="取材・プレス関連のお問い合わせ">取材・プレス関連のお問い合わせ
<input type="hidden" name="to-mail" value="businesspart@spafac.com">
</span>
</div>
<div class="sf_type_text">
<label>氏名: <span class="required">＊</span>
</label>
<input type="text" placeholder="山田 太郎" value="" name="name"  />

</div>
<div class="sf_type_text">
<label>法人名・団体名:</label>
<input type="text" placeholder="スペファク大学" value=""  />

</div>
<div class="sf_type_text">
<label>電話番号:</label>
<input type="text" placeholder="080-1234-5678" value=""  />

</div>
<div class="sf_type_text">
<label>Email: <span class="required">＊</span>
</label>
<input type="text" placeholder="xxxxx@spafac.com" value=""  />

</div>
<div class="sf_type_text">
<label>郵便番号:</label>
<input type="text" placeholder="123-4567" value=""  />

</div>
<div class="sf_type_text">
<label>都道府県:</label>
<input type="text" placeholder="大阪府" value=""  />

</div>
<div class="sf_type_text">
<label>市区町村:</label>
<input type="text" placeholder="大阪市" value=""  />

</div>

<div class="sf_type_text">
<label>お客様ID／予約ID: </label>
<input type="text" placeholder="" value="" name="ID"  />
</div>

<div class="sf_type_text">
<label>本文: <span class="required">＊</span></label>
<textarea>
</textarea>
</div>
<div class="submit">
<input type="submit" name="submit" value="上記の内容で送信する" onClick="return chk('送信しますか？')"/>
</div>
</form>
</div>
</div>
</section>


<section>
<h2>業務関連の提携などお問い合わせはこちらから<svg version="1.1" id="clickme" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" width="30px" height="30px" viewBox="625 625 30 30" enable-background="new 625 625 30 30" xml:space="preserve">
	<path d="M649.778,636.517H649.7c-0.563,0-1.021,0.163-1.469,0.438c-0.389-1.136-1.377-1.95-2.65-1.95
		c-0.563,0-1.1,0.163-1.543,0.438c-0.389-1.133-1.377-1.95-2.65-1.95c-0.495,0-0.958,0.125-1.367,0.343v-2.917
		c0-1.589-1.203-2.877-2.804-2.877s-2.898,1.288-2.898,2.877v11.17l-1.759-1.753c-1.132-1.124-3.134-0.964-4.098,0
		c-0.964,0.964-1.595,2.904-0.214,4.285l8.095,8.039c0.168,0.166,0.352,0.303,0.544,0.423c1.475,1.202,3.168,1.916,6.743,1.916
		c8.168,0,8.924-4.407,8.924-9.843v-5.754C652.55,637.806,651.378,636.517,649.778,636.517z M651.026,645.15
		c0,4.601-0.021,8.328-7.4,8.328c-3.125,0-5-0.698-6.423-2.108l-7.661-7.611c-0.679-0.681-0.508-1.546,0.049-2.1
		c0.554-0.554,1.573-0.575,2.108-0.044c0,0,1.344,1.338,2.504,2.489c0.875,0.872,1.646,1.637,1.646,1.637v-14.522
		c0-0.752,0.616-1.362,1.375-1.362c0.759,0,1.276,0.61,1.276,1.362v9.237h0.016c-0.009,0.049-0.016,0.101-0.016,0.153
		c0,0.419,0.343,0.756,0.762,0.756c0.422,0,0.762-0.34,0.762-0.756c0-0.053-0.006-0.104-0.015-0.153h0.015v-3.787
		c0-0.752,0.547-1.361,1.307-1.361c0,0,1.343-0.018,1.343,1.361v4.999h0.016c-0.009,0.049-0.016,0.101-0.016,0.152
		c0,0.42,0.344,0.756,0.763,0.756c0.422,0,0.762-0.34,0.762-0.756c0-0.052-0.006-0.1-0.016-0.152h0.016v-3.483
		c0-0.753,0.539-1.362,1.298-1.362c0,0,1.371,0.086,1.371,1.362v4.391h0.015c-0.009,0.05-0.015,0.102-0.015,0.15
		c0,0.42,0.343,0.757,0.762,0.757c0.423,0,0.744-0.341,0.744-0.757c0-0.052-0.006-0.101-0.016-0.15h0.016v-2.999
		c0-0.753,0.566-1.362,1.325-1.362c0,0,1.328-0.056,1.328,1.362C651.026,639.578,651.026,643.927,651.026,645.15z M633.19,635.204
		v-2.543c-0.242-0.542-0.379-1.142-0.379-1.775c0-2.412,1.956-4.367,4.367-4.367s4.367,1.956,4.367,4.367
		c0,0.331-0.039,0.649-0.109,0.958c0.547,0.021,1.043,0.248,1.403,0.615c0.142-0.502,0.225-1.025,0.225-1.573
		c-0.004-3.25-2.638-5.886-5.889-5.886c-3.25,0-5.885,2.636-5.885,5.886C631.289,632.593,632.024,634.129,633.19,635.204z"/>
</svg></h2>
<div class="sub-container">
<p>こちらのフォームから、お問い合わせ内容に「業務提携関連」を選択し必要事項を入力した上、お問い合わせください。</p>
<div class="sf_one_column">
<p class="txtR">必須
<span class="required">＊</span>
</p>
<form >
<div class="sf_type_text">
<label>お問い合わせ内容:</label>
<span class="Category">
<input type="hidden" name="Category" value="業務関連の提携などお問い合わせ">業務関連の提携などお問い合わせ
<input type="hidden" name="to-mail" value="businesspart@spafac.com">
</span>
</div>
<div class="sf_type_text">
<label>氏名: <span class="required">＊</span>
</label>
<input type="text" placeholder="山田 太郎" value="" name="name"  />

</div>
<div class="sf_type_text">
<label>法人名・団体名:</label>
<input type="text" placeholder="スペファク大学" value=""  />

</div>
<div class="sf_type_text">
<label>電話番号:</label>
<input type="text" placeholder="080-1234-5678" value=""  />

</div>
<div class="sf_type_text">
<label>Email: <span class="required">＊</span>
</label>
<input type="text" placeholder="xxxxx@spafac.com" value=""  />

</div>
<div class="sf_type_text">
<label>郵便番号:</label>
<input type="text" placeholder="123-4567" value=""  />

</div>
<div class="sf_type_text">
<label>都道府県:</label>
<input type="text" placeholder="大阪府" value=""  />

</div>
<div class="sf_type_text">
<label>市区町村:</label>
<input type="text" placeholder="大阪市" value=""  />

</div>

<div class="sf_type_text">
<label>お客様ID／予約ID: </label>
<input type="text" placeholder="" value="" name="ID"  />
</div>

<div class="sf_type_text">
<label>本文: <span class="required">＊</span></label>
<textarea>
</textarea>
</div>
<div class="submit">
<input type="submit" name="submit" value="上記の内容で送信する" onClick="return chk('送信しますか？')"/>
</div>
</form>
</div>
</div>
</section>

<section>
<h2>その他のお問い合わせについてはこちらから<svg version="1.1" id="clickme" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" width="30px" height="30px" viewBox="625 625 30 30" enable-background="new 625 625 30 30" xml:space="preserve">
	<path d="M649.778,636.517H649.7c-0.563,0-1.021,0.163-1.469,0.438c-0.389-1.136-1.377-1.95-2.65-1.95
		c-0.563,0-1.1,0.163-1.543,0.438c-0.389-1.133-1.377-1.95-2.65-1.95c-0.495,0-0.958,0.125-1.367,0.343v-2.917
		c0-1.589-1.203-2.877-2.804-2.877s-2.898,1.288-2.898,2.877v11.17l-1.759-1.753c-1.132-1.124-3.134-0.964-4.098,0
		c-0.964,0.964-1.595,2.904-0.214,4.285l8.095,8.039c0.168,0.166,0.352,0.303,0.544,0.423c1.475,1.202,3.168,1.916,6.743,1.916
		c8.168,0,8.924-4.407,8.924-9.843v-5.754C652.55,637.806,651.378,636.517,649.778,636.517z M651.026,645.15
		c0,4.601-0.021,8.328-7.4,8.328c-3.125,0-5-0.698-6.423-2.108l-7.661-7.611c-0.679-0.681-0.508-1.546,0.049-2.1
		c0.554-0.554,1.573-0.575,2.108-0.044c0,0,1.344,1.338,2.504,2.489c0.875,0.872,1.646,1.637,1.646,1.637v-14.522
		c0-0.752,0.616-1.362,1.375-1.362c0.759,0,1.276,0.61,1.276,1.362v9.237h0.016c-0.009,0.049-0.016,0.101-0.016,0.153
		c0,0.419,0.343,0.756,0.762,0.756c0.422,0,0.762-0.34,0.762-0.756c0-0.053-0.006-0.104-0.015-0.153h0.015v-3.787
		c0-0.752,0.547-1.361,1.307-1.361c0,0,1.343-0.018,1.343,1.361v4.999h0.016c-0.009,0.049-0.016,0.101-0.016,0.152
		c0,0.42,0.344,0.756,0.763,0.756c0.422,0,0.762-0.34,0.762-0.756c0-0.052-0.006-0.1-0.016-0.152h0.016v-3.483
		c0-0.753,0.539-1.362,1.298-1.362c0,0,1.371,0.086,1.371,1.362v4.391h0.015c-0.009,0.05-0.015,0.102-0.015,0.15
		c0,0.42,0.343,0.757,0.762,0.757c0.423,0,0.744-0.341,0.744-0.757c0-0.052-0.006-0.101-0.016-0.15h0.016v-2.999
		c0-0.753,0.566-1.362,1.325-1.362c0,0,1.328-0.056,1.328,1.362C651.026,639.578,651.026,643.927,651.026,645.15z M633.19,635.204
		v-2.543c-0.242-0.542-0.379-1.142-0.379-1.775c0-2.412,1.956-4.367,4.367-4.367s4.367,1.956,4.367,4.367
		c0,0.331-0.039,0.649-0.109,0.958c0.547,0.021,1.043,0.248,1.403,0.615c0.142-0.502,0.225-1.025,0.225-1.573
		c-0.004-3.25-2.638-5.886-5.889-5.886c-3.25,0-5.885,2.636-5.885,5.886C631.289,632.593,632.024,634.129,633.19,635.204z"/>
</svg></h2>
<div class="sub-container">
<p>こちらのフォームから、お問い合わせ内容に「その他のお問い合わせ」を選択し必要事項を入力した上、お問い合わせください。</p>
<div class="sf_one_column">
<p class="txtR">必須
<span class="required">＊</span>
</p>
<form >
<div class="sf_type_text">
<label>お問い合わせ内容:</label>
<span class="Category">
<input type="hidden" name="Category" value="その他のお問い合わせについて">その他のお問い合わせについて
<input type="hidden" name="to-mail" value="info@spafac.com">
</span>
</div>
<div class="sf_type_text">
<label>氏名: <span class="required">＊</span>
</label>
<input type="text" placeholder="山田 太郎" value="" name="name"  />

</div>
<div class="sf_type_text">
<label>法人名・団体名:</label>
<input type="text" placeholder="スペファク大学" value=""  />

</div>
<div class="sf_type_text">
<label>電話番号:</label>
<input type="text" placeholder="080-1234-5678" value=""  />

</div>
<div class="sf_type_text">
<label>Email: <span class="required">＊</span>
</label>
<input type="text" placeholder="xxxxx@spafac.com" value=""  />

</div>
<div class="sf_type_text">
<label>郵便番号:</label>
<input type="text" placeholder="123-4567" value=""  />

</div>
<div class="sf_type_text">
<label>都道府県:</label>
<input type="text" placeholder="大阪府" value=""  />

</div>
<div class="sf_type_text">
<label>市区町村:</label>
<input type="text" placeholder="大阪市" value=""  />

</div>

<div class="sf_type_text">
<label>お客様ID／予約ID: </label>
<input type="text" placeholder="" value="" name="ID"  />
</div>

<div class="sf_type_text">
<label>本文: <span class="required">＊</span></label>
<textarea>
</textarea>
</div>
<div class="submit">
<input type="submit" name="submit" value="上記の内容で送信する" onClick="return chk('送信しますか？')" />
</div>
</form>
</div>
</div>
</section>

		</div>
<p class="clear">&nbsp;</p>
</div><!-- #primary -->


</div><!-- #content -->
<script>
    $('h2').click(function(){
       $($(this).nextAll(".sub-container")).slideToggle('slow');
    });

 	function chk(value){
			ans=confirm(value);
		switch(true){
			case ans==false:
			alert('キャンセルしました。');
			return false;
			break;
			case ans==true:
			break;
		  }
	}
</script>

@stop
