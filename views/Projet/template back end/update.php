<?php
if (isset($_POST['modifier'])){


  $name = $_FILES['im']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["im"]["name"]);
move_uploaded_file($_FILES['im']['tmp_name'],$target_dir.$name);
  header('Location: modifierPub.php');


}





?>