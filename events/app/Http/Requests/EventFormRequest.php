<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3',
            'description' => 'required|min:5',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Vous devez entrer un titre',
            'title.min' => 'Vous devez entrer un titre au minimum de :min caracteres',
            'description.required' => 'Vous devez entrer une description',
            'description.min' => 'Vous devez entrer une description au minimum de :min caracteres',

        ];
    }
    
}
