//
// ハンバーガーメニューを開く
//

const nav = document.querySelector("#navArea");
const btn = document.querySelector(".toggle-btn");

btn.onclick = () => {
    nav.classList.toggle("open");
};