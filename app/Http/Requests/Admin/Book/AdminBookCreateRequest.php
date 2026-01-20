<?php

namespace App\Http\Requests\Admin\Book;

use Illuminate\Foundation\Http\FormRequest;

class AdminBookCreateRequest extends FormRequest
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
            "title" => "required",
            "cover" => "required|image|max:2048|mimes:jpg,jpeg,png,gif,webp",
            "year" => "required",
            "description" => "required",
            "category_id" => "required",
            "author_id" => "required"
        ];
    }
}
