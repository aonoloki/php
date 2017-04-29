$(function(){
  setInterval(function(){
  	$("#chat_aff").load("control.php",function(){});
  },1000);

  $("#submit").click(function(){
  	var name =  $("#name").val();
  	var message = $("#message").val();

  	$("#message").val("");

  	$.ajax({
  		async: false ,
  		type: 'GET',
  		url: 'control.php?name='+name+'&message='+message
  	});
  });
})
