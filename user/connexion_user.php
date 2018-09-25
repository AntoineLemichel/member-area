<?php

include("../include/bdd.php");
$req_user = $bdd->prepare('SELECT id, date_inscription, password FROM user WHERE pseudo = :pseudo');
$req_user->execute(array(
  'pseudo' => $_POST['pseudo']
));
$resultat_user = $req_user->fetch();
$req = $bdd->query('SELECT groupe FROM groupe WHERE id_user='.$resultat_user['id'])->fetch();
if(isset($_POST['pseudo']) and isset($_POST['password'])){
  if(!empty($_POST['pseudo']) and !empty($_POST['password'])){
    if(password_verify($_POST['password'], $resultat_user['password']) and $resultat_user['pseudo'] != $_POST['pseudo'] or $_COOKIE['password'] == $resultat_user['password']){
      session_start();
      $_SESSION['pseudo'] = $_POST['pseudo'];
      echo 'Vous êtes connecté' . "<br>";
      echo "Date d'inscription : " . $resultat_user['date_inscription'] . "<br>";
    } else {
      echo "Erreur sur les champs";
    }
  } else {
    echo "Les champs doivent être remplis.";
  }
} else {
  echo 'Les champs sont requis.';
}

if(isset($_POST['automatique'])){
  setcookie('pseudo', $_SESSION['pseudo'], time() + 365*24*3600, "/", null, false, true);
  setcookie('password', $resultat_user['password'], time() + 365*24*3600, "/", null, false, true);

}


if(isset($_SESSION['pseudo'])){
 echo "Bonjour " . $req['groupe']. " " . $_SESSION['pseudo'] . "<br>";
 echo "<a href='destroy_session.php'>Déconnexion</a>";
}

?>