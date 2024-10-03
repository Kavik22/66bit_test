<?php

namespace App\Http\Requests\Footballist;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'surname' => 'required|string',
            'gender_id' => 'nullable|integer',
            'date_of_birth' => 'required|date',
            'team' => 'required|string',
            'country_id' => 'nullable|integer',            
        ];
    }
}
