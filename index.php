<?php

  // Part 1 (suite dans l'html)
  // Déclaration de variable
  $a = "Je sais";

  // Part 2
  // Initialisiation de fonction
  function funcName($arg1, $arg2, $arg3="!"){
    echo $arg1 . " " . $arg2 ." " . $arg3;
  }

  // Assignement de valeurs pour les arguments
  funcName("Hey", "oh");

  // Part 3
  function ifFunc($a1, $a2=null, $a3=null){
    return $a1 . " " . $a2 ." " . $a3;
  }

  if(ifFunc("Test") == "Test"){ // Retourne Bad car la concaténation rajoute deux espaces
    echo "Niceuu" . "<br>";
  }else{
    echo "Bad" . "<br>";
  }

  // Part 4
  // EXO 1
  // Créer une fonction qui prend 2 arguments, dont le premier vaut par défaut 80
  // Le 2e est obligatoire, soustrait et faire un echo du résultat

  function calcul($n1="80", $n2){
    return ($n1 - $n2);
  }

  echo calcul(40, 20) . "<br>";

  // Part 5
  // Création de tableau
  $tab = array(
    "ror" => "dylan",
    "php" => "gaelle",
    "tabInTab" => array(
      "mysql" => "chris"
    ),
    "secTabInTab" => array(
      "js", "c++"
    )
  );

  // Afficher la valeur de la clé ror
  echo $tab["ror"] . "<br>";
  // Afficher la valeur de la clé mysql
  echo $tab["tabInTab"]["mysql"] . "<br>";
  // Afficher la clé c++
  echo $tab["secTabInTab"][1] . "<br>";

  // Part 6
  // Création d'un tableau de valeur
  $languages = array (
    "html", "css", "js", "php", "ruby", "c++"
  );
  // Affichage de toutes les valeurs
  foreach ($languages as $value) {
    echo " " . $value . "<br>";
  }

  // EXO 2
  // Créer un formulaire avec un champ select "activité""
  // Créer un tableau PHP avec les activités et les insérés dans le champ select
  $tab = array(
    "html" => "html",
    "css" => "css",
    "js" => "js",
    "c++" => "c++"
  );

  $html = '';
  foreach($tab as $key => $value)
  {
      $html.= "<option value='$key'>$value</option>";
  }
  // suite dans l'html

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>

    <div>
      <!-- Part 1 suite: Condition ternaire -->
      <?php echo ($a == "Je ne sais pas") ? "Mais si tu sait" : "Inculte"; ?>
    </div>

    <!-- suite EXO 1 -->
    <form class="" action="/" method="post">
      <?php echo "<select name=\"languages\">$html</select>"; ?>
    </form>

  </body>
</html>
