<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfesoreRequest extends FormRequest
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
            //
            'name' =>'required|max:15',
            'biografia' => 'required|min:10', 
            'telefono' => 'required',
            'grado_id' => 'required'

        ];
    }

    public function messages()
    {
        return[
            'biografia.required' => 'Debe ingresar la biografia'
        ];
    }
}
