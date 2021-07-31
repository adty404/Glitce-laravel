<?php

namespace App\Http\Requests\Admin\Destination;

use Illuminate\Foundation\Http\FormRequest;

class DestinationRequest extends FormRequest
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
            'ticket_id' => 'required',
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string|min:50',
            'photo' => 'required|image|mimes:jpeg,jpg,png'
        ];
    }
}
