<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="kadai_check.css" rel="stylesheet">
</head>
<body>
<form action="" method="post">

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <a class="abc" href="index.php"><p class="fakebook">fakebook</p></a>
    <div class="navbar-header"><a class="navbar-brand" href="fakebooktop.php">新しいアカウントを作成</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->
<div class="time">
<?php
date_default_timezone_set('Asia/Tokyo');
$day=date('n/j(D)');
print($day."\n");
print(date('G時 i分'));
?>
</div>

<?php
session_start();
require('dbconnect.php');

if(!isset($_SESSION['join'])) {
    header('Location:提出課題/kadai_thanks.php');
    exit();
}

if(!empty($_POST)) {
    //登録処理をする
    $statement = $db->prepare('INSERT INTO members SET name=?, email=?, password=?, picture=?, created=NOW()');
    echo $rret = $statement->execute(array(
        $_SESSION['join']['name'],
        $_SESSION['join']['email'],
        $_SESSION['join']['password'],
        $_SESSION['join']['image']
    ));
    unset($_SESSION['join']);
    header('Location:kadai_thanks.php');
    exit();
}
?>

<form action="" method="POST">
    <input type="hidden" name="action" value="submit" />
<h1 class="info">登録情報</h1>
    <dl>
        <dt class="name">ニックネーム</dt>
        <dd>
        <?php echo htmlspecialchars($_SESSION['join']['name'], ENT_QUOTES); ?>
        </dd>
        <dt class="email">メールアドレス</dt>
        <dd>
        <?php echo htmlspecialchars($_SESSION['join']['email'], ENT_QUOTES); ?>
        </dd>
        <dt class="password">パスワード</dt>
        <dd>
        【表示されません】
        </dd>
        <dt class="photo">写真など</dt>
        <dd>
        <img src="../member_picture/<?php echo htmlspecialchars($_SESSION['join']['image'], ENT_QUOTES); ?>" width="100" height="100" alt="" />
        </dd>
    </dl>
    <div><a href="kadai_index.php?action=rewrite">&laquo;&nbsp;書き直す</a>
    <input type="submit" value="登録する" />
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