<?php

include("../include/bdd.php");
$req_pseudo = $bdd->prepare('SELECT * FROM user WHERE pseudo = :pseudo');
$req_pseudo->execute(array(
  'pseudo' => $_POST['pseudo']
));
$req_email = $bdd->prepare('SELECT * FROM user WHERE email = :email');
$req_email->execute(array(
  'email' => $_POST['email']
));
$resultat_pseudo = $req_pseudo->fetch();
$resultat_email = $req_email->fetch();
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  if (isset($_POST['pseudo']) and isset($_POST['password']) and isset($_POST['email']) and isset($_POST['password_confirme'])) {
      if (!empty($_POST['pseudo']) and !empty($_POST['password']) and !empty($_POST['email']) and !empty($_POST['password_confirme'])) {
          if ($_POST['password'] == $_POST['password_confirme']) {
              if ($resultat_pseudo['pseudo'] != $_POST['pseudo']) {
                if($resultat_email['email'] != $_POST['email']){
                  $req_inscription = $bdd->prepare('INSERT INTO user(pseudo, email, password) VALUES(:pseudo, :email, :password)');
                  $req_inscription->execute(array(
                    'pseudo' => htmlspecialchars($_POST['pseudo']),
                    'email' => $_POST['email'],
                    'password' => $password
                  ));
                  header('Location: ../index.php');
                } else {
                  echo "L'email existe déjà";
                }
              } else {
                  echo "Le pseudo existe déjà";
              }
          } else {
              echo "Les mots entré ne correspond pas.";
          }
      } else {
          echo "Tout les champs doivent être remplis.";
      }
  } else {
      echo "Tout les champs sont nécessaires.";
  }

?>