<?php

namespace App\Http\Controllers;

use App\Notifications\DiscordNotification;
use App\Notifications\SlackNotification;
use Illuminate\Http\Request;
use App\Notifications\TelegramNotification;

class NotificationController extends Controller
{
    public function showForm()
    {
        return view('send-notification');
    }

    public function sendNotificationTelegram(Request $request)
    {
        $request->validate([
            'telegram_user_ids' => 'required',
            'message' => 'required|string|max:255',
        ]);

        $telegramUserIds = is_array($request->telegram_user_ids) ? $request->telegram_user_ids : explode(',', $request->telegram_user_ids);
        $message = $request->message;

        foreach ($telegramUserIds as $telegramUserId) {
            \Notification::route('telegram', $telegramUserId)
                ->notify(new TelegramNotification($message, $telegramUserId));
        }

        return back()->with('success', 'Notifications sent successfully!');
    }

    public function sendNotification(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $message = $request->message;

        \Notification::route('slack', config('services.slack.notifications.social_channel'))
            ->notify(new SlackNotification($message));

        return back()->with('success', 'Notification sent successfully!');
    }
}
