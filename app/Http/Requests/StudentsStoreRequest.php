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
            'SLastName' => 'required|min:1|max:25',
            'SFirstName' => 'required|min:1|max:25',
            'SMidName' => 'required|min:1|max:25',
            'SBirthDate' => 'required',
            'classes_id' => 'required',
        ];
    }
}
