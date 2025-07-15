<head>
    <title>登録 | ブックマーク共有システム</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+JP&display=swap" rel="stylesheet">
</head>
<body>
    以下の内容で登録します．よろしいですか？ <br>
    <?php
        $sitename = $_GET["inputSitename"];
        $url = $_GET["inputURL"];
        $genre = $_GET["selectGenre"];

        print("サイト名: " . $sitename . "<br>");
        print("URL: " . $url . "<br>");
        print("ジャンル: " . $genre . "<br>");
    ?>
    <hr />
    <!-- TODO: 登録処理後に一覧ページに遷移する -->
    <input type="button" value="登録する" onclick="alert('登録しました'); location.href='index.html'">
    <input type="button" value="修正" onclick="history.back()">
</body>
