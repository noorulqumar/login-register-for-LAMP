<?php

$hostName = "localhost";
$dbUser = "user";
$dbPassword = "users@123";
$dbName = "users";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>