@extends('layouts.layout')
@include('components.entry_btn')

@section('content')
<main>

  {{--  KV --}}
  <div class="p-top-kv">
    <div class="p-top-kv_pic">
      <div class="swiper js-kvSlide">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <picture>
              <source srcset="{{asset('img/top/kv01-pc.jpg')}}" media="(min-width:640px)" type="image/jpeg">
              <img class="u-top-img" src="{{asset('img/top/kv01.jpg')}}" alt="">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="{{asset('img/top/kv02-pc.jpg')}}" media="(min-width:640px)" type="image/jpeg">
              <img class="u-top-img" src="{{asset('img/top/kv02.jpg')}}" alt="">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="{{asset('img/top/kv03-pc.jpg')}}" media="(min-width:640px)" type="image/jpeg">
              <img class="u-top-img" src="{{asset('img/top/kv03.jpg')}}" alt="">
            </picture>
          </div>
        </div>
      </div>
      <div class="p-top-kv_animation">
        <img class="p-top-kv_animation-arrow u-top-img" src="{{asset('img/top/kv-arrow.svg')}}" alt="">
        <img class="p-top-kv_animation-scroll u-top-img" src="{{asset('img/top/kv-scroll.svg')}}" alt="スクロール">
      </div>
    </div>
    <div class="p-top-kv_text c-top-inner-sp">
      <p class="p-top-kv_heading-sub">GROWTH OPPORTUNITIES ARE HERE.</p>
      <h1 class="p-top-kv_heading">成長機会が<br>ここにある</h1>
      <div class="p-top-kv_entry">
        <a href="/entry/" class="p-top-kv_entry_btn" data-gtm-click="kv_entry">ENTRY</a>
        <a href="/requirements/" class="p-top-kv_entry_textlink" data-gtm-click="kv_requirements">募集要項はこちら</a>
      </div>
    </div>
  </div>

  {{-- お知らせ --}}
  <section id="news" class="p-top-news">
    <div class="c-top-inner-pc c-top-inner-sp">
      <h2 class="c-top-heading-h2"><span>NEWS</span>お知らせ</h2>
      <ul class="p-top-news_list">
        <li>
          <p class="p-top-news_date">2024/03/28</p>
          <p class="p-top-news_contents"><a href="https://tenshoku.mynavi.jp/event/tokyo/20240519A/" target="_blank" data-gtm-click="news_01">5/19（日）マイナビ転職フェアに参加いたします</a></p>
        </li>
        <li>
          <p class="p-top-news_date">2024/03/28</p>
          <p class="p-top-news_contents"><a data-gtm-click="news_02">6/22（土）マイナビ転職フェアに参加いたします</a></p>
        </li>
      </ul>
    </div>
  </section>

  {{-- Playlistについて --}}
  <section id="aboutus" class="p-top-about">
    <div class="c-top-inner-pc c-top-inner-sp">
      <h2 class="c-top-heading-h2"><span>ABOUT US</span>Playlistについて</h2>
      <div class="p-top-about_pic">
        <picture>
          <source srcset="{{asset('img/top/aboutus-pc.png')}}" media="(min-width:640px)" type="image/png">
          <img class="u-top-img" src="{{asset('img/top/aboutus.png')}}" alt="複数人の社員が２列に並んでいる写真">
        </picture>
      </div>
    </div>
    <div class="p-top-about_mvv u-top-bg-orange">
      <div class="p-top-about_mvv_column c-top-inner-pc c-top-inner-sp">
        <div class="p-top-about_mvv_column-left">
          <div class="p-top-about_mvv_item">
            <h3 class="p-top-about_mvv_heading">VISION</h3>
            <dl class="p-top-about_mvv_detail">
              <dt>お気に入りを創出する</dt>
              <dd>Playlistの社名は音楽用語のプレイリスト(お気に入り)が由来です。<br class="u-top-only-pc">関わる全ての人へお気に入りを提供することが、<br class="u-top-only-pc">私たちが実現するビジョンと考えています。</dd>
            </dl>
          </div>
          <div class="p-top-about_mvv_item">
            <h3 class="p-top-about_mvv_heading">MISSION</h3>
            <dl class="p-top-about_mvv_detail">
              <dt>新しい選択肢を提供</dt>
              <dd>私たちは生きていく中で常にいくつもの判断を続けています。<br class="u-top-only-pc">これからも迷い、考え続けながら意思決定の判断をする中で、<br class="u-top-only-pc">Playlistから新しい選択肢の提供をすることが、<br class="u-top-only-pc">誰かのチャレンジとなり成⻑機会へ繋がると考えています。</dd>
            </dl>
          </div>
        </div>
        <div class="p-top-about_mvv_column-right">
          <div class="p-top-about_mvv_item">
            <h3 class="p-top-about_mvv_heading">VALUE</h3>
            <dl class="p-top-about_mvv_detail">
              <dt>失敗と向き合う</dt>
              <dd>ただ失敗を経験するだけではなく、<br class="u-top-only-pc">失敗と向き合い学ぶことで初めて成⻑します。<br>Playlistは失敗は恐れない姿勢を大事にします。</dd>
              <dt>多様性を尊重する姿勢</dt>
              <dd>Playlistは様々な価値観があることを理解します。<br>企業を成⻑させる目的のもと仲間を尊重し、<br class="u-top-only-pc">協力していくことが成⻑スピードに繋がります。</dd>
              <dt>既知より未知なる体験を選ぶ</dt>
              <dd>新しいチャレンジが自分を変える出来事になります。<br>この先が知っている道であればPlaylistは冒険を選択します。</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <div class="p-top-about_business">
      <div class="c-top-inner-pc c-top-inner-sp">
        <h3 class="p-top-about_business_heading">事業内容</h3>
        <ul class="p-top-about_business_column">
          <li class="p-top-about_business_item">
            <h4 class="p-top-about_business_item_heading">1.SES事業</h4>
            <p class="p-top-about_business_item_desc">技術課題や⼈員不⾜に困っている様々な企業の開発現場へ、Playlistから技術支援として人材を提供します。<br>自分自身が得たいスキルを、効率的に学ぶことができます。</p>
            <div class="p-top-about_business_item_img">
              <picture>
                <source srcset="{{asset('img/top/aboutus-figure-ses-pc.png')}}" media="(min-width:640px)" type="image/png">
                <img class="u-top-img" src="{{asset('img/top/aboutus-figure-ses.png')}}" alt="SES事業を表した図">
              </picture>
            </div>
          </li>
          <li class="p-top-about_business_item">
            <h4 class="p-top-about_business_item_heading">2.ラボ開発事業</h4>
            <p class="p-top-about_business_item_desc">SESでそれぞれが得た技術やノウハウを活かし、<br>お客様のニーズに応えたプロジェクトの開発から運用までPlaylistを中心として各工程を進めていきます。</p>
            <div class="p-top-about_business_item_img">
              <picture>
                <source srcset="{{asset('img/top/aboutus-figure-labo-pc.png')}}" media="(min-width:640px)" type="image/png">
                <img class="u-top-img" src="{{asset('img/top/aboutus-figure-labo.png')}}" alt="ラボ開発事業を表した図">
              </picture>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  @yield('entry_btn')

  {{-- 代表メッセージ --}}
  <section id="message" class="p-top-message">
    <div class="c-top-inner-pc c-top-inner-sp">
      <h2 class="c-top-heading-h2"><span>MESSAGE</span>代表メッセージ</h2>
      <div class="p-top-message_column">
        <div class="p-top-message_img">
          <picture>
            <source srcset="{{asset('img/top/message-pc.png')}}" media="(min-width:640px)" type="image/png">
            <img class="u-top-img" src="{{asset('img/top/message.png')}}" alt="CEO吉村優太の写真">
          </picture>
        </div>
        <div class="p-top-message_text">
          <p class="p-top-message_eyecatch">私にとってのお気に入りは<br>Playlistの組織力ですね。</p>
          <p class="p-top-message_main">ひとりで何かを成し遂げるよりも、組織の方がもっと大きい挑戦ができると考えています。<br>ひとりでできる開発プロジェクトと、チームで取り組むプロジェクトでは当たり前ですがその規模は全く異なります。<br>「世の中をもっと便利にしたい」<br>「こんなサービスがあったら快適」<br>というやりたい事が出てきた時にすぐ動ける力を全員が持つことが重要です。<br>私たちは、エンジニアとしてひとりでしか見ることができない景色ではなく、チームでなければ見ることのできない壮大な景色をみんなで一緒に楽しみたいと考えています。<br><br>創業4期目が始まった今、Playlistでは未経験者も経験者もフラットにお互いを高め合う組織力が育ってきていると感じています。<br><br>個人のレベルを向上させつつ組織を楽しみたい方は、ぜひ一緒に頑張りましょう！</p>
          <p class="p-top-message_from">CEO<span>吉村優太</span></p>
        </div>
      </div>
    </div>
  </section>

  {{-- お気に入りポイント --}}
  <section id="points" class="p-top-points u-top-bg-orange">
    <div class="c-top-inner-pc c-top-inner-sp">
      <h2 class="c-top-heading-h2 -white"><span>Playlist <br class="u-top-only-sp">POINTS</span>実際に働く社員のPlaylistお気に入りポイント</h2>
      <ul class="p-top-points_list">
        <li data-frame-size-sp="large">
          <p>
            <picture>
              <source srcset="{{asset('img/top/voice01-pc.svg')}}" media="(min-width:640px)" type="image/svg+xml">
              <img class="u-top-img" src="{{asset('img/top/voice01.svg')}}" alt="SESだから自分が得たい・伸ばしたいスキルを効率的に学びながら働ける">
            </picture>
          </p>
        </li>
        <li data-frame-size-sp="small">
          <p>
            <picture>
              <source srcset="{{asset('img/top/voice02-pc.svg')}}" media="(min-width:640px)" type="image/svg+xml">
              <img class="u-top-img" src="{{asset('img/top/voice02.svg')}}" alt="研修が豊富だから業界未経験でも不安が少なかった">
            </picture>
          </p>
        </li>
        <li data-frame-size-sp="small">
          <p>
            <picture>
              <source srcset="{{asset('img/top/voice03-pc.svg')}}" media="(min-width:640px)" type="image/svg+xml">
              <img class="u-top-img" src="{{asset('img/top/voice03.svg')}}" alt="やりたい気持ちを応援、支援してくれる">
            </picture>
          </p>
        </li>
        <li data-frame-size-sp="large">
          <p>
            <picture>
              <source srcset="{{asset('img/top/voice04-pc.svg')}}" media="(min-width:640px)" type="image/svg+xml">
              <img class="u-top-img" src="{{asset('img/top/voice04.svg')}}" alt="現場によって使っているツールなども違うから様々なものに触れることができる">
            </picture>
          </p>
        </li>
        <li data-frame-size-sp="large">
          <p>
            <picture>
              <source srcset="{{asset('img/top/voice05-pc.svg')}}" media="(min-width:640px)" type="image/svg+xml">
              <img class="u-top-img" src="{{asset('img/top/voice05.svg')}}" alt="社員同士の距離感が近いから意見を言いやすい">
            </picture>
          </p>
        </li>
      </ul>
      <a href="/member/" class="p-top-points_btn" data-gtm-click="points">社員のことをもっと知る</a>
    </div>
  </section>

  {{-- よくある質問 --}}
  <section id="faq" class="p-top-faq">
    <div class="c-top-inner-pc c-top-inner-sp">
      <h2 class="c-top-heading-h2"><span>FAQ</span>よくある質問</h2>
      <dl class="p-top-faq_list js-accordion">
        <div class="p-top-faq_item">
          <dt data-gtm-click="faq_01"><span>Q.</span>IT業界の経験は必要ですか？</dt>
          <dd><span>A.</span>IT未経験でも今までの経験やスキルを活かしたプロジェクトで活躍していただくことが可能です。</dd>
        </div>
        <div class="p-top-faq_item">
          <dt data-gtm-click="faq_02"><span>Q.</span>面接場所について教えて下さい。</dt>
          <dd><span>A.</span>基本はオンラインです。希望者はオフラインで武蔵小杉オフィスで実施可能です。</dd>
        </div>
        <div class="p-top-faq_item">
          <dt data-gtm-click="faq_03"><span>Q.</span>応募前に話をきいてみたいのですが、可能ですか？</dt>
          <dd><span>A.</span>可能です。カジュアル面談を設けておりますので、<a href="/entry/">エントリー</a>よりお気軽にご連絡下さい。</dd>
        </div>
        <div class="p-top-faq_item">
          <dt data-gtm-click="faq_04"><span>Q.</span>髪型や服装に決まりはありますか？</dt>
          <dd><span>A.</span>参画したプロジェクトによって異なりますが、基本はオフィスカジュアルです。TPOに応じた清潔感のある服装を心がけて下さい。</dd>
        </div>
        <div class="p-top-faq_item">
          <dt data-gtm-click="faq_05"><span>Q.</span>研修はありますか？</dt>
          <dd><span>A.</span>「成長に繋がるコミュニケーション」を軸に積極的な社内研修を実施しています。自社で研修を構築しているところが強みです。<br>●フロントエンド研修（自己紹介サイト）<br>●SQL研修（SQLの基本操作）<br>●VBA研修（ツール作成）<br>●RPA研修（資格取得サポート）<br>●その他（Udemyでオンライン講座：入社前研修）</dd>
        </div>
      </dl>
    </div>
  </section>

  @yield('entry_btn')

</main>

@endsection
