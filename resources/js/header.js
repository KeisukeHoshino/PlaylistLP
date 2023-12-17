// =====================================================================
// ウィンドウサイズによりクラスのはく奪を行う（SP->PC版対応）
// =====================================================================

function checkWindowSize() {
  const gnav = document.querySelector('.l-gnav');
  const gnavHeading = document.querySelector('.l-gnav__menu-heading');
  const gnavItem = document.querySelector('.l-gnav__menu-item');
  // ウィンドウの幅を取得
  const width = window.innerWidth;

  // 特定のピクセル値（例：960px）を基準に条件分岐
  if (960 <= width && gnav.classList.contains('open')) {
    gnav.classList.remove('open');
  }
  if (
    960 <= width &&
    gnavHeading.classList.contains('is-open') &&
    gnavItem.classList.contains('is-open')
  ) {
    gnavHeading.classList.remove('is-open');
    gnavItem.classList.remove('is-open');
  }
}
window.addEventListener('resize', checkWindowSize);

// 初期ロード時にも関数を実行
checkWindowSize();

// =====================================================================
// body要素ホバー時にheading要素に色を付ける（PC版対応）
// =====================================================================

document.addEventListener('DOMContentLoaded', function () {
  let headerTitle = document.querySelectorAll('.l-gnav__menu-heading');
  let headerBody = document.querySelectorAll('.l-gnav__menu-item');

  headerBody.forEach((headerItem, idx) => {
    headerItem.parentElement.addEventListener('mouseenter', function () {
      headerTitle[idx].classList.add('hovered');
    });

    headerItem.parentElement.addEventListener('mouseleave', function () {
      headerTitle[idx].classList.remove('hovered');
    });
  });
});

// =====================================================================
// ハンバーガーメニューを開く（SP版対応）
// =====================================================================

const nav = document.querySelector('#navArea');
const btn = document.querySelector('.l-gnav__hamburger-menu');

btn.onclick = () => {
  nav.classList.toggle('open');
};

// =====================================================================
// クリックによりaccordionを開く（SP版対応）
// =====================================================================

const accordionNavItems = document.querySelectorAll('.l-gnav__menu-heading');

accordionNavItems.forEach((accordionNavItem) => {
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
