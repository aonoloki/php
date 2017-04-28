<?php

require_once('config.php');

?>

<!DOCTYPE html>
<html lang="fr">
 <head>
   <meta charset="UTF-8">
   <title>Document</title>
 </head>
 <body>
   <form action="config.php" method="POST">
     <input type="text" id="lastname" name="lastname" maxlength="50" placeholder="Nom"><br>
     <input type="text" id="firstname" name="firstname" maxlength="50" placeholder="Prénom"><br>
     <input type="text" id="email" name="email" placeholder="Email"><br>
     <input type="password" id="passwd" name="passwd" placeholder="Mot de passe"><br>
     <input type="username" id="username" name="username" placeholder="Pseudo"><br>
     <input type="adresse" id="adresse" name="adresse" placeholder="Adresse"><br>
     <input type="submit" name="submit">
   </form>
 </body>
</html>
