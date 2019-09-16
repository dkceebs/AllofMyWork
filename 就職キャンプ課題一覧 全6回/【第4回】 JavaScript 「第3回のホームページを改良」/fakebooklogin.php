<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>新しいアカウントを作成</title>
  <link href="facebooklogin.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <a class="abc" href="fakebookindex.php"><p class="fakebook">fakebook</p></a>
    <div class="navbar-header"><a class="navbar-brand" href="index.php">新しいアカウントを作成</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここでinsert.phpにデータを送っている -->
<form method="post" action="fakebookinsert.php">
  <div class="question">
   <fieldset>
    <!-- name="xxx" の部分に注目するようにしておいてください🤗 -->
    <div class="four">
    <p class="login">Fakebookにログイン</p>
    <p class="one"><label><input type="text" name="name" placeholder=" メールアドレスまたは電話番号:" size="30" style="height:20px;"></label><br></p>
    <p class="two"><label><input type="password" name="email" placeholder=" パスワード" size="30" style="height:20px;"></label><br></p>
    <p class="three"><label><textArea name="naiyou" rows="4" cols="33" style="height:20px;"></textArea></label><br></p>
    <input class="log" type="submit" value="ログイン">
    <li><a class="forgot" href="">アカウントを忘れた場合</a></li>
    <p class="or">または</p>
    <li><a class="create" href="">新しいアカウントを作成</a></li>
    </div>
    </fieldset>
  </div>
</form>
<!-- Main[End] -->