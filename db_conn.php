<?php

$sname = "localhost";
$username = "root";
$password = "root";

$db_name = "php-blog";

$conn = mysqli_connect($sname, $username, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}