<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateSupport extends FormRequest
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
        //the rules can be a string with a pipe separator or an array, as shown bellow:
        $rules = [
            'subject' => 'required|min:3|max:255|unique:supports',
            'body' => [
                'required',
                'min:3',
                'max:10000'
            ]
        ];

        if ($this->method() == 'PUT') {
            //'unique:supports,subject,{$this->id},id' : unique within the subject column in the supports table, except if {$this->id} == id. Watch out for spaces, they're now allowed after each comma.
            //the same id being done with Rule::unique('supports')->ignore($this->id).
            $rules['subject'] = [
                'required',
                'min:3',
                'max:255',
                //"unique:supports,subject,{$this->id},id"
                Rule::unique('supports')->ignore($this->id)
            ];
        }

        return $rules;
    }
}
