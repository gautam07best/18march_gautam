<?php
$host="localhost";
$user="root";
$pass="";
$db="demo";

$con=mysqli_connect($host,$user,$pass,$db);
if ($con) {
    echo "db is connected";
}
else
{
    echo "DB NOT CONNECTED";
}
?>
