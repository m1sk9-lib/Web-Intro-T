<head>
    <title>登録完了 | ブックマーク共有システム</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+JP&display=swap" rel="stylesheet">
</head>
<body>
    以下のサイトを登録しました． <br>
    <?php
        $sitename = $_GET["inputSitename"];
        $url = $_GET["inputURL"];
        $genre = $_GET["selectGenre"];

        print("サイト名: " . $sitename . "<br>");
        print("URL: " . $url . "<br>");
        print("ジャンル: " . $genre . "<br>");
    ?>
    <hr />
    <input type="button" value="戻る" onclick="history.back()">
</body>
