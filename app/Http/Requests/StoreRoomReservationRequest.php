<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoomReservationRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'room_type' => 'required',
            'quantity_adults' => 'required',
            'reservation_start_date' => 'required',
            'reservation_end_date' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'su nombre',
            'email' => 'su correo electrónico',
            'phone' => 'su número móvil',
            'room_type' => 'habitación',
            'quantity_adults' => 'Adultos',
            'reservation_start_date' => 'inicio de la reserva',
            'reservation_end_date' => 'fin de la reserva',
        ];
    }

}
