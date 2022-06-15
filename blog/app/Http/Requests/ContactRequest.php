<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'subject' => 'required|min:5|max:150',
            'name' => 'required|min:3|max:18',
            'email' => 'email:rfc,dns',
            'message' => 'required|min:5|max:500'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле з імʼям є обовʼязковим',
            'name.min' => 'Поле з імʼям є обовʼязковимMIN:3',
            'email' => 'Емеіл повинен буди за прикладом : example@mail.com'


        ];
    }
}
