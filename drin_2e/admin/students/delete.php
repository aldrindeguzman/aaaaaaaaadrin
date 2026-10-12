<?php

session_start();
include"../config/database.php";
// only admin can access this page
if (!isset($_SESSION["role"]) || $_SESSION["role"] != "admin" ){
    header("location:../index.php");
    exit;
}
$id = isset($_GET['id']) ? intval($_GET['']) :0; 
//delete
mysqli_query( $conn, "DELETE FROM users
WHERE   id=$id AND role ='student'");
header ("location: index.php;");

?>



