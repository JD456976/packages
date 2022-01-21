<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AdminVideoUpdateRequest extends FormRequest
{
    public function authorize()
    {
        if (Auth::user()->is_admin == 1)
            return true;
        else
        {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'zip' => 'required',
            'slug' => 'required',
        ];
    }
}
