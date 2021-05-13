<?php
   session_start();
   include("config.php");

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
      #$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myemail and $mypassword, table row must be 1 row
		
      if($count == 1) {
         #session_register("myemail");
         $_SESSION['email'] = $myemail;
         // Storing username in session variable
         $query="SELECT nom_utilisateur from users where email = '$myemail' and mot_de_passe = '$mypassword'";
         $username_result = mysqli_query($conn, $query);
         $record = mysqli_fetch_array($username_result);
         $_SESSION['username'] = $record['0'];
              
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
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
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
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              <form class="bg-dark rounded shadow-5-strong p-5" method="post" action="#">
                <h1 class="text-white bg-dark" >ACCÉDER À VOTRE COMPTE</h1> <br>
                <span class="error"><?php echo $error; ?><br><br></span>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="elogin" name="login_email" class="form-control"/>
                  <label class="form-label" for="elogin"><p class="text-white-50 bg-dark">Entrer votre mail</p></label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="plogin" name="login_password" class="form-control" />
                  <label class="form-label" for="plogin"><p class="text-white-50 bg-dark">Mot de Passe</p></label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    

                  <div class="col text-center">
                    <!-- Simple link -->
                    <a href="oublie.php">Mot de Passe oublié?</a>
                  </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-success btn-block" name="login_button">connexion</button>
              </form>
              <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
            </div>
          </div>
        </div>
      </div>
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