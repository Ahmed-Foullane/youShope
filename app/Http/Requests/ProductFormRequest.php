<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->role == "admin";
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',        
            'description' => 'nullable|string|max:1000', 
            'quantity' => 'required|integer|min:1',    
            'price' => 'required|numeric|min:1',     
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ];
    }

    /**
     * Get the custom error messages for validation.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'The product name is required.',
            'name.string' => 'The product name must be a valid string.',
            'name.max' => 'The product name may not be greater than 255 characters.',
            'description.string' => 'The description must be a valid string.',
            'description.max' => 'The description may not be greater than 1000 characters.',
            'quantity.required' => 'The quantity is required.',
            'quantity.integer' => 'The quantity must be an integer.',
            'quantity.min' => 'The quantity must be at least 1.',
            'price.required' => 'The price is required.',
            'price.numeric' => 'The price must be a valid number.',
            'price.min' => 'The price must be at least 1.',
            'image.required' => 'The product image is required.',
            'image.image' => 'The image must be a valid image file.',
            'image.mimes' => 'The image must be of type jpeg, png, jpg, gif, or svg.',
            'image.max' => 'The image may not be greater than 2MB.',
        ];
    }
}
