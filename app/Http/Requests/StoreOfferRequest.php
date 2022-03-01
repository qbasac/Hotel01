<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOfferRequest extends FormRequest
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
          'title' => 'required ',
          'discount_percentage' => 'required|Numeric',
          'description' => 'required',
        ];
    }

    public function attributes()
    {
      return [
          'title' => 'título',
          'discount_percentage' => 'Porcentaje del descuento',
          'description' => 'descripción',
      ];
    }
}
