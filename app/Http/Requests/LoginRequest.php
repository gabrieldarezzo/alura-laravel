<?php

namespace estoque\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class LoginRequest extends FormRequest{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return [
             'email'        => 'required|min:3'
            ,'password'     => 'required'            
        ];
    }

    public function messages(){
        return [
            'required'=> 'O :attribute é obrigatório!'
        ];

    }


}
