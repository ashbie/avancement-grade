<?php 
	session_start();
    error_reporting(E_ALL);
	ini_set('display_errors', true);
	include("config.php");
	
	
 


// LOGIN USER
if (isset($_POST['login_button'])) 
{
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