<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return auth()->user()->role == 'admin';
    }

    
    public function rules(): array
    {
        return [
            'title_uz' => 'required|string',
            'title_ru' => 'required|string',
            'title_en' => 'required|string',
            'description_uz' => 'required|string',
            'description_ru' => 'required|string',
            'description_en' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ];
    }
}
