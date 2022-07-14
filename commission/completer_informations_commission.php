<?php 
include('../session.php');
?>
<?php 
$somErr = "";

if (isset($_POST['bouton_completer']))
{
    // receive all input values from the form
    $som= mysqli_real_escape_string($db, $_POST['som']); 

    // Give error messages if empty
    if (empty($_POST["som"])) {
		$somErr = "Le som est requis";
	}
	
	// Put the stuff in the database
	if(!empty($som))
	{	
		$email = $_SESSION['email'];
		// Inserting the data into the database
		$query = "INSERT INTO `membres_commission_completer` (email, som) 
		VALUES ('$email','$som')";

		/*  I don't think there is need of checking the email column of `membres_commission_completer` to see if the email 
			that is about to be inserted already exists. This is because : 
			A. The email column is the Primary key, so each email address in the column is unique
			B. And besides, each user access the `completer_informations_commission` page once and only once during their lifetime use of
				of the website.  Meaning, each user gets to fill it in only once, so there would be no instance where a user/account has to 
				complete this form again, which would lead to a conflict as the database would not accept that email since it already exists
				in the column. So again, no such scenario would occur !!! 
		*/
		
		#insertion
		mysqli_query($db, $query);

		// After inserting, change the completed_info field (in the membres_commission table) to yes
		$query2 = "UPDATE `membres_commission` SET `completed_info` = 'yes' WHERE `email` = '$email' ";
		mysqli_query($db, $query2);

		// Go to (list the Enseignants) after all this
		header("location: evaluer_dossiers.php");
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
    <!-- <link rel="stylesheet" href="css/mdb.min.css" />           MDB -->
    
    <!--  <link rel="stylesheet" href="css/mystyle4.css" />     Custom styles -->
    
<style>
	span.error{
		color:red;
		font-size: 60%;
	}
</style>
</head>
<body style="background-image: url('../img/whiteBg.jpg');">
<!-- No Navbar: The user has to complete his/her info. Thats when they will be able to access the other pages of the site. -->
	
<div id="intro" class="bg-image shadow-2-strong" >
      <div class="mask d-flex align-items-center h-100" >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-30 col-md-8">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
              <form class="bg-dark rounded shadow-5-strong p-5" action="#" method="post">
                <h1 class="text-white bg-dark "><center>Veuillez completer vos informations<center></h1> 
                <div class="row">
                <div class="col-12"><!-- som input -->
                <span class="error">* <?php echo $somErr;?></span>
                <div class="form-outline mb-4">
                 <p>Som : </p><input type="text" id="som" name="som" class="form-control" required="required"/>
                  <!-- <label class="form-label" for="som"><p class="text-white-50 bg-dark">Entrer votre adresse mail</p></label> -->
                </div>
                </div>
                </div>  
                <!-- Submit button -->
                  <div class="row" id="signin-buttons">
                <div class="col-6">
                  <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block" name="bouton_completer">COMPLETER <i class="fas fa-user"></i> </button>
                  </div>
                  </div>
                
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
</body>

</html>