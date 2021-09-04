<!-- 기본 태그 -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <style>

  </style>
</head>
<body>
  <!-- file_get_contents("");를 통해서 다른 파일의 내용을 가져올 수 있음. -->
  <?php
    echo file_get_contents($_GET['id'].".txt");
  ?>
</body>
</html>
