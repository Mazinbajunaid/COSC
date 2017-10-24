<?php

/* database connection stuff here
 * 
 */

function db_connect() {
    try {
        $conn = new PDO('mysql:127.0.0.1;=$servername;dbname=COSC', 'root', '');
        return $conn;
    } catch (PDOException $e) {
        //We should set a global variable here so we know the DB is down
    }
}
