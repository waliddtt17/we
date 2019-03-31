<?PHP
include "C:/wamp64/www/crud/entities/pub.php";
include "C:/wamp64/www/crud/core/pubC.php";

if (isset($_POST['nom']) and isset($_POST['pos']) and isset($_POST['im'])){
	



$pub1=new pub($_POST['nom'],$_POST['pos'],$_POST['im']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$pub1C=new pubC();
$pub1C->ajouterPub($pub1);
header('Location: afficher_data.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>