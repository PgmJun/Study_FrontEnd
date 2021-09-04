<!-- $_GET[''];을 통해서 주소의 ? 뒤에 있는 값을 가져올 수 있다.-->
<?php
  echo $_GET['name'].",".$_GET['id'];
?>

<!-- file_get_contents("");를 통해서 다른 파일의 내용을 가져올 수 있음. -->
<?php
  echo file_get_contents($_GET['id'].".txt");
?>
