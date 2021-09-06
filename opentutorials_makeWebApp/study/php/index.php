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
		<a href="http://localhost/php/write.php">쓰기</a>
	</div>

	<article> <!-- article: 본문 표시 -->
		<!-- id값이 없는 때에는 .txt라는 것을 읽어들이려다 오류가 발생할 수 있다
	 				그래서 if문을 통해 id가 있을때만 id값을 찾도록 정의해야한다.-->
		<?php
		if(empty($_GET['id']) === false){
			$sql =
			"SELECT topic.id,title,name,description FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id =".$_GET['id'];
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			echo '<h2>'.$row['title'].'</h2>';
			echo '<p>'.$row['name'].'</p>';
			echo $row['description'];
		}
		?>
	</article>
	<script type="text/javascript" src="http://localhost/script.js">

	</script>
</body>
</html>
