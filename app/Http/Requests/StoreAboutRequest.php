<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAboutRequest extends FormRequest
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
            'about_title'=>'requerid',
            'about_description'=>'requerid',
            'about_imagen'=>'requerid',
            'about_sub_imagen'=>'requerid',
        ];
    }

    public function Atributes()
    {
        return [
            'about_title'=>'título',
            'about_description'=>'descripción',
            'about_imagen'=>'imagen 1',
            'about_sub_imagen'=>'imagen 2',
        ];
    }

}
