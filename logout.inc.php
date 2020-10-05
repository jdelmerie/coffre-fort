<?
session_start(); 
require 'users.inc.php';
require 'login.inc.php'; 

$_SESSION = array();
session_destroy(); 
header('location: index.php?message=logout'); 
?>

