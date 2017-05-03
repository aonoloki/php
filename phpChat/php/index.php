<?php

require_once ('user_config.php');

if($user->is_loggedin()!="") {
 $user->redirect('chat.php');
}

if(isset($_POST['submit'])) {
 $uname = $_POST['ulog'];
 $umail = $_POST['ulog'];
 $upass = $_POST['upass'];

 if($user->doLogin($uname,$umail,$upass)) {
  $user->redirect('chat.php');
 } else {
  $error = "ça ne colle pas !";
  echo $upass;
 }
}

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>chAJAX!</title>
</head>
<body>
<div>
  <div>
    <form method="post">
      <h2>
        Connexion
      </h2>
      <?php if(isset($error)) { ?>
      <div>
        <?php echo $error; ?> !
      </div>
      <?php } ?>
      <div>
        <input type="text" name="ulog" placeholder="Pseudo ou email" required>
      </div>
      <div>
        <input type="password" name="upass" placeholder="Mot de passe" required>
      </div>
      <div>
        <button type="submit" name="submit">
          Connexion
        </button>
      </div>
      <label>
        Inscrivez vous
          <a href="sign_up.php">ici !</a>
      </label>
    </form>
  </div>
</div>

</body>
</html>
