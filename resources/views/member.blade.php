@extends('layouts.layout')
@include('components.entry_btn')

@section('content')
<div class="member-introduction-wrapper">
    {{-- タイトル --}}
    <div class="member-introduction-title">
        <h2 class="member-introduction-h1">
            INTRODUCTION
        </h2>
        <p class="member-introduction-subtitle">
            社員紹介
        </p>
    </div>

    {{-- タイトルアンカー --}}
    <div class="member-anchor">
        <ul>
            <li>
                <h3>メンバー</h3>
            </li>
            <li>
                <h3>社員インタビュー</h3>
            </li>
            <li>
                <h3>キャリアパス</h3>
            </li>
        </ul>
    </div>

    {{-- MEMBER --}}
    <section id="member">
            <h2>
                MEMBER
            </h2>
            <h3>
                メンバー
            </h3>
            <p class="member-message">
                PlaylistはIT未経験からエンジニアを目指している人が多い会社です。<br class="sp_br">
                社内メンバーと共に一緒に成長していける環境を整えていますので、エンジニアになるためのキャリアを私たちと共に描きましょう！！
            </p>
            <ul>
                <li>
                    <!-- TODO：画像を修正 -->
                    <img src="{{asset('img/member/career_ryo.jpeg')}}" alt="">
                    <p class="role">CEO</p>
                    <h4>Yuta.Y</h4>
                </li>
                <li>
                    <!-- TODO：画像を修正 -->
                    <img src="{{asset('img/member/career_hoshino.jpeg')}}" alt="">
                    <p class="role">COO/SALES</p>
                    <h4>Takahiro.A</h4>
                </li>
                <li>
                    <!-- TODO：画像を修正 -->
                    <img src="{{asset('img/member/career_ryo.jpeg')}}" alt="">
                    <p class="role">CHO/HR/PR</p>
                    <h4>Taro.T</h4>
                </li>
                <li>
                    <!-- TODO：画像を修正 -->
                    <img src="{{asset('img/member/career_hoshino.jpeg')}}" alt="">
                    <p class="role">BDR</p>
                    <h4>Minami.Y</h4>
                </li>
                <li>
                    <!-- TODO：画像を修正 -->
                    <img src="{{asset('img/member/career_ryo.jpeg')}}" alt="">
                    <p class="role">ENGINEER</p>
                    <h4>Mao.O</h4>
                </li>
                <li>
                    <!-- TODO：画像を修正 -->
                    <img src="{{asset('img/member/career_hoshino.jpeg')}}" alt="">
                    <p class="role">ENGINEER</p>
                    <h4>Takuya.M</h4>
                </li>
                <li>
                    <!-- TODO：画像を修正 -->
                    <img src="{{asset('img/member/career_ryo.jpeg')}}" alt="">
                    <p class="role">ENGINEER</p>
                    <h4>Ryo.W</h4>
                </li>
                <li>
                    <!-- TODO：画像を修正 -->
                    <img src="{{asset('img/member/career_hoshino.jpeg')}}" alt="">
                    <p class="role">ENGINEER</p>
                    <h4>Masahiro.S</h4>
                </li>
                <li>
                    <!-- TODO：画像を修正 -->
                    <img src="{{asset('img/member/career_ryo.jpeg')}}" alt="">
                    <p class="role">ENGINEER</p>
                    <h4>Yui.O</h4>
                </li>
                <li class="andmore">
                    <p>and more...</p>
                </li>
            </ul>
    </section>

    {{-- INTERBVIEW --}}
    <section id="interview">
        <h2>
            INTERVIEW
        </h2>
        <h3>
            社員インタビュー
        </h3>
        <ul>
            <li class="interview-list">
                <div class="interview-list_img">
                    <img src="{{asset('img/member/interview_kigure.jpeg')}}" alt="木暮暁のインタビュー">
                </div>
                <p class="interview-list_date">
                    <time datetime="2023-05-09">2023/05/09</time>
                </p>
                <p class="interview-list_content">
                    【エンジニアインタビュー】正直モチベーションが下がったらどうしてる？
                </p>
            </li>
            <li class="interview-list">
                <div class="interview-list_img">
                    <img src="{{asset('img/member/interview_hasegawa.jpeg')}}" alt="長谷川太一のインタビュー">
                </div>
                <p class="interview-list_date">
                    <time datetime="2023-04-27">2023/04/27</time>
                </p>
                <p class="interview-list_content">
                    【体験談】「自分の手でサービスを作れたら」淡い気持ちが形になり始めた…初プロジェクトを終えて長谷川さんへインタビュー
                </p>
            </li>
            <li class="interview-list">
                <div class="interview-list_img">
                    <img src="{{asset('img/member/interview_yoshimura.jpeg')}}" alt="吉村優太のインタビュー">
                </div>
                <p class="interview-list_date">
                    <time datetime="2023-04-20">2023/04/20</time>
                </p>
                <p class="interview-list_content">
                    【CEOインタビュー】「最初はPCの電源の付け方もわからなかった」エンジニア歴15年以上、吉村が目指すPlaylistとは？
                </p>
            </li>
            <li class="interview-list">
                <div class="interview-list_img">
                    <img src="{{asset('img/member/interview_hiruma.jpeg')}}" alt="昼間みなみのインタビュー">
                </div>
                <p class="interview-list_date">
                    <time datetime="2023-04-13">2023/04/13</time>
                </p>
                <p class="interview-list_content">
                    【Java研修を終えて】目標はアプリ開発！入社3カ月での変化
                </p>
            </li>
        </ul>
        <div class="interview-seemore">
            <a href="https://www.wantedly.com/companies/Playlist0623/stories" target="_blank" class="interview-seemore_btn">
                もっと見る
                <svg class="interview-seemore_jump" xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                    <rect x="1.25" y="3.75" width="10.5" height="10.5" rx="1.25" stroke="#333333" stroke-width="1.5" />
                    <rect x="4.25" y="0.75" width="10.5" height="10.5" rx="1.25" fill="white" stroke="#333333" stroke-width="1.5" />
                </svg>
            </a>
            <p class="interview-seemore_kome">
                ※外部サイトWantedlyへ遷移します
            </p>
        </div>
    </section>

    {{-- エントリーボタンの呼び出し --}}
    @yield('entry_btn')

    {{-- CAREER PATH --}}
    <div class="career-path-wrapper">
        <div class="b-heading">
            <span>
                CAREER PATH
            </span>
            <h3>
                入社後のキャリアパス
            </h3>
        </div>
        <div class="b-heading-about">
            <p>Playlist社員の入社後のキャリアパスをご紹介します。</p>
            <span class="annotation">※情報は2023年8月時点のものです。</span>
        </div>
    </div>
</div>
@endsection
