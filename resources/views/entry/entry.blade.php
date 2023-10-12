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
      <div class="entry-headline">
        <p>以下のフォームへ入力をお願いします。<br />
          内容を確認の上、3営業日以内に担当者よりご連絡させて頂きます。
        </p>
      </div>
      @if ($errors->any())
      <div class="error-message-area">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <section id="entryform">
        <form class="entryform" action="/entry_check" method="GET" enctype="multipart/form-data">
          @csrf
          <ul>
            <li>
              <label>
                <h3>氏名<span>必須</span></h3>
              </label>
              <input type="text" inputmode="text" name="name" value="{{old('name')}}" placeholder="山田 太郎" required>
            </li>
            <li>
              <label>
                <h3>ふりがな<span>必須</span></h3>
              </label>
              <input type="text" inputmode="kana" name="furigana" value="{{old('furigana')}}" placeholder="やまだ たろう" required>
            </li>
            <li>
              <label>
                <h3>メールアドレス<span>必須</span></h3>
              </label>
              <input type="email" inputmode="email" name="email" value="{{old('email')}}" placeholder="yamada.taro0623@playlist.co.jp" required>
              <p class="entryform-attention">※半角英数字で入力してください。</p>
            </li>
            <li>
              <label>
                <h3>電話番号<span>必須</span></h3>
              </label>
              <input type="tel" inputmode="numeric" name="tel" value="{{old('tel')}}" placeholder="0123456789" required>
              <p class="entryform-attention">※半角数字で、ハイフンなしで入力してください。</p>
            </li>
            <li class="entryform-list_file">
              <label>
                <h3>履歴書・職務経歴書など<span>必須</span></h3>
              </label>
              <p class="entryform-list_file_request">ファイル形式は、PDFにてお願いいたします。</p>
              <label class="entryform-list_file_select">
                <input type="file" accept=".pdf" name="pdf" value="{{old('pdf')}}" multiple required>+ ファイルを選択
              </label>
              <p class="entryform-list_file_selectfile">選択されていません</p>
              <p class="entryform-list_file_attention">※アップロード可能なファイルの最大サイズはxxMBです。</p>
              <p class="entryform-list_file_attention">※最大0ファイルまで登録できます。</p>
            </li>
            <li class="entryform-list_url">
              <label>
                <h3>GitHubやブログ、<br />ポートフォリオサイトなどのURL</h3>
              </label>
              <p>
                <input type="url1" name="url1" value="{{old('url1')}}" placeholder="https://playlist.co.jp/">
              </p>
              <p>
                <input type="url2" name="url2" value="{{old('url2')}}" placeholder="https://playlist.co.jp/contact/">
              </p>
              <p>
                <input type="url3" name="url3" value="{{old('url3')}}" placeholder="https://playlist.co.jp/contact/">
              </p>
            </li>
            <li class="entryform-list_message">
              <label>
                <h3>弊社へのメッセージ</h3>
              </label>
              <textarea type="textarea" name="message" value="{{old('message')}}" maxlength="300"></textarea>
            </li>
          </ul>
          <div class="privacy">
            <h3>プライバシーポリシー</h3>
            <p class="privacy-content">
              Playlist株式会社(以下、当社)は、当社の業務を円滑に行うため、お客さまの氏名、住所、電話番号、
              Eメールアドレス等の情報(以下、個人情報といいます)を取得・利用致します。当社が利用する個人情報につきましては、
              以下の通り取り扱わせていただきます。
            </p>
            <h4>1.個人情報の取り扱いについて</h4>
            <p>
              当社は、「個人情報の保護に関する法律」および関係法令を遵守して、個人情報の保護に努めます。
            </p>
            <h4>2.利用目的について</h4>
            <p>
              当社が保有する個人情報の利用目的は以下のとおりです。<br>
              お客様の問い合わせに対するご回答
            </p>
            <h4>3.第三者への提供について</h4>
            <p>
              当社は、ご本人の同意がある場合や法令に基づく場合を除き、当社が保有する個人情報を第三者に提供、開示いたしません。
            </p>
            <h4>4.利用目的の通知、開示、訂正、追加又は削除、利用停止又は消去、第三者への提供の停止に関するお申し出について</h4>
            <p>
              当社の保有個人データに関して、ご自身の情報の利用目的の通知、開示、訂正、追加又は削除、利用停止又は消去、
              第三者への提供の停止をご希望される場合は、お申し出いただいた方がご本人であることを確認した上で、合理的な期間及び範囲で対応致します。
              お客さまのお申し出の全部又は一部に応じることができない場合は、その理由をご連絡させていだきます。
            </p>
          </div>
          <div id="entryform-check-btn">
            <button class="entryform-check-btn" type="submit" disabled>
              プライバシーポリシーに同意して<br />入力内容の確認へ
              <svg class="entry-btn_arrow" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                <path d="M8.2458 14.394C7.93621 14.7087 7.36656 14.4254 7.36991 13.9583L7.46358 1.04965C7.46674 0.611324 7.98084 0.43609 8.30287 0.76349L14.5124 7.07647C14.7823 7.35096 14.7817 7.79618 14.5108 8.06954L8.2458 14.394Z" fill="#333333" />
              </svg>
            </button>
          </div>
        </form>
      </section>
    </div>
  </div>
</main>
@endsection
