<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>chAJAX!</title>
		<link rel="stylesheet" href="../css/chat.css">
		<script src="../js/jquery.min.js" charset="utf-8"></script>
		<script src="../js/chatControl.js" charset="utf-8"></script>
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
				<td class="titre">chAJAX</td>
			</tr>

			<tr > <!-- Zone d'affichage du chat -->
				<td style="height:500px">
					<div class="chat_aff" id="chat_aff">

					</div>
				</td>
			</tr>

			<tr > <!-- Zone de saisie du chat -->
				<td class="form" valign="center">

					<table class="form2">

						<tr>
							<td style="width:30%">
								<label for="name">
									Pseudo
								</label>
							</td>
							<td style="width:60%">
								<label for="message">
									Message
								</label>
							</td>
							<td></td>
						</tr>

						<tr>
							<td>
								<input class="name" id="name" type="text"  maxlength="25">
							</td>
							<td>
								<input class="message" id="message" type="text" maxlength="250">
							</td>
							<td>
								<button class="submit" id="submit">Envoyer</button>
							</td>
						</tr>

					</table>
				</td>
			</tr>

			<tr class="footer"> <!-- Footer du chat -->
				<td>
					<p>
						Les messages seront supprimés 30mn après leurs publications
					</p>
				</td>
			</tr>

		</table>

	</body>

</html>
