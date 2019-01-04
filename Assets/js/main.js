/*
 * Sound notification for kanboard
 * Licensed under the MIT license - SoundNotification/LICENSE
 * https://github.com/kenlog/SoundNotification
 * Copyright (c) 2018 Valentino Pesce - https://iltuobrand.it
 */

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
                $("#soundalert").html(response);
            }
        }
   });
}

soundalert(); 

setInterval(soundalert, 5000);
