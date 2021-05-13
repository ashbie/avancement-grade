<?php

class DBConnect {

    protected $db;

    public function connect() {

        try {

            $dsn = 'mysql:host=mysql.db.mdbgo.com;port=3306;dbname=zlats_pfe';
            $user = 'zlats_beezho';
            $password = 'A#ard123';

            $this->db = new PDO( $dsn, $user, $password );

            return $this->db;
        } catch ( PDOException $e ) {

            echo 'PDO Error:  ' . $e->getMessage();
        }
    }
}
