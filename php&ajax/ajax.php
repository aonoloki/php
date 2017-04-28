<?php
  // Renvoyer le tableau avec toute les valeurs
  // print_r($_POST);

  // Renvoyer une valeur précise
  // echo $_POST["lastname"] . "\n";
  // echo $_POST["firstname"] . "\n";
  // echo $_POST["email"] . "\n";
  // echo $_POST["tel"] . "\n";

  // Vérification de champ
  if($_POST["lastname"] == "ok")
    echo true;
  else
    echo false;

?>
