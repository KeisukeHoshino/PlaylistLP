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
                <img src="{{asset('img/member/member_yutay.jpg')}}" alt="吉村優太">
                <p class="role">CEO</p>
                <h4>Yuta.Y</h4>
            </li>
            <li>
                <img src="{{asset('img/member/member_takahiroa.jpg')}}" alt="新垣貴弘">
                <p class="role">COO/SALES</p>
                <h4>Takahiro.A</h4>
            </li>
            <li>
                <img src="{{asset('img/member/member_tarot.jpg')}}" alt="武井太郎">
                <p class="role">CHO/HR/PR</p>
                <h4>Taro.T</h4>
            </li>
            <li>
                <img src="{{asset('img/member/member_minamiy.jpg')}}" alt="安井みなみ">
                <p class="role">BDR</p>
                <h4>Minami.Y</h4>
            </li>
            <li>
                <img src="{{asset('img/member/member_maoo.jpg')}}" alt="大澤舞緒">
                <p class="role">ENGINEER</p>
                <h4>Mao.O</h4>
            </li>
            <li>
                <img src="{{asset('img/member/member_takuyam.jpg')}}" alt="増田拓也">
                <p class="role">ENGINEER</p>
                <h4>Takuya.M</h4>
            </li>
            <li>
                <img src="{{asset('img/member/member_ryow.jpg')}}" alt="渡部諒">
                <p class="role">ENGINEER</p>
                <h4>Ryo.W</h4>
            </li>
            <li>
                <img src="{{asset('img/member/member_masahiros.jpg')}}" alt="園田将宏">
                <p class="role">ENGINEER</p>
                <h4>Masahiro.S</h4>
            </li>
            <li>
                <img src="{{asset('img/member/member_yuio.jpg')}}" alt="小口結">
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
    <section id="career-path">
        <div class="">
            <h2>
                CAREER PATH
            </h2>
            <h3>
                入社後のキャリアパス
            </h3>
        </div>
        <div class="career-path-message">
            <p>Playlist社員の入社後のキャリアパスをご紹介します。</p>
            <span class="annotation">※情報は2023年8月時点のものです。</span>
        </div>
        <div class="career-path-wrapper">
            <div class="row">
                {{-- 1人目（星野さん） --}}
                <div class="career-path-1 career-path-main">
                    <div class="career-path-b cp-b-pc">
                        <div class="career-path-about">
                            <div class="career-path-about-name">
                                <p>Keisuke.H（25歳）</p>
                            </div>
                            <div class="career-path-about-text pc">
                                <p>
                                    独学でIT知識やプログラミング知識・技術を1年学習。<br>
                                    Playlistへ⼊社後、1年で開発案件を担当。<br>
                                    現在はWebエンジニアを⽬指し活躍中。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex">
                            <div class="career-path-a">
                                <div class="career-path-img">
                                    <img src="{{asset('img/member/career_hoshino.jpeg')}}">
                                </div>
                            </div>
                            <div class="career-path-b cp-b-sp">
                                <div class="career-path-about">
                                    <div class="career-path-about-name">
                                        <p>Keisuke.H（25歳）</p>
                                    </div>
                                    <div class="career-path-about-text">
                                        <p>独学でIT知識やプログラミング知識・技術を1年学習。Playlistへ⼊社後、1年で開発案件を担当。現在はWebエンジニアを⽬指し活躍中。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="career-path-c">
                            <ul id="timeline">
                                <li>
                                    <div>
                                        <span class="date">2021.09</span>
                                    </div>
                                    <div class='circle'>
                                        <span class="vertical-line vl-1"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <circle cx="11" cy="11" r="3.5" fill="white" stroke="#FF9933" stroke-width="3" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        入社
                                        <br>
                                        テスト案件
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span class="date">2021.12</span>
                                    </div>
                                    <div class='circle'>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <circle cx="11" cy="11" r="3.5" fill="white" stroke="#FF9933" stroke-width="3" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        社内業務
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span class="date">2021.01</span>
                                    </div>
                                    <div class='circle'>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <circle cx="11" cy="11" r="3.5" fill="white" stroke="#FF9933" stroke-width="3" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        テスト案件
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span class="date">2022.06</span>
                                    </div>
                                    <div class='circle'>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <circle cx="11" cy="11" r="3.5" fill="white" stroke="#FF9933" stroke-width="3" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        Java開発案件
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- 2人目 (渡部さん) --}}
                <div class="career-path-2 career-path-main">
                    <div class="career-path-b cp-b-pc">
                        <div class="career-path-about">
                            <div class="career-path-about-name">
                                <p>Ryo.W（26歳）</p>
                            </div>
                            <div class="career-path-about-text pc">
                                <p>
                                    SIer企業にてエンジニアのキャリアをスタート。<br>
                                    データを活⽤した技術への成⻑を⽬指しSIer企業からPlaylistへ転職。<br>
                                    ⼊社後6ヶ⽉でPythonを使⽤した案件への参画を実現。<br>
                                    社内では、若⼿エンジニアの教育や社内の課題解決などリードメンバーとしてPlaylistを推進。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex">
                            <div class="career-path-a">
                                <div class="career-path-img">
                                    <img src="{{asset('img/member/career_ryo.jpeg')}}">
                                </div>
                            </div>
                            <div class="career-path-b cp-b-sp">
                                <div class="career-path-about">
                                    <div class="career-path-about-name">
                                        <p>Ryo.W（26歳）</p>
                                    </div>
                                    <div class="career-path-about-text">
                                        <p>SIer企業にてエンジニアのキャリアをスタート。データを活⽤した技術への成⻑を⽬指しSIer企業からPlaylistへ転職。⼊社後6ヶ⽉でPythonを使⽤した案件への参画を実現。社内では、若⼿エンジニアの教育や社内の課題解決などリードメンバーとしてPlaylistを推進。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="career-path-c">
                            <ul id="timeline">
                                <li>
                                    <div>
                                        <span class="date">2022.02</span>
                                    </div>
                                    <div class='circle'>
                                        <span class="vertical-line vl-2"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <circle cx="11" cy="11" r="3.5" fill="white" stroke="#FF9933" stroke-width="3" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        入社
                                        <br>
                                        車載ソフトウェアのテスト案件
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span class="date">2022.09</span>
                                    </div>
                                    <div class='circle'>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <circle cx="11" cy="11" r="3.5" fill="white" stroke="#FF9933" stroke-width="3" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        アカウント管理システムの開発
                                        <br>
                                        Playlistのリードメンバーに就任
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- 3人目 (上田さん) --}}
                <div class="career-path-3 career-path-main">
                    <div class="career-path-b cp-b-pc">
                        <div class="career-path-about">
                            <div class="career-path-about-name">
                                <p>Mao.U（25歳）</p>
                            </div>
                            <div class="career-path-about-text pc">
                                <p>
                                    新卒でWeb制作会社にて、フロントエンドエンジニアとして複数クライアントのWebサイトのコーディングに携わる。<br>
                                    キャリアアップを目標にさらに自分の可能性を広げられると思い、Playlistへ転職する。<br>
                                    現在のプロジェクトは、大手小売店の自社サイトの開発、更新、検証を担当。<br>
                                    社内業務として、採用LP制作においてプロジェクト推進中。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex">
                            <div class="career-path-a">
                                <div class="career-path-img">
                                    <img src="{{asset('img/member/careerpath-maou.png')}}">
                                </div>
                            </div>
                            <div class="career-path-b cp-b-sp">
                                <div class="career-path-about">
                                    <div class="career-path-about-name">
                                        <p>Mao.U（25歳）</p>
                                    </div>
                                    <div class="career-path-about-text">
                                        <p>新卒でWeb制作会社にて、フロントエンドエンジニアとして複数クライアントのWebサイトのコーディングに携わる。キャリアアップを目標にさらに自分の可能性を広げられると思い、Playlistへ転職する。現在のプロジェクトは、大手小売店の自社サイトの開発、更新、検証を担当。社内業務として、採用LP制作においてプロジェクト推進中。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="career-path-c">
                            <ul id="timeline">
                                <li>
                                    <div>
                                        <span class="date">2023.04</span>
                                    </div>
                                    <div class='circle'>
                                        <span class="vertical-line vl-1"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <circle cx="11" cy="11" r="3.5" fill="white" stroke="#FF9933" stroke-width="3" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        入社
                                        <br>
                                        Webサイト開発・検証（フロントエンド）
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span class="date">2023.09</span>
                                    </div>
                                    <div class='circle'>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <circle cx="11" cy="11" r="3.5" fill="white" stroke="#FF9933" stroke-width="3" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        採用LP制作（若手メンバーのサポート）
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- 4人目 (大沢さん) --}}
                <div class="career-path-2 career-path-main">
                    <div class="career-path-b cp-b-pc">
                        <div class="career-path-about">
                            <div class="career-path-about-name">
                                <p>Mao.O（30歳）</p>
                            </div>
                            <div class="career-path-about-text pc">
                                <p>
                                    新しいことを勉強するのが好きだったためシステムエンジニアを目指す。<br>
                                    新卒にてSIerで、汎用系システム開発やWeb、基幹システム開発に携わる。<br>
                                    その後、Playlistの創業メンバーとして、RPA、Pythonを用いてAI事業やデータ分析、DX支援業務に携わる。<br>
                                    現在はSalesforceに携わり業務支援業務プロジェクト推進するほか、新人研修でVBAやSQL研修を作成する。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex">
                            <div class="career-path-a">
                                <div class="career-path-img">
                                    <img src="{{asset('img/member/careerpath-maoo.png')}}">
                                </div>
                            </div>
                            <div class="career-path-b cp-b-sp">
                                <div class="career-path-about">
                                    <div class="career-path-about-name">
                                        <p>Mao.O（30歳）</p>
                                    </div>
                                    <div class="career-path-about-text">
                                        <p>新しいことを勉強するのが好きだったためシステムエンジニアを目指す。新卒にてSIerで、汎用系システム開発やWeb、基幹システム開発に携わる。その後、Playlistの創業メンバーとして、RPA、Pythonを用いてAI事業やデータ分析、DX支援業務に携わる。現在はSalesforceに携わり業務支援業務プロジェクト推進するほか、新人研修でVBAやSQL研修を作成する。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="career-path-c">
                            <ul id="timeline">
                                <li>
                                    <div>
                                        <span class="date">2020.07</span>
                                    </div>
                                    <div class='circle'>
                                        <span class="vertical-line vl-2"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <circle cx="11" cy="11" r="3.5" fill="white" stroke="#FF9933" stroke-width="3" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        入社
                                        <br>
                                        RPA、Python(AI〜DX支援開発)
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span class="date">2023.10</span>
                                    </div>
                                    <div class='circle'>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <circle cx="11" cy="11" r="3.5" fill="white" stroke="#FF9933" stroke-width="3" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        Salesforce事業部に配属
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- エントリーボタンの呼び出し --}}
    @yield('entry_btn')
</div>
@endsection
