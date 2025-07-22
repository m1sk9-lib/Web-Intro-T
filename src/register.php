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

        print("サイト名: " . htmlspecialchars($sitename) . "<br>");
        print("URL: " . htmlspecialchars($url) . "<br>");
        print("ジャンル: " . htmlspecialchars($genre) . "<br>");
    ?>
    <hr />
    <form action="register_confirm.php" method="post">
        <input type="hidden" name="inputSitename" value="<?php echo htmlspecialchars($sitename); ?>">
        <input type="hidden" name="inputURL" value="<?php echo htmlspecialchars($url); ?>">
        <input type="hidden" name="selectGenre" value="<?php echo htmlspecialchars($genre); ?>">
        <input type="submit" value="登録する">
        <input type="button" value="修正" onclick="history.back()">
    </form>
</body>
