<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoomRequest extends FormRequest
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
          'name' => 'required ',
          'description' => 'required',
          'price' => 'required|Numeric',
          'beds' => 'required|Numeric',
          'people' => 'required|Numeric ',
          'image' => 'required',

        ];
    }

    public function attributes()
    {
      return [
          'name' => 'nombre',
          'description' => 'descripción',
          'price' => 'precio',
          'beds' => 'cantidad de camas',
          'people' => 'cantidad de personas',
          'image' => 'imagen de fondo',

      ];
    }
}
