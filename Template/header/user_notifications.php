<span class="notification">
<?php if ($this->user->hasNotifications()): ?>
<div id="soundalert"></div>
    <?= $this->modal->mediumIcon('bell web-notification-icon', t('Unread notifications'), 'SoundNotificationController', 'show', array('plugin' => 'SoundNotification', 'user_id' => $this->user->getId())) ?>
<?php else: ?>
    <?= $this->modal->mediumIcon('bell', t('My notifications'), 'SoundNotificationController', 'show', array('plugin' => 'SoundNotification', 'user_id' => $this->user->getId())) ?>
<?php endif ?>
</span>
