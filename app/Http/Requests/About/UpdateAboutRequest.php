<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'title1' => ['required','string','max:255'],
            'title2' => ['required','string','max:255'],
            'image' => ['nullable','image'],
            'description' => ['required','string','max:255'],
        ];
    }
}
