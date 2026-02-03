<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
   public function rules(): array
{
    return [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email'],
        'avatar' => ['nullable', 'image', 'max:2048'],
        'password' => [
            'nullable',
            'confirmed',
            Password::min(8),
        ],

     'nik' => [
    'nullable',
    'digits:16',
    Rule::unique('users', 'nik')->ignore($this->user()->id),
],
        'tanggal_lahir' => ['nullable', 'date'],
    ];
}
}
