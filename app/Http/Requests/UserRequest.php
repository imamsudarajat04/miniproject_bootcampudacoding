<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if(in_array($this->method(), ['PUT', 'PATCH'])) {
            $return = [
                'name'             => 'required|regex:/^[\pL\s\-]+$/u',
                'email'            => 'required|email|unique:users,email,' . Auth::user()->id,
                'password'         => 'required|same:confirm_password',
                'confirm_password' => 'required',
                'phone'            => 'required',
                'address'          => 'required',
                'role'             => 'required',
            ];
        }else{
            $return = [
                'name'             => 'required|regex:/^[\pL\s\-]+$/u',
                'email'            => 'required|email|unique:users,email',
                'password'         => 'required|same:confirm_password',
                'confirm_password' => 'required',
                'phone'            => 'required',
                'address'          => 'required',
                'role'             => 'required',
            ];
        }

        return $return;
    }
}
