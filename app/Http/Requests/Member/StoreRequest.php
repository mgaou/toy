<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
            'firstname'=>'required',
            'lastname'=>'required',
            'gender'=>'required',
            'phone'=>'required',
            'adress'=>'required',
            'category_id'=>'required|exists:categories,id'
        ];
    }
}
