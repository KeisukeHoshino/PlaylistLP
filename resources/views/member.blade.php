@extends('layouts.layout')
@include('components.entry_btn')
@include('layouts.header')

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
    <section>
        <div class="b-heading">
            <h2>
                MEMBER
            </h2>
            <h3>
                メンバー
            </h3>
            <p class="member-message">
                PlaylistはIT未経験からエンジニアを目指している人が多い会社です。社内メンバーと共に一緒に成長していける環境を整えていますので、エンジニアになるためのキャリアを私たちと共に描きましょう！！
            </p>
            <ul>
                <li>
                    <!-- TODO：画像を修正 -->
                    <img src="{{asset('img/member/career_ryo.jpeg')}}" alt="">
                    <p class="post">CEO</p>
                    <h4>Yuta.Y</h4>
                </li>
                <li>
                    <!-- TODO：画像を修正 -->
                    <img src="{{asset('img/member/career_hoshino.jpeg')}}" alt="">
                    <p>COO/SALES</p>
                    <h4>Takahiro.A</h4>
                </li>
                <li>
                    <!-- TODO：画像を修正 -->
                    <img src="{{asset('img/member/career_ryo.jpeg')}}" alt="">
                    <p>CHO/HR/PR</p>
                    <h4>Taro.T</h4>
                </li>
                <li>
                    <!-- TODO：画像を修正 -->
                    <img src="{{asset('img/member/career_hoshino.jpeg')}}" alt="">
                    <p>BDR</p>
                    <h4>Minami.Y</h4>
                </li>
                <li>
                    <!-- TODO：画像を修正 -->
                    <img src="{{asset('img/member/career_ryo.jpeg')}}" alt="">
                    <p>ENGINEER</p>
                    <h4>Mao.O</h4>
                </li>
                <li>
                    <!-- TODO：画像を修正 -->
                    <img src="{{asset('img/member/career_hoshino.jpeg')}}" alt="">
                    <p>ENGINEER</p>
                    <h4>Takuya.M</h4>
                </li>
                <li>
                    <!-- TODO：画像を修正 -->
                    <img src="{{asset('img/member/career_ryo.jpeg')}}" alt="">
                    <p>ENGINEER</p>
                    <h4>Ryo.W</h4>
                </li>
                <li>
                    <!-- TODO：画像を修正 -->
                    <img src="{{asset('img/member/career_hoshino.jpeg')}}" alt="">
                    <p>ENGINEER</p>
                    <h4>Masahiro.S</h4>
                </li>
                <li>
                    <!-- TODO：画像を修正 -->
                    <img src="{{asset('img/member/career_ryo.jpeg')}}" alt="">
                    <p>ENGINEER</p>
                    <h4>Yui.O</h4>
                </li>
                <li class="andmore">
                    <p>and more...</p>
                </li>
            </ul>
        </div>
    </section>

    {{-- INTERBVIEW --}}
    <section">
        <div class="b-heading">
            <span>
                INTERBVIEW
            </span>
            <h3>
                社員インタビュー
            </h3>
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

@include('layouts.footer')
