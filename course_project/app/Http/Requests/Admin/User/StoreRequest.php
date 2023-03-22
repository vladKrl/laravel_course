<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
            'role' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле обязательное!',
            'name.string' => 'Поле должно соответствовать формату строки!',
            'email.required' => 'Это поле обязательное!',
            'email.email' => 'Поле должно соответствовать формату e-mail!',
            'email.unique' => 'E-mail должен быть уникальным!',
            'password.required' => 'Это поле обязательное!',
            'password.string' => 'Поле должно соответствовать формату строки!',
        ];
    }
}
