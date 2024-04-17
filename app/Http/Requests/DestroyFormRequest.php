<?php

namespace App\Http\Requests;

use App\Exceptions\FormRequestTableNotFoundException;
use Illuminate\Validation\Rule;

abstract class DestroyFormRequest extends FormRequest
{
    protected string $table = '';

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array
     */
    public function validationData(): array
    {
        return array_merge($this->request->all(), [
            'id' => $this->route()->parameter('id'),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     * @throws FormRequestTableNotFoundException
     */
    public function rules(): array
    {
        if (!$this->table) {
            throw new FormRequestTableNotFoundException;
        }

        return [
            'id' => [
                'required',
                Rule::exists($this->table, 'id')
            ]
        ];
    }
}