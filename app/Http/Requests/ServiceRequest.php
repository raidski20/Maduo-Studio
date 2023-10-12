<?php

namespace App\Http\Requests;

use App\Models\Service;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServiceRequest extends FormRequest
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
        $service = $this->route('service');
        return [
            'service.name' => [
                'required',
                $service ?
                    Rule::unique(Service::class, 'name')->ignore($service)
                    : Rule::unique(Service::class, 'name'),
                'string',
                'max:250',
                'min:3',
            ],
            'service.description' => [
                'nullable',
            ],
        ];
    }
}
