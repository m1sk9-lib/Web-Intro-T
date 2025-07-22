<head>
    <title>登録完了 | ブックマーク共有システム</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+JP&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        try {
            $db = new PDO("sqlite:bookmark.sqlite");

            $sitename = $_POST["inputSitename"];
            $url = $_POST["inputURL"];
            $genre = $_POST["selectGenre"];

            $stmt = $db->prepare("INSERT INTO bookmarks (sitename, url, genre) VALUES (:sitename, :url, :genre)");
            $stmt->bindParam(':sitename', $sitename);
            $stmt->bindParam(':url', $url);
            $stmt->bindParam(':genre', $genre);

            $stmt->execute();

            echo "以下の内容で登録しました<br>";
            echo "サイト名: " . htmlspecialchars($sitename) . "<br>";
            echo "URL: " . htmlspecialchars($url) . "<br>";
            echo "ジャンル: " . htmlspecialchars($genre) . "<br>";
        } catch (PDOException $e) {
            echo "データベースエラー: " . htmlspecialchars($e->getMessage());
            exit;
        }
        $db = null;
    ?>
    <hr />
    <input type="button" value="戻る" onclick="location.href='viewer.php'">
</body>
