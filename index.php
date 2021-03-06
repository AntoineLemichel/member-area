<!doctype html>
<html class="no-js" lang="fr-FR">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Member Area</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/semantic.min.css">
  <link rel="stylesheet" href="sass/main.css">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <div class="ui container-principal">
    <div class="container-inscription">
      <form class="ui form container" method="POST" action="user/inscription_user.php">
        <p class="ui header">Inscription :</p>
        <div class="field required">
          <label>Pseudo : </label>
          <input type="text" name="pseudo" placeholder="Pseudo">
        </div>
        <div class="field required">
          <label>Email :</label>
          <input type="email" name="email" placeholder="Email">
        </div>
        <div class="field required">
          <label>Mot de passe :</label>
          <input type="password" name="password" placeholder="Mot de passe">
        </div>
        <div class="field required">
          <label>Confirmation mot de passe :</label>
          <input type="password" name="password_confirme" placeholder="Confirmation mot de passe">
        </div>
        <button class="ui button blue" type="submit">Connexion</button>
      </form>
    </div>
    <div class="ui container-connexion">


      <form class="ui form container" method="POST" action="user/connexion_user.php">
        <p class="ui header">Connexion :</p>
        <div class="field required">
          <label>Pseudo : </label>
          <input type="text" name="pseudo" placeholder="Pseudo" value="<?php echo $_COOKIE['pseudo'];?>">
        </div>
        <div class="field required">
          <label>Mot de passe :</label>
          <input type="password" name="password" placeholder="Mot de passe" value="<?php echo $_COOKIE['password'];?>">
        </div>
        <div class="field">
          <div class="ui checkbox">
            <input type="checkbox" tabindex="0" name="automatique">
            <label>Connexion automatique</label>
          </div>
        </div>
        <button class="ui button blue" type="submit">Connexion</button>
      </form>
    </div>
  </div>
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')

  </script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="js/semantic.min.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () {
      ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview')

  </script>
  <!-- <script src="https://www.google-analytics.com/analytics.js" async defer></script> -->
</body>

</html>
