<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInfoRequest extends FormRequest
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
            'phone' => 'required|max:255',
            'email' => 'required|max:255',
            'address' => 'required|max:255',
            'facebook' => 'required|max:255',
            'youtube' => 'required|max:255',
            'twitter' => 'required|max:255',
            'footer_text' => 'required|max:255',
        ];
    }
}
