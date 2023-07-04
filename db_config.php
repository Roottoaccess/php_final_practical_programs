<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "my_db";

$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);

if(!$conn){
    die("404 database not found".mysqli_connect_errno());
}
// else{
//     echo "200 ok !";
// }

# Successfully connected !
?>