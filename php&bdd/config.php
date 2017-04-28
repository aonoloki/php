<?php

define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWD', 'root');
define('MYSQL_DB', 'cour26Avril');

try {
  $PDO = new PDO ('mysql:=' . MYSQL_HOST . ';dbname=' . MYSQL_DB, MYSQL_USER, MYSQL_PASSWD);
  $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
  $e->getMessage();
}

$req = $PDO->prepare('SELECT * FROM users');
$req->execute();

if(isset($_POST["submit"])){
  if($_POST["lastname"] != "" && $_POST["firstname"] != "" && $_POST["email"] != "" && $_POST["passwd"] != "" && $_POST["username"] != "" && $_POST["adresse"] != ""){
    echo "Le formulaire est bien rempli" . "<br>";
    $mailtest = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    if($mailtest){
      $test = $PDO->query("SELECT COUNT(*) AS test FROM users WHERE email='" . $_POST["email"] . "'");
      $result = $test->fetch();
      if($result->test == 0){
        $req = $PDO->prepare("INSERT INTO users (lastname, firstname, email, passwd, username, adresse) VALUES(:lastname, :firstname, :email, :passwd, :username, :adresse)");
        $req->bindValue(':lastname', $_POST["lastname"]);
        $req->bindValue(':firstname', $_POST["firstname"]);
        $req->bindValue(':email', $_POST["email"]);
        $req->bindValue(':passwd', sha1($_POST["passwd"]));
        $req->bindValue(':username', ($_POST["username"]));
        $req->bindValue(':adresse', ($_POST["adresse"]));
        if($req->execute()){
          echo "Sauvegarde ok!" . "<br>";
        }else{
          echo "Sauvegarde raté D:" . "<br>";
        }
      }else{
        echo "Ce mail est déjà utilisé" . "<br>";
      }
    }else{
      echo "Ce n'est pas un mail valide" . "<br>";
    }
  }else{
    echo "Il manque des informations" . "<br>";
  }

}else{

}

?>

<a href="index26.php"><button type="button" name="button">back to form</button></a>
<a href="userList.php"><button type="button" name="button">Check users list</button></a><br>
