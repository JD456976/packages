<?php

namespace App\Http\Requests;

use App\Models\Video;
use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Http\FormRequest;

class VideoUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'zip' => ['required', 'numeric'],
        ];
    }
}
