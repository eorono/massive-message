<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'slack_id' => 'nullable|string|max:255',
            'discord_chat_id' => 'nullable|string|max:255',
            'whatsapp_id' => 'nullable|string|max:255',
            'telegram_user_id' => 'nullable|string|max:255',
        ];
    }
}
