   function soundalert()
    {
        $.ajax({
           type: "GET",
           url: "?controller=SoundNotificationController&action=soundNotifications&plugin=SoundNotification",
           cache: false,
           success: function(response){
              $("#soundalert").hide().html(response);
            }
       });
    }

    soundalert(); 

    setInterval(soundalert, 5000);