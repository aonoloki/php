<?php

function bdd(){
  return $db = new PDO('mysql:host=localhost; dbname=chat; charset=utf-8', 'root', 'root');
}

function add_message($bdd, $pseudo, $message){
  $req = $bdd->prepare("INSERT INTO message(pseudo, message, created_at) VALUES(:pseudo, :message, NOW())");

  $req->execute(array("pseudo"=>$pseudo, "message"=>$message));
}

function message($bdd){
  $req = $bdd->query("SELECT * FROM message ORDER BY created_at DESC");

  return $req;
}

function pair($nombre){
  if ($nombre%2 == 0){
    return true;
  }else{
    return false;
  }
}

if(pair($don['ID'])){
  $color = "#EEE";
}else{
  $color = "#AAA";
}

function getRelativeTime($created_at){
  // Déduction de la date
  $time = time() - strtotime($created_at);

  // Vérifie si la date est passée ou non
  if ($time > 0){
    $when = "il y a";
  }else if ($time < 0){
    $when = "dans environ";
  }else{
    return "il y a 1 seconde";
  }
  $time = abs($time);

  // Tableau des unités et de leurs valeurs en secondes
  $times = array(
    31104000 =>  'an{s}',       // 12 * 30 * 24 * 60 * 60 secondes
    2592000  =>  'mois',        // 30 * 24 * 60 * 60 secondes
    86400    =>  'jour{s}',     // 24 * 60 * 60 secondes
    3600     =>  'heure{s}',    // 60 * 60 secondes
    60       =>  'minute{s}',   // 60 secondes
    1        =>  'seconde{s}',  // 1 seconde
  );

  foreach ($times as $seconds => $unit){
    $delta = round($time / $seconds);

    if($delta >= 1){
      // Pour le singulier ou pluriel
      if($delta == 1){
        $unit = str_replace('{s}', '', $unit);
      }else{
        $unit = str_replace('{s}', 's', $unit);
      }
      return $when." ".$delta." ".$unit;
    }
  }
}

?>

<tr style="background-color: <?php echo '$color'; ?>">
  <!-- Cellule pseudo -->
  <td class="info_message" valign="top">
    <span style="font-size:10px">
      <?php
      echo "De ".$don['pseudo'];
      ?>
    </span>
    <br>
    <?php
    echo getRelativeTime($don['created_at']);
    ?>
  </td>

  <!-- Cellule message -->
  <td class="message">
    <div class="umessage">
      <?php
      echo $don['message'];
      ?>
    </div>
  </td>
</tr>
