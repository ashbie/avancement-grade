<?php 
	include('session.php');
    
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

    echo "<div class='container'>";

    $email = $_SESSION['email'];
    $element = $_SESSION['element'];

    $sql = "SELECT * from `dossier` WHERE `email` = '$email' AND `element` = '$element' ";

    $result = $db->query($sql);      //$result = $db->query($sql); mysqli_query($db,"$sql");
    $numberRows = $result->$num_rows;

    // Print the table
    if($numberRows > 500)
    {
        echo 
        '
        <div class="filters">
        <strong></strong>

        </div>
        
        <div id="" class="table-responsive mt-4">
                    
        <table id="voir_table" class="table table-bordered table-responsive-md table-striped text-center">
        <thead class="black white-text">
        ';

        if($row['submit'] == 'submit_a11')
        {
            echo 
            "
            <th>titre</th>
            <th>editeur</th>
            <th>annee de production</th>
            <th>intitule</th>
            <th>niveau</th>
            <th>departement</th>
            <th>annee</th>
            <th>code</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </thead>
            <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
                echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
                echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
                echo "<tr>";
                echo "<td>".$row['titre'] . "</td>";
                echo "<td>".$row['editeur'] . "</td>";
                echo "<td>".$row['annee_de_production'] . "</td>";
                echo "<td>".$row['intitule'] . "</td>";
                echo "<td>".$row['niveau'] . "</td>";
                echo "<td>".$row['departement'] . "</td>";
                echo "<td>".$row['annee'] . "</td>";
                echo "<td>".$row['code'] . "</td>";
                echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
                echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
                echo "</tr>";
                echo "</form>"; //added
            }
        }
        elseif($row['submit'] == 'submit_a12')
        {
            echo 
            "
            <th>intitule</th>
            <th>niveau</th>
            <th>departement</th>
            <th>code</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </thead>
            <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
                echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
                echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
                echo "<tr>";
                echo "<td>".$row['intitule'] . "</td>";
                echo "<td>".$row['niveau'] . "</td>";
                echo "<td>".$row['departement'] . "</td>";
                echo "<td>".$row['code'] . "</td>";
                echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
                echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
                echo "</tr>";
                echo "</form>"; //added
            }
        }
        elseif($row['submit'] == 'submit_a21')
        {
            echo 
            "
            <th>annee</th>
            <th>departement</th>
            <th>niveau_1_ou_2</th>
            <th>matiere</th>
            <th>Volume_annuel_equivalent_TP</th>
            <th>cour</th>
            <th>TD</th>
            <th>TP</th>
            <th>Total_equivalent_TP</th>
            <th>code</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </thead>
            <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
                echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
                echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
                echo "<tr>";
                echo "<td>".$row['annee'] . "</td>";
                echo "<td>".$row['departement'] . "</td>";
                echo "<td>".$row['niveau_1_ou_2'] . "</td>";
                echo "<td>".$row['matiere'] . "</td>";
                echo "<td>".$row['Volume_annuel_equivalent_TP'] . "</td>";
                echo "<td>".$row['cour'] . "</td>";
                echo "<td>".$row['TD'] . "</td>";
                echo "<td>".$row['TP'] . "</td>";
                echo "<td>".$row['Total_equivalent_TP'] . "</td>";
                echo "<td>".$row['code'] . "</td>";
                echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
                echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
                echo "</tr>";
                echo "</form>"; //added
            }    
        }
        if($row['submit'] == 'submit_a22')
        {
            echo 
            "
            <th>intitule</th>
            <th>niveau</th>
            <th>departement</th>
            <th>annee</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </thead>
            <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
                echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
                echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
                echo "<tr>";
                echo "<td>".$row['intitule'] . "</td>";
                echo "<td>".$row['niveau'] . "</td>";
                echo "<td>".$row['departement'] . "</td>";
                echo "<td>".$row['annee'] . "</td>";
                echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
                echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
                echo "</tr>";
                echo "</form>"; //added
            }
        }
        if($row['submit'] == 'submit_a23')
        {
            echo "<th>intitule</th>
            <th>Type_de_la_formation</th>
            <th>Beneficiaires_de_la_formation</th>
            <th>annee</th>
            <th>code</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </thead>
            <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
                echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
                echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
                echo "<tr>";
                echo "<td>".$row['intitule'] . "</td>";
                echo "<td>".$row['Type_de_la_formation'] . "</td>";
                echo "<td>".$row['Beneficiaires_de_la_formation'] . "</td>";
                echo "<td>".$row['annee'] . "</td>";
                echo "<td>".$row['code'] . "</td>";
                echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
                echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
                echo "</tr>";
                echo "</form>"; //added
            }      
        }
        if($row['submit'] == 'submit_a24')
        {
            echo 
            "
            <th>FORMATION</th>
            <th>Etablissement</th>
            <th>matiere</th>
            <th>annee</th>
            <th>Volume horaire</th>
            <th>code</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </thead>
            <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
                echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
                echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
                echo "<tr>";
                echo "<td>".$row['FORMATION'] . "</td>";
                echo "<td>".$row['Etablissement'] . "</td>";
                echo "<td>".$row['matiere'] . "</td>";
                echo "<td>".$row['annee'] . "</td>";
                echo "<td>".$row['Volume_horaire'] . "</td>";
                echo "<td>".$row['code'] . "</td>";
                echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
                echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
                echo "</tr>";
                echo "</form>"; //added
            }
        }
                if($row['submit'] == 'submit_a25')
                {
                    echo "<th>Nature</th>
                    <th>Periode</th>
                    <th>Lieu</th>
                    <th>code</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    </thead>
                    <tbody>
            ";
            while( $row = $result->fetch_assoc()){
            echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
            echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
            echo "<tr>";
            echo "<td>".$row['Nature'] . "</td>";
            echo "<td>".$row['Periode'] . "</td>";
            echo "<td>".$row['Lieu'] . "</td>";
            echo "<td>".$row['code'] . "</td>";
            echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
            echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
            echo "</tr>";
            echo "</form>"; //added
            }
        }

                elseif($row['submit'] == 'submit_a31_a32_a33_a34'){
                    echo "
                    <th>Nature</th>
                    <th>Periode</th>
                    <th>Etablissement</th>
                    <th>code</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    </thead>
                    <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
            echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
            echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
            echo "<tr>";
            echo "<td>".$row['Nature'] . "</td>";
            echo "<td>".$row['Periode'] . "</td>";
            echo "<td>".$row['Etablissement'] . "</td>";
            echo "<td>".$row['code'] . "</td>";
            echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
            echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
            echo "</tr>";
            echo "</form>"; //added
            }
        }

        elseif($row['submit'] == 'submit_a35'){
                    echo "<th>intitule</th>
                    <th>niveau</th>
                    <th>Departement et etablissement</th>
                    <th>annee</th>
                    <th>code</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    </thead>
                    <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
            echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
            echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
            echo "<tr>";
            echo "<td>".$row['intitule'] . "</td>";
            echo "<td>".$row['niveau'] . "</td>";
            echo "<td>".$row['Departement_et_etablissement'] . "</td>";
            echo "<td>".$row['annee'] . "</td>";
            echo "<td>".$row['code'] . "</td>";
            echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
            echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
            echo "</tr>";
            echo "</form>"; //added
            }
        }

        elseif($row['submit'] == 'submit_a36'){
                    echo "<th>Nature</th>
                    <th>Periode</th>
                    <th>Structure_universitaire</th>
                    <th>code</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    </thead>
                    <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
            echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
            echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
            echo "<tr>";
            echo "<td>".$row['Nature'] . "</td>";
            echo "<td>".$row['Periode'] . "</td>";
            echo "<td>".$row['Structure_universitaire'] . "</td>";
            echo "<td>".$row['code'] . "</td>";
            echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
            echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
            echo "</tr>";
            echo "</form>"; //added
            }
        }

        elseif($row['submit'] == 'submit_b11_b12_b13'){
                    echo "<th>titre</th>
                    <th>annee</th>
                    <th>Reference</th>
                    <th>code</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    </thead>
                    <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
            echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
            echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
            echo "<tr>";
            echo "<td>".$row['titre'] . "</td>";
            echo "<td>".$row['annee'] . "</td>";
            echo "<td>".$row['Reference'] . "</td>";
            echo "<td>".$row['code'] . "</td>";
            echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
            echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
            echo "</tr>";
            echo "</form>"; //added
           }
        }    

        elseif($row['submit'] == 'submit_b14_b15'){
                    echo "<th>titre</th>
                    <th>Intitule de la manifestation</th>
                    <th>Lieu de la manifestation</th>
                    <th>annee</th>
                    <th>code</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    </thead>
                    <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
            echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
            echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
            echo "<tr>";
            echo "<td>".$row['titre'] . "</td>";
            echo "<td>".$row['Intitule_de_la_manifestation'] . "</td>";
            echo "<td>".$row['Lieu_de_la_manifestation'] . "</td>";
            echo "<td>".$row['annee'] . "</td>";
            echo "<td>".$row['code'] . "</td>";
            echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
            echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
            echo "</tr>";
            echo "</form>"; //added
                }
                }

                elseif($row['submit'] == 'submit_b21_b22'){
                    echo "<th>Nature de encadrement</th>
                    <th>Nom du candidat</th>
                    <th>Theme</th>
                    <th>Annee et lieu de soutenance</th>
                    <th>code</th>
                <th>Modifier</th>
                    <th>Supprimer</th>
                    </thead>
                    <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
            echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
            echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
            echo "<tr>";
            echo "<td>".$row['Nature_de_encadrement'] . "</td>";
            echo "<td>".$row['Nom_du_candidat'] . "</td>";
            echo "<td>".$row['Theme'] . "</td>";
            echo "<td>".$row['Annee_et_lieu_de_soutenance'] . "</td>";
            echo "<td>".$row['code'] . "</td>";
            echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
            echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
            echo "</tr>";
            echo "</form>"; //added
                }
            }

            elseif($row['submit'] == 'submit_b23'){
                    echo "<th>Nom du candidat</th>
                    <th>Diplome</th>
                    <th>Theme</th>
                    <th>lieu de soutenance</th>
                    <th>Date de soutenance</th>
                    <th>code</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    </thead>
                    <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
            echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
            echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
            echo "<tr>";
            echo "<td>".$row['Nom_du_candidat'] . "</td>";
            echo "<td>".$row['Diplome'] . "</td>";
            echo "<td>".$row['Theme'] . "</td>";
            echo "<td>".$row['lieu_de_soutenance'] . "</td>";
            echo "<td>".$row['Date_de_soutenance'] . "</td>";
            echo "<td>".$row['code'] . "</td>";
            echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
            echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
            echo "</tr>";
            echo "</form>"; //added
                }
            }

            elseif($row['submit'] == 'submit_b24'){
                    echo "  <th>Departement</th>
                            <th>Intitule ou precisions</th>
                            <th>Lieu</th>
                            <th>Date</th>
                            <th>code</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                            </thead>
                            <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
            echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
            echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
            echo "<tr>";
            echo "<td>".$row['departement'] . "</td>";
            echo "<td>".$row['Intitule_ou_precisions'] . "</td>";
            echo "<td>".$row['Lieu'] . "</td>";
            echo "<td>".$row['Date'] . "</td>";
            echo "<td>".$row['code'] . "</td>";
            echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
            echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
            echo "</tr>";
            echo "</form>"; //added
                }
            }

            elseif($row['submit'] == 'submit_b31'){
                    echo "<th>intitule Laboratoire ou unite de recherche</th>
                    <th>intitule - Reseau</th>
                    <th>intitule - pole de competences</th>
                    <th>intitule - UFR Doctorat DESA DESS</th>
                    <th>Membre ou responsable - Laboratoire ou unite de recherche</th>
                    <th>Membre ou responsable - Reseau</th>
                    <th>Membre ou responsable - pole de competences</th>
                    <th>Membre ou responsable - UFR Doctorat DESA DESS</th>
                    <th>Etablissement - Laboratoire ou unite de recherche</th>
                    <th>Etablissement - Reseau</th>
                    <th>Etablissement - pole de competences</th>
                    <th>Etablissement - UFR Doctorat DESA DESS</th>
                    <th>Periode - Laboratoire ou unite de recherche</th>
                    <th>Periode - Reseau</th>
                    <th>Periode - pole de competences</th>
                    <th>Periode - UFR Doctorat DESA DESS</th>
                    <th>code - Laboratoire ou unite de recherche</th>
                    <th>code - Reseau</th>
                    <th>code - pole de competences</th>
                    <th>code - UFR Doctorat DESA DESS</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    </thead>
                    <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
            echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
            echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
            echo "<tr>";
            echo "<td>".$row['intitule_Laboratoire_ou_unite_de_recherche' ] . "</td>";
            echo "<td>".$row['intitule_Reseau' ] . "</td>";
            echo "<td>".$row['intitule_pole_de_competences' ] . "</td>";
            echo "<td>".$row['intitule_UFR_Doctorat_DESA_DESS' ] . "</td>";
            echo "<td>".$row['Membre_ou_responsable_Laboratoire_ou_unite_de_recherche'] . "</td>";
            echo "<td>".$row['Membre_ou_responsable_Reseau' ] . "</td>";
            echo "<td>".$row['Membre_ou_responsable_pole_de_competences' ] . "</td>";
            echo "<td>".$row['Membre_ou_responsable_UFR_Doctorat_DESA_DESS' ] . "</td>";
            echo "<td>".$row['Etablissement_Laboratoire_ou_unite_de_recherche' ] . "</td>";
            echo "<td>".$row['Etablissement_Reseau' ] . "</td>";
            echo "<td>".$row['Etablissement_pole_de_competences' ] . "</td>";
            echo "<td>".$row['Etablissement_UFR_Doctorat_DESA_DESS' ] . "</td>";
            echo "<td>".$row['Periode_Laboratoire_ou_unite_de_recherche' ] . "</td>";
            echo "<td>".$row['Periode_Reseau' ] . "</td>";
            echo "<td>".$row['Periode_pole_de_competences' ] . "</td>";
            echo "<td>".$row['Periode_UFR_Doctorat_DESA_DESS' ] . "</td>";
            echo "<td>".$row['code_Laboratoire_ou_unite_de_recherche' ] . "</td>";
            echo "<td>".$row['code_Reseau' ] . "</td>";
            echo "<td>".$row['code_pole_de_competences' ] . "</td>";
            echo "<td>".$row['code_UFR_Doctorat_DESA_DESS' ] . "</td>";
            echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
            echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
            echo "</tr>";
            echo "</form>"; //added
                }
            }

            elseif($row['submit'] == 'submit_b32'){
                    echo "<th>Intitule et cadre</th>
                    <th>Responsable ou participant</th>
                    <th>Etablissement</th>
                    <th>Periode</th>
                    <th>Partenaires</th>
                    <th>Type de financement</th>
                    <th>code</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    </thead>
                    <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
            echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
            echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
            echo "<tr>";
            echo "<td>".$row['Intitule_et_cadre'] . "</td>";
            echo "<td>".$row['Responsable_ou_participant'] . "</td>";
            echo "<td>".$row['Etablissement'] . "</td>";
            echo "<td>".$row['Periode'] . "</td>";
            echo "<td>".$row['Partenaires'] . "</td>";
            echo "<td>".$row['Type_de_financement'] . "</td>";
            echo "<td>".$row['code'] . "</td>";
            echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
            echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
            echo "</tr>";
            echo "</form>"; //added
                }
            }

            elseif($row['submit'] == 'submit_b33'){
                    echo "<th>intitule</th>
                    <th>Nature</th>
                    <th>Etablissement_ou_Organisme</th>
                    <th>Periode</th>
                    <th>Partenaires</th>
                    <th>code</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    </thead>
                    <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
            echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
            echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
            echo "<tr>";
            echo "<td>".$row['intitule'] . "</td>";
            echo "<td>".$row['Nature'] . "</td>";
            echo "<td>".$row['Etablissement_ou_Organisme'] . "</td>";
            echo "<td>".$row['Periode'] . "</td>";
            echo "<td>".$row['Partenaires'] . "</td>";
            echo "<td>".$row['code'] . "</td>";
            echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
            echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
            echo "</tr>";
            echo "</form>"; //added
                }
            }

            elseif($row['submit'] == 'submit_b34'){
                    echo "<th>Intitule de la manifestation</th>
                    <th>Partenaires</th>
                    <th>Beneficiaires</th>
                    <th>Date</th>
                    <th>Lieu</th>
                    <th>code</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    </thead>
                    <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
            echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
            echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
            echo "<tr>";
            echo "<td>".$row['Intitule_de_la_manifestation'] . "</td>";
            echo "<td>".$row['Partenaires'] . "</td>";
            echo "<td>".$row['Beneficiaires'] . "</td>";
            echo "<td>".$row['Date'] . "</td>";
            echo "<td>".$row['Lieu'] . "</td>";
            echo "<td>".$row['code'] . "</td>";
            echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
            echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
            echo "</tr>";
            echo "</form>"; //added
                }
            }

            elseif($row['submit'] == 'submit_b35'){
                    echo "<th>Nature</th>
                    <th>Partenaires</th>
                    <th>Beneficiaires</th>
                    <th>Date</th>
                    <th>Retombees socio economiques</th>
                    <th>code</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    </thead>
                    <tbody>
            ";
            while( $row = $result->fetch_assoc())
            {
            echo "<form action='' method='POST' enctype='multipart/form-data'>"; //added
            echo "<input type='hidden' value='". $row['email']."' name='email' />"; //added
            echo "<tr>";
            echo "<td>".$row['Nature'] . "</td>";
            echo "<td>".$row['Partenaires'] . "</td>";
            echo "<td>".$row['Beneficiaires'] . "</td>";
            echo "<td>".$row['Date'] . "</td>";
            echo "<td>".$row['Retombees_socio_economiques'] . "</td>";
            echo "<td>".$row['code'] . "</td>";
            echo "<td><p data-placement='top'><button id='modify'  class='btn btn-info btn-sm'  type='submit' name='modify' data-title='modify' data-toggle='modal' data-target='#' ><i class='fas fa-eye'></i></button></p></td>";
            echo "<td><p data-placement='top'><button id='delete' class='btn btn-info btn-sm' type='submit' name='delete' data-title='delete' data-toggle='modal' data-target='#' ><i class='far fa-trash-alt'></i></button></p></td>";
            echo "</tr>";
            echo "</form>"; //added
                }
            }
            
            
        echo 
        '
        </tbody>
        </table>
        </div> <!-- End of div id="voir_table" class= "table-responsive mt-4" -->
        </div> <!-- End of div id="user_info" class="container" -->
        ';
        
    

    }// ending curly bracket of if( $result->num_rows > 0){
    else
    {
        echo "<br/><div class='alert alert-dark' role='alert'>Aucun Dossier trouvé <br> numberRows = ".$numberRows."<br>&nbsp;&nbsp;the Query = ".$sql."</div>";
    }
?>

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
        <script type="text/javascript">
         
        </script>
		
</body>

</html>