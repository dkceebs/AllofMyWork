<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="login.css" rel="stylesheet">
</head>
<body>

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
<?php
date_default_timezone_set('Asia/Tokyo');
$day=date('n/j(D)');
print($day."\n");
print(date('G時 i分'));
?>


<?php
require('dbconnect.php');
session_start();

if(!empty($_POST)) {
    //ログインの処理
    if($_POST['email'] != ''&& $_POST['password'] !='') {
        $login = $db->prepare('SELECT * FROM members WHERE email=? AND password=?');
        $login->execute(array(
            $_POST['email'],
            $_POST['password']
        ));
        $member = $login->fetch();

        if($member) {
            //ログイン成功
            $_SESSION['id'] = $member['id'];
            $_SESSION['time'] =time();

            //ログイン情報を記録する
            if($_POST['save']=='on'){
                setcookie('email', $_POST['email'], time()+60*60*24*14);
                setcookie('password', $_POST['password'], time()+60*60*24*14);
            }

            header('Location:提出課題/kadai_index.php'); exit();
        }else{
            $error['login'] = 'failed';
        }
    }else{
        $error['login'] = 'blank';
    }
}
?>

<div id="lead">
<p>メールアドレスとパスワードを記入してログインしてください。</p>
<p>入会手続きがまだの方はこちらからどうぞ。</p>
<p>&raquo;<a href="join/">入会手続きをする</a></p>
</div>

<form action="" method="post">
    <dl>
    <dt class="email">メールアドレス</dt>
    <dd>
    <input type="text" name="email" size="35" maxlength="255" />
    <p class="error">*メールアドレスとパスワードをご記入ください</p>
    <p class="error">*ログインに失敗しました。正しくご記入ください。</p>
    </dd>
    <dt class="password">パスワード</dt>
    <dd>
    <input type="text" name="password" size="35" maxlength="255" />
    </dd>
    <dt>ログイン情報の記録</dt>
    <dd>
    <input id="save" type="checkbox" name="save" value="on"><label for="save">次回からは自動的にログインする</label>
    </dd>
    </dl>
    <div><input type="submit" value="ログインする"></div>
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