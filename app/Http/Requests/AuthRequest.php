<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:6|max:20'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Поле "email" обязательно для заполнения',
            'email.email' => 'Некорректный email-адресс',
            'password.required' => 'Поле "пароль" обязательно для заполнения',
            'password.min' => 'Пароль должен состоять минимум из 6 символов',
            'password.max' => 'Пароль должен состоять максимум из 20 символов'
        ];
    }
}
