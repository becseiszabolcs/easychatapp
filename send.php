<?php
include("./connect.php");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$nev = $_POST["user"];
$mes = $_POST["message"];
//print_r($_POST) ;

//data upload
$conn->query("INSERT INTO  messages  ( id ,  user ,  message ,  timestamp ) VALUES (NULL,  '$nev' ,  '$mes' , current_timestamp())");

$conn->close();
header("Loctaion: ./index.html");

?>
