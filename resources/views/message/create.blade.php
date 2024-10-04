<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Massive Message') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-black border-b border-gray-200">
                    <form method="POST" action="{{ route('send.notification') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-white">Ids (this is not required)</label>
                            <input id="ids" class="block mt-1 w-full" type="text" name="ids" autofocus />
                        </div>

                        <!-- Email -->
                        <div class="mt-4">
                            <label for="message" class="block text-white">Message</label>
                            <input id="message" class="block mt-1 w-full" type="message" name="message" required/>
                        </div>

                        <!-- Contact Type -->
                        <div class="mt-4">
                            <label for="contact_type" class="block text-white">Platform</label>
                            <select id="platform" name="platform" class="block mt-1 w-full">
                                <option value="telegram">Telegram</option>
                                <option value="slack">Slack</option>
                                <option value="whatsapp">Whatsapp</option>
                                <option value="discord">Discord</option>
                            </select>
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
