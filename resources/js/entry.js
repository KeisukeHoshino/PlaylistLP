// 読み込み時
window.onload = function(){
    formValueCheck();
    errorMassageCheck();
}
// フォーム内容変更時
// dataは変更された対象データ
document.querySelector(".entryform").addEventListener('change', (data) => {
    formValueCheck(data);
    errorMassageCheck();
});

// エラーメッセージが存在する場合エラーメッセージのコンテナ表示
function errorMassageCheck(){
    let ul_element = document.querySelector("div.error-message-area > ul")
    if (ul_element.firstElementChild == null) {
        ul_element.parentElement.style.display = "none";
    }else{
        ul_element.parentElement.style.display = "block";
    }
}
// フォーム入力内容チェック関数
function formValueCheck(data){
    const name = document.forms[0].name.value;
    const furigana = document.forms[0].furigana.value;
    const email = document.forms[0].email.value;
    const tel = document.forms[0].tel.value;
    const pdf = document.forms[0].pdf.value;
    const pdf_file = document.forms[0].pdf.files[0];
    // メールアドレスのバリデーション
    if (data != undefined && data.target.name == 'email') {
        if (email != '' && !email.match(/^[a-z]+[a-z0-9_-]+@[a-z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/i)) {
            let new_error_element = document.createElement('li');
            new_error_element.textContent = '・メールアドレスの形式が間違っています。';
            let ul_element = document.querySelector("div.error-message-area > ul")
            ul_element.insertBefore(new_error_element,ul_element.firstChild);
        }
    }
    // pdfが選択されている場合、input下のテキストをファイルパスに変更する
    if (pdf) {
        // ファイルサイズは最大1.6MB
        if (pdf_file.size <= 1600000) {
            document.querySelector("p.entryform-list_file_selectfile").textContent = pdf;
        }else{
            document.querySelector("p.entryform-list_file_selectfile").textContent = 'ファイルサイズが大きすぎます(1.6MBまで)';
            pdf = '';
        }
    }else{
        document.querySelector("p.entryform-list_file_selectfile").textContent = '選択されていません';
    }

    // 必須が全て入力されていなければボタンを非活性に
    if (name && furigana && email && tel && pdf) {
        document.querySelector("#entryform-check-btn > button").disabled = false;
    } else {
        document.querySelector("#entryform-check-btn > button").disabled = true;
    }
}
