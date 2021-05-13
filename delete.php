<?php require_once 'db-connect.php';

$pdo = new DBConnect();
$conn = $pdo->connect();

if ( $conn ) {

  $id = $_REQUEST['id'];
  $delete_query = $conn->prepare( 'DELETE FROM `tasks` WHERE `id` = ?' );
  $delete_query->execute([$id]);

  echo 'OK';
}
?>