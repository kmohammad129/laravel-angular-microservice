<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "first_name"         => "required" ,
            "last_name"          => "required" ,
            "email"              => "required|email" ,
            "password"           => "required",
            "password_confirm"   => "required|same:password",
        ];
    }
}
