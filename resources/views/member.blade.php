@extends('layouts.footer')
@extends('layouts.header')


@section('header')
@endsection
<div class="member-introduction-wrapper">
    {{-- タイトル --}}
    <div class="member-introduction-title">
        <h1 class="member-introduction-h1">
            INTRODUCTION
        </h1>
        <p class="member-introduction-subtitle">
            募集要項・選考フロー
        </p>
    </div>

    {{-- タイトルアンカー --}}
    <div class="requirements-anchor">
        <ul>
            <li><h6>メンバー</h6></li>
            <li><h6>社員インタビュー</h6></li>
            <li><h6>キャリアパス</h6></li>
        </ul>
    </div>

    {{-- MEMBER --}}
    <div class="member-wrapper">
        <div class="b-heading">
            <span>
                MEMBER
            </span>
            <h3>
                メンバー
            </h3>
        </div>
    </div>

    {{-- INTERBVIEW --}}
    <div class="interview-wrapper">
        <div class="b-heading">
            <span>
                INTERBVIEW
            </span>
            <h3>
                社員インタビュー
            </h3>
        </div>
    </div>

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



@section('footer')
@endsection
