var baseUrl = window.location.protocol + "//" + window.location.host + "/";

function soundalert()
{
    $.ajax({
       type: "GET",
       url: baseUrl+"?controller=SoundNotificationController&action=soundNotifications&plugin=SoundNotification",
       cache: false,
       success: function(response)
        {
            if (response != "") {
                $("#soundalert").hide().html(response);
            }
        }
   });
}

soundalert(); 

setInterval(soundalert, 5000);