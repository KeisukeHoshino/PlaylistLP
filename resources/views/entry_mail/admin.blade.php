以下の応募を受け付けました。
<br>
受付日時: {{ \Carbon\Carbon::now()->format('Y/m/d H:i:s') }}
<br>
【応募内容】
<br>
----------------------------------------
<br>
<br>
[氏名]<br>
{{$contactInfo['name']}}
<br>
[ふりがな]<br>
{{$contactInfo['furigana']}}
<br>
[メールアドレス]<br>
{{ $contactInfo['email'] }}
<br>
[電話番号]<br>
{{ $contactInfo['tel'] }}
<br>
[履歴書・職務経歴書など]<br>
{{ $contactInfo['pdf'] }}
<br>
[GitHubやブログ、ポートフォリオサイトなどのURL]<br>
@if(!empty($contactInfo['url1']))
{{ $contactInfo['url1'] }}<br>
@endif
@if(!empty($contactInfo['url2']))
{{ $contactInfo['url2'] }}<br>
@endif
@if(!empty($contactInfo['url3']))
{{ $contactInfo['url3'] }}<br>
@endif
[弊社へのメッセージ]
<br>
@if(!empty($contactInfo['message']))
{!! nl2br(e($contactInfo['message'])) !!}
@endif
<br>
----------------------------------------
