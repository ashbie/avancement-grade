<?php
   session_start();
   include("config.php");
   

   $error = "";
   if(isset($_POST['sendPass'])) {
      // username and email sent from form 
      
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $myusername = mysqli_real_escape_string($db,$_POST['username']); 
      
      $sql = "SELECT * FROM users WHERE email = '$myemail' and nom_utilisateur = '$myusername'";
      $result = mysqli_query($db,$sql);
      $theArray = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myemail and $myusername, table row must be 1 row
		
      if($count == 1) {
         // Page on which the user is sent to after verifying username and email
         $_SESSION['oublieEmail'] = $myemail; // This will be used in changePass.php
         header("location: changepass.php");         
      }else {
         $error = "Votre Email ou Nom d'utilisateur est incorrecte";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>AVANCEMENT GRADE</title>

    <!-- Font Awesome -->
    <link href="css/all.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- custom styles -->
    <link rel="stylesheet" href="css/oublie.css">

    <style>
        html,body{
            height:100%;
        }
        body{
            background-image: url('img/whitebg.jpg');  
            color:#ffffff;
            background-size:cover;
            background-size:cover;
            background-size:cover;   
        }
        span.error{
        color: red;
        font-size: 60%;
      }
     /* Add a color to the active/current link */
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
<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark  navbar-expand-lg d-none d-lg-block" style="z-index: 2000;">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link active" target="_blank" href="index.php">
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

<div class="container my-5">
    <div class="row my-5">
        <div class="col"></div>
        <div class="col my-5">
        <div class="card bg-dark">
<div class="container">
    <div class="row">
        <div class="col">
            <article class="card-body mx-auto" style="max-width: 800px;">
	             <h1 class="card-title mt-3 text-center">MOT DE PASSE OUBLIÉ</h1>
                        <span class="error"><?php echo $error; ?><br><br></span>
                    <form method="post" action="#">
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fas fa-user"></i> </span>
                            </div>
                            <input class="form-control" type="text" name="username" placeholder="Nom d'utilisateur" autocomplete="off" >
                        </div> <!-- form-group// -->

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="far fa-envelope"></i> </span>
                            </div>
                            <input class="form-control" type="email" name="email" placeholder="Email" autocomplete="off">
                        </div> <!-- form-group// -->

                        
                        <div class="form-group" id="create-account-button">
                            <button type="submit" class="btn btn-success btn-block" name="sendPass">VERIFIER </button>
                        </div>

                        <p class="text-center">Copyright @ <?php echo date("Y"); ?> &nbsp; | &nbsp;<a href="index.php" style="font-weight: 400; text-decoration:none; letter-spacing:1px; font-size:1.3em;">
                            GRILLE D'AVANCEMENT</a>
                        </p>
                    </form>
            </article>
        </div>
    </div>
</div>
</div>
        </div>
        <div class="col"></div>
    </div>
</div>

 <!-- Include JS files here -->

        <!-- jQuery -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- Your custom scripts (optional) -->
        <script type="text/javascript"></script>


</body>
</html>