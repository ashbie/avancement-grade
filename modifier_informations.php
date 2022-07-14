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
	if (empty($nature)) {
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


	// Updating the data in the database
	$myemail = $_SESSION['email'];
	$query = "UPDATE `completer_informations` 
			  SET `email` = '$email', `som` = '$som', `grade` = '$grade', `titre` = '$titre', `periode` = '$periode', `nature` = '$nature'
	          WHERE `email` = '$myemail' "; 
	$query2 = "UPDATE `users` 
				SET `nom` = '$nom',`prenom` = '$prenom',`email` = '$email'
				WHERE `email` = '$myemail' ";
	//Update
		mysqli_query($db, $query);
		mysqli_query($db, $query2);
	//After updating, the person should re-login
	header('location:logout.php');
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
<?php  include("navbar_v2.php");?>	

<h1 style="position:absolute;top: 15%;left:31% ;">Modifier Vos Informations</h1>
<form method="post" action="#" class="form1">
<div class="a1">
<label for="nom" >Nom</label>:</br>
		<input type="text" name="nom" id="nom_id" placeholder="Ex:Som" size="30" maxlength="20"/><br><span class="error">* <?php echo $nomErr;?></span>
		</div>	
<div class="a2">
<label for="prenom" >Prenom</label>:</br>
		<input type="text" name="prenom" id="prenom_id" placeholder="Ex:Som" size="30" maxlength="20"/><br><span class="error">* <?php echo $prenomErr;?></span>
	    </div>
<div class="a3">
<label for="email" >Email</label>:</br>
		<input type="text" name="email" id="email_id" placeholder="Ex:Som" size="30" maxlength="20"/><br><span class="error">* <?php echo $emailErr;?></span>
		</div>
<div class="a">
		<label for="som" >Som</label>:</br>
		<input type="text" name="som" id="som_id" placeholder="Ex:Som" size="30" maxlength="20"/><br><span class="error">* <?php echo $somErr;?></span>
</div>

<div class="c">
	<label for="titre">Titre</label></br>
	 <select name="titre[]" id="titre_id">
	 	<option value="">choisissez votre Titre</option>
	 	<option value="PESA">PESA</option>
	 	<option value="PH">PH</option>
	 	<option value="PES">PES</option>
	 </select><br><span class="error">* <?php echo $titreErr;?></span>
</div>

<div class="b">
	<label for="grade">Grade</label></br>
	 <select name="grade[]" id="grade_id">
	 	<option value="">choisissez votre Grade</option>
	 	<option value="A">A</option>
	 	<option value="B">B</option>
	 	<option value="C">C</option>
	 	<option value="D">D</option>
	 </select><br><span class="error">* <?php echo $gradeErr;?></span>
</div>

	
<div class="d">
		<label for="NatureDavancement_id" >Nature D'avancement</label>:</br>
		<select name="nature[]" id="NatureDavancement_id" >
	 	<option value=""  selected="selected">Quelle est votre nature d'avancement ?</option>
	 	<option value="Exceptionnel">Enseigné 6 ans</option>
	 	<option value="Rapide">Enseigné 7 ans</option>
	 	<option value="Normal">Enseigné 8 ans</option>
	 </select>
		<br><span class="error">* <?php echo $natureErr;?></span>
</div>
<div class="e">
		<label for="Periode" >Periode</label>:</br>
		<input type="text" name="periode" id="Periode_id" placeholder="20xx-20xx" size="20" maxlength="10"/><br><span class="error">* <?php echo $periodeErr;?></span>
</div>
<button type="submit" class="btn" name="boutonCompleterInformation" >Modifier</button>
</form>
</body>

</html>