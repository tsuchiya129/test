<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog掲示板</title>
<link rel="stylesheet"type="text/css"href="style.css"></head>

<body>
	
	<?php
	
	mb_internal_encoding("utf8");
	$pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
	$stmt=$pdo->query("select*from 4each_keijiban2");
	
	?>
	
  <header>
    <div class="gazo">
    <img src="4eachblog_logo.jpg">
    </div>
    
    <div class="top">
      <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
    　</ul>
    </div>
  </header>  
    
 <main>
    <left>
     <h1>プログラミングに役立つ掲示板</h1>
     
     <form method="post"action="insert.php">
        <h2>入力フォーム</h2>
        <div class="text">
        <p>ハンドルネーム</p>
        <input type="text"name="handlname">
        <p>タイトル</p>
        <input type="text"name="title">
        <p>コメント</p>
        <textarea rows="8" cols="50"name="comments"></textarea><br>
        <input type="submit"class="toukou"value="投稿する">
        </div>
        </form>
		
		<?php
		while($row=$stmt->fetch()){
			echo"<div class='title2'>";
			echo"<h2>".$row['title']."</h2>";
			echo"<p>".$row['comments']."</p>";
			echo"<div class='abc'>投稿：".$row['handlname']."</div>";
			echo"</div>";
		}
		?>
		
     
     </left>
     
     <right>
       <div class="link">
         <h3>人気の記事</h3>
         <ul>
           <li>PHPオススメ本</li>
           <li>PHP MyAdminの使い方</li>
           <li>今人気のエディタTop5</li>
           <li>HTMLの基礎</li>
          </ul>
          <h3>オススメリンク</h3>
          <ul>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Edipseのダウンロード</li>
            <li>Braketsのダウンロード</li>
          </ul>
          <h3>カテゴリ</h3>
          <ul>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
          </ul>
        </div>
      </right>
 </main>
    
 <footer>
    <div class="sita">
      copyright internous|4each blog is the one which provides Ato Z about programming.</div>
 </footer>

    
    </body></html>