<?php

require_once ('php/user/user_config.php');

if($user->is_loggedin()!="") {
 $user->redirect('php/chat/chat.php');
}

if(isset($_POST['submit'])) {
 $uname = $_POST['ulog'];
 $umail = $_POST['ulog'];
 $upass = $_POST['upass'];

 if($user->doLogin($uname,$umail,$upass)) {
  $user->redirect('php/chat/chat.php');
 } else {
  $error = "ça ne colle pas";
 }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>chAJAX!</title>
  <link rel="stylesheet" type="text/css" href="css/master.css">
</head>
<body>
<div class="wrapper">
  <div class="log">
    <form method="post">
      <h2 class="title">
        Bienvenue sur le chAJAX
      </h2>
      <?php if(isset($error)) { ?>
      <div class="error">
        <?php echo $error; ?>
      </div>
      <?php } ?>
      <div>
        <input class="connect" type="text" name="ulog" placeholder="Pseudo ou email" required>
      </div>
      <div>
        <input class="connect" type="password" name="upass" placeholder="Mot de passe" required>
      </div>
      <div>
        <button class="connect" type="submit" name="submit">
          Connexion
        </button>
      </div>
      <label class="help">
        Si vous ne disposez pas encore d'un compte, inscrivez vous
          <a href="php/user/sign_up.php">ici !</a>
      </label>
    </form>
  </div>
</div>

</body>
</html>
