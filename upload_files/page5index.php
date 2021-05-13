<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>PAGE 5</title>
</head>
<link rel="stylesheet" href="css/mystyle5.css"/>
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

	<script src="js/jquery-3.6.0.min.js"></script>

	<!--NAV BAR -->

<nav class="top-nav">
  <a href="profile.php">MON Profile</a>
  <a href="index.php">Accueil</a>
  <a href="completer_informations.php">Completer Information</a>
  <a href="document.php">D&eacutesposer Vos Documents</a>
  <a href="voir_dossier.php">Voir dossier</a>
  <a href="#Imprimer dossier">Imprimer dossier</a>
  <a href="logout.php" style="border-right: 2px solid white">Se deconnecter</a>
</nav> 

<!--désposer votre dossier -->

<button type="submit" class="btn_a" name="submit">D&eacutesposer votre dossier de candidature </button>

<!--remplire le dossier -->

<?php
  include_once 'page5.php';
  $query = "SELECT * FROM rubrique Order by id_rubrique";
  $result = $db->query($query);
?>

    <div class="rubrique">
     <form action="upload_files.php" method="post" >
        <div class="form-group">
          <label for="rubrique">rubrique</label>
          <select name="rubrique" id="rubrique" class="form-control" onchange="Fetchsous_rubrique(this.value)"  required>
            <option value="">Select rubrique</option>
          <?php
            if ($result->num_rows > 0 ) {
               while ($row = $result->fetch_assoc()) {
                echo '<option value='.$row['id_rubrique'].'>'.$row['rubrique'].'</option>';
               }
            }
          ?> 
          </select>
        </div>
        <div class="form-group">
          <label for="sous_rubrique">sous_rubrique</label>
          <select name="sous_rubrique" id="sous_rubrique" class="form-control" onchange="Fetchcatégori(this.value)"  required>
            <option>Select sous_rubrique</option>
          </select>
        </div>

        <div class="form-group">
          <label for="catégori">categori</label>
          <select name="catégori" id="catégori" class="form-control" onchange="Fetchelement(this.value)"  required>
            <option>Select Categori</option>
          </select>
        </div>
        <div class="form-group">
          <label for="element">element</label>
          <select name="element" id="element" class="form-control" onchange="Fetchtableau_element(this.value)"  required>
            <option>Select element</option>
          </select>
        </div>
        <div id="table_element" class="table_element">
            <table border='1'><tr><th>CODE</th><th>POINT</th><th>PLAFOND</th></th></table>
        </div>
           </br>
        <input type="submit" value="Envoyez les informations" name="submit">
        
      </form>

    
</div>
<script type="text/javascript">
	$(document).ready(function(){
			$(".btn_a").click(function(){
				$(".btn_a").hide(function(){
					$("form").show();
				});
			});
			
		});
  function Fetchsous_rubrique(id){
    $('#sous_rubrique').html('');
    $('#catégori').html('<option>Select catégori</option>');
    $.ajax({
      type:'post',
      url: 'ajax_data_page5.php',
      data : { id_rubrique : id},
      success : function(data){
         $('#sous_rubrique').html(data);
      }

    })
  }

  function Fetchcatégori(id){ 
  	
    $('#catégori').html('');
    $.ajax({
      type:'post',
      url: 'ajax_data_page5.php',
      data : { id_sous_rubrique : id},
      success : function(data){
         $('#catégori').html(data);
      }

    })
  }

function Fetchelement(id){ 
    
    $('#element').html('');

    $.ajax({
      type:'post',
      url: 'ajax_data_page5.php',
      data : { id_catégori : id},
      success : function(data){
         $('#element').html(data);
      }

    })
  }
function Fetchtableau_element(id){ 
    
    $('#table_element').html('');
    $.ajax({
      type:'post',
      url: 'ajax_data_page5.php',
      data : { code : id},
      success : function(data){
         $('#table_element').html(data);
      }

    })
  }

  
</script>
</body>
</html>
