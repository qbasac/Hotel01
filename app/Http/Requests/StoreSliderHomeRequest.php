<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSliderHomeRequest extends FormRequest
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
          'sub_title' => 'required',
          'title' => 'required',
          'description' => 'required',
        ];
    }

    public function attributes()
    {
      return [
        'sub_title' => 'título',
        'title' => 'título',
        'description' => 'descripción',
      ];
    }
}
