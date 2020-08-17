<?php 
if(!isset($_SESSION)){
session_start();
}
if(!isset($_SESSION['u_email'])){
header('location:index.php');
}
?>
