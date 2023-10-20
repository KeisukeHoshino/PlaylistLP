{{$contactInfo['name']}}様<br>
ご応募ありがとうございます。<br>
以下の内容で応募を受け付けました。<br><br>
----------------------------------------<br><br>
【応募者様情報】
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
<br>
@endif
----------------------------------------<br>
数日内に担当者よりご連絡差し上げます。<br>
しばらくたってもご連絡がない場合、通信の問題等によりお届けできていない可能性がございます。<br>
お手数をお掛けして誠に申し訳ございませんが、再度お問い合わせ頂けますようよろしくお願い致します。<br><br>
※このメールは自動送信しています。本メールにご返信頂いてもお答えできませんのでご了承ください。
