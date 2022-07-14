<?php
   session_start();
   include("../config.php");

   $conn = $db;
   $error = "";
   if(isset($_POST['login_button'])) {
      // username and password sent from form 
      
      $myemail = mysqli_real_escape_string($conn,$_POST['login_email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['login_password']); 

      $mypassword = $mypassword;
      
      $sql = "SELECT id FROM users WHERE email = '$myemail' and mot_de_passe = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $theArray = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myemail and $mypassword, table row must be 1 row
		
      if($count == 1) {
         #session_register("myemail");
         $_SESSION['email'] = $myemail;
         // Storing username in session variable
         $query="SELECT * from users where email = '$myemail' and mot_de_passe = '$mypassword'";
         $username_result = mysqli_query($conn, $query);
         $record = mysqli_fetch_array($username_result,MYSQLI_ASSOC);
         $_SESSION['username'] = $record['nom_utilisateur'];
         $_SESSION['firstname'] = $record['prenom'];
         $_SESSION['lastname'] = $record['nom'];
              
         // Welcome message
         $_SESSION['success'] = "Vous êtes connecté!";
           
         // Page on which the user is sent
         // to after logging in         
         header("location:completer_informations.php");
      }else {
         $error = "Votre Email ou Mot de Passe est incorrecte";
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
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="../css/style.css" />
    <style>
      span.error{
        color: red;
        font-size: 60%;
      }
    </style>
</head>
<body>
      <!--Main Navigation-->
  <header>
    <style>
      #intro {
        background-image: url(../img/whiteBg.jpg);
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

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark  navbar-expand-lg d-none d-lg-block" style="z-index: 2000;">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link active" href="index.php">
          <strong>EST Casablanca</strong>
        </a>
             
          <ul class="navbar-nav d-flex flex-row">
          <a class="right-side" href="creer_compte.php" style="border-right: 2px solid white">Créer un compte</a>
            <!-- Icons -->
                        
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div class="row no gutters">

<div class="col-3"></div>

<div class="col-6">
    <div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 800px;">
	<h1 class="card-title mt-3 text-center">AVANCEMENT GRADE</h1>
	

	<p class="divider-text">
        <span class="bg-light"> Utilisez vos informations d'identification</span>
    </p>
	
	<form method="post" action="#">
		<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-envelope"></i> </span>
		 </div>
        <input class="form-control" type="email" name="email" placeholder="e-mail &ast;" autocomplete="off" required="required">
    </div> <!-- form-group// -->

		 <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-key"></i> </span>
		</div>
        <input class="form-control" type="password" name="password" placeholder="Mot de Passe &ast;" autocomplete="off" required="required">
    </div> <!-- form-group// -->

    <p class="divider-text">
        <span class="bg-light">SE CONNECTER COMME...</span>
    </p>
     <div class="row" id="signin-buttons">

	 <div class="col-6">
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block" name="login_user">ENSEIGNANT <i class="fas fa-user"></i> </button>
		</div>
	  </div>
	  
      <div class="col-6">
        <div class="form-group">
			<button type="submit" class="btn btn-primary btn-block" name="login_admin">MEMBRE DE COMMISSION <i class="fas fa-user-cog"></i> </button>
		</div>
      </div>
     </div>

		<p id="member-question">
		Pas encore membre? 
		</p>
		<div class="form-group" id="create-account-button">
			<a type="button" href="../creer_compte.php" class="btn btn-primary btn-block">CR&Eacute;ER VOTRE COMPTE</a>
		</div>

		<p class="text-center">Copyright @ <?php echo date("Y"); ?> &nbsp; | &nbsp;<a href="../index.php" style="font-weight: 400; text-decoration:none; color: #000; letter-spacing:1px; font-size:1.3em;">
            AVANCEMENT GRADE
        </a>
        </p>
	</form>
</article>
	</div>
    </div>

	<div class="col-3"></div>
</div>
    <!-- Background image -->
  </header>
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