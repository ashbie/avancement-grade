<?php 
	include('session.php');
?>
<?php 
$nomErr = $prenomErr = $emailErr = $somErr = $gradeErr = $titreErr = $periodeErr = $natureErr = "";

if (isset($_POST['boutonCompleterInformation'])){
    $nom=$_POST["nom"];
    $prenom=$_POST['prenom']; 
    $email=$_POST['email']; 
    $som=$_POST['som']; 
    $grade=""; 
	$titre=""; 
    $periode=$_POST['periode']; 
    $nature=$_POST['nature']; 

	
  #if(isset($_POST['boutonCreer'])) {

     foreach ($_POST['grade'] as $select)
     {
       #echo $select;
	   $grade = $select;
     }

	 foreach ($_POST['titre'] as $select2)
     {
       #echo $select2;
	   $titre = $select2;
     }
   #}


    // Give error messages if empty
    if (empty($_POST["nom"])) {
        $nomErr = "Le nom est requis";
    } 
    if (empty($_POST["prenom"])){
      $prenomErr = "Le prenom est requis";
    }
    if (empty($_POST["email"])) {
     $emailErr = "L'adresse email est requis";
    }
    if (empty($_POST["som"])) {
		$somErr = "Le som est requis";
	}
	if (empty($grade)) {
		$gradeErr = "Le grade est requis";
	}
	if (empty($titre)) {
		$titreErr = "Le titre est requis";
	}
	if (empty($_POST["periode"])) {
		$periodeErr = "La periode est requis";
	}
	if (empty($_POST["nature"])) {
		$natureErr = "La nature d'avancement est requis";
	}
}

// Put the stuff in the database
if(!empty($nom) and !empty($prenom) and !empty($email) and !empty($som) and !empty($grade) 
and !empty($titre) and !empty($periode) and !empty($nature)){
	// receive all input values from the form
	$nom = mysqli_real_escape_string($db, $nom);
	$prenom = mysqli_real_escape_string($db, $prenom);
	$email = mysqli_real_escape_string($db, $email);
	$som = mysqli_real_escape_string($db, $som);
	$grade = mysqli_real_escape_string($db, $grade);
	$titre = mysqli_real_escape_string($db, $titre);
	$periode = mysqli_real_escape_string($db, $periode);
	$nature = mysqli_real_escape_string($db, $nature);


	// Inserting the data into the database
	$query = "INSERT INTO completer_informations (nom, prenom, email, som, grade, titre, periode, nature) 
	VALUES ('$nom','$prenom','$email','$som', '$grade','$titre', '$periode', '$nature')"; 

		#insertion
		mysqli_query($db, $query);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>AVANCEMENT GRADE</title>

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

<h1 style="position:absolute;top: 15%;left:31% ;">BIENVENUE <?PHP echo " ".$_SESSION['firstname']." ".$_SESSION['lastname'] ;?> </h1>
<br>
<div class="col-12">
<a class="btn btn-success btn-block" href="deposer_dossier.php">Déposer votre dossier de candidature</a>
</div>
</body>

</html>