//
// ハンバーガーメニューを開く
//

const nav = document.querySelector("#navArea");
const btn = document.querySelector(".toggle-btn");
const accordionNavItems = document.querySelectorAll(".c-headerMenubar-nav-listCenter");
const accordionNavSubItems = document.querySelectorAll(".c-headerMenubar-nav-listCenter .subMenu--display");

btn.onclick = () => {
    nav.classList.toggle("open");
};

accordionNavItems.forEach(accordionNavItem => {
    accordionNavItem.onclick = () => {
        if (accordionNavItem.classList.contains('is-open')) {
            // クリックしたli要素からクラスを削除します
            accordionNavItem.classList.remove('is-open');
        } else {
            // すべてのli要素からクラスを削除します
            accordionNavItems.forEach((accordionNavItem) => {
                accordionNavItem.classList.remove('is-open');
            });

            // クリックしたli要素にクラスを追加します
            accordionNavItem.classList.add('is-open');
        }
    };
});
