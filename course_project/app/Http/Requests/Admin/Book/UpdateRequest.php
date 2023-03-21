<?php

namespace App\Http\Requests\Admin\Book;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'short' => 'required|string',
            'author_id' => 'required',
            'genre_id' => 'required',
            'image' => 'exclude_without:image|file',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле обязательное!',
            'title.string' => 'Поле должно соответствовать формату строки!',
            'short.required' => 'Это поле обязательное!',
            'short.string' => 'Поле должно соответствовать формату строки!',
            'author_id.required' => 'Это поле обязательное!',
            'genre_id.required' => 'Это поле обязательное!',
            'image.file' => 'Поле должно соответствовать формату файла!',
        ];
    }
}
