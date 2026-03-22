<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="comformstyle.css">
</head>
<body>
    <h1>入力内容確認</h1>
    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST")
            $username = $_POST["username"];
            $age = $_POST["age"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $address = $_POST["address"];

            if (!preg_match("/^[ぁ-んァ-ヶ一ー-龠a-zA-Z\s]+$/u",$username)){
                echo "<p>名前はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
            } elseif (!is_numeric($age) || $age < 0 || $age > 150) {
                echo "<p>年齢は0～150の間で入力してください。";
            } elseif (!preg_match("/^[0-9\-]+$/", $phone)){
                echo "<p>電話番号は半角数字とハイフンのみ使用できます。";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p>メールアドレスの形式が正しくありません。";
            } elseif (!preg_match("/^[ぁ-んァ-ヶ一ー-龠a-zA-Z\s]+$/u",$address)){
                echo "<p>住所はひらがな、カタカナ、漢字、英字のみ使用できます。";
            } else {
                echo "<p>名前:".htmlspecialchars($username,ENT_QUOTES,'UTF-8)."</p>",
                echo "<p>年齢:".htmlspecialchars($age,ENT_QUOTES,'UTF-8)."</p>",
                echo "<p>電話番号:htmlspecialchar($phone,ENT_QUOTES,'UTF-8)."</p>",
                echo "<p>メールアドレス:htmlspecialchar($email,ENT_QUOTES,'UTF-8)."</p>",
                echo "<p>住所:.htmlspecialchars($address,ENT_QUOTES,'UTF-8)."</p>",
            ｝

        } else {
            echo "<p>データが送信されていません。</p>";
        }
    ?>
    <a href="form.php">戻る</a>

</body>
</html>

