// --------------------------------
// ページの最上部へ戻る
// --------------------------------
const pagetop = document.querySelector('.js-pageTopBtn');
pagetop.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});