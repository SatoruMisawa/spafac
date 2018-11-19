こんにちは、{{ $user->name }}さん

以下のリンクをクリックして、メールアドレスの認証を行なってください。

{{ route('verification.email.verify', [$user->id, $user->email_verification_token]) }}

心当たりがない場合は、なにもせずにこのメールを削除してください。
よろしくお願いします。

{{ url('/') }}
{{ config('app.name') }} All rights reserved.