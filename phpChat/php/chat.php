<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>chAJAX!</title>
		<link rel="stylesheet" href="../css/chat.css">
		<script src="../js/jquery.min.js" charset="utf-8"></script>
		<script src="../js/chatControl.js" charset="utf-8"></script>
	</head>
	<body>

		<table class="body">
			<tr>
				<td class="titre">chAJAX</td>
			</tr>

			<tr >
				<td style="height:500px">
					<div class="chat_aff" id="chat_aff">

					</div>
				</td>
			</tr>

			<tr >
				<td class="form" valign="top">

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

		</table>

	</body>
</html>
