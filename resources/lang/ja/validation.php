<?php  // resources/lang/ja/validation.php

return [

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	'accepted'             => ':attributeを承認してください。',
	'active_url'           => ':attributeは正しいURLではありません。',
	'after'                => ':attributeは:date以降の日付にしてください。',
	'alpha'                => ':attributeは英字のみにしてください。',
	'alpha_dash'           => ':attributeは英数字とハイフンのみにしてください。',
	'alpha_num'            => ':attributeは英数字のみにしてください。',
	'array'                => ':attributeは配列にしてください。',
	'before'               => ':attributeは:date以前の日付にしてください。',
	'between'              => [
		'numeric' => ':attributeは:min〜:maxまでにしてください。',
		'file'    => ':attributeは:min〜:max KBまでのファイルにしてください。',
		'string'  => ':attributeは:min〜:max文字にしてください。',
		'array'   => ':attributeは:min〜:max個までにしてください。',
	],
	'boolean'              => ':attributeはtrueかfalseにしてください。',
	'confirmed'            => ':attributeは確認用項目と一致していません。',
	'date'                 => ':attributeは正しい日付ではありません。',
	'date_format'          => ':attributeは":format"書式と一致していません。',
	'different'            => ':attributeは:otherと違うものにしてください。',
	'digits'               => ':attributeは:digits桁にしてください',
	'digits_between'       => ':attributeは:min〜:max桁にしてください。',
	'email'                => ':attributeを正しいメールアドレスにしてください。',
	'filled'               => ':attributeは必須です。',
	'exists'               => '選択された:attributeは正しくありません。',
	'image'                => ':attributeは画像にしてください。',
	'in'                   => '選択された:attributeは正しくありません。',
	'integer'              => ':attributeは整数にしてください。',
	'ip'                   => ':attributeを正しいIPアドレスにしてください。',
	'max'                  => [
		'numeric' => ':attributeは:max以下にしてください。',
		'file'    => ':attributeは:max KB以下のファイルにしてください。.',
		'string'  => ':attributeは:max文字以下にしてください。',
		'array'   => ':attributeは:max個以下にしてください。',
	],
	'mimes'                => ':attributeは:valuesタイプのファイルにしてください。',
	'min'                  => [
		'numeric' => ':attributeは:min以上にしてください。',
		'file'    => ':attributeは:min KB以上のファイルにしてください。.',
		'string'  => ':attributeは:min文字以上にしてください。',
		'array'   => ':attributeは:min個以上にしてください。',
	],
	'not_in'               => '選択された:attributeは正しくありません。',
	'numeric'              => ':attributeは数字にしてください。',
	'regex'                => ':attributeの書式が正しくありません。',
	'required'             => ':attributeは必須です。',
	'required_if'          => ':otherが:valueの時、:attributeは必須です。',
	'required_with'        => ':valuesが存在する時、:attributeは必須です。',
	'required_with_all'    => ':valuesが存在する時、:attributeは必須です。',
	'required_without'     => ':valuesが存在しない時、:attributeは必須です。',
	'required_without_all' => ':valuesが存在しない時、:attributeは必須です。',
	'same'                 => ':attributeと:otherは一致していません。',
	'size'                 => [
		'numeric' => ':attributeは:sizeにしてください。',
		'file'    => ':attributeは:size KBにしてください。.',
		'string'  => ':attribute:size文字にしてください。',
		'array'   => ':attributeは:size個にしてください。',
	],
	'string'               => ':attributeは文字列にしてください。',
	'timezone'             => ':attributeは正しいタイムゾーンをしていしてください。',
	'unique'               => ':attributeは既に存在します。',
	'url'                  => ':attributeを正しい書式にしてください。',

	'zip'				   => ':attributeは正しい郵便番号ではありません。',
	'tel'				   => ':attributeは正しい電話番号ではありません。',
	'hankaku_kana'		   => ':attributeは半角片仮名のみにしてください。',
	'zenkaku_kana'		   => ':attributeは全角片仮名のみにしてください。',
	
	'password_verify'	   => ':attributeが違います',

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => [
		'by_hour' => [
			'required_without' => ':values、:attributeの少なくともどちらかを有効にしてください',
		],

		'price_per_hour' => [
			'required_with' => ':valuesが有効の場合、:attributeは必須です',
		],

		'by_day' => [
			'required_without' => ':values、:attributeの少なくともどちらかを有効にしてください',
		],

		'price_per_day' => [
			'required_with' => ':valuesが有効の場合、:attributeは必須です',
		],
	],

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => [
		'name' => '名前',
		'nickname' => 'ニックネイム',
		'email' => 'メールアドレス',
		'password' => 'パスワード',
		'password_confirmation' => 'パスワード(確認)',
		'zip' => '郵便番号',
		'prefecture_id' => '都道府県',
		'address1' => '市区町村',
		'address1_ruby' => '市区町村(かな)',
		'address2' => '町名・番地',
		'address2_ruby' => '町名・番地(かな)',
		'address3' => 'ビル名・部屋番号',
		'address3_ruby' => 'ビル名・部屋番号(かな)',
		'latitude' => '経度',
		'longitude' => '緯度',
		'access' => 'アクセス',
		'tel' => '電話番号',
		'about' => '詳細',
		'space_usage_ids' => '使用可能用途',
		'capacity' => '最大収容人数',
		'floor_area' => '床面積',
		'rent_space_type_id' => '部屋のタイプ',
		'numbers_of_beds' => 'ベットルームの数',
		'numbers_of_futons' => '布団の数',
		'numbers_of_baths' => 'バスルームの数',
		'numbers_of_toilets' => 'トイレの数',
		'amenity_ids' => 'アメニティー',
		'about_amenity' => 'アメニティーについて',
		'about_food_drink' => '飲食について',
		'about_cleanup' => '後片付けについて',
		'cancellation_policy' => 'キャンセルポリシー',
		'terms_of_use' => '利用規約',
		'key_delivery_id' => '鍵の受け渡し',
		'rent_space_business_type_id' => '営業の種類',
		'business_license_image' => '旅館業許可書/特定認定書',
		'images' => '写真',
		'images.*' => '写真',
		'options.*.name' => '名前',
		'options.*.price' => '値段',
		'options.*.limit' => '回数',
		'by_hour' => '時間価格',
		'price_per_hour' => '価格(時間)',
		'by_day' => '一日価格',
		'price_per_day' => '価格(日)',
		'day_ids' => '貸出可能な曜日・時間帯',
		'need_to_be_approved' => '予約の承認方法',
		'preorder_deadline_id' => '予約の締切',
		'preorder_period_id' => '予約の受付期間',
		'period_from' => '開始期間',
		'period_to' => '終了期間',
		'bank_name' => '銀行名',
		'bank_code' => '銀行コード',
		'bank_branch_name' => '支店名',
		'bank_branch_code' => '支店コード',
		'bank_account_number' => '口座番号',
		'bank_account_name' => '口座名義',
	],

];