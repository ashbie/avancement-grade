<?php
include("config.php");

$conn = $db;
	
	$nomErr = $prenomErr = $emailErr = $usernameErr = $passwordErr = $confirmErr = $differentErr = "";	
// variable declaration
$lastName = "";
$firstName = "";
$userName = "";
$email = "";
$password = "";
$password_1 = "";
$password_2 = "";
$username_exists = "";
$email_exists = "";
$errors = array();
$login_errors = array();
$_SESSION['success'] = "";
$_SESSION['email'] = "";
$_SESSION['username'] = "";

// connecting to the server and the database
//$conn2server = mysqli_connect("mysql:host=127.0.0.1", "zlats_beezho", "A#ard123", "zlats_pfe");


// Candidate(/applicant/teacher/user) registration
if (isset($_POST['boutonCreer'])) { 
    // receive all input values from the form
    $lastName = mysqli_real_escape_string($conn, $_POST['nom']);
    $firstName = mysqli_real_escape_string($conn, $_POST['prenom']);
    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['passwd']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['passwdConf']);
    $email = mysqli_real_escape_string($conn, $_POST['mail']);

// form validation: ensure that the form is correctly filled
if (empty($lastName)) { array_push($errors,  "error");
	$nomErr = "Le nom est requis"; }
if (empty($firstName)) { array_push($errors, "error");
	$prenomErr = "Le prenom est requis"; }
if (empty($userName)) { array_push($errors, "error");
	$usernameErr = "Le nom utilisateur est requis"; }
if (empty($email)) { array_push($errors, "error");
	$emailErr = "L'adresse email est requis"; }
if (empty($password_1)) { array_push($errors,  "error");
	$passwordErr = "Le mot de passe est requis"; }
if (empty($password_2)) { array_push($errors, "error");
	$confirmErr = "Confirmer le mot de passe";
}	
if ($password_1 != $password_2) {
    array_push($errors, "error");
	$differentErr = "Les deux mots de passe doivent être égaux";
}
// Since email is Primary Key and nom_utilisateur is Unique
// I need to write a script that will ensure the user is told/alerted if
// he/she tries to create an account with an email or username that is already used!!
$query_u = "SELECT nom_utilisateur FROM `users`";
$query_e = "SELECT email FROM `users`";
$answer_u = mysqli_query($conn, $query_u);
$answer_e = mysqli_query($conn, $query_e);
$array1 = Array();
$array2 = Array();
while ($row = mysqli_fetch_array($answer_u, MYSQLI_ASSOC)) {
	$array1[] = $row['nom_utilisateur'];
}
while ($row = mysqli_fetch_array($answer_e, MYSQLI_ASSOC)) {
	$array2[] = $row['email'];
}

foreach ($array1 as $select)
{
	if($select == $userName){ array_push($errors, "error"); $username_exists = "Le nom d'utilisateur << ".$userName." >> est déjà utilisé";}
}
foreach ($array2 as $select)
{
	if($select == $email){ array_push($errors, "error"); $email_exists = "L'adresse mail << ".$email." >> est déjà utilisé";}
}


// (registering the user) inserting data into the database if there are no errors
if (count($errors) == 0) {
    $password = $password_1; # encrypt the password before saving in the database
   # first try without password encryption
	/*$query_unencrypted_password = "INSERT INTO users (nom, prenom, nom_utilisateur, email, mot_de_passe) 
          VALUES ('$lastName','$firstName','$userName','$email', '$password_1')"; */
	$query_encrypted_password = "INSERT INTO `users` (id, nom, prenom, nom_utilisateur, email, mot_de_passe) 
	VALUES (2,'$lastName','$firstName','$userName','$email', '$password')"; 
	
    #insertion
		mysqli_query($conn, $query_encrypted_password);

			/* when user has been created, go and sign in
            $_SESSION['name'] = $lastName.' '.$firstName;
			$_SESSION['username'] = $userName;
            $_SESSION['email'] = $email;
			$_SESSION['success'] = "Vous êtes maintenant connecté: " .$_SESSION['name']. " comme : ".$_SESSION['username'];*/
			header('location: login.php');
}else{
	
}
}// closing curly bracket for : if(isset($_POST['boutonCreer'])){

if(isset($_POST['creer_membre']))
{
  // receive all input values from the form
  $lastName = mysqli_real_escape_string($conn, $_POST['nom']);
  $firstName = mysqli_real_escape_string($conn, $_POST['prenom']);
  $userName = mysqli_real_escape_string($conn, $_POST['userName']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['passwd']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['passwdConf']);
  $email = mysqli_real_escape_string($conn, $_POST['mail']);

// form validation: ensure that the form is correctly filled
if (empty($lastName)) { array_push($errors,  "error");
$nomErr = "Le nom est requis"; }
if (empty($firstName)) { array_push($errors, "error");
$prenomErr = "Le prenom est requis"; }
if (empty($userName)) { array_push($errors, "error");
$usernameErr = "Le nom utilisateur est requis"; }
if (empty($email)) { array_push($errors, "error");
$emailErr = "L'adresse email est requis"; }
if (empty($password_1)) { array_push($errors,  "error");
$passwordErr = "Le mot de passe est requis"; }
if (empty($password_2)) { array_push($errors, "error");
$confirmErr = "Confirmer le mot de passe";
}	
if ($password_1 != $password_2) {
  array_push($errors, "error");
$differentErr = "Les deux mots de passe doivent être égaux";
}
// Since email is Primary Key and nom_utilisateur is Unique
// I need to write a script that will ensure the user is told/alerted if
// he/she tries to create an account with an email or username that is already used!!
$query_u = "SELECT nom_utilisateur FROM `membres_commission`";
$query_e = "SELECT email FROM `membres_commission`";
$answer_u = mysqli_query($conn, $query_u);
$answer_e = mysqli_query($conn, $query_e);
$array1 = Array();
$array2 = Array();
while ($row = mysqli_fetch_array($answer_u, MYSQLI_ASSOC)) {
$array1[] = $row['nom_utilisateur'];
}
while ($row = mysqli_fetch_array($answer_e, MYSQLI_ASSOC)) {
$array2[] = $row['email'];
}

foreach ($array1 as $select)
{
if($select == $userName){ array_push($errors, "error"); $username_exists = "Le nom d'utilisateur << ".$userName." >> est déjà utilisé";}
}
foreach ($array2 as $select)
{
if($select == $email){ array_push($errors, "error"); $email_exists = "L'adresse mail << ".$email." >> est déjà utilisé";}
}


// (registering the user) inserting data into the database if there are no errors
if (count($errors) == 0) {
  $password = $password_1; # encrypt the password before saving in the database
 # first try without password encryption
/*$query_unencrypted_password = "INSERT INTO users (nom, prenom, nom_utilisateur, email, mot_de_passe) 
        VALUES ('$lastName','$firstName','$userName','$email', '$password_1')"; */
$query_encrypted_password = "INSERT INTO `membres_commission` (id, nom, prenom, nom_utilisateur, email, mot_de_passe) 
VALUES (2,'$lastName','$firstName','$userName','$email', '$password')"; 

  #insertion
  mysqli_query($conn, $query_encrypted_password);

    /* when user has been created, go and sign in
          $_SESSION['name'] = $lastName.' '.$firstName;
    $_SESSION['username'] = $userName;
          $_SESSION['email'] = $email;
    $_SESSION['success'] = "Vous êtes maintenant connecté: " .$_SESSION['name']. " comme : ".$_SESSION['username'];*/
    header('location: login.php');
}else{

}
}
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>AVANCEMENT GRADE</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link  rel="stylesheet" href="css/mdb.min.css" />
    <!--  <link rel="stylesheet" href="css/style.css" /> Custom styles -->
    
    <style>
    span.error{
      color:red;
      font-size: 60%;
	  }
      #intro {
      background-image: url(img/whiteBg.jpg);
      height: 100vh;
    } 

    /* Height for devices larger than 576px */
    @media (min-width: 992px) {
      #intro {
        margin-top: -58.59px;
      }
    }

    .navbar .nav-link {
      color: #fff !important;
    }
    .active {
      background-color: #4CAF50;
      color: white;
      }
      .right-side{
      background-color: #3c38cb;
      color: white;
      padding: 10px 10px;
      }
    </style>
</head>
<body>
      <!--Main Navigation-->
  

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark  navbar-expand-lg d-none d-lg-block" style="z-index: 2000;">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link active"  href="index.php">
          <strong>EST Casablanca</strong>
        </a>
        
             
          <ul class="navbar-nav d-flex flex-row">
          <a class="right-side" href="login.php" style="border-right: 2px solid white">S'identifier</a>
            <!-- Icons -->
                        
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong" >
      <div class="mask d-flex align-items-center h-100" >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-30 col-md-8">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
              <form class="bg-dark rounded shadow-5-strong p-5" action="#" method="post">
                <h1 class="text-white bg-dark "><center>CRÉER UN COMPTE<center></h1> 
                <div class="row">
                <div class="col-4"> <!-- Last Name Input -->   
                <span class="error">* <?php echo $nomErr;?></span>
                <div class="form-outline mb-4">
                   <br> <input type="text" id="nom" name="nom" class="form-control" required="required" />
                  <label class="form-label" for="nom"><p class="text-white-50 bg-dark">Entrer votre nom</p></label>
                </div>
                
                </div>
                <div class="col-4"><!-- first name input -->
                <span class="error">* <?php echo $prenomErr;?></span>
                <div class="form-outline mb-4">
                <br> <input type="text" id="prenom" name="prenom" class="form-control" required="required"/>
                  <label class="form-label" for="prenom"><p class="text-white-50 bg-dark">Entrer votre prénom</p></label>
                </div>
                </div>
                <div class="col-4"><!-- User name Input -->
                <span class="error">* <?php echo $usernameErr;?><?php echo $username_exists;?></span>   
                <div class="form-outline mb-4">
                  <br> <input type="text" id="userName" name="userName" class="form-control" required="required"/>
                  <label class="form-label" for="userName"><p class="text-white-50 bg-dark">Entrer un nom d'utilisateur</p></label>
                </div>
                </div>
                </div>  
                <div class="row">
                <div class="col-12"><!-- email input -->
                <span class="error">* <?php echo $emailErr;?><?php echo $email_exists;?></span>
                <div class="form-outline mb-4">
                 <br> <input type="email" id="mail" name="mail" class="form-control" required="required"/>
                  <label class="form-label" for="mail"><p class="text-white-50 bg-dark">Entrer votre adresse mail</p></label>
                </div>
                </div>
                </div>  
                <div class="row">
                <div class="col-6"><!-- Password Input -->
                <span class="error">* <?php echo $passwordErr;?></span>   
                <div class="form-outline mb-4">
                   <br> <input type="password" id="passwd" name="passwd" class="form-control" required="required"/>
                  <label class="form-label" for="passwd"><p class="text-white-50 bg-dark">Entrer un mot de passe</p></label>
                </div>
                </div>
                <div class="col-6"><!-- Password Confirmation input -->
                <span class="error">* <?php echo $confirmErr;?><?php echo $differentErr;?></span>
                <div class="form-outline mb-4">
                 <br> <input type="password" id="passwdConf" name="passwdConf" class="form-control" required="required"/>
                  <label class="form-label" for="passwdConf"><p class="text-white-50 bg-dark">Confirmer votre mot de passe</p></label>
                </div></div>
                </div>
                <!-- Submit button -->
                <p class="">
                      <center class="text-muted">CRÉER UN COMPTE COMME UN</center>
                </p>
                  <div class="row" id="signin-buttons">

                <div class="col-6">
                  <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block" name="boutonCreer">ENSEIGNANT <i class="fas fa-user"></i> </button>
                  </div>
                  </div>
                  
                    <div class="col-6">
                      <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block" name="creer_membre">MEMBRE DE COMMISSION <i class="fas fa-user-cog"></i> </button>
                  </div>
                    </div>
                  </div>  
                <div class="row">
                <div class="col-6"></div>
                <div class="col-6"></div>
                </div>  
                <div class="row">
                <div class="col-6"></div>
                <div class="col-6"></div>
                </div>  
                <div class="row">
                <div class="col-6"></div>
                <div class="col-6"></div>
                </div>                  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  
  <!--Main Navigation-->

  <!--Footer-->
  <footer class="bg-light text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-dark" href="https:///www.est-uh2c.ac.ma">ESTC</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>