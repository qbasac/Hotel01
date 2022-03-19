<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePricesRequest extends FormRequest
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
      'price' => 'required',
      'date' => 'required',
      'image' => 'mimes:jpg,png',
      'description' => 'required'
    ];
  }

  public function attributes()
  {
    return [
      'price' => 'precio',
      'date' => 'fecha',
      'description' => 'descripción'
    ];
  }
}
