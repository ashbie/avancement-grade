<?php
 include('session.php');
 session_start();

if (isset($_POST['submit_file'])){

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

            if ($result) {
                echo "File uploaded successfully";
                header("location:voir_dossier.php");

        } else {
            echo "Failed to upload file ";
    
        }

     move_uploaded_file($file_tem_loc,$file_store.$file_name);

   }

   if (isset($_POST['submit'])){
    

    
    $query = "SELECT * FROM sous_rubrique where id_rubrique=".$_POST['rubrique'];
    $result = $db->query($query);
     if ($result->num_rows > 0 ) {
      $row = $result->fetch_assoc();
      $rubrique=$row['sous_rubrique'];
     }



    $x=$_POST['sous_rubrique'];
     $query = "SELECT * FROM sous_rubrique where id_sous_rubrique='$x' ";
    $result = $db->query($query);
     if ($result->num_rows > 0 ) {
      $row = $result->fetch_assoc();
      $sous_rubrique=$row['sous_rubrique'];
     
     }


      $y=$_POST['catégori'];
     $query = "SELECT * FROM catégori where id_catégori='$y' ";
     $result = $db->query($query);
     if ($result->num_rows > 0 ) {
      $row = $result->fetch_assoc();
      $catégori=$row['catégori'];
     
     }


      $z=$_POST['element'];
     $query = "SELECT * FROM élément where code='$z' ";
     $result = $db->query($query);
     if ($result->num_rows > 0 ) {
      $row = $result->fetch_assoc();
      $élément=$row['élément'];
     
     }


    $email1=$_SESSION['email'];

     $sql1 =" INSERT INTO `dossier`(`email`, `rubrique`, `sous_rubrique`, `catégori`, `element`) VALUES ('$email1','$rubrique','$sous_rubrique','$catégori','$élément')";

     $result1 = mysqli_query($db, $sql1);

            if ($result1) {
                echo "vos information sont enregistés avec succés";
                header("location:document.php");
                

        } else {
            echo "Failed to upload information ";
    
        }
   }