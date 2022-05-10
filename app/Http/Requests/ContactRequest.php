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
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:3|max:50',
            'message' => 'required|min:15|max:500'
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Ім\'я',
        ];
    }
    public function messages()
    {
        return [
            '*.required'=>'Поле ":attribute" являється обов\'язковим',
            /*'name.required' => 'Поле являється обов`язковим',
            'email.email' => 'Да що з тобою не так',
            'subject.min' => 'Да ти можеш написати чи ні',*/
        ];
    }
}
