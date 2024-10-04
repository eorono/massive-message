<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use NotificationChannels\Discord\Discord;

class Contact extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slack_id',
        'discord_chat_id',
        'whatsapp_id',
        'telegram_user_id',
    ];

    public function routeNotificationForDiscord($notification)
    {
        return app(Discord::class)->getPrivateChannel($this->discord_chat_id);

    }
}
