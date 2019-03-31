<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="veriferChamps_Pub.js"></script>

    <!-- Title Page-->
    <title>Gesion des Pubs</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<body>
<div class="container">
 <div class="col-lg-12">
 <br><br>
 <div class="card-header bg-dark">
 <h1 class="text-white text-center" > Display Table Data </h1>
 </div>
 <br>
 <table  id="tabledata" class="table table-data2">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Nom </th>
 <th> Position </th>
 <th> image </th>
  <th> Delete </th>
 <th> Update </th>
  </tr >

<?PHP
include "C:/wamp64/www/crud/core/pubC.php";
$pub1C=new pubC();
$listePubs=$pub1C->afficherPub();
?>

<?PHP
foreach($listePubs as $row){
	?>
	<tr class="text-center">
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['pos']; ?></td>
	<td><?PHP echo $row['im']; ?></td>
		<td><form method="POST" action="supprimer.php">
			<button class="btn-danger btn" type="submit" name="supprimer" value="supprimer"><i class="fa fa-ban"></i> Delete </button>

	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>

		<td><form action="modifierPub.php">
			<button class="btn btn-success"" type="submit" name="supprimer" value="supprimer"><i class="fa fa-dot-circle-o"></i> Update </button>

	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>

	</tr>
	<?PHP
}
?>


</body>
</html>