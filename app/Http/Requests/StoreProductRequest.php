<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'title_uz' => 'nullable|string',
            'title_ru' => 'nullable|string',
            'title_en' => 'nullable|string',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image|max:4048',
            'category_id' => 'required|integer|exists:categories,id', // Ensures category_id is present, is an integer, and exists in categories table
            'sale' => 'nullable|string',
            'stock' => 'nullable',
        ];
    }
}
