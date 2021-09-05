<?php
	$conn = mysqli_connect("localhost","root","tmdwns0907");
	mysqli_select_db($conn,"opentutorials");
	$result = mysqli_query($conn,"SELECT * FROM topic");
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="http://localhost/style.css?after">
	<!-- link태그를 통해 css파일을 불러올 수 있다. -->

</head>
<body id="target">
	<header><!-- header: 제목부 표시 -->
			<img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활코딩"/>
		<h1><a href="https://localhost/php/index.php">JavaScript</a></h1>
	</header>

	<nav>	<!-- nav: 네비게이터 표시 -->
		<ul>
			<?php
			while($row = mysqli_fetch_assoc($result)){
				echo '<li><a href="http://localhost/php/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
			}
			?>
		</ul>
	</nav>

	<div id="control">
		<input type="button" value="white" id="btn_white">
		<input type="button" value="black" id="btn_black">
		<a href="http://localhost/write.php">쓰기</a>
	</div>

	<article> <!-- article: 본문 표시 -->
		<form action="process.php" method="post">
			<p>
				제목 : <input type="text" name="title">
			</p>
			<p>
				작성자 : <input type="text" name="author">
			</p>
			<p>
				본문 : <textarea name="description"></textarea>
			</p>
			<input type="submit">
		</form>
	</article>
	<script type="text/javascript" src="http://localhost/script.js">

	</script>
</body>
</html>
