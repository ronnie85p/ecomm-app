<?php

namespace App\Http\Requests\Dashboard\Category;

use App\Http\Requests\UpdateFormRequest as FormRequest;
use Illuminate\Http\Request;

class UpdateFormRequest extends FormRequest
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
            'name' => ['required']
        ];
    }

    /**
     * Handle a passed validation attempt.
     */
    protected function passedValidation(): void
    {
        if ($this->input('category_id') == '0') {
            $this->merge(['category_id', null]);
        }
    }
}
