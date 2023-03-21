<?php

namespace App\Http\Requests\Admin\Author;

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
            'fullname' => 'required|string',
            'birth_country' => 'required|string',
            'birthday' => 'required|date',
            'deathday' => 'exclude_without:deathday|date',
            'image' => 'exclude_without:image|file',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Это поле обязательное!',
            'fullname.string' => 'Поле должно соответствовать формату строки!',
            'birth_country.required' => 'Это поле обязательное!',
            'birth_country.string' => 'Поле должно соответствовать формату строки!',
            'birthday.required' => 'Это поле обязательное!',
            'birthday.date' => 'Поле должно соответствовать формату даты!',
            'deathday.date' => 'Поле должно соответствовать формату даты!',
            'image.file' => 'Поле должно соответствовать формату файла!',
        ];
    }
}
