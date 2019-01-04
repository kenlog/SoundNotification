<?php

namespace Kanboard\Plugin\SoundNotification;

use Kanboard\Core\Plugin\Base;

/**
 * SoundNotification Plugin
 *
 * @package  SoundNotification
 * @author   Valentino Pesce
 */
class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on("template:layout:css", array("template" => "plugins/SoundNotification/Assets/css/style.css"));
        $this->hook->on('template:layout:js', array('template' => 'plugins/SoundNotification/Assets/js/main.js'));
        $this->template->setTemplateOverride('header/user_notifications', 'SoundNotification:header/user_notifications');
    }

    public function getPluginName()
    {
        return 'SoundNotification';
    }

    public function getPluginDescription()
    {
        return 'Each new notification will sound an alert sound.';
    }

    public function getPluginAuthor()
    {
        return 'Valentino Pesce';
    }

    public function getPluginVersion()
    {
        return '1.1.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/kenlog/SoundNotification';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.48';
    }
}
