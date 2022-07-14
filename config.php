<?php
   define('DB_SERVER', 'mysql.db.mdbgo.com');
   define('DB_USERNAME', 'zlats_beezho');
   define('DB_PASSWORD', 'A#ard123');
   define('DB_DATABASE', 'zlats_pfe');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   //$_SESSION['insert'] = "config";