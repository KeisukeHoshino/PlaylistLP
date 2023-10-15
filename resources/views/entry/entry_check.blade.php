@extends('layouts.layout')

@section('content')
<main>
  <div class="entry-wrapper">
    <div class="entry-container">
      <div class="entry-title">
        <h1>
          ENTRY
        </h1>
        <h2>
          エントリー
        </h2>
      </div>
      <div>
        <p clss="entry-headline">
          内容を確認の上、3営業日以内に担当者よりご連絡させて頂きます。
        </p>
      </div>
      <section id="entryform">
        <form class="entryform" action="/entry_complete" method="POST" enctype="multipart/form-data">
          @csrf
          <ul>
            <li>
              <label>
                <h3>氏名</h3>
              </label>
              <p>{{$name}}</p>
              <input style="display: none;" type="text" name="name" value="{{$name}}">
            </li>
            <li>
              <label>
                <h3>ふりがな</h3>
              </label>
              <p>{{$furigana}}</p>
              <input style="display: none;" type="text" name="furigana" value="{{$furigana}}">
            </li>
            <li>
              <label>
                <h3>メールアドレス</h3>
              </label>
              <p>{{$email}}</p>
              <input style="display: none;" type="email" name="email" value="{{$email}}">
            </li>
            <li>
              <label>
                <h3>電話番号</h3>
              </label>
              <p>{{$tel}}</p>
              <input style="display: none;" type="tel" name="tel" value="{{$tel}}">
            </li>
            <li class="entryform-list_file">
              <label>
                <h3>履歴書・職務経歴書など</h3>
              </label>
              <p>{{$pdf}}</p>
              <input style="display: none;" type="text" name="pdf" value="{{$pdf}}">
            </li>
            <li class="entryform-list_url">
              <label>
                <h3>GitHubやブログ、<br />ポートフォリオサイトなどのURL</h3>
              </label>
              <p>{{$url1}}</p>
              <p>{{$url2}}</p>
              <p>{{$url3}}</p>
              <input style="display: none;" type="url" name="url1" value="{{$url1}}">
              <input style="display: none;" type="url" name="url2" value="{{$url2}}">
              <input style="display: none;" type="url" name="url3" value="{{$url3}}">
            </li>
            <li class="entryform-list_message">
              <label>
                <h3>弊社へのメッセージ</h3>
              </label>
              <p>{!! nl2br($message) !!}</p>
              <input style="display: none;" type="text" name="message" value="{{$message}}">
            </li>
          </ul>
          <div id="entryform-submit-btn">
            <button class="entryform-submit-btn" type="submit">
              送信
              <svg class="entry-btn_arrow" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                <path d="M8.2458 14.394C7.93621 14.7087 7.36656 14.4254 7.36991 13.9583L7.46358 1.04965C7.46674 0.611324 7.98084 0.43609 8.30287 0.76349L14.5124 7.07647C14.7823 7.35096 14.7817 7.79618 14.5108 8.06954L8.2458 14.394Z" fill="#333333" />
              </svg>
            </button>
          </div>
          <div id="entryform-back">
            <a href="#" onclick="history.back(); return false;" class="entryform-back">入力ヘ戻る</a>
          </div>
        </form>
      </section>
    </div>
  </div>
</main>
@endsection
