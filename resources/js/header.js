//
// ハンバーガーメニューを開く（SP版対応）
//

const nav = document.querySelector("#navArea");
const btn = document.querySelector(".toggle-btn");

btn.onclick = () => {
    nav.classList.toggle("open");
};


//
// クリックによりaccordionを開く（SP版対応）
//

const accordionNavItems = document.querySelectorAll(".c-headerMenubar-nav-listheading");

accordionNavItems.forEach(accordionNavItem => {
    accordionNavItem.onclick = () => {
        if (accordionNavItem.nextElementSibling.classList.contains('is-open')) {
            // クリックしたli要素からクラスを削除します
            accordionNavItem.nextElementSibling.classList.remove('is-open');
        } else {
            // すべてのli要素からクラスを削除します
            accordionNavItems.forEach((accordionNavItem) => {
                accordionNavItem.classList.remove('is-open');
                accordionNavItem.nextElementSibling.classList.remove('is-open');
            });

            // クリックしたli要素にクラスを追加します
            accordionNavItem.nextElementSibling.classList.add('is-open');
        }
        accordionNavItem.classList.toggle('is-open');
    };
});

/**
 * ナビゲーションのリンクがクリックされたときにハンバーガーメニューを閉じる処理
 */
const navListLink = document.querySelectorAll('.c-headerMenubar-nav a')
navListLink.forEach((navListLink) => {

    navListLink.onclick = () => {
        // ハンバーガーメニューを閉じる
        nav.classList.remove("open");
    }
})
