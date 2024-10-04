<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Notifications\DiscordNotification;
use App\Notifications\NewMessage;
use App\Notifications\SlackNotification;
use Illuminate\Http\Request;
use App\Notifications\TelegramNotification;
use NotificationChannels\Discord\DiscordChannel;
use NotificationChannels\WhatsApp\WhatsAppChannel;

class NotificationController extends Controller
{
    public function showForm()
    {
        return view('message.create');
    }

    public function sendNotification(Request $request)
    {

        $data = $request->validate([
            'platform' => 'required',
            'ids' => 'string|nullable',
            'message' => 'required|string|max:255',
        ]);

        if ($data['platform'] === 'discord') {
            $platform = DiscordChannel::class;
        }else if ($data['platform'] === 'whatsapp') {
           $platform = WhatsAppChannel::class;
        }else {
            $platform = $data['platform'];
        }


        Contact::find($data['ids'])->notify(new NewMessage($data['message'], $platform));

        return back()->with('success', 'Notification sent successfully!');
    }
}
