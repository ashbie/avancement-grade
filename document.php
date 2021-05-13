<?php 
	include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>AVANCEMENT GRADE</title>

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
</head>
<body>
	<script src="js/jquery-3.6.0.min.js"></script>

	<!--NAV BAR -->

<?php  include("navbar.php");?>

<button type="submit" class="btn_a" name="submit">D&eacutesposer vos Documents </button>

<div align="center" style="position:absolute;top: 25%;left: 40%;">
      <form action="upload_files.php" method="post" enctype="multipart/form-data">
      </br>Charger vos Documents:</br></br>
      <input type="file" name="pdf_file" id="pdf_file">
      <div></br></div>
      <input type="submit" value="Upload File" name="submit_file">
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
</script>

</body>
</html>
