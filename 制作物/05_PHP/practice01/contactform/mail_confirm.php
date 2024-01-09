<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問合せフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<style>
h1{
    margin: 0 auto;
    margin-top: 30px;
    margin-bottom: 20px;
    border-left: 4px red solid;
    background-color: #f1f1f1;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 15px;
    width: 500px;
    font-size: 20px;
}
</style>

<body>
    <h1>お問い合わせ内容確認</h1>
    
    <div class="confirm">
        <p>お問い合わせ内容はこちらでよろしいでしょうか?</p>
            <br>よろしければ「送信する」ボタンを押して下さい。
            
        <p>名前
            <br>
            <?php echo $_POST['name'];  ?>
        </p>
        
        <p>メールアドレス
            <br>
            <?php echo $_POST['mail'];  ?>
        </p>
        
        <p>年齢
            <br>
            <?php
            echo $_POST['age']."歳";
            ?>
        </p>
        
        <p>コメント
            <br>
            <?php echo $_POST['comments'];  ?>
        </p>
        
        <form action="index.html">
<!--typeをsubmitからbuttonに、押したらブラウザバックする（onclick~)-->
            <input type="button" class="button1" value="戻って修正する" onclick="history.back()">

        </form>
        
        <form action="insert.php" method="post">
            <input type="submit" class="button2" value="登録する">
            <input type="hidden" value="<?php echo $_POST['name'];  ?>" name="name">
            <input type="hidden" value="<?php echo $_POST['mail'];  ?>" name="mail">
            <input type="hidden" value="<?php echo $_POST['age'];  ?>" name="age">
            <input type="hidden" value="<?php echo $_POST['comments'];  ?>" name="comments">
        </form>
    </div>

</body>

</html>