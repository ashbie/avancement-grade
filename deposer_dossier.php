<?php 
	include('session.php');
?>
<?php 
$rubriqueErr = $sousRubriqueErr = $categorieErr = $intituleErr = $formationErr = $beneficiairesErr = $anneeErr = "";

if (isset($_POST['ajouter'])){
    $rubrique="";
    $sous_rubrique=""; 
    $categorie=""; 
    $intitule=$_POST['intitule'];
    $formation=$_POST['formation']; 
    $beneficiaires=$_POST['beneficiaires']; 
	$annee=$_POST['annee']; 

     foreach ($_POST['rubrique'] as $select)
     {
       #echo $select;
	   $rubrique = $select;
     }

	 foreach ($_POST['sous_rubrique'] as $select2)
     {
       #echo '<br>'.$select2;
	   $sous_rubrique = $select2;
     }

	 foreach ($_POST['categorie'] as $select3)
     {
       #echo '<br>'.$select3;
	   $categorie = $select3;
     }

    // Give error messages if empty
    if (empty($rubrique)) {
        $rubriqueErr = "Le rubrique est requis";
    } 
    if (empty($sous_rubrique)){
      $sousRubriqueErr = "Le sous rubrique est requis";
    }
    if (empty($categorie)) {
     $categorieErr = "La catégorie email est requis";
    }
    if (empty($intitule)) {
		$intituleErr = "L'intitulé est requis";
	}
	if (empty($formation)) {
		$formationErr = "La formation est requis";
	}
	if (empty($beneficiaires)) {
		$beneficiairesErr = "Les bénéficiaires est requis";
	}
	if (empty($annee)) {
		$anneeErr = "L'année est requis";
	}
}

// Put the stuff in the database
	if(!empty($rubrique) and !empty($sous_rubrique) and !empty($categorie) and !empty($intitule) and !empty($formation) 
		and !empty($beneficiaires) and !empty($annee)){
			// receive all input values from the form
			$rubrique = mysqli_real_escape_string($db, $rubrique);
			$sous_rubrique = mysqli_real_escape_string($db, $sous_rubrique);
			$categorie = mysqli_real_escape_string($db, $categorie);
			$intitule = mysqli_real_escape_string($db, $intitule);
			$formation = mysqli_real_escape_string($db, $formation);
			$beneficiaires = mysqli_real_escape_string($db, $beneficiaires);
			$annee = mysqli_real_escape_string($db, $annee);

			// Inserting the data into the database
			$query = "INSERT INTO deposer_dossier (rubrique, sous_rubrique, element, intitule, type_formation, beneficiares_formation, annee) 
			VALUES ('$rubrique','$sous_rubrique','$categorie','$intitule', '$formation','$beneficiaires', '$annee')"; 

    			#insertion
				mysqli_query($db, $query);

	}
?>
<!DOCTYPE html>
<html lang=fr>
<head>
	<title>AVANCEMENT GRADE</title>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/mystyle5.css"/>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/page5.js"></script>
<!--
	
 That first button that appears on this page  

-->
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

<!-- désposer votre dossier -->

<button type="submit" class="btn_a" name="submit">D&eacutesposer votre dossier de candidature </button>



<!--remplire le dossier -->

<form class="form1" method="post" action="#">
	<div class="rubrique">
	<label for="rubrique_id"></label></br>
	 <select name="rubrique[]" id="rubrique_id">
	 	<option value="">Choisissez votre rubrique</option>
	 	<option value="A-Activités Pedagogiques" class="A">A-Activit&eacutes p&eacutedagogique</option>
	 	<option value="B-Activité de recherche" class="B">B-Activit&eacutes de recherche</option>
	 </select><br><span class="error">* <?php echo $rubriqueErr;?></span>
</div>
<div class="sous_rubrique">
	<label for="sous_rubrique_id"></label>
	 <select name="sous_rubrique[]" id="sous_rubrique_id">
	 	<optgroup label="sous-rubrique A"></optgroup>
	 	<option value="">Choisissez votre sous-rubrique</option>
	 	<option value="A1">&nbsp;&nbsp;&nbsp;&nbsp;A1-Production p&eacutedagogique</option>
	 	<option value="A2">&nbsp;&nbsp;&nbsp;&nbsp;A2-Encadrement p&eacutedagogique</option>
	 	<option value="A3">&nbsp;&nbsp;&nbsp;&nbsp;A3-Responsabilit&eacutes p&eacutedagogiques et administratives</option>
	 	</optgroup>
	 	<optgroup label="sous-rubrique B">
	 	<option value="B1">B1-Production scientifique</option>
	 	<option value="B2">B2-Encadrement scientifique</option>
	 	<option value="B3">B3-Responsabilit&eacutes scientifiques</option>
	 	</optgroup>
	 </select><br><span class="error">* <?php echo $sousRubriqueErr;?></span>
</div>
<div class="catégorie">
	<label for="catégorie_id"></label>
	<select name="categorie[]" id="catégorie_id">
		<optgroup label="cat&eacute;gorie A1">
			<option value="">Choisissez un &eacutel&eacutement</option>
			<option value="A11">A11-Edition d ouvrage, chapitres, polycopi&eacutes cours/TD, nouvelle manipulation de TP</option>
			<option value="A12">A12-Utilisation des NTIC: (Didacticiel, pages web &agrave caract&egravere p&eacutedagogique)</option>
			<option value="A13">A13-Autre</option>
		</optgroup>
		<optgroup label="cat&eacute;gorie A2">
			<option value="A21">A21-Volume horaire annuel d enseignement cours/TD/TP (non inclus PFE, SFE et Visites)</option>
			<option value="A22">A22-Encadrement des projets et stages de fin d &eacutetudes, m&eacutemoires de fin d ann&eacutee et travaux de r&eacutealisation,</option>
			<option value="A23">A23-Encadrement de ressources humaines: formations de formateurs, personnel administratif et technique</option>
			<option value="A24">A24-Participation dans des formations universitaires publiques (DUT, DEUG/DEUT, L, Ma&icirctrise, DESS, DESA, M, D) dans d autres &eacutetablissements</option>
			<option value="A25">A25-Stages de formation p&eacutedagogique</option>
			<option value="A26">A26-Autre</option>
		</optgroup>
		<optgroup label="cat&eacute;gorie A3">
			<option value="A31">A31-Responsabilit&eacutes administratives (directeur, vice directeur, charg&eacute de mission)</option>
			<option value="A32">A32-Responsabilit&eacutes p&eacutedagogiques (chef de d&eacutepartement, coordonnateur de fili&egravere, responsable de module)</option>
			<option value="A33">A33-Elaboration de fili&egravere, module</option>
			<option value="A34">A34-Organisation de concours</option>
			<option value="A35">A35-Responsabilit&eacute d une formation continue dipl&ocircmante ou qualifiante</option>
			<option value="A36">A36-Membre d une structure universitaire (conseil d &eacutetablissement, conseil d universit&eacute, commission paritaire,commission scientifique)</option>
		    <option value="A37">A37- Autre</option>
	    </optgroup>
		<optgroup label="cat&eacute;gorie B1">
			<option value="B11">B11-Livres, chapitres</option>
			<option value="B12">B12-Articles dans des revues sp&eacutecialis&eacutees</option>
			<option value="B13">B13-Editions de travaux de recherche (Th&egraveses, dissertations, m&eacutemoires)</option>
			<option value="B14">B14-Communications dans des actes de congr&egraves</option>
			<option value="B15">B15-Mission et participation &agrave une manifestation scientifique</option>
			<option value="B16">B16-Autre</option>
		</optgroup>
		<optgroup label="cat&eacute;gorie B2">
			<option value="B21">B21-Encadrement et co-encadrement de th&egraveses de doctorat ou d habilitation</option>
			<option value="B22">B22-Encadrement et co-encadrement de travaux de recherche de Master, DESA. et de DESS</option>
			<option value="B23">B23-Participation &agrave des jurys de th&egraveses,</option>
			<option value="B24">B24-Recrutement des enseignants</option>
			<option value="B25">B25-Autre</option>
		</optgroup>
		<optgroup label="cat&eacute;gorie B3">
			<option value="B31">B31-Responsabilit&eacute ou participation &agrave la gestion de laboratoire, unit&eacute de recherche, r&eacuteseau, p&ocircle de comp&eacutetences, UFR-Doctorat ou UFR- DESA/ DESS,</option>
			<option value="B32">B32-Projets et contrats de recherche financ&eacutes</option>
			<option value="B33">B33-Expertise et &eacutevaluation scientifique nationale et internationale</option>
			<option value="B34">B34-Organisation de manifestations scientifiques et techniques en tant que pr&eacutesident</option>
			<option value="B35">B35-Brevet, prototype, incubation de projet et projet recherche & d&eacuteveloppement.</option>
			<option value="B36">B36-Autre</option>
		</optgroup>
	</select><br><span class="error">* <?php echo $categorieErr;?></span>
	
</div>
<div class="intitulé">
	    <label for="intitulé_id" >intitul&eacute</label>:</br>
		<input type="text" name="intitule" id="intitulé_id" placeholder="intitul&eacute..." size="38" maxlength="30"/><br><span class="error">* <?php echo $intituleErr;?></span>
</div>
<div class="Type_de_la_Formation">
	    <label for="Type_de_la_Formation" >Type de la Formation</label>:</br>
		<input type="text" name="formation" id="Type_de_la_Formation" placeholder="Quelle est le type de votre formation ?" size="38" maxlength="30"/><br><span class="error">* <?php echo $formationErr;?></span>
</div>
<div class="bénéficiaires_de_la_formation">
	    <label for="bénéficiaires de la formation" >b&eacuten&eacuteficiaires de la formation</label>:</br>
		<input type="text" name="beneficiaires" id="bénéficiaires_de_la_formation" placeholder="b&eacuten&eacuteficiaires de la formation" size="38" maxlength="30"/><br><span class="error">* <?php echo $beneficiairesErr;?></span>
</div>
<div class="année">
	    <label for="annee" >Ann&eacutee</label>:</br>
		<input type="text" name="annee" id="annee_id" placeholder="20xx-20xx" size="38" maxlength="30"/><br><span class="error">* <?php echo $anneeErr;?></span>
</div>
<button type="submit" class="btn" name="ajouter" >Ajouter</button>
<button  class="btn_b" name="terminer" onclick="" >Terminer</button>



</form>
</body>
</html>
