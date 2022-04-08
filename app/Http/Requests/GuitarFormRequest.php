<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuitarFormRequest extends FormRequest
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
            'guitarName' => 'required',
            'brand' => 'required',
            'yearMade' => ['required','integer']
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'guitarName' => strip_tags($this['guitarName']),
            'brand' => strip_tags($this['brand']),
            'yearMade' => strip_tags($this['yearMade'])
        ]);
    }
}
