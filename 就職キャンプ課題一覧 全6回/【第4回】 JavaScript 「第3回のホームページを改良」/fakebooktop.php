<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>新しいアカウントを作成</title>
  <link href="fakebooktop.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <a class="abc" href="fakebookindex.php"><p class="fakebook">fakebook</p></a>
    <div class="navbar-header"><a class="navbar-brand" href="fakebookindex.php">新しいアカウントを作成</a>
    <a class="java" href="homework.html" style="text-decoration: none;">Javaを体験する</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->
<?php
date_default_timezone_set('Asia/Tokyo');
$day=date('n/j(D)');
print($day."\n");
print(date('G時 i分'));
?>
<!-- Main[Start] -->
<!-- ここでinsert.phpにデータを送っている -->
<form method="post" action="insert.php">
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
    <li><a class="create" href="kadai_index.php">新しいアカウントを作成</a></li>
    </div>
    </fieldset>
  </div>
</form>
<!-- Main[End] -->

<footer>
<div class="languages">
<li><a class="a" href="language">日本語 </a></li>
<li><a class="aa" href="language"> English(US) </a></li>
<li><a class="aaa" href="language"> Português (Brasil) </a></li>
<li><a class="aaaa" href="language"> 中文(简体) </a></li>
<li><a class="aaaaa" href="language"> Tiếng Việt </a></li>
<li><a class="aaaaaa" href="language"> Español </a></li>
<li><a class="aaaaaaa" href="language"> Bahasa Indonesia </a></li>
<li><a class="aaaaaaaa" href="language"> 한국어 </a></li>
<li><a class="aaaaaaaaa" href="language"> Français (France) </a></li>
<li><a class="aaaaaaaaaa" href="language"> Deutsch </a></li>
<li><a class="aaaaaaaaaaa" href="language"> Italiano</a></li>
</div>

<div class="others">
  <li><a class="b1" href="other"> アカウント登録 </a></li>
  <li><a class="b2" href="other"> ログイン </a></li>
  <li><a class="b3" href="other"> Messenger </a></li>
  <li><a class="b4" href="other"> Fakebook Lite </a></li>
  <li><a class="b5" href="other"> ユーザー </a></li>
  <li><a class="b6" href="other"> プロフィール </a></li>
  <li><a class="b7" href="other"> ページ </a></li>
  <li><a class="b8" href="other"> ページカテゴリー </a></li>
  <li><a class="b9" href="other"> スポット </a></li>
  <li><a class="b10" href="other"> ゲーム </a></li>
  <li><a class="b11" href="other"> 場所 </a></li>
  <li><a class="b11" href="other"> Marketplace </a></li>
  </div>
  <div class="theothers">
  <li><a class="c1" href="other"> グループ </a></li>
  <li><a class="c2" href="other"> Instagram </a></li>
  <li><a class="c3" href="other"> ローカル </a></li>
  <li><a class="c4" href="other"> 募金キャンペーン </a></li>
  <li><a class="c5" href="other"> サービス </a></li>
  <li><a class="c6" href="other"> Fakebookについて </a></li>
  <li><a class="c7" href="other"> 広告を作成 </a></li>
  <li><a class="c8" href="other"> ページを作成 </a></li>
  <li><a class="c9" href="other"> 開発者 </a></li>
  <li><a class="c10" href="other"> 採用情報 </a></li>
  <li><a class="c11" href="other"> プライバシー </a></li>
  <li><a class="c12" href="other"> Cookie </a></li>
  </div>
  <div class="theotherss">
  <li><a class="d1" href="other"> AdChoices </a></li>
  <li><a class="d2" href="other"> 規約 </a></li>
  <li><a class="d3" href="other"> アカウントのセキュリティ </a></li>
  <li><a class="d4" href="other"> ログインのヘルプ </a></li>
  <li><a class="d5" href="other"> ヘルプ </a></li>
  </div>
</footer>

</body>
</html>