<?php
require_once("model.php"); // Invoque le fichier model.php
$bdd = bdd(); // Evite une erreur de variable non existante, et une erreur sur une requête nulle

	if(isset($_GET['name']) AND isset($_GET['message'])) { // Si l'utilisateur à écrit son pseudo et écrit un message
		ajout_message($bdd,$_GET['name'],$_GET['message']); // Envoi des valeurs données au pseudo et au message
	} else { // Si aucune action de l'utilisateur
		expire_message($bdd); // Suppression des anciens messages
		$message = message($bdd); // Affichage des messages existants
		require_once("view.php"); // Invoque le fichier view.php
	}

?>
