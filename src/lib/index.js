/// URL の形式をチェックする正規表現
const URL_REGEX = /^(https?:\/\/)?([\w-]+(\.[\w-]+)+)(:\d+)?(\/.*)?$/;

function hasInputValue() {
    const sitename = $("#inputSitename").val();
    const url = $("#inputURL").val();
    const genre = $("#selectGenre").val();

    if (!sitename || !url) {
        alert('全ての項目を入力してください。');
        return;
    }

    if (!URL_REGEX.test(url)) {
        alert('URLの形式が正しくありません。');
        return;
    }

    if (!genre || genre === "選択してください") {
        alert('ジャンルを選択してください。');
    }

    $("#userInputForm").submit();
}
