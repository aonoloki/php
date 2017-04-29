$(function(){

  setInterval(function(){
	$(".display").load("control.php",function(){});
	},1000);

  $("#submit").click(function(){
    var pseudo = $("#pseudo").val();
    var message = $("#message").val();

    $("#message").val("");

    $.ajax({
      type : 'GET',
      url : 'control.php?pseudo='+pseudo+'&message='+message
    });
  })
})
