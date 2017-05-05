<?php

require_once ('user_config.php');

if($user->is_loggedin()!="") {
  $user->redirect('../chat/chat.php');
}

if(isset($_POST['submit'])) {
  $uname = trim($_POST['user_name']);
  $umail = trim($_POST['umail']);
  $upass = trim($_POST['upass']);

  if($uname=="") {
    $error[] = "Il faut un pseudo !";
  } else if($umail=="") {
    $error[] = "Il faut un email !";
  } else if(!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
    $error[] = 'Valider votre email !';
  } else if($upass=="") {
    $error[] = "Un mot de passe est requis !";
  } else if(strlen($upass) < 6){
    $error[] = "Le mot de passe doit faire 6 lettres minimum";
  } else {
    try {
      $stmt = $DB_con->prepare("SELECT user_name, user_email FROM users WHERE user_name=:uname OR user_email=:umail");
      $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
      $row=$stmt->fetch(PDO::FETCH_ASSOC);

      if($row['user_name']==$uname) {
        $error[] = "Ce pseudo est déjà utilisé :(";
      } else if($row['user_email']==$umail) {
        $error[] = "Cet email est déjà utilisé !";
      } else {
        if($user->register($uname,$umail,$upass)) {
          $user->redirect('../../index.php?joined');
        }
      }
    } catch(PDOException $e) {
      echo $e->getMessage();
    }
  }
}

?>

<!DOCTYPE html">
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Inscription chAJAX!</title>
  <link rel="stylesheet" href="../../css/master.css">
</head>
<body>
  <div class="wrapper">
    <div class="log">
      <form method="post">
        <h2 class="title">
          S'inscrire au chAJAX
        </h2>
        <?php
          if(isset($error)) {
            foreach($error as $error) {
        ?>
        <div class="error">
          <?php echo $error; ?>
        </div>
        <?php
          }
        }
        ?>
        <div>
          <input class="connect" type="text" name="user_name" placeholder="Entrer votre pseudo" value="<?php if(isset($error)){echo $uname;}?>">
        </div>
        <div>
          <input class="connect" type="text" name="umail" placeholder="Entrer votre email" value="<?php if(isset($error)){echo $umail;}?>">
        </div>
        <div>
          <input class="connect" type="password" name="upass" placeholder="Entrer votre mot de passe">
        </div>
        <div>
          <button class="connect" type="submit" name="submit">
            Inscription
          </button>
        </div>
        <label class="help">
          Vous avez un compte ? <a href="../../index.php">Connectez vous !</a>
        </label>
      </form>
    </div>
  </div>

</body>
</html>
