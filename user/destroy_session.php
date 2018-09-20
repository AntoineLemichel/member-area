<?php
session_start();
$_SESSION = array();
session_destroy();
setcookie('pseudo', '');
setcookie('password', '');
if(!isset($_SESSION['pseudo'])){
  
  header('Location: ../index.php');
}

?>