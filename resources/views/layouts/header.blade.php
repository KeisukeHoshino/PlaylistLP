{{-- headerについて --}}
@section('header')

<header class="l-header__wrapper">
    <div class="l-header__container">
        <div>
            <a href="/" class="l-header__link" data-gtm-click="header_logo">
                <img src="{{ asset('img/layout/logo_Playlist_header.svg') }}" alt="プレイリストのロゴ">
                <span>採用サイト</span>
            </a>
        </div>
        <nav class="l-gnav" id="navArea">
            <div class="l-gnav__menu">
                <ul>
                    <li class="l-gnav__menu-heading l-gnav__menu-heading--top">
                        <a href="/" data-gtm-click="header_top">TOP</a>
                    </li>
                    <li class="l-gnav__menu-item l-gnav__menu-item--top">
                        <div class="subMenu--display l-gnav__megamenu">
                            <ul>
                                <li><a href="/#aboutus" data-gtm-click="header_top_about">Playlistについて</a></li>
                                <li><a href="/#data" data-gtm-click="header_top_data">データで見るPlaylist</a></li>
                                <li><a href="/#message" data-gtm-click="header_top_message">代表メッセージ</a></li>
                                <li><a href="/#points" data-gtm-click="header_top_point">実際に働く社員の<br><span>Playlistお気に入りポイント</span></a></li>
                                <li><a href="/#faq" data-gtm-click="header_top_faq">よくある質問</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="l-gnav__menu-heading l-gnav__menu-heading--member">
                        <a href="member" data-gtm-click="header_introduction">社員紹介</a>
                    </li>
                    <li class="l-gnav__menu-item l-gnav__menu-item--member">
                        <div class="subMenu--display l-gnav__megamenu">
                            <ul>
                                <li><a href="member#member" data-gtm-click="header_introduction_member">メンバー</a></li>
                                <li><a href="member#interview" data-gtm-click="header_introduction_interview">社員インタビュー</a></li>
                                <li><a href="member#career-path" data-gtm-click="header_introduction_careerpath">入社後のキャリアパス</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="l-gnav__menu-heading l-gnav__menu-heading--requirements">
                        <a href="requirements" data-gtm-click="header_requirements">募集要項・選考フロー</a>
                    </li>
                    <li class="l-gnav__menu-item l-gnav__menu-item--requirements">
                        <div class="subMenu--display l-gnav__megamenu">
                            <ul>
                                <li><a href="requirements#requirements" data-gtm-click="header_requirements_requirements">募集要項</a></li>
                                <li><a href="requirements#welcome-skils" data-gtm-click="header_requirements_skill">歓迎スキル</a></li>
                                <li><a href="requirements#career-advancement" data-gtm-click="header_requirements_careerup">将来キャリアアップ</a></li>
                                <li><a href="requirements#project-case" data-gtm-click="header_requirements_project">プロジェクト例</a></li>
                                <li><a href="requirements#selection-flow" data-gtm-click="header_requirements_flow">選考フロー</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="c-gnav-btn__entry">
                <a href="/entry" class="c-gnav-btn__entry--grad" data-gtm-click="header_entry">ENTRY</a>
            </div>
        </nav>
        <bottom class="l-gnav__hamburger-menu" aria-expanded="false" aria-controls="navArea" aria-label="メニューを開く" data-gtm-click="header_hamburgerbtn">
            <span></span>
            <span></span>
            <span></span>
        </bottom>
    </div>
</header>

@endsection
