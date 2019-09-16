<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Log In</title>
  <style>
h1.picsentence{
position:inherit;
background-size:cover;
opacity:0.5;
width:500px;
height:300px;
padding-left:100px;
}
</style>
  <link href="fakebookindex.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <a class="abc" href="fakebooktop.php"><p class="fakebook">fakebook</p></a>
    <label><input class="email" type="text" name="name" placeholder=" メールアドレスまたは電話番号:" size="30" style="height:20px;"></label>
    <label><input class="password" type="password" name="email" placeholder=" パスワード" size="30" style="height:20px;"></label>
    <div class="navbar-header"><a class="navbar-brand" href="index.php">ログイン</a>
  <a class="java" href="homework.html" style="text-decoration: none;">Javaを体験する</a></div></div>
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
    <h1 class="picsentence">Fakebookを使うと、友達や同僚、同級生、仲間たちとつながりを深められます。　
ケータイ、スマートフォンからもアクセスできます。
    </h1>
    <fieldset>
    <!-- name="xxx" の部分に注目するようにしておいてください🤗 -->
    <div class="four">
    <p class="login">アカウント登録</p>
    <p>情報のプライバシーは設定できるので安心です。</p>
    <p class="zero"><label><input type="text" name="name" required placeholder=" 姓" size="15" style="height:20px;"></label><label class="zero1"><input type="text" name="name" required placeholder=" 名" size="15" style="height:20px;"></label><br></p>
    <p class="one"><label><input type="text" name="name" required placeholder=" 携帯電話番号またはメールアドレス:" size="40" style="height:20px;"></label><br></p>
    <p class="two"><label><input type="password" name="password" required placeholder=" パスワード" size="40" style="height:20px;"></label><br></p>
    <p class="three"><label><input type="date" required style="height:40px;" style="width:40px;"></textArea></label><br></p>
    <p class="five"><label><input type="radio" name="性別" value="男性" required style="height:40px;" style="width:40px;">男性</textArea>
  </label><input type="radio" name="性別" value="女性" required style="height:40px;" style="width:40px;">女性</textArea></label>
  <label><input type="radio" name="性別" value="カスタム" required style="height:40px;" style="width:40px;">カスタム</textArea></label><br></p>
    <p class="explanation">[アカウント登録]をクリックすることで、利用規約、データに関するポリシー、Cookieポリシーに同意するものとします。サービスに関連してFakebookからSMS通知が届くことがありますが、これはいつでもオフに設定できます。</p>
    <input class="log" type="submit" value="ログイン">
    <li><br><a class="create" href="kadai_index.php">アカウント登録</a></li>
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
  <li><a class="b12" href="other"> Marketplace </a></li>
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
