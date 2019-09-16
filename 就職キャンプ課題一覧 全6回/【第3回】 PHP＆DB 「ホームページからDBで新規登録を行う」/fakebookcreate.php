<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <title>新しいアカウントを作成</title>
    <link href="fakebookCreate.css" rel="stylesheet">
    <style>div{padding: 10px;font-size:16px;}</style>
</head>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <a class="abc" href="index.php"><p class="fakebook">fakebook</p></a>
    <div class="navbar-header"><a class="navbar-brand" href="index.php">新しいアカウントを作成</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<p class="formName">次のフォームに必要事項をご記入ください。</p>
    <form action="" method="post" enctype="multipart/form-data">
    <dl>
    <dt>ニックネーム<span class="required">必須</span></dt>
    <dd><input type="text" name="name" size="35" maxlenghth="255" value="<?php echo htmlspecialchars($_POST['name'], ENT_QUOTES); ?>"> 
    </dd>
    <dt>メールアドレス<span class="required">必須</span></dt>
    <dd>
    <input type="text" name="email" size="35" maxlenghth="255" value="<?php echo htmlspecialchars($_POST['email'], ENT_QUOTES); ?>">
    <dt>パスワード<span class="required">必須</span></dt>
    <dd><input type="password" name="password" size="35" maxlength="255"></dd>
    <dt>写真など</dt>
    <dd><input type="file" name="image" size="35"></dd>
    </dl>
    <div></a><input type="submit" value="入力内容を確認する"></div>
    </form>

<?php
    session_start();

    if (!empty($_POST)){
    if ($_POST['name']==''){
    $error['name']='blank';
}

    if ($_POST['email']==''){
    $error['email']='blank';
}

    if (strlen($_POST['password'])<4){
    $error['password']='length';
    }

    if ($_POST['password']==''){
    $error['password']='blank';
}
    $fileName=$_FILES['image']['name'];
    if(!empty($fileName)){
    $ext=substr($fileName, -3);
    if($ext !='jpg'&& $ext !='gif'){
    $error['image']='type';
}
    }

    if(empty($error)){
        $image=date('YmdHis').$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],'../member_picture'. $image);
        $_SESSION['join']=$_POST;
        $_SESSION['join']['image']=$image;
        header('Location:check.php');
        exit();
    }
    }

    if($_REQUEST['action']=='rewrite'){
      $_POST=$_SESSION['join'];
      $error['rewrite']=true;
    }

?>



</body>
</html>