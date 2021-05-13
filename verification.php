<?php 
    session_start();
	include("config.php");
	
	$conn = $db;
	
// variable declaration
$lastName = "";
$firstName = "";
$userName = "";
$email = "";
$password = "";
$password_1 = "";
$password_2 = "";
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
if (empty($lastName)) { array_push($errors, "Le Nom est requis"); }
if (empty($firstName)) { array_push($errors, "Le Prénom est requis"); }
if (empty($userName)) { array_push($errors, "Le Nom d'utilisateur est requis"); }
if (empty($password_1)) { array_push($errors, "Le mot de passe est requis"); }
if (empty($email)) { array_push($errors, "L'adresse mail est requis"); }

if ($password_1 != $password_2) {
    array_push($errors, "Les deux mots de passe ne correspondent pas");
}


// (registering the user) inserting data into the database if there are no errors
if (count($errors) == 0) {
    $password = $password_1; # encrypt the password before saving in the database
   # first try without password encryption
	/*$query_unencrypted_password = "INSERT INTO users (nom, prenom, nom_utilisateur, email, mot_de_passe) 
          VALUES ('$lastName','$firstName','$userName','$email', '$password_1')"; */
	$query_encrypted_password = "INSERT INTO users (id, nom, prenom, nom_utilisateur, email, mot_de_passe) 
	VALUES (2,'$lastName','$firstName','$userName','$email', '$password')"; 

    #insertion
		mysqli_query($conn, $query_encrypted_password);

			/* when user has been created, go and sign in
            $_SESSION['name'] = $lastName.' '.$firstName;
			$_SESSION['username'] = $userName;
            $_SESSION['email'] = $email;
			$_SESSION['success'] = "Vous êtes maintenant connecté: " .$_SESSION['name']. " comme : ".$_SESSION['username'];*/
			header('location: login.php');
}
}

    
	// LOGIN USER
	if (isset($_POST['login_button'])) {
		$email = mysqli_real_escape_string($conn, $_POST['login_email']);
		$password = mysqli_real_escape_string($conn, $_POST['login_password']);

		if (empty($email)) {
			array_push($login_errors, "L'email est requis");
		}
		if (empty($password)) {
			array_push($login_errors, "Le mot de passe est requis");
		}

		if (count($errors) == 0) {
			$password = $password;
			$query = "SELECT * FROM users WHERE email='$email' AND mot_de_passe='$password'";
            $username_query = "SELECT nom_utilisateur FROM users WHERE email='$email' AND mot_de_passe='$password'";
			$results = mysqli_query($conn, $query);
           # $userName = mysqli_query($conn2server, $username_query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				#$_SESSION['username'] = $userName;
				#$_SESSION['telephone'] = $telephone;
				#$_SESSION['success'] = "Vous êtes maintenant connecté: " .$userName;
				header('location:completer_informations.php');
			}else {
				array_push($errors, "Votre Email ou Mot de Passe est invalide");
			}
		}
	}