<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
try{
    $db = new PDO('mysql:dbname=mini_bbs;charset=utf8;host=localhost','root','');
}catch(PDOException $e){
    echo 'DB接続エラー: ' . $e->getmessage();
}
?>


</body>
</html>