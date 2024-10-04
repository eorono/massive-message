<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Slack\SlackMessage;
use NotificationChannels\Discord\DiscordMessage;
use NotificationChannels\Telegram\TelegramMessage;


class NewMessage extends Notification
{
    use Queueable;

    public $message;

    public $via;

    /**
     * Create a new notification instance.
     */
    public function __construct($message, $via)
    {
        $this->message = $message;
        $this->via = $via;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return [$this->via];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }

    public function toSlack($notifiable)
    {
        return (new SlackMessage)
            ->to($notifiable->slack_id)
            ->text($this->message);
    }

    public function toTelegram($notifiable)
    {
        return TelegramMessage::create()
            ->to($notifiable->telegram_user_id)
            ->content($this->message);
    }

    public function toDiscord($notifiable): DiscordMessage
    {
        return DiscordMessage::create()
            ->body($this->message);
    }
}
