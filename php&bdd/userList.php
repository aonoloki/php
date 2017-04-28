<?php

//connect to database
require_once ('config.php');

?>

<!DOCTYPE html>
<html lang="fr">
 <head>
   <meta charset="UTF-8">
   <title>Document</title>
 </head>
 <style>

 td {
   border: 1px black solid;
   width: 150px;
   text-align: center;
 }

 </style>
 <body>

  <table>
    <thead>
      <tr>
       <td>firstname</td>
       <td>lastname</td>
       <td>email</td>
       <td>username</td>
       <td>adresse</td>
      </tr>
    </thead>
  </table>

  <?php
    $listing = $PDO->query("SELECT * FROM users");
    foreach ($listing as $data){
  ?>
  <table>
    <tbody>
      <tr>
        <td><?php echo $data->firstname; ?></td>
        <td><?php echo $data->lastname; ?></td>
        <td><?php echo $data->email; ?></td>
        <td><?php echo $data->username; ?></td>
        <td><?php echo $data->adresse; ?></td>
      </tr>
    </tbody>
  </table>
  <?php } ?>
 </body>
</html>
