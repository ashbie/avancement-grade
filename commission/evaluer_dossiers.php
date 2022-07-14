<?php 
	include('../session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>AVANCEMENT GRADE</title>
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/mystyle4.css"/>
    <link href="all.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/user-products.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	span.error{
		color:red;
		font-size: 60%;
	}
</style>
</head>
<body style="background-image: url('../img/whiteBg.jpg');">
<!-- Navbar -->
<?php  include("navbar.php");?>	
<center><h1>Evaluer Dossiers</h1></center>
<!-- Collecting the info using PHP -->
<?php
$myemail =  $_SESSION['email'];
$query8 = "SELECT * from `users` where `email` = '$myemail'";
$result8 = mysqli_query($db,$query8);
$row8 = mysqli_fetch_array($result8,MYSQLI_ASSOC);
?>
<!-- Table showing info -->
<?php

 echo "<div class='container pt-5'>
	<div class='row'>
			<div id='myCarousel' class='carousel slide' data-ride='carousel' data-interval='0'>
			 
			";

			

echo "<!-- Wrapper for carousel items -->
<div class='carousel-inner'>
	<div class='item carousel-item active'>
		<div class='row'>";


$result = mysqli_query($db,"SELECT * from `users`");

while($row = mysqli_fetch_assoc($result)){
    $users_email =  $row['email'];
    $query8 = "SELECT * from `completer_informations` where `email` = '$users_email'";
    $result8 = mysqli_query($db,$query8);
    $comp_row = mysqli_fetch_array($result8,MYSQLI_ASSOC);

	     echo "<div class='col-lg-3 mt-4'>
              <div class='card' style='height:auto;'> 
			  <form method='post' action=''>
			  <input type='hidden' name='id' value=".$row['nom']." />
			  <span class='wish-icon'><i class='far fa-heart'></i></span>
              <div class='card-block'>
                <span class='pr-4'>Nom:</span> <h4 class='card-title pl-2'>".$row['nom']."</h4><br/><br/>
			    <span class='pr-3'>Prenom:</span> <div class='meta text-muted pl-1' style='display: inline;'><b>".$row['prenom']."</b></div><br/><br/>
                <span class='pr-4'>Titre:</span> <h4 class='card-title pl-2'>".$comp_row['titre']."</h4><br/><br/>
                <span class='pr-4'>Grade:</span> <h4 class='card-title pl-2'>".$comp_row['grade']."</h4><br/><br/>
                </div>
              <div class='card-footer'>
                <span><strong>".$row['completed_info']." MAD</strong></span>
                <span class='float-right'><button type='submit' class='btn'>Voir Dossier</button></span>
              </div>
			  </form>
			  </div>
			  </div>";
		
		}


		echo "
</div>
</div>
</div>

</div>
</div>
</div>";



	mysqli_close($db);
?>


<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">

</div>

<br /><br />
<!-- footer comes here -->
</div>

</body>

</html>