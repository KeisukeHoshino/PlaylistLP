// フォーム入力内容チェック
document.querySelector(".entryform").addEventListener('change', () => {
    let name = document.forms[0].name.value;
    let furigana = document.forms[0].furigana.value;
    let email = document.forms[0].email.value;
    let tel = document.forms[0].tel.value;
    let pdf = document.forms[0].pdf.value;

    // 必須が全て入力されていなければボタンを非活性に
    if (name && furigana && email && tel && pdf) {
        document.querySelector("#entryform-check-btn > button").disabled = false;
    } else {
        document.querySelector("#entryform-check-btn > button").disabled = true;
    }
})
