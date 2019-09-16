<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
img.esports{
width:80px;
height:40px;
}</style>
<link rel="stylesheet" href="ichiran.css" type="text/css" />
</head>
<body>
<header>

<a href="">
    <div class="headname">
        <img class="esports" src="https://i2.wp.com/fpsjp.net/wp-content/uploads/2017/03/esports-logo.jpg?fit=720%2C405&ssl=1" alt="">
        <h1 class="a">ゲームをするなら🎮</h1>
        <h1 class="b">GAMEDESHOW</h1>
    </div>
</a>

<a href="#" class="followme">
  <span class="btn-social-icon-instagram__square"><i class="fa fa-instagram"></i></span> Follow Me on Instagram
</a>

<h1 xlass="logo">
    <ul class="menu">
        <li><a class="top" href="http://localhost/homework/top.php">TOP</a></li>
        <li><a class="search" href="http://localhost/homework/kadai.php">ゲームを探す</a></li>
        <li><a class="list" href="http://localhost/homework/kadai.php">ゲーム一覧</a></li>
        <li><a class="about" href="http://localhost/homework/about.php">会社情報</a></li>
        <li><a class="inquiry" href="http://localhost/homework/inquiry.php">お問い合わせ</a></li>
    </ul>
</h1>

<div class="play">
    <h1>🎮じゃんけんゲーム🎮</h1>
    <div class="img">
    <img src="https://jinroubar.com/wp-content/uploads/2018/03/yjimage.jpg" alt="">
    <img src="https://4.bp.blogspot.com/-ELOLYOHFUww/WEYUArO0JTI/AAAAAAABAO8/edNfCA_Hw6MCeVHpQK9uKdpLTYTgDKsdQCLcB/s800/flag_bankokuki.png" alt="">
    <img src="https://jinroubar.com/wp-content/uploads/2018/03/yjimage.jpg" alt="">
    </div>
    <p1>グー✊・チョキ✌・パー✋　えらんでおしてみよう！！</p1>
    <p2>
<div class="teacher">
    <?php
    $arry_hand=array('グー', 'チョキ', 'パー');
    $my='';
    $pc='';
    $result='';

    if(isset($_POST['hand'])==TRUE){
    $my=htmlspecialchars($_POST['hand'], ENT_QUOTES, 'UTF-8');
    $pc=$arry_hand[array_rand($arry_hand)];
    }

    if($my=='グー'& $pc=='グー'){
        $pc='<p>グー</p>';
        $result='<p>あいこ</p>';
        echo '<img class="draw" src="https://jinroubar.com/wp-content/uploads/2018/03/yjimage.jpg" alt="">';
        }else if($my=='グー' & $pc=='チョキ'){
        $pc='<p>チョキ</p>';
        $result='<p>勝ち</p>';
        echo '<img src="https://ktb7.com/wp-content/uploads/2017/03/pose_win_girl.png" alt="">';
        }else if($my=='グー' & $pc=='パー'){
        $pc='<p>パー</p>';
        $result='<p>負け</p>';
        echo '<img src="http://www.starico-01.com/stamp/outline/a104499-0.png" alt="">';
        }else if($my=='チョキ' & $pc=='グー'){
        $pc='<p>グー</p>';
        $result='<p>負け</p>';
        echo '<img src="http://www.starico-01.com/stamp/outline/a104499-0.png" alt="">';
        }else if($my=='チョキ' & $pc=='チョキ'){
        $pc='<p>チョキ</p>';
        $result='<p>あいこ</p>';
        echo '<img class="draw" src="https://jinroubar.com/wp-content/uploads/2018/03/yjimage.jpg" alt="">';
        }else if($my=='チョキ' & $pc=='パー'){
        $pc='<p>パー</p>';
        $result='<p> 勝ち</p>';
        echo '<img src="https://ktb7.com/wp-content/uploads/2017/03/pose_win_girl.png" alt="">';
        }else if($my=='パー' & $pc=='グー'){
        $pc='<p>グー</p>';
        $result='<p>勝ち</p>';
        echo '<img src="https://ktb7.com/wp-content/uploads/2017/03/pose_win_girl.png" alt="">';
        }else if($my=='パー' & $pc=='チョキ'){
        $pc='<p>チョキ</p>';
        $result='<p>負け</p>';
        echo '<img src="http://www.starico-01.com/stamp/outline/a104499-0.png" alt="">';
        }else if($my=='パー' & $pc=='パー'){
        $pc='<p>パー</p>';
        $result='<p>あいこ</p>';
        echo '<img class="draw" src="https://jinroubar.com/wp-content/uploads/2018/03/yjimage.jpg" alt="">';
        }
 ?>

        <!-- <h1>じゃんけん勝負</h1> -->
        <div class="table">
        <label class="aite">あいて:<?php print $pc; ?></label>
        <label class="jibun">じぶん:<?php print $my; ?></label>
        <label class="kextuka">けっか:<?php print $result; ?></label>
        </div>
        <form method="post">
            <input type="radio" name="hand" value="グー"
        <?php if($my=='グー'){ print "checked";} ?>/>グー
        <br>
            <input type="radio" name="hand" value="チョキ"
        <?php if($my=='チョキ'){ print "checked";} ?>/>チョキ
        <br>
            <input type="radio" name="hand" value="パー"
        <?php if($my=='パー'){ print "checked";} ?>/>パー
            <input type="submit" value="勝負" />
        <br><br>
        </form>
</div>
</p2>

</div>


</header>

</body>
</html>