<?php
  $conn = mysqli_connect("localhost","root","tmdwns0907");
	mysqli_select_db($conn,"opentutorials");
  $sql = "INSERT INTO topic (title,author,description,created) VALUES ('".$_POST['title']."','".$_POST['author']."','".$_POST['description']."', now())";
  mysqli_query($conn,$sql);
  header('Location: http://localhost/php/index.php');
?>
