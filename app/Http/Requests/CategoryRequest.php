<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|max:15|min:3|unique:categories'
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Category Name was empty." ,
            "name.max" => "Category Name was too long." ,
            "name.min" => "Category Name was too short." ,
            "name.unique" => "Category Name wad added."
        ];
    }
}
