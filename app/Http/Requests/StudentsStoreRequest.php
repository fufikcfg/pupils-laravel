<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentsStoreRequest extends FormRequest
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
            'surname' => 'required|min:1|max:25',
            'name' => 'required|min:1|max:25',
            'middleName' => 'required|min:1|max:25',
            'date' => 'required',
            'class' => 'required',
        ];
    }
}
