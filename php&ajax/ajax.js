$(function(){
  $("form").on('submit', function(e){
    e.preventDefault()

    data = {
      lastname : $('#lastname').val(),
      firstname : $('#firstname').val(),
      email : $('#email').val(),
      tel : $('#tel').val()
    }

    $.ajax({
      method : "POST",
      url : "ajax.php",
      data : data,
      success : function(v){
        if(v == true){
          $('#lastname').css('background', 'green')
        }else{
          $('#lastname').css('background', 'red')
        }
      }
    })
  })
})
