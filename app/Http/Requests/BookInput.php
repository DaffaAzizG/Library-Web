<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookInput extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'Book_id' => 'required|string|max:150',
            'Book_name' => 'required|string|max:150',
            'Publisher' => 'required|string|max:150',
            'Publishion' => 'required|date|max:150',
            'Author' => 'required|string|max:150',
        ];
    }

    public function messages()
    {
        return [
            'Book_id.required' => 'Book ID is required.',
            'Book_name.required' => 'Book Name is required.',
            'Publisher.required' => 'Publisher is required.',
            'Publishion.required' => 'Publishion Date is required.',
            'Author.required' => 'Author is required.',
        ];
    }
}
