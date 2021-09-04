<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <h1>php 로그인 기능</h1>
  <?php
    $password = $_GET["password"];
    if($password == 1111){
      echo "안녕하세요. 주인님";
    } else {
      echo "누구노";
    }
  ?>
</body>
</html>
