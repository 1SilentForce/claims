<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserApiRequest extends FormRequest
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
        return array(
            "FirstName" => "string|required|min:5|max:50",
            "Name"      => "string|required|min:5|max:30",
            "password"  => "string|max:50|min:5",
            "Email"     => "string|email",
        );
    }
}
