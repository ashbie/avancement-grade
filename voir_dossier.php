<?php
include('session.php');

$email=$_SESSION['email'];

$sql="SELECT * FROM dossier where email ='$email'";
$sql2="SELECT * FROM file_upload where email ='$email'";

$result= $db-> query($sql);
$result2= $db-> query($sql2);
?>
<!DOCTYPE html>
<html>
<head>
	<title>AVANCEMENT GRADE</title>

<link rel="stylesheet" href="css/mystyle5 - Copie.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- body style="background-image: url('picture/4TMokV.jpg');"-->
<style >
	h1,h2,h3,h4,h5,h6 {
		font-family: "oswald"
	}
	body {
		font-family: "open sans"
	}
	.rubrique {
		width: 280px;
		text-align: center;
	}
	select{
		background-color: white;
		border : 1px double blue;
		color : black;
		font-family: Georgia;
		font-weight: bold;
		font-size: 14px;
		height: 39px;
		padding: 7px 8px;
		width: 250px;
		outline: none;
		margin: 10px 0 10px 0;
	}
	select option{
		font-family: Georgia;
		font-size : 14px;
	}
  table{
    width: 500px;
  }
  th,td{
    width: 150px;
  }
</style>
</head>
<body style="background-image: url('img/whiteBg.jpg');">

<?php  include("navbar.php");?>

</br></br>
<h1 align="center">Votre Dossier</h1>

       <div class="table">


	    <table border="1" style="width: 1200px;height: 200px;position:absolute;top: 25%;left: 5%;font-style: bold;background-color: rgba(0,0,255,0.5)" >
        
        <tr align="center" style="background-color: rgba(0,0,255,1)"><td>Rubrique</td><td>sous rubrique</td><td>catégori</td><td>élément</td></tr>
       <?php
        if($result-> num_rows > 0 ){
	    while($row = $result-> fetch_assoc()){
		  echo "<tr><td>".$row['rubrique']."</td><td>".$row['sous_rubrique']."</td><td>".$row['catégori']."</td><td>".$row['element']."</td></tr>";
	      }
          }
        else{
	      echo "<tr><td> - </td><td> - </td><td> - </td><td> - </td></tr>";
	     
          }
          ?>
          </table>
          </div>

      

</body>
</html>
