<?php
session_start();

if(!empty($_POST)) {
//エラー項目の確認
    if($_POST['name']  == '') {
        $error['name'] = 'blank';
    }
    if($_POST['email'] == ''){
        $error['email'] = 'blank';
    }
    if(strlen($_POST['password']) < 4) {
        $error['password'] = 'length';
    }
    if($_POST['password'] == '') {
        $error['password'] = 'blank';
    }
    $fileName = $_FILES['image']['name'];
    if(!empty($fileName)) {
        $ext = substr($fileName, -3);
        if($ext !='jpg'&& $ext !='gif') {
            $error['image'] = 'type';
        }
    }

    if(empty($error)) {
        //画像をアップロードする
        $image = date('YmdHis') . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], '../member_picture/' . $image);

        $_SESSION['join'] = $_POST;
        $_SESSION['join']['image'] = $image;
        header('Location:kadai_check.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="kadai_index.css" rel="stylesheet">
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

<h1 class="fill">アカウント登録</h1>
<form action="" method="post" enctype="multipart/form-data">
<dl>
<dt class="name">ニックネーム<span class="required">　必須</span></dt>
<dd>
    <input type="text" name="name" size="35" maxlength="255" />
    <?php if ($error['name'] = 'blank'): ?>
    <p class="error">*ニックネームを入力してください</p>
    <?php endif; ?>
</dd>
<dt class="email">メールアドレス<span class="required">　必須</span></dt>
<dd>
    <input type="text" name="email" size="35" maxlength="255" />
    <?php if ($error['email'] = 'blank'): ?>
    <p class="error">*メールアドレスを入力してください</p>
    <?php endif; ?>
</dd>
<dt class="password">パスワード<span class="required">必須</span></dt>
<dd><input type="password" name="password" size="10" maxlength="20" />
    <?php if ($error['password'] = 'blank'): ?>
    <p class="error">*パスワードを入力してください</p>
    <?php endif; ?>
    <?php if($error['password'] = 'length'): ?>
    <p class="error">*パスワードは4文字以上で入力してください</p>
    <?php endif; ?>
</dd>
<dt class="photo">写真など</dt>
<dd>
    <input type="file" name="image" size="35" /></dd>
    <?php if($error['image'] = 'type'): ?>
    <p class="error">*写真などは「.gif」または「.jpg」の画像を指定してください</p>
    <?php endif; ?>
    <?php if(!empty($error)): ?>
    <p class="error">*恐れ入りますが、画像を改めて指定してください</p>
<?php endif; ?>
</dl>
<div><input type="submit" value="入力内容を確認する" /></div>
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