<?php

namespace App\Http\Requests\Product;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'thumbnail' => ['nullable','image'],
            'name' => ['required','string','max:255'],
            'detail' => ['required','string','max:255'],
            'price' => ['required','numeric'],
            'discount' => ['required','numeric','max:255'],
            'category_id' => ['required','string','max:255'],
            'files' => ['nullable','array'],
            'files.*' =>['nullable','mimes:jpg,png,pdf'],
            'size' => ['required','string'],
            'color' => ['required','string'],
            'total_quantity' => ['required','numeric'],
        ];
    }
}
