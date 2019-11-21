<!DOCTYPE html>
<html lang="ja">
	
<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
	
<body>

	<header>
		<div class="logo"></div>
	</header>
	
	<img src="4eachblog_logo.jpg">
	
	<ul class="menu">
		<li>トップ</li>
		<li>プロフィール</li>
		<li>4eachについて</li>
		<li>登録フォーム</li>
		<li>問い合わせ</li>
		<li>その他</li>
	</ul>
 <div class="left">
	<h1>プログラミングに役立つ掲示板</h1>
	 <form method="post" action="insert.php">
		 <h2>入力フォーム</h2>
			 <p>ハンドルネーム</p>
			 <input type="text" name="handlename">
			 <p>タイトル</p>
			 <input type="text" name="title">
			 <p>コメント</p>
			 <textarea name="comments" rows="8" cols="80"></textarea>
			 <p><input type="submit" value="送信する"></p>
	 </form>
	 
	   <?php
	      while($tea=$stmt->fetch())
			  echo"<div class='keiji'>";
				echo"<h3>".$tea['title']."</h3>";
				echo "<div class='contents'>";
				echo $tea['comments'];
				echo"<div class='handlename'>posted by".$tea['handlename']."</div>";
				echo"</div>";
				echo"</div>";
	   ?>
				
</div>
 <main>			 
	<div class="right">
		<div class="edf">
			<p>人気の記事</p>
		</div>
			<p>PHPオススメ本</p>
			<p>PHP MyAdminの使い方</p>
			<p>いま人気のエディタ　Top5</p>
			<p>HTMLの基礎</p>
		 <div class="edf">
			<p>オススメリンク</p>
		</div>
			<p>インターノウス株式会社</p>
			<p>XAMPPのダウンロード</p>
			<p>Eclipseのダウンロード</p>
		    <p>Bracketsのダウンロード</p>
		<div class="edf">
			<p>カテゴリ</p>
		</div>
		    <p>HTML</p>
		    <p>PHP</p>
		    <p>MySQL</p>
		    <p>JavaScript</p>
	 </div>
  </main>
	
	<footer>
		copyright © internous | 4each blog the which provides A to Z about programing.
	</footer>
	
	</body>
	
</html>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		