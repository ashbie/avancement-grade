<?php 
include('session.php');
 
 if (isset($_POST['id_rubrique'])) {
	$query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['id_rubrique'];
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<option value="">Select sous rubrique</option>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<option value='.$row['id_sous_rubrique'].'>'.$row['sous_rubrique'].'</option>';
		 }
	}

}
elseif (isset($_POST['id_sous_rubrique'])) {

	$x = $_POST['id_sous_rubrique']; 

	$query = "SELECT * FROM catégori where id_sous_rubrique= '$x' ";
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<option value="">Select categori</option>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<option value='.$row['id_catégori'].'>'.$row['catégori'].'</option>';
		 }
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }

}
elseif (isset($_POST['id_catégori'])) {

	$y = $_POST['id_catégori']; 

	$query = "SELECT * FROM élément where id_catégori= '$y' ";
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<option value="">Select element</option>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<option value='.$row['code'].'>'.$row['élément'].'</option>';
		 }
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }

}
 //A11
 //A11
 //A11
elseif (isset($_POST['code']) and ($_POST['code']=='A111' or $_POST['code']=='A112' or $_POST['code']=='A113'or $_POST['code']=='A114'or 
	    $_POST['code']=='A115' )) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
		 			<div class="container">
					 <div class="row"> <div class="col-6">TITRE</div><div class="col-6"><input type="text" name="titre" required="required" /></div>   </div>
					 <div class="row"><div class="col-6">EDITEUR</div><div class="col-6"><input type="text" name="editeur" required="required" /></div>   </div>
					 <div class="row"><div class="col-6">ANNEE DE PRODUCTION</div><div class="col-6"><input type="text" name="annee_de_production" required="required" /></div>   </div>
					 <div class="row"><div class="col-6">INTITULE</div><div class="col-6"><input type="text" name="intitule" required="required" /></div>   </div>
					 <div class="row"><div class="col-6">NIVEAU</div><div class="col-6"><input type="text" name="niveau" required="required" /></div>   </div>
					 <div class="row"><div class="col-6">DEPARTEMENT</div><div class="col-6"><input type="text" name="departement" required="required" /></div>   </div>
					 <div class="row"><div class="col-6">ANNEE</div><div class="col-6"><input type="text" name="annee" required="required" /></div>   </div>
					 <div class="row"><div class="col-6">code</div><div class="col-6"><input type="text" name="code"/></div>        </div>
					 </div>
				
					 </br>
			 <input type="submit" value="Envoyez les informations" name="submit_a11">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
 //A12
 //A12
 //A12
elseif (isset($_POST['code']) and ($_POST['code']=='A121' or $_POST['code']=='A122' )) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
				  <div class="container">
					 <div class="row"><div class="col-6">INTITULE</div><div class="col-6"><input type="text" name="intitule" required="required" /></div>   </div>
					 <div class="row"><div class="col-6">NIVEAU</div><div class="col-6"><input type="text" name="niveau" required="required" /></div>   </div>
					 <div class="row"><div class="col-6">DEPARTEMENT</div><div class="col-6"><input type="text" name="departement" required="required" /></div>   </div>
					 <div class="row"><div class="col-6">code</div><div class="col-6"><input type="text" name="code"  /></div>        </div>
					 </div>
				
					 </br>
			 <input type="submit" value="Envoyez les informations" name="submit_a12">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
 //A21
 //A21
 //A21
elseif (isset($_POST['code']) and ($_POST['code']=='A211'  )) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
				  <div class="container">
					 <div class="row"> <div class="col-6">ANNEE</div><div class="col-6"><input type="text" name="annee" required="required" /></div>   </div>
					 <div class="row"><div class="col-6">DEPARTEMENT</div><div class="col-6"><input type="text" name="departement" required="required" /></div>   </div>
					 <div class="row"><div class="col-6">NIVEAU 1 ou 2 </div><div class="col-6"><input type="text" name="niveau_1_ou_2" required="required" /></div>   </div>
					 <div class="row"><div class="col-6">matière</div><div class="col-6"><input type="text" name="matiere" required="required" /></div>   </div>
					 <div class="row"><div class="col-6">Volume annuel équivalent TP</div><div class="col-6"><input type="text" name="Volume_annuel_equivalent_TP" required="required" /></div>   </div>
					 <div class="row"><div class="col-6">cour</div><div class="col-6"><input type="text" name="cour" required="required" /></div>   </div>
					 <div class="row"><div class="col-6">TD</div><div class="col-6"><input type="text" name="TD" required="required" /></div>   </div>
					 <div class="row"><div class="col-6">TP</div><div class="col-6"><input type="text" name="TP" required="required" /></div>        </div>
					 <div class="row"><div class="col-6">Total équivalent TP</div><div class="col-6"><input type="text" name="Total_equivalent_TP" required="required" /></div>   </div>
					 <div class="row"><div class="col-6">code</div><div class="col-6"><input type="text" name="code"  /></div>   </div>
					 </div>
				
					 </br>
			 <input type="submit" value="Envoyez les informations" name="submit_a21">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
 //A22
 //A22
 //A22
elseif (isset($_POST['code']) and ($_POST['code']=='A221' or $_POST['code']=='A222' or $_POST['code']=='A223'  )) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
				  <div class="container">
				  <div class="row"><div class="col-6">INTITULE</div><div class="col-6"><input type="text" name="intitule" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">NIVEAU</div><div class="col-6"><input type="text" name="niveau" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">DEPARTEMENT</div><div class="col-6"><input type="text" name="departement" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">ANNEE</div><div class="col-6"><input type="text" name="annee" required="required" /></div>        </div>
				  </div>
				
				  </br>
		  <input type="submit" value="Envoyez les informations" name="submit_a22"> ';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
 //A23
 //A23
 //A23
elseif (isset($_POST['code']) and ($_POST['code']=='A231' or $_POST['code']=='A232' or $_POST['code']=='A233'  )) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
				  <div class="container">
				  <div class="row"><div class="col-6">INTITULE</div><div class="col-6"><input type="text" name="intitule" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Type de la formation</div><div class="col-6"><input type="text" name="Type_de_la_formation" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Bénéficiaires de la formation</div><div class="col-6"><input type="text" name="Beneficiaires_de_la_formation" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">ANNEE</div><div class="col-6"><input type="text" name="annee" required="required" /></div>        </div>
				  <div class="row"><div class="col-6">Code</div><div class="col-6"><input type="text" name="code"  /></div>        </div>
				  </div>
				
				  </br>
		  <input type="submit" value="Envoyez les informations" name="submit_a23">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
 //A24
 //A24
 //A24
elseif (isset($_POST['code']) and ($_POST['code']=='A241'  )) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
				  <div class="container">
				  <div class="row"><div class="col-6">FORMATION</div><div class="col-6"><input type="text" name="FORMATION" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Etablissement</div><div class="col-6"><input type="text" name="Etablissement" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Matière/Module</div><div class="col-6"><input type="text" name="matiere" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">ANNEE</div><div class="col-6"><input type="text" name="annee" required="required" /></div>        </div>
				  <div class="row"><div class="col-6">Volume horaire</div><div class="col-6"><input type="text" name="Volume_horaire" required="required" /></div>        </div>
				  <div class="row"><div class="col-6">Code</div><div class="col-6"><input type="text" name="code" /></div>        </div>
				  </div>
				
				  </br>
		  <input type="submit" value="Envoyez les informations" name="submit_a24">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
 //A25
 //A25
 //A25
elseif (isset($_POST['code']) and ($_POST['code']=='A251' or $_POST['code']=='A252'  )) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
				  <div class="container">
				  <div class="row"><div class="col-6">Nature</div><div class="col-6"><input type="text" name="Nature" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Période</div><div class="col-6"><input type="text" name="Periode" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Lieu</div><div class="col-6"><input type="text" name="Lieu" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Code</div><div class="col-6"><input type="text" name="code" /></div>        </div>
				  </div>
				
				  </br>
		  <input type="submit" value="Envoyez les informations" name="submit_a25">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
 //A31
 //A31
 //A31
//A32
 //A32
 //A32
//A33
 //A33
 //A33
//A34
 //A34
 //A34
elseif (isset($_POST['code']) and ($_POST['code']=='A311' or $_POST['code']=='A312' or $_POST['code']=='A321' or$_POST['code']=='A322' or$_POST['code']=='A323' or $_POST['code']=='A331' or$_POST['code']=='A332' or$_POST['code']=='A333' or $_POST['code']=='A341' or$_POST['code']=='A342' )) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
				  <div class="container">
				  <div class="row"><div class="col-6">Nature</div><div class="col-6"><input type="text" name="Nature" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Période</div><div class="col-6"><input type="text" name="Periode" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Etablissement</div><div class="col-6"><input type="text" name="Etablissement" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Code</div><div class="col-6"><input type="text" name="code" /></div>        </div>
				  </div>
				
				  </br>
		  <input type="submit" value="Envoyez les informations" name="submit_a31_a32_a33_a34">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
//A35
 //A35
 //A35
elseif (isset($_POST['code']) and ($_POST['code']=='A351')) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
				  <div class="container">
				  <div class="row"><div class="col-6">INTITULE</div><div class="col-6"><input type="text" name="intitule" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">NIVEAU</div><div class="col-6"><input type="text" name="niveau" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Département et établissement</div><div class="col-6"><input type="text" name="Departement_et_etablissement" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Année</div><div class="col-6"><input type="text" name="annee" required="required" /></div>        </div>
				  <div class="row"><div class="col-6">Code</div><div class="col-6"><input type="text" name="code" /></div>        </div>
				  </div>
				
				  </br>
		  <input type="submit" value="Envoyez les informations" name="submit_a35">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
//A36
 //A36
 //A36
elseif (isset($_POST['code']) and ($_POST['code']=='A361' or $_POST['code']=='A362' or $_POST['code']=='A363' or $_POST['code']=='A364' or $_POST['code']=='A365' or $_POST['code']=='A366' or $_POST['code']=='A367')) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
				  <div class="container">
				  <div class="row"><div class="col-6">Nature</div><div class="col-6"><input type="text" name="Nature" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Période</div><div class="col-6"><input type="text" name="Periode" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Structure universitaire</div><div class="col-6"><input type="text" name="Structure_universitaire" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Code</div><div class="col-6"><input type="text" name="code" /></div>        </div>
				  </div>
				
				  </br>
		  <input type="submit" value="Envoyez les informations" name="submit_a36">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
//B11
 //B11
 //B11
//B12
 //B12
 //B12
//B13
 //B13
 //B13
elseif (isset($_POST['code']) and ($_POST['code']=='B111' or $_POST['code']=='B112' or $_POST['code']=='B121' or $_POST['code']=='B122' or $_POST['code']=='B123' or $_POST['code']=='B124' or $_POST['code']=='B131' or $_POST['code']=='B132' or $_POST['code']=='B133' )) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
				  <div class="container">
				  <div class="row"><div class="col-6">Titre</div><div class="col-6"><input type="text" name="titre" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Année</div><div class="col-6"><input type="text" name="annee" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Référence</div><div class="col-6"><input type="text" name="Reference" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Code</div><div class="col-6"><input type="text" name="code" /></div>        </div>
				  </div>
				
				  </br>
		  <input type="submit" value="Envoyez les informations" name="submit_b11_b12_b13">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
//B14
 //B14
 //B14
//B15
 //B15
 //B15
elseif (isset($_POST['code']) and ($_POST['code']=='B141' or $_POST['code']=='B142' or $_POST['code']=='B143' or $_POST['code']=='B144' or $_POST['code']=='B145' or $_POST['code']=='B146' or $_POST['code']=='B147' or $_POST['code']=='B148' or $_POST['code']=='B149' or $_POST['code']=='B151' or $_POST['code']=='B152' or $_POST['code']=='B153' )) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
				  <div class="container">
				  <div class="row"><div class="col-6">Titre</div><div class="col-6"><input type="text" name="titre" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Intitulé de la manifestation</div><div class="col-6"><input type="text" name="Intitule_de_la_manifestation" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Lieu de la manifestation</div><div class="col-6"><input type="text" name="Lieu_de_la_manifestation" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Année</div><div class="col-6"><input type="text" name="annee" required="required" /></div>        </div>
				  <div class="row"><div class="col-6">Code</div><div class="col-6"><input type="text" name="code" /></div>        </div>
				  </div>
				
				  </br>
		  <input type="submit" value="Envoyez les informations" name="submit_b14_b15">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
//B21
 //B21
 //B21
//B22
 //B22
 //B22
elseif (isset($_POST['code']) and ($_POST['code']=='B211' or $_POST['code']=='B212' or $_POST['code']=='B221' )) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
				  <div class="container">
				  <div class="row"><div class="col-6">Nature de l’encadrement</div><div class="col-6"><input type="text" name="Nature_de_encadrement" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Nom du candidat</div><div class="col-6"><input type="text" name="Nom_du_candidat" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Thème</div><div class="col-6"><input type="text" name="Theme" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Année et lieu de soutenance</div><div class="col-6"><input type="text" name="Annee_et_lieu_de_soutenance" required="required" /></div>        </div>
				  <div class="row"><div class="col-6">Code</div><div class="col-6"><input type="text" name="code" /></div>        </div>
				  </div>
				
				  </br>
		  <input type="submit" value="Envoyez les informations" name="submit_b21_b22">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
//B23
 //B23
 //B23
elseif (isset($_POST['code']) and ($_POST['code']=='B231' or $_POST['code']=='B232'  )) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
				  <div class="container">
				  <div class="row"><div class="col-6">Nom du candidat</div><div class="col-6"><input type="text" name="Nom_du_candidat" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Diplôme</div><div class="col-6"><input type="text" name="Diplome" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Thème</div><div class="col-6"><input type="text" name="Theme" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Lieu de soutenance</div><div class="col-6"><input type="text" name="lieu_de_soutenance" required="required" /></div>        </div>
				  <div class="row"><div class="col-6">Date de soutenance</div><div class="col-6"><input type="text" name="Date_de_soutenance" required="required" /></div>        </div>
				  <div class="row"><div class="col-6">Code</div><div class="col-6"><input type="text" name="code" /></div>        </div>
				  </div>
				
				  </br>
		  <input type="submit" value="Envoyez les informations" name="submit_b23">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
//B24
 //B24
 //B24
elseif (isset($_POST['code']) and ($_POST['code']=='B241' )) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
				  <div class="container">
				  <div class="row"><div class="col-6">Département</div><div class="col-6"><input type="text" name="departement" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Intitulé/précisions</div><div class="col-6"><input type="text" name="Intitule_ou_precisions" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Lieu</div><div class="col-6"><input type="text" name="Lieu" required="required" /></div>   </div>
				  <div class="row"><div class="col-6">Date</div><div class="col-6"><input type="text" name="Date" required="required" /></div>        </div>
				  <div class="row"><div class="col-6">Code</div><div class="col-6"><input type="text" name="code" /></div>        </div>
				  </div>
				
				  </br>
		  <input type="submit" value="Envoyez les informations" name="submit_b24">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
//B311
 //B312
 //B313
 //B314
 //B315
elseif (isset($_POST['code']) and ($_POST['code']=='B311' or $_POST['code']=='B312' or $_POST['code']=='B313' or $_POST['code']=='B314' or $_POST['code']=='B315')) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br><table border="1">
	<tr><th></th><th>Intitulé</th><th>Membre ou responsable</th><th>Etablissement</th><th>Période</th><th>Code</th></tr>
	
	<tr><td>Laboratoire/unité de recherche</td><td><input type="text" name="intitule_Laboratoire_ou_unite_de_recherche" required="required" /></td><td><input type="text" name="Membre_ou_responsable_Laboratoire_ou_unite_de_recherche" required="required" /></td><td><input type="text" name="Etablissement_Laboratoire_ou_unite_de_recherche" required="required" /></td><td><input type="text" name="Periode_Laboratoire_ou_unite_de_recherche" required="required" /></td><td><input type="text" name="code_Laboratoire_ou_unite_de_recherche" /></td></tr>
	
	<tr><td>Réseau</td><td><input type="text" name="intitule_Reseau" required="required" /></td><td><input type="text" name="Membre_ou_responsable_Reseau" required="required" /></td><td><input type="text" name="Etablissement_Reseau" required="required" /></td><td><input type="text" name="Periode_Reseau" required="required" /></td><td><input type="text" name="code_Reseau" /></td></tr>
	
	<tr><td>pôle de compétences</td><td><input type="text" name="intitule_pole_de_competences" required="required" /></td><td><input type="text" name="Membre_ou_responsable_pole_de_competences" required="required" /></td><td><input type="text" name="Etablissement_pole_de_competences" required="required" /></td><td><input type="text" name="Periode_pole_de_competences" required="required" /></td><td><input type="text" name="code_pole_de_competences" /></td></tr>
	
	<tr><td>UFR- Doctorat,DESA,DESS</td><td><input type="text" name="intitule_UFR_Doctorat_DESA_DESS" required="required" /></td><td><input type="text" name="Membre_ou_responsable_UFR_Doctorat_DESA_DESS" required="required" /></td><td><input type="text" name="Etablissement_UFR_Doctorat_DESA_DESS" required="required" /></td><td><input type="text" name="Periode_UFR_Doctorat_DESA_DESS" required="required" /></td><td><input type="text" name="code_UFR_Doctorat_DESA_DESS" /></td></tr>
</table>
				
				
		</br>
		<input type="submit" value="Envoyez les informations" name="submit_b31">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}

 //B32
 //B32
elseif (isset($_POST['code']) and ($_POST['code']=='B321' or $_POST['code']=='B322' )) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
			    <div class="container">
				<div class="row"><div class="col-6">Intitulé et cadre</div><div class="col-6"><input type="text" name="Intitule_et_cadre" required="required" /></div>   </div>
				<div class="row"><div class="col-6">Responsable ou participant</div><div class="col-6"><input type="text" name="Responsable_ou_participant" required="required" /></div>   </div>
				<div class="row"><div class="col-6">Etablissement</div><div class="col-6"><input type="text" name="Etablissement" required="required" /></div>   </div>
				<div class="row"><div class="col-6">Période</div><div class="col-6"><input type="text" name="Periode" required="required" /></div>        </div>
				<div class="row"><div class="col-6">Partenaires</div><div class="col-6"><input type="text" name="Partenaires" required="required" /></div>        </div>
				<div class="row"><div class="col-6">Type de financement</div><div class="col-6"><input type="text" name="Type_de_financement" required="required" /></div>        </div>
				<div class="row"><div class="col-6">Code</div><div class="col-6"><input type="text" name="code" /></div>        </div>
				</div>
				
				</br>
        <input type="submit" value="Envoyez les informations" name="submit_b32">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
//B33
 //B33
 //B33
elseif (isset($_POST['code']) and ( $_POST['code']=='B331' )) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
				  <div class="container">
				<div class="row"><div class="col-6">Intitulé</div><div class="col-6"><input type="text" name="intitule" required="required" /></div>   </div>
				<div class="row"><div class="col-6">Nature</div><div class="col-6"><input type="text" name="Nature" required="required" /></div>   </div>
				<div class="row"><div class="col-6">Etablissement/Organisme</div><div class="col-6"><input type="text" name="Etablissement_ou_Organisme" required="required" /></div>   </div>
				<div class="row"><div class="col-6">Période</div><div class="col-6"><input type="text" name="Periode" required="required" /></div>        </div>
				<div class="row"><div class="col-6">Partenaires</div><div class="col-6"><input type="text" name="Partenaires" required="required" /></div>        </div>
				<div class="row"><div class="col-6">Code</div><div class="col-6"><input type="text" name="code"  /></div>        </div>
				</div>
				
				</br>
        <input type="submit" value="Envoyez les informations" name="submit_b33">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
//B34
 //B34
 //B34
elseif (isset($_POST['code']) and ($_POST['code']=='B341')) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
				  <div class="container">
				<div class="row"><div class="col-6">Intitulé de la manifestation</div><div class="col-6"><input type="text" name="Intitule_de_la_manifestation" required="required" /></div>   </div>
				<div class="row"><div class="col-6">Les partenaires</div><div class="col-6"><input type="text" name="Partenaires" required="required" /></div>   </div>
				<div class="row"><div class="col-6">Bénéficiaires</div><div class="col-6"><input type="text" name="Beneficiaires" required="required" /></div>   </div>
				<div class="row"><div class="col-6">Date</div><div class="col-6"><input type="text" name="Date" required="required" /></div>        </div>
				<div class="row"><div class="col-6">Lieu</div><div class="col-6"><input type="text" name="Lieu" required="required" /></div>        </div>
				<div class="row"><div class="col-6">Code</div><div class="col-6"><input type="text" name="code" /></div>        </div>
				</div>
				
				</br>
        <input type="submit" value="Envoyez les informations" name="submit_b34">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
//B35
 //B35
 //B35
elseif (isset($_POST['code']) and ($_POST['code']=='B351'or $_POST['code']=='B352' or $_POST['code']=='B353')) {
 
    $z = $_POST['code'];
	$query = "SELECT * FROM élément where code ='$z' " ;
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<table border="1"><tr><td>CODE</td><td>POINT</td><td>PLAFOND</td></tr></table>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<table border="1"><tr><td>'.$row['code'].'</td><td>'.$row['point'].'</td><td>'.$row['plafond'].'</td></tr></table>';
		 
		 }
		    echo '</br>
				  <div class="container">
				<div class="row"><div class="col-6">Nature</div><div class="col-6"><input type="text" name="Nature" required="required" /></div>   </div>
				<div class="row"><div class="col-6">Les partenaires</div><div class="col-6"><input type="text" name="Partenaires" required="required" /></div>   </div>
				<div class="row"><div class="col-6">Bénéficiaire(s)</div><div class="col-6"><input type="text" name="Beneficiaires" required="required" /></div>   </div>
				<div class="row"><div class="col-6">Date</div><div class="col-6"><input type="text" name="Date" required="required" /></div>        </div>
				<div class="row"><div class="col-6">Retombées socio-économiques</div><div class="col-6"><input type="text" name="Retombees_socio_economiques" required="required" /></div>        </div>
				<div class="row"><div class="col-6">Code</div><div class="col-6"><input type="text" name="code" /></div>        </div>
				</div>
				
				</br>
        <input type="submit" value="Envoyez les informations" name="submit_b35">';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}