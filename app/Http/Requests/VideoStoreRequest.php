<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:20',
            'zip' => 'required|numeric',
            'tags' => 'required',
            //'g-recaptcha-response' => 'required|recaptcha:video'
        ];
    }
}
