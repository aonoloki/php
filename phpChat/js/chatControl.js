$(function(){
  setInterval(function() { // Interval de rafraichissement du chat (Chaque seconde, par défaut)
  	$("#chat_aff").load("control.php",function(){});
  },1000); // 1 000 millisecondes = 1 seconde

  $("#submit").click(function() { // Lors du click sur envoi
  	var name = $("#name").val(); // La variable name récupère le pseudo de l'utilisateur
  	var message = $("#message").val(); // La variable message récupère le message de l'utilisateur

    // if($(name) == "" || $(message) == "")){
    //   $(".message:last-child").append("<div class=\"message2\" style=\"background-color:red;\">Vous devez être connecté ou notez un message pour envoyer</div>");
    //   return false
    // } else {
  	  $("#message").val(""); // La zone d'écriture de message est vidée

  	  $.ajax({ // Début de la requête AJAX
  		  type : 'GET', // Méthode d'envoi
  		  url : 'control.php?name='+name+'&message='+message, // Envoi des variables vers control.php
  	  });
    // }
  });
})
