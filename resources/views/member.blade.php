@extends('layouts.layout')

@section('content')
<div class="member-introduction-wrapper">
    {{-- タイトル --}}
    <div class="member-introduction-title">
        <h1 class="member-introduction-h1">
            INTRODUCTION
        </h1>
        <p class="member-introduction-subtitle">
            社員紹介
        </p>
    </div>

    {{-- タイトルアンカー styleに関しては_requirements.scssに記載 --}}
    <div class="title-anchor">
        <ul>
            <li>
                <a class="link-anchor" href="#member">
                    <div>
                        <h3>メンバー</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="5" viewBox="0 0 10 5" fill="none">
                            <path d="M0.830185 0.720866C0.641318 0.538141 0.807069 0.197771 1.08505 0.197517L8.76759 0.191149C9.02846 0.190922 9.13532 0.496023 8.9421 0.689243L5.21641 4.41494C5.05442 4.57693 4.78946 4.57867 4.62542 4.41881L0.830185 0.720866Z" fill="#333333" />
                        </svg>
                    </div>
                </a>
            </li>
            <li>
                <a class="link-anchor" href="#interview">
                    <div>
                        <h3>社員インタビュー</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="5" viewBox="0 0 10 5" fill="none">
                            <path d="M0.830185 0.720866C0.641318 0.538141 0.807069 0.197771 1.08505 0.197517L8.76759 0.191149C9.02846 0.190922 9.13532 0.496023 8.9421 0.689243L5.21641 4.41494C5.05442 4.57693 4.78946 4.57867 4.62542 4.41881L0.830185 0.720866Z" fill="#333333" />
                        </svg>
                    </div>
                </a>

            </li>

            <li>
                <a class="link-anchor" href="#career-path">
                    <div>
                        <h3>キャリアパス</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="5" viewBox="0 0 10 5" fill="none">
                            <path d="M0.830185 0.720866C0.641318 0.538141 0.807069 0.197771 1.08505 0.197517L8.76759 0.191149C9.02846 0.190922 9.13532 0.496023 8.9421 0.689243L5.21641 4.41494C5.05442 4.57693 4.78946 4.57867 4.62542 4.41881L0.830185 0.720866Z" fill="#333333" />
                        </svg>
                    </div>
                </a>
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
                <a href="https://www.wantedly.com/companies/Playlist0623/post_articles/505474" target="_blank">
                    <div class="interview-list_img">
                        <img src="{{asset('img/member/interview_kigure.jpeg')}}" alt="木暮暁のインタビュー">
                    </div>
                    <p class="interview-list_date">
                        <time datetime="2023-05-09">2023/05/09</time>
                    </p>
                    <p class="interview-list_content">
                        【エンジニアインタビュー】正直モチベーションが下がったらどうしてる？
                    </p>
                </a>
            </li>
            <li class="interview-list">
                <a href="https://www.wantedly.com/companies/Playlist0623/post_articles/501617" target="_blank">
                    <div class="interview-list_img">
                        <img src="{{asset('img/member/interview_hasegawa.jpeg')}}" alt="長谷川太一のインタビュー">
                    </div>
                    <p class="interview-list_date">
                        <time datetime="2023-04-27">2023/04/27</time>
                    </p>
                    <p class="interview-list_content">
                        【体験談】「自分の手でサービスを作れたら」淡い気持ちが形になり始めた…初プロジェクトを終えて長谷川さんへインタビュー
                    </p>
                </a>
            </li>
            <li class="interview-list">
                <a href="https://www.wantedly.com/companies/Playlist0623/post_articles/495705" target="_blank">
                    <div class="interview-list_img">
                        <img src="{{asset('img/member/interview_yoshimura.jpeg')}}" alt="吉村優太のインタビュー">
                    </div>
                    <p class="interview-list_date">
                        <time datetime="2023-04-20">2023/04/20</time>
                    </p>
                    <p class="interview-list_content">
                        【CEOインタビュー】「最初はPCの電源の付け方もわからなかった」エンジニア歴15年以上、吉村が目指すPlaylistとは？
                    </p>
                </a>
            </li>
            <li class="interview-list">
                <a href="https://www.wantedly.com/companies/Playlist0623/post_articles/498210" target="_blank">
                    <div class="interview-list_img">
                        <img src="{{asset('img/member/interview_hiruma.jpeg')}}" alt="昼間みなみのインタビュー">
                    </div>
                    <p class="interview-list_date">
                        <time datetime="2023-04-13">2023/04/13</time>
                    </p>
                    <p class="interview-list_content">
                        【Java研修を終えて】目標はアプリ開発！入社3カ月での変化
                    </p>
                </a>
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
    @include('components.entry_btn',['entryGtm' => 'introduction_entry_01','requirementsGtm' => 'introduction_requirements_01'])

    {{-- CAREER PATH --}}
    <section id="career-path">
        <div>
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
        <div class="career-path-list">
            {{-- 1人目（星野さん） --}}
            <div class="career-path-item">
                <div class="career-path-img u-member-only-sp">
                    <img src="{{asset('img/member/careerpath-keisukeh.jpg')}}">
                </div>
                <div class="career-path-intro">
                    <p class="career-path-name">Keisuke.H（26歳）</p>
                    <p class="career-path-desc">
                        独学でIT知識やプログラミング知識・技術を1年学習。<br>
                        Playlistへ⼊社後、1年で開発案件を担当。<br>
                        現在はWebエンジニアを⽬指し活躍中。
                    </p>
                </div>
                <div class="career-path-pc-column">
                    <div class="career-path-img u-member-only-pc">
                        <img src="{{asset('img/member/careerpath-keisukeh.jpg')}}">
                    </div>
                    <ol class="career-path-timeline">
                        <li class="career-path-timeline-item">
                            <p class="career-path-timeline-date">2021.09</p>
                            <p class="career-path-timeline-content">
                                入社
                                <br>
                                電力システム会社のテスト案件
                            </p>
                        </li>
                        <li class="career-path-timeline-item">
                            <p class="career-path-timeline-date">2021.12</p>
                            <p class="career-path-timeline-content">
                                社内業務
                            </p>
                        </li>
                        <li class="career-path-timeline-item">
                            <p class="career-path-timeline-date">2021.01</p>
                            <p class="career-path-timeline-content">
                                生命保険会社のテスト案件
                            </p>
                        </li>
                        <li class="career-path-timeline-item">
                            <p class="career-path-timeline-date">2022.06</p>
                            <p class="career-path-timeline-content">
                                Java開発案件
                            </p>
                        </li>
                    </ol>
                </div>
            </div>

            {{-- 2人目 (渡部さん) --}}
            <div class="career-path-item">
                <div class="career-path-img u-member-only-sp">
                    <img src="{{asset('img/member/careerpath-ryow.jpg')}}">
                </div>
                <div class="career-path-intro">
                    <p class="career-path-name">Ryo.W（27歳）</p>
                    <p class="career-path-desc">
                        SIer企業にてエンジニアのキャリアをスタート。<br>
                        データを活⽤した技術への成⻑を⽬指しSIer企業からPlaylistへ転職。<br>
                        ⼊社後6ヶ⽉でPythonを使⽤した案件への参画を実現。<br>
                        社内では、若⼿エンジニアの教育や社内の課題解決などリードメンバーとしてPlaylistを推進。
                    </p>
                </div>
                <div class="career-path-pc-column">
                    <div class="career-path-img u-member-only-pc">
                        <img src="{{asset('img/member/careerpath-ryow.jpg')}}">
                    </div>
                    <ol class="career-path-timeline">
                        <li class="career-path-timeline-item">
                            <p class="career-path-timeline-date">2022.02</p>
                            <p class="career-path-timeline-content">
                                入社
                                <br>
                                車載ソフトウェアのテスト案件
                            </p>
                        </li>
                        <li class="career-path-timeline-item">
                            <p class="career-path-timeline-date">2022.09</p>
                            <p class="career-path-timeline-content">
                                アカウント管理システムの開発
                                <br>
                                Playlistのリードメンバーに就任
                            </p>
                        </li>
                    </ol>
                </div>
            </div>

            {{-- 3人目 (上田さん) --}}
            <div class="career-path-item">
                <div class="career-path-img u-member-only-sp">
                    <img src="{{asset('img/member/careerpath-maou.jpg')}}">
                </div>
                <div class="career-path-intro">
                    <p class="career-path-name">Mao.U（25歳）</p>
                    <p class="career-path-desc">
                        新卒でWeb制作会社にて、フロントエンドエンジニアとして複数クライアントのWebサイトのコーディングに携わる。<br>
                        キャリアアップを目標にさらに自分の可能性を広げられると思い、Playlistへ転職する。<br>
                        現在のプロジェクトは、大手小売店の自社サイトの開発、更新、検証を担当。<br>
                        社内業務として、採用LP制作においてプロジェクト推進中。
                    </p>
                </div>
                <div class="career-path-pc-column">
                    <div class="career-path-img u-member-only-pc">
                        <img src="{{asset('img/member/careerpath-maou.jpg')}}">
                    </div>
                    <ol class="career-path-timeline">
                        <li class="career-path-timeline-item">
                            <p class="career-path-timeline-date">2023.04</p>
                            <p class="career-path-timeline-content">
                                入社
                                <br>
                                Webサイト開発・検証（フロントエンド）
                            </p>
                        </li>
                        <li class="career-path-timeline-item">
                            <p class="career-path-timeline-date">2023.09</p>
                            <p class="career-path-timeline-content">
                                採用LP制作（若手メンバーのサポート）
                            </p>
                        </li>
                    </ol>
                </div>
            </div>

            {{-- 4人目 (藤原さん) --}}
            <div class="career-path-item">
                <div class="career-path-img u-member-only-sp">
                    <img src="{{asset('img/member/careerpath-kaedef.jpg')}}">
                </div>
                <div class="career-path-intro">
                    <p class="career-path-name">Kaede.F（25歳）</p>
                    <p class="career-path-desc">
                        前職の接客業と並行してプログラミングの基礎知識を独学で習得。<br>
                        IT未経験でPlaylistへ入社してからは、様々なプロジェクトに携わることでITスキルの向上を実現する。<br>
                        現在のプロジェクトは、リリース予定のシステムに関わる品質向上を担当するテスターとし活躍中。
                    </p>
                </div>
                <div class="career-path-pc-column">
                    <div class="career-path-img u-member-only-pc">
                        <img src="{{asset('img/member/careerpath-kaedef.jpg')}}">
                    </div>
                    <ol class="career-path-timeline">
                        <li class="career-path-timeline-item">
                            <p class="career-path-timeline-date">2023/03</p>
                            <p class="career-path-timeline-content">
                                入社
                            </p>
                        </li>
                        <li class="career-path-timeline-item">
                            <p class="career-path-timeline-date">2023/04</p>
                            <p class="career-path-timeline-content">
                                情報セキュリティマネジメント業務
                            </p>
                        </li>
                        <li class="career-path-timeline-item">
                            <p class="career-path-timeline-date">2024/01</p>
                            <p class="career-path-timeline-content">
                                廃棄PC 返却キット作成と回収
                            </p>
                        </li>
                        <li class="career-path-timeline-item">
                            <p class="career-path-timeline-date">2024/02</p>
                            <p class="career-path-timeline-content">
                                DFPI案件／結合テスト作業
                            </p>
                        </li>
                        <li class="career-path-timeline-item">
                            <p class="career-path-timeline-date">2024/04</p>
                            <p class="career-path-timeline-content">
                                テスト・運用支援作業
                            </p>
                        </li>
                    </ol>
                </div>
            </div>

        </div>
    </section>

    {{-- エントリーボタンの呼び出し --}}
    @include('components.entry_btn',['entryGtm' => 'introduction_entry_02','requirementsGtm' => 'introduction_requirements_02'])
</div>
@endsection
