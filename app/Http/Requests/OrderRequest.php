<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'destination_id' => 'nullable|numeric',
            'payment_id' => 'nullable|numeric',
            'payment_slip_id' => 'nullable|numeric',
            'status_id' => 'nullable|numeric',
            'order_number' => 'nullable|max:50',
            'name' => 'required|max:255',
            'id_card' => 'required|numeric',
            'email' => 'required|email',
            'phone_number' => 'required|numeric'
        ];
    }
}
