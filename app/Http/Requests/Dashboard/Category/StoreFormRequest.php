<?php

namespace App\Http\Requests\Dashboard\Category;

use App\Http\Requests\StoreFormRequest as FormRequest;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;

class StoreFormRequest extends FormRequest
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
        // Category::where(['category_id', $request->input('category_id'), 'name' => $request->input]);
        return [
            'name' => ['required']
        ];
    }

    /**
     * Get the "after" validation callables for the request.
     */
    public function after(Request $request): array
    {
        return [
            function (Validator $validator) use ($request) {
                $categoryId = intval($request->input('category_id'));
                $categoryId = $categoryId > 0 ? $categoryId : null;
                $categoryName = trim($request->input('name'));

                if (\App\Models\Dashboard\Category::where([
                    ['category_id', $categoryId],
                    ['name', $categoryName]
                ])->exists()) {
                    $validator->errors()->add(
                        'name',
                        'Such category already exist!'
                    );
                }
            }
        ];
    }

    /**
     * Handle a passed validation attempt.
     */
    protected function passedValidation(): void
    {
        if ($this->input('category_id') == '0') {
            $this->remove('category_id');
        }
    }

}
