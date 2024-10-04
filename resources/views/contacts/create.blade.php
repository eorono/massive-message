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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-black border-b border-gray-200">
                    <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <div class="mt-4">
                <label for="name" class="block text-white">Name</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded bg-gray-700 text-gray-950" required>
            </div>
            <div class="mt-4">
                <label for="discord_id" class="block text-white">Discord ID</label>
                <input type="text" name="discord_chat_id" id="discord_chat_id" class="w-full px-4 py-2 border rounded bg-gray-700 text-gray-950" required>
            </div>
            <div class="mt-4">
                <label for="telegram_id" class="block text-white">Telegram ID</label>
                <input type="text" name="telegram_user_id" id="telegram_user_id" class="w-full px-4 py-2 border rounded bg-gray-700 text-gray-950" required>
            </div>
            <div class="mt-4">
                <label for="slack_id" class="block text-white">Slack ID</label>
                <input type="text" name="slack_id" id="slack_id" class="w-full px-4 py-2 border rounded bg-gray-700 text-gray-950" required>
            </div>
            <div class="mt-4">
                <label for="whatsapp_id" class="block text-white">Whatsapp ID</label>
                <input type="text" name="whatsapp_id" id="whatsapp_id" class="w-full px-4 py-2 border rounded bg-gray-700 text-gray-950" required>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
