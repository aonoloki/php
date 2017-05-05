<?php

  function bdd() { // Connexion à la base de donnée
  	define('MYSQL_HOST', 'localhost');
  	define('MYSQL_USER', 'root');
  	define('MYSQL_PASSWD', 'root');
  	define('MYSQL_DB', 'chat');

  	try { // Test de connexion
  	  return $db = new PDO ('mysql:=' . MYSQL_HOST . ';dbname=' . MYSQL_DB, MYSQL_USER, MYSQL_PASSWD);
  	  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  	  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  	} catch (PDOException $e) {
  	  $e->getMessage();
  	}
  }

?>
