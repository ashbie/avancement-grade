<?php require_once 'db-connect.php';

$pdo = new DBConnect();
$conn = $pdo->connect();

if ( $conn ) {

    $name = $_REQUEST['name'];
    $desc = $_REQUEST['desc'];
    $insert_query = $conn->prepare( 'INSERT INTO `tasks` (`name`, `desc`) VALUES (?, ?)' );
    $insert_query->execute([$name, $desc]);

    echo 'OK';
}
?>