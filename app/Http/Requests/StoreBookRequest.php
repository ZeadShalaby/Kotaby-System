<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'author_name' => 'required|string|max:255',
            'title' => 'required|string|unique:books,title|max:255',
            'language' => 'required|in:ar,en', //? Assuming you are only accepting 'ar' or 'en'
            'num_pages' => 'required|integer|min:1', //? Ensure num_pages is at least 1
            'dep_id' => 'required|exists:departments,id',
            'locations' => 'required|string|max:255', //? Assuming locations is a string
            'description' => 'required|string|min:50|max:1000', //? Fixed min and max
            'bookCover' => 'required|mimes:jpg,png,jpeg|max:2048', //? Corrected validation for image files
            'bookFile' => 'required|max:2048', //? Corrected validation for document files   mimes:pdf,ppt,doc,docx    
        ];
    }
}
