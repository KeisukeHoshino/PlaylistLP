<?php

use App\Http\Controllers\EntryValidate;
use App\Http\Controllers\SendMail;
use Illuminate\Support\Facades\Route;

// トップページ
Route::get('/', function () {
    return view('index');
});

// メンバーページ
Route::get('/member', function () {
    $members = [
        [
            "position" => "CEO",
            "name" => "Yuta.Y",
            "joinDate" => "2020年06月",
            "formerJob" => "フルスタックエンジニア",
            "myJob" => "経営、開発",
            "skill" => "PHP、Javascript、HTML、CSS、VBA、C、C++",
            "hobby" => "TVを見ることです。バラエティやドラマ関係なくテレビが大好きです。",
            "favoritePoint" => "様々なことに挑戦できる会社があったらいいなと思って創業しました。",
            "message" => "ITで挑戦したい事がある方、何事も最後までやり遂げる自信がある方大歓迎です。"
        ],
        [
            "position" => "COO/SALES",
            "name" => "Takahiro.A",
            "joinDate" => "2020年12月",
            "formerJob" => "営業",
            "myJob" => "COO（事業執行責任社）",
            "skill" => "営業力、交渉力、事業設計",
            "hobby" => "サッカー観戦、音楽鑑賞",
            "favoritePoint" => "一人一人が活躍できる会社であること！",
            "message" => "会社や事業を大きく成長できる体験が得られる会社です！将来きっと役にたつ経験なので、ぜひ立ち上げを経験したい方は待っています！"
        ],
        [
            "position" => "CHRO",
            "name" => "Taro.T",
            "joinDate" => "2020年7月",
            "formerJob" => "営業職",
            "myJob" => "人事責任者（組織づくり）",
            "skill" => "Notion",
            "hobby" => "知らない場所に行くこと（旅行）",
            "favoritePoint" => "挑戦ができること",
            "message" => "Playlistでの新しい発見や数々の挑戦が今後の自分の可能性を広げることだけでなく、素晴らしい成長に繋がります。私たちと共に、夢に向かって頑張りましょう！"
        ],
        [
            "position" => "SALES/ENGINEER",
            "name" => "Minami.Y",
            "joinDate" => "2020年12月",
            "formerJob" => "商品事業のブランド管理部(業務は商品のパッケージデザイン)",
            "myJob" => "営業、RPA開発、その他社内業務",
            "skill" => "VBA、SQL、UiPath",
            "hobby" => "旅行！温泉！美味しいごはんを食べること！映画！適度な美容！仕事も好きです！",
            "favoritePoint" => '社員全員の"人がいい"ところがお気に入りです！あと、社風や雰囲気も好きです！自分の声が反映されるスピード感が早いところもお気に入りです！',
            "message" => "一緒にPlaylistで頑張っていける人、募集中です！"
        ],
        [
            "position" => "SALES",
            "name" => "Yuta.M",
            "joinDate" => "2020年10月",
            "formerJob" => "技術職",
            "myJob" => "営業対応",
            "skill" => "HTML、CSS、JavaScript、VBA、WinActor",
            "hobby" => "野球、アニメ",
            "favoritePoint" => "キャリアアップや方向性について社内の方とも一緒に考えていただける環境がある。",
            "message" => "未経験から入社し、現場の経験や研修を得て少しずつスキルアップできたと実感しています！一度、Playlistでキャリアアップを目指してみませんか！"
        ],
        [
            "position" => "ENGINEER",
            "name" => "Akira.M",
            "joinDate" => "2020年8月",
            "formerJob" => "自衛官",
            "myJob" => "保険会社の基幹系システム開発",
            "skill" => "Java、HTML、CSS、JavaScript、VBA",
            "hobby" => "オンラインゲーム",
            "favoritePoint" => "会社全体で一人一人の進路を応援してくれる",
            "message" => "フレンドリーな仲間たちと一緒に成長できる会社です！一緒に成長してきませんか！"
        ],
        [
            "position" => "ENGINEER",
            "name" => "Takuya.M",
            "joinDate" => "2021年3月",
            "formerJob" => "エンジニア",
            "myJob" => "Salesforce開発支援",
            "skill" => "SQL、HTML、CSS、Apex、VMware、AWS、Tera Term、JMeter",
            "hobby" => "運動、お酒を飲むこと",
            "favoritePoint" => "自身がやりたいことについて、背中を押してくれる",
            "message" => "常に好奇心を持ち、積極的に学び続けることで大きく成長できます！一緒に頑張りましょう！"
        ],
        [
            "position" => "ENGINEER",
            "name" => "Keisuke.H",
            "joinDate" => "2021年9月",
            "formerJob" => "施工管理",
            "myJob" => "運用",
            "skill" => "Java, HTML, CSS",
            "hobby" => "映画鑑賞、アニメ、ゲーム",
            "favoritePoint" => "社員同士の距離感が近いから意見を言いやすい",
            "message" => "熱量を持って奮闘する、物を作るってことはそういう志が集まる場所だと思っています。一緒に頑張りましょう！"
        ],
        [
            "position" => "ENGINEER",
            "name" => "Ryo.W",
            "joinDate" => "2022年2月",
            "formerJob" => "技術職(Android端末のSIMカード機能実装、評価)",
            "myJob" => "社内システム開発、運用保守",
            "skill" => "HTML、CSS、JavaScript、VBA、C、Python、PHP",
            "hobby" => "体を動かすこと、映画鑑賞、読書",
            "favoritePoint" => "キャリアチェンジを目指し、挑戦できる環境があるところ",
            "message" => "アイデアを形にできるエンジニアを目指して一緒に頑張りましょう！"
        ],
        [
            "position" => "ENGINEER",
            "name" => "Masahiro.S",
            "joinDate" => "2022年6月",
            "formerJob" => "営業職(農芸温室)",
            "myJob" => "某外資企業のPower BI開発支援、保守",
            "skill" => "Java、VBA、GAS、HTML、CSS、Salesforce、Power BI",
            "hobby" => "最近クロスバイクを購入したのでサイクリングにハマっています！",
            "favoritePoint" => "Playlistの展望を分け隔てなくお話を伺えること、常日頃からロードマップや技術の相談をさせて頂ける環境",
            "message" => "Playlistは成長フェーズであるため、経験年数に関係なく挑戦できることが多く存在します。課題解決を通じて技術やマネジメント力などを一緒に高められたらいいなと思います！"
        ],
        [
            "position" => "ENGINEER",
            "name" => "Satoru.K",
            "joinDate" => "2022年10月",
            "formerJob" => "倉庫業",
            "myJob" => "運用",
            "skill" => "ネットワークの基礎知識、VBA、WinActor",
            "hobby" => "バイク",
            "favoritePoint" => "経営陣や社員同士の距離感が近いから意見を言いやすい",
            "message" => "具体的なことは入社してから決めればいいと思うので、気にせず応募してください。"
        ],
        [
            "position" => "ENGINEER",
            "name" => "Taichi.H",
            "joinDate" => "2023年1月",
            "formerJob" => "接客業",
            "myJob" => "後期高齢者医療保険制度に関する業務支援のシステム開発",
            "skill" => "Java、COBOL、SQL",
            "hobby" => "旅行、アウトドアアクティビティ、お酒",
            "favoritePoint" => "社員一人一人にフォーカスを置き、各人が目指す理想のエンジニア像に向けて支援してくれる",
            "message" => "未経験の方へ、必要なのはスキルや知識でなく、やる気があればそれだけ大丈夫です！Playlistでエンジニアになって一緒に働きましょう。"
        ],
        [
            "position" => "ENGINEER",
            "name" => "Kaede.F",
            "joinDate" => "2023年3月",
            "formerJob" => "接客業",
            "myJob" => "レジシステムのテスター",
            "skill" => "SQL、Python、VBA",
            "hobby" => "音楽を聴くこと、美術館巡り",
            "favoritePoint" => "便利なツールを社内で積極的に取り入れていること、社員のチャレンジしたい気持ちを応援してくれるところ",
            "message" => "未経験で入社しましたが、研修や現場経験を通して少しずつエンジニアとして成長できていることを実感しています！PlaylistでITに挑戦してみませんか！"
        ],
        [
            "position" => "ENGINEER",
            "name" => "Mao.U",
            "joinDate" => "2023年4月",
            "formerJob" => "フロントエンドエンジニア",
            "myJob" => "某小売企業サイトのページ制作、運用",
            "skill" => "HTML（Pug）、CSS（Sass）、JavaScript（jQuery）",
            "hobby" => "お酒と海鮮、散歩",
            "favoritePoint" => "様々な背景の人が集まっているところ、自分のやりたいことを後押ししてくれるところ",
            "message" => "やってみたいことをPlaylistで実現しませんか！"
        ],
        [
            "position" => "ENGINEER",
            "name" => "Issei.A",
            "joinDate" => "2023年4月",
            "formerJob" => "管理職（施工管理）",
            "myJob" => "Salesforce環境構築支援",
            "skill" => "Salesforce標準機能（関数の利用や自動化ツール含め）、Apex（Salesforce独自言語）、HTML、CSS、VBA",
            "hobby" => "映画、漫画",
            "favoritePoint" => "SES事業だけでなく受託や自社開発の事業が走っていて展望がある。",
            "message" => "いろんな観点で挑戦できる環境がPlaylistにはあると思う。"
        ],
        [
            "position" => "ENGINEER",
            "name" => "Hikaru.K",
            "joinDate" => "2023月6月",
            "formerJob" => "宿泊業",
            "myJob" => "某自動車会社でのPMO業務",
            "skill" => "HTML、CSS、Ruby、PHP(Laravel)",
            "hobby" => "硬式テニス",
            "favoritePoint" => "社員同士の交流場が多く、年代も近いので相談しやすい環境が整っている",
            "message" => "未経験者でも経験者でもやる気があれば応援し、サポートしてくれる頼もしい会社です。一緒にスキルを伸ばしていきましょう！"
        ],
        [
            "position" => "ENGINEER",
            "name" => "Yosuke.F",
            "joinDate" => "2023年10月",
            "formerJob" => "学校家具の営業職",
            "myJob" => "無線基地局インテグレーション作業",
            "skill" => "現場独自のツール、Excel",
            "hobby" => "話を聞くこと、話すこと",
            "favoritePoint" => "自社や現場で様々なバックグラウンドを持つ方々とお話しできること",
            "message" => "ご縁がありましたら色々お話しましょう！"
        ],
        [
            "position" => "ENGINEER",
            "name" => "Tatsuya.M",
            "joinDate" => "2023年11月",
            "formerJob" => "SE",
            "myJob" => "通信事業社の業務アプリ開発",
            "skill" => "Java、Spring、JavaScript",
            "hobby" => "格ゲー(スト6)",
            "favoritePoint" => "SESだけではなく、受託開発にも力を入れている",
            "message" => "挑戦者求ム！"
        ],
        [
            "position" => "ENGINEER",
            "name" => "Reika.T",
            "joinDate" => "2024年4月",
            "formerJob" => "看護師",
            "myJob" => "某通信会社の商用保守",
            "skill" => "Ruby、HTML、CSS、JavaScript",
            "hobby" => "作曲と絵を描くことが趣味です！",
            "favoritePoint" => "1つの会社で開発を行うのではなく、SESで様々な会社の開発に携わり色々なスキルを伸ばせるところ。業界未経験の方の入社してからの感想やフォロー体制などが明示されているところ。",
            "message" => "未経験でSESを目指す方はぜひPlaylistへ！"
        ]
    ];
    return view('member', ['members' => $members]);
});

// 募集要項ページ
Route::get('/requirements', function () {
    return view('requirements');
});


// エントリー画面
Route::get('/entry', function () {
    return view('entry/entry');
});
// エントリー確認画面
Route::post('/entry_check', [EntryValidate::class, 'entryValidate']);
// エントリー完了画面
Route::post('entry_complete', [SendMail::class, 'sendEmail']);
