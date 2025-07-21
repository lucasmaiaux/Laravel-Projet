<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

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
            'img_url' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|gt:0',
        ];
    }

    public function messages(): array
    {
        return [
            'img_url.required' => 'An Image URL is required',
            'name.required' => 'A name is required',
            'description.required' => 'A description is required',
            'price.required' => 'A price is required',
            'price.numeric' => 'Price must be a number',
            'price.gt' => 'Price must be a positive number'
        ];
    }
}
