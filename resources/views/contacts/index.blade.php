<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Contacts') }}
            </h2>
            <a href="{{ route('contacts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Contact</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-black">
                    <div class="min-w-full align-middle">
                        <table class="min-w-full divide-y divide-black-200 border">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 bg-black-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-white uppercase tracking-wider">Name</span>
                                </th>
                                <th class="px-6 py-3 bg-black-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-white uppercase tracking-wider">Telegram</span>
                                </th>
                                <th class="px-6 py-3 bg-black-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-white uppercase tracking-wider">Whatsapp</span>
                                </th>
                                <th class="px-6 py-3 bg-black-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-white uppercase tracking-wider">Discord</span>
                                </th>
                                <th class="px-6 py-3 bg-black-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-white uppercase tracking-wider">Slack</span>
                                </th>
                                <th class="px-6 py-3 bg-black-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-white uppercase tracking-wider">Action</span>
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                            @foreach($contacts as $contact)
                                <tr class="bg-white">
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $contact->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $contact->telegram_user_id }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $contact->whatsapp_id }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $contact->discord_chat_id }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $contact->slack_id }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 ml-2">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
