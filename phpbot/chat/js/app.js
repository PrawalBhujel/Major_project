$(document).ready(function() {
    $("#loadmsg").slideDown(500);
    $('#svglogo').effect('shake',{duration: 500, times: 2});
    setTimeout(function(){
        $("#loadmsg").slideUp(500);
        $('#svglogo').effect('shake',{duration: 500, times: 2});
    },3000);

    $('#message').on('keydown', function(event) {
      if (event.keyCode === 13) {
        $(".send__button").click();
      }
    });


$(".send__button").click(function(){
        var message = $('#message').val().trim();
        if(message!="" && message!=null){
            $(".response").removeClass("fadeanimation");
            $.ajax({
                type: "POST",
                url: "chatbot/chatbot.php",
                data: {message: message},
                success: function (response) {
                    response = JSON.parse(response);  
                    if(response.code==69){
                        var html = '<div class="row p-0 justify-content-end m-0"><div class="col-lg-5 col-md-9 col-12 p-2 border my-lg-0 my-2 rounded-3 border-primary bg-primary bg-gradient bg-opacity-50">'+  message + '</div></div>';
                        html += '<div class="row p-0 justify-content-start m-0"><div class="col-lg-5 col-md-9 col-12 my-lg-0 my-2 border border-dark response p-2 rounded-3 fadeanimation bg-secondary bg-gradient bg-opacity-25">' + response.answer + '</div></div>';
                        $("#chats").html($("#chats").html()+html);
                        $('#message').val("");
                        $("#chats").scrollTop($("#chats").prop('scrollHeight'));
                    }
                    else{
                        var html = '<div class="row p-0 justify-content-end m-0"><div class="col-12 error_message fadeout border my-lg-0 my-2 rounded-3 border-danger bg-danger bg-gradient bg-opacity-25 p-2 text-center"> Error Occured: '+  response.error + '</div></div>';
                        $("#chats").html($("#chats").html()+html);
                        $(".error_message").fadeOut(2000);
                        setTimeout(function(){$("#chats").html("")},2000);
                    }
                }
            });    
        }
    });

});
