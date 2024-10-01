<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
  
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
            'category_id' => 'required|integer|exists:categories,id',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'cover_image' => 'nullable|file|image|mimes:jpg,jpeg,png',
            'description' => 'required|string',
        ];
    }
}
