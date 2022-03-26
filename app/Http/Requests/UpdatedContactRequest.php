<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatedContactRequest extends FormRequest
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
            'direction_map' => 'required',
            'direction' => 'required',
            'phone' => 'required',
            'email' => 'required|email'
        ];
    }

    public function attributes()
    {
        return[
            'direction_map' => 'Dirección en mapa',
            'direction' => 'dirección',
            'phone' => 'Teléfono',
            'email' => 'correo'
        ];
    }
}
