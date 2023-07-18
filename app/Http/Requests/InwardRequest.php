<?php

namespace App\Http\Requests;

use App\Rules\ValidateAllowVehicle;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class InwardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(Request $request): array
    {

        $validation=[];
        $validation['office_id'] = ['required',new ValidateAllowVehicle('office_id')];
        $validation['vehicle_id'] = ['required',new ValidateAllowVehicle('vehicle_id')];
        return $validation;
    }
}
