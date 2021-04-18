<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'min:6',
                'max:32',
                'required'
            ],
            'email' => [
                'required',
                'email',
                'max:64',
                Rule::unique('users', 'email')
            ],
            'password' => [
                'required',
                'max:10',
                'min:6',
            ],
        ];
    }
}
