<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EshowcaseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name_en' => 'required|string|max:255',
            'name_bn' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_bn' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_images' => 'required|array',
            'product_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'name_en.required' => 'The English name is required.',
            'name_bn.required' => 'The Bangla name is required.',
            'description_en.required' => 'The English description is required.',
            'description_bn.required' => 'The Bangla description is required.',
            'price.required' => 'The price is required.',
            'image.required' => 'The image is required.',
            'product_images.required' => 'The product images are required.',
            'product_images.*.image' => 'Each product image must be an image file.',
            'product_images.*.mimes' => 'Each product image must be a file of type: jpeg, png, jpg, gif, svg.',
            'product_images.*.max' => 'Each product image must not be greater than 2048 kilobytes.',
        ];
    }
}
