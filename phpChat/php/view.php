<table id="table_message"> <!-- Corps des messages -->

<?php

while($don = $message->fetch()) { // Pour chaque message ($don étant la variable attaché au message)
	if(pair($don['ID'])) { // Si l'ID du message est pair
		$color = "#EEE";
	} else { // Si l'ID du message est impair
		$color = "#CCC";
	}



?>

<tr style="background-color:<?php echo $color; ?>"> <!-- Application de la couleur du message -->

	<td class="info_message" valign="top">
		<span style="font-size:small">
			<?php
				echo "De ".$don['Pseudo']; // Affichage du pseudo de l'auteur du message
			?>
		</span>
	</br>
		<?php
			echo getRelativeTime($don['Date']); // Affichage de l'heure d'envoi du message
		?>
	</td>

	<td class="message" >
		<div class="message2" >
			<?php
				echo $don['Message']; // Affichage du message
			?>
		</div>
	</td>

</tr>


<?php
} // Fin de la boucle while (Ligne 5)
?>
</table>
