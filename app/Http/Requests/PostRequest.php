<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        return [
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
            // 'keywords' => 'array|nullable',
            // 'keywords.*' => 'nullable|exists:keywords,id',
            // 'albums' => 'array|nullable',
            // 'albums.*' => 'nullable|exists:albums,id',

        ];
    }

    // |mimes:jpeg,jpg,png,gif,svg,webp|max:2048
}
