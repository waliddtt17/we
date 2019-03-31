<?PHP
include "C:/wamp64/www/crud/core/pubC.php";
$pubC=new pubC();
if (isset($_POST["id"])){
	$pubC->supprimerPub($_POST["id"]);
	header('Location: datatabel/tabel.php');
}

?>