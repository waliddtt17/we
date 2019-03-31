<HTML>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="verif.js"></script>
</head>

<body>


<?PHP
include "C:/wamp64/www/crud/entities/promo.php";
include "C:/wamp64/www/crud/core/promoC.php";
if (isset($_GET['id'])){
	$promoC=new promoC();
    $result=$promoC->recupererPromo($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
		$idp=$row['idp'];
		$pour=$row['pour'];
		
?>
<div class="col-lg-6 m-auto">
  <br><br>
<form method="POST" action="" enctype='multipart/form-data'>


 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Pub </h1>
 </div>

  <div class="col-12 col-md-9">
    <label> NOM: </label>
    <input type="text" id="nome" name="nom" value="<?PHP echo $nom ?>" class="form-control"> 
  </div>

 <div class="col-12 col-md-9">
      <label> Pourcentage: </label>
       <select name="pour" id="im" value="<?PHP echo $pour ?>" class="form-control">
       <option value="0">choix</option>
       <option value="10">10%</option>
       <option value="20">20%</option>
       <option value="30">30%</option>
       <option value="40">40%</option>
       <option value="50">50%</option>
       <option value="60">60%</option>
       <option value="70">70%</option>
       <option value="80">80%</option>
       </select>  
 </div>
          

   <div class="card-footer">
  <button class="btn btn-primary btn-sm" type="submit" name="modifier" onclick="verif()" value="modifier" ><i class="fa fa-dot-circle-o"></i> Submit </button>
  <tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
  <button class="btn btn-danger btn-sm" type="reset" name="done"><i class="fa fa-ban"></i> Reset </button>
  </div>
  
</form>
</div>
<?PHP
	}
}
if (isset($_POST['modifier'])){
         if(empty($_POST['nom']) || empty($_POST['pour']))
       {
          header('Location: datatabel/tabel.php');
       }
       else
	{
   $promo=new promo($_POST['nom'],$idp,$_POST['pour']);
   $promoC->updatePromo_Produit($idp,$_POST['pour']);
	$promoC->modifierPromo($promo,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: datatabel/tabel.php');
}
}
?>
</body>
</HTMl>