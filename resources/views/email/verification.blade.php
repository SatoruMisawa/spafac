こんにちは、{{ $user->name }}さん

以下のリンクをクリックして、メールアドレスの認証を行なってください。
{{ url('registration/verify/'.$user->email_token) }}

心当たりがない場合は、なにもせずにこのメールを削除してください。
よろしくお願いします。

{{ url('/') }}
{{ config('app.name') }} All rights reserved.
