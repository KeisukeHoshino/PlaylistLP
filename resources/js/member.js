window.onload = function () {
    // // 画面サイズ取得
    const mediaQuery = window.matchMedia("(max-width: 640px)");

    // 年表 縦線のたかさ調整
    var vls = document.querySelectorAll(".vertical-line");
    vls.forEach((data, index) => {
        var vl = data;
        // 親の要素をもとに高さを調整
        var vl_height = data.parentNode.parentNode.parentNode.offsetHeight;
        // 画面サイズがスマホ版かどうかで場合分け(640px以下)
        if (mediaQuery.matches) {
            // スマホ版
            vl_height += 23;
        } else {
            //     // PC・タブレット版
            vl_height += 33;
        }
        vl.style.height = vl_height + "px";
    });

    // career-path-about-textのたかさ調整
    var pre_cpat_height;
    var cur_cpat_height;
    // .cp-b-pcは.career-path-about-textの親要素
    var cpbpc = document.querySelectorAll(".cp-b-pc");
    cpbpc.forEach((data, index) => {
        var cpat = data.children[0];
        // レコードごとに比較する高さをリセット
        if (index % 2 === 0) {
            cur_cpat_height = 0;
            pre_cpat_height = cpat.offsetHeight;
        } else {
            cur_cpat_height = cpat.offsetHeight;
            if (pre_cpat_height < cur_cpat_height) {
                cpbpc[index - 1].children[0].style.height =
                    cur_cpat_height + "px";
            } else if (pre_cpat_height > cur_cpat_height) {
                cpbpc[index].children[0].style.height = pre_cpat_height + "px";
            }
            pre_cpat_height = 0;
        }
    });
};
