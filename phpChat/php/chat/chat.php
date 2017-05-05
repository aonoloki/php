<?php

include_once ('../user/user_config.php');

if(!$user->is_loggedin()) {

}

$user_id = $_SESSION['user_session'];
$stmt = $DB_con->prepare("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>chAJAX!</title>
		<link rel="stylesheet" href="../../css/chat.css">
    <link rel="icon" href="../../img/favicon.ico">
		<script src="../../js/jquery.min.js" charset="utf-8"></script>
		<script src="../../js/chatControl.js" charset="utf-8"></script>
	</head>
	<!-- Ahouuuuuuuuu
                     .
                    / V\
                  / `  /
                 <<   |
                 /    |
               /      |
             /        |
           /    \  \ /
          (      ) | |
  ________|   _/_  | |
<__________\______)\__)
	-->
	<body>

		<table class="body">
			<tr> <!-- Header du chat -->
				<td class="head">
          <img src="../../img/cat.png" style="width:30px;"> Bienvenue dans le chAJAX <?php print($userRow['user_name']); ?> <img src="../../img/cat.png" style="width:30px;">
        </td>
			</tr>

			<tr > <!-- Zone d'affichage du chat -->
				<td style="height:500px" class="aff">
					<div class="chat_aff" id="chat_aff">

					</div>
				</td>
			</tr>


			<tr > <!-- Zone de saisie du chat -->
				<td class="form" valign="center">

  					<table class="form2">

  						<tr>
  							<td style="width:100%" class="notice">
  								<label for="message">
  									Tapez votre message
  								</label>
  							</td>
  						</tr>

  						<tr>
  							<td>
  								<input class="message" id="message" type="text" maxlength="250">
  							</td>
  							<td>
  								<button class="submit" id="submit">Envoyer</button>
  							</td>
                <td>
  								<input class="name" id="name" type="text" hidden="true" disabled="true" value="<?php print($userRow['user_name']); ?>">
  							</td>
  						</tr>

  					</table>

        </td>
			</tr>



			<tr class="footer"> <!-- Footer du chat -->
				<td>
					<p class="notice">
						Les messages seront supprimés 30mn après leurs publications
					</p>
				</td>
			</tr>
			<tr class="footer">
				<td>
					<a href="../user/logout.php?logout=true">Déconnexion</a>
				</td>
			</tr>

		</table>

	</body>

</html>
