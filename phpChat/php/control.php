<?php

  require_once("model.php");
  $bdd = bdd();

  if(isset($_GET['name']) AND isset($_GET['message'])){
    // Si les donnéees sont présentent
    ajout_message($bdd, $_GET['name'], $_GET['message']);
  }else{
    // Si aucune donnée
    expire_message($bdd);
    $message = message($bdd);
    require_once("view.php");
  }

?>
