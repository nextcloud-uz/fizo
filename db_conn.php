<?php

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "fizo";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Baza bilan bog‘lanib bo`lmayapti!";
    exit();
}
