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
		    echo '</br><table border="1"><tr><th>TITRE</th><th>EDITEUR</th><th>ANNEE DE PRODUCTION</th><th>INTITULE</th><th>NIVEAU</th>
		                                     <th>DEPARTEMENT</th><th>ANNEE</th><th>code</th></tr>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
		          </table>';
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
		    echo '</br><table border="1"><tr><th>INTITULE</th><th>NIVEAU</th><th>DEPARTEMENT</th><th>NIVEAU</th><th>code</th></tr>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
		          </table>';
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
		    echo '</br><table border="1"><tr><th>ANNEE</th><th>DEPARTEMENT</th><th>NIVEAU 1 ou 2 </th><th>matière </th><th>Volume annuel équivalent TP</th><th>cour</th><th>TD</th><th>TP</th><th>Total équivalent TP </th><th>code </th></tr>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
		          </table>';
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
		    echo '</br><table border="1"><tr><th>INTITULE</th><th>NIVEAU</th><th>DEPARTEMENT</th><th>ANNEE</th></tr>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></tr>
		          </table>';
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
		    echo '</br><table border="1"><tr><th>INTITULE</th><th>Type de la formation</th><th>Bénéficiaires de la
                  formation</th><th>ANNEE</th><th>Code</th></tr>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
		          </table>';
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
		    echo '</br><table border="1"><tr><th>FORMATION</th><th>Etablissement</th><th>Matière/Module</th><th>ANNEE</th><th>Volume horaire</th><th>Code</th></tr>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
		          </table>';
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
		    echo '</br><table border="1"><tr><th>Nature</th><th>Période</th><th>Lieu</th><th>Code</th>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
		          </table>';
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
		    echo '</br><table border="1"><tr><th>Nature</th><th>Période</th><th>Etablissement</th><th>Code</th>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
		          </table>';
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
		    echo '</br><table border="1"><tr><th>INTITULE</th><th>NIVEAU</th><th>Département et
établissement</th><th>Année</th><th>Code</th></tr>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
		          </table>';
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
		    echo '</br><table border="1"><tr><th>Nature</th><th>Période</th><th>Structure universitaire</th><th>Code</th></tr>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
		          </table>';
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
		    echo '</br><table border="1"><tr><th>Titre</th><th>Année</th><th>Référence</th><th>Code</th></tr>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
		          </table>';
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
		    echo '</br><table border="1"><tr><th>Titre</th><th>Intitulé de la manifestation</th><th>Lieu de la
manifestation</th><th>Année</th><th>Code</th></tr>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
		          </table>';
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
		    echo '</br><table border="1"><tr><th>Nature de l’encadrement</th><th>Nom du candidat</th><th>Thème</th><th>Année et lieu de soutenance</th><th>Code</th></tr>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
		          </table>';
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
		    echo '</br><table border="1"><tr><th>Nom du candidat</th><th>Diplôme</th><th>Thème</th><th> lieu de soutenance</th><th> Date de soutenance</th><th>Code</th></tr>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
		          </table>';
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
		    echo '</br><table border="1"><tr><th>Département</th><th>Intitulé / précisions</th><th>lieu</th><th>date</th><th>Code</th></tr>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
		          </table>';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
//B31
 //B31
 //B31
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
	
	<tr><td>Laboratoire/unité de recherche</td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
	
	<tr><td>Réseau</td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
	
	<tr><td>pôle de compétences</td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
	
	<tr><td>UFR- Doctorat,DESA,DESS</td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
</table>';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}
//B32
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
		    echo '</br><table border="1"><tr><th>Intitulé et cadre</th><th>Responsable ou participant</th><th>Etablissement</th><th>Période</th><th>Partenaires</th><th>Type de financement</th><th>Code</th></tr>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
		          </table>';
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
		    echo '</br><table border="1"><tr><th>Intitulé</th><th>Nature</th><th>Etablissement/Organisme</th><th>Période</th><th>Partenaires</th><th>Code</th></tr>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
		          </table>';
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
		    echo '</br><table border="1"><tr><th>Intitulé de la manifestation</th><th>Les partenaires</th><th>Bénéficiaires</th><th>date</th><th>Lieu</th><th>Code</th></tr>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
		          </table>';
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
		    echo '</br><table border="1"><tr><th>Nature</th><th>Les partenaires</th><th>Bénéficiaire(s)</th><th>date</th><th>Retombées socio-économiques</th><th>Code</th></tr>
		                                 <tr><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>
		          </table>';
	}else{
      echo "Error in ".$query."<br>".$db->error;
    }
}