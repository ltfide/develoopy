<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class StoreDashboardRequest extends FormRequest
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
            "title" => "required|max:255",
            "image" => "image|file|max:2048",
            "body" => "required",
            "category_id" => "required"
        ];

    }
}
