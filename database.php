<?php

$host = "localhost";
$dbname = "patient";
$username = "root";
$password = "";

$link = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($link->connect_errno) {
    die("Connection error: " . $link->connect_error);
}

return $link;