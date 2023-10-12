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
                        <a href="#" id="c-headerMenubar-navTop__heading">TOP</a>
                        <div class="subMenu--display c-headerMenubar-navTop__subMenu">
                            <ul>
                                <li><a href="#">playlistについて</a></li>
                                <li><a href="#">代表メッセージ</a></li>
                                <li><a href="#">実際に働く社員のplaylistお気に入りポイント</a></li>
                                <li><a href="#">よくある質問</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="c-headerMenubar-nav-listCenter" id="c-headerMenubar-navMember">
                        <a href="#" id="c-headerMenubar-navMember__heading">社員紹介</a>
                        <div class="subMenu--display c-headerMenubar-navMember__subMenu">
                            <ul>
                                <li><a href="#">メンバー</a></li>
                                <li><a href="#">社員インタビュー</a></li>
                                <li><a href="#">入社後のキャリアパス</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="c-headerMenubar-nav-listCenter" id="c-headerMenubar-navRequirements">
                        <a href="#" id="c-headerMenubar-navRequirements__heading">募集要項・選考フロー</a>
                        <div class="subMenu--display c-headerMenubar-navRequirements__subMenu">
                            <ul>
                                <li><a href="#">募集要項</a></li>
                                <li><a href="#">歓迎スキル</a></li>
                                <li><a href="#">将来キャリアアップ</a></li>
                                <li><a href="#">プロジェクト例</a></li>
                                <li><a href="#">選考フロー</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="c-header-entryBtn">
                <a href="/entry" id="id_c-header-entryBtn">
                    <span class="entry-btn_grad">
                        ENTRY
                        <svg class="entry-btn_arrow" xmlns="http://www.w3.org/2000/svg" width="10" height="11" viewBox="0 0 15 15" fill="none">
                            <path d="M8.2458 14.394C7.93621 14.7087 7.36656 14.4254 7.36991 13.9583L7.46358 1.04965C7.46674 0.611324 7.98084 0.43609 8.30287 0.76349L14.5124 7.07647C14.7823 7.35096 14.7817 7.79618 14.5108 8.06954L8.2458 14.394Z" fill="#333333" />
                        </svg>
                    </span>
                </a>
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
