<head>
    <title>登録URL一覧 | ブックマーク共有システム</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+JP&display=swap" rel="stylesheet">
</head>
<body>
    <h1>登録URL一覧</h1>
    <input type="button" value="戻る" onclick="history.back()">
    <hr />

    <?php
        $db = new PDO("sqlite:bookmark.sqlite");

        foreach ($db->query("SELECT * FROM bookmarks") as $row) {
            printf("%s, %s, %s, %s",
                $row['id'], $row['sitename'],
                $row['url'], $row['genre']
            );
            print("<br>");
        }

        $db = null;
    ?>
</body>
