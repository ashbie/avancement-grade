<?php
   session_start();
   if(isset($_POST['gotologin'])){
       header("location:login.php");
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

<div class="container my-5">
    <div class="row my-5">
        <div class="col"></div>
        <div class="col my-5">
        <div class="card bg-dark">
<div class="container">
    <div class="row">
        <div class="col">
            <article class="card-body mx-auto" style="max-width: 800px;">
	             <h1 class="card-title mt-3 text-center">votre mot de passe a été changé.<br>vous pouvez maintenant vous connecter avec votre nouveau mot de passe </h1>
                    <form method="post" action="#">
                    

                        
                        <div class="form-group" id="gotologinbutton">
                            <button type="submit" class="btn btn-success btn-block" name="gotologin">SE CONNECTER</button>

                        </div>
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