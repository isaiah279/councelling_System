<?php 

session_start();
if(!isset($_SESSION['sname'])){
    header("Location:login.php");
    exit();
}
?>