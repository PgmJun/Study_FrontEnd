<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- link태그를 통해 css파일을 불러올 수 있다. -->
	<link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>
<body id="target">
	<header><!-- header: 제목부 표시 -->
	<h1><a href="https://localhost/php/index.php">JavaScript</a></h1>
	</header>

	<nav>	<!-- nav: 네비게이터 표시 -->
		<ul>
			<?php
				echo file_get_contents("list.txt");
			?>
		</ul>
	</nav>

	<div id="control">
		<input type="button" value="white" id="btn_white">
		<input type="button" value="black" id="btn_black">
	</div>

	<article> <!-- article: 본문 표시 -->
		<!-- id값이 없는 때에는 .txt라는 것을 읽어들이려다 오류가 발생할 수 있다
	 				그래서 if문을 통해 id가 있을때만 id값을 찾도록 정의해야한다.-->
		<?php
		if(empty($_GET['id']) == false){
			echo file_get_contents($_GET["id"].".txt");
		}
		?>
	</article>
	<script type="text/javascript" src="http://localhost/script.js">

	</script>
</body>
</html>
