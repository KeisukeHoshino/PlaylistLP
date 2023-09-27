@extends('layouts.layout')
@include('components.entry_btn')


@section('content')

<main>

    <div class="c-requirements-wrapper">
        <div class="c-requirements-container">
            <div class="requirements-title">
                <h1>
                    REQUIREMENTS
                </h1>
                <p class="requirements-subtitle">
                    募集要項・選考フロー
                </p>
            </div>

            <div class="requirements-anchor">
                <ul>
                    <li><h6>募集要項</h6></li>
                    <li><h6>歓迎スキル</h6></li>
                    <li><h6>将来キャリアアップ</h6></li>
                    <li><h6>プロジェクト例</h6></li>
                    <li><h6>選考フロー</h6></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="c-requirements-wrapper">
        <div class="c-requirements-container">
            <div class="c-requirements-heading">
                <span>
                    REQUIREMENTS
                </span>
                <h3>
                    募集要項
                </h3>
            </div>
            <table class="c-requirements-items">
                <tr class="c-requirements-item">
                    <th>
                        雇用形態
                    </th>
                    <td>
                        正社員 （当社規定による、半年間の試用期間を設けています）
                    </td>
                </tr>
                <tr class="c-requirements-item">
                    <th>
                        勤務時間
                    </th>
                    <td>
                        9：00～18：00<br>
                        時間外あり<br>
                        深夜勤務あり<br>
                        休日勤務あり<br>
                        ※上記は配属先のプロジェクトによって異なります。
                    </td>
                </tr>
                <tr class="c-requirements-item">
                    <th>
                        勤務地
                    </th>
                    <td>
                        東京都内を中心とした首都圏近郊地域 （千葉 / 神奈川 / 埼玉）<br>
                        リモートの可能性有
                    </td>
                </tr>
                <tr class="c-requirements-item">
                    <th>
                        給与
                    </th>
                    <td>
                        月給 23万円～35万円（固定残業手当を含む）<br>（あくまでも目安の金額であり、選考を通じてご相談させていただきます。）
                    </td>
                </tr>
                <tr class="c-requirements-item">
                    <th>
                        有給休暇
                    </th>
                    <td>
                        入社初年度は入社月に応じて最大10日 （入社次年度以降 11日〜20日（最大20日））
                    </td>
                </tr>
                <tr class="c-requirements-item">
                    <th>
                        休日・休暇
                    </th>
                    <td>
                        週休2日制/祝日休み/年末年始休暇/夏季休暇/会社の指定した休日/有給休暇/慶弔休暇/育休休暇/産前・産後休暇
                    </td>
                </tr>
                <tr class="c-requirements-item">
                    <th>
                        待遇
                    </th>
                    <td>
                        時間外手当（固定残業超過分を追加支給）<br>
                        通勤手当（全額支給）<br>
                        昇給（1回 / 年 7月査定により算出する）<br>
                        賞与（業績 / 貢献に応じて当社規定により支給）
                    </td>
                </tr>
                <tr class="c-requirements-item">
                    <th>
                        福利厚生
                    </th>
                    <td>
                        各種保険完備<br>
                        定期健康診断<br>
                        慶弔見舞金<br>
                        リファラル採用（インセンティブ有）
                    </td>
                </tr>
                <tr class="c-requirements-item">
                    <th>
                        支援制度
                    </th>
                    <td>
                        資格取得受験費<br>
                        書籍購入費<br>
                        セミナー参加費<br>
                        PC / 備品貸与（モニター1台 / ノートPC1台 など）
                    </td>
                </tr>
                <tr class="c-requirements-item">
                    <th>
                        研修
                    </th>
                    <td>
                        RPA研修：資格取得サポート（2021年度は5名取得実績有）<br>
                        SQL研修：基本操作<br>
                        VBA研修：ツール作成<br>
                        フロンドエンド研修：自己紹介サイト作成<br>
                        ※研修は全て自社内製化<br>
                        ※目指すキャリアに合わせてその他研修も可能
                    </td>
                </tr>
                <tr class="c-requirements-item">
                    <th>
                        社員交流
                    </th>
                    <td>
                        ランチミーティング<br>
                        全社懇親会費<br>
                        社員旅行（2021年度オンライン海外ツアーinパリ）
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="c-requirements-wrapper">
        <div class="c-requirements-container">
            <div class="c-requirements-heading">
                <span>
                    WELCOME SKILLS
                </span>
                <h3>
                    歓迎スキル
                </h3>
            </div>
            <div class="c-requirements-headingGrid">
                <img src="{{asset('img/requirements/requirements.jpeg')}}" class="c-requirements-img">
                <div class="c-headingText">
                    <p>
                        下記一つでも当てはまれば、お気軽にご連絡下さい。
                    </p>
                    <p>
                        社会人経験（異業種可）<br>
                        ITスクール卒業生（同等の知見でも可）<br>
                        リーダー / マネジメント の経験<br>
                        言語は問いませんが何らかの開発経験（チーム・個人問わず）
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="c-requirements-wrapper">
        <div class="c-requirements-container">
            <div class="c-requirements-heading">
                <span>
                    CAREER ADVANCEMENT
                </span>
                <h3>
                    将来キャリアアップ
                </h3>
            </div>
            <div class="c-requirements-headingGrid headingContainer-reverse">
                <img src="{{asset('/img/requirements/career_advancement.jpeg')}}" class="c-requirements-img">
                <div class="c-headingText">
                    <p>
                        SES業界だからこそ、様々なプロジェクトを経験することで最新のスキルや知識習得にチャレンジしています！<br>
                        なりたいエンジニアに向けてスキルを身に付けながら共に成長していきましょう！！<br>
                    </p>
                    <p>
                        ・プロジェクトマネージャー/リーダー<br>
                        ・フロントエンドエンジニア<br>
                        ・バックエンドエンジニア<br>
                        ・ネットワークエンジニア<br>
                        ・セキュリティエンジニア<br>
                        ・RPAエンジニア
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="c-requirements-wrapper">
        <div class="c-requirements-container">
            <div class="c-requirements-heading">
                <span>
                    PROJECT CASE
                </span>
                <h3>
                    SES事業でのプロジェクト例
                </h3>
            </div>
            <div class="c-requirements-headingGrid">
                <img src="{{asset('/img/requirements/project_case.jpeg')}}" class="c-requirements-img">
                <div class="c-headingText">
                    ・社内DX化に向けた業務自動化開発<br>
                    ・車載ソフトウェアの開発<br>
                    ・商社のシステム運用<br>
                    ・保険会社Webシステム開発案件<br>
                    ・金融系の経営管理システムの開発<br>
                    ・社内システムのユーザ管理<br>
                    ・大手自動車メーカーのPMアシスタント<br>
                    ・官公庁プロジェクトのサポート案件
                </div>
            </div>
        </div>
    </div>

    @yield('entry_btn')

    <div class="c-requirements-wrapper">
        <div class="c-requirements-container">
            <div class="c-requirements-heading">
                <span>
                    SELECTION FLOW
                </span>
                <h3>
                    選考フロー
                </h3>
            </div>
            <div class="selectionFlow-container">
                <div class="c-selectionFlow-item">
                    <div class="c-selectionFlow-itemNum">
                        <p>STEP</p>
                        <p>1</p>
                    </div>
                    <div  class="c-selectionFlow-itemText">
                        <P>
                            エントリーフォームからご応募
                        </P>
                        <button>ENTRY</button>
                        <p>
                            3営業日以内にご連絡させて頂きます。
                        </p>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="12" viewBox="0 0 21 12" fill="none" class="c-selectionFlow-arrow">
                    <path d="M0.383077 2.08378C-0.0890917 1.62697 0.325287 0.77604 1.02024 0.775406L20.2266 0.759488C20.8788 0.758921 21.1459 1.52168 20.6629 2.00472L11.3486 11.319C10.9437 11.7239 10.2813 11.7283 9.87117 11.3286L0.383077 2.08378Z" fill="#3F66A5"/>
                </svg>
                <div class="c-selectionFlow-item">
                    <div class="c-selectionFlow-itemNum">
                        <p>STEP</p>
                        <p>2</p>
                    </div>
                    <div class="c-selectionFlow-itemText">
                        <P>
                            カジュアル面談
                        </P>
                        <p>
                            選考前に会社の社風や働き方を知ってもらうために、お話する機会を設けています。
                            その後、希望者には面接に進んで頂きます。
                        </p>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="12" viewBox="0 0 21 12" fill="none" class="c-selectionFlow-arrow">
                <path d="M0.383077 2.08378C-0.0890917 1.62697 0.325287 0.77604 1.02024 0.775406L20.2266 0.759488C20.8788 0.758921 21.1459 1.52168 20.6629 2.00472L11.3486 11.319C10.9437 11.7239 10.2813 11.7283 9.87117 11.3286L0.383077 2.08378Z" fill="#3F66A5"/>
                </svg>
                <div class="c-selectionFlow-item">
                    <div class="c-selectionFlow-itemNum">
                        <p>STEP</p>
                        <p>3</p>
                    </div>
                    <div class="c-selectionFlow-itemText">
                        <P>
                            面接1〜2回
                        </P>
                        <p>
                            基本的には一次面接のみですが、稀に二次面接が必要となる場合がございます。                </p>
                        </P>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="12" viewBox="0 0 21 12" fill="none" class="c-selectionFlow-arrow">
                    <path d="M0.383077 2.08378C-0.0890917 1.62697 0.325287 0.77604 1.02024 0.775406L20.2266 0.759488C20.8788 0.758921 21.1459 1.52168 20.6629 2.00472L11.3486 11.319C10.9437 11.7239 10.2813 11.7283 9.87117 11.3286L0.383077 2.08378Z" fill="#3F66A5"/>
                </svg>
                <div class="c-selectionFlow-item">
                    <div class="c-selectionFlow-itemNum">
                        <p>STEP</p>
                        <p>4</p>
                    </div>
                    <div class="c-selectionFlow-itemText">
                        <p>内定</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('entry_btn')

</main>


@endsection
