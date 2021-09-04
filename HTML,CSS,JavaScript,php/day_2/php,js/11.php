<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <h1>JavaScript</h1>
  <ul>
    <script type="text/javascript">
        list = new Array("최승준","최승호","안형자","최보순");

        i = 0;
        while(i < list.length){
          document.write("<li>" + list[i] + "</li>");
          i++;
        }
    </script>
  </ul>


  <h1>php</h1>
  <ul>
    <?php
      $list = array("최승준","최승호","안형자","최보순");

      $i = 0;
      while($i < count($list)){
        echo "<li>".$list[$i]."</li>";
        $i = $i + 1;
      }
    ?>
  </ul>

</body>
</html>
