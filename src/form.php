<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォーム入力</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="back">

    <header>
      <h1>フォーム入力</h1>
    </header>

    <main>
      <form action="comform.php" method="post">
        <div class="form-row">
          <label for="username">名前:</label><br>
          <input type="text" id="username" name="username"><br>

          <label for="age">年齢:</label><br>
          <input type="number" id="age" name="age"><br>

          <label for="phone">電話番号:</label><br>
          <input type="phone" id="phone" name="phone"><br>

          <label for="email">メールアドレス:</label><br>
          <input type="email" id="email" name="email"><br>che

          <label for="address">住所:</label><br>
          <input type="text" id="address" name="address"><br>

          <label for="question">質問:</label><br>
          <input type="text" id="question" name="question"><br>

          <label for="gender">性別:</label><br>
          <select id="gender" name="gender">
            <option value="male">男性</option>
            <option value="female">女性</option>
            <option value="other">その他</option>
          </select><br>
        </div>

        <div class="btn-area">
          <button type="submit">送信</button>
        </div>
      </form>
      <footer>

      </footer>
    </main>
  </div>

  
</body>
</html>