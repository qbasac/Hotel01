<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
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
            'image' => 'mimes:jpg,png',
            'name' => 'required',
            'description' => 'required',
            'date_event' => 'required',
            'star_time' => 'required',
            'time_completion' => 'required',
            'place_celebration' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre',
            'description' => 'descripción',
            'date_event' => 'fecha del evento',
            'star_time' => 'hora de inicio',
            'time_completion' => 'tiempo de finalización ',
            'place_celebration' => 'lugar de celebración'
        ];
    }
}
