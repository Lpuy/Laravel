<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GoodsFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required','min:3'],
            'object' => ['required', 'min:3'],
            'text' => ['required', 'min:5'],
            'amount' => ['int'],
            'price' => ['required','numeric'],
            'image' => ['mimes:jpeg,png,bmp', 'dimensions:min_width=500, min_height=300'],
        ];
    }
}
