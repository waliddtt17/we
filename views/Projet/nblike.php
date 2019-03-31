<?php 
if (isset($_POST['done'])) {
	# code...

$connect = mysqli_connect("localhost", "root", "", "crud");
 $query = "UPDATE pub SET nb=nb+1 WHERE pos='1'";
 $result = mysqli_query($connect, $query);
 header("Location: index.php");
}
if (isset($_POST['done1'])) {
	# code...

$connect = mysqli_connect("localhost", "root", "", "crud");
 $query = "UPDATE pub SET nb=nb+1 WHERE pos='2'";
 $result = mysqli_query($connect, $query);
 header("Location: index.php");
}
if (isset($_POST['done2'])) {
	# code...

$connect = mysqli_connect("localhost", "root", "", "crud");
 $query = "UPDATE pub SET nb=nb+1 WHERE pos='3'";
 $result = mysqli_query($connect, $query);
 header("Location: index.php");
}

 ?>