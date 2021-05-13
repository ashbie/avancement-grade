<?php include('verification.php') ?>
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
              <form class="bg-dark rounded shadow-5-strong p-5" action="verification.php" method="post">
                <h1 class="text-white bg-dark ">CRÉER UN COMPTE</h1> <br>
                
                <table>
                <!-- Row 1 -->
                <tr>
                <td width="500"><!-- Last Name Input -->   
                <div class="form-outline mb-4">
                   <br> <input type="text" id="nom" name="nom" class="form-control" /> 
                  <label class="form-label" for="nom"><p class="text-white-50 bg-dark">Entrer votre nom</p></label>
                </div>
                </td>
                <td width="500"><!-- first name input -->
                <div class="form-outline mb-4">
                <br> <input type="text" id="prenom" name="prenom" class="form-control" />
                  <label class="form-label" for="prenom"><p class="text-white-50 bg-dark">Entrer votre prénom</p></label>
                </div>
                </td>
                </tr>
                <!-- Row 2 -->
                <tr>
                <td><!-- User name Input -->   
                <div class="form-outline mb-4">
                  <br> <input type="text" id="userName" name="userName" class="form-control" />
                  <label class="form-label" for="userName"><p class="text-white-50 bg-dark">Entrer un nom d'utilisateur</p></label>
                </div>
                </td>
                <td><!-- email input -->
                <div class="form-outline mb-4">
                 <br> <input type="email" id="mail" name="mail" class="form-control" />
                  <label class="form-label" for="mail"><p class="text-white-50 bg-dark">Entrer votre adresse mail</p></label>
                </div>
                </td>
                </tr>
                <!-- Row 3 -->
                <tr>
                <td><!-- Password Input -->   
                <div class="form-outline mb-4">
                   <br> <input type="password" id="passwd" name="passwd" class="form-control" />
                  <label class="form-label" for="passwd"><p class="text-white-50 bg-dark">Entrer un mot de passe</p></label>
                </div>
                </td>
                <td><!-- Password Confirmation input -->
                <div class="form-outline mb-4">
                 <br> <input type="password" id="passwdConf" name="passwdConf" class="form-control" />
                  <label class="form-label" for="passwdConf"><p class="text-white-50 bg-dark">Confirmer votre mot de passe</p></label>
                </div>
                </td>
                </tr>
                </table>                   
              
                <!-- Creer un compte button -->
                <button type="submit" class="btn btn-success btn-block" name="boutonCreer" >Créer un compte</button>
              </form>
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