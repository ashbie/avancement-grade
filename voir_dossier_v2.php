<?php 
	include('session.php');
    
    if(isset($_GET['element']))
    {
        $_SESSION['element'] = $_GET['element'];
       
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>AVANCEMENT GRADE</title>
<style>
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
    text-align: center;
}
::-moz-placeholder { /* Firefox 19+ */
    text-align: center;
}
:-ms-input-placeholder { /* IE 10+ */
    text-align: center;
}
:-moz-placeholder { /* Firefox 18- */
    text-align: center;
}
ul {
    display: inline;
}
li {
    list-style-type: lower-roman;
    display: inline;
    padding-right: 20px;
}
li form {
    display: inline !important;
}
.filters form {
    display: inline;
}
</style>
</head>
<body style="background-image: url('img/whiteBg.jpg');">
<!-- Navbar -->
<?php  include("navbar_v2.php");?>	
<h3 class="text-center font-weight-bold text-uppercase py-4">Liste de Vos Informations</h3>

<?php

echo "<div id='user_info' class='container'>";


if( isset($_POST['voir_contenu'])){
	//header('location : contenu_dossier.php');
   // echo '<script>window.location="contenu_dossier.php"</script>';
}

$email = $_SESSION['email'];
$sql = "SELECT `email`, `rubrique`, `sous_rubrique`, `catégori`, `element` from `dossier` WHERE `email` = '$email' ";

$result = mysqli_query($db,"$sql");
//$result = $db->query($sql);

if( $result->num_rows > 0)
{
?>
<div class="filters">
<strong></strong>

</div>
 
<div class="table-responsive mt-4">
             
<table id="voir_table" class="table table-bordered table-responsive-md table-striped text-center">
     
     <thead class="black white-text">
      <th>Rubrique</th>
      <th>Sous-Rubrique</th>
      <th>Catégorie</th>
      <th>Élément</th>
	  <th>Voir Contenu</th>
      <th>Supprimer</th>
     </thead>
<tbody>
    <?php
    while( $row = $result->fetch_assoc()){
        $element = $row['element'];
		echo "<form action='#' method='POST' enctype='multipart/form-data'>"; //added
        echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
        echo "<tr>";
        echo "<td>".$row['rubrique'] . "</td>";
        echo "<td>".$row['sous_rubrique'] . "</td>";
        echo "<td>".$row['catégori'] . "</td>";
        echo "<td>".$row['element'] . "</td>";
        echo "<td><p data-placement='top'><button id='voir'  class='btn btn-info btn-sm'  onclick='voirDossier(this.value)' name='voir_contenu' value='".$row['element']."' ><i class='fas fa-eye'></i></button></p></td>";
        echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' ><i class='far fa-trash-alt'></i></button></p></td>";
        echo "</tr>";
        echo "</form>"; //added
    }
    if(isset($_GET['element']))
    {
        echo  $_SESSION['element'];
    }
?>
</tbody>
</table>
<?php
} // ending curly bracket of if( $result->num_rows > 0){
else
{
    echo "<br/><div class='alert alert-dark' role='alert'>Aucun Dossier trouvé</div>";
}
?>
</div> <!-- End of div id="voir_table" class= "table-responsive mt-4" -->
</div> <!-- End of div id="user_info" class="container" -->

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
        <script >
            // function in use
            function voirDossier(ele){
                $.ajax({
                    type:'post',
                    url: 'ajax_data_voir_dossier.php',
                    data : { element : ele},
                    success : function(){
                        window.location="contenu_dossier.php" // alert("Success"); //$("#user_info").html(data);
                    }
                });
            }
            // not in use
            function voirDossierV2(ele){
                var element = ele;
                $(document).ready(function() {
                    $("#user_info").load("ajax_data_voir_dossier.php", {element : ele});
                })
            }
            // not in use
            function sendValue(value){
                $.post('contenu_dossier.php', { element: value}
                ).done(function() {
                    <?php ?>
                    window.location="contenu_dossier.php";
                }).fail(function() {
                    alert('Taper encore');
                })
                
            }

        </script>
		
</body>

</html>