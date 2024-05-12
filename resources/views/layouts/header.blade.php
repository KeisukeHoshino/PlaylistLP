{{-- headerについて --}}
@section('header')

<header class="l-header__wrapper">
    <div class="l-header__container">
        <div>
            <a href="/" class="l-header__link">
                <img src="{{ asset('img/layout/logo_Playlist_header.svg') }}" alt="playlistRecruitment-sitelogo">
                <span>採用サイト</span>
            </a>
        </div>
        <nav class="l-gnav" id="navArea">
            <div class="l-gnav__menu">
                <ul>
                    <li class="l-gnav__menu-heading l-gnav__menu-heading--top">
                        <a href="/">TOP</a>
                    </li>
                    <li class="l-gnav__menu-item l-gnav__menu-item--top">
                        <div class="subMenu--display l-gnav__megamenu">
                            <ul>
                                <li><a href="/#aboutus">Playlistについて</a></li>
                                <li><a href="/#data">データで見るPlaylist</a></li>
                                <li><a href="/#message">代表メッセージ</a></li>
                                <li><a href="/#points">実際に働く社員の<br><span>Playlistお気に入りポイント</span></a></li>
                                <li><a href="/#faq">よくある質問</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="l-gnav__menu-heading l-gnav__menu-heading--member">
                        <a href="member">社員紹介</a>
                    </li>
                    <li class="l-gnav__menu-item l-gnav__menu-item--member">
                        <div class="subMenu--display l-gnav__megamenu">
                            <ul>
                                <li><a href="member#member">メンバー</a></li>
                                <li><a href="member#interview">社員インタビュー</a></li>
                                <li><a href="member#career-path">入社後のキャリアパス</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="l-gnav__menu-heading l-gnav__menu-heading--requirements">
                        <a href="requirements">募集要項・選考フロー</a>
                    </li>
                    <li class="l-gnav__menu-item l-gnav__menu-item--requirements">
                        <div class="subMenu--display l-gnav__megamenu">
                            <ul>
                                <li><a href="requirements#requirements">募集要項</a></li>
                                <li><a href="requirements#welcome-skils">歓迎スキル</a></li>
                                <li><a href="requirements#career-advancement">将来キャリアアップ</a></li>
                                <li><a href="requirements#project-case">プロジェクト例</a></li>
                                <li><a href="requirements#selection-flow">選考フロー</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="c-gnav-btn__entry">
                <a href="/entry" class="c-gnav-btn__entry--grad">ENTRY</a>
            </div>
        </nav>
        <div class="l-gnav__hamburger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>

@endsection
