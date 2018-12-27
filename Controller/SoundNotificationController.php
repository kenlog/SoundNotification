<?php

namespace Kanboard\Plugin\SoundNotification\Controller;

/**
 * Sound notification controller
 *
 * @package  Kanboard\Plugin\SoundNotification\Controller
 * @author   Valentino Pesce
 */
class SoundNotificationController extends \Kanboard\Controller\WebNotificationController
{

    public function soundNotifications()
    {
        $user = $this->userSession->getId();

        if ($this->userUnreadNotificationModel->hasNotifications($user)) {
            $notifications = $this->userUnreadNotificationModel->getAll($user);

            foreach ($notifications as $value) {
                $timestamp = $value['date_creation'];
            }

            if($timestamp > strtotime("-10 seconds")) {
                $this->response->html(
                    '<audio controls autoplay style="display: none!important;">
                        <source src="'.$this->helper->url->dir().'plugins/SoundNotification/Assets/Audio/sound-notification-2.mp3" type="audio/mpeg">
                        <source src="'.$this->helper->url->dir().'plugins/SoundNotification/Assets/Audio/sound-notification-2.ogg" type="audio/ogg">
                    </audio>'
                );
            }
        }
    }
}
