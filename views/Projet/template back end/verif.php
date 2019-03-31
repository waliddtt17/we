<?PHP
include "C:/wamp64/www/crud/entities/promo.php";
include "C:/wamp64/www/crud/core/promoC.php";

if (isset($_POST['nom']) and isset($_POST['idp']) and isset($_POST['pour']) and $_POST['idp'] !== '888' and $_POST['nom'] !== '0'and $_POST['pour'] !== '0' and $_POST['idp'] !== '0'  ){
	



$promo1=new promo($_POST['nom'],$_POST['idp'],$_POST['pour']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$promo1C=new promoC();

$promo1C->modifierPromo_Produit($_POST['idp'],$_POST['pour']);

$promo1C->ajouterPromo($promo1);

header('Location: afficher_data.php');
	
}else{
	echo "vérifier les champs";
	header('Location: promo.php');
}
//*/

?>