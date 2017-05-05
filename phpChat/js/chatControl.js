$(function(){
  setInterval(function() { // Interval de rafraichissement du chat (Chaque seconde, par défaut)
  	$("#chat_aff").load("control.php",function(){});
  },1000); // 1 000 millisecondes = 1 seconde

  $('#message').keyup(function(e){
    if(e.keyCode == 13) {
      $("#submit").trigger("click");
    }
  });

  $("#submit").click(function() { // Lors de l'envoi
  	var name = $("#name").val(); // La variable name récupère le pseudo de l'utilisateur
  	var message = $("#message").val(); // La variable message récupère le message de l'utilisateur

  	$("#message").val(""); // La zone d'écriture de message est vidée

  	$.ajax({ // Début de la requête AJAX
  	  type : 'GET', // Méthode d'envoi
  	  url : 'control.php?name='+name+'&message='+message, // Envoi des variables vers control.php
  	});
  });
})
