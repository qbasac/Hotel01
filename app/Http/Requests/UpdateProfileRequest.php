<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
      'avatar' => '|image',
      'email' => 'required|email|unique:users,email,'.auth()->user()->id,
      'current_password' => 'required_if:is_change_password,1',
      'new_password' => 'required_if:is_change_password,1',
      'new_confirm_password' => 'required_if:is_change_password,1',
    ];
  }

  public function attributes()
  {
    return [
      'current_password' => 'Contraseña actual',
      'new_password' => 'Nueva contraseña',
      'new_confirm_password' => 'Confirmar contraseña',
      'is_change_password' => 'Cambiar contraseña',
    ];
  }

  public function messages()
  {
    return [
      'current_password.required_if' => ':attribute es requerido para cambiar la contraseña',
      'new_password.required_if' => ':attribute es requerido para cambiar la contraseña',
      'new_confirm_password.required_if' => ':attribute es requerido para cambiar la contraseña',
    ];
  }
}
