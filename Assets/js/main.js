var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

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
