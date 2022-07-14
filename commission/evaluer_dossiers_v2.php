<?php 
	include('../session.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>AVANCEMENT GRADE</title>
<style>
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
    text-align: center;
}
::-moz-placeholder { /* Firefox 19+ */
    text-align: center;
}
:-ms-input-placeholder { /* IE 10+ */
    text-align: center;
}
:-moz-placeholder { /* Firefox 18- */
    text-align: center;
}
ul {
    display: inline;
}
li {
    list-style-type: lower-roman;
    display: inline;
    padding-right: 20px;
}
li form {
    display: inline !important;
}
.filters form {
    display: inline;
}
</style>
</head>
<body style="background-image: url('../img/whiteBg.jpg');">
<!-- Navbar -->
<?php  include("navbar.php");?>	
<h3 class="text-center font-weight-bold text-uppercase py-4">Liste de tous les Enseignants</h3>

<?php

echo "<div class='container'>";


if( isset($_POST['voir_dossier'])){
	$voir_dossier_email = $_POST['email'];
    $sql = "SELECT * FROM `users` WHERE `email`='$voir_dossier_email'";
	$_SESSION['voir_dossier_email'] = $voir_dossier_email;
    if($db->query($sql) === TRUE){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>L'utilisateur a été supprimé avec succès de la base de données</strong>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
              </div>";
    }
}


$sql = "SELECT * from `users`
		INNER JOIN `completer_informations`
		ON `users`.`email` = `completer_informations`.`email`";

if(isset($_POST['search'])){
	$grade=""; 
	$titre=""; 
	$nature="";
	foreach ($_POST['grade'] as $select)
	{
	$grade = $select;
	}

	foreach ($_POST['titre'] as $select2)
	{
	$titre = $select2;
	}

	foreach ($_POST['nature'] as $select)
	{
	  $nature = $select;
	}

	$sql = "SELECT * FROM `users` 
	CROSS JOIN `completer_informations` 
	WHERE `users`.`email` = `completer_informations`.`email`
	AND `completer_informations`.`grade` = '$grade' 
	AND `completer_informations`.`titre` = '$titre'
	AND `completer_informations`.`nature` = '$nature'; ";
}
$result = mysqli_query($db,"$sql");
//$result = $db->query($sql);

if( $result->num_rows > 0)
{
?>
<div class="filters">
<strong>Filtrer par...</strong>
<form method="post"><br>
<ul>
    <li><label for="titre_id">Titre</label>
	 <select name="titre[]" id="titre_id" required="required">
	 	<option value="">Chercher Quelle Titre</option>
	 	<option value="PESA">PESA</option>
	 	<option value="PH">PH</option>
	 	<option value="PES">PES</option>
	 </select>
	</li>
    <li><label for="grade_id">Grade</label>
	 <select name="grade[]" id="grade_id" required="required">
	 	<option value="">Chercher Quelle Grade</option>
	 	<option value="A">A</option>
	 	<option value="B">B</option>
	 	<option value="C">C</option>
	 	<option value="D">D</option>
	 </select>
	</li>
	<li>
	<label for="NatureDavancement_id" >Nature D'avancement</label>:</br>
		<select name="nature[]" id="NatureDavancement_id" >
	 	<option value=""  selected="selected">Chercher Quelle nature d'avancement ?</option>
	 	<option value="Exceptionnel">Enseigné 6 ans</option>
	 	<option value="Rapide">Enseigné 7 ans</option>
	 	<option value="Normal">Enseigné 8 ans</option>
	 </select>
	</li>
    <li>
         <!-- Search form -->
        <div class="form-inline mr-0" style="float: right;">
            <button class="btn btn-sm btn-success ml-0" name="search"><i class="fas fa-search" aria-hidden="true"></i></button>
        </div>
    </li>
</ul>
</form>
</div>
 
<div class="table-responsive mt-4">
             
<table id="mytable" class="table table-bordered table-responsive-md table-striped text-center">
     
     <thead class="black white-text">
      <th>Nom</th>
      <th>Prénom</th>
      <th>Titre</th>
      <th>Grade</th>
	  <th>Nature d'Avancement</th>
      <th>Dossier</th>
     </thead>
<tbody>
    <?php
    while( $row = $result->fetch_assoc()){
		/*$users_email =  $row['email'];
		$query8 = "SELECT * from `completer_informations` where `email` = '$users_email'";
		$result8 = mysqli_query($db,$query8);
		$comp_row = mysqli_fetch_array($result8,MYSQLI_ASSOC);
		*/
        echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
        echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
        echo "<tr>";
        echo "<td>".$row['nom'] . "</td>";
        echo "<td>".$row['prenom'] . "</td>";
        echo "<td>".$row['titre'] . "</td>";
        echo "<td>".$row['grade'] . "</td>";
		echo "<td>".$row['nature'] . "</td>";
        echo "<td><p data-placement='top'><button class='btn btn-info btn-sm' type='submit' name='voir_dossier' data-title='voir_dossier' data-toggle='modal' data-target='#voir_dossier' ><i class='fas fa-pencil-alt'></i></button></p></td>";
        echo "</tr>";
        echo "</form>"; //added
    }
    
?>
</tbody>
</table>
<?php
} // ending curly bracket of if( $result->num_rows > 0){
else
{
    echo "<br/><div class='alert alert-dark' role='alert'>Aucun Enseignant trouvé</div>";
}
?>
</div>

 <!-- Include JS files here -->

        <!-- jQuery -->
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="../js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="../js/mdb.min.js"></script>
        <!-- Your custom scripts (optional) -->
        <script type="text/javascript"></script>
		
</body>

</html>