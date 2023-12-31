<?php

/**
 * Database connection
 */
$host = 'localhost';
$user = 'root';
$pass  = '';
$database = 'parvez';

function connect(){  

    global $host, $user, $pass, $database;  

    return $connection = new mysqli($host ,$user ,$pass ,$database);

}

