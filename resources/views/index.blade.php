@extends('layouts.layout')
@include('components.entry_btn')

@section('content')
<main>

  @yield('entry_btn')

  {{--  代表メッセージ --}}
  <section class="p-top-message">
    <div class="c-top-inner-pc c-top-inner-sp">
      <h2 class="c-top-heading-h2"><span>MESSAGE</span>代表メッセージ</h2>
      <div class="p-top-message_column">
        <div class="p-top-message_img">
          <picture>
            <source srcset="{{asset('img/top/message-pc.png')}}" media="(min-width:640px)" type="image/png">
            <img class="u-top-img" src="{{asset('img/top/message.png')}}" alt="吉村優太">
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

  {{--  お気に入りポイント --}}
  <section class="p-top-points u-top-bg-orange">
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
      <a href="/member/" class="p-top-points_btn">社員のことをもっと知る</a>
    </div>
  </section>

  @yield('entry_btn')

</main>

@endsection
