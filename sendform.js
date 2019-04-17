$('#form').submit(function(e){
    e.preventDefault();
    var pseudo = $('#pseudo').val();
    var message = $('#message').val();
    $.ajax({
        url : 'sendmessage.php', 
            type : 'POST',
            data : 'pseudo='+ pseudo +'&message='+ message,
            success : function (data) {
                console.log(' pseudo :'+pseudo+' message :'+message);
                console.log(data);
            }
        })
    })
