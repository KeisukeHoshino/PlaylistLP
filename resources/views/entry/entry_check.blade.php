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
      <div clss="diventry-headline">
        <p>以下のフォームへ入力をお願いします。<br />
          内容を確認の上、3営業日以内に担当者よりご連絡させて頂きます。
        </p>
      </div>
      <section id="entryform">
        <form class="entryform" action="/entry_check" method="POST" enctype="multipart/form-data">
          <ul>
            <li>
              <label>
                <h3>氏名</h3>
              </label>
              <p><!-- 入力された氏名の出力 --></p>
            </li>
            <li>
              <label>
                <h3>ふりがな</h3>
              </label>
              <p><!-- 入力されたふりがなの出力 --></p>
            </li>
            <li>
              <label>
                <h3>メールアドレス</h3>
              </label>
              <p><!-- 入力されたメールアドレスの出力 --></p>
              <p class="entryform-attention">※半角英数字で入力してください。</p>
            </li>
            <li>
              <label>
                <h3>電話番号</h3>
              </label>
              <p><!-- 入力された電話番号の出力 --></p>
              <p class="entryform-attention">※半角数字で、ハイフンなしで入力してください。</p>
            </li>
            <li class="entryform-list_file">
              <label>
                <h3>履歴書・職務経歴書など</h3>
              </label>
              <p><!-- 入力された履歴書・職務経歴書の出力 --></p>
            </li>
            <li class="entryform-list_url">
              <label>
                <h3>GitHubやブログ、<br />ポートフォリオサイトなどのURL</h3>
              </label>
              <p><!-- 入力されたURLの出力 --></p>
            </li>
            <li class="entryform-list_message">
              <label>
                <h3>弊社へのメッセージ</h3>
              </label>
              <p><!-- 入力されたメッセージの出力 --></p>
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