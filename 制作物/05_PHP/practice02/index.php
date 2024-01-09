<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>diworksblog掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">
        function check(){
            if(form.handlename.value == "" || form.title.value == "" || form.comments.value == ""){
                alert("未記入のフォームがあります");
                return false;
            }
        }
    </script>
</head>

<body>

<header>
    <div class="logo">
        <a href="https://"><img src="diblog_logo.jpg"></a>
    </div>
    
    <ul class="menu">
        <li><a href="https://">トップ</a></li>
        <li><a href="https://">プロフィール</a><li>
        <li><a href="https://">D.I.Blogについて</a></li>
        <li><a href="https://">登録フォーム</a></li>
        <li><a href="https://">問い合わせ</a></li>
        <li><a href="https://">その他</a></li>
    </ul>
</header>

<main>
    <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>

<!--入力フォーム-->
<h2>入力フォーム</h2>

<form method="post" action="insert.php" name="form" onsubmit="return check()">
    <div>
        <label>ハンドルネーム</label><br>
        <input type="text" class="text" size="35" name="handlename">
    </div>

    <div>
        <label>タイトル</label><br>
        <input type="text" class="text" size="35" name="title">
    </div>

    <div>
        <label>コメント</label><br>
        <textarea cols="35" rows="7" name="comments"></textarea>
    </div>

    <div>
        <input type="submit" class="submit" value="投稿する">
    </div>
</form>

<br>

<!--DBからの読み取り-->
<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root", "mysql");

$stmt = $pdo -> query("select * from diworks_keijiban");

while($row = $stmt -> fetch()){
    echo "<div class = 'kiji'>";
        echo "<h3>".$row['title']."</h3>";
            echo "<div class = 'contents'>";
                echo $row['comments'];
                echo "<div class = 'handlename'>posted by ".$row['handlename']."</div>";
            echo "</div>";
    echo "</div>";
    echo "<br>";
}

?>




    </div>

    <div class="right">
        <h2>人気の記事</h2>
        <ul>
            <li><a href="https://">PHPオススメ本</a></li>
            <li><a href="https://">PHP MyAdminの使い方</a></li>
            <li><a href="https://">いま人気のエディタTops</a></li>
            <li><a href="https://">HTMLの基礎</a></li>
        </ul>
      
        <h2>オススメリンク</h2>
        <ul>
            <li><a href="https://">ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</a></li>
            <li><a href="https://">XAMPPのダウンロード</a></li>
            <li><a href="https://">Eclipseのダウンロード</a></li>
            <li><a href="https://">Bracketsのダウンロード</a></li>
        </ul>
      
        <h2>カテゴリ</h2>
        <ul>
            <li><a href="https://">HTML</a></li>
            <li><a href="https://">PHP</a></li>
            <li><a href="https://">MySQL</a></li>
            <li><a href="https://">JavaScript</a></li>
        </ul>
    </div>
</main>

<footer>
    Copyright D.I.Works | D.I.blog is the one which provides A to Z about programming
</footer>




</body>

</html>


<?php

?>

<!--GitHubで更新ファイルのpush操作の試験のためコメントアウト追加-->