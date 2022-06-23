<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class insertVehiculeRequest extends FormRequest
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
            'owner' => ['required', 'string', 'max:100'],
            'owner_mail' => ['required', 'string', 'max:100'],
            'brand' => ['required', 'string', 'max:100'],
            'model' => ['required', 'string', 'max:100'],
            'type_id' => ['required', 'numeric', 'min:0'],
            'horsepower' => ['required', 'numeric', 'min:0'],
            'color' => ['required', 'string', 'max:7']
        ];
    }
}
