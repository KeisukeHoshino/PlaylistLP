window.onload = function () {
    // 画面サイズ取得
    const mediaQuery = window.matchMedia("(max-width: 639px)");

    // 年表 縦線のたかさ調整
    // 縦線のエレメントを全て取得
    const vls = document.querySelectorAll(".vertical-line");
    vls.forEach((vl) => {
        // 親の要素の高さを取得し、それをもとに高さを調整
        let vl_height = vl.parentNode.parentNode.parentNode.offsetHeight;
        // 画面サイズがスマホ版かどうかで場合分け(640px以下)
        if (mediaQuery.matches) {
            // スマホ版
            vl_height += 23;
        } else {
            // PC・タブレット版
            vl_height += 33;
        }
        // 親の要素の高さにそれぞれ高さをプラスして調整
        vl.style.height = vl_height + "px";
    });

    // career-path-about-text のたかさ調整
    // →同じ行に2個要素があり、1個目と2個目の高さを比較し高い方に合わせる
    // 1個目・2個目の変数宣言
    let first_cpat_height;
    let second_cpat_height;

    // cp-b-pc は career-path-about-text の親要素
    // → career-path-about-text はスマホ版にもあり、それらを除外するためあえてPC版を指定
    const cpbpc = document.querySelectorAll(".cp-b-pc");

    cpbpc.forEach((data, index) => {
        // career-path-about-text クラスの要素
        let cpat = data.children[0];

        // 奇数の時はその行の最初の要素なので高さを取得するのみ
        // indexは0から始まるのであまりが0の時が奇数個目の要素
        if (index % 2 === 0) {
            // 次の要素をあらかじめ初期化
            second_cpat_height = 0;
            first_cpat_height = cpat.offsetHeight;
        } else {
            // 偶数の時は先に取得してある1個目の要素と高さを比較する
            second_cpat_height = cpat.offsetHeight;
            // 高さの大きい方に合わせる
            if (first_cpat_height < second_cpat_height) {
                cpbpc[index - 1].children[0].style.height =
                    second_cpat_height + "px";
            } else if (first_cpat_height > second_cpat_height) {
                cpbpc[index].children[0].style.height =
                    first_cpat_height + "px";
            }
            // 次の行に移る前に1個目の高さも初期化しておく
            first_cpat_height = 0;
        }
    });
};
