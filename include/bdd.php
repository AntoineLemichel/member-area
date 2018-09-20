<?php

try {
  $bdd = new PDO('mysql:host=localhost;dbname=member_area;charset=utf8', 'root', 'root');

}
catch(Exception $e){
  die ('Erreur :' . $e->getMessage());
}


 ?>
