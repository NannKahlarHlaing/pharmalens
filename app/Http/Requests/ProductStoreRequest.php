<?php

namespace App\Http\Requests;

use App\Enums\Category;
use App\Enums\ProductType;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name_en' => 'required',
            'name_mm' => 'required',
            'category' => [new Enum(Category::class)],
            'trading' => [new Enum(ProductType::class)],
            'image' => 'required',
        ];
    }
}
