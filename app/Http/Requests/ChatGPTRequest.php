<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChatGPTRequest extends FormRequest
{
    /**
     * Determines if the user has rights to this request
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Returns an array of given rules
     *
     * @return array
     */
    public function rules() {
        return [
            'prompt' => [
                'min:1',
                'max:100',
            ],
        ];
    }

    /**
     * Returns an array of error messages for the given rules
     *
     * @return array
     */
    public function messages() {
        return [
            'required' => 'The «:attribute» field is required',
            'unique' => 'This «:attribute» field value is already in use',
            'min' => [
                'string' => 'The «:attribute» must be at least :min characters',
                'integer' => 'The «:attribute» must be at least :min',
            ],
            'max' => [
                'string' => 'The «:attribute» must be no more than :max characters',
            ],
        ];
    }

    /**
     * Returns an array of user-friendly field names
     *
     * @return array
     */
    public function attributes() {
        return [
            'prompt' => 'message to ChatGPT'
        ];
    }

}
