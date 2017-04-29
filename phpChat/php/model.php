<?php
function bdd()
{
	define('MYSQL_HOST', 'localhost');
	define('MYSQL_USER', 'root');
	define('MYSQL_PASSWD', 'root');
	define('MYSQL_DB', 'chat');

	try {
	  return $db = new PDO ('mysql:=' . MYSQL_HOST . ';dbname=' . MYSQL_DB, MYSQL_USER, MYSQL_PASSWD);
	  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	} catch (PDOException $e) {
	  $e->getMessage();
	}
}
function ajout_message($bdd,$pseudo,$message)
{
	$req = $bdd->prepare("INSERT INTO message(Pseudo,Message,Date) VALUES(:Pseudo,:Message,NOW())");
	$req->execute(array("Pseudo"=>$pseudo,"Message"=>$message));
}

function message($bdd)
{
	$req = $bdd->query("SELECT * FROM message ORDER BY Date ASC");

	return $req;
}

function expire_message($bdd)
{

	$req = $bdd->query("DELETE FROM message WHERE Date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)");

}

function pair($nombre)
{
    if ($nombre%2 == 0) return true;
    else return false;
}

function getRelativeTime($date) {
    // Déduction de la date donnée à la date actuelle
    $time = time() - strtotime($date);

    // Calcule si le temps est passé ou à venir
    if ($time > 0) {
        $when = "il y a";
    } else if ($time < 0) {
        $when = "dans environ";
    } else {
        return "il y a 1 seconde";
    }
    $time = abs($time);

    // Tableau des unités et de leurs valeurs en secondes
    $times = array( 31104000 =>  'an{s}',       // 12 * 30 * 24 * 60 * 60 secondes
                    2592000  =>  'mois',        // 30 * 24 * 60 * 60 secondes
                    86400    =>  'jour{s}',     // 24 * 60 * 60 secondes
                    3600     =>  'heure{s}',    // 60 * 60 secondes
                    60       =>  'minute{s}',   // 60 secondes
                    1        =>  'seconde{s}'); // 1 seconde

    foreach ($times as $seconds => $unit) {
        // Calcule le delta entre le temps et l'unité donnée
        $delta = round($time / $seconds);

        // Si le delta est supérieur à 1
        if ($delta >= 1) {
            // L'unité est au singulier ou au pluriel ?
            if ($delta == 1) {
                $unit = str_replace('{s}', '', $unit);
            } else {
                $unit = str_replace('{s}', 's', $unit);
            }
            // Retourne la chaine adéquate
            return $when." ".$delta." ".$unit;
        }
    }
}
?>
