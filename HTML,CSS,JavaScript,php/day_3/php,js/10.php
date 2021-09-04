<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <h1>JavaScript</h1>
  <script type="text/javascript">
      list = new Array("one","two","three");
      document.write(list[2]+"<br>");
      document.write("배열의 길이는 "+list.length);
  </script>

  <h1>php</h1>
  <?php
    $list = array("one","two","three");
    echo $list[0]."<br>";
    echo "배열의 길이는 ".count($list);
  ?>
</body>
</html>
