<?php require_once 'db-connect.php';

$pdo = new DBConnect();
$conn = $pdo->connect();

if ( $conn ) {

    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $desc = $_REQUEST['desc'];
    $update_query = $conn->prepare( 'UPDATE `tasks` SET `name` = ?, `desc` = ? WHERE id = ?' );
    $update_query->execute([$name, $desc, $id]);

    echo 'OK';
}
?>