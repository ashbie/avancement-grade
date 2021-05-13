<?php 
	include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>AVANCEMENT GRADE</title>
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/mystyle4.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	span.error{
		color:red;
		font-size: 60%;
	}
</style>
</head>
<body style="background-image: url('img/whiteBg.jpg');">
<!-- Navbar -->
<?php  include("navbar.php");?>	
<center><h1>Vos Informations</h1></center>
<!-- Collecting the info using PHP -->
<?php
$myemail =  $_SESSION['email'];
$query8 = "SELECT * from completer_informations where email = '$myemail'";
$result8 = mysqli_query($db,$query8);
$row8 = mysqli_fetch_array($result8,MYSQLI_ASSOC);
?>
<!-- Table showing info -->
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Champ</th>
      <td>Valeur</td>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="col">Nom</th>
      <td><?php echo $row['nom']; ?></td>
    </tr>
    <tr>
      <th scope="col">Prénom</th>
      <td><?php echo $row['prenom']; ?></td>
    </tr>
    <tr>
      <th scope="col">Nom utilisateur</th>
      <td><?php echo $row['nom_utilisateur']; ?></td>
    </tr>
    <tr>
      <th scope="col">Email</th>
      <td><?php echo $row['email']; ?></td>
    </tr>
    <tr>
      <th scope="col">Som</th>
      <td><?php echo $row8['som']; ?></td>
    </tr>
    <tr>
    <th scope="col">Titre</th>
      <td><?php echo $row8['titre']; ?></td>
    </tr>
    <tr>
      <th scope="col">Grade</th>
      <td><?php echo $row8['grade']; ?></td>
    </tr>
    <tr>
      <th scope="col">Periode</th>
      <td><?php echo $row8['periode']; ?></td>
    </tr>
    <tr>
      <th scope="col">Nature d'Avancement</th>
      <td><?php echo $row8['nature']; ?></td>
    </tr>
    <tr>
        <td><center><button style="" class="btn_a" ><a href="modifier_informations.php">Modifier Informations</a></button></center></td>
    </tr>
  </tbody>
</table>


</body>

</html>