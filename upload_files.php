<?php
include('session.php');

// For the upload file button
if (isset($_POST['submit_file']))
{
	$file_name =  $_FILES['pdf_file']['name'];
	$file_type = $_FILES['pdf_file']['type'];
	$file_size = $_FILES['pdf_file']['size'];
	$file_tem_loc = $_FILES['pdf_file']['tmp_name'];
	$file_store = 'upload_files/';
	// get the file extension
    $extension = pathinfo($file_name, PATHINFO_EXTENSION);

	//isert into database
    $email=$_SESSION['email'];
	
    $sql =" INSERT INTO `file_upload`(`email`, `pdf_file`) VALUES ('$email','$file_name')";
  	// execute query
  	$result = mysqli_query($db, $sql);

    if ($result)
    {  
        echo "File uploaded successfully";
        header("location:voir_dossier.php");
    } 
    else 
    {
        echo "Failed to upload file ";
    }  
    move_uploaded_file($file_tem_loc,$file_store.$file_name);
}
// The original submit/envoyer les informations button of page5index.php -- It's no longer in use.
if (isset($_POST['submit']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément')";

    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
// The different variations of the original submit code
// submit_a11
if (isset($_POST['submit_a11']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $titre = mysqli_real_escape_string($db,$_POST['titre']);
    $editeur = mysqli_real_escape_string($db,$_POST['editeur']);
    $annee_de_production = mysqli_real_escape_string($db,$_POST['annee_de_production']);
    $intitule = mysqli_real_escape_string($db,$_POST['intitule']);
    $niveau = mysqli_real_escape_string($db,$_POST['niveau']);
    $departement = mysqli_real_escape_string($db,$_POST['departement']);
    $annee = mysqli_real_escape_string($db,$_POST['annee']);
    $code = mysqli_real_escape_string($db,$_POST['code']);

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `titre`,
    `editeur`,
    `annee_de_production`,
    `intitule`,
    `niveau`,
    `departement`,
    `annee`,
    `code`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_a11',
    '$titre',
    '$editeur',
    '$annee_de_production',
    '$intitule',
    '$niveau',
    '$departement',
    '$annee',
    '$code')";

    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_a12
if (isset($_POST['submit_a12']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $intitule = mysqli_real_escape_string($db,$_POST['intitule']);
    $niveau = mysqli_real_escape_string($db,$_POST['niveau']);
    $departement = mysqli_real_escape_string($db,$_POST['departement']);
    $code = mysqli_real_escape_string($db,$_POST['code']);

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `intitule`,
    `niveau`,
    `departement`,
    `code`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_a12',
    '$intitule',
    '$niveau',
    '$departement',
    '$code')";
    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_a21
if (isset($_POST['submit_a21']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $annee = mysqli_real_escape_string($db,$_POST['annee']);
    $departement = mysqli_real_escape_string($db,$_POST['departement']);
    $niveau_1_ou_2 = mysqli_real_escape_string($db,$_POST['titre']);
    $matiere = mysqli_real_escape_string($db,$_POST['editeur']);
    $Volume_annuel_equivalent_TP = mysqli_real_escape_string($db,$_POST['titre']);
    $cour = mysqli_real_escape_string($db,$_POST['editeur']);
    $TD = mysqli_real_escape_string($db,$_POST['annee_de_production']);
    $TP = mysqli_real_escape_string($db,$_POST['intitule']);
    $Total_equivalent_TP = mysqli_real_escape_string($db,$_POST['niveau']);
    $code = mysqli_real_escape_string($db,$_POST['code']);

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `annee`,
    `departement`,
    `niveau_1_ou_2`,
    `matiere`,
    `Volume_annuel_equivalent_TP`,
    `cour`,
    `TD`,
    `TP`,
    `Total_equivalent_TP`,
    `code`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_a21',
    '$annee',
    '$departement',
    '$niveau_1_ou_2',
    '$matiere',
    '$Volume_annuel_equivalent_TP',
    '$cour',
    '$TD',
    '$TP',
    '$Total_equivalent_TP',
    '$code')";

    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_a22  -- I'm here. Not yet done this one
if (isset($_POST['submit_a22']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $intitule = mysqli_real_escape_string($db,$_POST['intitule']);
    $niveau = mysqli_real_escape_string($db,$_POST['niveau']);
    $departement = mysqli_real_escape_string($db,$_POST['departement']);
    $annee = mysqli_real_escape_string($db,$_POST['annee']);
    

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `intitule`,
    `niveau`,
    `departement`,
    `annee`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_a22',
    '$intitule',
    '$niveau',
    '$departement',
    '$annee')";
    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_a23
if (isset($_POST['submit_a23']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $intitule = mysqli_real_escape_string($db,$_POST['intitule']);
    $Type_de_la_formation = mysqli_real_escape_string($db,$_POST['Type_de_la_formation']);
    $Beneficiaires_de_la_formation = mysqli_real_escape_string($db,$_POST['Beneficiaires_de_la_formation']);
    $annee = mysqli_real_escape_string($db,$_POST['annee']);
    $code = mysqli_real_escape_string($db,$_POST['code']);

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `intitule`,
    `Type_de_la_formation`,
    `Beneficiaires_de_la_formation`,
    `annee`,
    `code`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_a23',
    '$intitule',
    '$Type_de_la_formation',
    '$Beneficiaires_de_la_formation',
    '$annee',
    '$code')";

    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_a24
if (isset($_POST['submit_a24']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $FORMATION = mysqli_real_escape_string($db,$_POST['FORMATION']);
    $Etablissement = mysqli_real_escape_string($db,$_POST['Etablissement']);
    $matiere = mysqli_real_escape_string($db,$_POST['matiere']);
    $annee = mysqli_real_escape_string($db,$_POST['annee']);
    $Volume_horaire = mysqli_real_escape_string($db,$_POST['Volume_horaire']);
    $code = mysqli_real_escape_string($db,$_POST['code']);

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `FORMATION`,
    `Etablissement`,
    `matiere`,
    `annee`,
    `Volume_horaire`,
    `code`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_a24',
    '$FORMATION',
    '$Etablissement',
    '$matiere',
    '$annee',
    '$Volume_horaire',
    '$code')";

    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_a25
if (isset($_POST['submit_a25']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $Nature = mysqli_real_escape_string($db,$_POST['Nature']);
    $Periode = mysqli_real_escape_string($db,$_POST['Periode']);
    $Lieu = mysqli_real_escape_string($db,$_POST['Lieu']);
    $code = mysqli_real_escape_string($db,$_POST['code']);

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `Nature`,
    `Periode`,
    `Lieu`,
    `code`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_a25',
    '$Nature',
    '$Periode',
    '$Lieu',
    '$code')";

    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_a31_a32_a33_a34
if (isset($_POST['submit_a31_a32_a33_a34']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $Nature = mysqli_real_escape_string($db,$_POST['Nature']);
    $Periode = mysqli_real_escape_string($db,$_POST['Periode']);
    $Etablissement = mysqli_real_escape_string($db,$_POST['Etablissement']);
    $code = mysqli_real_escape_string($db,$_POST['code']);

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `Nature`,
    `Periode`,
    `Etablissement`,
    `code`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_a31_a32_a33_a34',
    '$Nature',
    '$Periode',
    '$Etablissement',
    '$code')";

    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_a35
if (isset($_POST['submit_a35']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $intitule = mysqli_real_escape_string($db,$_POST['intitule']);
    $niveau = mysqli_real_escape_string($db,$_POST['niveau']);
    $Departement_et_etablissement = mysqli_real_escape_string($db,$_POST['Departement_et_etablissement']);
    $annee = mysqli_real_escape_string($db,$_POST['annee']);
    $code = mysqli_real_escape_string($db,$_POST['code']);

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `intitule`,
    `niveau`,
    `Departement_et_etablissement`,
    `annee`,
    `code`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_a35,
    '$intitule',
    '$niveau',
    '$Departement_et_etablissement',
    '$annee',
    '$code')";

    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_a36
if (isset($_POST['submit_a36']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $Nature = mysqli_real_escape_string($db,$_POST['Nature']);
    $Periode = mysqli_real_escape_string($db,$_POST['Periode']);
    $Structure_universitaire = mysqli_real_escape_string($db,$_POST['Structure_universitaire']);
    $code = mysqli_real_escape_string($db,$_POST['code']);

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `Nature`,
    `Periode`,
    `Structure_universitaire`,
    `code`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_a36',
    '$Nature',
    '$Periode',
    '$Structure_universitaire',
    '$code')";

    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_b11_b12_b13
if (isset($_POST['submit_b11_b12_b13']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $titre = mysqli_real_escape_string($db,$_POST['titre']);
    $annee = mysqli_real_escape_string($db,$_POST['annee']);
    $Reference = mysqli_real_escape_string($db,$_POST['Reference']);
    $code = mysqli_real_escape_string($db,$_POST['code']);

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `titre`,
    `annee`,
    `Reference`,
    `code`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_b11_b12_b13',
    '$titre',
    '$annee',
    '$Reference',
    '$code')";

    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_b14_b15
if (isset($_POST['submit_b14_b15']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $titre = mysqli_real_escape_string($db,$_POST['titre']);
    $Intitule_de_la_manifestation = mysqli_real_escape_string($db,$_POST['Intitule_de_la_manifestation']);
    $Lieu_de_la_manifestation = mysqli_real_escape_string($db,$_POST['Lieu_de_la_manifestation']);
    $annee = mysqli_real_escape_string($db,$_POST['annee']);
    $code = mysqli_real_escape_string($db,$_POST['code']);

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `titre`,
    `Intitule_de_la_manifestation`,
    `Lieu_de_la_manifestation`,
    `annee`,
    `code`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_b14_b15',
    '$titre',
    '$Intitule_de_la_manifestation',
    '$Lieu_de_la_manifestation',
    '$annee',
    '$code')";

    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_b21_b22
if (isset($_POST['submit_b21_b22']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $Nature_de_encadrement = mysqli_real_escape_string($db,$_POST['Nature_de_encadrement']);
    $Nom_du_candidat = mysqli_real_escape_string($db,$_POST['Nom_du_candidat']);
    $Theme = mysqli_real_escape_string($db,$_POST['Theme']);
    $Annee_et_lieu_de_soutenance = mysqli_real_escape_string($db,$_POST['Annee_et_lieu_de_soutenance']);
    $code = mysqli_real_escape_string($db,$_POST['code']);

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `Nature_de_encadrement`,
    `Nom_du_candidat`,
    `Theme`,
    `Annee_et_lieu_de_soutenance`,
    `code`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_b21_b22',
    '$Nature_de_encadrement',
    '$Nom_du_candidat',
    '$Theme',
    '$Annee_et_lieu_de_soutenance',
    '$code')";
    
    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_b23
if (isset($_POST['submit_b23']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $Nom_du_candidat = mysqli_real_escape_string($db,$_POST['Nom_du_candidat']);
    $Diplome = mysqli_real_escape_string($db,$_POST['Diplome']);
    $Theme = mysqli_real_escape_string($db,$_POST['Theme']);
    $lieu_de_soutenance = mysqli_real_escape_string($db,$_POST['lieu_de_soutenance']);
    $Date_de_soutenance = mysqli_real_escape_string($db,$_POST['Date_de_soutenance']);
    $code = mysqli_real_escape_string($db,$_POST['code']);

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `Nom_du_candidat`,
    `Diplome`,
    `Theme`,
    `lieu_de_soutenance`,
    `Date_de_soutenance`,
    `code`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_b23',
    '$Nom_du_candidat',
    '$Diplome',
    '$Theme',
    '$lieu_de_soutenance',
    '$Date_de_soutenance',
    '$code')";

    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_b24
if (isset($_POST['submit_b24']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $departement = mysqli_real_escape_string($db,$_POST['departement']);
    $Intitule_ou_precisions = mysqli_real_escape_string($db,$_POST['Intitule_ou_precisions']);
    $Lieu = mysqli_real_escape_string($db,$_POST['Lieu']);
    $Date = mysqli_real_escape_string($db,$_POST['Date']);
    $code = mysqli_real_escape_string($db,$_POST['code']);

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `departement`,
    `Intitule_ou_precisions`,
    `Lieu`,
    `Date`,
    `code`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_b24',
    '$departement',
    '$Intitule_ou_precisions',
    '$Lieu',
    '$Date',
    '$code')";

    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_b31
if (isset($_POST['submit_b31']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $intitule_Laboratoire_ou_unite_de_recherche = mysqli_real_escape_string($db,$_POST['intitule_Laboratoire_ou_unite_de_recherche']);
    $intitule_Reseau = mysqli_real_escape_string($db,$_POST['intitule_Reseau']);
    $intitule_pole_de_competences = mysqli_real_escape_string($db,$_POST['intitule_pole_de_competences']);
    $intitule_UFR_Doctorat_DESA_DESS = mysqli_real_escape_string($db,$_POST['intitule_UFR_Doctorat_DESA_DESS']);
    $Membre_ou_responsable_Laboratoire_ou_unite_de_recherche = mysqli_real_escape_string($db,$_POST['Membre_ou_responsable_Laboratoire_ou_unite_de_recherche']);
    $Membre_ou_responsable_Reseau = mysqli_real_escape_string($db,$_POST['Membre_ou_responsable_Reseau']);
    $Membre_ou_responsable_pole_de_competences = mysqli_real_escape_string($db,$_POST['Membre_ou_responsable_pole_de_competences']);
    $Membre_ou_responsable_UFR_Doctorat_DESA_DESS = mysqli_real_escape_string($db,$_POST['Membre_ou_responsable_UFR_Doctorat_DESA_DESS']);
    $Etablissement_Laboratoire_ou_unite_de_recherche = mysqli_real_escape_string($db,$_POST['Etablissement_Laboratoire_ou_unite_de_recherche']);
    $Etablissement_Reseau = mysqli_real_escape_string($db,$_POST['Etablissement_Reseau']);
    $Etablissement_pole_de_competences = mysqli_real_escape_string($db,$_POST['Etablissement_pole_de_competences']);
    $Etablissement_UFR_Doctorat_DESA_DESS = mysqli_real_escape_string($db,$_POST['Etablissement_UFR_Doctorat_DESA_DESS']);
    $Periode_Laboratoire_ou_unite_de_recherche = mysqli_real_escape_string($db,$_POST['Periode_Laboratoire_ou_unite_de_recherche']);
    $Periode_Reseau = mysqli_real_escape_string($db,$_POST['Periode_Reseau']);
    $Periode_pole_de_competences = mysqli_real_escape_string($db,$_POST['Periode_pole_de_competences']);
    $Periode_UFR_Doctorat_DESA_DESS = mysqli_real_escape_string($db,$_POST['Periode_UFR_Doctorat_DESA_DESS']);
    $code_Laboratoire_ou_unite_de_recherche = mysqli_real_escape_string($db,$_POST['code_Laboratoire_ou_unite_de_recherche']);
    $code_Reseau = mysqli_real_escape_string($db,$_POST['code_Reseau']);
    $code_pole_de_competences = mysqli_real_escape_string($db,$_POST['code_pole_de_competences']);
    $code_UFR_Doctorat_DESA_DESS = mysqli_real_escape_string($db,$_POST['code_UFR_Doctorat_DESA_DESS']);
    
    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `intitule_Laboratoire_ou_unite_de_recherche`,
    `intitule_Reseau`,
    `intitule_pole_de_competences`,
    `intitule_UFR_Doctorat_DESA_DESS`,
    `Membre_ou_responsable_Laboratoire_ou_unite_de_recherche`,
    `Membre_ou_responsable_Reseau`,
    `Membre_ou_responsable_pole_de_competences`,
    `Membre_ou_responsable_UFR_Doctorat_DESA_DESS`,
    `Etablissement_Laboratoire_ou_unite_de_recherche`,
    `Etablissement_Reseau`,
    `Etablissement_pole_de_competences`,
    `Etablissement_UFR_Doctorat_DESA_DESS`,
    `Periode_Laboratoire_ou_unite_de_recherche`,
    `Periode_Reseau`,
    `Periode_pole_de_competences`,
    `Periode_UFR_Doctorat_DESA_DESS`,
    `code_Laboratoire_ou_unite_de_recherche`,
    `code_Reseau`,
    `code_pole_de_competences`,
    `code_UFR_Doctorat_DESA_DESS`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_b31',
    '$intitule_Laboratoire_ou_unite_de_recherche',
    '$intitule_Reseau',
    '$intitule_pole_de_competences',
    '$intitule_UFR_Doctorat_DESA_DESS',
    '$Membre_ou_responsable_Laboratoire_ou_unite_de_recherche',
    '$Membre_ou_responsable_Reseau',
    '$Membre_ou_responsable_pole_de_competences',
    '$Membre_ou_responsable_UFR_Doctorat_DESA_DESS',
    '$Etablissement_Laboratoire_ou_unite_de_recherche',
    '$Etablissement_Reseau',
    '$Etablissement_pole_de_competences',
    '$Etablissement_UFR_Doctorat_DESA_DESS',
    '$Periode_Laboratoire_ou_unite_de_recherche',
    '$Periode_Reseau',
    '$Periode_pole_de_competences',
    '$Periode_UFR_Doctorat_DESA_DESS',
    '$code_Laboratoire_ou_unite_de_recherche',
    '$code_Reseau',
    '$code_pole_de_competences',
    '$code_UFR_Doctorat_DESA_DESS')";

    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_b32
if (isset($_POST['submit_b32']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $Intitule_et_cadre = mysqli_real_escape_string($db,$_POST['Intitule_et_cadre']);
    $Responsable_ou_participant = mysqli_real_escape_string($db,$_POST['Responsable_ou_participant']);
    $Etablissement = mysqli_real_escape_string($db,$_POST['Etablissement']);
    $Periode = mysqli_real_escape_string($db,$_POST['Periode']);
    $Partenaires = mysqli_real_escape_string($db,$_POST['Partenaires']);
    $Type_de_financement = mysqli_real_escape_string($db,$_POST['Type_de_financement']);
    $code = mysqli_real_escape_string($db,$_POST['code']);

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `Intitule_et_cadre`,
    `Responsable_ou_participant`,
    `Etablissement`,
    `Periode`,
    `Partenaires`,
    `Type_de_financement`,
    `code`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_b32',
    '$Intitule_et_cadre',
    '$Responsable_ou_participant',
    '$Etablissement',
    '$Periode',
    '$Partenaires',
    '$Type_de_financement',
    '$code')";

    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_b33
if (isset($_POST['submit_b33']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $intitule = mysqli_real_escape_string($db,$_POST['intitule']);
    $Nature = mysqli_real_escape_string($db,$_POST['Nature']);
    $Etablissement_ou_Organisme = mysqli_real_escape_string($db,$_POST['Etablissement_ou_Organisme']);
    $Periode = mysqli_real_escape_string($db,$_POST['Periode']);
    $Partenaires = mysqli_real_escape_string($db,$_POST['Partenaires']);
    $code = mysqli_real_escape_string($db,$_POST['code']);

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `intitule`,
    `Nature`,
    `Etablissement_ou_Organisme`,
    `Periode`,
    `Partenaires`,
    `code`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_b33',
    '$intitule',
    '$Nature',
    '$Etablissement_ou_Organisme',
    '$Periode',
    '$Partenaires',
    '$code')";

    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_b34
if (isset($_POST['submit_b34']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $Intitule_de_la_manifestation = mysqli_real_escape_string($db,$_POST['Intitule_de_la_manifestation']);
    $Partenaires = mysqli_real_escape_string($db,$_POST['Partenaires']);
    $Beneficiaires = mysqli_real_escape_string($db,$_POST['Beneficiaires']);
    $Date = mysqli_real_escape_string($db,$_POST['Date']);
    $Lieu = mysqli_real_escape_string($db,$_POST['Lieu']);
    $code = mysqli_real_escape_string($db,$_POST['code']);

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `Intitule_de_la_manifestation`,
    `Partenaires`,
    `Beneficiaires`,
    `Date`,
    `Lieu`,
    `code`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_b34',
    '$Intitule_de_la_manifestation',
    '$Partenaires',
    '$Beneficiaires',
    '$Date',
    '$Lieu',
    '$code')";

    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}
//submit_b35
if (isset($_POST['submit_b35']))
{
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $rubrique=$row['sous_rubrique'];
    }

    $x=$_POST['sous_rubrique'];
    $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 )
    {
        $row = $result->fetch_assoc();
        $sous_rubrique=$row['sous_rubrique'];    
    }


    $y=$_POST['catégori'];
    $query = "SELECT * FROM catégori where id_catégori='$y' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $catégori=$row['catégori'];
    }


    $z=$_POST['element'];
    $query = "SELECT * FROM élément where code='$z' ";
    $result = $db->query($query);
    if ($result->num_rows > 0 ) 
    {
        $row = $result->fetch_assoc();
        $élément=$row['élément'];
    }


    $email1=$_SESSION['email'];
    // Get the text input fields
    $Nature = mysqli_real_escape_string($db,$_POST['Nature']);
    $Partenaires = mysqli_real_escape_string($db,$_POST['Partenaires']);
    $Beneficiaires = mysqli_real_escape_string($db,$_POST['Beneficiaires']);
    $Date = mysqli_real_escape_string($db,$_POST['Date']);
    $Retombees_socio_economiques = mysqli_real_escape_string($db,$_POST['Retombees_socio_economiques']);
    $code = mysqli_real_escape_string($db,$_POST['code']);

    $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`, `submit`,
    `Nature`,
    `Partenaires`,
    `Beneficiaires`,
    `Date`,
    `Retombees_socio_economiques`,
    `code`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément', 'submit_b35',
    '$Nature',
    '$Partenaires',
    '$Beneficiaires',
    '$Date',
    '$Retombees_socio_economiques',
    '$code')";

    $result1 = mysqli_query($db, $sql1);

    if ($result1) 
    {
        echo "vos information sont enregistés avec succés";
        header("location:document.php");
    } 
    else 
    {
        echo "Failed to upload information ";
    }
}