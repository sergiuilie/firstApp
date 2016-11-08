<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'id' => 'required|exists:users,id',
            'name' => 'required|min:6|max:128',
            'email' => 'required|email|max:64|unique:users,email,' . $this->id, ',id',
            'password' => 'min:8|confirmed'
        ];
    }

}
