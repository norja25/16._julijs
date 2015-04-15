<?php namespace Modelbook\Http\Requests;

use Modelbook\Http\Requests\Request;

class UserRequest extends Request {

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
            'user_firstname' => 'required|min:3|max:255',
            'user_lastname' => 'required|min:3|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'user_phone' => 'required|max:255|unique:users',
           ];
    }

}
