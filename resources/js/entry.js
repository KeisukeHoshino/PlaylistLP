// フォーム入力内容チェック
document.querySelector(".entryform").addEventListener('change', () => {
    let name = document.forms[0].name.value;
    let furigana = document.forms[0].furigana.value;
    let email = document.forms[0].email.value;
    let tel = document.forms[0].tel.value;
    let pdf = document.forms[0].pdf.value;

    // pdfが選択されている場合、input下のテキストをファイルパスに変更する
    if (pdf) {
        document.querySelector("p.entryform-list_file_selectfile").textContent = pdf;
    }else{
        document.querySelector("p.entryform-list_file_selectfile").textContent = '選択されていません';
    }

    // 必須が全て入力されていなければボタンを非活性に
    if (name && furigana && email && tel && pdf) {
        document.querySelector("#entryform-check-btn > button").disabled = false;
    } else {
        document.querySelector("#entryform-check-btn > button").disabled = true;
    }
})
