{{-- headerについて --}}
@section('header')

<header class="c-headerMenubarWrapper">
    <div class="c-headerMenubarContainer">
        <div class="c-headerTitle c-headerTitle--img" id="js-headerTitle">
            <a href="#" class="c-headerTitle__link">
                <img src="{{ asset('img/layout/logo_Playlist_header.svg') }}" alt="playlistRecruitment-sitelogo">
                <span>採用サイト</span>
            </a>
        </div>
        <nav class="c-headerMenubar" id="navArea">
            <div class="c-headerMenubar-nav">
                <ul>
                    <li class="c-headerMenubar-nav-listCenter active" id="c-headerMenubar-navTop">
                        <a href="/" id="c-headerMenubar-navTop__heading">TOP</a>
                        <div class="subMenu--display c-headerMenubar-navTop__subMenu">
                            <ul>
                                <li><a href="/#aboutus">playlistについて</a></li>
                                <li><a href="/#message">代表メッセージ</a></li>
                                <li><a href="/#playlist-points">実際に働く社員のplaylistお気に入りポイント</a></li>
                                <li><a href="/#faq">よくある質問</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="c-headerMenubar-nav-listCenter" id="c-headerMenubar-navMember">
                        <a href="member" id="c-headerMenubar-navMember__heading">社員紹介</a>
                        <div class="subMenu--display c-headerMenubar-navMember__subMenu">
                            <ul>
                                <li><a href="member#member">メンバー</a></li>
                                <li><a href="member#interview">社員インタビュー</a></li>
                                <li><a href="member#career-path">入社後のキャリアパス</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="c-headerMenubar-nav-listCenter" id="c-headerMenubar-navRequirements">
                        <a href="requirements" id="c-headerMenubar-navRequirements__heading">募集要項・選考フロー</a>
                        <div class="subMenu--display c-headerMenubar-navRequirements__subMenu">
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
            <div class="c-header-entryBtn">
                <a href="/entry" class="entry-btn_grad">ENTRY</a>
            </div>
        </nav>
        <div class="toggle-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>

@endsection
