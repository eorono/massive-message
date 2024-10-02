<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class TelegramNotification extends Notification
{
    use Queueable;

    protected $message;
    protected $telegramUserId;

    public function __construct($message, $telegramUserId)
    {
        $this->message = $message;
        $this->telegramUserId = $telegramUserId;
    }

    public function via($notifiable)
    {
        return ['telegram'];
    }

    public function toTelegram($notifiable)
    {
        return TelegramMessage::create()
            ->to($this->telegramUserId)
            ->content($this->message);
    }
}
