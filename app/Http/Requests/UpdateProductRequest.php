<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
                        	  'name_book' => 'required|min:5|max:255',
                              'author_id' => 'required|exists:authors,id',
                              'entesharat' => 'required|min:5|max:255',
                              'description' => 'required|min:35',
                              'shabak' => 'min:7',
                              'code_book' => 'required|min:7',
                              'motarjem' => 'required|min:5',
                              'main_price' => 'required|min:4',
                              'off_price' => 'min:4',
                              'status' => 'required|numeric|in:0,1',
                              'inventory' => 'required|min:1',
                              'image' => 'file|mimes:jpeg,png,gif,webp|max:5000',            
                              'genre_id' =>'required|min:1|max:100000000|exists:genres,id',
                              'age_id' =>'required|min:1|max:100000000|exists:ages,id',
        ];
    }
}
