<?php require_once 'db-connect.php';

$pdo = new DBConnect();
$conn = $pdo->connect();

if ( $conn ) {

    $read_query = $conn->prepare( 'SELECT * FROM `tasks`' );
    $read_query->execute();
    $results = $read_query->fetch();

    print_r($results);
}
?>