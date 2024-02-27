/**
 * 経歴の縦線の高さ調整
 * 画面の横幅によって経歴の縦線の高さを調整する
 */
const adjustVerticalLine = () => {
  // 画面サイズ取得
  const mediaQuery = window.matchMedia('(max-width: 639px)');

  // 縦線のエレメントを全て取得
  const vls = document.querySelectorAll('.vertical-line');
  vls.forEach((vl) => {
    // .vertical-lineの親要素の高さを取得
    let vl_height = vl.parentNode.parentNode.parentNode.offsetHeight;
    if (mediaQuery.matches) {
      // 画面サイズがスマホ版(639px以下)の場合
      vl.style.height = vl_height + 23 + 'px';
    } else {
      // 画面サイズがPC・タブレット版(640px以上)の場合
      vl.style.height = vl_height + 33 + 'px';
    }
  });
};

/**
 * 紹介文の高さ調整
 * 画面の横幅によって名前と紹介文の高さを調整する
 */
const adjustIntroductionText = () => {
  // 奇数のテキストの高さ
  let first_cpat_height;
  // 偶数のテキストの高さ
  let second_cpat_height;

  // PC用のテキストのエレメントを全て取得
  const cpbpc = document.querySelectorAll('.pc');

  cpbpc.forEach((data, index) => {
    // PC用のテキストの要素
    let cpat = data.children[0];

    // 奇数の時はその行の最初の要素なので高さを取得するのみ
    if (index % 2 === 0) {
      // 奇数の場合

      // 次の要素をあらかじめ初期化
      second_cpat_height = 0;
      // 奇数の時のテキストの高さ
      first_cpat_height = cpat.offsetHeight;
    } else {
      // 偶数の場合

      // 偶数の時のテキストの高さ
      second_cpat_height = cpat.offsetHeight;

      // 奇数の時の高さと偶数の時の高さを比較して大きい方に合わせる
      if (first_cpat_height < second_cpat_height) {
        cpbpc[index - 1].style.height = second_cpat_height + 'px';
      } else {
        cpbpc[index].style.height = first_cpat_height + 'px';
      }
      // 次の行に移る前に1個目の高さも初期化しておく
      first_cpat_height = 0;
    }
  });
};

// 画面が読み込まれたときと画面サイズが変更されたときに経歴の縦線の高さ調整
window.addEventListener('DOMContentLoaded', adjustVerticalLine);
window.addEventListener('resize', adjustVerticalLine);

// 画面が読み込まれたときと画面サイズが変更されたときに紹介文の高さ調整
window.addEventListener('DOMContentLoaded', adjustIntroductionText);
window.addEventListener('resize', adjustIntroductionText);

/**
 * アンカーリンクがクリックされたときにurlにidを付与しないようにする処理
 */
const anchors = document.querySelectorAll('.link-anchor');

anchors.forEach((anchor) => {
  anchor.onclick = () => {
    // ページのurl
    let page_url = location.href;
    // アンカーリンクのhref属性
    let page_hash = anchor.getAttribute('href');
    // ページのurlからハッシュを取り除いた値
    let b = page_url.split(page_hash);

    // 非同期のためsetTimeoutでurlを書き換える
    setTimeout(() => {
      window.history.pushState(null, '', b[0]);
    });
  };
});
