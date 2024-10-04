<!-- resources/views/contacts/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Contacts') }}
            </h2>
            <a href="{{ route('contacts.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Back to Index</a>
        </div>
    </x-slot>
    <div class="bg-gray-800 shadow-md rounded my-6 p-6">
        <form action="{{ route('contacts.update', $contact->id) }}" method="PUT">
            @csrf
            <div class="mb-4 items-center">
                <label for="name" class="block text-white">Name</label>
                <input type="text" name="name" value="{{$contact->name}}" id="name" class="w-1/3 px-4 py-2 border rounded bg-gray-700 text-gray-950" required>
            </div>
            <div class="mb-4">
                <label for="discord_id" class="block text-white">Discord ID</label>
                <input type="text" name="discord_chat_id" value="{{$contact->discord_chat_id}}" id="discord_chat_id" class="w-1/3 px-4 py-2 border rounded bg-gray-700 text-gray-950" required>
            </div>
            <div class="mb-4">
                <label for="telegram_id" class="block text-white">Telegram ID</label>
                <input type="text" name="telegram_user_id" value="{{$contact->telegram_user_id}}" id="telegram_user_id" class="w-1/3 px-4 py-2 border rounded bg-gray-700 text-gray-950" required>
            </div>
            <div class="mb-4">
                <label for="slack_id" class="block text-white">Slack ID</label>
                <input type="text" name="slack_id" value="{{$contact->slack_id}}" id="slack_id" class="w-1/3 px-4 py-2 border rounded bg-gray-700 text-gray-950" required>
            </div>
            <div class="mb-4">
                <label for="whatsapp_id" class="block text-white">Whatsapp ID</label>
                <input type="text" name="whatsapp_id" value="{{$contact->whatsapp_id}}" id="whatsapp_id" class="w-1/3 px-4 py-2 border rounded bg-gray-700 text-gray-950" required>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            </div>
        </form>
    </div>
</x-app-layout>
