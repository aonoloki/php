<table id="table_message"> <!-- Corps des messages -->

<?php

while($don = $message->fetch()) { // Pour chaque message ($don étant la variable attaché au message)
	if(pair($don['ID'])) { // Si l'ID du message est pair
		$color = "rgba(50, 50, 50, 0.5)";
		$border = "inset 0 0 10px rgb(65, 131, 215)";
	} else { // Si l'ID du message est impair
		$color = "rgba(30, 30, 30, 0.5)";
		$border = "inset 0 0 10px rgb(207, 0, 15)";
	}

?>

<tr style="background-color:<?php echo $color; ?>"> <!-- Application de la couleur du message -->

	<td class="info_message" style="box-shadow:<?php echo $border; ?>" valign="top">
		<span style="font-size:small">
			<?php
				if($don['user_name'] == "")
					echo "Invité";
				else
					echo "De ".$don['user_name']; // Affichage du pseudo de l'auteur du message
			?>
		</span>
	</br>
		<?php
			echo getRelativeTime($don['posted_at']); // Affichage de l'heure d'envoi du message
		?>
	</td>

	<td class="message" style="box-shadow:<?php echo $border; ?>">
		<div class="message2">
			<?php
				if($don['message'] == "")
					echo "Je suis vidé";
				else
					echo $don['message']; // Affichage du message
			?>
		</div>
	</td>

</tr>


<?php
} // Fin de la boucle while (Ligne 5)
?>
</table>
